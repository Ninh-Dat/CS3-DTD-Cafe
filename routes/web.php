<?php

use App\Http\Controllers\CategoryController;
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

Route::get('category',[CategoryController::class,'index'])->name('category.index');
Route::get('{id}/detail',[CategoryController::class,'show'])->name('category.detail');
Route::get('{id}/delete',[CategoryController::class,'destroy'])->name('category.destroy');
Route::get('{id}/update',[CategoryController::class,'edit'])->name('category.edit');
Route::post('{id}/update',[CategoryController::class,'update'])->name('category.update');
Route::get('/create',[CategoryController::class,'create'])->name('category.create');
Route::post('/create',[CategoryController::class,'store'])->name('category.store');
