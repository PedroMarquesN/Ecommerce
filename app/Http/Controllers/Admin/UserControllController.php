<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserControllController extends Controller
{
    public function index (){
        return Inertia::render('Admin/ControlUser/Index');
    }
    public function detail (){
        return Inertia::render('Admin/ControlUser/UserDetail');
    }
}
