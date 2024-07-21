<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-success card-outline mt-3">
                <div class="card-header">
                    <h4 class="card-title">EVALUACIÓN MÉDICA OCUPACIONAL: <span class="text text-bold text-uppercase">
                            {{ $paciente->nombres . ' ' . $paciente->apellidos }} </span> </h4>
                </div>
                <div class="card-body">
                    <form wire:submit='guardarSysVigEpidemiologica'>
                        <div class="row">
                            <div class="col-md-12 bg-lightblue pt-3 rounded mb-3">
                                <h5 class="text text-center text-white">Sistemas de Vigilancia Epidemiológica: </h5>
                            </div>

                            <div class="col-md-2 col-sm-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="visual" wire:model="visual">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="visual">Visual</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="auditivo" wire:model="auditivo"
                                        name="auditivo">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="auditivo">Auditivo</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="quimico" wire:model="quimico"
                                        name="quimico">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="quimico">Químico</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="respiratorio"
                                        wire:model="respiratorio" name="respiratorio">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="respiratorio">Respiratorio</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="cardiovascular"
                                        wire:model="cardiovascular" name="cardiovascular">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="cardiovascular">Cardiovascular</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="psicosocial"
                                        wire:model="psicosocial" name="psicosocial">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="psicosocial">Psicosocial</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="biomecanico"
                                        wire:model="biomecanico" name="biomecanico">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="biomecanico">Biomecánico</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="biologico"
                                        wire:model="biologico" name="biologico">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="biologico">Biológico</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="trabajo_alto_riesgo"
                                        wire:model="trabajo_alto_riesgo" name="trabajo_alto_riesgo">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="trabajo_alto_riesgo">Trabajo de Alto Riesgo</label>
                                </div>
                            </div>
                            {{-- Remisiones --}}
                            <div class="col-md-12 bg-lightblue pt-3 rounded mt-3 mb-3">
                                <h5 class="text text-center text-white">Remisiones: </h5>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="arl" wire:model="arl"
                                        name="arl">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="arl">ARL</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="audiologia"
                                        wire:model="audiologia" name="audiologia">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="audiologia">Audiología</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="cardiologia"
                                        wire:model="cardiologia" name="cardiologia">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="cardiologia">Cardiología</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="cirugia_general"
                                        wire:model="cirugia_general" name="cirugia_general">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="cirugia_general">Cirugía General</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="dermatologia"
                                        wire:model="dermatologia" name="dermatologia">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="dermatologia">Dermatología</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="endrocrinologia"
                                        wire:model="endrocrinologia" name="endrocrinologia">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="endrocrinologia">Endrocrinología</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="eps" wire:model="eps"
                                        name="eps">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="eps">EPS</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="eps_fisiatria"
                                        wire:model="eps_fisiatria" name="eps_fisiatria">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="eps_fisiatria">Fisiatría</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="eps_fisioterapia"
                                        wire:model="eps_fisioterapia" name="eps_fisioterapia">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="eps_fisioterapia">Fisioterapia</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="eps_gastroenterologia"
                                        wire:model="eps_gastroenterologia" name="eps_gastroenterologia">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="eps_gastroenterologia">Gastroenterología</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="eps_ginecologia"
                                        wire:model="eps_ginecologia" name="eps_ginecologia">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="eps_ginecologia">Ginecología</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="eps_infectologia"
                                        wire:model="eps_infectologia" name="eps_infectologia">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="eps_infectologia">Infectología</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="eps_medicina_general"
                                        wire:model="eps_medicina_general" name="eps_medicina_general">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="eps_medicina_general">Medicina General</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="eps_medicina_interna"
                                        wire:model="eps_medicina_interna" name="eps_medicina_interna">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="eps_medicina_interna">Medicina Interna</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="eps_medicina_laboral"
                                        wire:model="eps_medicina_laboral" name="eps_medicina_laboral">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="eps_medicina_laboral">Medicina Laboral</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="eps_nefrologia"
                                        wire:model="eps_nefrologia" name="eps_nefrologia">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="eps_nefrologia">Nefrología</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="eps_neurologia"
                                        wire:model="eps_neurologia" name="eps_neurologia">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="eps_neurologia">Neurología</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="eps_nutricion_dietetica"
                                        wire:model="eps_nutricion_dietetica" name="eps_nutricion_dietetica">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="eps_nutricion_dietetica">Nutrición y Dietetica</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="eps_odontologia"
                                        wire:model="eps_odontologia" name="eps_odontologia">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="eps_odontologia">Odontología</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="eps_oftalmologia"
                                        wire:model="eps_oftalmologia" name="eps_oftalmologia">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="eps_oftalmologia">Oftalmología</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="eps_optometria"
                                        wire:model="eps_optometria" name="eps_optometria">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="eps_optometria">Optometría</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="eps_ortopedia"
                                        wire:model="eps_ortopedia" name="eps_ortopedia">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="eps_ortopedia">Ortopedia</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="eps_ortoptica"
                                        wire:model="eps_ortoptica" name="eps_ortoptica">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="eps_ortoptica">Ortóptica</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="eps_otorrinolaringologia"
                                        wire:model="eps_otorrinolaringologia" name="eps_otorrinolaringologia">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="eps_otorrinolaringologia">Otorrinolaringología</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="eps_psicologia"
                                        wire:model="eps_psicologia" name="eps_psicologia">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="eps_psicologia">Psicología</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="eps_psiquiatria"
                                        wire:model="eps_psiquiatria" name="eps_psiquiatria">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="eps_psiquiatria">Psiquiatría</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="eps_urología"
                                        wire:model="eps_urología" name="eps_urología">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="eps_urología">Urología</label>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 mt-3">
                                <x-adminlte-input wire:model='otras_remisiones' name="otras_remisiones"
                                    label="Otras Remisiones" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-calendar"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-input>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <x-adminlte-input wire:model='motivos_remisiones' name="motivos_remisiones"
                                    label="Motivo Remisiones" label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-calendar"></i>
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
