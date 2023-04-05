<?php

namespace App\Http\Controllers\Account;

use App\Models\Siyalem;
use App\Models\DataFoto;
use App\Models\DataPegawai;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;

class PegawaiContrroller extends Controller
{
    public function index()
    {
        return view('Account.Anggota.Create');
    }


    // Input Anggota
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
        toast('Data berhasil tersimpan', 'success');
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

        $siyalem = Siyalem::create($validateData);
        toast('Data berhasil tersimpan', 'success');
        return redirect()->route('photo.create', $siyalem->id);
    }

    public function create_foto(Siyalem $siyalem)
    {
        $data = DataPegawai::all();
        return view('Account.Anggota.Create.Foto', compact('siyalem', 'data'));
    }

    public function store_photo(Request $request, Siyalem $siyalem)
    {
        // dd($siyalem->all());
        $validateData = $request->validate([
            'siyalem_id'    => 'required',
            'ket_pic'       => 'required',
            'depan_pic'     => 'required|image|mimes:png,jpg,jpeg',
            'kanan_pic'     => 'required|image|mimes:png,jpg,jpeg',
            'kiri_pic'      => 'required|image|mimes:png,jpg,jpeg',
            'sidik_pic'     => 'required|image|mimes:png,jpg,jpeg',
        ]);

        //  upload image
        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->storeAs('images');
        }

        DataFoto::create($validateData);
        toast('Data berhasil tersimpan', 'success');
        return back();
    }
}
