@extends('layouts.escritorio')

@section('content')
    <div id="app"></div>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h1 mb-0 text-gray-800">Detalle de piezas</h1>
            <div class="btn-group" role="group" aria-label="botones">
                <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" href="{{ route('piezas.index') }}"><i class="fas fa-arrow-alt-circle-left fa-sm text-white-50"></i> Volver</a>
                <a class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" href="{{ route('piezas.edit', $pieza->id)}}"><i class="fas fa-edit fa-sm text-white-50"></i> Editar</a>
            </div>
        </div>

        <!-- Content Row -->
        <div class="row"></div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="jumbotron">
                    <div class="media">
                        <div class="media-body">
                            <h1 class="display-4">{{$pieza->DPRO}}</h1>
                            <p class="lead">{{$pieza->NPRO}}</p>
                        </div>
                    </div>
                </div>

                <hr class="my-4">

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <p>
                            <a class="btn btn-primary" data-toggle="collapse" href="#collapsePersonales" role="button" aria-expanded="false" aria-controls="collapsePersonales">
                                Datos Contacto
                            </a>
                            <a class="btn btn-primary" data-toggle="collapse" href="#collapseNegocio" role="button" aria-expanded="false" aria-controls="collapseNegocio">
                                Datos Negocio
                            </a>
                            <a class="btn btn-primary" data-toggle="collapse" href="#collapseDocumentos" role="button" aria-expanded="false" aria-controls="collapseDocumentos">
                                Documentos
                            </a>
                        </p>
                    </div>
                </div>
                <div class="collapse" id="collapseDocumentos">
                    <div class="card card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <strong>Documentos</strong>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Tipo</th>
                                                <th scope="col">Total</th>
                                                <th scope="col">Estado documento</th>
                                                <th scope="col">Fecha</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse" id="collapsePersonales">
                    <div class="card card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <strong>Correo principal: </strong>{{ $pieza->NPRO }}
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>
                    <div class="card card-body">
                        <div class="form-row">
                            <div class="col-md-12">
                                <strong>Direccion: </strong>
                            </div>
                            <div class="col-md-12">
                                <strong>Direccion: </strong>
                            </div>
                            <div class="col-md-4">
                                <strong>Celular: </strong>
                            </div>
                            <div class="col-md-4">
                                <strong>Teléfono Primario: </strong>
                            </div>
                            <div class="col-md-4">
                                <strong>Teléfono Secundario: </strong>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse" id="collapseNegocio">
                    <div class="card card-body">
                        <div class="form-row">
                            <div class="col-md-12">
                                <strong>Direccion: </strong>
                            </div>
                            <div class="col-md-3">
                                <strong>Teléfono Negocios: </strong>
                            </div>
                            <div class="col-md-4">
                                <strong>Correo negocios: </strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
