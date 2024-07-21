<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-success card-outline mt-3">
                <div class="card-header">
                    <div class="row">
                        <h3 class="card-title col-md-2">Gestion de Citas Pendientes.</h3>
                        <p class="col-md-4"></p>
                        <div class="col-md-5">
                            <x-input wire:model.live="search" class="form-control text-center"
                                placeholder="Busqueda por el nombre o documento del Paciente" />
                            <div wire:loading>
                                <span class="text text-success text-bold">Buscando......</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if ($citas->isEmpty())
                        <div class="alert alert-warning alert-dismissible">
                            <h5><i class="icon fas fa-exclamation-triangle"></i> Alerta!</h5>
                            No se encontraron registros de busqueda con: <span class="text-bold"> {{ $search }}
                            </span>
                        </div>
                    @else
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-hover table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>Fecha & Hora</th>
                                        <th>Paciente</th>
                                        <th>Documento</th>
                                        <th>Procedimiento</th>
                                        <th>Tipo</th>
                                        <th>Estado</th>
                                        <th colspan="3">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($citas as $cita)
                                        <tr>
                                            <td>{{ $cita->fecha_inicio }}</td>
                                            <td>{{ $cita->paciente->nombres . ' ' . $cita->paciente->apellidos }}</td>
                                            <td>{{ number_format($cita->paciente->numero_identificacion, 2, '.', '.') }}
                                            </td>
                                            <td>{{ $cita->nombre_examen }}</td>
                                            <td>{{ $cita->tipo_examen }}</td>
                                            <td>
                                                @if ($cita->estado == 'Agendada')
                                                    <span class="badge badge-warning">{{ $cita->estado }}</span>
                                                @elseif ($cita->estado == 'Asistio')
                                                    <span class="badge badge-success">{{ $cita->estado }}</span>
                                                @elseif ($cita->estado == 'No Asistio')
                                                    <span class="badge badge-danger">{{ $cita->estado }}</span>
                                                @elseif ($cita->estado == 'Cancelada')
                                                    <span class="badge badge-danger">{{ $cita->estado }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-outline-warning btn-sm"
                                                    href="{{ route('admin.agendas.edit', $cita->id) }}">Reprogramar</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-6">
                            {{ $citas->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
