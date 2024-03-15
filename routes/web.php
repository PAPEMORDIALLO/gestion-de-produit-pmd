<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resources([
    'roles' => RoleController::class,
    'users' => UserController::class,
    'products' => ProductController::class,
    'customers'=>\App\Http\Controllers\CustomerController::class,
    'category'=>\App\Http\Controllers\CategoryController::class,
    'orders'=>\App\Http\Controllers\OrderController::class
]);


Route::get('/customer/downloadPDF',
    [\App\Http\Controllers\CustomerController::class, 'downloadCustomer'])
    ->name('customer.download');
Route::get('/customer/downloadExcel',
    [\App\Http\Controllers\CustomerController::class, 'downloadExcel'])
    ->name('customer.downloadexcel');
Route::get('customers/orders/{customer_id}', [\App\Http\Controllers\CustomerController::class, 'customerOrderHistory'])->name('orders.history');
Route::get('/customerorders/{order_id}/download', [OrderController::class, 'downloadPdf'])->name('orderpdf.download');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
