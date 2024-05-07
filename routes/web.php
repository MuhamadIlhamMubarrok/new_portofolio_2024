<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', function () {
    return redirect('/login');
});

Route::name('admin.')->prefix('admin')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
        Route::get('dashboard/hero', [HeroController::class, 'indexHero'])->name('dashboard.hero');
        Route::get('dashboard/hero/{id}', [HeroController::class, 'editHero'])->name('dashboard.hero.edit');
        Route::put('dashboard/hero/update/{id}', [HeroController::class, 'updateHero'])->name('dashboard.hero.update');
        
    });
});


require __DIR__ . '/auth.php';
