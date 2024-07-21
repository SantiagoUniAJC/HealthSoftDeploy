@extends('layouts.app')

@section('subtitle', 'Historia - Clinica')

@section('content')
    @livewire('admin.historia-clinica.examenes-complementarios', ['paciente' => $paciente, 'cita' => $cita])
@endsection