<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SobreNosController extends Controller
{
    public function index(){

        $products = Product::count();
        $users = User::count();
        $orders = Order::count();

    

        return Inertia::render('User/SobreNos', [
            'products' => $products,
            'users' => $users,
            'orders' => $orders,
        ]);
    }


    public function contato(){
        return Inertia::render('User/Contact');
    }
}
