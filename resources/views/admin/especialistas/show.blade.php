@extends('layouts.app')

@section('subtitle', 'Especialista Detalles')

@section('right-sidebar')
    @if (!$tiene_firma)
        <x-adminlte-alert icon="fas fa-file-signature" title="Registrar Firma" class="text-center">
            <a href="{{ route('admin.especialistas.firma-especialista', $especialista->id) }}" class="btn btn-danger text-decoration-none"
                target="_blank" >
                {{ $especialista->especialidad_medica . ' ' . $especialista->nombres }}</a>
        </x-adminlte-alert>
    @else
        <x-adminlte-alert theme="danger" icon="fas fa-file-signature" title="Firma Registrada" class="text-center">
            {{-- generar un vista previa de la firma --}}
            <div>
                <img src="{{ asset($especialista->path_firma) }}" alt="Firma no encontrada" srcset="" width="80%">
            </div>
        </x-adminlte-alert>
    @endif

@endsection

@section('content')
    @livewire('admin.especialista.especialista-show', ['especialista' => $especialista])
@endsection
