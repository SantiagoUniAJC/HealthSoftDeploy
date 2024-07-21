<div class="row">
    <div class="col-md-12">
        <div class="card card-secondary card-outline mt-3">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="card-title">Tarifario Actual: <b class="text text-uppercase">
                                {{ $cliente->nombre_comercial }} </b></h2>
                    </div>
                    <div class="col-md-6">
                        <x-input wire:model.live="search" class="form-control text-center"
                            placeholder="Busqueda por Ciudad del Tarifario" />
                        <div wire:loading>
                            <span class="text text-success text-bold">Buscando Ciudad......</span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped table-responsive-xl">
                            <thead>
                                <tr>
                                    {{-- <th>Id</th> --}}
                                    <th>Fecha de Creación</th>
                                    <th>Codigo</th>
                                    <th>Tipo</th>
                                    <th>Producto</th>
                                    <th>Valor</th>
                                    <th>Descuento</th>
                                    <th>Ciudad Tarifario</th>
                                    <th>Cliente</th>
                                    <th>Creado por</th>
                                    <th class="text-center" colspan="2">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tarifas as $tarifa)
                                    <tr>
                                        <td>{{ $tarifa->created_at->format('Y-m-d') }}</td>
                                        {{-- <td>{{ $tarifa->id }}</td> --}}
                                        <td>{{ $tarifa->codigo }}</td>
                                        <td>{{ $tarifa->tipo }}</td>
                                        <td>{{ $tarifa->nombre }}</td>
                                        <td>$ {{ number_format($tarifa->precio, 0, ',', '.') }} COP</td>
                                        <td> {{ number_format($tarifa->descuento, 0, ',', '.') }} %</td>
                                        <td>
                                            {{ $tarifa->ciudad->nombre_ciudad }}
                                        </td>
                                        <td>{{ $tarifa->cliente->razon_social }}</td>
                                        <td>{{ $tarifa->user->name }}</td>

                                        <td width="10px"><a class="btn btn-outline-warning"
                                                href="{{ route('admin.tarifarios.edit', $tarifa->id) }}"><i
                                                    class="fas fa-edit" title="Editar"></i></a></td>
                                        <td width="10px">
                                            <button
                                                wire:click="$dispatch('confirmUser', {{ $tarifa->id }}, 'confirmar')"
                                                class="btn btn-outline-danger" title="Eliminar"><i
                                                    class="fas fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-3">
                        {{ $tarifas->links() }}
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-2">
                        <a href="{{ route('admin.tarifario.pdf', $cliente->id) }}" class="btn btn-outline-danger"
                            target="_blank">
                            <i class="fas fa-file-pdf"></i> Ver en PDF
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a class="btn btn-outline-success"
                            href="{{ route('admin.tarifario.create', $cliente->id) }}">Agregar Examen</a>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('admin.tarifarios.index') }}" class="btn btn-outline-primary">
                            <i class="fas fa-arrow-left"></i> Volver
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
