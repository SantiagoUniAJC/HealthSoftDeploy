<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-secondary card-outline mt-3">
                <div class="container">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-9">
                                <h3 class="card-title">Tarifario Actual: <b class="text text-uppercase"> {{
                                        $cliente->nombre_comercial }} </b></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <form wire:submit="updateTarifa">
                                <div class="row">
                                    <div class="input-group mb-3 col-md-3">
                                        <span id="codigo" class="input-group-text col-md-4" for="codigo">Código:</span>
                                        <x-input type="text" class="form-control col-md-8" value="{{ $tarifa->codigo }}"
                                            readonly />
                                    </div>

                                    <div class="input-group mb-3 col-md-3">
                                        <span class="input-group-text col-md-4" for="tipo">Tipo:</span>
                                        <x-input type="text" class="form-control col-md-8" value="{{ $tarifa->tipo }}"
                                            readonly />

                                    </div>
                                    <div class="input-group mb-3 col-md-6">
                                        <span class="input-group-text col-md-4" for="nombre">Nombre:</span>
                                        <x-input class="form-control col-md-8" value="{{ $tarifa->nombre }}" readonly />
                                    </div>
                                    <div class="input-group mb-3 col-md-3">
                                        <span id="precio" class="input-group-text col-md-4" for="precio">Precio:</span>
                                        <x-input wire:model='precio' value="{{ $tarifa->precio }}" type="number"
                                            class="form-control col-md-8" name="precio" />
                                    </div>

                                    <div class="input-group mb-3 col-md-3">
                                        <span id="descuento" class="input-group-text col-md-4"
                                            for="descuento">Descuento</span>
                                        <x-input wire:model='descuento' value="{{ $tarifa->descuento }}" type="number"
                                            class="form-control col-md-8" name="descuento" />
                                    </div>
                                    <div class="input-group mb-3 col-md-6">
                                        <span class="input-group-text col-md-4" for="cliente_id">Usuario
                                            Modifica:</span>
                                        <x-input wire:model="user_id" class="form-control col-md-8" name="user_id"
                                            value="{{$user->name}}" readonly />
                                    </div>
                                </div>
                                <div class="row">
                                    <a href="{{ route('admin.tarifarios.show', $tarifa->id ) }}" type="submit"
                                        class="btn btn-outline-primary"><i class="fas fa-arrow-left"></i>
                                        Volver</a>
                                    <p class="col-md-4"></p>
                                    <div class="col-md-4 text-center">
                                        <button wire:loading.attr="disabled" class="btn btn-outline-warning">
                                            <span wire:loading.remove>Editar Tarifa</span>
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
</div>