<div>
    <div class="card card-secondary card-outline mt-3">
        <div class="card-header">
            <div class="row">
                <h3 class="card-title col-md-2">Lista de Especialistas</h3>
                <p class="col-md-4"></p>
                <div class="col-md-5">
                    <x-input wire:model.live="search" class="form-control text-center"
                        placeholder="Busqueda por el nombre o especialidad del Especialista" />
                    <div wire:loading>
                        <span class="text text-success text-bold">Buscando Especialista......</span>
                    </div>
                </div>
            </div>
        </div>
        @if ($especialistas->count())
            <div class="card-body">
                <div class="row">
                    <a class="btn btn-outline-success col-md-2 mb-3"
                        href="{{ route('admin.especialista.especialistas.create') }}">Crear
                        Especialista</a>
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
                                {{-- <th>Fotografía</th> --}}
                                {{-- <th>Dirección de Residencia</th> --}}
                                <th>Telefono Contacto</th>
                                {{-- <th>Telefono Contacto 2</th> --}}
                                <th>Correo Electronico</th>
                                <th>Especialidad médica</th>
                                <th>Registro Medico</th>
                                <th>Fecha Inicio labor</th>
                                {{-- <th>Experiencia Laboral</th> --}}
                                {{-- <th>Certificaciones </th> --}}
                                {{-- <th>Estado </th> --}}
                                <th colspan="3" class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($especialistas as $especialista)
                                <tr>
                                    {{-- <td>{{ $especialista->id }}</td> --}}
                                    <td>{{ $especialista->nombres . ' ' . $especialista->apellidos }}</td>
                                    <td>{{ $especialista->tipo_identificacion . ' # ' . $especialista->numero_identificacion }}
                                    </td>
                                    <td>{{ $especialista->genero }}</td>
                                    {{-- <td>{{ $especialista->fecha_de_nacimiento }}</td> --}}
                                    {{-- <td>{{ Str::limit($especialista->path_fotografia, 20) }}</td> --}}
                                    {{-- <td>{{ Str::limit($especialista->direccion_residencia, 20) }}</td> --}}
                                    <td>{{ $especialista->telefono_contacto1 }}</td>
                                    {{-- <td>{{ $especialista->telefono_contacto2 }}</td> --}}
                                    <td>{{ $especialista->email }}</td>
                                    <td>{{ $especialista->especialidad_medica }}</td>
                                    <td>{{ $especialista->registro_medico }}</td>
                                    <td>{{ $especialista->fecha_inicio_labor }}</td>
                                    {{-- <td>{{ Str::limit($especialista->experiencia, 20) }}</td>
                                    <td>{{ Str::limit($especialista->certificaciones, 20) }}</td> --}}
                                    {{-- <td>{{ $especialista->estado }}</td> --}}
                                    <td><a class="btn btn-outline-primary" title="Ver Detalles"
                                            href="{{ route('admin.especialista.especialistas.show', $especialista->id) }}">
                                            <i class="fas fa-eye"></i></a>
                                    </td>
                                    <td width="10px"> <a class="btn btn-outline-warning" title="Editar"
                                            href="{{ route('admin.especialista.especialistas.edit', $especialista->id) }}"><i
                                                class="fas fa-edit"></i></a>
                                    </td>
                                    <td>
                                        <button wire:click="$dispatch('confirmUser', {{ $especialista->id }}, 'confirmar')" class="btn btn-outline-danger" title="Eliminar">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer text-center">
                    <div class="row">
                        <div class="col-md-6">
                            {{ $especialistas->links() }}
                        </div>
                        <a class="btn btn-outline-secondary mx-auto col-md-4 h-25 d-inline-block"
                            href="{{ route('admin.especialista.especialistas.index') }}">Actualizar</a>
                    </div>
                </div>
            </div>
        @else
            <div class="card-body">
                <div class="row">
                    <strong class="col-md-12">No hay ningún registro de Especialistas que mostrar</strong>
                </div>

                <a class="btn btn-outline-success col-md-4 mt-4"
                    href="{{ route('admin.especialista.especialistas.create') }}">Crear
                    Especialista</a>

            </div>
        @endif
    </div>
</div>
