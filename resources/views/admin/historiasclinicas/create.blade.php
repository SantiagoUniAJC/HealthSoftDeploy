@extends('layouts.app')

@section('subtitle', 'Historia - Clinica')

@section('content')
    @livewire('admin.historia-clinica.historia-clinica-create', ['paciente' => $paciente, 'cita' => $cita])
@endsection