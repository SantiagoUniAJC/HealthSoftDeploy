@extends('layouts.app')

@section('subtitle', 'Notas - Medicas')

@section('content')
    @livewire('admin.notas-medicas.notas-medicas-index')
@endsection

@section('js')
    <script>
        Livewire.on('confirmUser', notamedicaId => {
            Swal.fire({
                title: "Estas seguro que deseas cerrar la nota medica de este paciente?",
                text: "Esta acción no se podra revertir!",
                icon: "error",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "SI!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.dispatch('cerrarNotaMedica', {
                        notamedicaId: notamedicaId
                    });
                    Swal.fire({
                        title: "Cerrada!",
                        text: "La Nota Medica ha sido cerrada correctamente.",
                        icon: "success"
                    });
                }
            });
        });
    </script>
@endsection
