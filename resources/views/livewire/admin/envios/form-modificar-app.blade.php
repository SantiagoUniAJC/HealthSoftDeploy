<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-secondary card-outline mt-3">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <div class="container mt-2">
                        <form wire:submit="formularioModificacionApp" enctype="multipart/form-data" class="wpcf7 ">
                            <div class="main-form">
                                <h2 class="font14">Formulario de Contacto para las Modificaciones</h2>

                                <x-input wire:model="nombres" type="text" class="mb-4" name="nombres"
                                    placeholder="Tu Nombre..." />
                                <x-input-error for="nombres" class="text-danger" />
                                <textarea wire:model="descripcion" type="text" class="" name="descripcion" placeholder="Tu descripcion ..."></textarea>
                                <x-input-error for="descripcion" class="text-danger" />
                                <x-input wire:model="imagen" type="file" class="mt-4" name="imagen"
                                    placeholder="Tu imagen..." accept="image/*" />
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center mt-3">
                                    <button wire:loading.attr='disabled' class="btn btn-outline-success"> <span
                                            wire:loading.remove>Enviar Formulario</span>
                                        <span wire:loading>
                                            <i class="fas fa-sync-alt fa-spin"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <table BORDER=1 style="color: rgba(8, 51, 117, 0.904); background-color: rgba(237, 245, 238, 0.904);">
                            <tr>
                                <td>
                                    <marquee>Espacio destinado para contacto con el Desarrollador de la AppWeb. </marquee>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
