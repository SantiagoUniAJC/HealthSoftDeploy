@extends('layouts.app')

@section('subtitle', 'Dashboard')

@section('right-sidebar')
    <div class="p-4">
        @can('admin.users.index')
            <a href="{{ route('admin.users.index') }}">
                <x-adminlte-info-box
                    title="Registro = {{ app('App\Http\Controllers\Admin\UserController')->contarColaboradores() }}"
                    text="Registro Colaboradores" icon="fas fa-lg fa-users text-orange" theme="gradient-warning"
                    icon-theme="dark" />
            </a>
        @endcan
        @can('admin.pacientes.index')
            <a href="{{ route('admin.paciente.pacientes.index') }}">
                <x-adminlte-info-box
                    title="Registro = {{ app('App\Http\Controllers\Admin\PacienteController')->contarPacientes() }}"
                    text="Registro Pacientes" icon="fas fa-lg fa-user-plus text-green" theme="success" icon-theme="dark" />
            </a>
        @endcan
        @can('admin.especialistas.index')
            <a href="{{ route('admin.especialista.especialistas.index') }}">
                <x-adminlte-info-box
                    title="Registros = {{ app('App\Http\Controllers\Admin\EspecialistaController')->contarEspecialistas() }}"
                    text="Especialistas de la Salud" icon="fas fa-lg fa-user-md text-primary" theme="gradient-primary"
                    icon-theme="white" />
            </a>
        @endcan
        @can('dashboard')
            <div>
                <h5 class="mb-2 text-lg">COPIAS DE SEGURIDAD</h5>
                <x-adminlte-info-box title="Consultar" icon="fas fa-lg fa-download" icon-theme="purple" theme="gradient-info" />

                <x-adminlte-info-box title="Realizar" icon="fas fa-lg fa-upload" icon-theme="red" theme="gradient-info" />
            </div>
        @endcan
    </div>
@endsection

@section('content')
    <h3>Templates Seleccionados para el Home de HealthCare</h3>
    <ol>
        <li><a href="https://preview.themeforest.net/item/maxi-health-medical-health-html-template/full_screen_preview/13619290" target="_blank">Opcion Uno</a></li>
        <li><a href="https://preview.themeforest.net/item/merit-health-medical-business-html-template-rtl-ready/full_screen_preview/45346315" target="_blank">Opcion Dos</a></li>
        <li><a href="http://preview.themeforest.net/item/medical-plus-health-and-medical-html-template/full_screen_preview/19772206" target="_blank">Opcion Tres</a></li>
        <li><a href="https://preview.themeforest.net/item/heart-care-heart-and-medical-care/full_screen_preview/20686789" target="_blank">Opcion Cuatro</a></li>
    </ol>
    <h1>Mas Opciones?</h1>
@endsection


