<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('admin.order.list-order');
    }
    public function AddOrder()
    {
        return view('admin.order.add-order');
    }
}
