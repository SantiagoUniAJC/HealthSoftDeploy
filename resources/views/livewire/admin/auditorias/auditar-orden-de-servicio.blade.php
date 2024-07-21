<div>
    <div class="container-xxl">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-secondary card-outline mt-3">
                    <div class="card-header">
                        <div class="row">
                            <h3 class="card-title col-md-6">Auditoria de Ordenes de Servicio con estado Finalizado.</h3>
                            <div class="col-md-6">
                                <x-input wire:model.live="search" class="form-control text-center"
                                    placeholder="Busqueda por el nombre o documento del Paciente" />
                            </div>
                        </div>
                    </div>

                    @if ($ordenservicios->isEmpty())
                        <div class="alert alert-danger alert-dismissible">
                            <h5><i class="icon fas fa-ban"></i> No se encontraron resultados</h5>
                            No hay registros que coincidan con su busqueda "{{ $search }}"
                        </div>
                    @else
                        <div class="card-body">
                            <table class="table table-bordered table-responsive-xl">
                                <thead>
                                    <tr>
                                        <th>Numero de Orden</th>
                                        <th>Tipo Evaluación</th>
                                        <th>Nombre del Paciente</th>
                                        {{-- <th>Documento del Paciente</th> --}}
                                        <th>Lugar de Realización</th>
                                        <th>Cliente Solicita:</th>
                                        <th>Cargo a desempeñar</th>
                                        <th>Fecha Solicitud</th>
                                        <th>Procedimientos</th>
                                        <th>Estado</th>
                                        <th colspan="4" class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ordenservicios as $ordenservicio)
                                        <tr>
                                            <td>{{ $ordenservicio->orden_numero }}</td>
                                            <td>{{ $ordenservicio->tipo_evaluacion }}</td>
                                            <td>{{ $ordenservicio->paciente->nombres . ' ' . $ordenservicio->paciente->apellidos }}
                                            </td>
                                            {{-- <td>{{ $ordenservicio->paciente->tipo_identificacion . ' # ' . $ordenservicio->paciente->numero_identificacion }}</td> --}}
                                            <td>{{ $ordenservicio->prestadorDeSalud->nombre_comercial }}</td>
                                            <td>{{ $ordenservicio->cliente->razon_social }}</td>
                                            <td>{{ $ordenservicio->paciente->cargo_a_desempeñar }}</td>
                                            <td>{{ $ordenservicio->created_at->format('d/m/Y') }}</td>
                                            <td class="text-center">{{ $ordenservicio->tarifas->count() }}</td>
                                            <td class="text-center">{{ $ordenservicio->estado }}</td>
                                            <td>
                                                <span class="badge badge-success">En Proceso</span>
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.ordendeservicios.show', $ordenservicio) }}"
                                                    class="btn btn-outline-primary btn-md">
                                                    <i class="fas fa-eye" title="Detalles"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <span class="badge badge-danger">Cerrar</span>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="text-muted">{{ $ordenservicios->links() }} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
