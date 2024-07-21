<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-secondary card-outline mt-3">
                <div class="card-header bg-primary text-center text-white ">
                    <h2 class="card-title">Detalles del cliente</h2>
                </div>
                <div class="card-body">
                    @if ($cliente)
                        <div class="row">
                            <div class="input-group mb-3 col-md-4">
                                <span class="input-group-text col-md-6">NIT:</span>
                                <input class="form-control bg-white" placeholder="{{ $cliente->nit }}" readonly>
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span class="input-group-text col-md-6">Razon Social:</span>
                                <input class="form-control bg-white" placeholder="{{ $cliente->razon_social }}"
                                    readonly>
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span class="input-group-text col-md-6">Tiempo de Convenido:</span>
                                @php
                                    $fechacontrato = new DateTime($cliente->fecha_inicio_relacion_comercial);
                                    $hoy = new DateTime();
                                    $tiempo = $hoy->diff($fechacontrato);
                                    $tiempoCalculado = $tiempo->y;
                                @endphp
                                <input class="form-control bg-white" value="{{ $tiempoCalculado . ' años' }}" readonly>
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span class="input-group-text col-md-6">Nombre Comercial:</span>
                                <input class="form-control bg-white" placeholder="{{ $cliente->nombre_comercial }}"
                                    readonly>
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span class="input-group-text col-md-6">Asesor Comercial:</span>
                                <input class="form-control bg-white"
                                    placeholder="{{ $cliente->asesor_comercial_asignado }}" readonly>
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span class="input-group-text col-md-6">Actividad Economica:</span>
                                <input class="form-control bg-white" placeholder="{{ $cliente->actividad_economica }}"
                                    readonly>
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span class="input-group-text col-md-6">Tip Regimen IVA:</span>
                                <input class="form-control bg-white" placeholder="{{ $cliente->tipo_regimen_iva }}"
                                    readonly>
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span class="input-group-text col-md-6">Responsabilidad Fiscal:</span>
                                <input class="form-control bg-white"
                                    placeholder="{{ $cliente->responsabilidad_fiscal }}" readonly>
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span class="input-group-text col-md-6">Departamento:</span>
                                <input class="form-control bg-white" placeholder="{{ $cliente->departamento }}"
                                    readonly>
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span class="input-group-text col-md-6">Ciudad:</span>
                                <input class="form-control bg-white" placeholder="{{ $cliente->ciudad }}" readonly>
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span class="input-group-text col-md-6">Dirección Residencia:</span>
                                <input class="form-control bg-white" placeholder="{{ $cliente->direccion }}" readonly>
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span class="input-group-text col-md-6">Telefono Contacto 1:</span>
                                <input class="form-control bg-white" placeholder="{{ $cliente->telefono_contacto1 }}"
                                    readonly>
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span class="input-group-text col-md-6">Telefono Contacto 2:</span>
                                <input class="form-control bg-white" placeholder="{{ $cliente->telefono_contacto2 }}"
                                    readonly>
                            </div>
                            <div class="input-group mb-3 col-md-6">
                                <span class="input-group-text col-md-4">Email:</span>
                                <input class="form-control bg-white" placeholder="{{ $cliente->email }}" readonly>
                            </div>
                        </div>
                </div>
            @else
                <p>cliente no encontrado</p>
                @endif
            </div>
            <div class="card-footer text-center">
                <div class="row">
                    <a href="{{ route('admin.cliente.clientes.index') }}" class="btn btn-outline-primary col-md-4"> <i
                            class="fas fa-arrow-left"></i> Volver</a>


                    <p class="col-md-4"></p>
                    <a href="{{ route('admin.cliente.clientes.edit', $cliente->id) }}"
                        class="btn btn-outline-warning col-md-4">Editar Cliente</a>
                </div>
            </div>
        </div>
    </div>
</div>
