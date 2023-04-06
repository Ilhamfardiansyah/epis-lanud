@extends('layouts.main')

@section('content')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
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
                            </div>
                            <div id="tableExample2"
                                data-list='{"valueNames":["name","email","age"],"page":5,"pagination":true}'>
                                <div class="table-responsive scrollbar">

                                    <table id="example" class="cell-border" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Nama Anggota</th>
                                                <th>No Passring</th>
                                                <th>Pangkat</th>
                                                <th>NRP</th>
                                                <th>Jabatan</th>
                                                <th>Kesatuan</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $datas)
                                                <tr>
                                                    <td>{{ $datas->nama }}</td>
                                                    <td>{{ $datas->nopassring }}</td>
                                                    <td>{{ $datas->pangkat }}</td>
                                                    <td>{{ $datas->NRP }}</td>
                                                    <td>{{ $datas->jabatan }}</td>
                                                    <td>{{ $datas->kesatuan }}</td>
                                                    <td class="text-center">
                                                        <a class="btn btn-primary btn-sm me-2 mb-1" href="">
                                                            <i class='fa fa-pencil-alt'
                                                                style='color: rgba(255, 255, 255, 0.397)'></i></a>

                                                        <a class="btn btn-danger btn-sm me-2" href="">
                                                            <i class='fa fa-trash-alt'
                                                                style='color: rgba(255, 255, 255, 0.397)'></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <button onclick="window.print()">Cetak</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
