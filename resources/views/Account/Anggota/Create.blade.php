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
                                <form action={{ url('/dashboard/create') }} method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-form-gender">Lembaga (Adegan)</label>
                                        <select class="form-select @error('jenis') is-invalid @enderror"
                                            id="basic-form-gender" name="jenis" aria-label="Default select example">
                                            <option selected disabled>-- Lembaga --</option>
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
                                        <label class="form-label" for="basic-form-gender">Sikap</label>
                                        <select class="form-select @error('jenis') is-invalid @enderror"
                                            id="basic-form-gender" name="jenis" aria-label="Default select example">
                                            <option selected="selected">-- Sikap --</option>
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
                                        <label class="form-label" for="basic-form-gender">Bangun Kepala</label>
                                        <select class="form-select @error('jenis') is-invalid @enderror"
                                            id="basic-form-gender" name="jenis" aria-label="Default select example">
                                            <option selected="selected">-- Bangun Kepala --</option>
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
                                        <label class="form-label" for="basic-form-gender">Rambut</label>
                                        <select class="form-select @error('jenis') is-invalid @enderror"
                                            id="basic-form-gender" name="jenis" aria-label="Default select example">
                                            <option selected="selected">-- Rambut --</option>
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
                                        <label class="form-label" for="basic-form-gender">Kening</label>
                                        <select class="form-select @error('jenis') is-invalid @enderror"
                                            id="basic-form-gender" name="jenis" aria-label="Default select example">
                                            <option selected="selected">-- Kening --</option>
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
                                        <label class="form-label" for="basic-form-gender">Dahi</label>
                                        <select class="form-select @error('jenis') is-invalid @enderror"
                                            id="basic-form-gender" name="jenis" aria-label="Default select example">
                                            <option selected="selected">-- Dahi --</option>
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
                                        <label class="form-label" for="basic-form-gender">Hidung</label>
                                        <select class="form-select @error('jenis') is-invalid @enderror"
                                            id="basic-form-gender" name="jenis" aria-label="Default select example">
                                            <option selected="selected">-- Hidung --</option>
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
                                        <label class="form-label" for="basic-form-gender">Bibir</label>
                                        <select class="form-select @error('jenis') is-invalid @enderror"
                                            id="basic-form-gender" name="jenis" aria-label="Default select example">
                                            <option selected="selected">-- Bibir --</option>
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
                                        <label class="form-label" for="basic-form-gender">Telinga</label>
                                        <select class="form-select @error('jenis') is-invalid @enderror"
                                            id="basic-form-gender" name="jenis" aria-label="Default select example">
                                            <option selected="selected">-- Telinga --</option>
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
                                        <label class="form-label" for="basic-form-gender">Urusan Polisi Militer</label>
                                        <select class="form-select @error('jenis') is-invalid @enderror"
                                            id="basic-form-gender" name="jenis" aria-label="Default select example">
                                            <option selected="selected">-- Urusan Polisi Militer --</option>
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
