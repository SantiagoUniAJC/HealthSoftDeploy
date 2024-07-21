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
                                            <option value="Pre-Ingreso">Pre-Ingreso</option>
                                            <option value="Periodico">Periódico</option>
                                            <option value="Reubicación">Reubicación</option>
                                            <option value="Cambio de Ocupación">Cambio de Ocupación</option>
                                            <option value="Egreso">Egreso</option>
                                            <option value="Post-incapacidad">Post-Incapacidad</option>
                                            <option value="Reintegro Laboral">Reintegro Laboral</option>
                                            <option value="Seguimiento">Seguimiento</option>
                                            <option value="Otro">Otro</option>
                                        </select>
                                    </div>
                                    <x-input-error for="tipo_evaluacion" class="text-danger" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <div class="input-group">
                                        <span id="enfasis" class="input-group-text col-6 col-md-4 text-md-end"
                                            for="enfasis">Enfasis en:</span>
                                        <select wire:model="enfasis" class="form-control col-6 col-md-8" name="enfasis">
                                            <option value="">Seleccione...</option>
                                            <option value="Medico">Medico</option>
                                            <option value="Psicologico">Psicologico</option>
                                            <option value="Fisioterapia">Fisioterapia</option>
                                            <option value="Terapia Ocupacional">Terapia Ocupacional</option>
                                            <option value="Fonoaudiologia">Fonoaudiologia</option>
                                            <option value="Psiquiatrico">Psiquiatrico</option>
                                            <option value="Nutricional">Nutricional</option>
                                            <option value="Otros">Otros</option>
                                        </select>
                                    </div>
                                    <x-input-error for="enfasis" class="text-danger" />
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
                                        <x-input wire:model.live="search" class="form-control col-md-8" name="search"
                                            id="search" placeholder="Busqueda por nombre o cedula"
                                            wire:change="searchPaciente" />
                                        <div wire:loading>
                                            <span class="text text-success text-bold">Buscando Paciente......</span>
                                        </div>
                                    </div>
                                </div>

                                @foreach ($pacientes as $paciente)
                                    <div class="mb-3 col-md-6">
                                        <div class="input-group">
                                            <span id="paciente_id" class="input-group-text col-6 col-md-4 text-md-end"
                                                for="paciente_id">Paciente solicita:</span>
                                            <select wire:model="paciente_id" class="form-control col-6 col-md-8"
                                                name="paciente_id">
                                                <option value="">Seleccione...</option>
                                                <option value="{{ $paciente->id }}">
                                                    {{ $paciente->nombres . ' ' . $paciente->apellidos }}
                                                </option>
                                            </select>
                                            <x-input-error for="paciente_id" />
                                        </div>
                                @endforeach
                            </div>

                            <div class="mb-3 col-md-6 text-left">
                                <div class="input-group">
                                    <span class="input-group-text col-md-4">Seleccionar Cliente:</span>
                                    <select wire:model.lazy="cliente_id" class="form-control col-md-8"
                                        name="cliente_id" wire:change='openModal'>
                                        <option value="">Seleccione...</option>
                                        @foreach ($clientes as $cliente)
                                            <option value="{{ $cliente->id }}">{{ $cliente->razon_social }}</option>
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
                                                                href="{{ route('admin.tarifario.create', $clienteSeleccionado->id) }}" target="_blank">Crear
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
                                                                        <td>{{ $tarifa->ciudad->nombre_ciudad }}</td>
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
                                        // Use above variables to manipulate the DOM

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
                            <a href="{{ route('admin.ordendeservicios.index') }}"
                                class="btn btn-outline-primary"><i class="fas fa-arrow-circle-left"></i>
                                Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>