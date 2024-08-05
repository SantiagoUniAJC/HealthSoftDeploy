<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-secondary card-outline mt-3">
                    <div class="card-header bg-success text-center text-white">
                        <h2 class="card-title">Crear Orden de Servicio.</h2>
                    </div>
                    <div class="card-body">
                        <form wire:submit="crearOrdenDeServicio">
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <div class="input-group">
                                        <span id="tipo_evaluacion" class="input-group-text col-6 col-md-4 text-md-end"
                                            for="tipo_evaluacion">Tipo de Evaluación:</span>
                                        <select wire:model="tipo_evaluacion" class="form-control col-6 col-md-8"
                                            name="tipo_evaluacion">
                                            <option value="">Seleccione una opción</option>
                                            <option value="cambio_de_ocupacion">Cambio de Ocupación</option>
                                            <option value="egreso">Egreso</option>
                                            <option value="pre_ingreso">Pre-Ingreso</option>
                                            <option value="periodico">Periódico</option>
                                            <option value="post_incapacidad">Post-Incapacidad</option>
                                            <option value="reubicacion">Reubicación</option>
                                            <option value="reintegro_laboral">Reintegro Laboral</option>
                                            <option value="seguimiento">Seguimiento</option>
                                        </select>
                                    </div>
                                    <x-input-error for="tipo_evaluacion" class="text-danger" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <div class="input-group">
                                        <span id="medio_venta" class="input-group-text col-6 col-md-4 text-md-end"
                                            for="medio_venta">Medio de Venta:</span>
                                        <select wire:model="medio_venta" class="form-control col-6 col-md-8"
                                            name="medio_venta">
                                            <option value="">Seleccione...</option>
                                            <option value="Intramural">Intramural</option>
                                            <option value="Telemedicina">Telemedicina</option>
                                            <option value="Extramural">Extramural</option>
                                        </select>
                                    </div>
                                    <x-input-error for="medio_venta" class="text-danger" />
                                </div>
                                <div class="col-md-12">
                                    <span id="enfasis" class="input-group-text">Énfasis
                                        en:</span>
                                </div>
                                <div class="col-md-12 mt-3 ml-3">
                                    <div class="row">
                                        <div class="form-check col-md-2">
                                            <input type="checkbox" id="brigadista" wire:model="enfasis"
                                                value="brigadista" class="form-check-input">
                                            <label for="brigadista" class="form-check-label">Brigadista</label>
                                        </div>
                                        <div class="form-check col-md-2">
                                            <input type="checkbox" id="conductor" wire:model="enfasis"
                                                value="conductor" class="form-check-input">
                                            <label for="conductor" class="form-check-label">Conducción de
                                                Vehículo</label>
                                        </div>
                                        <div class="form-check col-md-2">
                                            <input type="checkbox" id="espacios_confinados"
                                                wire:model="enfasis" value="espacios_confinados"
                                                class="form-check-input">
                                            <label for="espacios_confinados" class="form-check-label">Espacios
                                                Confinados</label>
                                        </div>
                                        <div class="form-check col-md-2">
                                            <input type="checkbox" id="expo_radiaciones_ionizantes"
                                                wire:model="enfasis"
                                                value="expo_radiaciones_ionizantes" class="form-check-input">
                                            <label for="expo_radiaciones_ionizantes" class="form-check-label">Exposición
                                                a Radiaciones ionizantes</label>
                                        </div>
                                        <div class="form-check col-md-2">
                                            <input type="checkbox" id="manipulacion_de_alimentos"
                                                wire:model="enfasis" value="manipulacion_de_alimentos"
                                                class="form-check-input">
                                            <label for="manipulacion_de_alimentos" class="form-check-label">Manipulación
                                                de Alimentos</label>
                                        </div>
                                        <div class="form-check col-md-2">
                                            <input type="checkbox" id="manipulacion_de_farmacos"
                                                wire:model="enfasis" value="manipulacion_de_farmacos"
                                                class="form-check-input">
                                            <label for="manipulacion_de_farmacos" class="form-check-label">Manipulación
                                                Productos Farmacéuticos</label>
                                        </div>
                                        <div class="form-check col-md-2">
                                            <input type="checkbox" id="trabajo_en_alturas"
                                                wire:model="enfasis" value="trabajo_en_alturas"
                                                class="form-check-input">
                                            <label for="trabajo_en_alturas" class="form-check-label">Trabajo en
                                                Alturas</label>
                                        </div>
                                        <div class="form-check col-md-2">
                                            <input type="checkbox" id="trabajo_riesgo_electrico"
                                                wire:model="enfasis" value="trabajo_riesgo_electrico"
                                                class="form-check-input">
                                            <label for="trabajo_riesgo_electrico" class="form-check-label">Trabajo
                                                Riesgo Eléctrico</label>
                                        </div>
                                        <div class="form-check col-md-2">
                                            <input type="checkbox" id="riesgo_covid-19" wire:model="enfasis"
                                                value="riesgo_covid-19" class="form-check-input">
                                            <label for="riesgo_covid-19" class="form-check-label">Riesgo para
                                                COVID-19</label>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="form-check col-md-2">
                                            <input type="checkbox" id="cardiomuscular" wire:model="enfasis"
                                                value="cardiomuscular" class="form-check-input">
                                            <label for="cardiomuscular"
                                                class="form-check-label">Cardiomuscular</label>
                                        </div>
                                        <div class="form-check col-md-2">
                                            <input type="checkbox" id="dermatologico" wire:model="enfasis"
                                                value="dermatologico" class="form-check-input">
                                            <label for="dermatologico" class="form-check-label">Dermatológico</label>
                                        </div>
                                        <div class="form-check col-md-2">
                                            <input type="checkbox" id="pruebas_psicosensometricas"
                                                wire:model="enfasis"
                                                value="pruebas_psicosensometricas" class="form-check-input">
                                            <label for="pruebas_psicosensometricas" class="form-check-label">Pruebas
                                                Psicosensométricas</label>
                                        </div>
                                        <div class="form-check col-md-2">
                                            <input type="checkbox" id="osteomuscular_fisioterapia"
                                                wire:model="enfasis"
                                                value="osteomuscular_fisioterapia" class="form-check-input">
                                            <label for="osteomuscular_fisioterapia"
                                                class="form-check-label">Osteomuscular
                                                - Fisioterapia</label>
                                        </div>
                                        <div class="form-check col-md-2">
                                            <input type="checkbox" id="neurologico" wire:model="enfasis"
                                                value="neurologico" class="form-check-input">
                                            <label for="neurologico" class="form-check-label">Neurológico</label>
                                        </div>
                                        <div class="form-check col-md-2">
                                            <input type="checkbox" id="osteomuscular" wire:model="enfasis"
                                                value="osteomuscular" class="form-check-input">
                                            <label for="osteomuscular" class="form-check-label">Osteomuscular</label>
                                        </div>
                                        <div class="form-check col-md-2">
                                            <input type="checkbox" id="sistema_fonatorio"
                                                wire:model="enfasis" value="sistema_fonatorio"
                                                class="form-check-input">
                                            <label for="sistema_fonatorio" class="form-check-label">Sistema
                                                Fonatorio</label>
                                        </div>
                                        <div class="form-check col-md-2">
                                            <input type="checkbox" id="no_aplica" wire:model="enfasis"
                                                value="no_aplica" class="form-check-input">
                                            <label for="no_aplica" class="form-check-label">No Aplica</label>
                                        </div>
                                        <div class="col-md-12">
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <div class="input-group">
                                        <span id="prestador_de_salud_id"
                                            class="input-group-text col-6 col-md-4 text-md-end"
                                            for="lugar_de_realizacion">Prestador del Servicio:</span>
                                        <select wire:model='prestador_de_salud_id' class="form-control col-6 col-md-8"
                                            name="prestador_de_salud_id">
                                            <option value="">Seleccione...</option>
                                            @foreach ($prestadorServicio as $prestador)
                                                <option value="{{ $prestador->id }}">{{ $prestador->razon_social }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <x-input-error for="prestador_de_salud_id" class="text-danger" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-text col-md-4">Buscar
                                            Paciente:</span>
                                        <x-input wire:model.live="search" class="form-control col-md-8"
                                            name="search" id="search" placeholder="Busqueda por nombre o cedula"
                                            wire:change="searchPaciente" />
                                        <div wire:loading>
                                            <span class="text text-success text-bold">Buscando
                                                Paciente......</span>
                                        </div>
                                    </div>
                                </div>
                                @if ($search)
                                    @if (empty($pacientes) ||
                                            (is_array($pacientes) && count($pacientes) === 0) ||
                                            ($pacientes instanceof \Illuminate\Database\Eloquent\Collection && $pacientes->isEmpty()))
                                        <div class="mb-3 col-md-6">
                                            <div class="input-group">
                                                <a href="{{ route('admin.paciente.pacientes.create') }}"
                                                    class="btn btn-outline-success" target="_blank">Crear
                                                    Paciente</a>
                                            </div>
                                        </div>
                                    @else
                                        @foreach ($pacientes as $paciente)
                                            <div class="mb-3 col-md-6">
                                                <div class="input-group">
                                                    <span id="paciente_id"
                                                        class="input-group-text col-6 col-md-4 text-md-end"
                                                        for="paciente_id">Paciente solicita:</span>
                                                    <select wire:model="paciente_id"
                                                        class="form-control col-6 col-md-8" name="paciente_id">
                                                        <option value="">Seleccione...</option>
                                                        <option value="{{ $paciente->id }}">
                                                            {{ $paciente->nombres . ' ' . $paciente->apellidos }}
                                                        </option>
                                                    </select>
                                                    <x-input-error for="paciente_id" />
                                                </div>
                                        @endforeach
                                    @endif
                                @endif
                            </div>

                            <div class="mb-3 col-md-6 text-left">
                                <div class="input-group">
                                    <span class="input-group-text col-md-4">Seleccionar Cliente:</span>
                                    <select wire:model.lazy="cliente_id" class="form-control col-md-8"
                                        name="cliente_id" wire:change='openModal'>
                                        <option value="">Seleccione...</option>
                                        @foreach ($clientes as $cliente)
                                            <option value="{{ $cliente->id }}">{{ $cliente->razon_social }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <x-input-error for="cliente_id" class="text-danger" />
                            </div>

                            {{-- Modal para agregar tarifas --}}
                            @if ($open)
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-outline-primary btn-md" data-toggle="modal"
                                    data-target="#modelId">
                                    <span class="form-control">Agregar procedimientos</span>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="modelId" tabindex="-1" role="dialog"
                                    aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Tarifario disponible para el cliente
                                                    {{ $clienteSeleccionado->razon_social }}</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    @if ($tarifas->count() == 0)
                                                        <div class="text-center">
                                                            <p class="text-danger mt-2">No existen tarifas para el
                                                                cliente
                                                                actual</p>
                                                            <a class="btn btn-outline-success btn-sm"
                                                                href="{{ route('admin.tarifario.create', $clienteSeleccionado->id) }}"
                                                                target="_blank">Crear
                                                                Tarifario</a>
                                                        </div>
                                                    @else
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>Seleccionar</th>
                                                                    <th>Nombre</th>
                                                                    <th>Precio</th>
                                                                    <th>Ciudad tarifario</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($tarifas as $tarifa)
                                                                    <tr>
                                                                        <td><input type="checkbox"
                                                                                wire:model="tarifasSeleccionadas.{{ $tarifa->id }}"
                                                                                value="{{ $tarifa->id }}"></td>
                                                                        <td>{{ $tarifa->nombre }}</td>
                                                                        <td>$ {{ $tarifa->precio }} COP</td>
                                                                        <td>{{ $tarifa->ciudad->nombre_ciudad }}
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                        </table>
                                                        <hr>

                                                    @endif
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-danger"
                                                    data-dismiss="modal">Cancelar</button>
                                                <button wire:loading.attr='disabled' type="submit"
                                                    class="btn btn-outline-success"><i class="fas fa-save"></i>
                                                    <span wire:loading.remove>Crear Orden de Servicio</span>
                                                    <span wire:loading><i class="fas fa-spinner fa-spin"></i></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    $('#exampleModal').on('show.bs.modal', event => {
                                        var button = $(event.relatedTarget);
                                        var modal = $(this);

                                    });
                                </script>
                            @endif
                            {{-- Fin Modal para agregar tarifas --}}
                    </div>
                    </form>
                    {{-- Boton de Carga --}}
                    <div class="col-md-12 text-center mb-4">
                        <button wire:loading.attr='disabled' class="btn btn-success">
                            <span wire:loading.remove></span>
                            <span wire:loading><i class="fas fa-spinner fa-spin"></i></span>
                        </button>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ route('admin.ordendeservicios.index') }}" class="btn btn-outline-primary"><i
                                    class="fas fa-arrow-circle-left"></i>
                                Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
