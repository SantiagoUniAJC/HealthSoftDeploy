<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-secondary card-outline mt-3">
                <div class="card-header bg-warning text-center text-white">
                    <h2 class="card-title">Modulo para editar Especialistas. <span class="font-italic"> Algunos campos son
                            solo lectura</span></h2>
                </div>
                <div class="card-body">
                    <form wire:submit="editarEspecialista" enctype="multipart/form-data">
                        <div class="row">
                            <div class="input-group mb-3 col-md-4">
                                <span id="nombres" class="input-group-text col-md-5" for="nombres">Nombres:</span>
                                <input wire:model="nombres" value="{{ $especialista->nombres }}"
                                    class="form-control col-md-7" name="nombres">
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span id="apellidos" class="input-group-text col-md-5" for="apellidos">Apellidos:</span>
                                <input wire:model="apellidos" value="{{ $especialista->apellidos }}"
                                    class="form-control col-md-7" name="apellidos">
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span id="tipo_identificacion" class="input-group-text col-md-5"
                                    for="tipo_identificacion">Tipo
                                    de
                                    Documento:</span>
                                <select wire:model="tipo_identificacion" class="form-control form-control-md col-md-7"
                                    name="tipo_identificacion">
                                    <hr>
                                    <option value="{{ $especialista->tipo_identificacion }}" selected>
                                        {{ $especialista->tipo_identificacion }}</option>
                                    <hr>
                                    <option value="1">CC</option>
                                    <option value="2">CE</option>
                                    <option value="2">T.I.</option>
                                    <option value="3">Pasaporte</option>
                                    <option value="3">Otro</option>
                                </select>
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span id="numero_identificacion " class="input-group-text col-md-5"
                                    for="numero_identificacion">Numero
                                    Documento:</span>
                                <input wire:model="numero_identificacion"
                                    value="{{ $especialista->numero_identificacion }}" class="form-control col-md-7"
                                    name="numero_identificacion">
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span id="" class="input-group-text col-md-5" for="genero">Genero:</span>
                                <select wire:model="genero" class="form-control form-control-md col-md-7"
                                    name="genero">
                                    <option value="{{ $especialista->genero }}" selected>{{ $especialista->genero }}
                                    </option>
                                    <hr>
                                    <option value="1">Masculino</option>
                                    <option value="2">Femenino</option>
                                    <option value="3">Sin Identificar</option>
                                </select>
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span id="fecha_de_nacimiento" class="input-group-text col-md-5"
                                    for="fecha_de_nacimiento">Fecha
                                    de
                                    nacimiento:</span>
                                <input wire:model="fecha_de_nacimiento" type="date" class="form-control col-md-7"
                                    value="{{ $especialista->fecha_de_nacimiento }}">
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span id="path_fotografia" class="input-group-text" for="path_fotografia">Imagen:</span>
                                <input wire:model="path_fotografia" type="file" class="form-control"
                                    name="path_fotografia" accept="image/*">
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span id="direccion_residencia" class="input-group-text col-md-5"
                                    for="direccion_residencia">Dirección Residencia:</span>
                                <input wire:model="direccion_residencia"
                                    value="{{ $especialista->direccion_residencia }}" class="form-control col-md-7"
                                    name="direccion_residencia">
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span id="telefono_contacto1" class="input-group-text col-md-5"
                                    for="telefono_contacto1">Telefono
                                    :</span>
                                <input wire:model="telefono_contacto1" value="{{ $especialista->telefono_contacto1 }}"
                                    class="form-control col-md-7" name="telefono_contacto1">
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span id="telefono_contacto2" class="input-group-text col-md-5"
                                    for="telefono_contacto2">Telefono
                                    2:</span>
                                <input wire:model="telefono_contacto2" value="{{ $especialista->telefono_contacto2 }}"
                                    class="form-control col-md-7" name="telefono_contacto2">
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span id="email" class="input-group-text col-md-5" for="email">Correo
                                    Electronico:</span>
                                <input wire:model="email" type="email" class="form-control col-md-7"
                                    name="email" value="{{ $especialista->email }}">
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span id="especialidad_medica" class="input-group-text col-md-5"
                                    for="especialidad_medica">Especialidad:</span>
                                <select wire:model="especialidad_medica" class="form-control form-control-md col-md-7"
                                    name="especialidad_medica">
                                    <option value="{{ $especialista->especialidad_medica }}" selected>
                                        {{ $especialista->especialidad_medica }}</option>
                                    <hr>
                                    <option value="1">Médico Laboral</option>
                                    <option value="2">Optometra</option>
                                    <option value="3">Psicolog@</option>
                                    <option value="4">Fonoaudiol@</option>
                                    <option value="5">Aux enfermeria</option>
                                </select>
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span id="registro_medico" class="input-group-text col-md-5"
                                    for="registro_medico">Registro
                                    Médico:</span>
                                <input wire:model="registro_medico" type="text" class="form-control col-md-7"
                                    name="registro_medico" value="{{ $especialista->registro_medico }}">
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span id="fecha_inicio_labor" class="input-group-text col-md-5"
                                    for="fecha_inicio_labor">Fecha
                                    Inicio
                                    Labor:</span>
                                <input wire:model="fecha_inicio_labor" class="form-control col-md-7"
                                    name="fecha_inicio_labor" type="date"
                                    value="{{ $especialista->fecha_inicio_labor }}">
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span id="experiencia" class="input-group-text col-md-5"
                                    for="experiencia">Experiencia
                                    Laboral:</span>
                                <input wire:model="experiencia" type="text" class="form-control col-md-7"
                                    name="experiencia" value="{{ $especialista->experiencia }}">
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span id="certificaciones" class="input-group-text col-md-5"
                                    for="certificaciones">Certificaciones:</span>
                                <input wire:model="certificaciones" type="text" class="form-control col-md-7"
                                    name="certificaciones" value="{{ $especialista->certificaciones }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <button wire:loading.attr='disable' class="btn btn-outline-warning">
                                    <span wire:loading.remove>Actualizar especialista</span>
                                    <span wire:loading>
                                        <i class="fas fa-sync-alt fa-spin"></i>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
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
