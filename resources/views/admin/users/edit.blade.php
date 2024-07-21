@extends('layouts.app')

@section('subtitle', 'Usuarios Edit')

@section('content')
    @livewire('admin.usuario.usuario-edit', ['user' => $user])
@endsection

