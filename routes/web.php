<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function() {
    $product = Product::all();
    return view('welcome', compact('product'));
});

Route::get('/deals', function() {
    $product = Product::all();
    return view('deals', compact('product'));
});

Route::view('/about', 'about')->name('about');

Route::get('/dashboard', function () {
    $pro = Product::all();
    $user = User::all();
    return view('dashboard', compact('pro', 'user'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Admin Menu
Route::get('admin/product/index',[ProductController::class, 'index'])->name('admin.product');
Route::get('admin/product/create',[ProductController::class, 'create'])->name('admin.create');

// Product
Route::post('admin/product/insert',[ProductController::class, 'insertProduct'])->name('insertProduct');
Route::get('admin/product/delete/{id}',[ProductController::class, 'delete']);
Route::get('admin/product/edit/{id}',[ProductController::class, 'edit']);
Route::post('admin/product/update/{id}',[ProductController::class, 'update']);