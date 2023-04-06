<?php

namespace App\Http\Controllers\Account;

use App\Models\Siyalem;
use App\Models\DataFoto;
use App\Models\DataPegawai;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataPegawaiController extends Controller
{
    public function index()
    {
        $data = DataPegawai::all();

        return view('Account/Cetak Biodata/Index', compact('data'));
    }

    public function cetakan(DataPegawai $dataPegawai)
    {
        return view('Account/Cetak Biodata/Printout', compact('dataPegawai'));
    }
}
