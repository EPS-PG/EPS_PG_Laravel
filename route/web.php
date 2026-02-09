<?php

use Illuminate\Support\Facades\Route;


Route::get('/payment', [App\Http\Controllers\EPSExampleController::class, 'index'])->name('index');
Route::post('/initializePayment', [App\Http\Controllers\EPSExampleController::class, 'initializePayment'])->name('initializePayment');
Route::get('/payment-success', [App\Http\Controllers\EPSExampleController::class, 'success'])->name('payment.success');
Route::get('/payment-fail', [App\Http\Controllers\EPSExampleController::class, 'fail'])->name('payment.fail');
Route::get('/payment-cancel', [App\Http\Controllers\EPSExampleController::class, 'cancel'])->name('payment.cancel');
