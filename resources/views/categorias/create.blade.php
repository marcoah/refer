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
            <li class="breadcrumb-item active">Agregar categoria</li>
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
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Agregar categoria</h4>
                </div>

                <form method="post" action="{{ route('categorias.store') }}">
                    @csrf

                    <div class="card-body mt-3">

                        <div class="row mb-3">
                            <label for="nombre" class="col-sm-2 col-form-label">Nombre categoria</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombre del categoria" value="{{ old('nombre') }}" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codigo" class="col-sm-2 col-form-label">codigo categoria</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Ingrese codigo de categoria" value="{{ old('codigo') }}" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="descripcion" class="col-sm-2 col-form-label">Notas</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="descripcion" name="descripcion" style="height: 100px"></textarea>
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

{{--
<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/select2/select2.min.js') }}"></script>
<script type="text/javascript">
    var $accounts = [
        @foreach (\App\Models\Cuenta::where('codigo', 'LIKE', '%' . '1.1.1.2' . '%')->where('nivel', 5)->get() as $account) {
            id: {{ $account->id }},
            text: '{{ $account->codigo }} - {{ $account->nombre }}',
            name: '{{ $account->nombre }}',
            code: '{{ $account->codigo }}'
        },
        @endforeach
    ];

    $("#account_id").select2({
        data: $accounts,
        placeholder: "Seleccione una cuenta contable",
        allowClear: true,
        theme: 'bootstrap4',
        width: 'resolve',
        language: "es",
        dropdownParent: $("#modal-create")
    });
</script>
--}}
@endpush



