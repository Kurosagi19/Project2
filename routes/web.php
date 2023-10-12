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

Route::prefix('/admin')->group(function(){
    Route::get('/login', [\App\Http\Controllers\AdminController::class, 'login'])->name('admin.login');
    Route::post('/loginProcess', [\App\Http\Controllers\AdminController::class, 'loginProcess'])->name('admin.loginProcess');
    Route::get('/', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
    Route::get('/fields', [\App\Http\Controllers\FieldController::class, 'index'])->name('fields.index');
    Route::get('/create', [\App\Http\Controllers\FieldController::class, 'create'])->name('fields.create');
    Route::post('/create', [\App\Http\Controllers\FieldController::class, 'store'])->name('fields.store');
    Route::get('/{field}/edit', [\App\Http\Controllers\FieldController::class, 'edit'])->name('fields.edit');
    Route::put('/{field}/edit', [\App\Http\Controllers\FieldController::class, 'update'])->name('fields.update');
    Route::delete('/{id}', [\App\Http\Controllers\FieldController::class, 'destroy'])->name('fields.destroy');
});

Route::prefix('/customer')->group(function() {
    Route::get('/', [\App\Http\Controllers\CustomerController::class, 'index'])->name('customer.index');
    Route::get('/register', [\App\Http\Controllers\CustomerController::class, 'create'])->name('customer.register');
    Route::post('/create', [\App\Http\Controllers\CustomerController::class, 'store'])->name('customer.store');
    Route::get('/login', [\App\Http\Controllers\CustomerController::class, 'login'])->name('customer.login');
    Route::post('/loginProcess', [\App\Http\Controllers\CustomerController::class, 'loginProcess'])->name('customer.loginProcess');
});
