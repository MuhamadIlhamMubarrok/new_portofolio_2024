<?php

use App\Http\Controllers\Admin\ArticleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\HomeController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DataCountController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\MediaInformasiController;
use App\Http\Controllers\Admin\PedomanController;
use App\Http\Controllers\Admin\PengurusController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\TestimonyController;

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

        Route::get('/banner', [BannerController::class, 'indexBanner'])->name('banner-index');
        Route::put('/banner/update/{id}', [BannerController::class, 'updateBanner'])->name('banner.update');

        Route::get('/profile', [ProfileController::class, 'indexProfile'])->name('profile.index');
        Route::put('/profile/update/{id}', [ProfileController::class, 'updateProfile'])->name('profile.update');

        Route::get('/data-count', [DataCountController::class, 'indexDataCount'])->name('data-count.index');
        Route::put('/data-count/update/{id}', [DataCountController::class, 'updateDataCount'])->name('data-count.update');

        Route::get('/contact', [ContactController::class, 'indexContact'])->name('contact.index');
        Route::put('/contact/update/{id}', [ContactController::class, 'updateContact'])->name('contact.update');

        Route::resource('/article', ArticleController::class);
        Route::resource('/gallery', GalleryController::class);
        Route::resource('/testimony', TestimonyController::class);
        Route::resource('/pengurus', PengurusController::class);
        Route::resource('/media-informasi', MediaInformasiController::class);
        Route::resource('/pedoman-document', PedomanController::class);
        Route::resource('/certificate', CertificateController::class);
    });
});


require __DIR__ . '/auth.php';
