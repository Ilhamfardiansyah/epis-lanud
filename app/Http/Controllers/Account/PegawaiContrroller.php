<?php

namespace App\Http\Controllers\Account;

use Alert;
use App\Models\Siyalem;
use App\Models\DataPegawai;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PegawaiContrroller extends Controller
{

    public function create()
    {
        $pegawai = DataPegawai::all();
        return view('Account/Anggota/index', compact('pegawai'));
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nopassring'        => 'required',
            'nama'              => 'required',
            'pangkat'           => 'required',
            'NRP'               => 'required',
            'jabatan'           => 'required',
            'kesatuan'          => 'required',
            'tandajasa'         => 'required',
            'tgl'               => 'required',
            'warnakulit'        => 'required',
            'mata'              => 'required',
            'rambut'            => 'required',
            'goldarah'          => 'required',
            'jenis'             => 'required',
            'alamatsekarang'    => 'required',
            'suku'              => 'required',
            'agama'             => 'required',
            'tinggi'            => 'required',
            'ayahalamat'        => 'required',
            'ibualamat'         => 'required',
            'istrialamat'       => 'required',
            'tempatnikah'       => 'required',
            'namaanak'          => 'required',
            'ortuistrialamat'   => 'required'
        ]);
        // dd($validateData);
        DataPegawai::create($validateData);
        return view('Account.Anggota.Create');
    }

// Create Data Syalemen

    public function index()
    {
        $data = Siyalem::all();
        return view('Account.Anggota.Create', compact('data'));
    }

    public function store_sylm(Request $request)
    {
        $validateData = $request->validate([
            'lembaga'       => 'required',
            'sikap'         => 'required',
            'langkah'       => 'required',
            'bangun_kepala' => 'required',
            'rambut'        => 'required',
            'kening'        => 'required',
            'dahi'          => 'required',
            'hidung'        => 'required',
            'bibir'         => 'required',
            'telinga'       => 'required',
            'urusan_polisi_militer' => 'required',
        ]);

        Siyalem::create($validateData);
        toast('Your Post as been submited!','success');
        return back();
    }
}
