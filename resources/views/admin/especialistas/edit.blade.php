@extends('layouts.app')

@section('subtitle', 'Especialista Editar')

@section('content')
    @livewire('admin.especialista.especialista-edit', ['especialista' => $especialista])
@endsection

