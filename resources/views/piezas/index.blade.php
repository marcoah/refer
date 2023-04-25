@extends('layouts.escritorio')

@section('styles')
<link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<div id="app"></div>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">piezas</h1>
        <a href="{{ route('piezas.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> Agregar piezas
        </a>
    </div>

    <div class="row">
        <div class="col-lg-12 mb-4">
            @if(session()->get('success'))
                <div class="alert alert-success">
                {{ session()->get('success') }}
                </div>
            @endif
        </div>
    </div>

    {{$dataTable->table()}}

    <!--
    <div class="table-responsive-sm">
        <table class="table table-striped table-bordered table-hover dt-responsive nowrap" id="piezas-table" style="width:100%">

        </table>
    </div>
-->
</div>
@endsection

@push('scripts')
<!-- DataTables -->
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>

{{$dataTable->scripts()}}

@endpush
