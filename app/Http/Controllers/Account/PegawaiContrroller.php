<?php

namespace App\Http\Controllers\Account;

use App\Models\Siyalem;
use App\Models\DataPegawai;
use Illuminate\Http\RedirectResponse;
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
        return view('Account.Anggota.Create.Index');
    }

    public function store(Request $request): RedirectResponse
    {
        $validateData = $request->validate([
            'nopassring' => 'required',
            'nama' => 'required',
            'pangkat' => 'required',
            'NRP' => 'required',
            'jabatan' => 'required',
            'kesatuan' => 'required',
            'tandajasa' => 'required',
            'tgl' => 'required',
            'warnakulit' => 'required',
            'mata' => 'required',
            'rambut' => 'required',
            'goldarah' => 'required',
            'jenis' => 'required',
            'alamatsekarang' => 'required',
            'suku' => 'required',
            'agama' => 'required',
            'tinggi' => 'required',
            'ayahalamat' => 'required',
            'ibualamat' => 'required',
            'istrialamat' => 'required',
            'tempatnikah' => 'required',
            'namaanak' => 'required',
            'ortuistrialamat' => 'required'
        ]);

        $pegawai = DataPegawai::create($validateData);
        toast('Data berhasil tersimpan','success');
        return redirect()->route('siyalemen.create', $pegawai->id);
    }

    // Create Data Siyalemen
    public function create_sylm(DataPegawai $dataPegawai)
    {
        return view('Account.Anggota.Create.Siyalemen', compact('dataPegawai'));
    }

    // Store Data Siyalem
    public function store_sylm(Request $request, DataPegawai $dataPegawai)
    {
        $validateData = $request->validate([
            'datapegawai_id' => 'required',
            'lembaga' => 'required',
            'sikap' => 'required',
            'langkah' => 'required',
            'bangun_kepala' => 'required',
            'rambut' => 'required',
            'kening' => 'required',
            'dahi' => 'required',
            'hidung' => 'required',
            'bibir' => 'required',
            'telinga' => 'required',
            'urusan_polisi_militer' => 'required',
        ]);

        Siyalem::create($validateData);
        toast('Data berhasil tersimpan','success');
        return back();
    }

    public function create_foto()
    {
        return view('Account.Anggota.Create.Foto');
    }
}
