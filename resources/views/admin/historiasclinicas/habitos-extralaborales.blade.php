@extends('layouts.app')

@section('subtitle', 'Historia - Clinica')

@section('content')
    @livewire('admin.historia-clinica.habitos-extralaborales', ['paciente' => $paciente, 'cita' => $cita])
@endsection