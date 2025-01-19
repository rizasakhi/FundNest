<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\createCampaignController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DonationController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/login', [LoginController::class, 'index'])->name('login');
// Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::get('/campaign', [CampaignController::class, 'index'])->name('campaign');
Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/create-campaign', [createCampaignController::class, 'index'])->name('create-campaign');
Route::post('/create-campaign', [createCampaignController::class, 'store'])->name('store-campaign');
Route::get('/edit-campaign/{id}', [createCampaignController::class, 'edit'])->name('edit-campaign');
Route::post('/edit-campaign/{id}', [createCampaignController::class, 'update'])->name('update-campaign');

Route::get('/lang/{locale}', function ($locale) {

    App::setlocale($locale);
    Session::put('locale', $locale);
    
    return redirect()->back();

})->name('change.locale');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('campaign/search', [CampaignController::class, 'index'])->name('search-campaign');
Route::delete('/campaign/{id}', [CampaignController::class, 'destroy'])->name('delete-campaign');

Route::get('/campaign/{id}/donate', [DonationController::class, 'index'])->name('donate-campaign');
Route::post('/campaign/{id}/donate', [DonationController::class, 'process'])->name('process-donation');