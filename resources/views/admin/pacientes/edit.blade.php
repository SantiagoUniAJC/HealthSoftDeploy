@extends('layouts.app')

@section('subtitle', 'Pacientes Editar')

@section('content')
    @livewire('admin.paciente.paciente-edit', ['paciente' => $paciente])
@endsection