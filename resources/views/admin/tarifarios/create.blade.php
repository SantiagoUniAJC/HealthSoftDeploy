@extends('layouts.app')

@section('subtitle', 'Tarifario Crear')

@section('content')
    @livewire('admin.tarifario.tarifario-create', ['cliente' => $cliente])
@endsection

@section('js')
    <script>
        Livewire.on('examenDuplicado', () => {
            Swal.fire({
                title: "El examen ya esta en la lista!",
                text: "Click para volver!",
                icon: "error",
            });
        })
    </script>
@endsection
