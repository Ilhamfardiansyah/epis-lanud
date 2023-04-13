<?php

namespace App\Http\Controllers\Account;

use App\Models\Siyalem;
use App\Models\DataFoto;
use App\Models\DataPegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

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
            'siyalem_id' => 'required',
            'ket_pic' => 'required',
            'depan_pic' => 'required|image|mimes:png,jpg,jpeg',
            'kanan_pic' => 'required|image|mimes:png,jpg,jpeg',
            'kiri_pic' => 'required|image|mimes:png,jpg,jpeg',
            'sidik_pic' => 'required|image|mimes:png,jpg,jpeg',
        ]);

        // upload foto depan
        $fotoDepan = $this->storeImage($request->file('depan_pic'), 'foto_depan');
        $validateData['depan_pic'] = $fotoDepan;

        // upload foto kanan
        $fotoKanan = $this->storeImage($request->file('kanan_pic'), 'foto_kanan');
        $validateData['kanan_pic'] = $fotoKanan;

        // upload foto kiri
        $fotoKiri = $this->storeImage($request->file('kiri_pic'), 'foto_kiri');
        $validateData['kiri_pic'] = $fotoKiri;

        // upload sidik jari
        $fotoSidik = $this->storeImage($request->file('sidik_pic'), 'sidik_kiri');
        $validateData['sidik_pic'] = $fotoSidik;

        // create
        $datafoto = DataFoto::create($validateData);
        toast('Data berhasil tersimpan', 'success');
        return redirect()->route('cetak.pegawai', $datafoto->id);
    }

    private function storeImage($request, $route)
    {
        // dapatkan extensi file
        $filenameExt = $request->getClientOriginalExtension();
        // dapatkan nama asli file
        $filenameWithExt = $request->getClientOriginalName();
        // nama tanpa ext
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // gabungkan nama yg telah di encode + waktu saat ini + ext file
        $filenameToStore = $filename . '_' . time() . '.' . $filenameExt;
        // path
        $path = 'public/' . $route;
        // upload image
        $request->storeAs($path, $filenameToStore);
        // return
        return 'storage/' . $route . '/' . $filenameToStore;
        // nb2: cara input ke db adalah, $nama->cover_image = $filenameToStore;
    }

    public function destroy($id)
    {
        DB::table('data_pegawais')->where('id', $id)->delete();
        toast('Data Pegawai Berhasil Dihapus','error');
        return back();
    }

    public function edit(DataPegawai $dataPegawai)
    {
        return view('Account/Anggota/Create/Edit', compact('dataPegawai'));
    }

    public function update(Request $request, DataPegawai $dataPegawai)
    {
        // ddd($dataPegawai->all());
        $siyalem = Siyalem::where('datapegawai_id', $dataPegawai->id)->first();
        // dd($siyalem);
        $validateData = $request->validate([
            'depan_pic' => 'required|image|mimes:png,jpg,jpeg',
            'kanan_pic' => 'required|image|mimes:png,jpg,jpeg',
            'kiri_pic' => 'required|image|mimes:png,jpg,jpeg',
            'sidik_pic' => 'required|image|mimes:png,jpg,jpeg',
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

        $siyalem->lembaga = 'test';
        $siyalem->save();
        return back();
    }

}
