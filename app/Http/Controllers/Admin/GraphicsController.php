<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class GraphicsController extends Controller
{
    public function index(){
        return Inertia::render('Admin/Graphics/Index');
    }
    public function pie(){
        return Inertia::render('Admin/Graphics/PieChart');
    }

    public function bar(){
        return Inertia::render('Admin/Graphics/BarChart');
    }
}
