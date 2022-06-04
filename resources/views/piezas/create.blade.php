@extends('layouts.escritorio')

@section('content')
    <div id="app"></div>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h1 mb-0 text-gray-800">Agregar cliente</h1>
            <div class="btn-group" role="group" aria-label="botones">
                <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" href="{{ route('clientes.index') }}"><i class="fas fa-arrow-alt-circle-left fa-sm text-white-50"></i> Volver</a>
            </div>
        </div>

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

        <!-- Content Row -->
        <div class="row">
            <div class="col-sm-12 mb-4">
                <form method="post" action="{{ route('clientes.store') }}">
                    @csrf

                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="pills-basico-tab" data-toggle="pill" href="#pills-basico" role="tab" aria-controls="pills-basico" aria-selected="true">Datos Básicos</a>
                        </li>
                        <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-direcciones-tab" data-toggle="pill" href="#pills-direcciones" role="tab" aria-controls="pills-direcciones" aria-selected="false">Datos direcciones</a>
                        </li>
                        <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-contactos-tab" data-toggle="pill" href="#pills-contactos" role="tab" aria-controls="pills-contactos" aria-selected="false">Contacto</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-basico" role="tabpanel" aria-labelledby="pills-basico-tab">
                            <!-- Fila Datos Basicos -->
                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <div class="card">
                                        <div class="card-header">Datos Nombre</div>
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <label for="cliente_razon_social">Razon social</label>
                                                    <input type="text" class="form-control" id="cliente_razon_social" name="cliente_razon_social">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card">
                                        <div class="card-header">Datos Tributarios</div>
                                        <div class="card-body text-center">
                                            <div class="form-row">
                                                <div class="form-group col-lg-2">
                                                    <label for="cliente_TRIF">TRIF</label>
                                                    <select id="cliente_TRIF" name="cliente_TRIF" class="form-control">
                                                        <option selected></option>
                                                        <option value="V">V</option>
                                                        <option value="J">J</option>
                                                        <option value="G">G</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col">
                                                    <label for="cliente_NRIF">cliente_NRIF</label>
                                                    <input type="text" class="form-control" id="cliente_NRIF" name="cliente_NRIF">
                                                </div>
                                                <div class="form-group col-lg-1">
                                                    <label for="cliente_VRIF">VRIF</label>
                                                    <input type="text" class="form-control" id="cliente_VRIF" name="cliente_VRIF">
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
                                            <div class="form-row">
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

                        <div class="tab-pane fade" id="pills-contactos" role="tabpanel" aria-labelledby="pills-contactos-tab">
                            <!-- Fila Correo y Telefono-->
                            <div class="row">
                                <!-- Panel Correo Personal -->
                                <div class="col-lg-6 mb-4">
                                    <div class="card">
                                        <div class="card-header">Correos electrónicos</div>
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label for="cliente_email1" class="col-sm-4 col-form-label">email1</label>
                                                <div class="col-sm-6">
                                                    <input type="email" class="form-control" id="cliente_email1" name="cliente_email1" required>
                                                </div>
                                                <div class="col-sm-1"></div>
                                                <div class="col-sm-1"></div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="cliente_email2" class="col-sm-4 col-form-label">email2</label>
                                                <div class="col-sm-6">
                                                    <input type="email" class="form-control" id="cliente_email2" name="cliente_email2">
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
                                                <label for="cliente_celular" class="col-sm-4 col-form-label">Celular</label>
                                                <div class="col-sm-6">
                                                    <input type="tel" class="form-control" id="cliente_celular" name="cliente_celular">
                                                </div>
                                                <div class="col-sm-1"></div>
                                                <div class="col-sm-1"></div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="cliente_telefono1" class="col-sm-4 col-form-label">telefono1</label>
                                                <div class="col-sm-6">
                                                    <input type="tel" class="form-control" id="cliente_telefono1" name="cliente_telefono1">
                                                </div>
                                                <div class="col-sm-1"></div>
                                                <div class="col-sm-1"></div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="cliente_telefono2" class="col-sm-4 col-form-label">telefono2</label>
                                                <div class="col-sm-6">
                                                    <input type="tel" class="form-control" id="cliente_telefono2" name="cliente_telefono2">
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

    </div>
    <!-- End Page Content -->
@endsection
