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
                                    <i class="fas fa-lg fa-tasks"></i> Historia Clínica 7 - 12
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form wire:submit='guardarExamenFisico'>
                        <div class="row">
                            <div class="col-md-12 bg-lightblue pt-3 rounded mb-3">
                                <h5 class="text text-center text-white">EXAMEN FÍSICO: </h5>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <x-adminlte-input wire:model='peso' name="peso" label="Peso"
                                    label-class="text-lightblue" type="number" min="0" max="300">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-weight-hanging"></i>
                                        </div>
                                    </x-slot>
                                    <x-slot name="appendSlot">
                                        <div class="input-group-text">Kilos</div>
                                    </x-slot>
                                    <x-slot name="">

                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <x-adminlte-input wire:model='talla' name="talla" label="Talla"
                                    label-class="text-lightblue" type="number" min="0" max="300">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-ruler"></i>
                                        </div>
                                    </x-slot>
                                    <x-slot name="appendSlot">
                                        <div class="input-group-text">Centimetros</div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='dominancia' name="dominancia" label="Dominancia"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-balance-scale"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="Derecha">Derecha</option>
                                    <option value="Izquierda">Izquierda</option>
                                    <option value="Ambidiestro">Ambidiestro</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='imc' name="imc" label="Indice Masa Corporal"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-balance-scale"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="Bajo Peso">Bajo Peso</option>
                                    <option value="Peso Normal">Peso Normal</option>
                                    <option value="Sobrepeso">Sobrepeso</option>
                                    <option value="Obesidad grado I">Obesidad grado I</option>
                                    <option value="Obesidad grado II">Obesidad grado III</option>
                                    <option value="Obesidad grado III">Obesidad grado III</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-input wire:model='perimetro_abdominal' name="perimetro_abdominal"
                                    label="Perimetro Abdominal" label-class="text-lightblue" type="number" min="0" max="300">
                                    <x-slot name="prependSlot" >
                                        <div class="input-group-text">
                                            <i class="fas fa-ruler"></i>
                                        </div>
                                    </x-slot>
                                    <x-slot name="appendSlot">
                                        <div class="input-group-text">Centimetros</div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='riesgo_perimetro_abdominal'
                                    name="riesgo_perimetro_abdominal" label="Riesgo Perimetro Abdominal"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-ruler"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="riesgo bajo">Riesgo bajo</option>
                                    <option value="riesgo moderado">Riesgo moderado</option>
                                    <option value="riesgo alto">Riesgo alto</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-input wire:model='tension_arterial' name="tension_arterial"
                                    label="Tension Arterial" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-heartbeat"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='riegos_tension_arterial' name="riegos_tension_arterial"
                                    label="Riesgo Tension Arterial" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Elevada">Elevada</option>
                                    <option value="Hipertensión Grado 1">Hipertensión Grado 1</option>
                                    <option value="Hipertensión Grado 2">Hipertensión Grado 2</option>
                                    <option value="Crisis Hipertensiva">Crisis Hipertensiva</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-input wire:model='frecuencia_respiratoria' name="frecuencia_respiratoria"
                                    label="Frecuencia Respiratoria" label-class="text-lightblue" type="number" min="0" max="300">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-lungs"></i>
                                        </div>
                                    </x-slot>
                                    <x-slot name="appendSlot">
                                        <div class="input-group-text">ppm</div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-input wire:model='frecuencia_cardiaca' name="frecuencia_cardiaca"
                                    label="Frecuencia Cardiaca" label-class="text-lightblue" type="number" min="0" max="300">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-heartbeat"></i>
                                        </div>
                                    </x-slot>
                                    <x-slot name="appendSlot">
                                        <div class="input-group-text">ppm</div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-input wire:model='temperatura' name="temperatura" label="Temperatura"
                                    label-class="text-lightblue" type="number" min="0" max="300">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-thermometer-half"></i>
                                        </div>
                                    </x-slot>
                                    <x-slot name="appendSlot">
                                        <div class="input-group-text">Centigrados</div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-12 col-sm-8">
                                <x-adminlte-textarea wire:model='aspecto_general' name="aspecto_general"
                                    label="Aspecto General" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-textarea>
                            </div>
                            {{-- Agudeza Visual --}}
                            <div class="text-center col-md-12">
                                <div class="col-md-12 bg-lightblue pt-2 rounded mb-3">
                                    <h5 class="text text-center text-white p-1">Agudeza Visual: </h5>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <x-adminlte-select wire:model='agudeza_visual_TCL' name="agudeza_visual_TCL"
                                    label="Tomada Corrección Lejana" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                    <option value="no se evalua">No se evalua</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <x-adminlte-select wire:model='agudeza_visual_TSP' name="agudeza_visual_TSP"
                                    label="Tomada Corrección Próxima" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                    <option value="no se evalua">No se evalua</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-3 col-sm-2">
                                <x-adminlte-input wire:model='agudeza_visual_ojo_derecho'
                                    name="agudeza_visual_ojo_derecho" label="Ojo Derecho"
                                    label-class="text-lightblue" type="number">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-eye"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-3 col-sm-2">
                                <x-adminlte-input wire:model='agudeza_visual_ojo_izquierdo'
                                    name="agudeza_visual_ojo_izquierdo" label="Ojo Izquierdo"
                                    label-class="text-lightblue" type="number">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-eye"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="text-center col-md-12">
                                <hr>
                                <h5 class="text  text-lightblue text-bold">Fisico</h5>
                                <hr>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-select wire:model='cabeza' name="cabeza" label="Cabeza"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                    <option value="no se evalua">No se evalua</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-input wire:model='observaciones_cabeza' name="observaciones_cabeza"
                                    label="Observación Cabeza" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-select wire:model='ojos' name="ojos" label="Ojos"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-eye"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                    <option value="no se evalua">No se evalua</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-input wire:model='observaciones_ojos' name="observaciones_ojos"
                                    label="Observación Ojos" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-eye"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-select wire:model='nariz' name="nariz" label="Nariz"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-mask"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                    <option value="no se evalua">No se evalua</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-input wire:model='observaciones_nariz' name="observaciones_nariz"
                                    label="Observación Nariz" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-mask"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-select wire:model='oidos' name="oidos" label="Oidos"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-user"></i>

                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                    <option value="no se evalua">No se evalua</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-input wire:model='observaciones_oidos' name="observaciones_oidos"
                                    label="Observación Oidos" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-user"></i>

                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-select wire:model='boca' name="boca" label="Boca"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                    <option value="no se evalua">No se evalua</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-input wire:model='observaciones_boca' name="observaciones_boca"
                                    label="Observación Boca" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-select wire:model='faringe' name="faringe" label="Faringe"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                    <option value="no se evalua">No se evalua</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-input wire:model='observaciones_faringe' name="observaciones_faringe"
                                    label="Observación Faringe" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-select wire:model='cuello' name="cuello" label="Cuello"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                    <option value="no se evalua">No se evalua</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-input wire:model='observaciones_cuello' name="observaciones_cuello"
                                    label="Observación Cuello" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-select wire:model='torax' name="torax" label="Torax"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                    <option value="no se evalua">No se evalua</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-input wire:model='observaciones_torax' name="observaciones_torax"
                                    label="Observación Torax" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-select wire:model='corazon' name="corazon" label="Corazon"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                    <option value="no se evalua">No se evalua</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-input wire:model='observaciones_corazon' name="observaciones_corazon"
                                    label="Observación Corazon" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-select wire:model='pulmones' name="pulmones" label="Pulmones"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-lungs"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                    <option value="no se evalua">No se evalua</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-input wire:model='observaciones_pulmones' name="observaciones_pulmones"
                                    label="Observación Pulmones" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-lungs"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-select wire:model='abdomen' name="abdomen" label="Abdomen"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                    <option value="no se evalua">No se evalua</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-input wire:model='observaciones_abdomen' name="observaciones_abdomen"
                                    label="Observación Abdomen" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-select wire:model='genitales_externos' name="genitales_externos"
                                    label="Genitales Externos" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                    <option value="no se evalua">No se evalua</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-input wire:model='observaciones_genitales_externos'
                                    name="observaciones_genitales_externos" label="Observación Genitales Externos"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-select wire:model='vascular' name="vascular" label="Vascular"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                    <option value="no se evalua">No se evalua</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-input wire:model='observaciones_vascular' name="observaciones_vascular"
                                    label="Observaciones Vascular" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-select wire:model='piel_y_faneras' name="piel_y_faneras"
                                    label="Piel y faneras" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                    <option value="no se evalua">No se evalua</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-input wire:model='observaciones_piel_y_faneras'
                                    name="observaciones_piel_y_faneras" label="Observacion Piel & Faneras"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <x-adminlte-select wire:model='neurologico' name="neurologico" label="neurologico"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                    <option value="no se evalua">No se evalua</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-9">
                                <x-adminlte-input wire:model='observaciones_neurologico'
                                    name="observaciones_neurologico" label="Observaciones Neurologico"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-brain"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
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
