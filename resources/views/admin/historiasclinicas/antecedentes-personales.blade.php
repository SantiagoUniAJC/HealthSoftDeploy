@extends('layouts.app')

@section('subtitle', 'Historia - Clinica')

@section('content')
    @livewire('admin.historia-clinica.antecedentes-personales', ['paciente' => $paciente, 'cita' => $cita])
@endsection