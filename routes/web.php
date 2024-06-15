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

Route::get('/', function () {
    return view('welcome');
});

Route::name('guest.')->prefix('guest')->group(function () {
    Route::get('/', [HomeController::class, 'hero'])->name('hero');
});

Route::name('admin.')->prefix('admin')->group(function () {
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
