@extends('layouts.escritorio')

@section('styles')

@endsection

@section('content')

<div class="pagetitle">
    <h1>Crear cliente</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ route('clientes.index') }}">Clientes</a></li>
            <li class="breadcrumb-item active">Crear cliente</li>
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
            <form method="post" action="{{ route('clientes.store') }}">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="pills-basico-tab" data-bs-toggle="pill" href="#pills-basico" role="tab" aria-controls="pills-basico" aria-selected="true">Datos Básicos</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-direcciones-tab" data-bs-toggle="pill" href="#pills-direcciones" role="tab" aria-controls="pills-direcciones" aria-selected="false">Datos direcciones</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body mt-3">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-basico" role="tabpanel" aria-labelledby="pills-basico-tab">
                                <!-- Fila Datos Basicos -->
                                <div class="row">
                                    <div class="col-lg-6 mb-4">
                                        <div class="card">
                                            <div class="card-header">Datos Nombre</div>
                                            <div class="card-body">
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <fieldset class="form-group row">
                                                            <legend class="col-form-label col-sm-2 float-sm-left pt-0">Tipo Cliente</legend>
                                                            <div class="col-sm-10">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="cliente_tipo" id="juridico" value="JURIDICO">
                                                                    <label class="form-check-label" for="gridRadios1">Juridico</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="cliente_tipo" id="natural" value="NATURAL">
                                                                    <label class="form-check-label" for="gridRadios2">Natural</label>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="form-group col">
                                                        <label for="cliente_nombre">Razon social</label>
                                                        <input type="text" class="form-control" id="cliente_nombre" name="cliente_nombre" disabled>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="form-group col">
                                                        <label for="cliente_nit">RIF</label>
                                                        <input type="text" class="form-control" id="cliente_nit" name="cliente_nit" disabled>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label">Estatus</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-select" id="cliente_status" name="cliente_status" aria-label="estado del cliente">
                                                            <option value="Activo" selected>Activo</option>
                                                            <option value="Suspendido">Suspendido</option>
                                                            <option value="Inactivo">Inactivo</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                        <div class="card">
                                            <div class="card-header">Correos electrónicos</div>
                                            <div class="card-body">
                                                <div class="form-group row">
                                                    <label for="cliente_email1" class="col-sm-4 col-form-label">Email 1</label>
                                                    <div class="col-sm-6">
                                                        <input type="email" class="form-control" id="cliente_email1" name="cliente_email1">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="cliente_email2" class="col-sm-4 col-form-label">Email 2</label>
                                                    <div class="col-sm-6">
                                                        <input type="email" class="form-control" id="cliente_email2" name="cliente_email2">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="cliente_celular" class="col-sm-4 col-form-label">Celular</label>
                                                    <div class="col-sm-6">
                                                        <input type="tel" class="form-control" id="cliente_celular" name="cliente_celular">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="cliente_telefono1" class="col-sm-4 col-form-label">Telefono 1</label>
                                                    <div class="col-sm-6">
                                                        <input type="tel" class="form-control" id="cliente_telefono1" name="cliente_telefono1">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="cliente_telefono2" class="col-sm-4 col-form-label">Telefono 2</label>
                                                    <div class="col-sm-6">
                                                        <input type="tel" class="form-control" id="cliente_telefono2" name="cliente_telefono2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Final Fila Datos Basicos -->
                            </div>

                            <div class="tab-pane fade" id="pills-direcciones" role="tabpanel" aria-labelledby="pills-direcciones-tab">
                                <!-- Fila Direccion Primaria -->
                                <div class="row">
                                    <div class="col-lg-6 mb-4">
                                        <div class="card">
                                            <div class="card-header">Direccion Primaria</div>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="cliente_direccion1">Direccion</label>
                                                    <textarea class="form-control" id="cliente_direccion1" name="cliente_direccion1" rows=5></textarea>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="form-group col-md-3">
                                                        <label for="cliente_ciudad1">Ciudad</label>
                                                        <input type="text" class="form-control" id="cliente_ciudad1" name="cliente_ciudad1">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="cliente_estado1">Estado</label>
                                                        <input type="text" class="form-control" id="cliente_estado1" name="cliente_estado1">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="cliente_postalcode1">Codigo Postal</label>
                                                        <input type="text" class="form-control" id="cliente_postalcode1" name="cliente_postalcode1">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="cliente_pais1">Pais</label>
                                                        <input type="text" class="form-control" id="cliente_pais1" name="cliente_pais1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                        <div class="card">
                                            <div class="card-header">Direccion Secundaria</div>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="cliente_direccion2">Direccion</label>
                                                    <textarea class="form-control" id="cliente_direccion2" name="cliente_direccion2" rows=5></textarea>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-3">
                                                        <label for="cliente_ciudad2">Ciudad</label>
                                                        <input type="text" class="form-control" id="cliente_ciudad2" name="cliente_ciudad2">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="cliente_estado2">Estado</label>
                                                        <input type="text" class="form-control" id="cliente_estado2" name="cliente_estado2">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="cliente_postalcode2">Codigo Postal</label>
                                                        <input type="text" class="form-control" id="cliente_postalcode2" name="cliente_postalcode2">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="cliente_pais2">Pais</label>
                                                        <input type="text" class="form-control" id="cliente_pais2" name="cliente_pais2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Final Fila Direccion Personal -->
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
                        <a class="btn btn-danger btn-lg" href="{{ route('clientes.index') }}" role="button">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection

@push('scripts')
    <script type="text/javascript">

        var juridico = document.getElementById('juridico');
        var natural = document.getElementById('natural');
        var razonsocial = document.getElementById('cliente_nombre');
        var rif = document.getElementById('cliente_nit');

        function updateStatus() {
            if (juridico.checked) {
                razonsocial.disabled = false;
                rif.disabled = false;
                rif.setAttribute("value","J");
            } else {
                razonsocial.disabled = false;
                rif.disabled = false;
                rif.setAttribute("value","");
            }
        };

        juridico.addEventListener('change', updateStatus);
        natural.addEventListener('change', updateStatus);
    </script>
@endpush
