<?php

use App\Http\Controllers\chatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;


//login form routers
Route::get('/login',[loginController::class, 'login'])->name('login');
Route::post('/logDataStore',[loginController::class, 'loginValidate'])->name('logDataStore');
Route::get('/chat',[chatController::class, 'chatInterface'])->name('chat');


//chat interface routers



