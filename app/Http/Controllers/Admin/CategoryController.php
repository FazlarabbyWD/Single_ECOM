<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.list-category');
    }
    public function AddCategory(){
        return view('admin.category.add-category');
    }
}
