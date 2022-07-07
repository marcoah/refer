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
