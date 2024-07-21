@extends('layouts.app')

@section('subtitle', 'Agenda Reprogramación')

@section('content')
    @livewire('admin.agenda.agenda-edit', ['cita' => $cita])
@endsection