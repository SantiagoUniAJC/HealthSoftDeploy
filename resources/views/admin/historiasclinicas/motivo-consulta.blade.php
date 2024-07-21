@extends('layouts.app')

@section('subtitle', 'Historia - Clinica')

@section('content')
    @livewire('admin.historia-clinica.motivo-consulta', ['paciente' => $paciente, 'cita' => $cita])
@endsection