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
                                    <i class="fas fa-lg fa-tasks"></i> Historia Clínica 5 - 12
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="col-md-12 bg-lightblue pt-3 rounded mb-3">
                        <h5 class="text text-center text-white pb-2">Hábitos y Actividades Extralaborales: </h5>
                    </div>
                    <form wire:submit='guardarHabitosExtralaborales'>
                        <div class="row">
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='tabaco' name="tabaco" label="Tabaco"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-smoking"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="Fumador Actual">Fumador Actual</option>
                                    <option value="Ex-Fumador">Ex-Fumador</option>
                                    <option value="No Fumador">No Fumador</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-input wire:model='cantidad_tabaco' name="cantidad_tabaco"
                                    label="Cantidad Tabaco" label-class="text-lightblue" type="number" min="0" max="50">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-smoking"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-input wire:model='tiempo_fumando' name="tiempo_fumando"
                                    label="Tiempo fumando" label-class="text-lightblue" type="number" min="0" max="50">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-clock"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-input wire:model='tiempo_suspension' name="tiempo_suspension"
                                    label="Tiempo suspendido" label-class="text-lightblue" type="number" min="0" max="50">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-ban"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='licor' name="licor" label="Licor"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-beer"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-input wire:model='tiempo_tomando' name="tiempo_tomando"
                                    label="Tiempo Tomando" label-class="text-lightblue" type="number" min="0" max="50">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-clock"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='frecuencia' name="frecuencia" label="Frecuencia"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-beer"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="2-3 veces x semana">2-3 veces x semana</option>
                                    <option value="ocacional">Ocacional</option>
                                    <option value="menusual">Menusual</option>
                                    <option value="quincenal">Quincenal</option>
                                    <option value="semanal">Semanal</option>
                                    <option value="diario">Diario</option>
                                    <option value="No toma">No toma</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='actividad_deportiva' name="actividad_deportiva"
                                    label="Actividad Deportiva" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-dumbbell"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-input wire:model='tipo_deporte' name="tipo_deporte" label="Tipo Deporte"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-dumbbell"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <x-adminlte-select wire:model='frecuencia_actividad_deportiva'
                                    name="frecuencia_actividad_deportiva" label="Frecuencia Actividad Deportiva"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-dumbbell"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="ocacional">Ocacional</option>
                                    <option value="mensual">Mensual</option>
                                    <option value="quincenal">Quincenal</option>
                                    <option value="semanal">Semanal</option>
                                    <option value="diario">Diario</option>
                                    <option value="No practica">No practica</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <x-adminlte-select wire:model='sustancias_psicoactivas' name="sustancias_psicoactivas"
                                    label="Sustancias Psicoactivas" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-capsules"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <x-adminlte-input wire:model='tipo_sustancia' name="tipo_sustancia"
                                    label="Tipo Sustancia" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-capsules"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <x-adminlte-select wire:model='frecuencia_sustancias_psicoactivas'
                                    name="frecuencia_sustancias_psicoactivas" label="Frecuencia Sustancias"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-dumbbell"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="ocacional">Ocacional</option>
                                    <option value="mensual">Mensual</option>
                                    <option value="quincenal">Quincenal</option>
                                    <option value="semanal">Semanal</option>
                                    <option value="diario">Diario</option>
                                    <option value="No consume">No consume</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-10 col-sm-12">
                                <x-adminlte-textarea wire:model='observaciones_habitos_extralaborales'
                                    name="observaciones_habitos_extralaborales" label="Observaciones"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <button wire:loading.attr='disabled' class="btn btn-outline-success">
                                    <span wire:loading.remove>Siguiente</span>
                                    <span wire:loading>
                                        <i class="fas fa-sync-alt fa-spin"></i>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
