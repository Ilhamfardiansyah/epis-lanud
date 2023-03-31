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
                                <h3>Input Foto</h3>
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

                                    <div class="card-header">
                                        <div class="row flex-between-end">
                                            <div class="col-auto align-self-center">
                                                <h5 class="mb-0">Tampak Foto Depan</h5>
                                            </div>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                    </div>
                                    <div class="mb-3">
                                        <input class="form-control @error('nopassring') is-invalid @enderror"
                                            id="basic-form-nopassring" name="nopassring" type="file"
                                            placeholder="No. Pass Ring" autofocus />
                                        @error('nopassring')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="card-header">
                                        <div class="row flex-between-end">
                                            <div class="col-auto align-self-center">
                                                <h5 class="mb-0">Tampak Foto Samping Kanan</h5>
                                            </div>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                    </div>
                                    <div class="mb-3">
                                        <input class="form-control @error('nopassring') is-invalid @enderror"
                                            id="basic-form-nopassring" name="nopassring" type="file"
                                            placeholder="No. Pass Ring" autofocus />
                                        @error('nopassring')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="card-header">
                                        <div class="row flex-between-end">
                                            <div class="col-auto align-self-center">
                                                <h5 class="mb-0">Tampak Foto Samping Kiri</h5>
                                            </div>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                    </div>
                                    <div class="mb-3">
                                        <input class="form-control @error('nopassring') is-invalid @enderror"
                                            id="basic-form-nopassring" name="nopassring" type="file"
                                            placeholder="No. Pass Ring" autofocus />
                                        @error('nopassring')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="card-header">
                                        <div class="row flex-between-end">
                                            <div class="col-auto align-self-center">
                                                <h5 class="mb-0">Upload Sidik Jari</h5>
                                            </div>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                    </div>
                                    <div class="mb-3">
                                        <input class="form-control @error('nopassring') is-invalid @enderror"
                                            id="basic-form-nopassring" name="nopassring" type="file"
                                            placeholder="No. Pass Ring" autofocus />
                                        @error('nopassring')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
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
