<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashBoardController;
use App\Http\Controllers\CategoryCOntroller;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', [AdminDashBoardController::class, 'index'])->name('dashboard');

    Route::get('/category-index', [CategoryCOntroller::class,'index'])->name('category.index');
    Route::post('/category-create', [CategoryController::class, 'createCategory']);
    Route::get('/fetch-category', [CategoryController::class, 'fetchCategory']);
    Route::get('/edit-category', [CategoryController::class, 'editCategory']);
    Route::post('/update-category/{id}', [CategoryController::class, 'updateCategory']);
//    Route::get('/category/delete/{id}', [CategoryController::class, 'delete']);

    Route::get('/brand/manage', [BrandController::class,'index'])->name('brand.index');
    Route::post('/brand/create', [BrandController::class, 'create'])->name('brand.create');
    Route::get('/brand/edit/{id}', [BrandController::class, 'edit'])->name('brand.edit');
    Route::post('/brand/update/{id}', [BrandController::class, 'update'])->name('brand.update');
    Route::get('/brand/delete/{id}', [BrandController::class, 'delete'])->name('brand.delete');

    Route::get('/unit/manage', [UnitController::class,'index'])->name('unit.index');
    Route::post('/unit/create', [UnitController::class, 'create'])->name('unit.create');
    Route::get('/edit-unit/{id}', [UnitController::class, 'editunit'])->name('unit.edit');
    Route::post('/unit/update/{id}', [UnitController::class, 'update'])->name('unit.update');
    Route::get('/unit/delete/{id}', [UnitController::class, 'delete'])->name('unit.delete');

    Route::get('/supplier/manage', [UnitController::class,'index'])->name('supplier.index');
    Route::post('/supplier/create', [UnitController::class, 'create'])->name('supplier.create');
    Route::get('/supplier/edit/{id}', [UnitController::class, 'edit'])->name('supplier.edit');
    Route::post('/supplier/update/{id}', [UnitController::class, 'update'])->name('supplier.update');
    Route::get('/supplier/delete/{id}', [UnitController::class, 'delete'])->name('supplier.delete');

    Route::resource('product', ProductController::class);
    Route::resource('supplier', SupplierController::class);

});
