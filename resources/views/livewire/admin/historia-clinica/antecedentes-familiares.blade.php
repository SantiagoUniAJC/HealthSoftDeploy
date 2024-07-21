<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-success card-outline mt-3">
                <div class="card-header">
                    <h4 class="card-title">EVALUACIÓN MÉDICA OCUPACIONAL: <span class="text text-bold text-uppercase">
                            {{ $paciente->nombres . ' ' . $paciente->apellidos }} </span> </h4>
                </div>
                <div class="card-body">
                    <div class="col-md-12 bg-lightblue pt-3 rounded mb-3">
                        <h5 class="text text-center text-white">Antecendentes Familiares: </h5>
                    </div>

                    <form wire:submit='guardarAntecFamiliarPersonal'>
                        <div class="row">
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-select wire:model='diabetes' name="diabetes" label="Diabetes"
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
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='hipertension' name="hipertension"
                                    label="Hipertension Arterial" label-class="text-lightblue">
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
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='accidente_cardiovascular' name="accidente_cardiovascular"
                                    label="Accidente Cardiovascular" label-class="text-lightblue">
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
                                <x-adminlte-select wire:model='cancer' name="cancer" label="Cancer"
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
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='epilepsia' name="epilepsia" label="Epilepsia"
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
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='enfermedad_mental' name="enfermedad_mental"
                                    label="Enfermedad Mental" label-class="text-lightblue">
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
                                <x-adminlte-select wire:model='alergias' name="alergias" label="Alergias"
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
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='enfermedad_respiratoria' name="enfermedad_respiratoria"
                                    label="Enfermedad Respiratoria" label-class="text-lightblue">
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

                            <div class="col-md-4 col-sm-4">
                                <x-adminlte-input wire:model='otros_antedecentes_familiares'
                                    name="otros_antedecentes_familiares" label="Otros Antedecentes"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-heartbeat"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <x-adminlte-textarea wire:model='antedecentes_familiares_observaciones'
                                    name="antedecentes_familiares_observaciones" label="Observaciones"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-heartbeat"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-textarea>
                            </div>

                            {{-- Antecedentes Personales --}}
                            <div class="col-md-12 bg-lightblue pt-3 rounded mb-3">
                                <h5 class="text text-center text-white">Antecedentes Personales: </h5>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-select wire:model='cefalea' name="cefalea" label="Cefalea"
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
                                <x-adminlte-select wire:model='diabetes_personal' name="diabetes_personal"
                                    label="Diabetes" label-class="text-lightblue">
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
                                <x-adminlte-select wire:model='epilepsia_personal' name="epilepsia_personal"
                                    label="Epilepsia" label-class="text-lightblue">
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
                                <x-adminlte-select wire:model='enfermedad_visual' name="enfermedad_visual"
                                    label="Enfermedad Visual" label-class="text-lightblue">
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
                                <x-adminlte-select wire:model='hepatitis' name="hepatitis" label="Hepatitis"
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
                                <x-adminlte-select wire:model='cancer_personal' name="cancer_personal" label="Cancer"
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
                                <x-adminlte-select wire:model='hernias' name="hernias" label="Hernias"
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
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='enfermedad_oidos' name="enfermedad_oidos"
                                    label="Enfermedad Oidos" label-class="text-lightblue">
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

                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='varices' name="varices" label="Varices"
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
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='enfermedad_respiratoria_personal' name="enfermedad_respiratoria_personal"
                                    label="Enfermedad Respiratoria" label-class="text-lightblue">
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

                            <div class="col-md-2 col-sm-6">
                                <x-adminlte-select wire:model='enfermedad_gastrointestinal'
                                    name="enfermedad_gastrointestinal" label="Enfermedad Gastrointestinal"
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
                            <div class="col-md-2 col-sm-6">
                                <x-adminlte-select wire:model='enfermedad_cardiaca' name="enfermedad_cardiaca"
                                    label="Enfermedad Cardiaca" label-class="text-lightblue">
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
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='dermatitis' name="dermatitis" label="Dermatitis"
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

                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='enfermedad_renal' name="enfermedad_renal"
                                    label="Enfermedad Renal" label-class="text-lightblue">
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
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='hipertension_personal' name="hipertension_personal"
                                    label="Hipertension Arterial" label-class="text-lightblue">
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
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='alergias_personal' name="alergias_personal"
                                    label="Alergias" label-class="text-lightblue">
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
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='enfermedad_tiroides' name="enfermedad_tiroides"
                                    label="Enfermedad Tiroides" label-class="text-lightblue">
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
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='enfermedad_osteomuscular'
                                    name="enfermedad_osteomuscular" label="Enfermedad Osteomuscular"
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
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='enfermedad_psiquiatrica' name="enfermedad_psiquiatrica"
                                    label="Enfermedad Mental" label-class="text-lightblue">
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
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='traumaticos' name="traumaticos" label="Traumáticos"
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
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='cirugias' name="cirugias" label="Cirugías"
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
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='covid_19_personal' name="covid_19" label="Covid-19"
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
                            <div class="col-md-4 col-sm-8">
                                <x-adminlte-input wire:model='otros_enfermedades_personales'
                                    name="otros_enfermedades_personales" label="Otros Enfermedades Personales"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-heartbeat"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <x-adminlte-textarea wire:model='antedecentes_personales_observaciones'
                                    name="antedecentes_personales_observaciones" label="Observaciones Personales"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-heartbeat"></i>
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