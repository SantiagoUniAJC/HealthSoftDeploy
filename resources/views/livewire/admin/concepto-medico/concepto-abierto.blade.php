<div>
    <div class="container-xxl">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-secondary card-outline mt-3">
                    <div class="card-header">
                        <div class="row">
                            <h3 class="card-title col-md-7">Conceptos Médicos: <span class="text font-italic"> Aqui
                                    encontraras solo los conceptos médicos en estado <strong>en proceso</strong>.</span>
                            </h3>
                            <div class="col-md-5">
                                <x-input wire:model.live="search" class="form-control text-center"
                                    placeholder="Búsqueda por nombre o documento del paciente" />
                                <div wire:loading>
                                    <span class="text text-success text-bold">Buscando......</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        {{-- si existe una busqueda pero sin resultados --}}
                        @if ($search && $conceptomedico->isEmpty())
                            <div class="alert alert-warning alert-dismissible">
                                <h5><i class="icon fas fa-exclamation-triangle"></i> {{ $search }}!</h5>
                                No se encontraron registros con los criterios de busqueda ingresados.
                            </div>
                        @else
                            <table class="table table-bordered table-responsive-xl">
                                <thead>
                                    <tr>
                                        <th>No. de Orden</th>
                                        <th>Tipo Evaluación</th>
                                        <th>Énfasis</th>
                                        <th>Paciente</th>
                                        <th>Documento</th>
                                        <th>Cliente Solicita:</th>
                                        <th>Cargo a desempeñar</th>
                                        <th>Concepto Médico</th>
                                        <th>Descripción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($conceptomedico as $concepto)
                                        <tr>
                                            <td>{{ $concepto->ordenDeServicio->orden_numero }}</td>
                                            <td>{{ $concepto->ordenDeServicio->tipo_evaluacion }}</td>
                                            <td>{{ $concepto->ordenDeServicio->enfasis }}</td>
                                            <td>{{ $concepto->paciente->nombres . ' ' . $concepto->paciente->apellidos }}
                                            </td>
                                            <td>{{ $concepto->paciente->tipo_identificacion . ' # ' . number_format($concepto->paciente->numero_identificacion, 0, '.', '.') }}
                                            </td>
                                            <td>{{ $concepto->ordenDeServicio->cliente->razon_social }}</td>
                                            <td>{{ $concepto->paciente->cargo_a_desempeñar }}</td>
                                            <td>{{ $concepto->estado }}</td>
                                            <td>{{ $concepto->descripcion }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6">
                                {{-- <p class="text-muted">{{ $dico->links() }} </p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
