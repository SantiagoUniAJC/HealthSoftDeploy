@extends('layouts.app')

@section('subtitle', 'Orden de Servicios Editar')

@section('content')
    @livewire('admin.orden-de-servicio.orden-de-servicio-edit', ['ordendeservicio'=> $ordendeservicio])
@endsection