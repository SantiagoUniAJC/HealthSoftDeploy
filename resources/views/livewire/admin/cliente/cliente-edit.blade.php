<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-secondary card-outline mt-3">
                    <div class="card">
                        <div class="card-header bg-warning text-center text-white">
                            <h2 class="card-title">Algunos Campos son de solo lectura</h2>
                        </div>
                        <div class="card-body">
                            <form wire:submit='editarCliente'>
                                <div class="row">
                                    <div class="input-group mb-3 col-md-4">
                                        <span id="nit" class="input-group-text col-md-5" for="nit">Nit:</span>
                                        <x-input wire:model="nit" value="{{$cliente->nit}}" type="text"
                                            class="form-control col-md-7" name="nit" />
                                    </div>
                                    <div class="input-group mb-3 col-md-8">
                                        <span id="razon_social" class="input-group-text col-md-4"
                                            for="razon_social">Razon
                                            Social:</span>
                                        <x-input wire:model="razon_social" value="{{ $cliente->razon_social}}"
                                            type="text" class="form-control col-md-8" name="razon_social" />
                                    </div>
                                    <div class="input-group mb-3 col-md-4">
                                        <span id="fecha_inicio_relacion_comercial" class="input-group-text col-md-8"
                                            for="fecha_inicio_relacion_comercial">Fecha
                                            Inicio Relación Comercial:</span>
                                        <x-input wire:model="fecha_inicio_relacion_comercial" type="date"
                                            value="{{ $cliente->fecha_inicio_relacion_comercial}}"
                                            class="form-control col-md-4" name="fecha_inicio_relacion_comercial" />
                                    </div>
                                    <div class="input-group mb-3 col-md-8">
                                        <span id="nombre_comercial" class="input-group-text col-md-4"
                                            for="nombre_comercial">Nombre
                                            Comercial:</span>
                                        <x-input wire:model="nombre_comercial" value="{{ $cliente->nombre_comercial}}"
                                            type="text" class="form-control col-md-8" name="nombre_comercial" />
                                    </div>
                                    <div class="input-group mb-3 col-md-4">
                                        <span class="input-group-text col-md-5" for="asesor_comercial_asignado">Asesor
                                            Comercial:</span>
                                        <x-input wire:model="asesor_comercial_asignado"
                                            value="{{ $cliente->asesor_comercial_asignado}}"
                                            class="form-control form-control-md col-md-7"
                                            name="asesor_comercial_asignado" readonly>
                                        </x-input>
                                    </div>
                                    <div class="input-group mb-3 col-md-4">
                                        <span id="actividad_economica" class="input-group-text col-md-5"
                                            for="actividad_economica">Actividad Economica:</span>
                                        <x-input wire:model="actividad_economica"
                                            value="{{ $cliente->actividad_economica}}" type="text"
                                            class="form-control col-md-8" name="actividad_economica" />
                                    </div>
                                    <div class="input-group mb-3 col-md-4">
                                        <span class="input-group-text col-md-5" for="tipo_regimen_iva">Tipo Regimen
                                            IVA:</span>
                                        <select wire:model="tipo_regimen_iva" value="{{ $cliente->tipo_regimen_iva }}"
                                            class="form-control form-control-md col-md-7" name="tipo_regimen_iva"
                                            required>
                                            <option selected>{{$cliente->tipo_regimen_iva}}</option>
                                            <option value="1">Responsable IVA</option>
                                            <option value="2">No responsable IVA</option>
                                        </select>
                                    </div>
                                    <div class="input-group mb-3 col-md-4">
                                        <span class="input-group-text col-md-5" for="departamento">Departamento:</span>
                                        <x-input wire:model="departamento" value="{{ $cliente->departamento}}"
                                            type="text" class="form-control col-md-7" name="departamento" />
                                    </div>
                                    <div class="input-group mb-3 col-md-8">
                                        <span class="input-group-text col-md-4"
                                            for="responsabilidad_fiscal">Responsabilida
                                            Fiscal:</span>
                                        <select wire:model="responsabilidad_fiscal"
                                            value="{{$cliente->responsabilidad_fiscal}}"
                                            class="form-control form-control-md col-md-8" name="responsabilidad_fiscal"
                                            required>
                                            <option selected>{{$cliente->responsabilidad_fiscal}}</option>
                                            <option value="1">Gran Contribuyente</option>
                                            <option value="2">Autoretenedor</option>
                                            <option value="3">Agente retenedor IVA</option>
                                            <option value="4">Regimen simple de tributacion</option>
                                            <option value="5">No responsable IVA</option>
                                            <option value="6">No aplica - Otros</option>
                                        </select>
                                    </div>

                                    <div class="input-group mb-3 col-md-4">
                                        <span class="input-group-text col-md-5" for="ciudad">Ciudad:</span>
                                        <x-input wire:model="ciudad" value="{{ $cliente->ciudad}}" type="text"
                                            class="form-control col-md-7" name="ciudad" />
                                    </div>
                                    <div class="input-group mb-3 col-md-4">
                                        <span id="direccion" class="input-group-text col-md-5"
                                            for="direccion">Dirección:</span>
                                        <x-input wire:model="direccion" value="{{ $cliente->direccion}}" type="text"
                                            class="form-control col-md-7" name="direccion" />
                                    </div>
                                    <div class="input-group mb-3 col-md-4">
                                        <span id="telefono_contacto1" class="input-group-text col-md-5"
                                            for="telefono_contacto1">Telefono Contacto 1 :</span>
                                        <x-input wire:model="telefono_contacto1"
                                            value="{{ $cliente->telefono_contacto1}}" type="text"
                                            class="form-control col-md-7" name="telefono_contacto1" />
                                    </div>
                                    <div class="input-group mb-3 col-md-4">
                                        <span id="telefono_contacto2" class="input-group-text col-md-5"
                                            for="telefono_contacto2">Telefono Contacto 2 :</span>
                                        <x-input wire:model="telefono_contacto2"
                                            value="{{ $cliente->telefono_contacto2}}" type="text"
                                            class="form-control col-md-7" name="telefono_contacto2" />
                                    </div>
                                    <div class="input-group mb-3 col-md-8">
                                        <span id="email" class="input-group-text col-md-5" for="email">Correo
                                            Electronico:</span>
                                        <x-input wire:model="email" value="{{ $cliente->email}}" type="email"
                                            class="form-control col-md-7" name="email" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <button wire:loading.attr='disabled' type="submit"
                                            class="btn btn-outline-warning"><i class="fas fa-save"></i>
                                            <span wire:loading.remove>Editar</span>
                                            <span wire:loading><i class="fas fa-spinner fa-spin"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ route('admin.cliente.clientes.index') }}" type="submit"
                            class="btn btn-outline-primary"><i class="fas fa-arrow-left"></i>
                            Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
