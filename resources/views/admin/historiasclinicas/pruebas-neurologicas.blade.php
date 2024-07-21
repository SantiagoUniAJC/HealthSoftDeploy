@extends('layouts.app')

@section('subtitle', 'Historia - Clinica')

@section('content')
    @livewire('admin.historia-clinica.pruebas-neurologicas', ['paciente' => $paciente, 'cita' => $cita])
@endsection