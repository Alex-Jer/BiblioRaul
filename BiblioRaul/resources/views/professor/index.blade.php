@extends('layouts.main')

@section('head')
<title>BiblioRaul - Professores</title>

<!-- DataTables CDN -->
<link rel="stylesheet" type="text/css"
    href="https://cdn.datatables.net/v/bs4/jq-3.3.1/jszip-2.5.0/dt-1.10.20/af-2.3.4/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/cr-1.5.2/fh-3.1.6/kt-2.5.1/r-2.2.3/rr-1.2.6/sc-2.0.1/sp-1.0.1/sl-1.3.1/datatables.min.css" />

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript"
    src="https://cdn.datatables.net/v/bs4/jq-3.3.1/jszip-2.5.0/dt-1.10.20/af-2.3.4/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/cr-1.5.2/fh-3.1.6/kt-2.5.1/r-2.2.3/rr-1.2.6/sc-2.0.1/sp-1.0.1/sl-1.3.1/datatables.min.js">
</script>
@endsection

@section('content')

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            @include('layouts.topbar')

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Professores</h1>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Gerir Professores</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nome</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($professor as $professor)
                                    {{-- <a href="/professor/{{ $professor->id }}">
                                    {{ $professor->nome }}
                                    </a>
                                    <br> --}}
                                    <tr>
                                        <td> {{ $professor->id }} </td>
                                        <td> {{ $professor->nome }} </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td> {{ $professor->id }} </td>
                                        <td> {{ $professor->nome }} </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td> {{ $professor->id }} </td>
                                        <td> {{ $professor->nome }} </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td> {{ $professor->id }} </td>
                                        <td> {{ $professor->nome }} </td>
                                        <td></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        @include('layouts.footer')
    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

@include('layouts.logout-modal')

@endsection

@section('scripts')

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Datatables custom script -->
<script src="/js/datatables.js"></script>
@endsection