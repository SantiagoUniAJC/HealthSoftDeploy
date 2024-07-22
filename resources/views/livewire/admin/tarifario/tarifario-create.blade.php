<div>
    <div class="container-responsive">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-secondary card-outline mt-3">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-4">
                                <h3 class="card-title">Creación de Tarifa para el cliente:
                                    <strong>{{ $cliente->razon_social }}</strong>
                                </h3>
                            </div>
                            @if ($todos == false)
                                <div class="col-md-5">
                                    <div class="input-group">
                                        <span class="input-group-text col-md-4" for="ciudad_id">Ciudad Tarifa:</span>
                                        <select wire:model="ciudad_id" class="form-control form-control-md col-md-4"
                                            name="ciudad_id">
                                            <option>Seleccione la Ciudad</option>
                                            @foreach ($ciudades as $ciudad)
                                                <option value="{{ $ciudad->id }}">{{ $ciudad->nombre_ciudad }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <x-input-error for="ciudad_id" class="text-danger" />
                                </div>

                                {{-- checkbox con la opcion de agregar todos los examenes --}}
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-text col-md-11" for="todos">Agregar todos los CUPS
                                            disponibles:</span>
                                        <input wire:click="agregarTodos" type="checkbox" class="form-control col-md-1"
                                            name="todos" id="todos">
                                    </div>
                                    <x-input-error for="todos" class="text-danger" />
                                </div>
                            @else
                            @endif
                        </div>
                    </div>
                    <div class="card-body">
                        <form wire:submit.live="crearTarifa">
                            @if ($todos == false)
                                <div class="hidden">
                                    <div class="row">
                                        <div class="mb-3 col-md-4 col-sm-6">
                                            <div class="input-group">
                                                <span class="input-group-text col-md-4" for="nombre">Nombre:</span>
                                                <select wire:model.live="nombre"
                                                    class="form-control form-control-md col-md-8" name="nombre">
                                                    <option selected>Selecciona una opción</option>
                                                    @foreach ($cups as $cup)
                                                        <option value="{{ $cup->nombre }}">{{ $cup->nombre }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <x-input-error for="nombre" class="text-danger" />
                                        </div>

                                        <div class="mb-3 col-md-4 col-sm-6">
                                            <div class="input-group">
                                                <span class="input-group-text col-md-6" for="codigo">Código:</span>
                                                <select wire:model="codigo"
                                                    class="form-control form-control-md col-md-8" name="codigo">
                                                    <option value="">Selecciona Código</option>
                                                    @if ($nombre)
                                                        @foreach ($cups as $cup)
                                                            @if ($cup->nombre === $nombre)
                                                                <option value="{{ $cup->codigo }}">{{ $cup->codigo }}
                                                                </option>
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            <x-input-error for="codigo" class="text-danger" />
                                        </div>
                                        <div class="mb-3 col-md-4 col-sm-6">
                                            <div class="input-group">
                                                <span class="input-group-text col-md-4" for="tipo">Tipo:</span>
                                                <select wire:model="tipo" class="form-control form-control-md col-md-8"
                                                    name="tipo">
                                                    <option selected>Selecciona el Tipo</option>
                                                    @if ($nombre)
                                                        @foreach ($cups as $cup)
                                                            @if ($cup->nombre === $nombre)
                                                                <option value="{{ $cup->tipo }}">{{ $cup->tipo }}
                                                                </option>
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            <x-input-error for="tipo" class="text-danger" />
                                        </div>

                                        <div class="mb-3 col-md-4 col-sm-6">
                                            <div class="input-group">
                                                <span id="precio" class="input-group-text col-md-4"
                                                    for="precio">Precio:</span>
                                                <input wire:model="precio" type="number" class="form-control col-md-8"
                                                    name="precio" min="0" />
                                            </div>
                                            <x-input-error for="precio" class="text-danger" />
                                        </div>
                                        <div class="mb-3 col-md-4 col-sm-6">
                                            <div class="input-group">
                                                <span id="descuento" class="input-group-text col-md-6"
                                                    for="descuento">Descuento</span>
                                                <input wire:model="descuento" type="number"
                                                    class="form-control col-md-8" name="descuento" min="0"/>
                                            </div>
                                            <x-input-error for="descuento" class="text-danger"/>
                                        </div>

                                        <div class="input-group mb-3 col-md-4">
                                            <input wire:model="cliente_id" type="hidden" class="form-control col-md-7"
                                                name="cliente_id" />
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 text-center mb-3">
                                            <button type="button" wire:click="agregarExamen"
                                                class="btn btn-outline-success">
                                                Agregar Examen
                                            </button>
                                            <button wire:loading.attr="disabled" class="btn btn-outline-success">
                                                <span wire:loading.remove>Crear Tarifa</span>
                                                <span wire:loading>
                                                    <i class="fas fa-sync-alt fa-spin"></i>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </form>
                        {{-- Lista de examenes agregados --}}
                        @if ($mostrarTablaExamenes)
                            @if (count($examenes) > 0)
                                <div>
                                    <table class="table table-bordered">
                                        <div
                                            style="background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; border-radius: .25rem; padding: .75rem 1.25rem; margin-bottom: 1rem; margin-top:3px">
                                            <p style="margin-bottom: 0;">Solo se guardarán los exámenes de la lista.
                                            </p>
                                        </div>

                                        <thead>
                                            <tr>
                                                <th>Código</th>
                                                <th>Tipo</th>
                                                <th class="text-center">Nombre</th>
                                                <th class="text-center">Precio</th>
                                                <th class="text-center">Descuento</th>
                                                <th class="text-center">Ciudad</th>
                                                <th>Quitar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($examenesSeleccionados as $index => $examen)
                                                <tr>
                                                    <td>{{ $examen['codigo'] }}</td>
                                                    <td>{{ $examen['tipo'] }}</td>
                                                    <td>{{ $examen['nombre'] }}</td>
                                                    <td>
                                                        <x-input
                                                            wire:model='examenesSeleccionados.{{ $index }}.precio'
                                                            type="number" name="precio" id="precio"
                                                            class="form form-control text-center" min="0"/>
                                                    </td>
                                                    <td>
                                                        <x-input
                                                            wire:model='examenesSeleccionados.{{ $index }}.descuento'
                                                            type="number" name="descuento" id="descuento"
                                                            class="form form-control text-center" min="0"/>
                                                    </td>
                                                    <td class="text-center">{{ $examen['ciudad_id'] }}</td>

                                                    <td><button wire:click='quitarExamen( {{ $index }} )'
                                                            class="btn btn-danger text-center">X</button></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        @endif

                        {{-- Listado de todos los examenes --}}
                        @if ($todos)
                            <form wire:submit='crearTarifaTodos'>

                                <table class="table table-striped table-hover table-sm">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>Seleccionar</th>
                                            <th>Código</th>
                                            <th>Nombre</th>
                                            <th class="text-center">Tipo</th>
                                            <th class="text-center">Precio</th>
                                            <th class="text-center">Descuento</th>
                                            <th class="text-center">Ciudad</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cups as $cup)
                                            <tr>
                                                <td>
                                                    <input type="checkbox"
                                                        wire:model="selectedCups.{{ $cup->id }}"
                                                        value="{{ $cup->id }}">
                                                </td>
                                                <td>{{ $cup->codigo }}</td>
                                                <td>{{ $cup->nombre }}</td>
                                                <td class="text-center">{{ $cup->tipo }}</td>
                                                <td>
                                                    <input type="number" wire:model="precios.{{ $cup->id }}"
                                                        class="form-control" min="0">
                                                </td>
                                                <td>
                                                    <input type="number" wire:model="descuentos.{{ $cup->id }}"
                                                        class="form-control" min="0">
                                                </td>
                                                <td>
                                                    <select wire:model="ciudad_ids.{{ $cup->id }}"
                                                        class="form-control">
                                                        <option value="">Seleccione una ciudad</option>
                                                        @foreach ($ciudades as $ciudad)
                                                            <option value="{{ $ciudad->id }}">{{ $ciudad->nombre_ciudad }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <button wire:loading.attr="disabled"
                                    class="btn btn-outline-success">
                                    <span wire:loading.remove>Crear Tarifa</span>
                                    <span wire:loading>
                                        <i class="fas fa-sync-alt fa-spin"></i>
                                    </span>
                                </button>
                            </form>
                        @endif
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <a href="{{ route('admin.cliente.clientes.index') }}"
                                    class="btn btn-outline-primary">
                                    Listar
                                    Cliente</a>
                            </div>
                            <p class="col-md-4 col-sm-4"></p>
                            <div class="col-md-4 col-sm-4">
                                {{-- <a href="{{ route('admin.tarifarios.show', $cliente->id) }}"
                                    class="btn btn-outline-primary"> Ver Tarifas</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
