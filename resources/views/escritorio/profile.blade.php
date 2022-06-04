@extends('layouts.escritorio')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div id="app"></div>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-800">Perfil usuario</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Boton de opcion</a>
    </div>

    <!-- Cinta superior-->
    <div class="row">
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card text-white bg-info shadow">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col">
                            <p class="m-0">Horas a Facturar</p>
                            <p class="m-0"><strong>20 horas</strong></p>
                        </div>
                        <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                    </div>
                    <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;15% de las tareas</p>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card text-white bg-primary shadow">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col">
                            <p class="m-0">Horas Facturadas</p>
                            <p class="m-0"><strong>120 horas</strong></p>
                        </div>
                        <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                    </div>
                    <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;Mes de febrero 2020</p>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card text-white bg-success shadow">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col">
                            <p class="m-0">Estado de Cuenta</p>
                            <p class="m-0"><strong>Al día</strong></p>
                        </div>
                        <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                    </div>
                    <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;a la fecha de hoy</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 mb-4">
            @if(session()->get('success'))
                <div class="alert alert-success">
                {{ session()->get('success') }}
                </div>
            @endif
        </div>
    </div>

    <nav class="py-2">
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-link active" id="nav-usuario-tab" data-toggle="tab" href="#nav-usuario" role="tab" aria-controls="nav-usuario" aria-selected="true">Usuario</a>
            <a class="nav-link" id="nav-empresa-tab" data-toggle="tab" href="#nav-empresa" role="tab" aria-controls="nav-empresa" aria-selected="false">Empresa</a>
        </div>
    </nav>

    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-usuario" role="tabpanel" aria-labelledby="nav-usuario-tab">
            <!-- Fila Usuario -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-3">
                        <div class="card-header py-3">
                            <h6 class="text-primary font-weight-bold m-0">Perfil</h6>
                        </div>
                        <div class="card-body text-center shadow">

                            <form action="{{ url('profile/photo') }}" method="post" style="display: none" id="avatarForm">
                                @csrf
                                <input type="file" id="avatarInput" name="photo">
                            </form>

                            <img class="rounded-circle mb-3 mt-4" src="{{ Auth::user()->getAvatarUrl() }}" id="avatarImage" width="160" height="160">
                            <div class="mb-3">
                                <button class="btn btn-primary btn-sm" id="cambiarfoto" type="button">Cambiar Foto</button>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="text-primary font-weight-bold m-0">API TOKENS</h6>
                        </div>
                        <div class="card-body">
                            <div id="app">
                                <passport-clients></passport-clients>
                                <passport-authorized-clients></passport-authorized-clients>
                                <passport-personal-access-tokens></passport-personal-access-tokens>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-3">
                                <div class="card-header py-3">
                                    <p class="text-primary m-0 font-weight-bold">Datos del Usuario</p>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="form-row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="username"><strong>Nombre de Usuario</strong></label>
                                                    <input class="form-control" type="text" placeholder="" name="username" value="{{ Auth::user()->username }}">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="email"><strong>Correo Electrónico</strong></label>
                                                    <input class="form-control" type="email" placeholder="" name="email" value="{{ Auth::user()->email }}">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="celular"><strong>celular</strong></label>
                                                    <input class="form-control" type="text" placeholder="" name="celular" value="{{ Auth::user()->celular }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="first_name"><strong>Nombre</strong></label>
                                                    <input class="form-control" type="text" placeholder="" name="first_name" value="{{ Auth::user()->firstname }}">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="last_name"><strong>Apellido</strong></label>
                                                    <input class="form-control" type="text" placeholder="" name="last_name" value="{{ Auth::user()->lastname }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary btn-sm" type="submit">Guardar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-empresa" role="tabpanel" aria-labelledby="nav-empresa-tab">
            <!-- Fila Empresas -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-3">
                        <div class="card-header py-3">
                            <h6 class="text-primary font-weight-bold m-0">Logo</h6>
                        </div>
                        <div class="card-body text-center shadow">
                            <img class="rounded-circle mb-3 mt-4" src="{{ asset($empresa->empresa_img_logo) }}" width="160" height="160">
                            <div class="mb-3">
                                <button class="btn btn-primary btn-sm" type="button">Cambiar Foto</button>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="text-primary font-weight-bold m-0">Ultimos Documentos</h6>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="factura" class="col-sm-4 col-form-label">Ultima # factura</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" name="empresa_num_factura" value="{{ $empresa->empresa_num_factura }}" readonly>
                                </div>
                                <div class="col-sm-3">
                                    <input class="form-control" type="text" name="empresa_cod_factura" value="{{ $empresa->empresa_cod_factura }}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cotizacion" class="col-sm-4 col-form-label">Ultima # nota</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" name="empresa_num_nota" value="{{ $empresa->empresa_num_nota }}" readonly>
                                </div>
                                <div class="col-sm-3">
                                    <input class="form-control" type="text" name="empresa_cod_nota" value="{{ $empresa->empresa_cod_nota }}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cotizacion" class="col-sm-4 col-form-label">Ultima # cotizacion</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" name="empresa_num_cotizacion" value="{{ $empresa->empresa_num_cotizacion }}" readonly>
                                </div>
                                <div class="col-sm-3">
                                    <input class="form-control" type="text" name="empresa_cod_cotizacion" value="{{ $empresa->empresa_cod_cotizacion }}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="control" class="col-sm-4 col-form-label">Numero de control</label>
                                <div class="col-sm-8">
                                  <input class="form-control" type="text" name="empresa_num_control" value="{{ $empresa->empresa_num_control }}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <a href="{{ url('obtenerUltNumDoc') }}" class="btn btn-sm btn-primary"> Actualizar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-3">
                                <form method="post" action="{{ route('empresas.update', 1) }}">
                                    @method('PATCH')
                                    @csrf
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 font-weight-bold">Datos de la empresa</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="empresa_razon_social"><strong>razon_social</strong></label>
                                                    <input class="form-control" type="text" name="empresa_razon_social" value="{{ $empresa->empresa_razon_social }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="empresa_TRIF"><strong>TRIF</strong></label>
                                                    <input class="form-control" type="text" name="empresa_TRIF" value="{{ $empresa->empresa_TRIF }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="empresa_NRIF"><strong>NRIF</strong></label>
                                                    <input class="form-control" type="text" name="empresa_NRIF" value="{{ $empresa->empresa_NRIF }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="empresa_VRIF"><strong>VRIF</strong></label>
                                                    <input class="form-control" type="text" name="empresa_VRIF" value="{{ $empresa->empresa_VRIF }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="empresa_email"><strong>Correo Electrónico</strong></label>
                                                    <input class="form-control" type="email" name="empresa_email" value="{{ $empresa->empresa_email }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="empresa_celular"><strong>Celular</strong></label>
                                                    <input class="form-control" type="text" name="empresa_celular" value="{{ $empresa->empresa_celular }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="empresa_telefono"><strong>telefono</strong></label>
                                                    <input class="form-control" type="text" name="empresa_telefono" value="{{ $empresa->empresa_telefono }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="empresa_direccion"><strong>Dirección</strong></label>
                                            <textarea class="form-control" row=3 type="text" name="empresa_direccion">{{ $empresa->empresa_direccion }}</textarea>
                                        </div>
                                        <div class="form-row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="empresa_ciudad"><strong>Ciudad</strong></label>
                                                    <input class="form-control" type="text" name="empresa_ciudad" value="{{ $empresa->empresa_ciudad }}">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="empresa_estado"><strong>Estado</strong></label>
                                                    <input class="form-control" type="text" name="empresa_estado" value="{{ $empresa->empresa_estado }}">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="empresa_codigo_postal"><strong>Codigo Postal</strong></label>
                                                    <input class="form-control" type="text" name="empresa_codigo_postal" value="{{ $empresa->empresa_codigo_postal }}">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="empresa_pais"><strong>Pais</strong></label>
                                                    <input class="form-control" type="text" name="empresa_pais" value="{{ $empresa->empresa_pais }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="form-group">
                                            <button class="btn btn-primary btn-sm" type="submit">Guardar&nbsp;datos</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@push('scripts')
    <script type="text/javascript">
        $(function () {
            var $avatarImage, $avatarInput, $avatarForm;

            $avatarImage = $('#cambiarfoto');
            $avatarInput = $('#avatarInput');
            $avatarForm = $('#avatarForm');

            $avatarImage.on('click', function () {
                $avatarInput.click();
            });

            $avatarInput.on('change', function () {
                var formData = new FormData();
                formData.append('photo', $avatarInput[0].files[0]);

                $.ajax({
                    url: $avatarForm.attr('action') + '?' + $avatarForm.serialize(),
                    method: $avatarForm.attr('method'),
                    data: formData,
                    processData: false,
                    contentType: false
                }).done(function (data) {
                    if (data.success)
                        $('#avatarImage').attr('src', data.path);
                }).fail(function () {
                    alert('La imagen subida no tiene un formato correcto');
                });
            });
        });


    </script>
@endpush
