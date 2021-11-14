<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\VillageController;
use App\Models\District;
use App\Models\Village;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/report', [HomeController::class, 'storeReport'])->name('report');

Route::get('{district}/get-villages', [VillageController::class, 'getVillage'])->name('get-villages');

require __DIR__.'/auth.php';
