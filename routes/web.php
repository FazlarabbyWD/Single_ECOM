<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SubcategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/admin/dashboard', 'index')->name('admin.dashboard');
    });
});
Route::middleware(['auth'])->group(function () {
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/category/list', 'index')->name('category.list');
        Route::get('/category/add', 'AddCategory')->name('category.add');
    });
});

Route::middleware(['auth'])->group(function () {
    Route::controller(SubcategoryController::class)->group(function () {
        Route::get('/subcategory/list', 'index')->name('subcategory.list');
        Route::get('/subcategory/add', 'AddSubCategory')->name('subcategory.add');
    });
});
Route::middleware(['auth'])->group(function () {
    Route::controller(ProductController::class)->group(function () {
        Route::get('/product/list', 'index')->name('product.list');
        Route::get('/product/add', 'AddProduct')->name('product.add');
    });
});
Route::middleware(['auth'])->group(function () {
    Route::controller(OrderController::class)->group(function () {
        Route::get('/order/list', 'index')->name('order.list');
    });
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
