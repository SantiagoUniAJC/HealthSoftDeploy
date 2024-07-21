<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-secondary card-outline mt-3">
                <div class="card-header bg-primary text-center text-white ">
                    <h2 class="card-title">Detalles del Paciente</h2>
                </div>
                <div class="card-body">
                    @if ($paciente)
                        <div class="row">
                            <div class="col-md-3 mb-4 table-bordered">
                                @if ($paciente->path_fotografia)
                                    <div class="text-center">
                                        <img src="{{ $paciente->path_fotografia }}"
                                            alt="Imagen de : {{ $paciente->nombres }} no disponible" class="img-fluid">
                                    </div>
                                @else
                                    <button class="btn btn-outline-primary mt-5 ml-3 btn-hover-white"><a
                                            href="{{ route('admin.pacientes.foto-pacientes', $paciente->id) }}">Tomar
                                            Fotografia de {{ $paciente->nombres }}
                                            <i class="fas fa-camera"></i></a>
                                    </button>
                                @endif
                            </div>
                            <div class="col-md-3 mb-4 ml-4 table-bordered">
                                @if ($paciente->path_huella)
                                    <div class="text-center">
                                        <img src="{{ $paciente->path_huella }}"
                                            alt="Huella de : {{ $paciente->nombres }} no disponible" class="img-fluid">
                                    </div>
                                @else
                                    <button class="btn btn-outline-primary mt-5 ml-3 btn-hover-white"><a
                                            href="{{ route('admin.pacientes.huella-pacientes', $paciente->id) }}">
                                            Huella Digital de {{ $paciente->nombres }}
                                            <i class="fas fa-fingerprint"></i></a>
                                    </button>
                                @endif
                            </div>
                            <div class="col-md-4 ml-4">
                                <div class="input-group mb-3">
                                    <span class="input-group-text col-md-6">Nombres:</span>
                                    <input class="form-control col-md-8 bg-white" placeholder="{{ $paciente->nombres }}"
                                        readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text col-md-6">Apellidos:</span>
                                    <input class="form-control col-md-8 bg-white"
                                        placeholder="{{ $paciente->apellidos }}" readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text col-md-6">Tipo de Identificación:</span>
                                    <input class="form-control col-md-8 bg-white"
                                        placeholder="{{ $paciente->tipo_identificacion }}" readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text col-md-6">Número Identificación:</span>
                                    <input class="form-control col-md-8 bg-white"
                                        placeholder="{{ $paciente->numero_identificacion }}" readonly>
                                </div>

                            </div>
                            <div class="row">
                                <div class="input-group mb-3 col-md-4">
                                    <span class="input-group-text col-md-6">Género:</span>
                                    <input class="form-control bg-white" placeholder="{{ $paciente->genero }}"
                                        readonly>
                                </div>
                                <div class="input-group mb-3 col-md-4">
                                    <span class="input-group-text col-md-6">Fecha Nacimiento:</span>
                                    <input class="form-control bg-white"
                                        placeholder="{{ $paciente->fecha_de_nacimiento }}" readonly>
                                </div>
                                <div class="input-group mb-3 col-md-4">
                                    <span class="input-group-text col-md-6">Edad:</span>
                                    @php
                                        $fechaNacimiento = new DateTime($paciente->fecha_de_nacimiento);
                                        $hoy = new DateTime();
                                        $edad = $hoy->diff($fechaNacimiento);
                                        $edadCalculada = $edad->y;
                                    @endphp
                                    <input class="form-control bg-white" value="{{ $edadCalculada . ' años' }}"
                                        readonly>
                                </div>
                                <div class="input-group mb-3 col-md-4">
                                    <span class="input-group-text col-md-6">Tipo Sangre:</span>
                                    <input class="form-control bg-white" placeholder="{{ $paciente->tipo_sangre }}"
                                        readonly>
                                </div>
                                <div class="input-group mb-3 col-md-4">
                                    <span class="input-group-text col-md-6">Factor RH:</span>
                                    <input class="form-control bg-white" placeholder="{{ $paciente->factor_rh }}"
                                        readonly>
                                </div>
                                <div class="input-group mb-3 col-md-4">
                                    <span class="input-group-text col-md-6">Grupo Etnico:</span>
                                    <input class="form-control bg-white" placeholder="{{ $paciente->grupo_etnico }}"
                                        readonly>
                                </div>
                                <div class="input-group mb-3 col-md-4">
                                    <span class="input-group-text col-md-6">Nivel Estudio:</span>
                                    <input class="form-control bg-white" placeholder="{{ $paciente->nivel_estudio }}"
                                        readonly>
                                </div>
                                <div class="input-group mb-3 col-md-4">
                                    <span class="input-group-text col-md-6">Estado Civil:</span>
                                    <input class="form-control bg-white" placeholder="{{ $paciente->estado_civil }}"
                                        readonly>
                                </div>
                                <div class="input-group mb-3 col-md-4">
                                    <span class="input-group-text col-md-6">Departamento:</span>
                                    <input class="form-control bg-white"
                                        placeholder="{{ $paciente->departamento_residencia }}" readonly>
                                </div>
                                <div class="input-group mb-3 col-md-4">
                                    <span class="input-group-text col-md-6">Ciudad:</span>
                                    <input class="form-control bg-white"
                                        placeholder="{{ $paciente->ciudad_residencia }}" readonly>
                                </div>
                                <div class="input-group mb-3 col-md-4">
                                    <span class="input-group-text col-md-6">Dirección Residencia:</span>
                                    <input class="form-control bg-white"
                                        placeholder="{{ $paciente->direccion_residencia }}" readonly>
                                </div>
                                <div class="input-group mb-3 col-md-4">
                                    <span class="input-group-text col-md-6">Estrato:</span>
                                    <input class="form-control bg-white" placeholder="{{ $paciente->estrato }}"
                                        readonly>
                                </div>
                                <div class="input-group mb-3 col-md-4">
                                    <span class="input-group-text col-md-6">Zona Residencial:</span>
                                    <input class="form-control bg-white"
                                        placeholder="{{ $paciente->zona_residencial }}" readonly>
                                </div>
                                <div class="input-group mb-3 col-md-4">
                                    <span class="input-group-text col-md-6">Comuna:</span>
                                    <input class="form-control bg-white" placeholder="{{ $paciente->comuna }}"
                                        readonly>
                                </div>
                                <div class="input-group mb-3 col-md-4">
                                    <span class="input-group-text col-md-6">Teléfono:</span>
                                    <input class="form-control bg-white" placeholder="{{ $paciente->telefono }}"
                                        readonly>
                                </div>
                                <div class="input-group mb-3 col-md-4">
                                    <span class="input-group-text col-md-6">Email:</span>
                                    <input class="form-control bg-white" placeholder="{{ $paciente->email }}"
                                        readonly>
                                </div>
                                <div class="input-group mb-3 col-md-4">
                                    <span class="input-group-text col-md-6">EPS:</span>
                                    <input class="form-control bg-white" placeholder="{{ $paciente->eps }}" readonly>
                                </div>
                                <div class="input-group mb-3 col-md-4">
                                    <span class="input-group-text col-md-6">ARL:</span>
                                    <input class="form-control bg-white" placeholder="{{ $paciente->arl }}" readonly>
                                </div>
                                <div class="input-group mb-3 col-md-4">
                                    <span class="input-group-text col-md-6">AFP:</span>
                                    <input class="form-control bg-white" placeholder="{{ $paciente->afp }}" readonly>
                                </div>
                                <div class="input-group mb-3 col-md-4">
                                    <span class="input-group-text col-md-6">Cargo a Desempeñar:</span>
                                    <input class="form-control bg-white"
                                        placeholder="{{ $paciente->cargo_a_desempeñar }}" readonly>
                                </div>
                                <div class="input-group mb-3 col-md-4">
                                    <span class="input-group-text col-md-6">Acompañante:</span>
                                    <input class="form-control bg-white" placeholder="{{ $paciente->acompañante }}"
                                        readonly>
                                </div>
                                <div class="input-group col-md-12">
                                    @if ($paciente->archivosAdjuntos->count() > 0)
                                        <span class="input-group-text col-md-12 ">Documentos adjuntos:</span>
                                        <ul>
                                            @foreach ($paciente->archivosAdjuntos as $adjunto)
                                                {{-- // icono de desacarga --}}
                                                <i class="fas fa-download"> <a
                                                        href="{{ route('admin.pacientes.descargar-documento', $adjunto->id) }}"
                                                        target="_blank">{{ $adjunto->nombre }}</a>
                                                </i><i class="mr-3"></i>
                                            @endforeach
                                        </ul>
                                    @else
                                        <span class="input-group-text col-md-12 ">Documentos adjuntos:</span>
                                        <ul>
                                            <li>No hay documentos adjuntos</li>
                                        </ul>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @else
                        <p>paciente no encontrado</p>
                    @endif
                </div>
                <div class="card-footer text-center">
                    <div class="row">
                        <a href="{{ route('admin.paciente.pacientes.index') }}"
                            class="btn btn-outline-primary col-md-4"><i class="fas fa-arrow-left"> </i> Volver</a>
                        <p class="col-md-4"></p>
                        <a href="{{ route('admin.paciente.pacientes.edit', $paciente) }}"
                            class="btn btn-outline-warning col-md-4">Editar Paciente</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
