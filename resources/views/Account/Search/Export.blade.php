@extends('layouts.main')


@section('content')
    <div class="card mb-3">
        <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(../../../assets/img/corner-4.png);">
        </div>
        <!--/.bg-holder-->

        <div class="card-body position-relative">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Export Idesign</h3>
                    <p class="mb-0"></p><a class="btn btn-link btn-sm ps-0 mt-2"
                        href="https://getbootstrap.com/docs/5.1/forms/layout" target="_blank"></a>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-body bg-light">
            <div class="tab-content">
                <form action="/dashboard/scan/" method="GET">
                    <div class="mb-3">
                        <label class="form-label" for="basic-form-nama">Search anggota masukan no passring</label>
                        <input class="form-control @error('nopassring') is-invalid @enderror" id="nopassring"
                            name="nopassring" type="text" placeholder="Search anggota masukan no passring"
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
        <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(../../../assets/img/corner-4.png);">
        </div>
        <!--/.bg-holder-->
        <div class="card-body position-relative">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Export Idesign</h3>
                    <p class="mb-0"></p><a class="btn btn-link btn-sm ps-0 mt-2"
                        href="https://getbootstrap.com/docs/5.1/forms/layout" target="_blank"></a>

                    <table id="example" class="display nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011-04-25</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <td>Michael Bruce</td>
                                <td>Javascript Developer</td>
                                <td>Singapore</td>
                                <td>29</td>
                                <td>2011-06-27</td>
                                <td>$183,000</td>
                            </tr>
                            <tr>
                                <td>Donna Snider</td>
                                <td>Customer Support</td>
                                <td>New York</td>
                                <td>27</td>
                                <td>2011-01-25</td>
                                <td>$112,000</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot>
                    </table>

                    <script>
                        $(document).ready(function() {
                            $('#example').DataTable({
                                dom: 'Bfrtip',
                                buttons: [
                                    'copy', 'csv', 'excel', 'pdf', 'print'
                                ]
                            });
                        });
                    </script>

                </div>
            </div>
        </div>
    </div>
@endsection



<script>
    var input = document.querySelector('#input1');
    input.addEventListener('keyup', function() {
        alert('test')
    })
</script>
