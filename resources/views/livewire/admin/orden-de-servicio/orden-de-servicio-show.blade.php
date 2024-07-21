<div class="container-xxl">
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="card card-secondary card-outline mt-3">
                <div class="card-header bg-primary text-white ">
                    <h2 class="card-title ">Detalles de la orden de Servicio para el paciente <b>
                            {{ $ordendeservicio->paciente->nombres . ' ' . $ordendeservicio->paciente->apellidos }}</b>
                    </h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <h4 class="text-primary">Datos del Paciente</h4>
                            {{-- <div class="form-group"></div> --}}
                            <label>Tipo & Numero de documento</label>
                            <input type="text" class="form-control mb-2"
                                value="{{ $ordendeservicio->paciente->tipo_identificacion . ' # ' . $ordendeservicio->paciente->numero_identificacion }}"
                                disabled>


                            <label>Nombres & Apellidos</label>
                            <input type="text" class="form-control mb-2"
                                value="{{ $ordendeservicio->paciente->nombres . ' ' . $ordendeservicio->paciente->apellidos }}"
                                disabled>

                            <label>Tipo de sangre & Factor RH</label>
                            <input type="text" class="form-control mb-2"
                                value="{{ $ordendeservicio->paciente->tipo_sangre . ' ' . $ordendeservicio->paciente->factor_rh }}"
                                disabled>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="edad">Edad:</label>
                                    @php
                                        $fechaNacimiento = new DateTime(
                                            $ordendeservicio->paciente->fecha_de_nacimiento,
                                        );
                                        $hoy = new DateTime();
                                        $edad = $hoy->diff($fechaNacimiento);
                                        $edadCalculada = $edad->y;
                                    @endphp
                                    <input class="form-control mb-2" value="{{ $edadCalculada . ' años' }}" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label>Sexo</label>
                                    <input type="text" class="form-control mb-2"
                                        value="{{ $ordendeservicio->paciente->genero }}" disabled>
                                </div>
                            </div>
                            <label>Dirección Residencia</label>
                            <input type="text" class="form-control mb-2"
                                value="{{ $ordendeservicio->paciente->direccion_residencia . ' ' . $ordendeservicio->paciente->ciudad_residencia }}"
                                disabled>
                            <label>Ciudad Residencia</label>
                            <input type="text" class="form-control mb-2"
                                value="{{ $ordendeservicio->paciente->ciudad_residencia }}" disabled>
                            <label>Telefono</label>
                            <input type="text" class="form-control mb-2"
                                value="{{ $ordendeservicio->paciente->telefono }}" disabled>
                            <label>Correo Electronico</label>
                            <input type="text" class="form-control mb-2"
                                value="{{ $ordendeservicio->paciente->email }}" disabled>
                        </div>
                        <div class="col-md-3">
                            <h4 class="text-primary">Datos de la Orden de Servicios</h4>
                            <label>Orden número:</label>
                            <input type="text" class="form-control mb-2"
                                value="{{ $ordendeservicio->orden_numero }}" disabled>
                            <label>Fecha Solicitud:</label>
                            <input type="text" class="form-control mb-2" value="{{ $ordendeservicio->created_at }}"
                                disabled>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Tipo de Evaluación</label>
                                    <input type="text" class="form-control mb-2"
                                        value="{{ $ordendeservicio->tipo_evaluacion }}" disabled>
                                </div>
                                <div class="col-md-6"> <label>Enfasis en:</label>
                                    <input type="text" class="form-control mb-2"
                                        value="{{ $ordendeservicio->enfasis }}" disabled>
                                </div>
                            </div>
                            <label>Prestador:</label>
                            <input type="text" class="form-control mb-2"
                                value="{{ $ordendeservicio->prestadorDeSalud->razon_social }}" disabled>
                            <label>Lugar de Realización:</label>
                            <input type="text" class="form-control mb-2"
                                value="{{ $ordendeservicio->prestadorDeSalud->direccion }}" disabled>
                            <label>Ciudad & Departamento:</label>
                            <input type="text" class="form-control mb-2"
                                value="{{ $ordendeservicio->prestadorDeSalud->ciudad . ' - ' . $ordendeservicio->prestadorDeSalud->departamento }}"
                                disabled>
                            <label>Usuario de la solicitud:</label>
                            <input type="text" class="form-control mb-2" value="Usuario solicita" disabled>
                            <label>Estado de la Orden:</label>
                            <input type="text" class="form-control mb-2" value="{{ $ordendeservicio->estado }}"
                                disabled>

                        </div>
                        <div class="col-md-3">
                            <h4 class="text-primary text-center">Información del Cliente</h4>
                            <label>Cliente:</label>
                            <input type="text" class="form-control mb-2"
                                value="{{ $ordendeservicio->cliente->razon_social }}" disabled>
                            <label>NIT:</label>
                            <input type="text" class="form-control mb-2"
                                value="{{ $ordendeservicio->cliente->nit }}" disabled>
                            <label>Cargo a Desempeñar:</label>
                            <input type="text" class="form-control mb-2"
                                value="{{ $ordendeservicio->paciente->cargo_a_desempeñar }}" disabled>
                            <label>Actividad Economica:</label>
                            <input type="text" class="form-control mb-2"
                                value="{{ $ordendeservicio->cliente->actividad_economica }}" disabled>
                            <label>Correo Electronico:</label>
                            <input type="text" class="form-control mb-2"
                                value="{{ $ordendeservicio->cliente->email }}" disabled>
                            <label>Telefono:</label>
                            <input type="text" class="form-control mb-2"
                                value="{{ $ordendeservicio->cliente->telefono_contacto1 }}" disabled>
                            <label>Antigüedad:</label>
                            <input type="text" class="form-control mb-2"
                                value="{{ calcularAntiguedad($ordendeservicio->cliente->fecha_inicio_relacion_comercial) }}"
                                disabled>

                            @php
                                function calcularAntiguedad($fechaInicio)
                                {
                                    $fechaInicio = \Carbon\Carbon::parse($fechaInicio);
                                    $antiguedad = $fechaInicio->diff(now());
                                    $anos = $antiguedad->y;
                                    $meses = $antiguedad->m;
                                    return $anos . ' años y ' . $meses . ' meses';
                                }
                            @endphp

                        </div>
                        {{-- Agendamiento de Examenes --}}
                        <div class="col-md-3">
                            <h4 class="text-primary text-center">Procedimientos</h4>

                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Examen</th>
                                        <th>Tipo</th>
                                        <th>Valor</th>
                                        @if ($ordendeservicio->estado == 'Finalizado')
                                            <th>Estado</th>
                                        @elseif ($ordendeservicio->estado == 'En Proceso')
                                            <th>Re-programar</th>
                                        @else
                                            <th>Agendar</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ordendeservicio->tarifas as $examen)
                                        {{-- Se listan todos los examenes y se valida si el estado de la orden de servicio para saber si se programa o se re-programa --}}
                                        <tr>
                                            <td>{{ $examen->nombre }}</td>
                                            <td>{{ $examen->tipo }}</td>
                                            <td>$ {{ $examen->precio }} COP</td>
                                            @if ($ordendeservicio->estado == 'Finalizado')
                                                <td><i class="fas fa-check"></i></td>
                                            @elseif ($ordendeservicio->estado == 'En Proceso')
                                                <td>
                                                    <a href="{{ route('admin.agendas.edit', $ordendeservicio->id) }}"
                                                        class="btn btn-outline-warning btn-sm">
                                                        <i class="fas fa-calendar-alt"></i>
                                                    </a>
                                                </td>
                                            @else
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-outline-success btn-sm agendar-btn"
                                                        data-examen-id="{{ $examen->id }}" data-toggle="modal"
                                                        data-paciente-id="{{ $ordendeservicio->paciente->id }}"
                                                        data-toggle="modal" data-target="#modelId">
                                                        <i class="fas fa-calendar-alt"></i>
                                                    </button>
                                                </td>
                                        </tr>
                                    @endif
                                    @endforeach
                            </table>
                        </div>

                        <!-- Modal Agenda-->
                        <div class="modal fade" id="modelId" tabindex="-1" role="dialog"
                            aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Seleccione un fecha disponible:</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <form action="{{ route('admin.agendas.store') }}" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="pacienteId"
                                                        name="paciente_id" readonly hidden>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label for="nombre_examen">Agendar Examen:</label>
                                                        <input type="text" class="form-control" id="nombre_examen"
                                                            name="nombre_examen" readonly>
                                                        @error('nombre_examen')
                                                            <div class="error-key text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="tipo_examen_modal">Tipo de Examen:</label>
                                                        <input type="text" class="form-control"
                                                            name="tipo_examen_modal" id="tipo_examen_modal" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="especialista_id">Especialista:</label>
                                                    <select name="especialista_id" id="especialista_id" required
                                                        class="form-control">
                                                        <option>Seleccione un especialista</option>
                                                        @foreach ($especialistas as $especialista)
                                                            <option value="{{ $especialista->id }}">
                                                                {{ $especialista->nombres }}
                                                                {{ $especialista->apellidos }}
                                                                ({{ $especialista->especialidad_medica }})
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="fecha_inicio">Fecha & hora del Examen:</label>
                                                    <input type="datetime-local" class="form-control "
                                                        id="fecha_inicio" name="fecha_inicio" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="observaciones">Observaciones de Ingreso:</label>
                                                    <textarea class="form-control" name="observaciones" id="observaciones" cols="30" rows="3"></textarea>
                                                </div>
                                                @error('fecha_inicio')
                                                    <div class="error-key text-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                        <button type="submit" class="btn btn-outline-success btn-sm">Agendar</button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-danger"
                                            data-dismiss="modal">Cancelar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Confirmación -->

                        <!--Fin Modal Confirmación -->

                    </div>
                </div>

                <div class="card-footer text-center">
                    <div class="row">
                        <a href="{{ route('admin.ordendeservicios.index') }}"
                            class="btn btn-outline-primary col-md-3"><i class="fas fa-arrow-left"> </i> Volver</a>
                        <p class="col-md-4"></p>
                        <a href="{{ route('admin.ordendeservicios.edit', $ordendeservicio) }}"
                            class="btn btn-outline-warning col-md-4">Editar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
