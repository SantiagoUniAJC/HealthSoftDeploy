@extends('layouts.app')

@section('subtitle', 'Historia - Clinica')

@section('content')
    @livewire('admin.historia-clinica.revision-por-sistemas', ['paciente' => $paciente, 'cita' => $cita])
@endsection