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
                                    <i class="fas fa-lg fa-tasks"></i> Historia Clínica 1 - 12
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="col-md-12 bg-lightblue pt-3 rounded mb-3">
                        <h5 class="text text-center text-white pb-2">Información Laboral Actual: </h5>
                    </div>

                    <form wire:submit.live='guardarInfoLaboralActual' id="formularioPrincipal">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <x-adminlte-input wire:model='cargo_a_desempeñar' name="cargo_a_desempeñar"
                                    label="Cargo a desempeñar" label-class="text-lightblue" readonly>
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-briefcase text-lightblue"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <x-adminlte-input wire:model='area_de_trabajo' name="area_de_trabajo"
                                    label="Area de trabajo" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-briefcase text-lightblue"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <x-adminlte-textarea wire:model='descripcion_del_cargo' name="descripcion_del_cargo"
                                    label="Descripción del Cargo" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-briefcase text-lightblue"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-textarea>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='turno_de_trabajo' name="turno_de_trabajo"
                                    label="Turno de Trabajo" label-class="text-lightblue"
                                    data-placeholder="Select an option...">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-clock text-lightblue"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione una opción</option>
                                    <option value="Desconoce">Desconoce</option>
                                    <option value="Diurno">Diurno</option>
                                    <option value="Nocturno">Nocturno</option>
                                    <option value="Rotativo">Rotativo</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-select wire:model='rango_salarial' name="rango_salarial"
                                    label="Rango salarial" label-class="text-lightblue"
                                    data-placeholder="Select an option...">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-money-bill text-lightblue"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione una opción</option>
                                    <option value="Desconoce">Desconoce</option>
                                    <option value="Menor a 2 SMMLV">Menor a 2 SMMLV</option>
                                    <option value="Entre 2 y 5 SMMLV">Entre 2 & 5 SMMLV</option>
                                    <option value="Mayor a 5 SMMLV">Mayor a 5 SMMLV</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <x-adminlte-input wire:model='fecha_ingreso' name="fecha_ingreso" type="date"
                                    label="Fecha ingreso empresa" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-calendar-alt text-lightblue"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <label for="antiguedad_empresa" class="text-lightblue">Antigüedad Empresa</label>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <x-adminlte-input type="number" name="antiguedad_empresa_anios"
                                            id="antiguedad_empresa_anios" class="form-control mb-2" readonly>
                                            <x-slot name="appendSlot">
                                                <div class="form-control">
                                                    <span>Años</span>
                                                </div>
                                            </x-slot>
                                        </x-adminlte-input>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <x-adminlte-input type="number" name="antiguedad_empresa_meses"
                                            id="antiguedad_empresa_meses" class="form-control mb-2" readonly>
                                            <x-slot name="appendSlot">
                                                <div class="form-control">
                                                    <span>Meses</span>
                                                </div>
                                            </x-slot>
                                        </x-adminlte-input>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <label for="antiguedad_empresa" class="text-lightblue">Antigüedad Cargo</label>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <x-adminlte-input type="number" name="antiguedad_cargo_anios"
                                            id="antiguedad_cargo_anios" class="form-control mb-2" readonly>
                                            <x-slot name="appendSlot">
                                                <div class="form-control">
                                                    <span>Años</span>
                                                </div>
                                            </x-slot>
                                        </x-adminlte-input>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <x-adminlte-input type="number" name="antiguedad_cargo_meses"
                                            id="antiguedad_cargo_meses" class="form-control mb-2" readonly>
                                            <x-slot name="appendSlot">
                                                <div class="form-control">
                                                    <span>Meses</span>
                                                </div>
                                            </x-slot>
                                        </x-adminlte-input>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <x-adminlte-select wire:model='factores_de_riesgo_para_el_cargo'
                                    name="factores de riesgo para el cargo" label="Factores de riesgo para el cargo"
                                    label-class="text-lightblue" data-placeholder="Select an option...">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-exclamation-triangle text-lightblue"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione una opción</option>
                                    <option value="Desconoce">Desconoce</option>
                                    <option value="suministrados por el trabajador">Suministrados por el trabajador
                                    </option>
                                    <option value="suministrados por la empresa">Suministrados por la empresa</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <x-adminlte-select id="exposicion_select" wire:model='exposicion_a_factores_de_riesgo'
                                    name="exposicion_a_factores_de_riesgo" label="Exposición a Factores Riesgo"
                                    label-class="text-lightblue" data-placeholder="Select an option...">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-exclamation-triangle text-lightblue"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione una opción</option>
                                    <option value="Fisicos">Físicos</option>
                                    <option value="Quimicos">Químicos</option>
                                    <option value="Biologicos">Biológicos</option>
                                    <option value="Mecanicos">Mecánicos</option>
                                    <option value="Biomecanicos">Biomecánicos</option>
                                    <option value="Psicosocial">Psicosocial</option>
                                    <option value="Seguridad">Seguridad</option>
                                    <option value="Locativos">Locativos</option>
                                    <option value="Otros">Otros</option>
                                </x-adminlte-select>
                            </div>
                            {{-- Uso de EPP --}}
                            <div class="col-md-6">
                                <label class="text-lightblue">Uso de EPP</label>
                                <div class="row">
                                    <div class="col-md-2 col-sm-2">
                                        <div class="custom-control custom-checkbox">
                                            <input wire:model='casco' type="checkbox" class="custom-control-input"
                                                id="casco" name="casco" value="Casco">
                                            <label class="custom-control-label text-lightblue"
                                                for="casco">Casco</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input wire:model='gafas' type="checkbox" class="custom-control-input"
                                                id="gafas" name="gafas" value="Gafas">
                                            <label class="custom-control-label text-lightblue"
                                                for="gafas">Gafas</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4">
                                        <div class="custom-control custom-checkbox">
                                            <input wire:model='protectores_auditivos' type="checkbox"
                                                class="custom-control-input" id="protectores_auditivos"
                                                name="protectores_auditivos" value="Protectores Auditivos">
                                            <label class="custom-control-label text-lightblue"
                                                for="protectores_auditivos">Protectores
                                                Auditivos</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input wire:model='protectores_respiratorios' type="checkbox"
                                                class="custom-control-input" id="protectores_respiratorios"
                                                name="protectores_respiratorios" value="protectores_respiratorios">
                                            <label class="custom-control-label text-lightblue"
                                                for="protectores_respiratorios">Protector
                                                Respiratorio</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-2">
                                        <div class="custom-control custom-checkbox">
                                            <input wire:model='guantes' type="checkbox" class="custom-control-input"
                                                id="guantes" name="guantes" value="guantes">
                                            <label class="custom-control-label text-lightblue"
                                                for="guantes">Guantes</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input wire:model='botas' type="checkbox" class="custom-control-input"
                                                id="botas" name="botas" value="botas">
                                            <label class="custom-control-label text-lightblue"
                                                for="botas">Botas</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="text-center mt-2">
                            <button wire:loading.attr='disabled' class="btn btn-outline-success"> <span
                                    wire:loading.remove>Siguiente</span>
                                <span wire:loading>
                                    <i class="fas fa-sync-alt fa-spin"></i>
                                </span>
                            </button>
                        </div>
                    </form>
                    <!-- Modal Fisicos -->
                    <div class="modal fade" id="modelIdFisicos" tabindex="-1" role="dialog"
                        aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Factores de Riego Fisicos
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </h5>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <div class="form-group">
                                            <form wire:submit="guardarFactoresFisicos">
                                                <div class="mb-1">
                                                    <label for="calor">
                                                        <input type="checkbox" wire:model='calor' name="calor"
                                                            value="calor" id="calor"> Calor
                                                    </label>
                                                </div>
                                                <div class="mb-1">
                                                    <label for="frio">
                                                        <input type="checkbox" wire:model='frio' name="frio"
                                                            value="frio" id="frio"> Frio
                                                    </label>
                                                </div>
                                                <div class="mb-1">
                                                    <label for="iluminacion">
                                                        <input type="checkbox" wire:model='iluminacion'
                                                            name="iluminacion" value="iluminacion" id="iluminacion">
                                                        Iluminacion
                                                    </label>
                                                </div>
                                                <div class="mb-1">
                                                    <label for="radiaciones">
                                                        <input type="checkbox" wire:model='radiaciones'
                                                            name="radiaciones" value="radiaciones" id="radiaciones">
                                                        Radiaciones
                                                    </label>
                                                </div>
                                                <div class="mb-1">
                                                    <label for="ruido">
                                                        <input type="checkbox" wire:model='ruido' name="ruido"
                                                            value="Ruido" id="ruido">
                                                        Ruido
                                                    </label>
                                                </div>
                                                <div class="mb-1">
                                                    <label for="vibracion">
                                                        <input type="checkbox" wire:model='vibracion'
                                                            name="vibracion" value="vibracion" id="vibracion">
                                                        Vibraciones
                                                    </label>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 text-center">
                                                        <button wire:loading.attr='disabled'
                                                            class="btn btn-outline-success" onclick="cerrarModal()">
                                                            <span wire:loading.remove>Guardar</span>
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
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-danger"
                                        data-dismiss="modal">Cancelar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Quimicos-->
                    <div class="modal fade" id="modelIdQuimicos" tabindex="-1" role="dialog"
                        aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Factores de Riego Quimicos
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="container">
                                            <form wire:submit="guardarFactoresQuimicos">
                                                <div class="mb-1">
                                                    <label for="fibras">
                                                        <input type="checkbox" wire:model='fibras' name="fibras"
                                                            value="fibras" id="fibras"> Fibras
                                                    </label>
                                                </div>
                                                <div class="mb-1">
                                                    <label for="gases">
                                                        <input type="checkbox" wire:model='gases' name="gases"
                                                            value="gases" id="gases"> Gases
                                                    </label>
                                                </div>
                                                <div class="mb-1">
                                                    <label for="humo">
                                                        <input type="checkbox" wire:model='humo' name="humo"
                                                            value="humo" id="iluminacion">
                                                        Humo
                                                    </label>
                                                </div>
                                                <div class="mb-1">
                                                    <label for="material_particulado">
                                                        <input type="checkbox" wire:model='material_particulado'
                                                            name="material_particulado" value="material_particulado"
                                                            id="material_particulado">
                                                        Material Particulado
                                                    </label>
                                                </div>
                                                <div class="mb-1">
                                                    <label for="sustancias_quimicas">
                                                        <input type="checkbox" wire:model='sustancias_quimicas'
                                                            name="sustancias_quimicas" value="sustancias_quimicas"
                                                            id="sustancias_quimicas">
                                                        Sustancias Quimicas
                                                    </label>
                                                </div>
                                                <div class="mb-1">
                                                    <label for="vapores">
                                                        <input type="checkbox" wire:model='vapores' name="vapores"
                                                            value="vapores" id="vapores">
                                                        Vapores
                                                    </label>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 text-center">
                                                        <button wire:loading.attr='disabled'
                                                            class="btn btn-outline-success"
                                                            onclick="cerrarModalQuimicos()">
                                                            <span wire:loading.remove>Guardar</span>
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
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-danger"
                                        data-dismiss="modal">Cancelar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Fin Modales --}}
                </div>
            </div>
        </div>
    </div>
</div>
