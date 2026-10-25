<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/create-item', [App\Http\Controllers\ItemController::class, 'create']);
