<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\createCampaignController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::get('campaign', [CampaignController::class, 'index'])->name('campaign');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/create-campaign', [createCampaignController::class, 'index'])->name('create-campaign');