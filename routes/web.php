<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DataCountController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\Guest\HomeController;
use App\Http\Controllers\MediaInformasiController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestimonyController;

Route::get('/', function () {
    return view('welcome');
});

Route::name('guest.')->prefix('guest')->group(function () {
        Route::get('/', [HomeController::class, 'hero'])->name('hero');
});

Route::name('admin.')->prefix('admin')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
        Route::get('/hero', [HeroController::class, 'indexHero'])->name('hero.index');
        Route::put('/hero/update/{id}', [HeroController::class, 'updateHero'])->name('hero.update');
        Route::resource('/banner', BannerController::class);
        Route::resource('/profile', ProfileController::class);
        Route::resource('/data-count', DataCountController::class);
        Route::resource('/article', ArticleController::class);
        Route::resource('/gallery', GalleryController::class);
        Route::resource('/testimony', TestimonyController::class);
        Route::resource('/pengurus', PengurusController::class);
        Route::resource('/media-informasi', MediaInformasiController::class);
        Route::resource('/contact', ContactController::class);
        Route::resource('/document', DocumentController::class);
        Route::resource('/certificate', CertificateController::class);

        
    });
});


require __DIR__ . '/auth.php';
