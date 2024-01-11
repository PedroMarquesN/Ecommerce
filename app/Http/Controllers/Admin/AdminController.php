<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminController extends Controller
{
    public function index(){
        $products = Product::count();
        $users = User::count();
        $orders = Order::count();
        return Inertia::render('Admin/Components/Dashboard', [
            'admin'=>'admin',
            'products' => $products,
            'users' => $users,
            'orders' => $orders,
        ]);
    }
}
