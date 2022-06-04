@extends('layouts.escritorio')

@section('content')
    <div id="app"></div>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h1 mb-0 text-gray-800">Editar piezas</h1>
            <div class="btn-group" role="group" aria-label="botones">
                <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" href="{{ route('piezas.index') }}"><i class="fas fa-arrow-alt-circle-left fa-sm text-white-50"></i> Volver</a>
            </div>
        </div>

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

                <form method="post" action="{{ route('piezas.update', $pieza->id) }}">
                    @method('PATCH')
                    @csrf

                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <a class="nav-link active" id="pills-basico-tab" data-toggle="pill" href="#pills-basico" role="tab" aria-controls="pills-basico" aria-selected="true">Datos Básicos</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-contactos-tab" data-toggle="pill" href="#pills-contactos" role="tab" aria-controls="pills-contactos" aria-selected="false">Contacto</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-direcciones-tab" data-toggle="pill" href="#pills-direcciones" role="tab" aria-controls="pills-direcciones" aria-selected="false">Direccion</a>
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
                                                <label for="pieza_razon_social" class="col-sm-4 col-form-label">Nombre Completo o Razón social</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="pieza_razon_social" name="pieza_razon_social" value="{{$pieza->pieza_razon_social}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="pieza_email1" class="col-sm-4 col-form-label">Correo Principal</label>
                                                <div class="col-sm-6">
                                                    <input type="email" class="form-control" id="pieza_email1" name="pieza_email1" value="{{ $pieza->pieza_email1 }}" required>
                                                </div>
                                                <div class="col-sm-1">
                                                    <a href="#" class="btn btn-warning btn-xs">
                                                        <i class="fas fa-envelope"></i>
                                                    </a>
                                                </div>
                                                <div class="col-sm-1"></div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="pieza_celular" class="col-sm-4 col-form-label">Celular</label>
                                                <div class="col-sm-6">
                                                    <input type="tel" class="form-control" id="pieza_celular" name="pieza_celular" value="{{ $pieza->pieza_celular }}">
                                                </div>
                                                <div class="col-sm-1">
                                                    <a href="https://wa.me/{{ $pieza->pieza_celular }}" class="btn btn-success btn-xs" role="button" data-toggle="tooltip" data-placement="top" title="Enviar mensaje a Whatsapp" target="_blank">
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
                                                <label for="pieza_tipo" class="col-sm-4 col-form-label">Tipo pieza</label>
                                                <div class="custom-control custom-radio custom-control-inline col-sm-3">
                                                    <input type="radio" class="custom-control-input" name="pieza_tipo" id="pieza_tipo" value="Juridico" @if ($pieza->pieza_tipo == 'Juridico') {{ 'checked' }} @endif>
                                                    <label class="custom-control-label" for="customRadioInline1">Juridico</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline col-sm-3">
                                                    <input type="radio" class="custom-control-input" name="pieza_tipo" id="pieza_tipo" value="Natural" @if ($pieza->pieza_tipo == 'Natural') {{ 'checked' }} @endif>
                                                    <label class="custom-control-label" for="customRadioInline2">Natural</label>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-lg-2">
                                                    <label for="pieza_TRIF">Tipo RIF</label>
                                                    <select id="pieza_TRIF" name="pieza_TRIF" class="form-control">
                                                        <option selected>{{ $pieza->pieza_TRIF }}</option>
                                                        <option value="V">V</option>
                                                        <option value="J">J</option>
                                                        <option value="G">G</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col">
                                                    <label for="pieza_NRIF">Numero RIF</label>
                                                    <input type="text" class="form-control" id="pieza_NRIF" name="pieza_NRIF" value="{{$pieza->pieza_NRIF}}">
                                                </div>
                                                <div class="form-group col-lg-2">
                                                    <label for="pieza_VRIF">Verif. RIF</label>
                                                    <input type="text" class="form-control" id="pieza_VRIF" name="pieza_VRIF" value="{{$pieza->pieza_VRIF}}">
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
                                                <label for="pieza_direccion1">Direccion</label>
                                                <textarea class="form-control" id="pieza_direccion1" name="pieza_direccion1" rows=5>{{$pieza->pieza_direccion1}}</textarea>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-3">
                                                    <label for="pieza_ciudad1">Ciudad</label>
                                                    <input type="text" class="form-control" id="pieza_ciudad1" name="pieza_ciudad1" value="{{$pieza->pieza_ciudad1}}">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="pieza_estado1">Estado</label>
                                                    <input type="text" class="form-control" id="pieza_estado1" name="pieza_estado1" value="{{$pieza->pieza_estado1}}">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="pieza_postalcode1">Codigo Postal</label>
                                                    <input type="text" class="form-control" id="pieza_postalcode1" name="pieza_postalcode1" value="{{$pieza->pieza_postalcode1}}">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="pieza_pais1">Pais</label>
                                                    <input type="text" class="form-control" id="pieza_pais1" name="pieza_pais1" value="{{$pieza->pieza_pais1}}">
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
                                                <label for="pieza_direccion2">Direccion</label>
                                                <textarea class="form-control" id="pieza_direccion2" name="pieza_direccion2" rows=5>{{$pieza->pieza_direccion2}}</textarea>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-3">
                                                    <label for="pieza_ciudad2">Ciudad</label>
                                                    <input type="text" class="form-control" id="pieza_ciudad2" name="pieza_ciudad2" value="{{$pieza->pieza_ciudad2}}">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="pieza_estado2">Estado</label>
                                                    <input type="text" class="form-control" id="pieza_estado2" name="pieza_estado2" value="{{$pieza->pieza_estado2}}">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="pieza_postalcode2">Codigo Postal</label>
                                                    <input type="text" class="form-control" id="pieza_postalcode2" name="pieza_postalcode2" value="{{$pieza->pieza_postalcode2}}">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="pieza_pais2">Pais</label>
                                                    <input type="text" class="form-control" id="pieza_pais2" name="pieza_pais2" value="{{$pieza->pieza_pais2}}">
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
                                                <label for="pieza_email2" class="col-sm-4 col-form-label">email2</label>
                                                <div class="col-sm-6">
                                                    <input type="email" class="form-control" id="pieza_email2" name="pieza_email2" value="{{ $pieza->pieza_email2 }}">
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
                                                <label for="pieza_telefono1" class="col-sm-4 col-form-label">telefono1</label>
                                                <div class="col-sm-6">
                                                    <input type="tel" class="form-control" id="pieza_telefono1" name="pieza_telefono1" value="{{ $pieza->pieza_telefono1 }}">
                                                </div>
                                                <div class="col-sm-1"></div>
                                                <div class="col-sm-1"></div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="pieza_telefono2" class="col-sm-4 col-form-label">telefono2</label>
                                                <div class="col-sm-6">
                                                    <input type="tel" class="form-control" id="pieza_telefono2" name="pieza_telefono2" value="{{ $pieza->pieza_telefono2 }}">
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
                                <a class="btn btn-danger btn-lg" href="{{ route('piezas.index') }}" role="button">Cancelar</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script type="text/javascript">
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
@endpush
