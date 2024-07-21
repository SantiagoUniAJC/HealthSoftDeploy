<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-secondary card-outline mt-3">
                <div class="card-header bg-success text-center text-white">
                    <h2 class="card-title">Todos los Campos son obligatorios</h2>
                </div>
                <div class="card-body">
                    <form wire:submit='crearCliente'>
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <div class="input-group">
                                    <span id="nit" class="input-group-text col-md-5" for="nit">Nit:</span>
                                    <x-input wire:model.live="nit" type="text" class="form-control col-md-7"
                                        name="nit" />
                                </div>
                                <x-input-error class="text-danger" for="nit" />
                            </div>
                            <div class="mb-3 col-md-8">
                                <div class="input-group">
                                    <span id="razon_social" class="input-group-text col-md-4" for="razon_social">Razon
                                        Social:</span>
                                    <x-input wire:model="razon_social" type="text" class="form-control col-md-8"
                                        name="razon_social" />
                                </div>
                                <x-input-error class="text-danger" for="razon_social" />
                            </div>
                            <div class="mb-3 col-md-4">
                                <div class="input-group">
                                    <span id="fecha_inicio_relacion_comercial" class="input-group-text col-md-8"
                                        for="fecha_inicio_relacion_comercial">Fecha
                                        Inicio Relación Comercial:</span>
                                    <x-input wire:model="fecha_inicio_relacion_comercial" type="date"
                                        class="form-control col-md-4" name="fecha_inicio_relacion_comercial" />
                                </div>
                                <x-input-error class="text-danger" for="fecha_inicio_relacion_comercial" />
                            </div>
                            <div class="mb-3 col-md-8">
                                <div class="input-group">
                                    <span id="nombre_comercial" class="input-group-text col-md-4"
                                        for="nombre_comercial">Nombre
                                        Comercial:</span>
                                    <x-input wire:model="nombre_comercial" type="text" class="form-control col-md-8"
                                        name="nombre_comercial" />
                                </div>
                                <x-input-error class="text-danger" for="nombre_comercial" />
                            </div>
                            <div class="mb-3 col-md-4">
                                <div class="input-group">
                                    <span class="input-group-text col-md-5" for="asesor_comercial_asignado">Asesor
                                        Comercial:</span>
                                    <select wire:model="asesor_comercial_asignado"
                                        class="form-control form-control-md col-md-7" name="asesor_comercial_asignado">
                                        <option>Seleccione un asesor de la lista</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->name }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <x-input-error class="text-danger" for="asesor_comercial_asignado" />
                            </div>
                            <div class="mb-3 col-md-4">
                                <div class="input-group">
                                    <span id="actividad_economica" class="input-group-text col-md-5"
                                        for="actividad_economica">Actividad Economica:</span>
                                    <x-input wire:model="actividad_economica" type="text"
                                        class="form-control col-md-8" name="actividad_economica" />
                                </div>
                                <x-input-error class="text-danger" for="actividad_economica" />
                            </div>
                            <div class="mb-3 col-md-4">
                                <div class="input-group">
                                    <span class="input-group-text col-md-5" for="tipo_regimen_iva">Tipo
                                        Regimen IVA:</span>
                                    <select wire:model="tipo_regimen_iva" class="form-control form-control-md col-md-7"
                                        name="tipo_regimen_iva">
                                        <option selected>Selecciona una opción</option>
                                        <option value="1">Responsable IVA</option>
                                        <option value="2">No responsable IVA</option>
                                    </select>
                                </div>
                                <x-input-error class="text-danger" for="tipo_regimen_iva" />
                            </div>
                            <div class="mb-3 col-md-4">
                                <div class="input-group">
                                    <span class="input-group-text col-md-5" for="departamento">Departamento:</span>
                                    <x-input wire:model="departamento" type="text" class="form-control col-md-7"
                                        name="departamento" />
                                </div>
                                <x-input-error class="text-danger" for="departamento" />
                            </div>
                            <div class="mb-3 col-md-8">
                                <div class="input-group">
                                    <span class="input-group-text col-md-4" for="responsabilidad_fiscal">Responsabilida
                                        Fiscal:</span>
                                    <select wire:model="responsabilidad_fiscal"
                                        class="form-control form-control-md col-md-8" name="responsabilidad_fiscal">
                                        <option selected>Selecciona una opción</option>
                                        <option value="1">Gran Contribuyente</option>
                                        <option value="2">Autoretenedor</option>
                                        <option value="3">Agente retenedor IVA</option>
                                        <option value="4">Regimen simple de tributacion</option>
                                        <option value="5">No responsable IVA</option>
                                        <option value="6">No aplica - Otros</option>
                                    </select>
                                </div>
                                <x-input-error class="text-danger" for="responsabilidad_fiscal" />
                            </div>

                            <div class="mb-3 col-md-4">
                                <div class="input-group">
                                    <span class="input-group-text col-md-5" for="ciudad">Ciudad:</span>
                                    <x-input wire:model="ciudad" type="text" class="form-control col-md-7"
                                        name="ciudad" />
                                </div>
                                <x-input-error class="text-danger" for="ciudad" />
                            </div>
                            <div class="mb-3 col-md-4">
                                <div class="input-group">
                                    <span id="direccion" class="input-group-text col-md-5"
                                        for="direccion">Dirección:</span>
                                    <x-input wire:model="direccion" type="text" class="form-control col-md-7"
                                        name="direccion" />
                                </div>
                                <x-input-error class="text-danger" for="direccion" />
                            </div>
                            <div class="mb-3 col-md-4">
                                <div class="input-group">
                                    <span id="telefono_contacto1" class="input-group-text col-md-5"
                                        for="telefono_contacto1">Telefono
                                        Contacto 1 :</span>
                                    <x-input wire:model="telefono_contacto1" type="text"
                                        class="form-control col-md-7" name="telefono_contacto1" />
                                </div>
                                <x-input-error class="text-danger" for="telefono_contacto1" />
                            </div>
                            <div class="mb-3 col-md-4">
                                <div class="input-group">
                                    <span id="telefono_contacto2" class="input-group-text col-md-5"
                                        for="telefono_contacto2">Telefono
                                        Contacto 2 :</span>
                                    <x-input wire:model="telefono_contacto2" type="text"
                                        class="form-control col-md-7" name="telefono_contacto2" />
                                </div>
                                <x-input-error class="text-danger" for="telefono_contacto2" />
                            </div>
                            <div class="mb-3 col-md-8">
                                <div class="input-group">
                                    <span id="email" class="input-group-text col-md-5" for="email">Correo
                                        Electronico:</span>
                                    <x-input wire:model="email" type="email" class="form-control col-md-7"
                                        name="email" />
                                </div>
                                <x-input-error class="text-danger" for="email" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <button wire:loading.attr='disabled' type="submit" class="btn btn-success"><i
                                        class="fas fa-save"></i>
                                    <span wire:loading.remove>Crear
                                        Cliente</span>
                                    <span wire:loading><i class="fas fa-spinner fa-spin"></i></span>
                                </button>
                            </div>
                        </div>
                    </form>
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
