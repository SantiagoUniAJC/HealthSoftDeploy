<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-success card-outline mt-3">
                <div class="card-header">
                    <h4 class="card-title">EVALUACIÓN MÉDICA OCUPACIONAL: <span class="text text-bold text-uppercase">
                            {{ $paciente->nombres . ' ' . $paciente->apellidos }} </span> </h4>
                </div>
                <div class="card-body">
                    <form wire:submit='diagnostico'>
                        <div class="row">
                            <div class="col-md-12 bg-lightblue pt-3 rounded mb-3">
                                <h5 class="text text-center text-white">Diagnóstico: </h5>
                            </div>
                            <div class="col-md-8 col-sm-7">
                                <x-adminlte-input wire:model='diagnostico_principal' name="diagnostico_principal"
                                    label="Diagnostico Principal CIE-10" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-user-md"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-4 col-sm-5">
                                <x-adminlte-select wire:model='tipo_diagnostico' name="tipo_diagnostico"
                                    label="Tipo Diagnóstico" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-flask"></i>
                                        </div>
                                    </x-slot>
                                    <option>Seleccione opción</option>
                                    <option value="impresion_diagnostica">Impresion Diagnostica</option>
                                    <option value="confirmado_nuevo">Confirmado Nuevo</option>
                                    <option value="confirmado_repetido">Confirmado Repetido</option>
                                </x-adminlte-select>
                            </div>
                            <div class="col-md-6 col-sm-4">
                                <x-adminlte-input wire:model='CIE10' name="CIE10" label="CIE-10"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-user-md"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-6 col-sm-8">
                                <x-adminlte-input wire:model='descripcion_cie10' name="descripcion_cie10"
                                    label="Descripción CIE-10" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-user-md"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-12 bg-lightblue pt-3 rounded mb-3">
                                <h5 class="text text-center text-white">Recomendaciones Médico Laborales: </h5>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <x-adminlte-input wire:model='recomendaciones_medicas'
                                    name="recomendaciones_medicas" label="Recomendaciones Medicas"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-user-md"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <x-adminlte-input wire:model='recomendaciones_laborales_x_meses'
                                    name="recomendaciones_laborales_x_meses"
                                    label="Recomendaciones laborales en meses" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-calendar"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-12 bg-lightblue pt-3 rounded mb-3">
                                <h5 class="text text-center text-white">Recomendaciones para mejorar hábitos y estilos
                                    de vida: </h5>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="recomendacion1"
                                        wire:model='recomendacion1' name="recomendacion1" value="recomendacion1" id="recomendacion1">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="recomendacion1">Beber al menos 8 vasos de agua al día </label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="recomendacion2"
                                        wire:model="recomendacion2" name="recomendacion2">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="recomendacion2">Incorporar a la dieta diaria, alimentos de todos los
                                        grupos</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="recomendacion3"
                                        wire:model="recomendacion3" name="recomendacion3">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="recomendacion3">Consumir diariamente leche u otro producto lácteo
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="recomendacion4"
                                        wire:model="recomendacion4" name="recomendacion4">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="recomendacion4">Aumentar la ingesta de frutas y verduras</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="recomendacion5"
                                        wire:model="recomendacion5" name="recomendacion5">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="recomendacion5">Aumentar ingesta de proteínas
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="recomendacion6"
                                        wire:model="recomendacion6" name="recomendacion6">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="recomendacion6">Limitar el consumo de bebidas azucaradas</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="recomendacion7"
                                        wire:model="recomendacion7" name="recomendacion7">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="recomendacion7">Reducir el consumo de sal, embutidos, enlatados y
                                        productos de paquete
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="recomendacion8"
                                        wire:model="recomendacion8" name="recomendacion8">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="recomendacion8">Evitar alimentos con elevado contenido de grasa
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="recomendacion9"
                                        wire:model="recomendacion9" name="recomendacion9">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="recomendacion9">Realizar ejercicio, mínimo 3 veces a la semana
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="recomendacion10"
                                        wire:model="recomendacion10" name="recomendacion10">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="recomendacion10">Bajar de peso</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="recomendacion11"
                                        wire:model="recomendacion11" name="recomendacion11">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="recomendacion11">Evitar el consumo de tabaco
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="recomendacion12"
                                        wire:model="recomendacion12" name="recomendacion12">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="recomendacion12">Evitar el consumo de alcohol</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="recomendacion13"
                                        wire:model="recomendacion13" name="recomendacion13">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="recomendacion13">Procurar una adecuada higiene del sueño
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="recomendacion14"
                                        wire:model="recomendacion14" name="recomendacion14">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="recomendacion14">Lavar las manos frecuentemente usando agua y jabón y
                                        frotando de 20 a 30 segundos
                                    </label>
                                </div>
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
