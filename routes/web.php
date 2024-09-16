<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\CountController;
use App\Http\Controllers\Admin\ProjekController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\NewsController;

Route::get('/about-us', [HomeController::class, 'AboutUs'])->name('home.aboutus');
Route::get('/contact-us', [HomeController::class, 'ContactUs'])->name('home.contactus');
Route::post('/contact-us', [HomeController::class, 'submitContactForm'])->name('submitContactForm');
Route::get('/our-client', [HomeController::class, 'OurClient'])->name('home.ourclients');
Route::get('/news', [HomeController::class, 'news'])->name('home.news');
Route::get('/news/{id}', [HomeController::class, 'DetailNews'])->name('home.news.detail');
Route::get('/project/{id}', [HomeController::class, 'DetailProject'])->name('home.project.detail');
Route::get('/', [HomeController::class, 'LandingPage'])->name('home');
Route::get('/home/detail', [HomeController::class, 'DetailHome'])->name('home.detail');

Route::name('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::middleware('auth')->group(function () {
            Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
            Route::resource('skill', SkillController::class);
            Route::resource('client', ClientController::class);
            Route::resource('count', CountController::class);
            Route::resource('projek', ProjekController::class);
            Route::resource('certificate', CertificateController::class);
            Route::resource('news', NewsController::class);
            Route::post('/admin/upload-image', [NewsController::class, 'upload'])->name('upload.image');
            Route::resource('member', MemberController::class);
            Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
                \UniSharp\LaravelFilemanager\Lfm::routes();
            });
        });
    });

require __DIR__ . '/auth.php';
