@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mb-3">
                    <div class="bg-holder d-none d-lg-block bg-card"
                        style="background-image:url(../../../assets/img/corner-4.png);">
                    </div>
                    <!--/.bg-holder-->

                    <div class="card-body position-relative">
                        <div class="row">
                            <div class="col-lg-8">
                                <h3>Manage Anggota</h3>
                                <h4>No Passring : <span>{{ $dataPegawai->nopassring }}</span></h4>
                                <p class="mb-0"></p><a class="btn btn-link btn-sm ps-0 mt-2"
                                    href="https://getbootstrap.com/docs/5.1/forms/layout" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-xxl-6 px-xxl-2">
                        <div class="card h-100">
                            <div class="card-header bg-light py-2">
                                <div class="row flex-between-center">
                                    <div class="col-auto">
                                    </div>
                                </div>
                            </div>
                            @include('sweetalert::alert')
                            <div class="row g-0">
                                <div class="col-lg-12 pe-lg-2">
                                    <div class="card-header">
                                        <h5 class="mb-0">Edit Data Anggota</h5>
                                    </div>


                                    <div class="card-body bg-light">
                                        <div class="row gx-2">
                                            <div class="col-12">
                                                <form action="/dashboard/update/foto/{{ $dataPegawai->id }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="border-dashed-bottom my-3"><b>DATA FOTO</b></div>
                                            </div>

                                            <div class="col-md-6 col-xxl-3">
                                                <div class="card h-md-100">
                                                    <div class="card-header pb-0">
                                                        <h6 class="mb-0 mt-2">Foto Depan</h6>
                                                    </div>
                                                    <div class="card-header d-flex flex-between-center pb-0">
                                                        <div class="dropdown font-sans-serif btn-reveal-trigger">
                                                            <img src="{{ asset($dataPegawai->siyalem->data_fotos->depan_pic) }}"
                                                                class="form-control"
                                                                alt="{{ asset('assets/img/user.png') }}"
                                                                style="display: inline; float: left; margin-right: 50px; width: 350px; height: 350px">
                                                            <input type="file" name="depan_pic" id="depan_pic"
                                                                class="form-control" style="width: 350px">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pt-2">
                                                        <div class="row g-0 h-100 align-items-center">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-xxl-3">
                                                <div class="card h-md-100">
                                                    <div class="card-header pb-0">
                                                        <h6 class="mb-0 mt-2">Foto Kanan</h6>
                                                    </div>
                                                    <div class="card-header d-flex flex-between-center pb-0">
                                                        <div class="dropdown font-sans-serif btn-reveal-trigger">
                                                            <img src="{{ asset($dataPegawai->siyalem->data_fotos->kanan_pic) }}"
                                                                class="form-control"
                                                                style="display: inline; float: left; margin-right: 50px; width: 350px; height: 350px"
                                                                alt="{{ asset('assets/img/user.png') }}">
                                                            <input type="file" name="kanan_pic" id="kanan_pic"
                                                                class="form-control" style="width: 350px">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pt-2">
                                                        <div class="row g-0 h-100 align-items-center">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mt-3 col-xxl-3">
                                                <div class="card h-md-100">
                                                    <div class="card-header pb-0">
                                                        <h6 class="mb-0 mt-2">Foto Kiri</h6>
                                                    </div>
                                                    <div class="card-header d-flex flex-between-center pb-0">
                                                        <div class="dropdown font-sans-serif btn-reveal-trigger">
                                                            <img src="{{ asset($dataPegawai->siyalem->data_fotos->kiri_pic) }}"
                                                                class="form-control"
                                                                style="display: inline; float: left; margin-right: 50px; width: 350px; height: 350px"
                                                                alt="{{ asset('assets/img/user.png') }}">
                                                            <input type="file" name="kiri_pic" id="kiri_pic"
                                                                class="form-control" style="width: 350px">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pt-2">
                                                        <div class="row g-0 h-100 align-items-center">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mt-3 col-xxl-3">
                                                <div class="card h-md-100">
                                                    <div class="card-header pb-0">
                                                        <h6 class="mb-0 mt-2">Sidik Jari</h6>
                                                    </div>
                                                    <div class="card-header d-flex flex-between-center pb-0">
                                                        <div class="dropdown font-sans-serif btn-reveal-trigger">
                                                            <img src="{{ asset($dataPegawai->siyalem->data_fotos->sidik_pic) }}"
                                                                class="form-control"
                                                                style="display: inline; float: left; margin-right: 50px; width: 350px; height: 350px"
                                                                alt="{{ asset('assets/img/user.png') }}">
                                                            <input type="file" name="sidik_pic" id="sidik_pic"
                                                                class="form-control" style="width: 350px">
                                                        </div>
                                                    </div>
                                                    <div class="card-body pt-2">
                                                        <div class="row g-0 h-100 align-items-center">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12 mb-3 mt-2">
                                                <label class="form-label" for="ket_pic">Keterangan Anggota</label>
                                                <input class="form-control datetimepicker" id="ket_pic" name="ket_pic"
                                                    type="text"
                                                    value="{{ $dataPegawai->siyalem->data_fotos->ket_pic }}" />
                                                <button class="btn btn-primary mt-3" type="submit">Edit Foto</button>
                                            </div>
                                            </form>

                                            <div class="col-12">
                                                <div class="border-dashed-bottom my-3"><b>BIODATA ANGGOTA</b></div>
                                            </div>

                                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                                            Data Anggota
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                        data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <div class="col-12 mb-3">
                                                                <label class="form-label" for="nopassring">No
                                                                    Passring</label>
                                                                <input class="form-control" id="event-name"
                                                                    name="nopassring"
                                                                    value="{{ $dataPegawai->nopassring }}" type="text"
                                                                    disabled="disabled" />
                                                            </div>

                                                            <div class="col-12 sm-6 mb-3">
                                                                <label class="form-label" for="nama">Nama
                                                                    Lengkap</label>
                                                                <input class="form-control datetimepicker" id="nama"
                                                                    name="nama" type="text"
                                                                    value="{{ $dataPegawai->nama }}" />
                                                            </div>

                                                            <div class="col-12 sm-6 mb-3">
                                                                <label class="form-label" for="pangkat">Pangkat</label>
                                                                <input class="form-control datetimepicker" id="pangkat"
                                                                    name="pangkat" type="text"
                                                                    value="{{ $dataPegawai->pangkat }}" />
                                                            </div>

                                                            <div class="col-12 sm-6 mb-3">
                                                                <label class="form-label" for="NRP">NRP</label>
                                                                <input class="form-control datetimepicker" id="NRP"
                                                                    name="NRP" type="text"
                                                                    value="{{ $dataPegawai->NRP }}" />
                                                            </div>

                                                            <div class="col-12 sm-6 mb-3">
                                                                <label class="form-label" for="jabatan">Jabatan</label>
                                                                <input class="form-control datetimepicker" id="jabatan"
                                                                    name="jabatan" type="text"
                                                                    value="{{ $dataPegawai->jabatan }}" />
                                                            </div>

                                                            <div class="col-12 sm-6 mb-3">
                                                                <label class="form-label" for="kesatuan">Kesatuan</label>
                                                                <input class="form-control datetimepicker" id="kesatuan"
                                                                    name="kesatuan" type="text"
                                                                    value="{{ $dataPegawai->kesatuan }}" />
                                                            </div>

                                                            <div class="col-12 sm-6 mb-3">
                                                                <label class="form-label"
                                                                    for="tandajasa">tandajasa</label>
                                                                <input class="form-control datetimepicker" id="tandajasa"
                                                                    name="tandajasa" type="text"
                                                                    value="{{ $dataPegawai->tandajasa }}" />
                                                            </div>

                                                            <div class="col-12 sm-6 mb-3">
                                                                <label class="form-label" for="tgl">tgl</label>
                                                                <input class="form-control datetimepicker" id="tgl"
                                                                    name="tgl" type="text"
                                                                    value="{{ $dataPegawai->tgl }}" />
                                                            </div>

                                                            <div class="col-12 sm-6 mb-3">
                                                                <label class="form-label" for="suku">Suku</label>
                                                                <input class="form-control datetimepicker" id="suku"
                                                                    name="suku" type="text"
                                                                    value="{{ $dataPegawai->suku }}" />
                                                            </div>

                                                            <div class="col-12 sm-6 mb-3">
                                                                <label class="form-label" for="agama">Agama</label>
                                                                <select class="form-select" id="basic-form-gender"
                                                                    name="agama" aria-label="Default select example">
                                                                    <option selected disabled>--Pilih Agama--</option>
                                                                    <option value="Islam"
                                                                        {{ $dataPegawai->agama === 'Islam' ? 'selected' : '' }}>
                                                                        Islam
                                                                    </option>
                                                                    <option value="Kristen Protestan"
                                                                        {{ $dataPegawai->agama === 'Kristen Protestan' ? 'selected' : '' }}>
                                                                        Kristen Protestan
                                                                    </option>
                                                                    <option value="Katolik"
                                                                        {{ $dataPegawai->agama === 'Katolik' ? 'selected' : '' }}>
                                                                        Katolik
                                                                    </option>
                                                                    <option value="Hindu"
                                                                        {{ $dataPegawai->agama === 'Hindu' ? 'selected' : '' }}>
                                                                        Hindu
                                                                    </option>
                                                                    <option value="Budha"
                                                                        {{ $dataPegawai->agama === 'Budha' ? 'selected' : '' }}>
                                                                        Budha
                                                                    </option>
                                                                    <option value="Konguchu"
                                                                        {{ $dataPegawai->agama === 'Konguchu' ? 'selected' : '' }}>
                                                                        Konguchu
                                                                    </option>
                                                                    <option value="Lain-Lain">Lain-Lain</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-12 sm-6 mb-3">
                                                                <label class="form-label" for="tinggi">Tinggi</label>
                                                                <input class="form-control datetimepicker" id="tinggi"
                                                                    name="tinggi" type="text"
                                                                    value="{{ $dataPegawai->tinggi }}" />
                                                            </div>

                                                            <div class="col-12 sm-6 mb-3">
                                                                <label class="form-label" for="warnakulit">Warna
                                                                    Kulit</label>
                                                                <input class="form-control datetimepicker" id="warnakulit"
                                                                    name="warnakulit" type="text"
                                                                    value="{{ $dataPegawai->warnakulit }}" />
                                                            </div>

                                                            <div class="col-12 sm-6 mb-3">
                                                                <label class="form-label" for="mata">Mata</label>
                                                                <input class="form-control datetimepicker" id="mata"
                                                                    name="mata" type="text"
                                                                    value="{{ $dataPegawai->mata }}" />
                                                            </div>

                                                            <div class="col-12 sm-6 mb-3">
                                                                <label class="form-label" for="rambut">Rambut</label>
                                                                <input class="form-control datetimepicker" id="rambut"
                                                                    name="rambut" type="text"
                                                                    value="{{ $dataPegawai->rambut }}" />
                                                            </div>

                                                            <div class="col-12 sm-6 mb-3">
                                                                <label class="form-label" for="mata">Mata</label>
                                                                <input class="form-control datetimepicker" id="mata"
                                                                    name="mata" type="text"
                                                                    value="{{ $dataPegawai->mata }}" />
                                                            </div>

                                                            <div class="col-12 sm-6 mb-3">
                                                                <label class="form-label" for="goldarah">goldarah</label>
                                                                <input class="form-control datetimepicker" id="goldarah"
                                                                    name="goldarah" type="text"
                                                                    value="{{ $dataPegawai->goldarah }}" />
                                                            </div>

                                                            <div class="col-12 sm-6 mb-3">
                                                                <label class="form-label" for="alamatsekarang">Alamat
                                                                    Sekarang</label>
                                                                <input class="form-control datetimepicker"
                                                                    id="alamatsekarang" name="alamatsekarang"
                                                                    type="text"
                                                                    value="{{ $dataPegawai->alamatsekarang }}" />
                                                            </div>

                                                            <div class="col-12 sm-6 mb-3">
                                                                <label class="form-label" for="ayahalamat">Ayah dan
                                                                    Alamat</label>
                                                                <input class="form-control datetimepicker" id="ayahalamat"
                                                                    name="ayahalamat" type="text"
                                                                    value="{{ $dataPegawai->ayahalamat }}" />
                                                            </div>

                                                            <div class="col-12 sm-6 mb-3">
                                                                <label class="form-label" for="ibualamat">Ibu dan
                                                                    Alamat</label>
                                                                <input class="form-control datetimepicker" id="ibualamat"
                                                                    name="ibualamat" type="text"
                                                                    value="{{ $dataPegawai->ibualamat }}" />
                                                            </div>

                                                            <div class="col-12 sm-6 mb-3">
                                                                <label class="form-label" for="istrialamat">Istri dan
                                                                    Alamat</label>
                                                                <input class="form-control datetimepicker"
                                                                    id="istrialamat" name="istrialamat" type="text"
                                                                    value="{{ $dataPegawai->istrialamat }}" />
                                                            </div>

                                                            <div class="col-12 sm-6 mb-3">
                                                                <label class="form-label" for="tempatnikah">Tempat &
                                                                    Akte
                                                                    Nikah</label>
                                                                <input class="form-control datetimepicker"
                                                                    id="tempatnikah" name="tempatnikah" type="text"
                                                                    value="{{ $dataPegawai->tempatnikah }}" />
                                                            </div>

                                                            <div class="col-12 sm-6 mb-3">
                                                                <label class="form-label" for="namaanak">Nama
                                                                    Anak</label>
                                                                <input class="form-control datetimepicker" id="namaanak"
                                                                    name="namaanak" type="text"
                                                                    value="{{ $dataPegawai->namaanak }}" />
                                                            </div>

                                                            <div class="col-12 sm-6 mb-3">
                                                                <label class="form-label" for="ortuistrialamat">Ortu
                                                                    Istri dan
                                                                    Alamat</label>
                                                                <input class="form-control datetimepicker"
                                                                    id="ortuistrialamat" name="ortuistrialamat"
                                                                    type="text"
                                                                    value="{{ $dataPegawai->ortuistrialamat }}" />
                                                            </div>

                                                            <div class="col-12 sm-6 mb-3">
                                                                <label class="form-label" for="tempatnikah">Istri
                                                                    Alamat</label>
                                                                <input class="form-control datetimepicker"
                                                                    id="tempatnikah" name="tempatnikah" type="text"
                                                                    value="{{ $dataPegawai->tempatnikah }}" />
                                                            </div>

                                                            <div class="col-12 sm-6 mb-3">
                                                                <label class="form-label" for="jenis">Jenis
                                                                    Kelamin</label>
                                                                <select class="form-select" id="basic-form-gender"
                                                                    name="jenis" aria-label="Default select example">
                                                                    <option selected disabled>--Pilih Jenis Kelamin--
                                                                    </option>
                                                                    <option value="Laki-Laki"
                                                                        {{ $dataPegawai->jenis === 'Laki-Laki' ? 'selected' : '' }}>
                                                                        Laki-Laki
                                                                    </option>
                                                                    <option value="Perempuan"
                                                                        {{ $dataPegawai->jenis === 'Perempuan' ? 'selected' : '' }}>
                                                                        Perempuan
                                                                    </option>
                                                                    <option value="Lain-Lain">Lain-Lain</option>
                                                                </select>
                                                            </div>
                                                            <button class="btn btn-primary" type="submit">Edit
                                                                Data</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                                            Data Siyalemens
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                                        data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <div class="col-sm-12 mb-3">
                                                                <label class="form-label" for="lembaga">Lembaga
                                                                    (Adegan)</label>
                                                                <select class="form-select" id="basic-form-gender"
                                                                    name="lembaga" aria-label="Default select example">
                                                                    <option selected disabled>--Pilih Lembaga--</option>
                                                                    <option value="Kuat"
                                                                        {{ $dataPegawai->siyalem->lembaga === 'Kuat' ? 'selected' : '' }}>
                                                                        Kuat
                                                                    </option>
                                                                    <option value="Tegak"
                                                                        {{ $dataPegawai->siyalem->lembaga === 'Tegak' ? 'selected' : '' }}>
                                                                        Tegak
                                                                    </option>
                                                                    <option value="Lempai"
                                                                        {{ $dataPegawai->siyalem->lembaga === 'Lempai' ? 'selected' : '' }}>
                                                                        Lempai
                                                                    </option>
                                                                    <option value="Lemah"
                                                                        {{ $dataPegawai->siyalem->lembaga === 'Lemah' ? 'selected' : '' }}>
                                                                        Lemah
                                                                    </option>
                                                                    <option value="Lain-Lain">Lain-Lain</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-sm-12 mb-3">
                                                                <label class="form-label" for="sikap">Sikap</label>
                                                                <select class="form-select" id="basic-form-gender"
                                                                    name="sikap" aria-label="Default select example">
                                                                    <option selected disabled>--Pilih Sikap--</option>
                                                                    <option value="Tegak"
                                                                        {{ $dataPegawai->siyalem->sikap === 'Tegak' ? 'selected' : '' }}>
                                                                        Tegak
                                                                    </option>
                                                                    <option value="Gagah"
                                                                        {{ $dataPegawai->siyalem->sikap === 'Gagah' ? 'selected' : '' }}>
                                                                        Gagah
                                                                    </option>
                                                                    <option value="Bungkok"
                                                                        {{ $dataPegawai->siyalem->sikap === 'Bungkok' ? 'selected' : '' }}>
                                                                        Bungkok
                                                                    </option>
                                                                    <option value="Kepal Tunduk Kaku"
                                                                        {{ $dataPegawai->siyalem->sikap === 'Kepal Tunduk Kaku' ? 'selected' : '' }}>
                                                                        Kepal Tunduk Kaku
                                                                    </option>
                                                                    <option value="Lain-Lain">Lain-Lain</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-sm-12 mb-3">
                                                                <label class="form-label" for="bangun_kepala">Bangun
                                                                    Kepala</label>
                                                                <select class="form-select" id="basic-form-gender"
                                                                    name="bangun_kepala"
                                                                    aria-label="Default select example">
                                                                    <option selected disabled>--Pilih Bangun Kepala--
                                                                    </option>
                                                                    <option value="Sebagai Pangkal"
                                                                        {{ $dataPegawai->siyalem->bangun_kepala === 'Sebagai Pangkal' ? 'selected' : '' }}>
                                                                        Sebagai Pangkal
                                                                    </option>
                                                                    <option value="Belah Ketupat"
                                                                        {{ $dataPegawai->siyalem->bangun_kepala === 'Belah Ketupat' ? 'selected' : '' }}>
                                                                        Belah Ketupat
                                                                    </option>
                                                                    <option value="Bulat"
                                                                        {{ $dataPegawai->siyalem->bangun_kepala === 'Bulat' ? 'selected' : '' }}>
                                                                        Bulat
                                                                    </option>
                                                                    <option value="Lonjong"
                                                                        {{ $dataPegawai->siyalem->bangun_kepala === 'Lonjong' ? 'selected' : '' }}>
                                                                        Lonjong
                                                                    </option>
                                                                    <option value="Panjang"
                                                                        {{ $dataPegawai->siyalem->bangun_kepala === 'Panjang' ? 'selected' : '' }}>
                                                                        Panjang
                                                                    </option>
                                                                    <option value="Lain-Lain">Lain-Lain</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-sm-12 mb-3">
                                                                <label class="form-label" for="rambut">Rambut</label>
                                                                <select class="form-select" id="basic-form-gender"
                                                                    name="rambut" aria-label="Default select example">
                                                                    <option selected disabled>--Pilih Rambut--</option>
                                                                    <option value="Lebat/Jarang"
                                                                        {{ $dataPegawai->siyalem->rambut === 'Lebat/Jarang' ? 'selected' : '' }}>
                                                                        Lebat/Jarang
                                                                    </option>
                                                                    <option value="Berombak/Kejur"
                                                                        {{ $dataPegawai->siyalem->rambut === 'Berombak/Kejur' ? 'selected' : '' }}>
                                                                        Berombak/Kejur
                                                                    </option>
                                                                    <option value="Kejur/Keriting"
                                                                        {{ $dataPegawai->siyalem->rambut === 'Kejur/Keriting' ? 'selected' : '' }}>
                                                                        Kejur/Keriting
                                                                    </option>
                                                                    <option value="Tegak"
                                                                        {{ $dataPegawai->siyalem->rambut === 'Tegak' ? 'selected' : '' }}>
                                                                        Tegak
                                                                    </option>
                                                                    <option value="Lain-Lain">Lain-Lain</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-sm-12 mb-3">
                                                                <label class="form-label" for="rambut">Rambut</label>
                                                                <select class="form-select" id="basic-form-gender"
                                                                    name="rambut" aria-label="Default select example">
                                                                    <option selected disabled>--Pilih Rambut--</option>
                                                                    <option value="Lebat/Jarang"
                                                                        {{ $dataPegawai->siyalem->rambut === 'Lebat/Jarang' ? 'selected' : '' }}>
                                                                        Lebat/Jarang
                                                                    </option>
                                                                    <option value="Berombak/Kejur"
                                                                        {{ $dataPegawai->siyalem->rambut === 'Berombak/Kejur' ? 'selected' : '' }}>
                                                                        Berombak/Kejur
                                                                    </option>
                                                                    <option value="Kejur/Keriting"
                                                                        {{ $dataPegawai->siyalem->rambut === 'Kejur/Keriting' ? 'selected' : '' }}>
                                                                        Kejur/Keriting
                                                                    </option>
                                                                    <option value="Tegak"
                                                                        {{ $dataPegawai->siyalem->rambut === 'Tegak' ? 'selected' : '' }}>
                                                                        Tegak
                                                                    </option>
                                                                    <option value="Lain-Lain">Lain-Lain</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-sm-12 mb-3">
                                                                <label class="form-label" for="kening">Kening</label>
                                                                <select class="form-select" id="basic-form-gender"
                                                                    name="kening" aria-label="Default select example">
                                                                    <option selected disabled>--Pilih Kening--</option>
                                                                    <option value="Rata"
                                                                        {{ $dataPegawai->siyalem->kening === 'Rata' ? 'selected' : '' }}>
                                                                        Rata
                                                                    </option>
                                                                    <option value="Miring"
                                                                        {{ $dataPegawai->siyalem->kening === 'Miring' ? 'selected' : '' }}>
                                                                        Miring
                                                                    </option>
                                                                    <option value="Ke Atas/Ke Bawah"
                                                                        {{ $dataPegawai->siyalem->kening === 'Ke Atas/Ke Bawah' ? 'selected' : '' }}>
                                                                        Ke Atas/Ke Bawah
                                                                    </option>
                                                                    <option value="Lain-Lain">Lain-Lain</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-sm-12 mb-3">
                                                                <label class="form-label" for="dahi">Dahi</label>
                                                                <select class="form-select" id="basic-form-gender"
                                                                    name="dahi" aria-label="Default select example">
                                                                    <option selected disabled>--Pilih Dahi--</option>
                                                                    <option value="Loncos Ke Belakang/Lurus Kebawah"
                                                                        {{ $dataPegawai->siyalem->dahi === 'Loncos Ke Belakang/Lurus Kebawah' ? 'selected' : '' }}>
                                                                        Loncos Ke Belakang/Lurus Kebawah
                                                                    </option>
                                                                    <option value="Cenderung ke belakang"
                                                                        {{ $dataPegawai->siyalem->dahi === 'Cenderung ke belakang' ? 'selected' : '' }}>
                                                                        Cenderung ke belakang
                                                                    </option>
                                                                    <option value="Lain-Lain">Lain-Lain</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-sm-12 mb-3">
                                                                <label class="form-label" for="hidung">Hidung</label>
                                                                <select class="form-select" id="basic-form-gender"
                                                                    name="hidung" aria-label="Default select example">
                                                                    <option selected disabled>--Pilih Hidung--</option>
                                                                    <option value="Pangkalnya Rata"
                                                                        {{ $dataPegawai->siyalem->hidung === 'Pangkalnya Rata' ? 'selected' : '' }}>
                                                                        Pangkalnya Rata
                                                                    </option>
                                                                    <option
                                                                        value="Batangnya:Membentuk kedalam/keluar lurus, alasnya menuju ke atas"
                                                                        {{ $dataPegawai->siyalem->hidung === 'Batangnya:Membentuk kedalam/keluar lurus, alasnya menuju ke atas' ? 'selected' : '' }}>
                                                                        Batangnya:Membentuk kedalam/keluar lurus,
                                                                        alasnya menuju ke
                                                                        atas
                                                                    </option>
                                                                    <option value="Lain-Lain">Lain-Lain</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-sm-12 mb-3">
                                                                <label class="form-label" for="bibir">Bibir</label>
                                                                <select class="form-select" id="basic-form-gender"
                                                                    name="bibir" aria-label="Default select example">
                                                                    <option selected disabled>--Pilih Bibir--</option>
                                                                    <option value="Tebal"
                                                                        {{ $dataPegawai->siyalem->bibir === 'Tebal' ? 'selected' : '' }}>
                                                                        Tebal
                                                                    </option>
                                                                    <option value="Tipis"
                                                                        {{ $dataPegawai->siyalem->bibir === 'Tipis' ? 'selected' : '' }}>
                                                                        Tipis
                                                                    </option>
                                                                    <option value="Sumbing"
                                                                        {{ $dataPegawai->siyalem->bibir === 'Sumbing' ? 'selected' : '' }}>
                                                                        Sumbing
                                                                    </option>
                                                                    <option value="Lain-Lain">Lain-Lain</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-sm-12 mb-3">
                                                                <label class="form-label" for="telinga">Telinga</label>
                                                                <select class="form-select" id="basic-form-gender"
                                                                    name="telinga" aria-label="Default select example">
                                                                    <option selected disabled>--Pilih Telinga--</option>
                                                                    <option value="Bulat bujur tiga penjuru dari belakang"
                                                                        {{ $dataPegawai->siyalem->telinga === 'Bulat bujur tiga penjuru dari belakang' ? 'selected' : '' }}>
                                                                        Bulat bujur tiga penjuru dari belakang
                                                                    </option>
                                                                    <option
                                                                        value="Berlengket dengan kepala dnegan kepala bagian atas mengenai kepala belakang"
                                                                        {{ $dataPegawai->siyalem->telinga === 'Berlengket dengan kepala dnegan kepala bagian atas mengenai kepala belakang' ? 'selected' : '' }}>
                                                                        Berlengket dengan kepala dnegan kepala bagian
                                                                        atas mengenai
                                                                        kepala belakang
                                                                    </option>
                                                                    <option value="Lain-Lain">Lain-Lain</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-sm-12 mb-3">
                                                                <label class="form-label"
                                                                    for="urusan_polisi_militer">Urusan
                                                                    Polisi Militer</label>
                                                                <select class="form-select" id="basic-form-gender"
                                                                    name="urusan_polisi_militer"
                                                                    aria-label="Default select example">
                                                                    <option selected disabled>--Pilih Urusan Polisi
                                                                        Militer--
                                                                    </option>
                                                                    <option value="Pernah"
                                                                        {{ $dataPegawai->siyalem->urusan_polisi_militer === 'Pernah' ? 'selected' : '' }}>
                                                                        Pernah
                                                                    </option>
                                                                    <option value="Tidak Pernah"
                                                                        {{ $dataPegawai->siyalem->urusan_polisi_militer === 'Tidak Pernah' ? 'selected' : '' }}>
                                                                        Tidak Pernah
                                                                    </option>
                                                                    <option value="Lain-Lain">Lain-Lain</option>
                                                                </select>
                                                            </div>
                                                            <button class="btn btn-primary" type="submit">Edit
                                                                Siyalemens</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
