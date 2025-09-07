@extends('layouts.escritorio')

@section('styles')

@endsection

@section('content')
    <div id="app"></div>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ __('User management') }}</h1>
        <a href="{{ route('users.create')}}" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="far fa-user fa-sm text-white-50"></i>
            {{ __('New user') }}
        </a>
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
                            <th>{{ __('Full Name') }}</th>
                            <th>{{ __('E-Mail Address') }}</th>
                            <th>{{ __('Roles') }}</th>
                            <th>{{ __('Last access') }}</th>
                            <th width="280px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $user)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $user->firstname }} {{ $user->lastname }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if(!empty($user->getRoleNames()))
                                    @foreach($user->getRoleNames() as $v)
                                        <span class="badge text-bg-success">{{ $v }}</span>
                                    @endforeach
                                @endif
                            </td>
                            <td>{{ $user->last_login_at ? Carbon\Carbon::parse($user->last_login_at)->diffForHumans() : 'No login yet'}}</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="{{ route('users.show',$user->id) }}" data-toggle="tooltip" data-placement="top" title="{{ __('Show') }}">
                                    <i class="fas fa-eye"></i> {{ __('Show') }}
                                </a>

                                <a class="btn btn-sm btn-success" href="{{ route('users.edit',$user->id) }}" data-toggle="tooltip" data-placement="top" title="{{ __('Edit') }}">
                                    <i class="fas fa-edit"></i> {{ __('Edit') }}
                                </a>
                                @can('edit-users')
                                @endcan

                                @can('delete-users')
                                <a class="btn btn-sm btn-danger" href="" data-toggle="modal" data-target="#modalEliminar{{ $user->id }}" data-toggle="tooltip" data-placement="top" title="{{ __('Delete') }}">
                                    <i class="fas fa-trash-alt"></i> {{ __('Delete') }}
                                </a>
                                <div class="modal fade" id="modalEliminar{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header d-flex justify-content-center">
                                                <h4>{{ __('Delete record') }}</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p class="text-center">{{ __('Are you sure to delete the') }} {{ $user->username }} / ID: {{ $user->id}} ?</p>
                                            </div>
                                            <div class="modal-footer d-flex justify-content-center">
                                                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">{{ __('Cancel') }}</button>

                                                <form action="{{ route('users.destroy', $user->id)}}" method="post" style="display:inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm" type="submit">
                                                        <i class="fas fa-trash-alt"></i> {{ __('Delete') }}
                                                    </button>
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
                {!! $data->render() !!}
            <div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush
