@extends('layouts.app')

@section('subtitle', 'Formulario Crear')

@section('content')
    @livewire('admin.envios.form-modificar-app')
@endsection

@section('css')
    {{-- cargar la hoja de estilos --}}
    <link rel="stylesheet" href="{{ asset('css/style_neo.css') }}">

@endsection