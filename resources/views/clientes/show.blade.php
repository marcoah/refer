@extends('layouts.escritorio')

@section('styles')

@endsection

@section('content')

<div class="pagetitle">
    <h1>Detalle cliente</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ route('clientes.index') }}">Lista</a></li>
            <li class="breadcrumb-item active">Detalle</li>
        </ol>
    </nav>
</div>

<section class="section dashboard">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <!-- Título alineado a la izquierda -->
                    <h1 class="h3 mb-0 text-gray-800">Cliente: {{$cliente->cliente_nombre}}</h1>



                    <!-- Botones alineados a la derecha en pantallas grandes -->
                    <div class="d-flex flex-wrap gap-2">
                        <a class="d-none d-sm-inline-block btn btn-primary" href="{{ route('clientes.index') }}">
                            <i class="fas fa-arrow-alt-circle-left fa-sm text-white-50"></i> Volver
                        </a>
                        <a class="d-none d-sm-inline-block btn btn-success" href="{{ route('clientes.edit', $cliente->id) }}">
                            <i class="fas fa-edit fa-sm text-white-50"></i> Editar
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body mt-3">

                <div class="row">
                    <div class="col-lg-12 mb-3">

                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-contacto-tab" data-bs-toggle="pill" data-bs-target="#pills-contacto" type="button" role="tab" aria-controls="pills-contacto" aria-selected="true">Contacto</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-negocio-tab" data-bs-toggle="pill" data-bs-target="#pills-negocio" type="button" role="tab" aria-controls="pills-negocio" aria-selected="false">Negocio</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-documentos-tab" data-bs-toggle="pill" data-bs-target="#pills-documentos" type="button" role="tab" aria-controls="pills-documentos" aria-selected="false">Documentos</button>
                            </li>
                        </ul>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-contacto" role="tabpanel" aria-labelledby="pills-contacto-tab" tabindex="0">
                                <!--Contacto -->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-row">
                                            <div class="col-md-4">
                                                <strong>RIF: </strong>{{ $cliente->cliente_nit }}
                                            </div>
                                            <div class="col-md-4">
                                                <strong>Correo principal: </strong>{{ $cliente->cliente_email1 }}
                                            </div>
                                            <div class="col-md-4">
                                                <strong>Correo secundario: </strong>{{ $cliente->cliente_email2 }}
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <strong>Direccion: </strong> {{ $cliente->cliente_direccion1 }}
                                            </div>
                                            <div class="col-md-12">
                                                <strong>Direccion: </strong> {{ $cliente->cliente_ciudad1 }} {{ $cliente->cliente_estado1 }} {{ $cliente->cliente_pais1 }}
                                            </div>
                                            <div class="col-md-4">
                                                <strong>Celular: </strong> {{ $cliente->cliente_celular }} <a href="https://wa.me/{{ $cliente->cliente_celular }}" class="btn btn-success btn-sm" role="button" data-toggle="tooltip" data-placement="top" title="Enviar mensaje a Whatsapp" target="_blank"><span><i class="fab fa-whatsapp"></i></span></a>
                                            </div>
                                            <div class="col-md-4">
                                                <strong>Teléfono Primario: </strong> {{ $cliente->cliente_telefono1 }}
                                            </div>
                                            <div class="col-md-4">
                                                <strong>Teléfono Secundario: </strong> {{ $cliente->cliente_telefono2 }}
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <strong>Direccion: </strong> {{ $cliente->cliente_direccion2 }} {{ $cliente->cliente_ciudad2 }} {{ $cliente->cliente_estado2 }} {{ $cliente->cliente_pais2 }}
                                            </div>
                                            <div class="col-md-3">
                                                <strong>Teléfono Negocios: </strong> {{ $cliente->cliente_telefono2 }}
                                            </div>
                                            <div class="col-md-4">
                                                <strong>Correo negocios: </strong>{{ $cliente->cliente_email2 }}
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- En COntacto -->
                            </div>
                            <div class="tab-pane fade" id="pills-negocio" role="tabpanel" aria-labelledby="pills-negocio-tab" tabindex="0">
                                <div class="card">
                                    <div class="card-body">
                                        <button id="envio_prueba" class="btn btn-primary" data-email="{{ $cliente->cliente_email1 }}">
                                            Enviar correo de prueba
                                        </button>

                                        <!-- Contenedor para mostrar la respuesta -->
                                        <div id="resultado_envio" class="mt-3"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-documentos" role="tabpanel" aria-labelledby="pills-documentos-tab" tabindex="0">
                                <!-- Documentos -->
                                <div class="card">
                                    <div class="card-body">
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
                                                                <th scope="col">Total BS</th>
                                                                <th scope="col">Total USD</th>
                                                                <th scope="col">Estado documento</th>
                                                                <th scope="col">Fecha</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($documentos as $documento)
                                                            <tr>
                                                                <th scope="row"><a href="{{ route('documentos.show',$documento->id) }}">{{ $documento->id }}</a></th>

                                                                <td>{{ $documento->documento_tipo }}- {{ $documento->documento_numero }}</td>
                                                                <td>{{ number_format($documento->documento_total, 2, ',', '.') }}</td>
                                                                <td>{{ number_format($documento->documento_total, 2, ',', '.') }}</td>
                                                                <td>
                                                                    @if ($documento->documento_status === "PAGADO")
                                                                    <span class="badge badge-success">Pagado</span>
                                                                    @else
                                                                    <span class="badge badge-danger">{{ $documento->documento_status }}</span>
                                                                    @endif
                                                                </td>
                                                                <td>{{ date('d/m/Y', strtotime($documento->documento_fecha)) }}</td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End Documentos -->
                            </div>
                        </div>










</section>

@endsection

@push('scripts')
<script>
    document.getElementById("envio_prueba").addEventListener("click", function() {
        let email = this.getAttribute("data-email"); // Obtener el correo del atributo data-email
        let url = `/send-test-email/${email}`; // Construir la URL dinámica

        // Mostrar un mensaje de carga
        document.getElementById("resultado_envio").innerHTML = "<p>Enviando correo...</p>";

        // Hacer la petición con Fetch
        fetch(url)
        .then(response => response.json()) // Convertir la respuesta a JSON
        .then(data => {
            // Mostrar la respuesta del servidor
            document.getElementById("resultado_envio").innerHTML = `<p>${data.message}</p>`;
        })
        .catch(error => {
            // Manejo de errores
            document.getElementById("resultado_envio").innerHTML = "<p>Error al enviar el correo</p>";
            console.error("Error:", error);
        });
    });
</script>
@endpush
