@extends('layouts.escritorio')

@section('styles')

@endsection

@section('content')

<div class="pagetitle">
    <h1>Piezas</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('piezas.index') }}">Piezas</a></li>
        <li class="breadcrumb-item active">Agregar</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">

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
        <form method="post" action="{{ route('piezas.store') }}">
            @csrf



            <!-- Fila Botones -->
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
                        <a class="btn btn-danger btn-lg" href="{{ route('piezas.index') }}" role="button">Cancelar</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection

@push('scripts')

@endpush
