<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-secondary card-outline mt-3">
                    <div class="card-header bg-success text-center text-white">
                        <h3 class="card-title">Crear Usuario</h3>
                    </div>
                    <div class="card-body">
                        <form wire:submit="createUser" enctype="multipart/form-data">
                            <div class="row">
                                <div class="mb-2 col-md-4">
                                    <div class="input-group">
                                        <span id="name" class="input-group-text col-md-5"
                                            for="name">Nombres:</span>
                                        <x-input wire:model="name" type="text" class="form-control col-md-7"
                                            name="name" />
                                    </div>
                                    <x-input-error for="name" class="text-danger" />
                                </div>
                                <div class="mb-2 col-md-4">
                                    <div class="input-group">
                                        <span id="cargo" class="input-group-text col-md-5"
                                            for="cargo">Cargo:</span>
                                        <x-input wire:model="cargo" type="text" class="form-control col-md-7"
                                            name="cargo" />
                                    </div>
                                    <x-input-error for="cargo" class="text-danger" />
                                </div>
                                <div class="mb-2 col-md-4">
                                    <div class="input-group">
                                        <span id="telefono" class="input-group-text col-md-5"
                                            for="telefono">Telefono:</span>
                                        <x-input wire:model="telefono" type="number" class="form-control col-md-7"
                                            name="telefono" />
                                    </div>
                                    <x-input-error for="telefono" class="text-danger" />
                                </div>
                                <div class="mb-2 col-md-4">
                                    <div class="input-group">
                                        <span id="email" class="input-group-text col-md-5" for="email">Correo
                                            Electronico:</span>
                                        <x-input wire:model="email" type="email" class="form-control col-md-7"
                                            name="email" />
                                    </div>
                                    <x-input-error for="email" class="text-danger" />
                                </div>
                                <div class="mb-2 col-md-6">
                                    <div class="input-group">
                                        <span id="password" class="input-group-text col-md-3"
                                            for="password">Password:</span>
                                        <x-input wire:model="password" type="password" class="form-control col-md-9"
                                            name="password" placeholder="La contraseña debe tener mas de 8 caracteres."/>
                                    </div>
                                    <x-input-error for="password" class="text-danger" />
                                </div>
                                {{-- Insertarla imgen --}}
                                {{-- <div class="mb-2 col-md-4">
                                    <div class="input-group">
                                        <span id="imagen" class="input-group-text col-md-5"
                                            for="imagen">Imagen:</span>
                                        <x-input wire:model="imagen" type="file" class="form-control col-md-7"
                                            name="imagen" />
                                    </div>
                                    <x-input-error for="imagen" class="text-danger" />
                                </div> --}}
                            </div>
                            <div class="col-md-12 text-center mt-3">
                                <button wire:loading.attr='disabled' class="btn btn-outline-success"> <span
                                        wire:loading.remove>Crear Usuario</span>
                                    <span wire:loading>
                                        <i class="fas fa-sync-alt fa-spin"></i>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ route('admin.users.index') }}" type="submit" class="btn btn-outline-primary"><i
                                class="fas fa-arrow-left"></i>
                            Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
