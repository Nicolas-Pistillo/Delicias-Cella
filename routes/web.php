<?php

use App\Http\Controllers\EcommerceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EcommerceController::class, 'index'])->name('frontend.catalog');

Route::view('about', 'frontend.about')->name('frontend.about');