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

Route::prefix('/types')->group(function(){
    // Route read (lấy dữ liệu từ database)
    Route::get('/', [\App\Http\Controllers\FieldTypeController::class, 'index'])->name('types.index');
// Route hiển thị form thêm dữ liệu lên database
    Route::get('/create', [\App\Http\Controllers\FieldTypeController::class, 'create'])->name('types.create');
// Route đẩy dữ liệu lên database
    Route::post('/create', [\App\Http\Controllers\FieldTypeController::class, 'store'])->name('types.store');
// Route lấy dữ liệu từ database về form edit
    Route::get('/{id}/edit', [\App\Http\Controllers\FieldTypeController::class, 'edit'])->name('types.edit');
// Route update dữ liệu lên database
    Route::put('/{id}/edit', [\App\Http\Controllers\FieldTypeController::class, 'update'])->name('types.update');
    // Route delete dữ liệu từ database
    Route::delete('/{id}/delete', [\App\Http\Controllers\FieldTypeController::class, 'destroy'])->name('types.destroy');
});

Route::prefix('/fields')->group(function(){
        // Route read (lấy dữ liệu từ database)
        Route::get('/', [\App\Http\Controllers\FieldController::class, 'index'])->name('fields.index');
// Route hiển thị form thêm dữ liệu lên database
        Route::get('/create', [\App\Http\Controllers\FieldController::class, 'create'])->name('fields.create');
// Route đẩy dữ liệu lên database
        Route::post('/create', [\App\Http\Controllers\FieldController::class, 'store'])->name('fields.store');
// Route lấy dữ liệu từ database về form edit
        Route::get('/{id}/edit', [\App\Http\Controllers\FieldController::class, 'edit'])->name('fields.edit');
// Route update dữ liệu lên database
        Route::put('/{id}/edit', [\App\Http\Controllers\FieldController::class, 'update'])->name('fields.update');
        // Route delete dữ liệu từ database
        Route::delete('/{id}', [\App\Http\Controllers\FieldController::class, 'destroy'])->name('fields.destroy');
});
