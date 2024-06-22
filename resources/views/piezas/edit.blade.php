@extends('layouts.escritorio')

@section('styles')

@endsection

@section('content')

<div class="pagetitle">
    <h1>Title</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
        <li class="breadcrumb-item active">Title</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">

        <form method="post" action="{{ route('piezas.update', $pieza->id) }}">
            @method('PATCH')
            @csrf

            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="card mb-4">
                        <div class="card-header">Pieza Basicos</div>
                        <div class="card-body mt-3">
                            <div class="row mb-3">
                                <label for="NPRO" class="col-sm-4 col-form-label">NPRO</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="NPRO" name="NPRO" value="{{$pieza->NPRO}}" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="DPRO" class="col-sm-4 col-form-label">DPRO</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="DPRO" name="DPRO" value="{{$pieza->DPRO}}" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="CPRO" class="col-sm-4 col-form-label">CPRO</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="CPRO" name="CPRO" value="{{ $pieza->CPRO }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="REEM" class="col-sm-4 col-form-label">REEM</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="REEM" name="REEM" value="{{ $pieza->REEM }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">Datos Vehiculo</div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <label for="TVEH" class="col-sm-4 col-form-label">TVEH</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="TVEH" name="TVEH" value="{{ $pieza->TVEH }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="ZDOC" class="col-sm-4 col-form-label">ZDOC</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="ZDOC" name="ZDOC" value="{{ $pieza->ZDOC }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="CORT" class="col-sm-4 col-form-label">CORT</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="CORT" name="CORT" value="{{ $pieza->CORT }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">Inventario</div>
                        <div class="card-body mt-3">
                            <div class="row mb-3">
                                <label for="UBIC" class="col-sm-4 col-form-label">UBIC</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="UBIC" name="UBIC" value="{{ $pieza->UBIC }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="STOC" class="col-sm-4 col-form-label">STOC</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="STOC" name="STOC" value="{{ $pieza->STOC }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="PCUR" class="col-sm-4 col-form-label">PCUR</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="PCUR" name="PCUR" value="{{ $pieza->PCUR }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="PEND" class="col-sm-4 col-form-label">PEND</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="PEND" name="PEND" value="{{ $pieza->PEND }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="DIFE" class="col-sm-4 col-form-label">DIFE</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="DIFE" name="DIFE" value="{{$pieza->DIFE}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <div class="card mb-4">
                        <div class="card-header">Fechas</div>
                        <div class="card-body mt-3">

                            <div class="row mb-3">
                                <label for="FUEN" class="col-sm-4 col-form-label">FUEN</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" id="FUEN" name="FUEN" value="{{ $pieza->FUEN->format('Y-m-d') }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="FUSA" class="col-sm-4 col-form-label">FUSA</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" id="FUSA" name="FUSA" value="{{ $pieza->FUSA->format('Y-m-d') }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">Precios</div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <label for="BPCL" class="col-sm-4 col-form-label">BPCL</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="BPCL" name="BPCL" value="{{ $pieza->BPCL }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="PDUM" class="col-sm-4 col-form-label">PDUM</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="PDUM" name="PDUM" value="{{ $pieza->PDUM }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="PDUA" class="col-sm-4 col-form-label">PDUA</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="PDUA" name="PDUA" value="{{ $pieza->PDUA }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="BPNC" class="col-sm-4 col-form-label">BPNC</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="BPNC" name="BPNC" value="{{ $pieza->BPNC }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">Familia</div>
                        <div class="card-body mt-3">
                            <div class="row mb-3">
                                <label for="FAM1" class="col-sm-4 col-form-label">FAM1</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="FAM1" name="FAM1" value="{{ $pieza->FAM1 }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="FAMI" class="col-sm-4 col-form-label">FAMI</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="FAMI" name="FAMI" value="{{ $pieza->FAMI }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="NPRV" class="col-sm-4 col-form-label">NPRV</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="NPRV" name="NPRV" value="{{ $pieza->NPRV }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="CADU" class="col-sm-4 col-form-label">CADU</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="CADU" name="CADU" value="{{ $pieza->CADU }}">
                                </div>
                            </div>
                        </div>
                    </div>
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
</section>

@endsection

@push('scripts')

@endpush
