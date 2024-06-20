@extends('layouts.escritorio')

@section('styles')

@endsection

@section('content')

<div id="app"></div>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Administración de Roles</h1>
    @can('role-create')
        <a href="{{ route('roles.create')}}" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="far fa-user fa-sm text-white-50"></i>
            Agregar rol
        </a>
    @endcan
</div>

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

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Rol</th>
                        <th width="280px"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $key => $role)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $role->name }}</td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="{{ route('roles.show',$role->id) }}" data-toggle="tooltip" data-placement="top" title="Mostrar">
                                <i class="fas fa-eye"></i> Mostrar
                            </a>
                            @can('role-edit')
                                <a class="btn btn-sm btn-success" href="{{ route('roles.edit',$role->id) }}" data-toggle="tooltip" data-placement="top" title="Editar">
                                    <i class="fas fa-edit"></i> Editar
                                </a>
                            @endcan
                            @can('role-delete')
                                <a class="btn btn-sm btn-danger" href="" data-bs-toggle="modal" data-bs-target="#modalEliminar{{ $role->id }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar">
                                    <i class="fas fa-trash-alt"></i> Borrar
                                </a>
                                <div class="modal fade" id="modalEliminar{{ $role->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header d-flex justify-content-center">
                                                <h4>Eliminar Registro</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p class="text-center">Está seguro(a) de eliminar el rol {{ $role->name }} / ID: {{ $role->id}} ?</p>
                                            </div>
                                            <div class="modal-footer d-flex justify-content-center">
                                                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cancelar</button>
                                                <form action="{{ route('roles.destroy', $role->id)}}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-danger btn-sm" type="submit" data-bs-toggle="tooltip" data-bs-placement="top" title="Borrar"><i class="fas fa-trash-alt"></i> Borrar</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endcan
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $roles->render() !!}
        </div>
    </div>
</div>

@endsection

@push('scripts')

@endpush
