<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-secondary card-outline mt-3">
                <div class="card-header bg-primary text-center text-white ">
                    <h2 class="card-title">Detalles del Especialista</h2>
                </div>
                <div class="card-body">
                    @if ($especialista)
                        <div class="row">
                            @if ($especialista->path_fotografia == null)
                                <div class="col-md-4 mb-4">
                                    <img src="{{ asset('images/iconos/especialista_sin_foto.jpg') }}" alt="{{ $especialista->nombres . ' ' . $especialista->apellidos . ': ' . 'imagen del especialista, no cargada.' }}" class="img-fluid" width="90%">
                                </div>
                            @else
                                <div class="col-md-4 mb-4">
                                    <img src="{{ $especialista->path_fotografia }}" alt="{{ $especialista->nombres }}"
                                        class="img-fluid">
                                </div>
                            @endif
                            <div class="col-md-4">
                                <div class="input-group mb-3">
                                    <span class="input-group-text col-md-6">Nombres:</span>
                                    <input type="text" class="form-control col-md-6 bg-white"
                                        placeholder="{{ $especialista->nombres }}" readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text col-md-6">Apellidos:</span>
                                    <input type="text" class="form-control col-md-6 bg-white"
                                        placeholder="{{ $especialista->apellidos }}" readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text col-md-6">Tipo Identificación:</span>
                                    <input type="text" class="form-control col-md-6 bg-white"
                                        placeholder="{{ $especialista->tipo_identificacion }}" readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text col-md-6">Número Identificación:</span>
                                    <input type="text" class="form-control col-md-6 bg-white"
                                        placeholder="{{ $especialista->numero_identificacion }}" readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text col-md-6">Género:</span>
                                    <input type="text" class="form-control col-md-6 bg-white"
                                        placeholder="{{ $especialista->genero }}" readonly>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text col-md-6">Fecha de Nacimiento:</span>
                                    <input type="text" class="form-control col-md-6 bg-white"
                                        placeholder="{{ $especialista->fecha_de_nacimiento }}" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-group mb-3 col-md-6">
                                    <span class="input-group-text col-md-4">Dirección de Residencia:</span>
                                    <input type="text" class="form-control col-md-6 bg-white"
                                        placeholder="{{ $especialista->direccion_residencia }}" readonly>
                                </div>
                                <div class="input-group mb-3 col-md-6">
                                    <span class="input-group-text col-md-4">Teléfono Celular:</span>
                                    <input type="text" class="form-control col-md-6 bg-white"
                                        placeholder="{{ $especialista->telefono_contacto1 }}" readonly>
                                </div>
                                <div class="input-group mb-3 col-md-6">
                                    <span class="input-group-text col-md-4">Teléfono Fijo:</span>
                                    <input type="text" class="form-control col-md-6 bg-white"
                                        placeholder="{{ $especialista->telefono_contacto2 }}" readonly>
                                </div>
                                <div class="input-group mb-3 col-md-6">
                                    <span class="input-group-text col-md-4">Email:</span>
                                    <input type="text" class="form-control col-md-6 bg-white"
                                        placeholder="{{ $especialista->email }}" readonly>
                                </div>
                                <div class="input-group mb-3 col-md-6">
                                    <span class="input-group-text col-md-4">Especialidad Médica:</span>
                                    <input type="text" class="form-control col-md-6 bg-white"
                                        placeholder="{{ $especialista->especialidad_medica }}" readonly>
                                </div>
                                <div class="input-group mb-3 col-md-6">
                                    <span class="input-group-text col-md-4">Registro Médico:</span>
                                    <input type="text" class="form-control col-md-6 bg-white"
                                        placeholder="{{ $especialista->registro_medico }}" readonly>
                                </div>
                                <div class="input-group mb-3 col-md-6">
                                    <span class="input-group-text col-md-4">Fecha de Inicio Labor:</span>
                                    <input type="text" class="form-control col-md-6 bg-white"
                                        placeholder="{{ $especialista->fecha_inicio_labor }}" readonly>
                                </div>
                                <div class="input-group mb-3 col-md-6">
                                    <span class="input-group-text col-md-4">Experiencia:</span>
                                    <input type="text" class="form-control col-md-6 bg-white"
                                        placeholder="{{ $especialista->experiencia }}" readonly>
                                </div>
                                <div class="input-group mb-3 col-md-6">
                                    <span class="input-group-text col-md-4">Certificaciones:</span>
                                    <input type="text" class="form-control col-md-6 bg-white"
                                        placeholder="{{ $especialista->certificaciones }}" readonly>
                                </div>
                            </div>
                        </div>
                    @else
                        <p>Especialista no encontrado</p>
                    @endif
                </div>
                <div class="card-footer text-center">
                    <div class="row">
                        <a href="{{ route('admin.especialista.especialistas.index') }}" type="submit"
                            class="btn btn-outline-primary col-md-4">Volver</a>
                        <p class="col-md-4"></p>
                        <a href="{{ route('admin.especialista.especialistas.edit', $especialista->id) }}"
                            class="btn btn-outline-warning col-md-4">Editar Especialista</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
