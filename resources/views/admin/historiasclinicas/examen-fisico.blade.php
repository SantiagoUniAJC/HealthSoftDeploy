@extends('layouts.app')

@section('subtitle', 'Historia - Clinica')

@section('content')
    @livewire('admin.historia-clinica.examen-fisico', ['paciente' => $paciente, 'cita' => $cita])
@endsection