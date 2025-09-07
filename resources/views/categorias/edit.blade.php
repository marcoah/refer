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
            <li class="breadcrumb-item active">Editar categoria</li>
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
                    <h4>Modificar categoria</h4>
                </div>

                <form method="post" action="{{ route('categorias.update', $categoria->id) }}">
                    @method('PATCH')
                    @csrf

                    <div class="card-body mt-3">

                        <div class="row mb-3">
                            <label for="id" class="col-sm-2 col-form-label">ID</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="id" name="id" value="{{ $categoria->id }}" readonly>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nombre" class="col-sm-2 col-form-label">Nombre categoria</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $categoria->nombre }}" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo" class="col-sm-2 col-form-label">Codigo categoria</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="codigo" maxlength="4" name="codigo" value="{{ $categoria->codigo }}" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="descripcion" class="col-sm-2 col-form-label">Notas</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="descripcion" name="descripcion" style="height: 100px">{{ $categoria->descripcion }}</textarea>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
                        <a class="btn btn-danger btn-lg" href="{{ route('categorias.index') }}" role="button">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>

@endsection

@push('scripts')

@endpush
