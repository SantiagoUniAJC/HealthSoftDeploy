@extends('layouts.app')

@section('subtitle', 'Historia - Clinica')

@section('content')
    @livewire('admin.historia-clinica.sistema-vigilancia-epidemiologica', ['paciente' => $paciente, 'cita' => $cita])
@endsection