@extends('layouts.app')

@section('template_title')
    {{ $reserva->name ?? __('Show') . " " . __('Reserva') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Reserva</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('reservas.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $reserva->name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Num. Identificacion:</strong>
                                    {{ $reserva->numIdenti }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo de Usuario:</strong>
                                    {{ $reserva->userType }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Area:</strong>
                                    {{ $reserva->area }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Solicitud:</strong>
                                    {{ $reserva->dateSolicitud }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Inicio Reserva:</strong>
                                    {{ $reserva->dateInicio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Fin Reserva:</strong>
                                    {{ $reserva->dateFin }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Observaciones:</strong>
                                    {{ $reserva->observacion }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
