@extends('layouts.main')

@section('head')
<title>BiblioRaul - Turmas</title>

<!-- DataTables CDN -->
<link rel="stylesheet" type="text/css"
    href="https://cdn.datatables.net/v/bs4/jq-3.3.1/jszip-2.5.0/dt-1.10.20/af-2.3.4/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/cr-1.5.2/fh-3.1.6/kt-2.5.1/r-2.2.3/rr-1.2.6/sc-2.0.1/sp-1.0.1/sl-1.3.1/datatables.min.css" />

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

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="row">
                            <h5 class="col-9 d-flex p-2 m-0 font-weight-bold text-primary">
                                Gerir Turmas
                                </h4>
                                <div class="col-3">
                                    <button type="button"
                                        class="float-right d-flex d-sm-inline-block btn btn-sm btn-primary shadow-sm"
                                        style="margin-top:0.3rem" data-toggle="modal" data-target="#newTurmaModal">
                                        <i class="fas fa-plus-circle fa-sm text-white-50"></i> Adicionar
                                        Turma</button>
                                </div>
                        </div>
                        {{-- <h5 class="m-0 font-weight-bold text-primary"> --}}

                        {{-- </h5> --}}

                    </div>

                    <div class="card-body">
                        <div class="table table-clear">
                            <table class="table zebra" id="dataTable" width="100%" cellspacing="0">
                                <thead class="transparency">
                                    <tr>
                                        <th>Nome</th>
                                        <th class="text-center">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($turmas as $turma)
                                    <tr>
                                        <td> {{ $turma->nome }} </td>
                                        <td class="text-center">
                                            <a type="button" data-id="{{ $turma->id }}" data-nome="{{ $turma->nome }}"
                                                data-toggle="modal" data-target="#editTurmaModal">
                                                <i class="far fa-edit" style="color:#f6993f"></i>
                                            </a>
                                            <a type="button" data-turma_id="{{ $turma->id }}" data-toggle="modal"
                                                data-target="#deleteTurmaModal">
                                                <i class="far fa-trash-alt" style="color:#e3342f"></i></a>
                                        </td>
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

<!-- New Turma Modal -->
@include('turma.modals.new')

<!-- Edit Turma Modal -->
@include('turma.modals.edit')

<!-- Delete Turma Modal -->
@include('turma.modals.delete')

@include('layouts.logout-modal')

@endsection

@section('scripts')

<!-- DataTables Core -->
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Datatables custom script -->
<script src="/js/datatable/turma.js"></script>

<!-- DataTables CDN -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript"
    src="https://cdn.datatables.net/v/bs4/jq-3.3.1/jszip-2.5.0/dt-1.10.20/af-2.3.4/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/cr-1.5.2/fh-3.1.6/kt-2.5.1/r-2.2.3/rr-1.2.6/sc-2.0.1/sp-1.0.1/sl-1.3.1/datatables.min.js">
</script>

<!-- Bootstrap JS -->
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS -->
<script src="/js/modals/turma.js"></script>

@endsection