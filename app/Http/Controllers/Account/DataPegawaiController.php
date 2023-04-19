<?php

namespace App\Http\Controllers\Account;

use App\Models\Siyalem;
use App\Models\DataFoto;
use App\Models\DataPegawai;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;

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

    public function search()
    {
        $data = DataPegawai::all();
        return view('Account/Search/Index', compact('data'));
    }

    public function print(DataPegawai $dataPegawai)
    {
        return redirect()->route('cetak.pegawai', $dataPegawai->id);
    }

    public function cetak(DataPegawai $dataPegawai)
    {
        return redirect()->route('cetak.pegawai', $dataPegawai->nopassring);
    }

    public function cari(Request $request)
    {
        // Ambil nilai nopassring dari query parameter
        $nopassring = $request->query('nopassring');

        // Lakukan sesuatu dengan nilai nopassring, misalnya query ke database
        $dataPegawai = DataPegawai::where(['nopassring' => $nopassring])->latest()->first();

        // Tampilkan view dengan data yang diperoleh dari database
        return view('Account/Search/Scan', compact('dataPegawai'));
    }
}
