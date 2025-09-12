<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'indexHome']);
Route::get('home', [MainController::class, 'indexHome']);

Route::get('contact', [MainController::class, 'indexContact']);
Route::post('contact', [MainController::class, 'storeContact']);

Route::get('about', [MainController::class, 'indexAbout']);
Route::get('faq', [MainController::class, 'indexFaq']);
