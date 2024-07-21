<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-secondary card-outline mt-3">
                    <div class="card">
                        <div class="card-header bg-warning text-center text-white">
                            <h2 class="card-title">Algunos Campos son de solo lectura</h2>
                        </div>
                        <div class="card-body">
                            <form wire:submit='updateOrdenServicio'>
                                <div class="row">
                                    <div class="input-group mb-3 col-md-4">
                                        <span id="nit" class="input-group-text col-md-5" for="nit">Orden
                                            Numero</span>
                                        <x-input wire:model="orden_numero" value="{{ $ordendeservicio->orden_numero }}"
                                            type="text" class="form-control col-md-7" name="nit" readonly />
                                    </div>
                                    <div class="input-group mb-3 col-md-4">
                                        <span id="created_at" class="input-group-text col-md-5" for="created_at">Fecha
                                            Solicitud</span>
                                        <x-input wire:model="fecha_creacion" value="{{ $ordendeservicio->created_at }}"
                                            type="text" class="form-control col-md-7" name="created_at" readonly />
                                    </div>
                                    <div class="input-group mb-3 col-md-4">
                                        <span id="tipo_evaluacion" class="input-group-text col-md-5"
                                            for="tipo_evaluacion">Tipo Evaluación</span>
                                        <select wire:model="tipo_evaluacion" class="form-control col-6 col-md-8"
                                            name="tipo_evaluacion">
                                            <option value="{{ $ordendeservicio->tipo_evaluacion }}" selected disabled>
                                                {{ $ordendeservicio->tipo_evaluacion }}</option>
                                            <hr>
                                            <option value="">Seleccione una opción</option>
                                            <option value="Pre-Ingreso">Pre-Ingreso</option>
                                            <option value="Periodico">Periódico</option>
                                            <option value="Reubicación">Reubicación</option>
                                            <option value="Cambio de Ocupación">Cambio de Ocupación</option>
                                            <option value="Egreso">Egreso</option>
                                            <option value="Post-incapacidad">Post-Incapacidad</option>
                                            <option value="Reintegro Laboral">Reintegro Laboral</option>
                                            <option value="Seguimiento">Seguimiento</option>
                                            <option value="Otro">Otro</option>
                                        </select>
                                    </div>
                                    <div class="input-group mb-3 col-md-4">
                                        <span id="medio_venta" class="input-group-text col-md-5" for="medio_venta">Medio
                                            de Venta</span>
                                        <x-input wire:model="medio_venta" value="{{ $ordendeservicio->medio_venta }}"
                                            type="text" class="form-control col-md-7" name="medio_venta" readonly />
                                    </div>
                                    <div class="input-group mb-3 col-md-4">
                                        <span id="enfasis" class="input-group-text col-md-5" for="enfasis">Enfasis
                                            en:
                                        </span>
                                        <select wire:model="enfasis" class="form-control col-6 col-md-8" name="enfasis">
                                            <option value="{{ $ordendeservicio->enfasis }}" disabled>
                                                {{ $ordendeservicio->enfasis }}</option>
                                            <hr>
                                            <option value="">Seleccione...</option>
                                            <option value="Medico">Medico</option>
                                            <option value="Psicologico">Psicologico</option>
                                            <option value="Fisioterapia">Fisioterapia</option>
                                            <option value="Terapia Ocupacional">Terapia Ocupacional</option>
                                            <option value="Fonoaudiologia">Fonoaudiologia</option>
                                            <option value="Psiquiatrico">Psiquiatrico</option>
                                            <option value="Nutricional">Nutricional</option>
                                            <option value="Otros">Otros</option>
                                        </select>
                                    </div>
                                    <div class="input-group mb-3 col-md-4">
                                        <span id="prestador_de_salud_id" class="input-group-text col-md-5"
                                            for="prestador_de_salud_id">Realizado por: </span>
                                        <select wire:model='prestador_de_salud_id' class="form-control col-6 col-md-8"
                                            name="prestador_de_salud_id">
                                            <option value="{{ $ordendeservicio->prestadorDeSalud->id }}">
                                                {{ $ordendeservicio->prestadorDeSalud->razon_social }}</option>
                                            <hr>
                                            @foreach ($prestadorDeSalud as $prestador)
                                                <option value="{{ $prestador->id }}">{{ $prestador->razon_social }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="input-group mb-3 col-md-4">
                                        <span id="paciente" class="input-group-text col-md-5" for="paciente">Nombre del
                                            Paciente</span>
                                        <x-input wire:model="fecha_creacion"
                                            value="{{ $ordendeservicio->paciente->nombres . ' ' . $ordendeservicio->paciente->apellidos }}"
                                            type="text" class="form-control col-md-7" name="paciente" readonly />
                                    </div>
                                    <div class="input-group mb-3 col-md-4">
                                        <span id="cliente" class="input-group-text col-md-5" for="cliente">Cliente
                                            remitente</span>
                                        <x-input wire:model="fecha_creacion"
                                            value="{{ $ordendeservicio->cliente->razon_social }}" type="text"
                                            class="form-control col-md-7" name="cliente" readonly />
                                    </div>
                                    <div class="input-group mb-3 col-md-4">
                                        <span id="cargo" class="input-group-text col-md-5" for="cargo">Cargo a
                                            desempeñar</span>
                                        <x-input wire:model="cargo"
                                            value="{{ $ordendeservicio->paciente->cargo_a_desempeñar }}" type="text"
                                            class="form-control col-md-7" name="cargo" readonly />
                                    </div>
                                    <div class="input-group mb-3 col-md-4">
                                        <span id="estado" class="input-group-text col-md-5"
                                            for="estado">Estado</span>
                                        <x-input wire:model="estado" value="{{ $ordendeservicio->estado }}"
                                            type="text" class="form-control col-md-7" name="estado" readonly />
                                    </div>
                                    {{-- Se genera un espacio para ordenar las tarifas --}}
                                    <div class="col-md-4 mb-3"></div>

                                    <div class="input-group mb-3 col-md-8">
                                        <span id="tarifas" class="input-group-text col-md-6" for="cargo">Tarifas
                                            Disponibles</span>
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Seleccionar</th>
                                                    <th>Nombre</th>
                                                    <th>Tipo</th>
                                                    <th>Precio</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($tarifasDisponibles as $tarifa)
                                                    <tr>
                                                        <td>
                                                            <x-input type="checkbox" wire:model="tarifasSeleccionadas"
                                                                value="{{ $tarifa->id }}" />
                                                        </td>
                                                        <td>{{ $tarifa->nombre }}</td>
                                                        <td>{{ $tarifa->tipo }}</td>
                                                        <td>$ {{ $tarifa->precio }} COP</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <x-input-error for="tarifasSeleccionadas" class="text-danger" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <button wire:loading.attr='disabled' type="submit"
                                            class="btn btn-outline-warning"><i class="fas fa-save"></i>
                                            <span wire:loading.remove>Editar</span>
                                            <span wire:loading><i class="fas fa-spinner fa-spin"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ route('admin.ordendeservicios.index') }}" type="submit"
                            class="btn btn-outline-primary"><i class="fas fa-arrow-left"></i>
                            Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
