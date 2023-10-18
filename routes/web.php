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

// Trang giới thiệu laravel
Route::get('/', function () {
    return view('welcome');
});

// Các route quản trị loại sân (sẽ gộp vào route của admin)
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

// Các route của admin
Route::prefix('/admin')->group(function(){
    Route::get('/login', [\App\Http\Controllers\AdminController::class, 'login'])->name('admin.login');
    Route::post('/loginProcess', [\App\Http\Controllers\AdminController::class, 'loginProcess'])->name('admin.loginProcess');
    Route::get('/', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');

    // Quản lý sân
    Route::get('/fields', [\App\Http\Controllers\FieldController::class, 'index'])->name('fields.index');
    Route::get('/fields/create', [\App\Http\Controllers\FieldController::class, 'create'])->name('fields.create');
    Route::post('/fields/create', [\App\Http\Controllers\FieldController::class, 'store'])->name('fields.store');
    Route::get('/fields/{field}/edit', [\App\Http\Controllers\FieldController::class, 'edit'])->name('fields.edit');
    Route::put('/fields/{field}/edit', [\App\Http\Controllers\FieldController::class, 'update'])->name('fields.update');
    Route::delete('/fields/{id}', [\App\Http\Controllers\FieldController::class, 'destroy'])->name('fields.destroy');

    // Quản lý người dùng
    Route::get('/custIndex', [\App\Http\Controllers\CustomerController::class, 'index'])->name('customers.custIndex');
    Route::get('/customers/{customers}/edit', [\App\Http\Controllers\CustomerController::class, 'edit'])->name('customers.edit');
    Route::put('/customers/{customers}/edit', [\App\Http\Controllers\CustomerController::class, 'update'])->name('customers.update');
    Route::delete('/customers/{id}', [\App\Http\Controllers\CustomerController::class, 'destroy'])->name('customers.destroy');

    // Quản lý đơn đặt sân
    Route::get('/orders', [\App\Http\Controllers\OrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/create', [\App\Http\Controllers\TrueOrderController::class, 'create'])->name('orders.create');
    Route::post('/orders/create', [\App\Http\Controllers\TrueOrderController::class, 'store'])->name('orders.store');
});

// Route check login của customers
Route::prefix('/customers')->group(function() {
    Route::get('/login', [\App\Http\Controllers\CustomerController::class, 'login'])->name('customers.login');
    Route::post('/loginProcess', [\App\Http\Controllers\CustomerController::class, 'loginProcess'])->name('customers.loginProcess');
    Route::get('/register', [\App\Http\Controllers\CustomerController::class, 'create'])->name('customers.register');
    Route::post('/create', [\App\Http\Controllers\CustomerController::class, 'store'])->name('customers.store');
});

// Route customers chính (middleware bị tắt do lỗi hiện có)
Route::prefix('/customers')->group(function() {
    Route::get('/', [\App\Http\Controllers\CustomerController::class, 'trueIndex'])->name('customers.index');
});
