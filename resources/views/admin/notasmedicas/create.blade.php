@extends('layouts.app')

@section('subtitle', 'Notas - Medicas: Crear')

@section('content')
    @livewire('admin.notas-medicas.notas-medicas-create', ['paciente' => $paciente])
@endsection