<div>
    <div class="container-responsive">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-secondary card-outline mt-3">
                    <div class="card-header">
                        <h5 class="card-title">Tarifarios</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Cliente</th>
                                    <th class="text text-center">Cantidad Examenes</th>
                                    <th>Fecha de Creación</th>
                                    <th>Creado por: </th>
                                    <th colspan="4" width="10px" class="text text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clientes as $cliente)
                                    {{-- Verificar si el cliente tiene tarifas --}}
                                    @if ($cliente->tarifas->isNotEmpty())
                                        <tr>
                                            <td>{{ $cliente->razon_social }}</td>
                                            <td class="text text-center">{{ $cliente->tarifas->count() }}</td>
                                            <td>{{ $cliente->tarifas->first()->created_at->format('d-m-Y') }}</td>
                                            {{-- Mostrar la primera tarifa --}}
                                            <td>{{ $cliente->tarifas->first()->user->name }}</td> 
                                            <td width="10px">
                                                <a class="btn btn-outline-success" title="Crear Tarifa"
                                                    href="{{ route('admin.tarifario.create', $cliente->id) }}">
                                                    <i class="fas fa-save"></i>
                                                </a>
                                            </td>
                                            <td width="10px">
                                                <a class="btn btn-outline-primary" title="Ver Detalles"
                                                    href="{{ route('admin.tarifarios.show', $cliente->id) }}">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                {{ $clientes->links() }}
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <a class="btn btn-outline-success"
                                    href="{{ route('admin.ordendeservicios.index') }}">Ordenes de
                                    Servicio</a>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <a href="{{ route('admin.cliente.clientes.index') }}"
                                    class="btn btn-outline-primary">Listar
                                    Clientes</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
