<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-success card-outline mt-3">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10">
                            <h4 class="card-title col-md-8">EVALUACIÓN MÉDICA OCUPACIONAL: <span
                                    class="text text-bold text-uppercase">
                                    {{ $paciente->nombres . ' ' . $paciente->apellidos }} </span> </h4>
                        </div>
                        <div class="col-md-2">
                            <div class="card border-warning mb-3">
                                <div class="card-header bg-warning text-light">
                                    <i class="fas fa-lg fa-tasks"></i> Historia Clínica 9 - 12
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form wire:submit='guardarExamenesComplementarios'>
                        <div class="row">
                            <div class="col-md-12 bg-lightblue pt-3 rounded mb-3">
                                <h5 class="text text-center text-white">Exámenes Complementarios: </h5>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-input wire:model='nombre_examen' name="nombre_examen" label="Nombre Examen"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-flask"></i>
                                        </div>
                                    </x-slot>
                                    <x-input-error class="text-danger" for="nombre_examen" />
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-input wire:model='fecha_examen' type="date" name="fecha_examen"
                                    label="Fecha Examen" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-calendar"></i>
                                        </div>
                                    </x-slot>
                                    <x-input-error class="text-danger" for="fecha_examen" />
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='interpretacion_medica' name="interpretacion_medica"
                                    label="Interpretacion Medica" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-flask"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="normal">Normal</option>
                                    <option value="anormal">Anormal</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <x-adminlte-input wire:model='observaciones_examen' name="observaciones_examen"
                                    label="Observaciones" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-flask"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                                <x-input-error class="text-danger" for="observaciones_examen" />
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <x-adminlte-input wire:model='resultado_de_laboratorios'
                                    name="resultado_de_laboratorios" label="Resultado de Laboratorios"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-flask"></i>
                                        </div>
                                    </x-slot>
                                    <x-input-error class="text-danger" for="resultado_de_laboratorios" />
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <x-adminlte-input wire:model='vacunas_aplicadas' name="vacunas_aplicadas"
                                    label="Vacunas Aplicadas" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-syringe"></i>
                                        </div>
                                    </x-slot>
                                    <x-input-error class="text-danger" for="vacunas_aplicadas" />
                                </x-adminlte-input>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center mb-3">
                                <button type="button" wire:click="agregarExamenComplementario"
                                    class="btn btn-outline-success">
                                    Agregar Examen
                                </button>
                            </div>
                            <button wire:loading.attr="disabled" class="btn btn-outline-success">
                                <span wire:loading.remove>Siguiente</span>
                                <span wire:loading>
                                    <i class="fas fa-sync-alt fa-spin"></i>
                                </span>
                            </button>
                        </div>
                    </form>
                    {{-- Lista de examenes complementarios agregados --}}
                    @if ($mostrarTablaExamenes)
                        @if (count($examenesSeleccionados) > 0)
                            <div>
                                <table class="table table-bordered table-responsive-sm">
                                    <div
                                        style="background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; border-radius: .25rem; padding: .75rem 1.25rem; margin-bottom: 1rem; margin-top:3px">
                                        <p style="margin-bottom: 0;">Solo se guardarán los exámenes de la lista.</p>
                                    </div>

                                    <thead>
                                        <tr>
                                            <th class="text-center">Nombre</th>
                                            <th class="text-center">Fecha Examen</th>
                                            <th class="text-center">Interpretacion Medica</th>
                                            <th class="text-center">Observaciones</th>
                                            <th class="text-center">Resultado de Laboratorios</th>
                                            <th class="text-center">Vacunas Aplicadas</th>
                                            <th>Quitar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($examenesSeleccionados as $index => $examen)
                                            <tr>
                                                <td>{{ $examen['nombre_examen'] }}</td>
                                                <td>{{ $examen['fecha_examen'] }}</td>
                                                <td>{{ $examen['interpretacion_medica'] }}</td>
                                                <td>{{ $examen['observaciones_examen'] }}</td>
                                                <td>{{ $examen['resultado_de_laboratorios'] }}</td>
                                                <td>{{ $examen['vacunas_aplicadas'] }}</td>
                                                <td><button wire:click='quitarExamen( {{ $index }} )'
                                                        class="btn btn-danger text-center">X</button></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
