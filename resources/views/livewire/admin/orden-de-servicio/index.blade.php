<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-secondary card-outline mt-3">
                <div class="card-header">
                    <div class="row">
                        <h3 class="card-title col-md-2">Ordenes de Servicio</h3>
                        <p class="col-md-4"></p>
                        <div class="col-md-5">
                            <x-input wire:model.live="search" class="form-control text-center"
                                placeholder="Búsqueda por nombre o documento del paciente" />
                            <div wire:loading>
                                <span class="text text-success text-bold">Buscando......</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    {{-- // mostrar este mensaje solo si se ingresa algo en el input de busqueda --}}

                    @if ($ordenservicios->count() == 0)
                        <div class="alert alert-warning alert-dismissible">
                            <h5><i class="icon fas fa-exclamation-triangle"></i> {{ $search }}!</h5>
                            No se encontraron registros con los criterios de busqueda ingresados.
                        </div>
                    @else
                        <table class="table table-bordered table-responsive-xl">
                            <thead>
                                <tr>
                                    <th>Número de orden</th>
                                    <th>Tipo Evaluación</th>
                                    <th>Medio de Venta</th>
                                    <th>Nombre del Paciente</th>
                                    {{-- <th>Documento del Paciente</th> --}}
                                    <th>Lugar de Realización</th>
                                    <th>Cliente Solicita:</th>
                                    <th>Ciudad Tarifario: </th>
                                    <th>Cargo a desempeñar</th>
                                    <th>Fecha Solicitud</th>
                                    <th>Procedimientos</th>
                                    <th class="text-center">Estado</th>
                                    <th colspan="4" class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ordenservicios as $ordenservicio)
                                    <tr>
                                        <td>{{ $ordenservicio->orden_numero }}</td>
                                        <td>{{ $ordenservicio->tipo_evaluacion }}</td>
                                        <td>{{ $ordenservicio->medio_venta }}</td>
                                        <td>{{ $ordenservicio->paciente->nombres . ' ' . $ordenservicio->paciente->apellidos }}
                                        </td>
                                        {{-- <td>{{ $ordenservicio->paciente->tipo_identificacion . ' # ' . $ordenservicio->paciente->numero_identificacion }}</td> --}}
                                        <td>{{ $ordenservicio->prestadorDeSalud->nombre_comercial }}</td>
                                        <td>{{ $ordenservicio->cliente->razon_social }}</td>
                                        <td>
                                            @foreach ($ordenservicio->tarifas->unique('ciudad.nombre_ciudad') as $tarifa)
                                                {{ $tarifa->ciudad->nombre_ciudad }}
                                            @endforeach
                                        </td>
                                        <td>{{ $ordenservicio->paciente->cargo_a_desempeñar }}</td>
                                        <td>{{ $ordenservicio->created_at->format('d/m/Y') }}</td>
                                        <td class="text-center">{{ $ordenservicio->tarifas->count() }}</td>
                                        <td class="text-center">{{ $ordenservicio->estado }}</td>
                                        <td>
                                            <a href="{{ route('admin.ordendeservicios.show', $ordenservicio) }}"
                                                class="btn btn-outline-primary btn-md">
                                                <i class="fas fa-eye" title="Detalles"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.ordendeservicios.generar-pdf', $ordenservicio) }}"
                                                class="btn btn-outline-danger btn-md" target="_blank">
                                                <i class="fas fa-file-pdf" title="Descargar"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.ordendeservicios.edit', $ordenservicio) }}"
                                                class="btn btn-outline-warning btn-md">
                                                <i class="fas fa-edit" title="Editar"></i>
                                            </a>
                                        </td>

                                        <td>
                                            <button
                                                wire:click="$dispatch('confirmUser', {{ $ordenservicio->id }}, 'confirmar')"
                                                class="btn btn-outline-danger" title="Cerrar Orden">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
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
