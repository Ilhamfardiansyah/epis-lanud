<?php

namespace App\Http\Controllers\Account;

use Alert;
use App\Models\DataPegawai;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PegawaiContrroller extends Controller
{
    public function index()
    {
        return view('Account.Anggota.Create');
    }
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
}
