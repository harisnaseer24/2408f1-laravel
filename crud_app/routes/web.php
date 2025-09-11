<?php

use App\Http\Controllers\Products;
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

Route::get('/', [Products::class,"index"]);

Route::get('/createproduct', [Products::class,"createProduct"]);
Route::post('/createproduct', [Products::class,"addProduct"]);
Route::get('/deleteproduct/{id}', [Products::class,"deleteProduct"]);
Route::get('/editproduct/{id}', [Products::class,"editProduct"]);
Route::post('/editproduct', [Products::class,"updateProduct"]);
Route::get('/search', [Products::class,"searchProduct"]);
