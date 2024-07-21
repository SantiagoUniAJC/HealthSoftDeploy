<div>
    <div class="card card-success card-outline mt-3">
        <div class="card-header">
            <h4 class="card-title">EVALUACIÓN MÉDICA OCUPACIONAL: <span class="text text-bold text-uppercase">
                    {{ $paciente->nombres . ' ' . $paciente->apellidos }} </span> </h4>
        </div>
        <div class="card-body">
            <div class="bg-lightblue pt-3 rounded">
                <h5 class="text text-center text-white">Información Orden de Servicio:
                </h5>
                <hr>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <x-adminlte-input wire:model='orden_numero' name="orden_numero" label="Orden de Servicio"
                        label-class="text-lightblue" readonly>
                        <x-slot name="prependSlot">
                            <div class="input-group-text">
                                <i class="fas fa-file-invoice text-lightblue"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input>
                </div>

                <div class="col-md-3 col-sm-4">
                    <x-adminlte-input wire:model='tipo_examen' name="tipo_examen" label="Tipo de Examen"
                        label-class="text-lightblue" readonly>
                        <x-slot name="prependSlot">
                            <div class="input-group-text">
                                <i class="fas fa-list text-lightblue"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input>
                </div>

                <div class="col-md-3 col-sm-4">
                    <x-adminlte-input wire:model='enfasis' name="enfasis" label="Enfasis" label-class="text-lightblue"
                        data-placeholder="Select an option..." readonly>
                        <x-slot name="prependSlot">
                            <div class="input-group-text">
                                <i class="fas fa-list text-lightblue"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input>
                </div>

                <div class="col-md-3 col-sm-4">
                    <x-adminlte-input wire:model='cliente_solicita' name="cliente_solicita" label="Cliente Remite"
                        label-class="text-lightblue" readonly>
                        <x-slot name="prependSlot">
                            <div class="input-group-text">
                                <i class="fas fa-user-tie text-lightblue"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input>
                </div>

                <div class="col-md-3 col-sm-4">
                    <x-adminlte-input wire:model='cargo_a_desempeñar' name="cargo_a_desempeñar"
                        label="Cargo a Desempeñar" label-class="text-lightblue" readonly>
                        <x-slot name="prependSlot">
                            <div class="input-group-text">
                                <i class="fas fa-user-tie text-lightblue"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input>
                </div>
                <div class="col-md-3 col-sm-4">
                    <x-adminlte-input wire:model='ciudad_residencia' name="ciudad_residencia" label="Ciudad Residencia"
                        label-class="text-lightblue" readonly>
                        <x-slot name="prependSlot">
                            <div class="input-group-text">
                                <i class="fas fa-map-marker-alt text-lightblue"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input>
                </div>

                <div class="col-md-12 bg-lightblue pt-3 rounded mb-3">
                    <h5 class="text text-center text-white">Datos personales: </h5>
                </div>
                <div class="col-md-3 col-sm-4">
                    <x-adminlte-input wire:model='nombres' name="nombres" label="Nombres" label-class="text-lightblue"
                        readonly>
                        <x-slot name="prependSlot">
                            <div class="input-group-text">
                                <i class="fas fa-user-tie text-lightblue"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input>
                </div>
                <div class="col-md-3 col-sm-4">
                    <x-adminlte-input wire:model='apellidos' name="apellidos" label="Apellidos"
                        label-class="text-lightblue" readonly>
                        <x-slot name="prependSlot">
                            <div class="input-group-text">
                                <i class="fas fa-user-tie text-lightblue"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input>
                </div>
                <div class="col-md-3 col-sm-4">
                    <x-adminlte-input wire:model='tipo_identificacion' name="tipo_identificacion"
                        label="Tipo de Documento" label-class="text-lightblue" readonly>
                        <x-slot name="prependSlot">
                            <div class="input-group-text">
                                <i class="fas fa-id-card text-lightblue"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input>
                </div>
                <div class="col-md-3 col-sm-4">
                    <x-adminlte-input wire:model='numero_identificacion' name="numero_identificacion"
                        label="Número de Documento" label-class="text-lightblue" readonly>
                        <x-slot name="prependSlot">
                            <div class="input-group-text">
                                <i class="fas fa-hashtag text-lightblue"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input>
                </div>
                <div class="col-md-3 col-sm-4">
                    <x-adminlte-input wire:model='genero' name="genero" label="Genero" label-class="text-lightblue"
                        readonly>
                        <x-slot name="prependSlot">
                            <div class="input-group-text">
                                <i class="fas fa-venus-mars text-lightblue"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input>
                </div>
                <div class="col-md-3 col-sm-4">
                    <x-adminlte-input wire:model='fecha_de_nacimiento' name="fecha_de_nacimiento"
                        label="Fecha de Nacimiento" label-class="text-lightblue" readonly>
                        <x-slot name="prependSlot">
                            <div class="input-group-text">
                                <i class="fas fa-calendar-alt text-lightblue"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input>
                </div>
                {{-- Boton Guardar --}}

                <div class="col-md-12 text-center mt-4">
                    <button wire:click="nextPage({{ $paciente->id }}, {{ $cita->id }})" wire:loading.attr="disabled" class="btn btn-outline-success">
                        <span wire:loading.remove>Siguiente</span>
                        <span wire:loading><i class="fas fa-spinner fa-spin"></i></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
