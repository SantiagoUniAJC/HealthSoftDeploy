<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-success card-outline mt-3">
                <div class="card-header">
                    <h4 class="card-title">EVALUACIÓN MÉDICA OCUPACIONAL: <span class="text text-bold text-uppercase">
                            {{ $paciente->nombres . ' ' . $paciente->apellidos }} </span> </h4>
                </div>
                <div class="card-body">
                    <form wire:submit='guardarAntecedentesPersonales'>
                        <div class="row">
                            @if ($paciente->genero == 'Masculino')
                                <div hidden>
                                    <div class="col-md-12 bg-lightblue pt-3 rounded mb-3">
                                        <h5 class="text text-center text-white">Antecedentes Personales
                                            Ginecobstetricos:
                                        </h5>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <x-adminlte-input wire:model='gestas' name="gestas" label="Gestas"
                                            label-class="text-lightblue">
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text">
                                                    <i class="fas fa-heartbeat"></i>
                                                </div>
                                            </x-slot>
                                        </x-adminlte-input>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <x-adminlte-input wire:model='partos' name="partos" label="Partos"
                                            label-class="text-lightblue">
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text">
                                                    <i class="fas fa-heartbeat"></i>
                                                </div>
                                            </x-slot>
                                        </x-adminlte-input>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <x-adminlte-input wire:model='cesareas' name="cesareas" label="Cesareas"
                                            label-class="text-lightblue">
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text">
                                                    <i class="fas fa-heartbeat"></i>
                                                </div>
                                            </x-slot>
                                        </x-adminlte-input>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <x-adminlte-input wire:model='nacidos_vivos' name="nacidos_vivos" label="Vivos"
                                            label-class="text-lightblue">
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text">
                                                    <i class="fas fa-heartbeat"></i>
                                                </div>
                                            </x-slot>
                                        </x-adminlte-input>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <x-adminlte-input wire:model='abortos' name="abortos" label="Abortos"
                                            label-class="text-lightblue">
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text">
                                                    <i class="fas fa-heartbeat"></i>
                                                </div>
                                            </x-slot>
                                        </x-adminlte-input>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <x-adminlte-input wire:model='otros_antecedentes_ginecobstetricos'
                                            name="otros_antecedentes_ginecobstetricos" label="Otros antecendentes"
                                            label-class="text-lightblue">
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text">
                                                    <i class="fas fa-heartbeat"></i>
                                                </div>
                                            </x-slot>
                                        </x-adminlte-input>
                                    </div>
                                    <div class="col-md-2 col-sm-4">
                                        <x-adminlte-input wire:model='menarca' name="menarca" label="Menarca"
                                            label-class="text-lightblue">
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text">
                                                    <i class="fas fa-heartbeat"></i>
                                                </div>
                                            </x-slot>
                                        </x-adminlte-input>
                                    </div>
                                    <div class="col-md-2 col-sm-4">
                                        <x-adminlte-input wire:model='fecha_ultima_menstruacion' type="date"
                                            name="fecha_ultima_menstruacion" label="Fecha ultima menstruacion"
                                            label-class="text-lightblue">
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text">
                                                    <i class="fas fa-heartbeat"></i>
                                                </div>
                                            </x-slot>
                                        </x-adminlte-input>
                                    </div>
                                    <div class="col-md-2 col-sm-4">
                                        <x-adminlte-input wire:model='fecha_ultima_citologia' type="date"
                                            name="fecha_ultima_citologia" label="Fecha ultima citologia"
                                            label-class="text-lightblue">
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text">
                                                    <i class="fas fa-heartbeat"></i>
                                                </div>
                                            </x-slot>
                                        </x-adminlte-input>
                                    </div>
                                    <div class="col-md-2 col-sm-3">
                                        <x-adminlte-select wire:model='resultado_ultima_citologia'
                                            name="resultado_ultima_citologia" label="Resultado Citologia"
                                            label-class="text-lightblue">
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text">
                                                    <i class="fas fa-heartbeat"></i>
                                                </div>
                                            </x-slot>
                                            <option>Seleccione opción</option>
                                            <option value="No recuerda">No recuerda</option>
                                            <option value="Pendiente">Pendiente</option>
                                            <option value="Normal">Normal</option>
                                            <option value="Anormal">Anormal</option>
                                            <option value="No Aplica">No Aplica</option>
                                        </x-adminlte-select>
                                    </div>
                                    <div class="col-md-2 col-sm-3">
                                        <x-adminlte-select wire:model='ciclos' name="ciclos" label="Ciclos"
                                            label-class="text-lightblue">
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text">
                                                    <i class="fas fa-heartbeat"></i>
                                                </div>
                                            </x-slot>
                                            <option>Seleccione opción</option>
                                            <option value="Regular">Regular</option>
                                            <option value="Irregular">Irregular</option>
                                            <option value="No Aplica">No Aplica</option>
                                        </x-adminlte-select>
                                    </div>
                                    <div class="col-md-2 col-sm-3">
                                        <x-adminlte-select wire:model='planifica' name="planifica" label="Planifica"
                                            label-class="text-lightblue">
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text">
                                                    <i class="fas fa-heartbeat"></i>
                                                </div>
                                            </x-slot>
                                            <option>Seleccione opción</option>
                                            <option value="No">No</option>
                                            <option value="anticonsentivo oral">anticonsentivo oral</option>
                                            <option value="Dispositivo Intrauterino">Dispositivo Intrauterino</option>
                                            <option value="Quirúrgico">Quirúrgico</option>
                                            <option value="Implante Subdérmico">Implante Subdérmico</option>
                                            <option value="Otro">Otro</option>
                                        </x-adminlte-select>
                                    </div>
                                </div>
                            @else
                                <div class="row">
                                    <div class="col-md-12 bg-lightblue pt-3 rounded mb-3">
                                        <h5 class="text text-center text-white">Antecedentes Personales
                                            Ginecobstetricos:
                                        </h5>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <x-adminlte-input wire:model='gestas' name="gestas" label="Gestas"
                                            label-class="text-lightblue" type="number">
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text">
                                                    <i class="fas fa-heartbeat"></i>
                                                </div>
                                            </x-slot>
                                        </x-adminlte-input>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <x-adminlte-input wire:model='partos' name="partos" label="Partos"
                                            label-class="text-lightblue" type="number">
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text">
                                                    <i class="fas fa-heartbeat"></i>
                                                </div>
                                            </x-slot>
                                        </x-adminlte-input>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <x-adminlte-input wire:model='cesareas' name="cesareas" label="Cesareas"
                                            label-class="text-lightblue" type="number">
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text">
                                                    <i class="fas fa-heartbeat"></i>
                                                </div>
                                            </x-slot>
                                        </x-adminlte-input>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <x-adminlte-input wire:model='nacidos_vivos' name="nacidos_vivos"
                                            label="Vivos" label-class="text-lightblue" type="number">
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text">
                                                    <i class="fas fa-heartbeat"></i>
                                                </div>
                                            </x-slot>
                                        </x-adminlte-input>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <x-adminlte-input wire:model='abortos' name="abortos" label="Abortos"
                                            label-class="text-lightblue" type="number">
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text">
                                                    <i class="fas fa-heartbeat"></i>
                                                </div>
                                            </x-slot>
                                        </x-adminlte-input>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <x-adminlte-input wire:model='otros_antecedentes_ginecobstetricos'
                                            name="otros_antecedentes_ginecobstetricos" label="Otros antecendentes"
                                            label-class="text-lightblue">
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text">
                                                    <i class="fas fa-heartbeat"></i>
                                                </div>
                                            </x-slot>
                                        </x-adminlte-input>
                                    </div>
                                    <div class="col-md-2 col-sm-4">
                                        <x-adminlte-input wire:model='menarca' name="menarca" label="Menarca"
                                            label-class="text-lightblue">
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text">
                                                    <i class="fas fa-heartbeat"></i>
                                                </div>
                                            </x-slot>
                                        </x-adminlte-input>
                                    </div>
                                    <div class="col-md-2 col-sm-4">
                                        <x-adminlte-input wire:model='fecha_ultima_menstruacion' type="date"
                                            name="fecha_ultima_menstruacion" label="Fecha ultima menstruacion"
                                            label-class="text-lightblue">
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text">
                                                    <i class="fas fa-heartbeat"></i>
                                                </div>
                                            </x-slot>
                                        </x-adminlte-input>
                                    </div>
                                    <div class="col-md-2 col-sm-4">
                                        <x-adminlte-input wire:model='fecha_ultima_citologia' type="date"
                                            name="fecha_ultima_citologia" label="Fecha ultima citologia"
                                            label-class="text-lightblue">
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text">
                                                    <i class="fas fa-heartbeat"></i>
                                                </div>
                                            </x-slot>
                                        </x-adminlte-input>
                                    </div>
                                    <div class="col-md-2 col-sm-3">
                                        <x-adminlte-select wire:model='resultado_ultima_citologia'
                                            name="resultado_ultima_citologia" label="Resultado Citologia"
                                            label-class="text-lightblue">
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text">
                                                    <i class="fas fa-heartbeat"></i>
                                                </div>
                                            </x-slot>
                                            <option>Seleccione opción</option>
                                            <option value="No recuerda">No recuerda</option>
                                            <option value="Pendiente">Pendiente</option>
                                            <option value="Normal">Normal</option>
                                            <option value="Anormal">Anormal</option>
                                            <option value="No Aplica">No Aplica</option>
                                        </x-adminlte-select>
                                    </div>
                                    <div class="col-md-2 col-sm-3">
                                        <x-adminlte-select wire:model='ciclos' name="ciclos" label="Ciclos"
                                            label-class="text-lightblue">
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text">
                                                    <i class="fas fa-heartbeat"></i>
                                                </div>
                                            </x-slot>
                                            <option>Seleccione opción</option>
                                            <option value="Regular">Regular</option>
                                            <option value="Irregular">Irregular</option>
                                            <option value="No Aplica">No Aplica</option>
                                        </x-adminlte-select>
                                    </div>
                                    <div class="col-md-2 col-sm-3">
                                        <x-adminlte-select wire:model='planifica' name="planifica" label="Planifica"
                                            label-class="text-lightblue">
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text">
                                                    <i class="fas fa-heartbeat"></i>
                                                </div>
                                            </x-slot>
                                            <option>Seleccione opción</option>
                                            <option value="No">No</option>
                                            <option value="anticonsentivo oral">anticonsentivo oral</option>
                                            <option value="Dispositivo Intrauterino">Dispositivo Intrauterino</option>
                                            <option value="Inyectable">Inyectable</option>
                                            <option value="Quirurgico">Quirúrgico</option>                                           
                                            <option value="Implante Subdermico">Implante Subdérmico</option>
                                            <option value="Otro">Otro</option>
                                        </x-adminlte-select>
                                    </div>
                                </div>
                            @endif
                            <div class="col-md-12 bg-lightblue pt-3 rounded mb-3">
                                <h5 class="text text-center text-white">Antecedentes Personales Inmunológicos:
                                </h5>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <x-adminlte-select wire:model='hemoclasificacion_referido_por_usuario'
                                    name="hemoclasificación_referido_por_usuario" label="Grupo Sanguineo & Factor RH"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-heartbeat"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="Desconoce">Desconoce</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <x-adminlte-select wire:model='porta_carnet' name="porta_carnet" label="Porta Carnet"
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
                                <x-adminlte-select wire:model='antitetanica' name="antitetanica" label="Antitetanica"
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
                                <x-adminlte-input wire:model='antitetanica_fecha_ultima_dosis' type="date"
                                    name="antitetanica_fecha_ultima_dosis" label="Fecha ultima dosis"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-heartbeat"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='antitetanica_esquema_completo'
                                    name="antitetanica_esquema_completo" label="Esquema completo"
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
                                <x-adminlte-select wire:model='hepatitis_a' name="hepatitis_a" label="Hepatitis A"
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
                                <x-adminlte-input wire:model='hepatitis_a_fecha_ultima_dosis' type="date"
                                    name="hepatitis_a_fecha_ultima_dosis" label="Fecha ultima dosis"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-heartbeat"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='hepatitis_a_esquema_completo'
                                    name="hepatitis_a_esquema_completo" label="Esquema completo"
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
                                <x-adminlte-select wire:model='hepatitis_b' name="hepatitis_b" label="Hepatitis B"
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
                                <x-adminlte-input wire:model='hepatitis_b_fecha_ultima_dosis' type="date"
                                    name="hepatitis_b_fecha_ultima_dosis" label="Fecha ultima dosis"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-heartbeat"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='hepatitis_b_esquema_completo'
                                    name="hepatitis_b_esquema_completo" label="Esquema completo"
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
                                <x-adminlte-select wire:model='fiebre_amarilla' name="fiebre_amarilla"
                                    label="Fiebre Amarilla" label-class="text-lightblue">
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
                                <x-adminlte-input wire:model='fiebre_amarilla_fecha_ultima_dosis' type="date"
                                    name="fiebre_amarilla_fecha_ultima_dosis" label="Fecha ultima dosis"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-heartbeat"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='fiebre_amarilla_esquema_completo'
                                    name="fiebre_amarilla_esquema_completo" label="Esquema completo"
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
                                <x-adminlte-select wire:model='influenza' name="influenza" label="Influenza"
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
                                <x-adminlte-input wire:model='influenza_fecha_ultima_dosis' type="date"
                                    name="influenza_fecha_ultima_dosis" label="Fecha ultima dosis"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-heartbeat"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='influenza_esquema_completo'
                                    name="influenza_esquema_completo" label="Esquema completo"
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
                                <x-adminlte-select wire:model='varicela' name="varicela" label="Varicela"
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
                                <x-adminlte-input wire:model='varicela_fecha_ultima_dosis' type="date"
                                    name="varicela_fecha_ultima_dosis" label="Fecha ultima dosis"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-heartbeat"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='varicela_esquema_completo'
                                    name="varicela_esquema_completo" label="Esquema completo"
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
                                <x-adminlte-select wire:model='meningococo' name="meningococo" label="Meningococo"
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
                                <x-adminlte-input wire:model='meningococo_fecha_ultima_dosis' type="date"
                                    name="meningococo_fecha_ultima_dosis" label="Fecha ultima dosis"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-heartbeat"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='meningococo_esquema_completo'
                                    name="meningococo_esquema_completo" label="Esquema completo"
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
                                <x-adminlte-select wire:model='virus_papiloma_humano' name="virus_papiloma_humano"
                                    label="Virus Papiloma Humano" label-class="text-lightblue">
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
                                <x-adminlte-input wire:model='virus_papiloma_humano_fecha_ultima_dosis' type="date"
                                    name="virus_papiloma_humano_fecha_ultima_dosis" label="Fecha ultima dosis"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-heartbeat"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='virus_papiloma_humano_esquema_completo' name="virus_papiloma_humano_esquema_completo"
                                    label="Esquema completo" label-class="text-lightblue">
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
                                <x-adminlte-select wire:model='covid_19' name="covid_19"
                                    label=" SARS COV-2[covid-19]" label-class="text-lightblue">
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
                                <x-adminlte-input wire:model='covid_19_fecha_ultima_dosis' type="date"
                                    name="covid_19_fecha_ultima_dosis" label="Fecha ultima dosis"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-heartbeat"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='covid_19_esquema_completo'
                                    name="covid_19_esquema_completo" label="Esquema completo"
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
                            <div class="col-md-4 col-sm-4">
                                <x-adminlte-input wire:model='otros' name="otros" label="Otros"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-heartbeat"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-input wire:model='otros_fecha_ultima_dosis' type="date"
                                    name="otros_fecha_ultima_dosis" label="Fecha ultima dosis"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-heartbeat"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='otros_esquema_completo' name="otros_esquema_completo"
                                    label="Esquema completo" label-class="text-lightblue">
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
