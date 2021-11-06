<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('dashboard');
})->middleware(['auth'])->name('home');

Route::get('{district}/get-villages', function (District $district) {
    $villages = $district->villages()->get(['id', 'name']);

    return response()->json(['data' => $villages]);
})->name('get-villages');

require __DIR__.'/auth.php';
