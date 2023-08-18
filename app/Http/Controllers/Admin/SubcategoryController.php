<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function index(){
        return view('admin.subcategory.list-subcategory');
    }
    public function AddSubCategory(){
        return view('admin.subcategory.add-subcategory');
    }
}
