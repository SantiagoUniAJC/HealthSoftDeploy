<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-secondary card-outline mt-3">
                <div class="card-header bg-success text-center text-white">
                    <h2 class="card-title">Todos los Campos son obligatorios</h2>
                </div>
                <div class="card-body">
                    <form wire:submit="createPaciente" enctype="multipart/form-data">
                        <div class="row">
                            <div class="mb-2 col-md-4">
                                <div class="input-group">
                                    <span id="nombres" class="input-group-text col-md-5"
                                        for="nombres">Nombres:</span>
                                    <x-input wire:model="nombres" type="text" class="form-control col-md-7"
                                        name="nombres" />
                                </div>
                                <x-input-error for="nombres" class="text-danger" />
                            </div>

                            <div class="mb-2 col-md-4">
                                <div class="input-group">
                                    <span id="apellidos" class="input-group-text col-md-5"
                                        for="apellidos">Apellidos:</span>
                                    <x-input wire:model="apellidos" type="text" class="form-control col-md-7"
                                        name="apellidos" />
                                </div>
                                <x-input-error for="apellidos" class="text-danger" />
                            </div>
                            <div class="mb-2 col-md-4">
                                <div class="input-group">
                                    <span id="tipo_identificacion" class="input-group-text col-md-5"
                                        for="tipo_identificacion">Tipo
                                        de
                                        Documento:</span>
                                    <select wire:model="tipo_identificacion" class="form-control form-control-md"
                                        name="tipo_identificacion">
                                        <option selected></option>
                                        <option value="1">CC</option>
                                        <option value="2">CE</option>
                                        <option value="2">T.I.</option>
                                        <option value="3">Pasaporte</option>
                                        <option value="3">Otro</option>
                                    </select>
                                </div>
                                <x-input-error for="tipo_identificacion" class="text-danger" />
                            </div>
                            <div class="mb-2 col-md-4">
                                <div class="input-group">
                                    <span id="numero_identificacion" class="input-group-text col-md-5"
                                        for="numero_identificacion">Número
                                        Documento:</span>
                                    <x-input wire:model="numero_identificacion" type="number" class="form-control"
                                        name="numero_identificacion" min="0" />
                                </div>
                                <x-input-error for="numero_identificacion" class="text-danger" />
                            </div>
                            <div class="mb-2 col-md-4">
                                <div class="input-group">
                                    <span id="" class="input-group-text col-md-5" for="genero">Genero:</span>
                                    <select wire:model="genero" class="form-control form-control-md col-md-7"
                                        name="genero">
                                        <option selected></option>
                                        <option value="1">Masculino</option>
                                        <option value="2">Femenino</option>
                                    </select>
                                </div>
                                <x-input-error for="genero" class="text-danger" />
                            </div>
                            <div class="mb-2 col-md-4">
                                <div class="input-group">
                                    <span id="fecha_de_nacimiento" class="input-group-text col-md-5"
                                        for="fecha_de_nacimiento">Fecha
                                        Nacimiento:</span>
                                    <x-input wire:model="fecha_de_nacimiento" type="date"
                                        class="form-control col-md-7" name="fecha_de_nacimiento" />
                                </div>
                                <x-input-error for="fecha_de_nacimiento" class="text-danger" />
                            </div>
                            <div class="mb-2 col-md-4">
                                <div class="input-group">
                                    <span class="input-group-text col-md-5" for="tipo_sangre">Tipo de Sangre:</span>
                                    <select wire:model="tipo_sangre" class="form-control form-control-md col-md-7"
                                        name="tipo_sangre">
                                        <option selected></option>
                                        <option value="1">A</option>
                                        <option value="2">B</option>
                                        <option value="3">AB</option>
                                        <option value="4">O</option>
                                    </select>
                                </div>
                                <x-input-error for="tipo_sangre" class="text-danger" />
                            </div>
                            <div class="mb-2 col-md-4">
                                <div class="input-group">
                                    <span class="input-group-text col-md-5" for="factor_rh">Factor RH:</span>
                                    <select wire:model="factor_rh" class="form-control form-control-md col-md-7"
                                        name="factor_rh">
                                        <option selected></option>
                                        <option value="1">+</option>
                                        <option value="2">-</option>
                                    </select>
                                </div>
                                <x-input-error for="factor_rh" class="text-danger" />
                            </div>
                            <div class="mb-2 col-md-4">
                                <div class="input-group">
                                    <span class="input-group-text col-md-5" for="grupo_etnico">Grupo etnico:</span>
                                    <select wire:model="grupo_etnico" class="form-control form-control-md col-md-7"
                                        name="grupo_etnico">
                                        <option selected></option>
                                        <option value="1">Mestizo</option>
                                        <option value="2">Afrocolombiano</option>
                                        <option value="3">Indígena</option>
                                        <option value="4">Blanco</option>
                                        <option value="5">Mulato</option>
                                        <option value="6">Palenquero</option>
                                        <option value="7">Raizal</option>
                                    </select>
                                </div>
                                <x-input-error for="grupo_etnico" class="text-danger" />
                            </div>
                            <div class="mb-2 col-md-4">
                                <div class="input-group">
                                    <span class="input-group-text col-md-5" for="nivel_estudio">Nivel de
                                        estudio:</span>
                                    <select wire:model="nivel_estudio" class="form-control form-control-md col-md-7"
                                        name="nivel_estudio">
                                        <option selected></option>
                                        <option value="1">Primaria</option>
                                        <option value="2">Secundaria</option>
                                        <option value="3">Técnico</option>
                                        <option value="4">Técnologo</option>
                                        <option value="5">Pregrado</option>
                                        <option value="6">Posgrado</option>
                                    </select>
                                </div>
                                <x-input-error for="nivel_estudio" class="text-danger" />
                            </div>
                            <div class="mb-2 col-md-4">
                                <div class="input-group">
                                    <span class="input-group-text col-md-5" for="estado_civil">Estado Civil:</span>
                                    <select wire:model="estado_civil" class="form-control form-control-md col-md-7"
                                        name="estado_civil">
                                        <option selected></option>
                                        <option value="1">Soltero(a)</option>
                                        <option value="2">Casado(a)</option>
                                        <option value="3">Unión libre</option>
                                        <option value="4">Separado(a)</option>
                                        <option value="5">Divorciado(a)</option>
                                        <option value="6">Viudo(a)</option>
                                    </select>
                                </div>
                                <x-input-error for="estado_civil" class="text-danger" />
                            </div>
                            <div class="input-group mb-2 col-md-4">
                                <div class="input-group">
                                    <span id="path_fotografia" class="input-group-text"
                                        for="path_fotografia">Imagen:</span>
                                    <x-input wire:model="path_fotografia" type="file" class="form-control"
                                        name="path_fotografia" accept="image/*" />
                                </div>
                                <x-input-error for="path_fotografia" class="text-danger" />
                            </div>

                            <div class="mb-2 col-md-4">
                                <div class="input-group">
                                    <span class="input-group-text col-md-5" for="departamento_residencia">Departamento
                                        Residencia:</span>
                                    <select wire:change='getCiudades($event.target.value)'
                                        wire:model="departamento_residencia"
                                        class="form-control form-control-md col-md-7" name="departamento_residencia">
                                        <option selected>Seleccione una Departamento</option>
                                        @foreach ($departamentos as $dpto)
                                            <option value="{{ $dpto['state_name'] }}">{{ $dpto['state_name'] }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <x-input-error for="departamento_residencia" class="text-danger" />
                            </div>
                            <div class="mb-2 col-md-4">
                                <div class="input-group">
                                    <span class="input-group-text col-md-5" for="ciudad_residencia">Ciudad Residencia
                                        :</span>
                                    <select wire:change='getCiudades()' wire:model="ciudad_residencia"
                                        class="form-control form-control-md col-md-7" name="ciudad_residencia">

                                        @foreach ($ciudades as $ciudad)
                                            <option value="{{ $ciudad['city_name'] }}">{{ $ciudad['city_name'] }}
                                            </option>
                                        @endforeach

                                    </select>
                                </div>
                                <x-input-error for="ciudad_residencia" class="text-danger" />
                            </div>
                            <div class="mb-2 col-md-4">
                                <div class="input-group">
                                    <span id="direccion_residencia" class="input-group-text col-md-5"
                                        for="direccion_residencia">Dirección
                                        de Residencia:</span>
                                    <x-input wire:model="direccion_residencia" type="text"
                                        class="form-control col-md-7" name="direccion_residencia" />
                                </div>
                                <x-input-error for="direccion_residencia" class="text-danger" />
                            </div>
                            <div class="mb-2 col-md-4">
                                <div class="input-group">
                                    <span class="input-group-text col-md-5" for="estrato">Estrato :</span>
                                    <select wire:model="estrato" class="form-control form-control-md col-md-7"
                                        name="estrato">
                                        <option selected></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                    </select>
                                </div>
                                <x-input-error for="estrato" class="text-danger" />
                            </div>
                            <div class="mb-2 col-md-4">
                                <div class="input-group">
                                    <span class="input-group-text col-md-5" for="zona_residencial">Zona residencial
                                        :</span>
                                    <select wire:model="zona_residencial"
                                        class="form-control form-control-md col-md-7" name="zona_residencial">
                                        <option selected></option>
                                        <option value="1">Urbana</option>
                                        <option value="1">Rural</option>
                                    </select>
                                </div>
                                <x-input-error for="zona_residencial" class="text-danger" />
                            </div>
                            <div class="mb-2 col-md-4">
                                <div class="input-group">
                                    <span class="input-group-text col-md-5" for="comuna">Comuna :</span>
                                    <select wire:model="comuna" class="form-control form-control-md col-md-7"
                                        name="comuna">
                                        <option selected></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-2 col-md-4">
                                <div class="input-group">
                                    <span id="telefono" class="input-group-text col-md-5" for="telefono">Telefono
                                        :</span>
                                    <x-input wire:model="telefono" type="text" class="form-control col-md-7"
                                        name="telefono" />
                                </div>
                                <x-input-error for="telefono" class="text-danger" />
                            </div>
                            <div class="mb-2 col-md-4">
                                <div class="input-group">
                                    <span id="email" class="input-group-text col-md-5" for="email">Correo
                                        Electronico:</span>
                                    <x-input wire:model="email" type="email" class="form-control col-md-7"
                                        name="email" />
                                </div>
                                <x-input-error for="email" class="text-danger" />
                            </div>

                            <div class="mb-2 col-md-4">
                                <div class="input-group">
                                    <span id="eps" class="input-group-text col-md-5" for="eps">EPS:</span>
                                    <select wire:model="eps" class="form-control form-control-md col-md-7"
                                        name="eps">
                                        <option selected></option>
                                        <option value="1">Aliansalud</option>
                                        <option value="2">Compensar</option>
                                        <option value="3">Coomeva</option>
                                        <option value="4">Cruz Blanca</option>
                                        <option value="5">Famisanar</option>
                                        <option value="6">Medimás</option>
                                        <option value="7">Nueva EPS</option>
                                        <option value="8">Sanitas</option>
                                        <option value="9">Salud Total</option>
                                        <option value="10">SURA</option>
                                        <option value="11">No tiene</option>
                                        <option value="12">No recuerda</option>
                                    </select>
                                </div>
                                <x-input-error for="eps" class="text-danger" />
                            </div>
                            <div class="mb-2 col-md-4">
                                <div class="input-group">
                                    <span id="arl" class="input-group-text col-md-5" for="eps">ARL:</span>
                                    <select wire:model="arl" class="form-control form-control-md col-md-7"
                                        name="arl">
                                        <option selected></option>
                                        <option value="1">Bolívar</option>
                                        <option value="2">Colmena</option>
                                        <option value="3">Positiva</option>
                                        <option value="4">Liberty</option>
                                        <option value="5">SURA</option>
                                        <option value="6">MAPFRE</option>
                                        <option value="7">No tiene</option>
                                        <option value="8">No recuerda</option>
                                    </select>
                                </div>
                                <x-input-error for="arl" class="text-danger" />
                            </div>
                            <div class="mb-2 col-md-4">
                                <div class="input-group">
                                    <span id="afp" class="input-group-text col-md-5" for="afp">AFP:</span>
                                    <select wire:model="afp" class="form-control form-control-md col-md-7"
                                        name="afp">
                                        <option selected></option>
                                        <option value="1">Colfondos</option>
                                        <option value="2">Porvenir</option>
                                        <option value="3">Protección</option>
                                        <option value="4">Skandia</option>
                                        <option value="5">No tiene</option>
                                        <option value="6">No recuerda</option>
                                    </select>
                                </div>
                                <x-input-error for="afp" class="text-danger" />
                            </div>
                            <div class="mb-2 col-md-4">
                                <div class="input-group">
                                    <span id="cargo_a_desempeñar" class="input-group-text col-md-5"
                                        for="cargo_a_desempeñar">Cargo a desempeñar:</span>
                                    <x-input wire:model="cargo_a_desempeñar" type="text"
                                        class="form-control col-md-7" name="acompañante" />
                                </div>
                                <x-input-error for="cargo_a_desempeñar" class="text-danger" />
                            </div>
                            <div class="mb-2 col-md-4">
                                <div class="input-group">
                                    <span id="acompañante" class="input-group-text col-md-5"
                                        for="acompañante">Acompañante:</span>
                                    <x-input wire:model="acompañante" type="text" class="form-control col-md-7"
                                        name="acompañante" />
                                </div>
                                <x-input-error for="acompañante" class="text-danger" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <button wire:loading.attr='disabled' class="btn btn-outline-success"> <span
                                        wire:loading.remove>Crear paciente</span>
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
                <a href="{{ route('admin.paciente.pacientes.index') }}" type="submit"
                    class="btn btn-outline-primary"><i class="fas fa-arrow-left"> </i> Volver</a>
            </div>
        </div>
    </div>
</div>
