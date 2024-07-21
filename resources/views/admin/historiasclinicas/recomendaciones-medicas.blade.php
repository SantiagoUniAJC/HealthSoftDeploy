@extends('layouts.app')

@section('subtitle', 'Historia - Clinica')

@section('content')
    @livewire('admin.historia-clinica.recomendaciones-medicas', ['paciente' => $paciente, 'cita' => $cita])
@endsection
