@extends('layouts.app')

@section('subtitle', 'Historia - Clinica')

@section('content')
    @livewire('admin.historia-clinica.diagnostico', ['paciente' => $paciente, 'cita' => $cita])
@endsection