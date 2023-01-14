@extends('layouts.escritorio')

@section('content')
<div id="app"></div>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-800">Configuracion</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Boton de opcion</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-header">Sesion principal</div>
                <div class="card-body">
                    {{ var_dump($data_todo) }}
                </div>
                <div class="card-footer">Footer</div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-header">Sesion usuario</div>
                <div class="card-body">
                    {{ var_dump($data_user) }}
                </div>
                <div class="card-footer">Footer</div>
            </div>
        </div>
    </div>
</div>
@endsection
