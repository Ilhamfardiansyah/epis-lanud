@extends('layouts.main')

@section('content')
    <div class="row g-3 mb-3">

        <a href="{{ url('dashboard/manage/user/') }}" class="col-md-6">
            <div class="card h-md-100 ecommerce-card-min-width">
                <div class="card-header pb-0">
                    <div class="bg-holder d-none d-lg-block bg-card"
                        style="background-image:url(../../../assets/img/corner-4.png);">
                    </div>
                    @include('sweetalert::alert')

                    <h6 class="mb-0 mt-2 d-flex align-items-center">
                        <span class="ms-1 text-400" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Calculated according to last week's sales"></span>
                    </h6>
                </div>
                <div class="card-body d-flex flex-column justify-content-end">
                    <div class="row">
                        <div class="col">
                            <p class="font-sans-serif lh-1 mb-1 fs-4">
                            <h1>{{ $user }}</h1> User
                            </p>
                        </div>
                        <div class="col-auto ps-0">
                            <div class="bi bi-person"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"
                                    fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                    <path
                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                </svg></div>
                        </div>
                    </div>
                </div>
            </div>
        </a>

        <a href="dashboard/data/pegawai" class="col-md-6">
            <div class="card h-md-100 ecommerce-card-min-width">
                <div class="card-header pb-0">
                    <div class="bg-holder d-none d-lg-block bg-card"
                        style="background-image:url(../../../assets/img/corner-4.png);">
                    </div>
                    <h6 class="mb-0 mt-2 d-flex align-items-center">
                        <span class="ms-1 text-400" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Calculated according to last week's sales"></span>
                    </h6>
                </div>
                <div class="card-body d-flex flex-column justify-content-end">
                    <div class="row">
                        <div class="col">
                            <p class="font-sans-serif lh-1 mb-1 fs-4">
                            <h1>{{ $data }}</h1> Data Anggota</p>
                        </div>
                        <div class="col-auto ps-0">
                            <div class="bi bi-person"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"
                                    fill="currentColor" class="bi bi-database-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.904 1.777C4.978 1.289 6.427 1 8 1s3.022.289 4.096.777C13.125 2.245 14 2.993 14 4s-.875 1.755-1.904 2.223C11.022 6.711 9.573 7 8 7s-3.022-.289-4.096-.777C2.875 5.755 2 5.007 2 4s.875-1.755 1.904-2.223Z" />
                                    <path
                                        d="M2 6.161V7c0 1.007.875 1.755 1.904 2.223C4.978 9.71 6.427 10 8 10s3.022-.289 4.096-.777C13.125 8.755 14 8.007 14 7v-.839c-.457.432-1.004.751-1.49.972C11.278 7.693 9.682 8 8 8s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972Z" />
                                    <path
                                        d="M2 9.161V10c0 1.007.875 1.755 1.904 2.223C4.978 12.711 6.427 13 8 13s3.022-.289 4.096-.777C13.125 11.755 14 11.007 14 10v-.839c-.457.432-1.004.751-1.49.972-1.232.56-2.828.867-4.51.867s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972Z" />
                                    <path
                                        d="M2 12.161V13c0 1.007.875 1.755 1.904 2.223C4.978 15.711 6.427 16 8 16s3.022-.289 4.096-.777C13.125 14.755 14 14.007 14 13v-.839c-.457.432-1.004.751-1.49.972-1.232.56-2.828.867-4.51.867s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972Z" />
                                </svg></div>
                        </div>
                    </div>
                </div>

            </div>
        </a>
    </div>

    <div class="card mb-3">
        <div class="card-body bg-light">
            <div class="tab-content">
                <form action="/dashboard/scan/" method="GET">
                    <div class="mb-3">
                        <label class="form-label" for="basic-form-nama">Scan No Pass Ring</label>
                        <input class="form-control @error('nopassring') is-invalid @enderror" id="nopassring"
                            name="nopassring" type="text" placeholder="Scan No Pass Ring" value="{{ old('nopassring') }}"
                            autofocus autocomplete />
                        @error('nopassring')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-body bg-light">
            <h3 class="text-center">DIAGRAM PANGKAT</h3>
            <div class="tab-content">
                <canvas id="myChart"></canvas>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <script>
                const ctx = document.getElementById('myChart');

                new Chart(ctx, {
                    type: 'polarArea',
                    data: {
                        labels: ['Kapten', 'Kopda', 'kopka', 'Koptu', 'Letkol', 'Letda', 'Lettu',
                            'Mayor', 'Pelda', 'Peltu', 'Penata Muda', 'Pengatur', 'PNS', 'Prada',
                            'Praka', 'Pratu', 'Serda', 'Serka', 'Serma', 'sertu'
                        ],
                        datasets: [{
                            label: 'Total',
                            data: [{{ $kapten }}, {{ $kopda }}, {{ $kopka }},
                                {{ $koptu }}, {{ $letkol }}, {{ $letda }},
                                {{ $lettu }}, {{ $mayor }}, {{ $pelda }},
                                {{ $peltu }}, {{ $penataMuda }}, {{ $pengatur }},
                                {{ $pns }}, {{ $prada }}, {{ $praka }},
                                {{ $pratu }}, {{ $serda }}, {{ $serka }},
                                {{ $serma }}, {{ $sertu }}
                            ],
                            backgroundColor: [
                                'rgb(255, 99, 132)',
                                'rgb(54, 162, 235)',
                                'rgb(255, 205, 86)',
                                'rgb(85, 107, 47)',
                                'rgb(251, 140, 1)',
                                'rgb(153, 50, 204)',
                                'rgb(139, 5, 0)',
                                'rgb(233, 150, 122)',
                                'rgb(143, 188, 144)',
                                'rgb(72, 61, 139)',
                                'rgb(48, 206, 209)',
                                'rgb(148, 0, 211)',
                                'rgb(47, 79, 79)',
                                'rgb(249, 19, 147)',
                                'rgb(43, 191, 254)',
                                'rgb(105, 105, 105)',
                                'rgb(30, 144, 255)',
                                'rgb(178, 34, 33)',
                                'rgb(34, 139, 35)',
                                'rgb(173, 255, 48)',
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            </script>
        </div>
    </div>
@endsection


<script script>
    var input = document.querySelector('#input1');
    input.addEventListener('keyup', function() {
        alert('test')
    })
</script>
