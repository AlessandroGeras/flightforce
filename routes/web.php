<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

//Pages
Route::get('/', [UsersController::class, "index"])->name('index');