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
