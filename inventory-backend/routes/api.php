<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//ITEM
Route::post('/create-item', [App\Http\Controllers\ItemController::class, 'create']);
Route::patch('/update-item', [App\Http\Controllers\ItemController::class, 'update']);
Route::delete('/delete-item', [App\Http\Controllers\ItemController::class, 'destroy']);
Route::get('/items-all', [App\Http\Controllers\ItemController::class, 'all']);

//CATEGORY
Route::post('/create-category', [App\Http\Controllers\CategoryController::class, 'create']);
Route::patch('/update-category', [App\Http\Controllers\CategoryController::class, 'update']);
Route::delete('/delete-category', [App\Http\Controllers\CategoryController::class, 'destroy']);
Route::get('/categories-all', [App\Http\Controllers\CategoryController::class, 'all']);

//EMPLOYEE
Route::post('/create-employee', [App\Http\Controllers\EmployeeController::class, 'create']);
Route::patch('/update-employee', [App\Http\Controllers\EmployeeController::class, 'update']);
Route::delete('/delete-employee', [App\Http\Controllers\EmployeeController::class, 'destroy']);
Route::get('/employees-all', [App\Http\Controllers\EmployeeController::class, 'all']);
