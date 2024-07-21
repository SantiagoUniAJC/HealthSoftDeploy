@extends('layouts.app')

@section('subtitle', 'Historia - Clinica')

@section('content')
    @livewire('admin.historia-clinica.antecedentes-familiares', ['paciente' => $paciente, 'cita' => $cita])
@endsection