<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SosialController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ExperianceController;
use App\Http\Controllers\TechnologyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/project_archive', [HomeController::class, 'project'])->name('project_archive');
Route::get('/download', [HomeController::class, 'download'])->name('download');


Route::prefix('admin')->group(function () {
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');

    Route::middleware(['auth'])->group(function () {
        Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
        Route::get('profile', [ProfileController::class, 'index'])->name('profile');
        Route::put('profile/{profile}', [ProfileController::class, 'update'])->name('profile.update');

        Route::prefix('project')->group(function () {
            Route::get('/', [PortfolioController::class, 'index'])->name('project');
            Route::get('/create', [PortfolioController::class, 'create'])->name('project.create');
            Route::post('/', [PortfolioController::class, 'store'])->name('project.store');
            Route::delete('/delete/{portfolio}', [PortfolioController::class, 'destroy'])->name('project.delete');
            Route::get('/{portfolio}', [PortfolioController::class, 'edit'])->name('project.edit');
        });

        Route::prefix('tech')->group(function () {
            Route::get('/', [TechnologyController::class, 'index'])->name('tech');
            Route::get('/create', [TechnologyController::class, 'create'])->name('tech.create');
            Route::post('/', [TechnologyController::class, 'store'])->name('tech.store');
            Route::delete('/delete/{technology}', [TechnologyController::class, 'destroy'])->name('tech.delete');
            Route::get('/{technology}', [TechnologyController::class, 'edit'])->name('tech.edit');
        });

        Route::prefix('experiance')->group(function () {
            Route::get('/', [ExperianceController::class, 'index'])->name('experiance');
            Route::get('/create', [ExperianceController::class, 'create'])->name('experiance.create');
            Route::post('/', [ExperianceController::class, 'store'])->name('experiance.store');
            Route::delete('/delete/{experiance}', [ExperianceController::class, 'destroy'])->name('experiance.delete');
            Route::get('/{experiance}', [ExperianceController::class, 'edit'])->name('experiance.edit');
        });

        Route::prefix('social')->group(function () {
            Route::get('/', [SosialController::class, 'index'])->name('social');
            Route::get('/create', [SosialController::class, 'create'])->name('social.create');
            Route::post('/', [SosialController::class, 'store'])->name('social.store');
            Route::delete('/delete/{social}', [SosialController::class, 'destroy'])->name('social.delete');
            Route::get('/{social}', [SosialController::class, 'edit'])->name('social.edit');
        });
    });
});