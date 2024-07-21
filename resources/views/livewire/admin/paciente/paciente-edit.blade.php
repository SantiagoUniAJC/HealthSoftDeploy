<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-secondary card-outline mt-3">
                <div class="card-header bg-warning text-center text-white">
                    <h2 class="card-title">Modulo para editar pacientes. Algunos Campos son solo lectura</h2>
                </div>
                <div class="card-body">
                    <form wire:submit="updatePaciente" enctype="multipart/form-data">
                        <div class="row">
                            <div class="input-group mb-3 col-md-4">
                                <span id="nombres" class="input-group-text col-md-5" for="nombres">Nombres:</span>
                                <input wire:model="nombres" value="{{ $paciente->nombres }}" class="form-control"
                                    name="nombres">
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span id="apellidos" class="input-group-text col-md-5" for="apellidos">Apellidos:</span>
                                <input wire:model="apellidos" value="{{ $paciente->apellidos }}" class="form-control"
                                    name="apellidos">
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span id="tipo_identificacion" class="input-group-text col-md-5"
                                    for="tipo_identificacion">Tipo de
                                    Documento:</span>
                                <select wire:model="tipo_identificacion" class="form-control form-control-md col-md-7"
                                    name="tipo_identificacion">
                                    <option value="{{ $paciente->tipo_identificacion }}" selected>{{
                                        $paciente->tipo_identificacion }}</option>
                                    <hr>
                                    <option value="1">CC</option>
                                    <option value="2">CE</option>
                                    <option value="2">T.I.</option>
                                    <option value="3">Pasaporte</option>
                                    <option value="3">Otro</option>
                                </select>
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span id="numero_identificacion" class="input-group-text col-md-5"
                                    for="numero_identificacion">Numero
                                    Documento:</span>
                                <input wire:model="numero_identificacion" type="text" class="form-control col-md-7"
                                    value="{{ $paciente->numero_identificacion }}" name="numero_identificacion">
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span id="" class="input-group-text col-md-5" for="genero">Genero:</span>
                                <select wire:model="genero" class="form-control form-control-md col-md-7" name="genero">
                                    <option value="{{ $paciente->genero }}" selected>{{ $paciente->genero }}</option>
                                    <hr>
                                    <option value="1">Masculino</option>
                                    <option value="2">Femenino</option>
                                    <option value="3">Sin Identificar</option>
                                </select>
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span id="fecha_de_nacimiento" class="input-group-text col-md-5"
                                    for="fecha_de_nacimiento">Fecha de
                                    nacimiento:</span>
                                <input wire:model="fecha_de_nacimiento" value="{{ $paciente->fecha_nacimiento }}"
                                    type="date" class="form-control col-md-7" name="fecha_de_nacimiento">
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span class="input-group-text col-md-5" for="tipo_sangre">Tipo de Sangre:</span>
                                <select wire:model="tipo_sangre" class="form-control form-control-md col-md-7"
                                    name="tipo_sangre">
                                    <option value="{{ $paciente->tipo_sangre }}" selected>{{ $paciente->tipo_sangre }}
                                    </option>
                                    <hr>
                                    <option value="1">A</option>
                                    <option value="2">B</option>
                                    <option value="3">AB</option>
                                    <option value="4">O</option>
                                </select>
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span class="input-group-text col-md-5" for="factor_rh">Factor RH:</span>
                                <select wire:model="factor_rh" class="form-control form-control-md col-md-7"
                                    name="factor_rh">
                                    <option value="{{ $paciente->factor_rh }}" selected>{{ $paciente->factor_rh }}
                                    </option>
                                    <hr>
                                    <option value="1">+</option>
                                    <option value="2">-</option>
                                </select>
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span class="input-group-text col-md-5" for="grupo_etnico">Grupo etnico:</span>
                                <select wire:model="grupo_etnico" class="form-control form-control-md col-md-7"
                                    name="grupo_etnico">
                                    <option value="{{ $paciente->grupo_etnico }}" selected>{{ $paciente->grupo_etnico }}
                                    </option>
                                    <hr>
                                    <option value="1">Mestizo</option>
                                    <option value="2">Afrocolombiano</option>
                                    <option value="3">Indígena</option>
                                    <option value="4">Blanco</option>
                                    <option value="5">Mulato</option>
                                    <option value="6">Palenquero</option>
                                    <option value="7">Raizal</option>
                                    <option value="8">Otro</option>
                                </select>
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span class="input-group-text col-md-5" for="nivel_estudio">Nivel de estudio:</span>
                                <select wire:model="nivel_estudio" class="form-control form-control-md col-md-7"
                                    name="nivel_estudio">
                                    <option value="{{ $paciente->nivel_estudio }}" selected>{{ $paciente->nivel_estudio
                                        }}</option>
                                    <hr>
                                    <option value="1">Primaria</option>
                                    <option value="2">Secundaria</option>
                                    <option value="3">Técnico</option>
                                    <option value="4">Técnologo</option>
                                    <option value="5">Pregrado</option>
                                    <option value="6">Posgrado</option>
                                    <option value="7">Especialización</option>
                                    <option value="8">Maestria</option>
                                    <option value="9">Otros</option>
                                </select>
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span class="input-group-text col-md-5" for="estado_civil">Estado Civil:</span>
                                <select wire:model="estado_civil" class="form-control form-control-md col-md-7"
                                    name="estado_civil">
                                    <option value="{{ $paciente->estado_civil }}" selected>{{ $paciente->estado_civil }}
                                    </option>
                                    <hr>
                                    <option value="1">Soltero(a)</option>
                                    <option value="2">Casado(a)</option>
                                    <option value="3">Unión libre</option>
                                    <option value="4">Separado(a)</option>
                                    <option value="5">Divorciado(a)</option>
                                    <option value="6">Viudo(a)</option>
                                    <option value="7">Otros</option>
                                </select>
                            </div>
                            {{-- Fotografia --}}
                            <div class="input-group mb-3 col-md-4">
                                <span id="path_fotografia" class="input-group-text" for="path_fotografia">Imagen:</span>
                                <input wire:model="path_fotografia" type="file" class="form-control"
                                    name="path_fotografia" accept="image/*">
                            </div>
                            
                            <div class="input-group mb-3 col-md-4">
                                <span class="input-group-text" for="departamento_residencia">Departamento de
                                    Residencia:</span>
                                <input wire:model="departamento_residencia" type="text" class="form-control"
                                    value="{{ $paciente->departamento_residencia }}" name="departamento_residencia">
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span class="input-group-text col-md-5" for="ciudad_residencia">Ciudad
                                    Residencia:</span>
                                <input wire:model="ciudad_residencia" type="text" class="form-control"
                                    name="ciudad_residencia" value="{{ $paciente->ciudad_residencia }}">
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span id="direccion_residencia" class="input-group-text col-md-5"
                                    for="direccion_residencia">Dirección Residencia:</span>
                                <input wire:model="direccion_residencia" type="text" class="form-control col-md-7"
                                    value="{{ $paciente->direccion_residencia }}" name="direccion_residencia">
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span class="input-group-text col-md-5" for="estrato">Estrato :</span>
                                <select wire:model="estrato" class="form-control form-control-md col-md-7"
                                    name="estrato">
                                    <option value="{{ $paciente->estrato }}" selected>{{ $paciente->estrato }}</option>
                                    <hr>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                </select>
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span class="input-group-text col-md-5" for="zona_residencial">Zona residencial :</span>
                                <select wire:model="zona_residencial" class="form-control form-control-sm col-md-7"
                                    name="zona_residencial">
                                    <option value="{{ $paciente->zona_residencial }}" selected>{{
                                        $paciente->zona_residencial }}</option>
                                    <hr>
                                    <option value="1">Urbana</option>
                                    <hr>
                                    <option value="1">Rural</option>
                                </select>
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span id="comuna" class="input-group-text col-md-5" for="comuna">Comuna:</span>
                                <input wire:model="comuna" type="text" class="form-control col-md-7" name="comuna"
                                    value="{{ $paciente->comuna }}">
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span id="telefono" class="input-group-text col-md-5" for="telefono">Telefono :</span>
                                <input wire:model="telefono" type="text" class="form-control" name="telefono"
                                    value="{{ $paciente->telefono }}">
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span id="email" class="input-group-text col-md-5" for="email">Correo
                                    Electronico:</span>
                                <input wire:model="email" type="email" class="form-control col-md-7" name="email"
                                    value="{{ $paciente->email }}">
                            </div>

                            <div class="input-group mb-3 col-md-4">
                                <span id="eps" class="input-group-text col-md-5" for="eps">EPS:</span>
                                <select wire:model="eps" class="form-control form-control-md col-md-7" name="eps">
                                    <option value="{{ $paciente->eps }}" selected>{{ $paciente->eps }}</option>
                                    <hr>
                                    <option value="1">Aliansalud</option>
                                    <option value="2">Compensar</option>
                                    <option value="3">Coomeva</option>
                                    <option value="4">Cruz Blanca</option>
                                    <option value="5">Famisanar</option>
                                    <option value="6">Medimás</option>
                                    <option value="7">Nueva EPS</option>
                                    <option value="8">Sanitas</option>
                                    <option value="9">Salud Total</option>
                                    <option value="10">Sura</option>
                                    <option value="11">Otra</option>
                                </select>
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span id="arl" class="input-group-text col-md-5" for="eps">ARL:</span>
                                <select wire:model="arl" class="form-control form-control-md col-md-7" name="arl">
                                    <option value="{{ $paciente->arl }}" selected>{{ $paciente->arl }}</option>
                                    <hr>
                                    <option value="1">Bolívar</option>
                                    <option value="2">Colmena</option>
                                    <option value="3">Positiva</option>
                                    <option value="4">Liberty</option>
                                    <option value="5">SURA</option>
                                    <option value="6">MAPFRE</option>
                                    <option value="7">Otra</option>
                                </select>
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span id="afp" class="input-group-text col-md-5" for="afp">AFP:</span>
                                <select wire:model="afp" class="form-control form-control-md col-md-7" name="afp">
                                    <option value="{{ $paciente->afp }}" selected>{{ $paciente->afp }}</option>
                                    <hr>
                                    <option value="1">Colfondos</option>
                                    <option value="2">Porvenir</option>
                                    <option value="3">Protección</option>
                                    <option value="4">Skandia</option>
                                    <option value="5">Otra</option>
                                </select>
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span id="cargo_a_desempeñar" class="input-group-text col-md-5"
                                    for="cargo_a_desempeñar">Cargo a desempeñar:</span>
                                <input wire:model="cargo_a_desempeñar" type="text" class="form-control col-md-7"
                                    name="cargo_a_desempeñar" value="{{ $paciente->cargo_a_desempeñar }}">
                            </div>
                            <div class="input-group mb-3 col-md-4">
                                <span id="acompañante" class="input-group-text col-md-5"
                                    for="acompañante">Acompañante:</span>
                                <input wire:model="acompañante" type="text" class="form-control col-md-7"
                                    name="acompañante" value="{{ $paciente->acompañante }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <button wire:loading.attr='disabled' type="submit" class="btn btn-outline-warning">
                                    <span wire:loading.remove>Editar paciente</span>
                                    <span wire:loading>
                                        <i class="fas fa-sync-alt fa-spin"></i>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-footer text-center">
                <a href="{{ route('admin.paciente.pacientes.index') }}" type="submit" class="btn btn-outline-primary"><i
                        class="fas fa-arrow-left"></i>
                    Volver</a>
            </div>
        </div>
    </div>
</div>
