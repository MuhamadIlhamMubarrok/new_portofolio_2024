<?php

use App\Http\Controllers\Admin\TestimonyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\CountController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\ProjekController;
use App\Http\Controllers\Admin\SubGambarProjectController;

Route::get('/about-us', [HomeController::class, 'AboutUs'])->name('home.aboutus');
Route::get('/contact-us', [HomeController::class, 'ContactUs'])->name('home.contactus');
Route::get('/our-client', [HomeController::class, 'OurClient'])->name('home.ourclients');

Route::name('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::middleware('auth')->group(function () {
            Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
            Route::get('/banner', [BannerController::class, 'indexBanner'])->name('banner.index');
            Route::put('/banner/update/{id}', [BannerController::class, 'updateBanner'])->name('banner.update');
            Route::resource('testimony', TestimonyController::class);
            Route::resource('client', ClientController::class);
            Route::resource('count', CountController::class);
            Route::resource('message', MessageController::class);
            Route::resource('projek', ProjekController::class);
            Route::resource('subGambar', SubGambarProjectController::class);
        });
    });

require __DIR__ . '/auth.php';
