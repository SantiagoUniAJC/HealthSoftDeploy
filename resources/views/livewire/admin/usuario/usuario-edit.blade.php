<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-secondary card-outline mt-3">
                    <div class="card-header bg-success text-center text-white">
                        <h3 class="card-title">Asignar Roles al Usuario: <span>{{ $user->name }}</span></h3>
                    </div>
                    <div class="card-body">
                        <form wire:submit='updateRoles'>
                            <div class="row">
                                <div class="col-md-4">
                                    <h4 class="text-center">Lista de Roles</h4>
                                    @foreach ($roles as $role)
                                        <div class="form-check">
                                            <input wire:model="selectedRoles" class="form-check-input" type="checkbox"
                                                value="{{ $role->id }}"
                                                {{ in_array($role->id, $selectedRoles) ? 'checked' : '' }}>
                                            <label class="form-check-label">
                                                {{ $role->name }}
                                            </label>
                                            @if (in_array($role->id, $selectedRoles))
                                                <span class="text-muted">(Actual)</span>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4 text-center">
                                    <button wire:loading.attr='disabled' class="btn btn-outline-success">
                                        <span wire:loading.remove>Asignar Role</span>
                                        <span wire:loading>
                                            <i class="fas fa-sync-alt fa-spin"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ route('admin.users.index') }}" class="btn btn-outline-primary"><i
                                class="fas fa-arrow-left"></i>
                            Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>