<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('backend.master');
});
Route::prefix('products')->group(function (){
    Route::get('/index',[ProductController::class,"index"])->name('products.index');
    Route::get('/{id}/destroy',[ProductController::class,"destroy"])->name('products.destroy');
    Route::get('/{id}/show',[ProductController::class,"show"])->name('products.show');
    Route::get('/create',[ProductController::class,"create"])->name('products.create');
    Route::post('/create',[ProductController::class,"store"])->name('products.store');
    Route::post('{id}/update',[ProductController::class,"update"])->name('products.update');
    Route::get('{id}/update',[ProductController::class,"edit"])->name('products.edit');
});


Route::prefix('category')->group(function () {
    Route::get('category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('{id}/detail', [CategoryController::class, 'show'])->name('category.detail');
    Route::get('{id}/delete', [CategoryController::class, 'destroy'])->name('category.destroy');
    Route::get('{id}/update', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('{id}/update', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/create', [CategoryController::class, 'store'])->name('category.store');
});

