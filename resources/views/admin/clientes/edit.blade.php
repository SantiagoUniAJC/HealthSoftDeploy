@extends('layouts.app')

@section('subtitle', 'Clientes Editar')

@section('content')
    @livewire('admin.cliente.cliente-edit', ['cliente' => $cliente])
@endsection