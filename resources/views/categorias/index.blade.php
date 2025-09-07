@extends('layouts.escritorio')

@section('styles')
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="pagetitle">
    <h1>Categorias</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Escritorio</a></li>
            <li class="breadcrumb-item active">Categorias</li>
        </ol>
    </nav>
</div><!-- End Page Title -->


<section class="section dashboard">

    <!-- Alertas -->
    <div class="row">
        <div class="col-lg-12 mb-4">
            @if(session()->get('success'))
                <div class="alert alert-success">
                {{ session()->get('success') }}
                </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="card">
            <div class="card-header">
                <div class="d-flex">
                    <div class="p-2 flex-grow-1"><h5>Categoria</h5></div>
                    <div class="p-2">
                        <a href="{{ route('categorias.create') }}" class="btn btn-primary">
                            <i class="fa fa-plus"></i> Nuevo categoria
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover datatable" id="tabla" style="width:100%">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th style="width: 360px;">Nombre</th>
                                <th style="width: 180px;">Codigo</th>
                                <th class="text-center" style="width: 180px;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categorias as $categoria)
                                <tr>
                                    <td>{{ $categoria->id }}</td>
                                    <td>{{ $categoria->nombre }}</td>
                                    <td>{{ $categoria->codigo }}</td>
                                    <td class="text-center hidden-print">
                                        <div class="btn-group">
                                            <a class="btn btn-primary btn-sm" href="{{ route('categorias.show',$categoria->id) }}">
                                                <i class="fas fa-eye"></i>
                                            </a>

                                            <a class="btn btn-success btn-sm" href="{{ route('categorias.edit',$categoria->id) }}">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <button class="btn btn-sm btn-danger" type="button" data-toggle="modal" data-target="#modal-delete-{{ $categoria->id }}">
                                                <i class="fas fa-trash"></i>
                                            </button>

                                            <!-- modalEliminar se muestra al hacer click en boton de borrar ------>
                                            <div class="modal fade" id="modal-delete-{{ $categoria->id }}" tabindex="-1" role="dialog" aria-labelledby="modalDeletecategoria" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header d-flex justify-content-center">
                                                            <h4>Eliminar Registro</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p class="text-center">Está seguro(a) de eliminar la categoria {{$categoria->nombre}} | ID: {{$categoria->id}}?</p>
                                                        </div>
                                                        <div class="modal-footer d-flex justify-content-center">
                                                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</button>
                                                            <form action="{{ route('categorias.destroy', $categoria->id)}}" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger btn-sm" type="submit" data-toggle="tooltip" data-placement="top" title="Borrar">
                                                                    <i class="fas fa-trash-alt"></i> Borrar
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--fin modal-->

                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection

@push('scripts')
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
@endpush
