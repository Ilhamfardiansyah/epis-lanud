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
                                <h3>Input Anggota</h3>
                                <p class="mb-0"></p><a class="btn btn-link btn-sm ps-0 mt-2"
                                    href="https://getbootstrap.com/docs/5.1/forms/layout" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body bg-light">
                        <div class="tab-content">
                            <div class="tab-pane preview-tab-pane active" role="tabpanel"
                                aria-labelledby="tab-dom-d4ebf6c5-74b4-4308-8c64-cda718c9b324"
                                id="dom-d4ebf6c5-74b4-4308-8c64-cda718c9b324">
                                @include('sweetalert::alert')
                                <form action="{{ route('pegawai.store') }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-form-nopassring">No. Pass Ring</label>
                                        <input class="form-control @error('nopassring') is-invalid @enderror"
                                            id="basic-form-nopassring" name="nopassring" type="number"
                                            placeholder="No. Pass Ring" autofocus />
                                        @error('nopassring')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-form-nama">Nama Lengkap</label>
                                        <input class="form-control @error('nama') is-invalid @enderror" id="basic-form-nama"
                                            name="nama" type="text" placeholder="Nama Lengkap" />
                                        @error('nama')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-form-pangkat">Pangkat</label>
                                        <input class="form-control @error('pangkat') is-invalid @enderror"
                                            id="basic-form-pangkat" name="pangkat" type="text" placeholder="Pangkat" />
                                        @error('pangkat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-form-nrp">No NRP</label>
                                        <input class="form-control @error('NRP') is-invalid @enderror" id="basic-form-nrp"
                                            name="NRP" type="text" placeholder="No NRP" />
                                        @error('NRP')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-form-jabatan">Jabatan</label>
                                        <input class="form-control @error('jabatan') is-invalid @enderror"
                                            id="basic-form-jabatan" name="jabatan" type="text" placeholder="Jabatan" />
                                        @error('jabatan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-form-kesatuan">Kesatuan</label>
                                        <input class="form-control @error('kesatuan') is-invalid @enderror"
                                            id="basic-form-kesatuan" name="kesatuan" type="text"
                                            placeholder="Kesatuan" />
                                        @error('kesatuan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-form-tandajasa">Tanda Jasa</label>
                                        <input class="form-control @error('tandajasa') is-invalid @enderror"
                                            id="basic-form-tandajasa" name="tandajasa" type="text"
                                            placeholder="Tanda Jasa" />
                                        @error('tandajasa')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-form-dob">Tempat, Tanggal Lahir</label>
                                        <input class="form-control @error('tgl') is-invalid @enderror" name="tgl"
                                            id="basic-form-dob" type="text" placeholder="Contoh: Jakarta, 01-01-1990" />
                                        @error('tgl')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-form-kulit">Warna Kulit</label>
                                        <input class="form-control @error('warnakulit') is-invalid @enderror"
                                            name="warnakulit" id="basic-form-kulit" type="text"
                                            placeholder="Warna Kulit" />
                                        @error('warnakulit')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-form-mata">Mata</label>
                                        <input class="form-control @error('mata') is-invalid @enderror"
                                            id="basic-form-mata" type="text" name="mata" placeholder="Mata" />
                                        @error('mata')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-form-rambut">Rambut</label>
                                        <input class="form-control @error('rambut') is-invalid @enderror"
                                            id="basic-form-rambut" type="text" name="rambut" placeholder="Rambut" />
                                        @error('rambut')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-form-goldarah">Gol. Darah</label>
                                        <input class="form-control @error('goldarah') is-invalid @enderror"
                                            id="basic-form-goldarah" type="text" name="goldarah"
                                            placeholder="Gol. Darah" />
                                        @error('goldarah')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-form-gender">Jenis Kelamin</label>
                                        <select class="form-select @error('jenis') is-invalid @enderror"
                                            id="basic-form-gender" name="jenis" aria-label="Default select example">
                                            <option selected="selected">Select your gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                        @error('jenis')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-form-alamat">Alamat</label>
                                        <textarea class="form-control @error('alamatsekarang') is-invalid @enderror" id="basic-form-alamat"
                                            name="alamatsekarang" rows="3" placeholder="Contoh: Jakarta Pusat, Jl.Tanah Abang no 01"></textarea>
                                        @error('alamatsekarang')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-form-suku">Suku Bangsa</label>
                                        <input class="form-control @error('suku') is-invalid @enderror"
                                            id="basic-form-suku" type="text" name="suku"
                                            placeholder="Suku Bangsa" />
                                        @error('suku')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-form-agama">Agama</label>
                                        <input class="form-control @error('agama') is-invalid @enderror"
                                            id="basic-form-agama" type="text" name="agama" placeholder="Agama" />
                                        @error('agama')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <label class="form-label" for="basic-form-tinggi">Tinggi & Berat</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control @error('tinggi') is-invalid @enderror"
                                            placeholder="Tinggi dan Berat" aria-label="Tinggi dan Berat"
                                            aria-describedby="basic-addon1" name="tinggi">
                                        <span class="input-group-text" id="basic-addon1">cm & kg</span>
                                        @error('tinggi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                            </div>

                            <div class="card-header">
                                <div class="row flex-between-end">
                                    <div class="col-auto align-self-center">
                                        <h5 class="mb-0">Data Orang Tua</h5>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-form-namaayah">Nama Ayah & Alamat</label>
                                <textarea class="form-control @error('ayahalamat') is-invalid @enderror" id="basic-form-namaayah" name="ayahalamat"
                                    rows="3" type="text" placeholder="Contoh: Nama Ayah, Jakarta Pusat, Jl.Tanah Abang no 01"></textarea>
                                @error('ayahalamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-form-namaibu">Nama Ibu & Alamat</label>
                                <textarea class="form-control @error('ibualamat') is-invalid @enderror" id="basic-form-namaibu" name="ibualamat"
                                    rows="3" type="text" placeholder="Contoh: Nama Ibu, Jakarta Pusat, Jl.Tanah Abang no 01"></textarea>
                                @error('ibualamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="card-header">
                                <div class="row flex-between-end">
                                    <div class="col-auto align-self-center">
                                        <h5 class="mb-0">Data Keluarga</h5>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-form-namapasangan">Nama Istri/Suami dan
                                    Alamat</label>
                                <textarea class="form-control @error('istrialamat') is-invalid @enderror" id="basic-form-namapasangan"
                                    rows="3" name="istrialamat" placeholder="Contoh: Nama istri/suami, Jakarta Pusat, Jl.Tanah Abang no 01 "></textarea>
                                @error('istrialamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-form-aktenikah">Tempat/No Akte Nikah</label>
                                <textarea class="form-control @error('tempatnikah') is-invalid @enderror" id="basic-form-aktenikah" rows="3"
                                    name="tempatnikah" type="text" placeholder="Tempat/No Akte Nikah"></textarea>
                                @error('tempatnikah')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="row mb-3">
                                <label class="form-label" for="basic-form-anak">Nama Anak Kandung</label>
                                <div class="col">
                                    <textarea type="text" class="form-control" name="namaanak" placeholder="Anak Ke 1" rows="3"
                                        aria-label="Nama Anak Kandung"></textarea>
                                </div>
                                {{-- <div class="col">
                                    <input type="text" class="form-control" name="namaanak2" placeholder="Anak ke 2"
                                        aria-label="Anak ke 2">
                                </div> --}}
                            </div>
                            {{-- <div class="row mb-3">
                                <div class="col">
                                    <input type="text" class="form-control" name="namaanak3" placeholder="Anak ke 3"
                                        aria-label="Anak ke 3">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="namaanak4" placeholder="Anak ke 4"
                                        aria-label="Anak ke 4">
                                </div>
                            </div> --}}

                            <div class="mb-3">
                                <label class="form-label" for="basic-form-password">Nama Orang Tua Dari
                                    Suami/Istri</label>
                                <textarea class="form-control @error('ortuistrialamat') is-invalid @enderror" id="basic-form-password"
                                    name="ortuistrialamat" rows="3" type="text"
                                    placeholder="Contoh: Nama Orang Tua Dari Suami/Istri, Jakarta Pusat, Jl.Tanah Abang no 01"></textarea>
                                @error('ortuistrialamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button class="btn btn-primary" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
