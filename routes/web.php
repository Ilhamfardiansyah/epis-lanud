<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Account\PegawaiContrroller;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/dashboard')->group(function() {
    Route::get('/test', [App\Http\Controllers\Account\PegawaiContrroller::class, 'index'])->name('input');

    Route::get('/input', [App\Http\Controllers\Account\PegawaiContrroller::class, 'create'])->name('input');

    Route::post('/create', [App\Http\Controllers\Account\PegawaiContrroller::class, 'store'])->name('create');

    Route::post('/create_syalemen', [App\Http\Controllers\Account\PegawaiContrroller::class, 'store_sylm'])->name('create.syalemen');
});
