<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-success card-outline mt-3">
                <div class="card-header">
                    <h4 class="card-title">EVALUACIÓN MÉDICA OCUPACIONAL: <span class="text text-bold text-uppercase">
                            {{ $paciente->nombres . ' ' . $paciente->apellidos }} </span> </h4>
                </div>
                <div class="card-body">
                    <form wire:submit='guardarPruebasNeurologicas'>
                        <div class="row">
                            <div class="col-md-12 bg-lightblue pt-3 rounded mb-3">
                                <h5 class="text-center  text-white">Pruebas Neurológicas</h5>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='pares_craneales' name="pares_craneales"
                                    label="Pares Craneales" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-brain"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                    <option value="no se evalua">No se evalua</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-8">
                                <x-adminlte-input wire:model='observaciones_pares_craneales'
                                    name="observaciones_pares_craneales" label="Observaciones Pares Craneales"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-brain"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='nervios_motores' name="nervios_motores"
                                    label="Nervios Motores" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-brain"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                    <option value="no se evalua">No se evalua</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-8">
                                <x-adminlte-input wire:model='observaciones_nervios_motores'
                                    name="observaciones_nervios_motores" label="Observaciones Nervios Motores"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-brain"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='nervios_sensitivos' name="nervios_sensitivos"
                                    label="Nervios Sensitivos" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-brain"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                    <option value="no se evalua">No se evalua</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-8">
                                <x-adminlte-input wire:model='observaciones_nervios_sensitivos'
                                    name="observaciones_nervios_sensitivos" label="Observaciones Nervios  Sensitivos"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-brain"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='reflejos' name="reflejos" label="Reflejos"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-brain"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                    <option value="no se evalua">No se evalua</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-8">
                                <x-adminlte-input wire:model='observaciones_reflejos' name="observaciones_reflejos"
                                    label="Observaciones Reflejos" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-brain"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='coordinacion' name="coordinacion" label="Coordinacion"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-brain"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                    <option value="no se evalua">No se evalua</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-8">
                                <x-adminlte-input wire:model='observaciones_coordinacion'
                                    name="observaciones_coordinacion" label="Observaciones Coordinacion"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-brain"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='equilibrio' name="equilibrio" label="Equilibrio"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-brain"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                    <option value="no se evalua">No se evalua</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-8">
                                <x-adminlte-input wire:model='observaciones_equilibrio'
                                    name="observaciones_equilibrio" label="Observaciones Equilibrio"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-brain"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            {{-- Pruebas Osteomuscular --}}
                            <div class="col-md-12 bg-lightblue pt-3 rounded mb-3">
                                <h5 class="text-center  text-white">Pruebas Osteomuscular</h5>
                            </div>

                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='columna_vertebral' name="columna_vertebral"
                                    label="Columna Vertebral" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-bone"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                    <option value="no se evalua">No se evalua</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-8">
                                <x-adminlte-input wire:model='observaciones_columna_vertebral'
                                    name="observaciones_columna_vertebral" label="Observaciones Columna Vertebral"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-bone"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='extremidades_superiores' name="extremidades_superiores"
                                    label="Extremidades Superiores" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-bone"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                    <option value="no se evalua">No se evalua</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-8">
                                <x-adminlte-input wire:model='observaciones_extremidades_superiores'
                                    name="observaciones_extremidades_superiores"
                                    label="Observaciones Extremidades Superiores" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-bone"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='extremidades_inferiores' name="extremidades_inferiores"
                                    label="Extremidades Inferiores" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-bone"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                    <option value="no se evalua">No se evalua</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-8">
                                <x-adminlte-input wire:model='observaciones_extremidades_inferiores'
                                    name="observaciones_extremidades_inferiores"
                                    label="Observaciones Extremidades Inferiores" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-bone"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            {{-- Pruebas Específicas --}}
                            <div class="col-md-12">
                                <div class="col-md-12 bg-lightblue pt-3 mb-2 rounded pb-1">
                                    <h5 class="text-center  text-white">Pruebas Específicas</h5>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-input wire:model='prueba_phalen' name="prueba_phalen"
                                    label="Prueba Phalen" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-bone"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-input wire:model='prueba_tinel' name="prueba_tinel" label="Prueba Tinel"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-bone"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-input wire:model='schober' name="schober" label="Prueba Schober"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-bone"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-input wire:model='prueba_lassegue' name="prueba_lassegue"
                                    label="Prueba Lassegue" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-bone"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-input wire:model='prueba_wells' name="prueba_wells" label="Prueba Wells"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-bone"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-input wire:model='prueba_yocum' name="prueba_yocum" label="Prueba Yocum"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-bone"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-input wire:model='prueba_jobe' name="prueba_jobe" label="Prueba Jobe"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-bone"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-input wire:model='prueba_patte' name="prueba_patte" label="Prueba Patte"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-bone"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-input wire:model='prueba_gerber' name="prueba_gerber"
                                    label="Prueba Gerber" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-bone"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            {{-- Pruebas Específicas Riesgo Cardiovascular --}}
                            <div class="col-md-12">
                                <div class="col-md-12 bg-lightblue pt-3 mb-2 rounded pb-1">
                                    <h5 class="text-center  text-white">Pruebas Específicas Riesgo Cardiovascular</h5>
                                </div>
                            </div>

                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='test_de_framingham' name="test_de_framingham"
                                    label="Test de Framingham" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-heartbeat"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="Si">Normal</option>
                                    <option value="No">Anormal</option>
                                    <option value="no se evalua">No se evalua</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-input wire:model='colesterol_total' name="colesterol_total"
                                    label="Colesterol Total" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-flask"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-input wire:model='colesterol_hdl' name="colesterol_hdl"
                                    label="Colesterol HDL" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-flask"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-input wire:model='diabetes_mellitus' name="diabetes_mellitus"
                                    label="Diabetes Mellitus" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-flask"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-input wire:model='tension_arterial_pruebas_especificas'
                                    name="tension_arterial_pruebas_especificas" label="Tension Arterial"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-flask"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-input wire:model='probabilidad_evento_cardiovascular_10_anos'
                                    name="probabilidad_evento_cardiovascular_10_anos"
                                    label="Provabilidad Riesgo Cardiovascular a 10 años" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-flask"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='test_de_ruffler_dickson' name="test_de_ruffler_dickson"
                                    label="Test de Ruffler Dickson" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-heartbeat"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="Si">Normal</option>
                                    <option value="No">Anormal</option>
                                    <option value="no se evalua">No se evalua</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-input wire:model='pulsaciones_en_reposo' name="pulsaciones_en_reposo"
                                    label="Pulsaciones en Reposo" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-flask"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-input wire:model='pulsaciones_terminado_ejercicio'
                                    name="pulsaciones_terminado_ejercicio" label="Pulsaciones terminado ejercicio"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-flask"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-12">
                                <x-adminlte-textarea wire:model='valoraciones' name="valoraciones" label="Valoraciones"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-flask"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-textarea>
                            </div>
                            {{-- Pruebas Especiales Trabajos de Alto Riesgo --}}
                            <div class="col-md-12">
                                <div class="col-md-12 bg-lightblue pt-3 mb-2 rounded pb-1">
                                    <h5 class="text-center  text-white">Pruebas Especiales Trabajos de Alto Riesgo</h5>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='romberg' name="romberg" label="Romberg"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="Positivo">Positivo</option>
                                    <option value="Negativo">Negativo</option>
                                    <option value="No se evalua">No se evalua</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='romberg_sensibilizado' name="romberg_sensibilizado"
                                    label="Romberg Sensibilizado" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="Positivo">Positivo</option>
                                    <option value="Negativo">Negativo</option>
                                    <option value="No se evalua">No se evalua</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='indices_de_baraby' name="indices_de_baraby"
                                    label="Indices de Baraby" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="Positivo">Positivo</option>
                                    <option value="Negativo">Negativo</option>
                                    <option value="No se evalua">No se evalua</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='unterberger' name="unterberger" label="Unterberger"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="Positivo">Positivo</option>
                                    <option value="Negativo">Negativo</option>
                                    <option value="No se evalua">No se evalua</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='babinsky_weil' name="babinsky_weil"
                                    label="Babinsky Weil" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="Positivo">Positivo</option>
                                    <option value="Negativo">Negativo</option>
                                    <option value="No se evalua">No se evalua</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='prueba_de_finger_nose' name="prueba_de_finger_nose"
                                    label="Prueba de Finger Nose" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="Positivo">Positivo</option>
                                    <option value="Negativo">Negativo</option>
                                    <option value="No se evalua">No se evalua</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='prueba_de_talon_rodilla' name="prueba_de_talon_rodilla"
                                    label="Prueba de talon rodilla" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="Positivo">Positivo</option>
                                    <option value="Negativo">Negativo</option>
                                    <option value="No se evalua">No se evalua</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='prueba_de_miller_fisher' name="prueba_de_miller_fisher"
                                    label="Prueba de Miller Fisher" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="Positivo">Positivo</option>
                                    <option value="Negativo">Negativo</option>
                                    <option value="No se evalua">No se evalua</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <x-adminlte-textarea wire:model='observaciones_pruebas_especiales'
                                    name="observaciones_pruebas_especiales" label="Observaciones"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-exclamation-triangle"></i>
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