<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SysConfigController;
use App\Http\Controllers\InvCategoryController;
use App\Http\Controllers\InvDepartmentController;
use App\Http\Controllers\ProductMasterController;
use App\Http\Controllers\TransactionDetController;
use App\Http\Controllers\PaymentDetController;
use App\Http\Controllers\DayStartController;
use App\Http\Controllers\CashierController;
use App\Http\Controllers\PaytypeController;
use App\Http\Controllers\CountersController;
// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route ::apiResource('sys-configs', SysConfigController::class);
Route ::apiResource('inv-categories', InvCategoryController::class);
Route ::apiResource('inv-departments', InvDepartmentController::class);
Route ::apiResource('product-masters', ProductMasterController::class);
Route ::apiResource('transaction-dets', TransactionDetController::class);
Route ::apiResource('payment-dets', PaymentDetController::class);
Route::apiResource('day-starts', DayStartController::class);
Route::apiResource('cashiers', CashierController::class);
Route::apiResource('paytypes', PaytypeController::class);
Route::apiResource('counters', CountersController::class);

Route::get('/day-starts/filter/{idx}', [DayStartController::class, 'filterByIdx']);
// Route::put('day-starts/{idx}', [DayStartController::class, 'updateByIdx']);
Route::get('/cashiers/filter/{cashierId}', [CashierController::class, 'filterByCashierId']);
// Route::put('/cashiers/{cashierId}', [CashierController::class, 'updateByCashierId']);
Route::get('/counters/filter/{idx}', [CountersController::class, 'filterByIdx']);
// Route::put('/counters/{idx}', [CountersController::class, 'updateByIdx']);
Route::get('/inv-categories/filter/{invCategoryId}', [InvCategoryController::class, 'filterByInvCategoryId']);
// Route::put('/inv-categories/{invCategoryId}', [InvCategoryController::class, 'updateByInvCategoryId']);
Route::get('/inv-departments/filter/{invDepartmentID}', [InvDepartmentController::class, 'filterByInvDepartmentID']);
// Route::put('/inv-departments/{invDepartmentID}', [InvDepartmentController::class, 'updateByInvDepartmentID']);
Route::get('/paytypes/filter/{paymentID}', [PaytypeController::class, 'filterByPaymentID']);
Route::get('/product-masters/filter/{idx}', [ProductMasterController::class, 'filterByIdx']);
Route::get('/sys-configs/filter/{idx}', [SysConfigController::class, 'filterByIdx']);
