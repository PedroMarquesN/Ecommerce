<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RelatoryController extends Controller
{
    public function index(){
        return Inertia::render('Admin/Relatory/Index');
    }
}
