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

// home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/dashboard')->group(static function () {
    // create data pegawai
    Route::get('pegawai', [App\Http\Controllers\Account\PegawaiContrroller::class, 'create'])
        ->name('pegawai.create');

    // store data pegawai
    Route::post('pegawai', [App\Http\Controllers\Account\PegawaiContrroller::class, 'store'])
        ->name('pegawai.store');

    // create siyalemen
    Route::get('pegawai/siyalemen/{dataPegawai}', [App\Http\Controllers\Account\PegawaiContrroller::class, 'create_sylm'])
        ->name('siyalemen.create');

    // store siyalemen
    Route::post('pegawai/siyalemen/{dataPegawai}', [App\Http\Controllers\Account\PegawaiContrroller::class, 'store_sylm'])
        ->name('siyalemen.store');

    // create foto
    Route::get('pegawai/foto/{siyalem}', [App\Http\Controllers\Account\PegawaiContrroller::class, 'create_foto'])
        ->name('photo.create');

    // store foto
    Route::post('pegawai/foto', [App\Http\Controllers\Account\PegawaiContrroller::class, 'store_foto'])
        ->name('foto.store');

});


