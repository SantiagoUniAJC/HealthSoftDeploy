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
                                    <i class="fas fa-lg fa-tasks"></i> Historia Clínica 6 - 12
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="col-md-12 bg-lightblue pt-3 rounded mb-3">
                        <h5 class="text text-center text-white pb-2">Revisión por Sistemas (Síntomas): </h5>
                    </div>

                    <form wire:submit='guardarRevisionPorSistemas'>
                        <div class="row">
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-select wire:model='visual' name="visual" label="Visual"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-eye"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-select wire:model='auditivo' name="auditivo" label="Auditivo"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-volume-up"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-select wire:model='cardiaco' name="cardiaco" label="Cardiaco"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-heartbeat"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-select wire:model='respiratorio' name="respiratorio" label="Respiratorio"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-lungs"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-select wire:model='gastrointestinal' name="gastrointestinal"
                                    label="Gastrointestinal" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-bacteria"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-select wire:model='genitourinario' name="genitourinario"
                                    label="Genitourinario" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-venus-mars"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-select wire:model='endocrino' name="endocrino" label="Endocrino"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-flask"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-select wire:model='osteomuscular' name="osteomuscular" label="Osteomuscular"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-bone"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-select wire:model='psicologico' name="psicologico" label="Psicologico"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-brain"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-select wire:model='nervioso' name="nervioso" label="Nervioso"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-brain"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-select wire:model='vascular' name="vascular" label="Vascular"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-heartbeat"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-select wire:model='piel_faneras' name="piel_faneras" label="Piel faneras"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-hand-paper"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <x-adminlte-textarea wire:model='observaciones_revision_sistemas'
                                    name="observaciones_revision_sistemas" label="Observaciones"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-search"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-textarea>
                            </div>
                            {{-- Trabajo en alturas --}}
                            <div class="col-md-12 bg-lightblue pt-3 rounded mb-3">
                                <h5 class="text-center  text-white">Cuestionario Trabajos de Alto Riesgo: </h5>
                            </div>

                            <div class="col-md-3 col-sm-3">
                                <x-adminlte-select wire:model='fobia_a_alturas' name="fobia_a_alturas"
                                    label="Fobia a alturas?" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-3 col-sm-5">
                                <x-adminlte-select wire:model='alteraciones_de_coordinacion'
                                    name="alteraciones_de_coordinacion" label="Alteraciones de Coordinación?"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <x-adminlte-select wire:model='enfermedades_respiratorias'
                                    name="enfermedades_respiratorias" label="Enfermedades respiratorias?"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <x-adminlte-select wire:model='enfermedades_cardiovasculares'
                                    name="enfermedades_cardiovasculares" label="Enfermedades Cardiovasculares?"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </x-adminlte-select>
                            </div>

                            <div class="col-md-3 col-sm-3">
                                <x-adminlte-select wire:model='consumo_actual_de_medicamentos'
                                    name="consumo_actual_de_medicamentos" label="Consumo Actual de Medicamentos?"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <x-adminlte-textarea wire:model='cuales_medicamentos'
                                    name="cuales_medicamentos" label="Cuales Medicamentos?"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-textarea>
                            </div>

                            <div class="col-md-3 col-sm-3">
                                <x-adminlte-select wire:model='tolera_uso_de_proteccion_respiratoria'
                                    name="tolera_uso_de_proteccion_respiratoria"
                                    label="Tolera uso de protección respiratoria?" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <x-adminlte-select wire:model='enfermedades_mentales_o_neurologicas'
                                    name="enfermedades_mentales_o_neurologicas"
                                    label="Enfermedades mentales o neurológicas?" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <x-adminlte-textarea wire:model='cuales_enfermedades_mentales'
                                    name="cuales_enfermedades_mentales" label="Cuales Enfermedades?"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-textarea>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <x-adminlte-select wire:model='consumo_de_bebidas_alcoholicas_con_alta_frecuencia'
                                    name="consumo_de_bebidas_alcoholicas_con_alta_frecuencia"
                                    label="Consumo de bebidas alcohólicas frecuente?" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <x-adminlte-select wire:model='alteraciones_de_equilibrio'
                                    name="alteraciones_de_equilibrio" label="Alteraciones de Equilibrio?"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <x-adminlte-select wire:model='claustrofobia' name="claustrofobia"
                                    label="Claustrofobia?" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <x-adminlte-select wire:model='enfermedades_metabolicas'
                                    name="enfermedades_metabolicas" label="Enfermedades Metabólicas?"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <x-adminlte-select wire:model='enfermedades_coagulacion_sanguínea'
                                    name="enfermedades_coagulacion_sanguínea"
                                    label="Enfermedades Coagulación Sanguínea?" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <x-adminlte-select wire:model='consumo_sustancias_psicoactivas'
                                    name="consumo_sustancias_psicoactivas" label="Consumo Sustancias Psicoactivas?"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <x-adminlte-textarea wire:model='cuales_sustancias'
                                    name="cuales_sustancias" label="Cuales Sustancias?"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-textarea>
                            </div>
                            <div class="col-md-12 col-sm-6">
                                <x-adminlte-textarea wire:model='obs_cuestionario_trabajos_alto_riesgo'
                                    name="obs_cuestionario_trabajos_alto_riesgo" label="Observaciones"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-search"></i>
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
                <div class="card-footer">
                </div>
            </div>
        </div>
    </div>
</div>
