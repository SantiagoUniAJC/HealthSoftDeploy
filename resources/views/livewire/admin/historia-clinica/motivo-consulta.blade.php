<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-success card-outline mt-3">
                <div class="card-header">
                    <h4 class="card-title">EVALUACIÓN MÉDICA OCUPACIONAL: <span class="text text-bold text-uppercase">
                            {{ $paciente->nombres . ' ' . $paciente->apellidos }} </span> </h4>
                </div>
                <div class="card-body">
                    <form wire:submit='guardarMotivoConsulta'>
                        <div class="row">
                            <div class="col-md-12 bg-lightblue pt-3 rounded mb-3">
                                <h5 class="text text-center text-white">Motivo de la Consulta: </h5>
                            </div>
                            <div class="col-md-4">
                                <x-adminlte-select wire:model='motivo_consulta' name="motivo_consulta"
                                    label="Motivo de la consulta" label-class="text-lightblue"
                                    data-placeholder="Select an option...">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-stethoscope text-lightblue"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione una opción</option>
                                    <option value="Evaluacion Medica Ocupacional">Evaluación Médica Ocupacional
                                    </option>
                                    <option value="Control por enfermedad laboral calificada">Control por
                                        enfermedad
                                        laboral calificada</option>
                                    <option value="Control por secuela(s) de accidente de trabajo">Control por
                                        secuela(s) de accidente de trabajo</option>
                                    <option value="Control de restricciones medicas">Control de restricciones
                                        médicas
                                    </option>
                                    <option value="Control por enfermedad de origen comun">Control por enfermedad
                                        de
                                        origen común</option>
                                    <option value="Control por enfermedad laboral en estudio">Control por
                                        enfermedad
                                        laboral en estudio</option>
                                    <option value="Control por accidente comun">Control por accidente común
                                    </option>
                                    <option value="Control de recomendaciones medicas">Control de recomendaciones
                                        médicas</option>
                                    <option value="Otro">Otro</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-8">
                                <x-adminlte-textarea wire:model='descripcion_consulta' name="descripcion_consulta"
                                    label="Descripción de la consulta" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-calendar-alt text-lightblue"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-textarea>
                            </div>
                            {{-- Estado de Salud: --}}
                            <div class="col-md-12 bg-lightblue pt-3 rounded mb-3">
                                <h5 class="text text-center text-white">Estado de Salud: </h5>
                            </div>

                            <div class="col-md-2 col-sm-6">
                                <x-adminlte-select wire:model='estado_actual_de_salud' name="estado_actual_de_salud"
                                    label="Estado actual de salud" label-class="text-lightblue"
                                    data-placeholder="Select an option...">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-heartbeat text-lightblue"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione una opción</option>
                                    <option value="Bueno">Bueno</option>
                                    <option value="Regular">Regular</option>
                                    <option value="Malo">Malo</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <x-adminlte-select wire:model='restricciones_medicas_vigentes'
                                    name="restricciones_medicas_vigentes" label="Restricciones medicas vigentes"
                                    label-class="text-lightblue" data-placeholder="Select an option...">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-ban"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione una opción</option>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-8">
                                <x-adminlte-textarea wire:model='descripcion_estado_actual_de_salud'
                                    name="descripcion_estado_actual_de_salud" label="Descripción estado de salud"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-notes-medical text-lightblue"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-textarea>
                            </div>
                            {{-- Antecedentes Ocupacionales: --}}
                            <div class="col-md-12 bg-lightblue pt-3 rounded mb-3">
                                <h5 class="text text-center text-white">Antecedentes Ocupacionales: </h5>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-input wire:model='empresa_anterior' name="empresa_anterior"
                                    label="Empresa Anterior" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-building text-lightblue"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-input wire:model='cargo_anterior' name="cargo_anterior"
                                    label="Cargo Anterior" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-briefcase text-lightblue"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-input wire:model='tiempo_laborado' name="tiempo_laborado"
                                    label="Tiempo laborado (Años)" label-class="text-lightblue" type="number" min="0" max="100">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-calendar-alt text-lightblue"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='factores_riesgo' name="factores_riesgo"
                                    label="Factores de riesgo" label-class="text-lightblue"
                                    data-placeholder="Selecciones una opción ">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-exclamation-triangle text-lightblue"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione una opción</option>
                                    <option value="Fisicos">Fisicos</option>
                                    <option value="Quimicos">Quimicos</option>
                                    <option value="Biologicos">Biologicos</option>
                                    <option value="Ergonomicos">Ergonomicos</option>
                                    <option value="Psicosociales">Psicosociales</option>
                                    <option value="Mecanicos">Mecanicos</option>
                                    <option value="Otro">Otro</option>
                                    <option value="No aplica">No Aplica</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='uso_epp' name="uso_epp" label="Uso de EPP"
                                    label-class="text-lightblue" data-placeholder="Select an option...">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-hard-hat text-lightblue"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione una opción</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                    <option value="No aplica">No Aplica</option>
                                </x-adminlte-select>
                            </div>

                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-input wire:model='motivo_retiro' name="motivo_retiro"
                                    label="Motivo Retiro" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-calendar-alt text-lightblue"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-input wire:model='fecha_retiro' name="fecha_retiro" label="Fecha Retiro"
                                    type="date" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-calendar-alt text-lightblue"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='accidentes_laborales' name="accidentes_laborales"
                                    label="Accidentes Laborales" label-class="text-lightblue"
                                    data-placeholder="Select an option...">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-exclamation-triangle text-lightblue"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione una opción</option>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                    <option value="No aplica">No aplica</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='accidentes_laborales_empresa_anterior'
                                    name="accidentes_laborales_empresa_anterior"
                                    label="Accidentes Laborales Empresa Anterior" label-class="text-lightblue"
                                    data-placeholder="Select an option...">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-exclamation-triangle text-lightblue"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione una opción</option>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                    <option value="No aplica">No aplica</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='accidentes_laborales_empresa_actual'
                                    name="accidentes_laborales_empresa_actual"
                                    label="Accidentes Laborales Empresa Actual" label-class="text-lightblue"
                                    data-placeholder="Select an option...">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-exclamation-triangle text-lightblue"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione una opción</option>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                    <option value="No aplica">No aplica</option>
                                </x-adminlte-select>
                            </div>

                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-input wire:model='fecha_accidente_laboral' name="fecha_accidente_laboral"
                                    label="Fecha accidente laboral" type="date" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-calendar-alt text-lightblue"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-input wire:model='empresa_accidente_laboral'
                                    name="empresa_accidente_laboral" label="Empresa Accidente Laboral"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-calendar-alt text-lightblue"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <x-adminlte-textarea wire:model='descripcion_accidente_laboral'
                                    name="descripcion_accidente_laboral" label="Descripcion accidente laboral"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-calendar-alt text-lightblue"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-textarea>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <x-adminlte-select wire:model='fue_calificada_e_indemnizada'
                                    name="fue_calificada_e_indemnizada" label="Fue calificada y/o indemnizada"
                                    label-class="text-lightblue" data-placeholder="Select an option...">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione una opción</option>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                    <option value="No aplica">No aplica</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <x-adminlte-select wire:model='secuelas' name="secuelas" label="Secuelas"
                                    label-class="text-lightblue" data-placeholder="Select an option...">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-notes-medical text-lightblue"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione una opción</option>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                    <option value="No aplica">No aplica</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <x-adminlte-textarea wire:model='descripcion_secuelas' name="descripcion_secuelas"
                                    label="Descripcion Secuelas" label-class="text-lightblue"
                                    data-placeholder="Select an option...">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-notes-medical text-lightblue"></i>
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