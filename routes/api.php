<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\EventReminderController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReviewController;

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function() {
Route::apiResource('categories', CategoryController::class);
Route::apiResource('products', ProductController::class);
Route::apiResource('users', UserController::class)->only(['index', 'show', 'update', 'destroy']); 
Route::apiResource('orders', OrderController::class);
Route::apiResource('inquiries', InquiryController::class); 
Route::apiResource('event_reminders', EventReminderController::class); 
Route::apiResource('addresses', AddressController::class); 
Route::apiresource('reviews', ReviewController::class);

});