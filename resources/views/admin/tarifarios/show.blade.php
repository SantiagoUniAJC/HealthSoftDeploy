@extends('layouts.app')

@section('subtitle', 'Tarifario Detalles')

@section('content')
    @livewire('admin.tarifario.tarifario-show', ['cliente' => $cliente])
@endsection

@section('js')
    <script>
        Livewire.on('confirmUser', tarifaId => {
            Swal.fire({
                title: "Estas seguro que deseas eliminar este examen?",
                text: "Esta acción no se podra revertir!",
                icon: "error",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "SI!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.dispatch('destroy', {
                        tarifaId: tarifaId
                    });
                    Swal.fire({
                        title: "Eliminado!",
                        text: "El Examen ha sido eliminado correctamente.",
                        icon: "success"
                    });
                }
            });
        });
    </script>
@endsection