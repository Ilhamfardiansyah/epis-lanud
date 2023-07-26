@extends('layouts.main')

@section('content')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>


    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">
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
                            <form action="/dashboard/export/file" method="GET">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-form-nama">Scan No Pass Ring</label>
                                    <input class="form-control @error('nopassring') is-invalid @enderror" id="nopassring"
                                        name="nopassring" type="text" placeholder="Scan No Pass Ring"
                                        value="{{ old('nopassring') }}" autofocus autocomplete />
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
                        <div class="tab-content">
                            <div class="tab-pane preview-tab-pane active" role="tabpanel"
                                aria-labelledby="tab-dom-d4ebf6c5-74b4-4308-8c64-cda718c9b324"
                                id="dom-d4ebf6c5-74b4-4308-8c64-cda718c9b324">
                                @include('sweetalert::alert')
                            </div>
                            <div class="table-responsive scrollbar">

                                <table id="example" class="display nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="text-center">id</th>
                                            <th class="text-center">NO PASSRING</th>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Pangkat</th>
                                            <th class="text-center">NRP</th>
                                            <th class="text-center">jabatan_1</th>
                                            <th class="text-center">Kesatuan</th>
                                            <th class="text-center">Tempat ,tgl buat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">{{ $dataPegawai->id }}</td>
                                            <td class="text-center">{{ $dataPegawai->nopassring }}</td>
                                            <td class="text-center">{{ $dataPegawai->nama }}</td>
                                            <td class="text-center">{{ $dataPegawai->pangkat }}</td>
                                            <td class="text-center">{{ $dataPegawai->NRP }}</td>
                                            <td class="text-center">{{ $dataPegawai->jabatan }}</td>
                                            <td class="text-center">{{ $dataPegawai->kesatuan }}</td>
                                            <td class="text-center">{{ $dataPegawai->created_at }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'pdf', // Remove the default Excel (xlsx) button
                    {
                        extend: 'excel',
                        text: 'Excel (XLS)',
                        filename: 'data',
                        title: '',
                        customize: function(xlsx) {
                            // Modify the workbook object to use .xls extension
                            var sheet = xlsx.xl.worksheets['sheet1.xml'];
                            $('row c', sheet).each(function() {
                                var originalValue = $(this).attr('t');
                                $(this).attr('t', 's'); // Change the type to "s" (string)
                                $(this).attr('s',
                                '2'); // Change the style to "2" (string style index)
                            });
                        }
                    }
                ]
            });
        });
    </script>
@endsection
