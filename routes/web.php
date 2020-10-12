<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::resource('products', ProductController::class)->except([
    'edit', 'show', 'destroy'
]);
Route::get('products/{product:slug}', [ProductController::class, 'show']);
Route::get('products/{product:slug}/edit', [ProductController::class, 'edit']);
Route::delete('products/{product:slug}', [ProductController::class, 'destroy'])->name('products.destroy');
