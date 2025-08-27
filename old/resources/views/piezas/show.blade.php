@extends('layouts.escritorio')

@section('styles')

@endsection

@section('content')

<div class="pagetitle">
    <h1>Piezas</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('piezas.index') }}">Lista</a></li>
        <li class="breadcrumb-item active">Detalle</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card">
                <div class="card-header">Pieza Basicos</div>
                <div class="card-body">
                    <table>
                        <tbody>
                            <tr>
                                <td>NPRO: </td>
                                <td>{{ $pieza->NPRO }}</td>
                            </tr>
                            <tr>
                                <td>DPRO: </td>
                                <td>{{$pieza->DPRO}}</td>
                            </tr>
                            <tr>
                                <td>CPRO: </td>
                                <td>{{$pieza->CPRO}}</td>
                            </tr>
                            <tr>
                                <td>REEM: </td>
                                <td>{{$pieza->REEM}}</td>
                            </tr>

                            <tr>
                                <td>Datos Vehiculo</td>
                            </tr>

                            <tr>
                                <td>TVEH</td>
                                <td>{{ $pieza->TVEH }}</td>
                            </tr>
                            <tr>
                                <td>ZDOC</td>
                                <td>{{ $pieza->ZDOC }}</td>
                            </tr>
                            <tr>
                                <td>CORT</td>
                                <td>{{ $pieza->CORT }}</td>
                            </tr>
                            <tr>
                                <td>Inventario</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>UBIC</td>
                                <td>{{ $pieza->UBIC }}</td>
                            </tr>
                            <tr>
                                <td>STOC</td>
                                <td>{{ $pieza->STOC }}</td>
                            </tr>
                            <tr>
                                <td>PCUR</td>
                                <td>{{ $pieza->PCUR }}</td>
                            </tr>
                            <tr>
                                <td>PEND</td>
                                <td>{{ $pieza->PEND }}</td>
                            </tr>
                            <tr>
                                <td>DIFE</td>
                                <td>{{$pieza->DIFE}}</td>
                            </tr>

                            <tr>
                                <td>Movimientos</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>FUEN</td>
                                <td>{{ $pieza->FUEN->format('d-m-Y') }}</td>
                            </tr>
                            <tr>
                                <td>FUSA</td>
                                <td>{{ $pieza->FUSA->format('d-m-Y') }}</td>
                            </tr>
                            <tr>
                                <td>Precios</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>BPCL</td>
                                <td>{{ $pieza->BPCL }}</td>
                            </tr>
                            <tr>
                                <td>PDUM</td>
                                <td>{{ $pieza->PDUM }}</td>
                            </tr>
                            <tr>
                                <td>PDUA</td>
                                <td>{{ $pieza->PDUA }}</td>
                            </tr>
                            <tr>
                                <td>BPNC</td>
                                <td>{{ $pieza->BPNC }}</td>
                            </tr>
                            <tr>
                                <td>Familia</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>FAM1</td>
                                <td>{{ $pieza->FAM1 }}</td>
                            </tr>
                            <tr>
                                <td>FAMI</td>
                                <td>{{ $pieza->FAMI }}</td>
                            </tr>
                            <tr>
                                <td>NPRV</td>
                                <td>{{ $pieza->NPRV }}</td>
                            </tr>
                            <tr>
                                <td>CADU</td>
                                <td>{{ $pieza->CADU }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')

@endpush
