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
    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12 mb-4">
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

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12 mb-4">

            <form method="post" action="{{ route('clientes.update', $cliente->id) }}">
                @method('PATCH')
                @csrf

                <ul class="nav nav-tabs mb-2" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="pills-basico-tab" data-bs-toggle="pill" href="#pills-basico" role="tab" aria-controls="pills-basico" aria-selected="true">Datos Básicos</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-contactos-tab" data-bs-toggle="pill" href="#pills-contactos" role="tab" aria-controls="pills-contactos" aria-selected="false">Contacto</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-direcciones-tab" data-bs-toggle="pill" href="#pills-direcciones" role="tab" aria-controls="pills-direcciones" aria-selected="false">Direccion</a>
                    </li>
                </ul>

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-basico" role="tabpanel" aria-labelledby="pills-basico-tab">
                        <!-- Fila Datos Basicos -->
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <div class="card">
                                    <div class="card-header">Datos Basicos</div>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="cliente_nombre" class="col-sm-4 col-form-label">Razón social</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="cliente_nombre" name="cliente_nombre" value="{{$cliente->cliente_nombre}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="cliente_email1" class="col-sm-4 col-form-label">Correo Principal</label>
                                            <div class="col-sm-6">
                                                <input type="email" class="form-control" id="cliente_email1" name="cliente_email1" value="{{ $cliente->cliente_email1 }}" required>
                                            </div>
                                            <div class="col-sm-1">
                                                <a href="#" class="btn btn-warning btn-xs">
                                                    <i class="fas fa-envelope"></i>
                                                </a>
                                            </div>
                                            <div class="col-sm-1"></div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="cliente_celular" class="col-sm-4 col-form-label">Celular</label>
                                            <div class="col-sm-6">
                                                <input type="tel" class="form-control" id="cliente_celular" name="cliente_celular" value="{{ $cliente->cliente_celular }}">
                                            </div>
                                            <div class="col-sm-1">
                                                <a href="https://wa.me/{{ $cliente->cliente_celular }}" class="btn btn-success btn-xs" role="button" data-toggle="tooltip" data-placement="top" title="Enviar mensaje a Whatsapp" target="_blank">
                                                    <i class="fab fa-whatsapp"></i>
                                                </a>
                                            </div>
                                            <div class="col-sm-1"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card">
                                    <div class="card-header">Datos Tributarios</div>
                                    <div class="card-body text-center">
                                        <div class="form-group row">
                                            <label for="cliente_tipo" class="col-sm-2 col-form-label">Tipo Cliente</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="cliente_tipo" id="cliente_tipo" value="JURIDICO" @if ($cliente->cliente_tipo == 'JURIDICO') {{ 'checked' }} @endif>
                                                <label class="form-check-label" for="inlineRadio1">Juridico</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="cliente_tipo" id="cliente_tipo" value="NATURAL" @if ($cliente->cliente_tipo == 'NATURAL') {{ 'checked' }} @endif>
                                                <label class="form-check-label" for="inlineRadio2">Natural</label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="cliente_nit" class="col-sm-2 col-form-label">Numero RIF</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="cliente_nit" name="cliente_nit" value="{{$cliente->cliente_nit}}">
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
                                            <textarea class="form-control" id="cliente_direccion1" name="cliente_direccion1" rows=5>{{$cliente->cliente_direccion1}}</textarea>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label for="cliente_ciudad1">Ciudad</label>
                                                <input type="text" class="form-control" id="cliente_ciudad1" name="cliente_ciudad1" value="{{$cliente->cliente_ciudad1}}">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="cliente_estado1">Estado</label>
                                                <input type="text" class="form-control" id="cliente_estado1" name="cliente_estado1" value="{{$cliente->cliente_estado1}}">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="cliente_postalcode1">Codigo Postal</label>
                                                <input type="text" class="form-control" id="cliente_postalcode1" name="cliente_postalcode1" value="{{$cliente->cliente_postalcode1}}">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="cliente_pais1">Pais</label>
                                                <input type="text" class="form-control" id="cliente_pais1" name="cliente_pais1" value="{{$cliente->cliente_pais1}}">
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
                                            <textarea class="form-control" id="cliente_direccion2" name="cliente_direccion2" rows=5>{{$cliente->cliente_direccion2}}</textarea>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label for="cliente_ciudad2">Ciudad</label>
                                                <input type="text" class="form-control" id="cliente_ciudad2" name="cliente_ciudad2" value="{{$cliente->cliente_ciudad2}}">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="cliente_estado2">Estado</label>
                                                <input type="text" class="form-control" id="cliente_estado2" name="cliente_estado2" value="{{$cliente->cliente_estado2}}">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="cliente_postalcode2">Codigo Postal</label>
                                                <input type="text" class="form-control" id="cliente_postalcode2" name="cliente_postalcode2" value="{{$cliente->cliente_postalcode2}}">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="cliente_pais2">Pais</label>
                                                <input type="text" class="form-control" id="cliente_pais2" name="cliente_pais2" value="{{$cliente->cliente_pais2}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Final Fila Direccion Personal -->

                    </div>

                    <div class="tab-pane fade" id="pills-contactos" role="tabpanel" aria-labelledby="pills-contactos-tab">
                        <!-- Fila Correo y Telefono-->
                        <div class="row">
                            <!-- Panel Correo Personal -->
                            <div class="col-lg-6 mb-4">
                                <div class="card">
                                    <div class="card-header">Correos electrónicos</div>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="cliente_email2" class="col-sm-4 col-form-label">email2</label>
                                            <div class="col-sm-6">
                                                <input type="email" class="form-control" id="cliente_email2" name="cliente_email2" value="{{ $cliente->cliente_email2 }}">
                                            </div>
                                            <div class="col-sm-1"></div>
                                            <div class="col-sm-1"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Panel Telefono y Celular Personal -->
                            <div class="col-lg-6 mb-4">
                                <div class="card">
                                    <div class="card-header">Teléfonos</div>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="cliente_telefono1" class="col-sm-4 col-form-label">telefono1</label>
                                            <div class="col-sm-6">
                                                <input type="tel" class="form-control" id="cliente_telefono1" name="cliente_telefono1" value="{{ $cliente->cliente_telefono1 }}">
                                            </div>
                                            <div class="col-sm-1"></div>
                                            <div class="col-sm-1"></div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="cliente_telefono2" class="col-sm-4 col-form-label">telefono2</label>
                                            <div class="col-sm-6">
                                                <input type="tel" class="form-control" id="cliente_telefono2" name="cliente_telefono2" value="{{ $cliente->cliente_telefono2 }}">
                                            </div>
                                            <div class="col-sm-1"></div>
                                            <div class="col-sm-1"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Final Fila Correo y Telefono-->
                    </div>
                </div>

                <!-- Fila Botones -->
                <div class="row">
                    <div class="col-lg-12 mb-4">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
                            <a class="btn btn-danger btn-lg" href="{{ route('clientes.index') }}" role="button">Cancelar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection

@push('scripts')
    <script>

    </script>
@endpush
