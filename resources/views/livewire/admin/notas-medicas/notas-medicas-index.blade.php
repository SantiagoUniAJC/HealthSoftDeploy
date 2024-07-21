<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-secondary card-outline mt-3">
                <div class="card-header">
                    <div class="row">
                        <h3 class="card-title col-md-2">Notas Medicas</h3>
                        <p class="col-md-4"></p>
                        <div class="col-md-5">
                            <x-input wire:model.live="search" class="form-control text-center"
                                placeholder="Busqueda por el nombre o documento del Paciente" />
                            <div wire:loading>
                                <span class="text text-success text-bold">Buscando Paciente......</span>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($notasMedicas->isEmpty())
                    <div class="card-body">
                        <div class="alert alert-warning alert-dismissible">
                            <h5><i class="icon fas fa-exclamation-triangle"></i> Alerta!</h5>
                            No se encontraron registros con los datos ingresados.
                        </div>
                    </div>
                @else
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    {{-- <th>Id</th> --}}
                                    <th>Paciente</th>
                                    <th>Documento</th>
                                    <th>Fecha Creación</th>
                                    <th>Descripción</th>
                                    <th>Estado</th>
                                    <th colspan="3" class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                @foreach ($notasMedicas as $notaMedica)
                                    <tr>
                                        {{-- <td>{{ $notaMedica->id }}</td> --}}
                                        <td>{{ $notaMedica->paciente->nombres . ' ' . $notaMedica->paciente->apellidos }}
                                        </td>
                                        <td>{{ number_format($notaMedica->paciente->numero_identificacion, 0, '.', '.') }}
                                        </td>
                                        <td>{{ $notaMedica->created_at }}</td>
                                        <td>{{ $notaMedica->descripcion }}</td>
                                        <td>{{ $notaMedica->estado }}</td>
                                        <td>
                                            <button class="btn btn-outline-info">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button
                                                wire:click="$dispatch('confirmUser', {{ $notaMedica->id }}, 'confirmar')"
                                                class="btn btn-outline-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6">
                                {{-- <span class="text text-bold">Mostrando de {{ $notasMedicas->firstItem() }} a
                                {{ $notasMedicas->lastItem() }} de {{ $notasMedicas->total() }} registros</span> --}}
                            </div>
                            <div class="col-md-6">
                                {{ $notasMedicas->links() }}
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
