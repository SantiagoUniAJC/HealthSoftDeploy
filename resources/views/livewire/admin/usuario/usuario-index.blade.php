<div>
    <div class="container-xxl">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-secondary card-outline mt-3">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-4">
                                <h3 class="card-title">Lista de Usuarios</h3>
                            </div>
                            <div class="col-md-6">
                                <input wire:model.live="search" class="form-control text-center"
                                    placeholder="Búsqueda por Nombre o Correo Electrónico" />
                                <div wire:loading>
                                    <span class="text text-success text-bold">Buscando Usuario ......</span>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <a href="{{ route('admin.users.create') }}"
                                    class="btn btn-outline-success float-right">Nuevo Usuario</a>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        @if ($users->count() == 0)
                            <div class="alert alert-warning alert-dismissible">
                                <h5 class="text text-bold"><i class="icon fas fa-exclamation-triangle"></i>
                                    {{ $search }}!</h5>
                                No se encontraron registros con los criterios de búsqueda ingresados.
                            </div>
                        @else
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Registro</th>
                                        <th>Nombre & Apellido</th>
                                        <th>Cargo</th>
                                        <th>Role</th>
                                        <th>Teléfono</th>
                                        <th>Email</th>
                                        <th colspan="2" class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->cargo }}</td>
                                            <td>
                                                @if ($user->roles->count())
                                                    @foreach ($user->roles as $role)
                                                        {{ $role->name }}
                                                    @endforeach
                                                @else
                                                    <p>Sin Rol Asignado</p>
                                                @endif
                                            </td>
                                            <td>{{ $user->telefono }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td width="10px">
                                                <a class="btn btn-outline-warning"
                                                    href="{{ route('admin.users.edit', $user) }}">
                                                    <i class="fas fa-edit" title="Editar"></i>
                                                </a>
                                            </td>
                                            <td width="10px">
                                                <button wire:click="$dispatch('confirmUser', {{ $user->id }})" class="btn btn-outline-danger" title="Eliminar">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-4">
                                {{ $users->links() }}
                            </div>
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.users.index') }}" class="btn btn-outline-info">Actualizar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
