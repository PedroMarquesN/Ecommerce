<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\GraphicsController;
use App\Http\Controllers\Admin\PedidosController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RelatoryController;
use App\Http\Controllers\Admin\UserControllController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\ProductListController;
use App\Http\Controllers\User\SobreNosController;
use App\Http\Controllers\User\UserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// User Routes
Route::get('detail',[ProductListController::class,'detail'])->name('product.detail');
Route::get('/', [UserController::class,'index'])->name('user.home');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //chekcout 
    Route::prefix('checkout')->controller(CheckoutController::class)->group((function()  {
        Route::post('order','store')->name('checkout.store');  
        Route::get('success','success')->name('checkout.success');
        Route::get('cancel','cancel')->name('checkout.cancel');
    }));
  
});
//end


//add to cart
Route::prefix('cart')->controller(CartController::class)->group(function(){
    Route::get('view','view')->name('cart.view');
    Route::post('store/{product}','store')->name('cart.store');
    Route::patch('update/{product}','update')->name('cart.update');
    Route::delete('delete/{product}','delete')->name('cart.delete');
});
//end


//Routes Info
Route::prefix('info')->controller(SobreNosController::class)->group(function (){
    Route::get('/', 'index')->name('sobre.index');
    Route::get('contato', 'contato')->name('contato.contato');

});
//END





//router product list and filter
Route::prefix('products')->controller(ProductListController::class)->group(function(){
    Route::get('/','index')->name('products.index');
});
//end





Route::group(['prefix' => 'admin', 'middleware' => 'redirectAdmin'], function(){
    Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [AdminAuthController::class, 'login'])->name('admin.login.post');
    Route::post('login', [AdminAuthController::class, 'logout'])->name('admin.logout');
});



Route::middleware(['auth','admin'])->prefix('admin')->group(function(){
    Route::get('dashboard', [AdminController::class,'index'])->name('admin.dashboard');
    
    //routes Pedidos 
    Route::get('orders',[PedidosController::class,'index'])->name('order.index');
    //end
    // detail routes

    Route::get('detail', [UserControllController::class,'index'])->name('detail.index');
    Route::get('detail/user', [UserControllController::class, 'detail'])->name('user.detail');
    //end
    //Routes Graphics
    Route::get('graphics',[GraphicsController::class,'index'])->name('graphic.index');
    Route::get('graphic/pie',[GraphicsController::class,'pie'])->name('graphic.pie');
    Route::get('graphic/bar',[GraphicsController::class,'bar'])->name('graphic.bar');
    //End 
    //Routes Relatorios
    Route::get('relatory',[RelatoryController::class,'index'])->name('relatory.index');
    //end
    
    
    //produtos routes
    Route::get('products' , [ProductController::class, 'index'])->name('admin.products.index');
    Route::post('products/store', [ProductController::class, 'store'])->name('admin.products.store');
    Route::put('products/update', [ProductController::class, 'update'])->name('admin.products.update');
    Route::delete('products/image/{id}', [ProductController::class, 'deleteImage'])->name('admin.products.image.delete');
    Route::delete('products/destroy/{id}', [ProductController::class, 'destroy'])->name('admin.products.destroy');
    //end
   
});





require __DIR__.'/auth.php';
