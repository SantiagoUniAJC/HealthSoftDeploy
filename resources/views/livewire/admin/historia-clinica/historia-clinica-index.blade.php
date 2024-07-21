<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary card-outline mt-3">
                <div class="card-header">
                    <div class="row">
                        <h3 class="card-title col-md-2">Historias Clinicas</h3>
                        <p class="col-md-4"></p>
                        <div class="col-md-5">
                            <x-input wire:model.live="search" class="form-control text-center"
                                placeholder="Busqueda por el nombre o documento del Paciente" />
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    {{-- <th>Id</th> --}}
                                    <th>Fecha de Creación</th>
                                    <th>Nombre del Paciente</th>
                                    <th>Tipo & Documento</th>
                                    <th>Fecha de Nacimiento</th>
                                    <th>Genero</th>
                                    <th colspan="4">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($historiasClinicas as $historia)
                                    <tr>
                                        {{-- <td>{{ $historia->id }}</td> --}}
                                        <td>{{ $historia->created_at }}</td>
                                        <td>{{ $historia->paciente->nombres . ' ' . $historia->paciente->apellidos }}
                                        </td>
                                        <td>{{ $historia->paciente->tipo_identificacion . ' ' . number_format($historia->paciente->numero_identificacion, 0, '.', '.') }}
                                        </td>
                                        <td>{{ $historia->paciente->fecha_de_nacimiento }}</td>
                                        <td>{{ $historia->paciente->genero }}</td>
                                        <td>
                                            <a href="{{ route('admin.historias-clinicas.show', $historia->paciente->id) }}"
                                                class="btn btn-outline-primary btn-sm">
                                                <i class="fas fa-eye" title="Detalles"></i>
                                            </a>
                                            <a href="{{ route('admin.historias-clinicas.edit', $historia->id) }}"
                                                class="btn btn-outline-warning btn-sm">
                                                <i class="fas fa-edit" title="Editar"></i>
                                            </a>
                                            <a href="{{ route('admin.historiasclinicas.generate-PDF', [$historia->paciente->id, $historia->cita->id]) }}"
                                                class="btn btn-outline-info btn-sm" target="_blank">
                                                <i class="fas fa-file-pdf text-red" title="Generar PDF"></i>
                                            </a>
                                            <button
                                                wire:click="$dispatch('confirmUser', {{ $historia->id }}, 'confirmar')"
                                                class="btn btn-outline-danger btn-sm">
                                                <i class="fas fa-trash" title="Eliminar"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-6">
                            {{ $historiasClinicas->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
