<?php

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
    return view('welcome');
});


Route::get("/company",['App\Http\Controllers\website\CompanyController'::class,'index'])->name(name:'company.index');

Route::get("/update/{id}",['App\Http\Controllers\website\CompanyController'::class,'updatee'])->name(name:'update.show');

Route::get("/dalete/{id}",['App\Http\Controllers\website\CompanyController'::class,'delete'])->name(name:'delete.show');



Route::get("/product",['App\Http\Controllers\website\ProductController'::class,'index'])->name(name:'product.index');

Route::get("/update/{id}",['App\Http\Controllers\website\ProductController'::class,'update'])->name(name:'updatePro.show');

Route::get("/dalete/{id}",['App\Http\Controllers\website\ProductController'::class,'delete'])->name(name:'deletePro.show');




