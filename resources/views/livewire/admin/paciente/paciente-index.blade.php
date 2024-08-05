<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-secondary card-outline mt-3">
                <div class="card-header">
                    <div class="row">
                        <h3 class="card-title col-md-2">Lista de Pacientes</h3>
                        <p class="col-md-4"></p>
                        <div class="col-md-5">
                            <x-input wire:model.live="search" class="form-control text-center"
                                placeholder="Busqueda por el nombre o documento del Paciente" />
                            <div wire:loading>
                                <span class="text text-success text-bold">Buscando Paciente......</span>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($pacientes->count())

                    <div class="card-body">
                        <div class="row mb-3">
                            <a class="btn btn-outline-success col-md-2"
                                href="{{ route('admin.paciente.pacientes.create') }}">Crear
                                Paciente</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        {{-- <th>ID</th> --}}
                                        <th>Nombres & Apellidos</th>
                                        <th>Tipo & Numero Documento</th>
                                        <th>Genero</th>
                                        {{-- <th>Fecha de Nacimiento</th> --}}
                                        {{-- <th>Tipo Sangre & Factor RH</th> --}}
                                        {{-- <th>Grupo Etnico</th> --}}
                                        <th>Nivel Estudio</th>
                                        {{-- <th>Estado Civil</th> --}}
                                        {{-- <th>Fotografía</th> --}}
                                        {{-- <th>Departamento de Residencia</th> --}}
                                        <th>Ciudad de Residencia</th>
                                        {{-- <th>Dirección de Residencia</th> --}}
                                        {{-- <th>Estrato</th> --}}
                                        {{-- <th>Zona Residencial</th>
                                    <th>Comuna</th> --}}
                                        <th>Telefono</th>
                                        <th>Correo Electronico</th>
                                        {{-- <th>EPS</th>
                                    <th>ARL</th>
                                    <th>AFP</th> --}}
                                        <th>Cargo a Desempeñar</th>
                                        {{-- <th>Acompañante</th> --}}
                                        {{-- <th>Estado </th> --}}
                                        <th colspan="4" class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pacientes as $paciente)
                                        <tr>
                                            {{-- <td>{{ $paciente->id }}</td> --}}
                                            <td>{{ $paciente->nombres . ' ' . $paciente->apellidos }}</td>
                                            <td>{{ $paciente->tipo_identificacion . ' # ' . $paciente->numero_identificacion }}
                                            </td>
                                            <td>{{ $paciente->genero }}</td>
                                            {{-- <td>{{ $paciente->fecha_de_nacimiento }}</td>
                                    <td>{{ $paciente->tipo_sangre . ' ' . $paciente->factor_rh }}</td> --}}
                                            {{-- <td>{{ $paciente->grupo_etnico }}</td> --}}
                                            <td>{{ $paciente->nivel_estudio }}</td>
                                            {{-- <td>{{ $paciente->estado_civil }}</td>
                                    <td>{{ Str::limit($paciente->path_fotografia, 20) }}</td>
                                    <td>{{ $paciente->departamento_residencia }}</td> --}}
                                            <td>{{ $paciente->ciudad_residencia }}</td>
                                            {{-- <td>{{ Str::limit($paciente->direccion_residencia, 20) }}</td>
                                    <td>{{ $paciente->estrato }}</td>
                                    <td>{{ $paciente->zona_residencial }}</td>
                                    <td>{{ $paciente->comuna }}</td> --}}
                                            <td>{{ $paciente->telefono }}</td>
                                            <td>{{ $paciente->email }}</td>
                                            {{-- <td>{{ $paciente->eps }}</td>
                                    <td>{{ $paciente->arl }}</td>
                                    <td>{{ $paciente->afp }}</td> --}}
                                            <td>{{ $paciente->cargo_a_desempeñar }}</td>
                                            {{-- <td>{{ $paciente->acompañante }}</td>
                                    <td>{{ $paciente->estado }}</td> --}}
                                            <td><a class="btn btn-outline-primary" title="Ver Detalles"
                                                    href="{{ route('admin.paciente.pacientes.show', $paciente->id) }}"><i
                                                        class="fas fa-eye"></i></a>
                                            </td>
                                            <td><a class="btn btn-outline-warning" title="Editar"
                                                    href="{{ route('admin.paciente.pacientes.edit', $paciente->id) }}"><i
                                                        class="fas fa-edit"></i></a>
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-outline-secondary"><i
                                                        class="fas fa-folder-open" title="Historial atenciones"></i></a>
                                            </td>
                                            <td>
                                                <button wire:click="$dispatch('confirmUser', {{ $paciente->id }}, 'confirmar')" class="btn btn-outline-danger" title="Eliminar">
                                                    <i class="fas fa-trash-alt"></i></button>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <div class="row">
                            <div class="col-md-6">
                                {{ $pacientes->links() }}
                            </div>
                        </div>
                    </div>
                @else
                    <div class="card-body">
                        <strong>No hay ningún registro de Pacientes que mostrar</strong>
                        <div class="row mt-3">
                            <a class="btn btn-outline-success col-md-2"
                                href="{{ route('admin.paciente.pacientes.create') }}">Crear
                                Paciente</a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
