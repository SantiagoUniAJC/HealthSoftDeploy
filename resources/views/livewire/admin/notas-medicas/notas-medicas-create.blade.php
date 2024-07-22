<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-secondary card-outline mt-3">
                    <div class="card-header">
                        <div class="row">
                            <h3 class="card-title col-md-12">Crear Notas Medicas para el paciente
                               <span class="text-bold italic"> {{ $paciente->nombres . ' ' . $paciente->apellidos }} </span></h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form wire:submit='crearNotaMedica'>

                            <x-adminlte-textarea wire:model='descripcion' name="descripcion" label="Descripción" rows=5 label-class="text-warning"
                                igroup-size="sm" placeholder="Inserte la descripción de la nota medica...">
                                <x-slot name="prependSlot">
                                    <div class="input-group-text bg-dark">
                                        <i class="fas fa-lg fa-file-alt text-warning"></i>
                                    </div>
                                </x-slot>
                            </x-adminlte-textarea>

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
</div>
