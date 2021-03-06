<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('admin', function() {
    // return view('dashboard');
// })->name('admin');

Route::prefix('admin')
    ->middleware(['admin'])
    ->group(fn() => [
        Route::get('', [HomeController::class, 'index'])->name('dashboard'),

        Route::prefix('pengguna')->group(fn() => [
            Route::get('', [UserController::class, 'index'])->name('pengguna'),
            // Route::get('{user}', [UserController::class, 'show'])->name('detail-pengguna'),
        ]),
        Route::prefix('pengaduan')->group(fn() => [
            Route::get('', [ReportController::class, 'report'])->name('pengaduan'),
            Route::get('{report}', [ReportController::class, 'getReport'])->name('detail-pengaduan'),
        ]),
        Route::prefix('konsultasi')->group(fn() => [
            Route::get('', [ReportController::class, 'consultation'])->name('konsultasi'),
            Route::get('{report}', [ReportController::class, 'getConsultation'])->name('detail-konsultasi'),
            Route::get('{report}/file', [ReportController::class, 'getFile'])->name('file'),
            Route::post('{report}/kirim-email', [ReportController::class, 'sendEmail'])->name('kirim-email'),
            Route::patch('{report}/konfirmasi', [ReportController::class, 'update'])->name('konfirmasi'),
        ]),
    ]);
