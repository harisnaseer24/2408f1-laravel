<?php

use App\Http\Controllers\Product;
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

Route::get('/', [Product::class,"welcome"]);
Route::get('/about', [Product::class,"about"]);

Route::get('/products', [Product::class,'index']);
Route::get('/addproduct', [Product::class,'addProduct']);
