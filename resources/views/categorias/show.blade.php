@extends('layouts.escritorio')

@section('styles')

@endsection

@section('content')

<div class="pagetitle">
    <h1>categorias</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Escritorio</a></li>
            <li class="breadcrumb-item"><a href="{{ route('categorias.index') }}">categorias</a></li>
            <li class="breadcrumb-item active">Detalles categoria</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section dashboard">

    <!-- Alerts Row -->
    <div class="row">
        <div class="col-sm-12 mb-4">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Detalles categoria</h4>
                </div>


                <div class="card-body mt-3">

                    <div class="row mb-3">
                        <label for="id" class="col-sm-2 col-form-label">ID</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control-plaintext" id="id" name="id" value="{{ $categoria->id }}" readonly>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="nombre" class="col-sm-2 col-form-label">Nombre categoria</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control-plaintext" id="nombre" name="nombre" value="{{ $categoria->nombre }}" readonly>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="notas" class="col-sm-2 col-form-label">descripcion</label>
                        <div class="col-sm-10">
                            <p>{{ $categoria->descripcion }}</p>
                        </div>
                    </div>


                </div>
                <div class="card-footer">
                    <a class="btn btn-primary btn-lg" href="{{ route('categorias.index') }}" role="button">Volver</a>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')

@endpush
