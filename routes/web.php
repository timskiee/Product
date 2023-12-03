<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;


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

Route::get('/', [ProductController::class, 'index'])->name('product.index');
Route::get('/create', [ProductController::class, 'create']);
Route::post('/create', [ProductController::class, 'store'])->name('store.post');


Route::get('/category-create', [CategoryController::class, 'create']);

Route::post('/category-create', [CategoryController::class, 'store'])->name('category.store.post');



Route::get('/category', [CategoryController::class, 'show']);
// ...

Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
// Add this to your web.php file
Route::delete('/category/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
Route::get('/category-edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');



// ...
