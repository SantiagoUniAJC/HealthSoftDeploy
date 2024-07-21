@extends('layouts.app')

@section('subtitle', 'Tarifario - Editar')

@section('content')
    @livewire('admin.tarifario.tarifario-edit', ['tarifa' => $tarifa])
@endsection