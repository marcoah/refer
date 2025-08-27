@extends('layouts.escritorio')

@section('styles')

@endsection

@section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-800">{{ __('New user') }}</h1>
        <div class="btn-group" role="group" aria-label="botones">
            <a class="d-sm-inline-block btn btn-danger shadow-sm" href="{{ route('users.index') }}">
                <i class="fa-regular fa-circle-left"></i>
                {{ __('Back') }}
            </a>
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
            <div class="card shadow mb-4">
                <div class="card-body">

                    <form method="post" action="{{ route('users.store') }}">
                        @csrf

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>{{ __('Firstname') }}:</strong>
                                    <input type="text" class="form-control" name="firstname" id="firstname" value={{ old('firstname') }}>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>{{ __('Lastname') }}:</strong>
                                    <input type="text" class="form-control" name="lastname" id="lastname" value={{ old('lastname') }}>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>{{ __('Username') }}:</strong>
                                    <input type="text" class="form-control" name="username" id="username" value={{ old('username') }}>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>{{ __('E-Mail Address') }}:</strong>
                                    <input type="email" class="form-control" name="email" id="email" value={{ old('email') }}>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>{{ __('Password') }}:</strong>
                                    <input type="password" class="form-control" name="password" id="password">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>{{ __('Confirm password') }}:</strong>
                                    <input type="password" class="form-control" name="confirm-password" id="confirm-password">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>{{ __('Role') }}:</strong>
                                    <select class="form-select" name="roles[]" multiple>
                                        @foreach ($roles as $rol)
                                            <option value="{{ $rol }}" >{{ $rol }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa-regular fa-floppy-disk"></i>
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')

@endpush
