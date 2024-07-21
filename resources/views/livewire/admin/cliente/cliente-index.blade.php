<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-secondary card-outline mt-3">
                <div class="card-header">
                    <div class="row">
                        <h3 class="card-title col-md-2">Lista de Clientes</h3>
                        <p class="col-md-4"></p>
                        <div class="col-md-5">
                            <x-input wire:model.live="search" class="form-control text-center"
                                placeholder="Busqueda por la razon social o NIT del Cliente" />
                            <div wire:loading>
                                <span class="text text-success text-bold">Buscando Cliente......</span>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($clientes->count())
                    <div class="card-body">
                        <div class="row">
                            <a class="btn btn-outline-success col-md-2 mb-3"
                                href="{{ route('admin.cliente.clientes.create') }}">Crear Cliente</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        {{-- <th>ID</th> --}}
                                        <th>NIT :</th>
                                        {{-- <th>Razon Social</th> --}}
                                        <th>Nombre Comercial</th>
                                        {{-- <th>Fecha Inicio Relación Comercial</th> --}}
                                        <th>Antiguedad</th>
                                        <th>Asesor Comercial Asignado</th>
                                        <th>Tarifario Creado</th>
                                        {{-- <th>Actividad Economica</th>
                                    <th>Tipo Regimen Iva</th>
                                    <th>Responsabilidad Fiscal</th> --}}
                                        {{-- <th>Departamento</th> --}}
                                        <th>Ciudad Tarifa</th>
                                        <th>Dirección</th>
                                        <th>Telefono Contacto</th>
                                        {{-- <th>Telefono Contacto 2</th> --}}
                                        <th>Correo Electronico</th>
                                        {{-- <th>Estado </th> --}}
                                        <th colspan="5" class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientes as $cliente)
                                        <tr>
                                            {{-- <td>{{ $cliente->id }}</td> --}}
                                            <td>{{ $cliente->nit }}</td>
                                            {{-- <td>{{ $cliente->razon_social }}</td> --}}
                                            <td>{{ $cliente->nombre_comercial }}</td>
                                            {{-- <td>{{ $cliente->fecha_inicio_relacion_comercial }}</td> --}}
                                            <td>
                                                {{-- Antiguedad del cliente --}}
                                                @php
                                                    $fecha = $cliente->fecha_inicio_relacion_comercial;
                                                    $fecha = new DateTime($fecha);
                                                    $hoy = new DateTime();
                                                    $antiguedad = $hoy->diff($fecha);
                                                    // echo $antiguedad->y . ' años, ' . $antiguedad->m . ' meses y ' . $antiguedad->d . ' días';
                                                    echo $antiguedad->y . ' años';
                                                @endphp
                                            </td>
                                            <td>{{ $cliente->asesor_comercial_asignado }}</td>
                                            <td>
                                                @php
                                                    $ciudadesUnicas = $cliente->tarifas->groupBy('ciudad_id')->count();
                                                @endphp

                                                @if ($ciudadesUnicas > 0)
                                                    <div>
                                                        <a href="{{ route('admin.tarifarios.show', $cliente->id) }}"
                                                            class="btn btn-success position-relative">SI
                                                            <span
                                                                class="position-absolute top-0 start-100 translate-middle badge bg-danger">
                                                                {{ $ciudadesUnicas }}
                                                                {{ $ciudadesUnicas > 1 ? 'Ciudades' : 'Ciudad' }}
                                                            </span>
                                                        </a>
                                                    </div>
                                                @else
                                                    <span class="badge badge-danger">No</span>
                                                @endif

                                            </td>
                                            {{-- <td>{{ $cliente->actividad_economica }}</td>
                                            <td>{{ $cliente->tipo_regimen_iva }}</td>
                                            <td>{{ $cliente->responsabilidad_fiscal }}</td> --}}
                                            {{-- <td>{{ $cliente->departamento }}</td> --}}
                                            <td>
                                                @foreach ( $cliente->tarifas->unique('ciudad.nombre_ciudad') as $tarifa )
                                                    {{ $tarifa->ciudad->nombre_ciudad . ' & ' }}                                                    
                                                @endforeach
                                            </td>
                                            <td>{{ Str::limit($cliente->direccion, 10) }}</td>
                                            <td>{{ $cliente->telefono_contacto1 }}</td>
                                            {{-- <td>{{ $cliente->telefono_contacto2 }}</td> --}}
                                            <td>{{ $cliente->email }}</td>
                                            {{-- <td>{{ $cliente->estado }}</td> --}}
                                            <td><a class="btn btn-outline-primary" title="Ver Detalles"
                                                    href="{{ route('admin.cliente.clientes.show', $cliente->id) }}"><i
                                                        class="fas fa-eye"></i></a>
                                            </td>
                                            <td>
                                                <a class="btn btn-outline-warning"
                                                    href="{{ route('admin.cliente.clientes.edit', $cliente->id) }}"><i
                                                        class="fas fa-edit" title="Editar"></i></a>
                                            </td>
                                            <td>
                                                <a class="btn btn-outline-success"
                                                    href="{{ route('admin.tarifario.create', $cliente->id) }}"><i
                                                        class="fas fa-money-check" title="Tarifario"></i></a>
                                            </td>
                                            <td>
                                                <a class="btn btn-outline-info"
                                                    href="{{ route('admin.profesiogramas.index') }}"><i
                                                        class="fas fa-user-tie" title="Profesiograma"></i></a>
                                            </td>
                                            <td>
                                                <button wire:click="$dispatch('confirmUser', {{ $cliente->id }})"
                                                    class="btn btn-outline-danger" title="Eliminar">
                                                    <i class="fas fa-trash-alt"></i>
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
                                {{ $clientes->links() }}
                            </div>
                            <div class="col-md-6">
                                <a class="btn btn-outline-secondary"
                                    href="{{ route('admin.cliente.clientes.index') }}"> <i class="fas fa-sync-alt"></i>
                                    Actualizar</a>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="card-body">
                        <strong>No hay registros del Cliente buscado</strong>
                        <div class="row">
                            <a class="btn btn-outline-success col-md-2 mt-3"
                                href="{{ route('admin.cliente.clientes.create') }}">Crear Cliente</a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
