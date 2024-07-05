@extends('layouts.app')

@section('template_title')
    Reservas
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Reservas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('reservas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Reserva') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>
                            Proceso ejecutado exitosamente.</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No.</th>
                                        
									<th >Nombre</th>
									<th >Num. Identificacion</th>
									<th >Tipo de Usuario</th>
									<th >Area</th>
									<th >Fecha Solicitud</th>
									<th >Fecha Inicio Reserva</th>
									<th >Fecha Fin Reserva</th>
									<th >Observaciones</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reservas as $reserva)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $reserva->name }}</td>
										<td >{{ $reserva->numIdenti }}</td>
										<td >{{ $reserva->userType }}</td>
										<td >{{ $reserva->area }}</td>
										<td >{{ $reserva->dateSolicitud }}</td>
										<td >{{ $reserva->dateInicio }}</td>
										<td >{{ $reserva->dateFin }}</td>
										<td >{{ $reserva->observacion }}</td>

                                            <td>
                                                <form action="{{ route('reservas.destroy', $reserva->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('reservas.show', $reserva->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('reservas.edit', $reserva->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('¿Estás segura de eliminar?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $reservas->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
