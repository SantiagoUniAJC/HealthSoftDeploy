@extends('layouts.app')

@section('subtitle', 'Pacientes Detalles')

@section('content')
    @livewire('admin.paciente.paciente-show', ['paciente' => $paciente])
@endsection

@section('right-sidebar')
    <x-adminlte-alert icon="fas fa-file-signature" title="Consentimiento Informado" class="text-center">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('admin.pacientes.consentimiento-informado', $paciente->id) }}" class="btn btn-danger"
                    target="_blank">
                    <i class="fas fa-file-pdf"></i></a>
            </div>
        </div>
    </x-adminlte-alert>

    <x-adminlte-alert icon="fas fa-file-medical" title="Historia Clinica" class="text-center">
        {{-- <a href="{{ route('admin.historiasclinicas.generatePDF', $paciente->id) }}" class="btn btn-primary"
            target="_blank"><i class="fas fa-file-pdf"></i> {{ $paciente->nombres . ' ' . $paciente->apellidos }} </a> --}}
    </x-adminlte-alert>

    <x-adminlte-alert icon="fas fa-user" title="Fotografia" class="text-center">
        <a href="{{ route('admin.pacientes.foto-pacientes', $paciente->id) }}" class="btn btn-danger">
            <i class="fas fa-camera"> {{ $paciente->nombres . ' ' .  $paciente->apellidos }} </i>
        </a>
    </x-adminlte-alert>

    <x-adminlte-alert icon="fas fa-fingerprint" title="Huella Digital" class="text-center">
        <a href="{{ route('admin.pacientes.huella-pacientes', $paciente->id) }}" class="btn btn-danger">
            <i class="fas fa-fingerprint"> {{ $paciente->nombres . ' ' .  $paciente->apellidos }} </i></a>
    </x-adminlte-alert>

    <x-adminlte-alert icon="fas fa-upload" title="Adjuntar Documentos" class="text-center">
        <form action="{{ route('admin.pacientes.adjuntar-documentos', ['id' => $paciente->id]) }}" method="post"
            enctype="multipart/form-data">
            @csrf
            {{-- Campo oculto para el ID del paciente --}}
            <input type="hidden" id="paciente_id" name="paciente_id" value="{{ $paciente->id }}">

            {{-- Input para seleccionar el adjuntar --}}
            <div class="form-group">
                <input type="file" class="form-control-file form-control-sm" id="adjuntar" name="adjuntar" accept=".pdf" required>
                <small>Solo se permiten archivos PDF.</small><br><br>
                <x-input-error for="adjuntar" class="text-warning" />
            </div>

            {{-- Botón de enviar --}}
            <button type="submit" class="btn btn-danger">
                <i class="fas fa-upload"> {{ $paciente->nombres . ' ' .  $paciente->apellidos }}</i>
            </button>
        </form>
    </x-adminlte-alert>
@endsection
