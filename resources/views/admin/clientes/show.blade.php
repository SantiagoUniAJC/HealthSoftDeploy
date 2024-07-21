@extends('layouts.app')

@section('subtitle', 'Clientes Detalles')

@section('content')
    @livewire('admin.cliente.cliente-show', ['cliente' => $cliente])
@endsection