<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class AdminController extends Controller
{
    public function index()
   
{
    $users = User::with('role')->get();
    return view('admin.index', compact('users'));
}

    public function products()
    {
        $products = Product::all();
        return view('layouts.admin.products.index', compact('products'));
    }
}
