<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

// Routes for home page
Route::get('/', [MainController::class, 'indexHome']);
Route::get('home', [MainController::class, 'indexHome']);

// Routes for contact
Route::get('contact', [MainController::class, 'indexContact']);
Route::post('contact', [MainController::class, 'storeContact']);

// Routes for about page
Route::get('about', [MainController::class, 'indexAbout']);
// Routes for FAQ page
Route::get('faq', [MainController::class, 'indexFaq']);
