<?php

use App\Models\Siyalem;
use App\Models\DataFoto;
use App\Models\DataPegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/data', function(DataPegawai $dataPegawai) {

    // Mengambil semua data foto
    $dataFoto = DataFoto::with(['siyalem'])->get();

    // dd($dataFoto);

    $dataFoto->transform(function ($foto) {
        $foto->url = asset($foto->depan_pic);
        return $foto;
    });

    return response()->json($dataFoto);
});
