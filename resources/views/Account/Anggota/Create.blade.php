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
                                <h3>Siyalemen</h3>
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
                                <form action={{ url('/dashboard/create_syalemen') }} method="post">
                                    @csrf

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-form-gender">Lembaga (Adegan)</label>
                                        <select class="form-select @error('lembaga') is-invalid @enderror"
                                            id="basic-form-gender" name="lembaga" aria-label="Default select example">
                                            <option selected disabled>-- Lembaga --</option>
                                            <option value="Kuat">Kuat</option>
                                            <option value="Tegak">Tegak</option>
                                            <option value="Lempai">Lempai</option>
                                            <option value="Lemah">Lemah</option>
                                        </select>
                                        @error('lembaga')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-form-gender">Sikap</label>
                                        <select class="form-select @error('sikap') is-invalid @enderror"
                                            id="basic-form-gender" name="sikap" aria-label="Default select example">
                                            <option selected disabled>-- Sikap --</option>
                                            <option value="Tegak">Tegak</option>
                                            <option value="Gagah">Gagah</option>
                                            <option value="Bungkok">Bungkok</option>
                                            <option value="Kepal Tunduk Kaku">Kepal Tunduk Kaku</option>
                                        </select>
                                        @error('sikap')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-form-gender">langkah</label>
                                        <select class="form-select @error('langkah') is-invalid @enderror"
                                            id="basic-form-gender" name="langkah" aria-label="Default select example">
                                            <option selected disabled>-- Langkah --</option>
                                            <option value="Lenting">Lenting</option>
                                            <option value="Tenang">Tenang</option>
                                            <option value="Langkah Panjang">Langkah Panjang</option>
                                            <option value="Langkah Pendek">Langkah Pendek</option>
                                        </select>
                                        @error('langkah')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-form-gender">Bangun Kepala</label>
                                        <select class="form-select @error('bangun kepala') is-invalid @enderror"
                                            id="basic-form-gender" name="bangun kepala" aria-label="Default select example">
                                            <option selected disabled>-- Bangun Kepala --</option>
                                            <option value="Sebagai Pangkal">Sebagai Pangkal</option>
                                            <option value="Belah Ketupat">Belah Ketupat</option>
                                            <option value="Bulat">Bulat</option>
                                            <option value="Lonjong">Lonjong</option>
                                            <option value="Jorong">Jorong</option>
                                            <option value="Panjang">Panjang</option>
                                        </select>
                                        @error('bangun kepala')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-form-gender">Rambut</label>
                                        <select class="form-select @error('rambut') is-invalid @enderror"
                                            id="basic-form-gender" name="rambut" aria-label="Default select example">
                                            <option selected disabled>-- Rambut --</option>
                                            <option value="Lebat/Jarang">Lebat/Jarang</option>
                                            <option value="Berombak/Kejur">Berombak/Kejur</option>
                                            <option value="Kejur/Keriting">Kejur/Keriting</option>
                                            <option value="Tegak">Tegak</option>
                                        </select>
                                        @error('rambut')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-form-gender">Kening</label>
                                        <select class="form-select @error('kening') is-invalid @enderror"
                                            id="basic-form-gender" name="kening" aria-label="Default select example">
                                            <option selected disabled>-- Kening --</option>
                                            <option value="Rata">Rata</option>
                                            <option value="Miring">Miring</option>
                                            <option value="Ke Atas/Ke Bawah">Ke Atas/Ke Bawah</option>
                                        </select>
                                        @error('kening')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-form-gender">Dahi</label>
                                        <select class="form-select @error('dahi') is-invalid @enderror"
                                            id="basic-form-gender" name="dahi" aria-label="Default select example">
                                            <option selected disabled>-- Dahi --</option>
                                            <option value="Loncos Ke Belakang/Lurus Kebawah">Loncos Ke Belakang/Lurus
                                                Kebawah</option>
                                            <option value="Cenderung ke belakang">Cenderung ke belakang</option>
                                        </select>
                                        @error('dahi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-form-gender">Hidung</label>
                                        <select class="form-select @error('hidung') is-invalid @enderror"
                                            id="basic-form-gender" name="hidung" aria-label="Default select example">
                                            <option selected disabled>-- Hidung --</option>
                                            <option value="Pangkalnya Rata">Pangkalnya Rata</option>
                                            <option
                                                value="Batangnya:Membentuk kedalam/keluar lurus, alasnya menuju ke atas">
                                                Batangnya:Membentuk kedalam/keluar lurus, alasnya menuju ke atas</option>
                                        </select>
                                        @error('hidung')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-form-gender">Bibir</label>
                                        <select class="form-select @error('bibir') is-invalid @enderror"
                                            id="basic-form-gender" name="bibir" aria-label="Default select example">
                                            <option selected disabled>-- Bibir --</option>
                                            <option value="Tebal">Tebal</option>
                                            <option value="Tipis">Tipis</option>
                                            <option value="Sumbing">Sumbing</option>
                                        </select>
                                        @error('bibir')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-form-gender">Telinga</label>
                                        <select class="form-select @error('telinga') is-invalid @enderror"
                                            id="basic-form-gender" name="telinga" aria-label="Default select example">
                                            <option selected disabled>-- Telinga --</option>
                                            <option value="Bulat bujur tiga penjuru dari belakang">Bulat bujur tiga penjuru
                                                dari belakang</option>
                                            <option
                                                value="Berlengket dengan kepala dnegan kepala bagian atas mengenai kepala belakang">
                                                Berlengket dengan kepala dnegan kepala bagian atas mengenai kepala belakang
                                            </option>
                                        </select>
                                        @error('telinga')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-form-gender">Urusan Polisi Militer</label>
                                        <select class="form-select @error('urusan polisi militer') is-invalid @enderror"
                                            id="basic-form-gender" name="urusan polisi militer"
                                            aria-label="Default select example">
                                            <option selected disabled>-- Urusan Polisi Militer --</option>
                                            <option value="Pernah">Pernah</option>
                                            <option value="Tidak Pernah">Tidak Pernah</option>
                                        </select>
                                        @error('urusan polisi militer')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                            </div>
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
