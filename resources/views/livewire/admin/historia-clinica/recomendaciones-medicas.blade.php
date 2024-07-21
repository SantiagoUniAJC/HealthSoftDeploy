<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-success card-outline mt-3">
                <div class="card-header">
                    <h4 class="card-title">EVALUACIÓN MÉDICA OCUPACIONAL: <span class="text text-bold text-uppercase">
                            {{ $paciente->nombres . ' ' . $paciente->apellidos }} </span> </h4>
                </div>
                <div class="card-body">
                    <form wire:submit='guardarRecomendacionesMedicas'>
                        <div class="row">
                            <div class="col-md-12 bg-lightblue pt-3 rounded mb-3 mt-3">
                                <h5 class="text text-center text-white"> Recomendaciones Médicas para el Usuario:
                                </h5>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="manejo_en_eps"
                                        wire:model="manejo_en_eps" name="manejo_en_eps">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="manejo_en_eps">Continuar manejo médico en EPS
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="control_tension"
                                        wire:model="control_tension" name="control_tension">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="control_tension">Control de cifras tensionales</label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="control_cardiaco"
                                        wire:model="control_cardiaco" name="control_cardiaco">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="control_cardiaco">Control en programa de riesgo cardiovascular
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="control_visual"
                                        wire:model="control_visual" name="control_visual">
                                    <label class="form-check-label text-lightblue text-bold" for="control_visual">
                                        Control visual anual</label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="cambio_lentes"
                                        wire:model="cambio_lentes" name="cambio_lentes">
                                    <label class="form-check-label text-lightblue text-bold" for="cambio_lentes">Cambio
                                        de lentes por variación en fórmula
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="control_auditivo"
                                        wire:model="control_auditivo" name="control_auditivo">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="control_auditivo">Control auditivo anual</label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="limpieza_conducto_auditivo"
                                        wire:model="limpieza_conducto_auditivo" name="limpieza_conducto_auditivo">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="limpieza_conducto_auditivo">Limpieza de conducto auditivo externo
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="control_odontologico"
                                        wire:model="control_odontologico" name="control_odontologico">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="control_odontologico">Continuar tratamiento odontológico</label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="medias_compresion_baja"
                                        wire:model="medias_compresion_baja" name="medias_compresion">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="medias_compresion_baja">Usar
                                        medias de compresión baja
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="medias_compresion_media"
                                        wire:model="medias_compresion_media" name="medias_compresion_media">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="medias_compresion_media">Usar
                                        medias de compresión media</label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="citologia_anual"
                                        wire:model="citologia_anual" name="citologia_anual">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="citologia_anual">Realizar citología anualmente
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="planificacion_familiar"
                                        wire:model="planificacion_familiar" name="planificacion_familiar">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="planificacion_familiar">Se
                                        sugiere valoración para planificación familiar</label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="mamografia"
                                        wire:model="mamografia" name="mamografia">
                                    <label class="form-check-label text-lightblue text-bold" for="mamografia">Realizar
                                        mamografía
                                    </label>
                                </div>
                            </div>
                            {{-- Recomendaciones laborales para el Usuario --}}
                            <div class="col-md-12 bg-lightblue pt-3 rounded mb-3">
                                <h5 class="text text-center text-white"> Recomendaciones Laborales para el Usuario:
                                </h5>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="reportar_accidentes"
                                        wire:model="reportar_accidentes" name="reportar_accidentes">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="reportar_accidentes">Reportar oportunamente todo incidente o accidente
                                        relacionado con el trabajo
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="cumplir"
                                        wire:model="cumplir_normas_seguridad" wire:model="cumplir" wire:model="cumplir_normas_seguridad"
                                        name="cumplir" wire:model="cumplir_normas_seguridad">
                                    <label class="form-check-label text-lightblue text-bold" for="cumplir"
                                        wire:model="cumplir_normas_seguridad">Cumplir con las normas de Seguridad y Salud en el
                                        trabajo
                                        establecidas por la empresa
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="utilizar_EPI"
                                        wire:model="utilizar_EPI" name="utilizar_EPI">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="utilizar_EPI">Utilizar los EPI Elementos de Protección Individual
                                        otorgados por la empresa
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="higiene_postural"
                                        wire:model="higiene_postural" name="higiene_postural">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="higiene_postural">Higiente Postural
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="pausas_activas"
                                        wire:model="pausas_activas" name="pausas_activas">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="pausas_activas">Participar en el programa de pausas activas definido por
                                        la
                                        empresa
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="uso_correccion_visual"
                                        wire:model="uso_correccion_visual" name="uso_correccion_visual">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="uso_correccion_visual">Uso
                                        de corrección visual permanente
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="protocolo_covid19"
                                        wire:model="protocolo_covid19" name="protocolo_covid19">
                                    <label class="form-check-label text-lightblue text-bold"
                                        for="protocolo_covid19">Distanciamiento físico de mínimo 1 metro para evitar
                                        contagio por COVID-19.
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 mt-3">
                                <x-adminlte-textarea wire:model='otras_recomendaciones_medico_laborales'
                                    name="otras_recomendaciones_medico_laborales" label="Otras Recomendaciones"
                                    label-class="text-lightblue">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-calendar"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-textarea>
                            </div>
                            {{-- El Paciente requiere de Notas Medicas? --}}
                            <div class="col-md-12 bg-lightblue pt-3 rounded mb-3">
                                <h5 class="text text-center text-white"> El Paciente requiere de Notas Médicas?
                                </h5>
                            </div>
                            <div class="col-md-12 col-sm-12 mb-3">
                                <div class="form-check">
                                    <div class="row">
                                        <label class="form-check-label text-lightblue text-bold"
                                            for="notas_medicas">Solicitar Notas Médicas
                                        </label>
                                        <input class="form-check-input" type="checkbox" id="notas_medicas"
                                            wire:model="notas_medicas" name="notas_medicas">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 bg-lightblue pt-3 rounded mb-3">
                            </div>
                            {{-- Firma Especialista --}}
                            <div class="col-md-6 text-center">
                                <div class="firmadigital">
                                    @if ($paciente->path_firma)
                                        <div class="con_firma">
                                            {{-- <img src="{{ asset($paciente->path_firma) }}" alt="Firma del Paciente"> --}}
                                            <img src="" alt="Firma del Paciente">
                                        </div>
                                    @else
                                        <div class="botoncrearfirma">
                                            {{-- <button class="btn btn-outline-primary">
                                                <a href="{{ route('admin.especialistas.firma-especialista', $especialista->id) }}">Crear
                                                    firma de {{ $especialista->nombres }}</a>
                                            </button> --}}
                                        </div>
                                    @endif
                                </div>
                                <div class="firma">
                                    <p>Firma digitalizada del Especialista:
                                        <span class="text-bold">{{ $user->name }}</span>
                                    </p>
                                    <p class="text-bold">{{ $user->cargo }}
                                    </p>
                                </div>
                            </div>
                            {{-- Firma Paciente --}}
                            <div class="text-center col-md-6">
                                <div class="firmadigital">
                                    @if ($paciente->path_firma)
                                        <div class="con_firma">
                                            <img src="{{ asset($paciente->path_firma) }}" alt="Firma del Paciente">
                                        </div>
                                    @else
                                        <div class="botoncrearfirma">
                                            <button class="btn btn-outline-primary">
                                                <a href="{{ route('admin.pacientes.firma-pacientes', $paciente->id) }}">Crear
                                                    firma de {{ $paciente->nombres }}</a>
                                            </button>
                                        </div>
                                    @endif
                                </div>

                                <div class="firma">
                                    <span>Firma digitalizada del Paciente:
                                        {{ $paciente->nombres . ' ' . $paciente->apellidos }}</span>
                                    <p>{{ $paciente->tipo_identificacion . ' # ' . $paciente->numero_identificacion }}
                                    </p>
                                </div>
                            </div>
                            <div class="text-center">
                                <p class="text-justify">
                                    Certifico que la firma digital de este documento fue registrada por mí, y
                                    autorizo a
                                    <b>Health Soft</b> para que esta sea usada en cada uno de los
                                    exámenes
                                    mencionados en la parte superior de este consentimiento.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <button wire:loading.attr='disabled' class="btn btn-outline-success">
                                    <span wire:loading.remove>Guardar</span>
                                    <i class="fas fa-save"></i>
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
