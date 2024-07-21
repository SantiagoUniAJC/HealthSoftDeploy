<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="card card-secondary card-outline mt-3">
                    <div class="card-header bg-warning">
                        <h4>Reprogramar Cita</h4>
                    </div>
                    <div class="card-body">
                        <form wire:submit="reprogramarCita">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="text text-lightblue">Nombre del Paciente: </label>
                                        <input type="text" class="form-control" value="{{$cita->paciente->nombres . ' ' . $cita->paciente->apellidos}}"  readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="text-lightblue">Examen a reprogramar: </label>
                                        <input type="text" class="form-control" value="{{ $cita->nombre_examen }}"  readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="text-lightblue">Cita Actual: </label>
                                        <input type="text" class="form-control" value="{{ $cita->fecha_inicio }}"  readonly>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="text-lightblue">Fecha & Hora del Examen: </label>
                                        <input wire:model='fecha_inicio' type="datetime-local" name="fecha_inicio" class="form-control">
                                    </div>
                                    <x-input-error class="text-danger" for="fecha_inicio" />
                                </div>                     
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <button wire:loading.attr='disabled' class="btn btn-outline-warning"> <span
                                            wire:loading.remove>Reprogramar</span>
                                        <span wire:loading>
                                            <i class="fas fa-sync-alt fa-spin"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('admin.agendas.asistencia-citas') }}" class="btn btn-outline-primary">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
