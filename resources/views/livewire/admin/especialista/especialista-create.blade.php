<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-secondary card-outline mt-3">
                <div class="card-header bg-success text-white">
                    <h2 class="card-title">Todos los Campos son obligatorios; excepto el campo Imagen</h2>
                </div>
                <div class="card-body">
                    <form wire:submit="createEspecialista" enctype="multipart/form-data">
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <div class="input-group">
                                    <span id="nombres" class="input-group-text col-md-5" for="nombres">Nombres:</span>
                                    <input wire:model="nombres" type="text" class="form-control col-md-7"
                                        name="nombres">
                                </div>
                                <x-input-error class="text-danger" for="nombres" />
                            </div>
                            <div class="mb-3 col-md-4">
                                <div class="input-group">
                                    <span id="apellidos" class="input-group-text col-md-5"
                                        for="apellidos">Apellidos:</span>
                                    <input wire:model="apellidos" type="text" class="form-control col-md-7"
                                        name="apellidos">
                                </div>
                                <x-input-error class="text-danger" for="apellidos" />
                            </div>
                            <div class="mb-3 col-md-4">
                                <div class="input-group">
                                    <span id="tipo_identificacion" class="input-group-text col-md-5"
                                        for="tipo_identificacion">Tipo
                                        de Documento:</span>
                                    <select wire:model="tipo_identificacion" class="form-control col-md-7"
                                        name="tipo_identificacion">
                                        <option selected>Tipo Documento</option>
                                        <option value="1">CC</option>
                                        <option value="2">CE</option>
                                        <option value="3">T.I.</option>
                                        <option value="4">Pasaporte</option>
                                        <option value="5">Otro</option>
                                    </select>
                                </div>
                                <x-input-error class="text-danger" for="tipo_identificacion" />
                            </div>
                            <div class="mb-3 col-md-4">
                                <div class="input-group">
                                    <span id="numero_identificacion" class="input-group-text col-md-5"
                                        for="numero_identificacion">Numero Documento:</span>
                                    <input wire:model="numero_identificacion" type="text" class="form-control col-md-7"
                                        name="numero_identificacion">
                                </div>
                                <x-input-error class="text-danger" for="numero_identificacion" />
                            </div>
                            <div class="mb-3 col-md-4">
                                <div class="input-group">
                                    <span id="genero" class="input-group-text col-md-5" for="genero">Genero:</span>
                                    <select wire:model="genero" class="form-control form-control-md col-md-7"
                                        name="genero">
                                        <option selected></option>
                                        <option value="1">Masculino</option>
                                        <option value="2">Femenino</option>
                                        <option value="3">Sin Identificar</option>
                                    </select>
                                </div>
                                <x-input-error class="text-danger" for="genero" />
                            </div>
                            <div class="mb-3 col-md-4">
                                <div class="input-group">
                                    <span id="fecha_de_nacimiento" class="input-group-text col-md-5"
                                        for="fecha_de_nacimiento">Fecha
                                        Nacimiento:</span>
                                    <input wire:model="fecha_de_nacimiento" type="date" class="form-control col-md-7"
                                        name="fecha_de_nacimiento">
                                </div>
                                <x-input-error class="text-danger" for="fecha_de_nacimiento" />
                            </div>
                            <div class="mb-3 col-md-4">
                                <div class="input-group">
                                    <span id="path_fotografia" class="input-group-text"
                                        for="path_fotografia">Imagen:</span>
                                    <input wire:model="path_fotografia" type="file" class="form-control"
                                        name="path_fotografia" accept="image/*">
                                </div>
                            </div>
                            <div class="mb-3 col-md-4">
                                <div class="input-group">
                                    <span id="direccion_residencia" class="input-group-text col-md-5"
                                        for="direccion_residencia">Dirección Residencia:</span>
                                    <input wire:model="direccion_residencia" type="text" class="form-control col-md-7"
                                        name="direccion_residencia">
                                </div>
                                <x-input-error class="text-danger" for="direccion_residencia" />
                            </div>
                            <div class="mb-3 col-md-4">
                                <div class="input-group">
                                    <span id="telefono_contacto1" class="input-group-text col-md-5"
                                        for="telefono_contacto1">Telefono :</span>
                                    <input wire:model="telefono_contacto1" type="text" class="form-control col-md-7"
                                        name="telefono_contacto1">
                                </div>
                                <x-input-error class="text-danger" for="telefono_contacto1" />
                            </div>
                            <div class="mb-3 col-md-4">
                                <div class="input-group">
                                    <span id="telefono_contacto2" class="input-group-text col-md-5"
                                        for="telefono_contacto2">Telefono 2:</span>
                                    <input wire:model="telefono_contacto2" type="text" class="form-control col-md-7"
                                        name="telefono_contacto2">
                                </div>
                                <x-input-error class="text-danger" for="telefono_contacto2" />
                            </div>
                            <div class="mb-3 col-md-4">
                                <div class="input-group">
                                    <span id="email" class="input-group-text col-md-5" for="email">Correo
                                        Electronico:</span>
                                    <input wire:model="email" type="email" class="form-control col-md-7" name="email">
                                </div>
                                <x-input-error class="text-danger" for="email" />
                            </div>

                            <div class="mb-3 col-md-4">
                                <div class="input-group">
                                    <span id="especialidad_medica" class="input-group-text col-md-5"
                                        for="especialidad_medica">Especialidad:</span>
                                    <select wire:model="especialidad_medica"
                                        class="form-control form-control-md col-md-7" name="especialidad_medica">
                                        <option selected></option>
                                        <option value="1">Médico Laboral</option>
                                        <option value="2">Optometra</option>
                                        <option value="3">Psicolog@</option>
                                        <option value="4">Fonoaudiol@</option>
                                        <option value="5">Aux enfermeria</option>
                                    </select>
                                </div>
                                <x-input-error class="text-danger" for="especialidad_medica" />
                            </div>
                            <div class="mb-3 col-md-4">
                                <div class="input-group">
                                    <span id="registro_medico" class="input-group-text col-md-5"
                                        for="registro_medico">Registro
                                        Medico:</span>
                                    <input wire:model="registro_medico" type="text" class="form-control col-md-7"
                                        name="registro_medico">
                                </div>
                                <x-input-error class="text-danger" for="registro_medico" />
                            </div>
                            <div class="mb-3 col-md-4">
                                <div class="input-group">
                                    <span id="fecha_inicio_labor" class="input-group-text col-md-5"
                                        for="fecha_inicio_labor">Fecha Inicio Labor:</span>
                                    <input wire:model="fecha_inicio_labor" type="date" class="form-control col-md-7"
                                        name="fecha_inicio_labor">
                                </div>
                                <x-input-error class="text-danger" for="registro_medico" />
                            </div>
                            <div class="mb-3 col-md-4">
                                <div class="input-group">
                                    <span id="experiencia" class="input-group-text col-md-5"
                                        for="experiencia">Experiencia
                                        Laboral:</span>
                                    <input wire:model="experiencia" type="text" class="form-control col-md-7"
                                        name="experiencia">
                                </div>
                                <x-input-error class="text-danger" for="registro_medico" />
                            </div>
                            <div class="mb-3 col-md-4">
                                <div class="input-group">
                                    <span id="certificaciones" class="input-group-text col-md-5"
                                        for="certificaciones">Certificaciones:</span>
                                    <input wire:model="certificaciones" type="text" class="form-control col-md-7"
                                        name="certificaciones">
                                </div>
                                <x-input-error class="text-danger" for="certificaciones" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <button wire:loading.attr="disabled" class="btn btn-outline-success">
                                    <span wire:loading.remove>Crear Especialista</span>
                                    <span wire:loading>
                                        <i class="fas fa-sync-alt fa-spin"></i>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <a href="{{ route('admin.especialista.especialistas.index') }}"
                                class="btn btn-outline-primary" wire:click="volverAEspecialistas"
                                wire:loading.attr="disabled">
                                <span wire:loading.remove>Volver</span>
                                <span wire:loading>
                                    <i class="fas fa-sync-alt fa-spin"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>