<?php

use Illuminate\Support\Facades\Route;


Auth::routes([
    'register' => false,
    'verify' => false,
    'reset' => 'false',
    'password.request' => false,
    'password.reset' => false,
]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//  Cashier Page
Route::get('/cashier', [App\Http\Controllers\HomeController::class, 'Cashier'])->name('Cashier');
Route::post('/cashier', [App\Http\Controllers\HomeController::class, 'AddCashier'])->name('AddCashier');


//  Supplier Page
Route::get('/supplier', [App\Http\Controllers\HomeController::class, 'supplier'])->name('supplier');
Route::post('/supplier/{status}/{id}', [App\Http\Controllers\HomeController::class, 'AddSupplier'])->name('supplier');


// Buy Page
Route::get('/buy', [App\Http\Controllers\HomeController::class, 'buy'])->name('buy');
Route::post('/buy/{status}/{id}', [App\Http\Controllers\HomeController::class, 'add_stock'])->name('add_stock');


//Not Left Page
Route::get('/notleft', [App\Http\Controllers\HomeController::class, 'notleft'])->name('notleft');


//Debt List Page
Route::get('/debtlist', [App\Http\Controllers\HomeController::class, 'debtlist'])->name('debtlist');


//Expire Page
Route::get('/expire', [App\Http\Controllers\HomeController::class, 'expire'])->name('expire');


//Sellers Page
Route::get('/sellers', [App\Http\Controllers\HomeController::class, 'sellers'])->name('sellers');


//Sale Page
Route::get('/sale', [App\Http\Controllers\HomeController::class, 'sale'])->name('sale');
Route::post('/sale', [App\Http\Controllers\HomeController::class, 'get_sale'])->name('sale');
Route::post('/viewtb', [App\Http\Controllers\HomeController::class, 'viewtb'])->name('viewtb');
Route::post('/undo', [App\Http\Controllers\HomeController::class, 'undo'])->name('undo');
Route::post('/invoice', [App\Http\Controllers\HomeController::class, 'invoice'])->name('invoice');
Route::get('/clean', [App\Http\Controllers\HomeController::class, 'clean'])->name('clean');