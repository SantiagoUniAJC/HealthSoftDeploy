@extends('layouts.app')

@section('subtitle', 'Especialistas')

@section('content')
    @livewire('admin.especialista.especialista-index')
@endsection

@section('js')
    <script>
        Livewire.on('confirmUser', especialistaId => {
            Swal.fire({
                title: "Estas seguro que deseas eliminar este Especialista?",
                text: "Esta acción no se podra revertir!",
                icon: "error",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "SI!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.dispatch('desactivarEspecialista', {
                        especialistaId: especialistaId
                    });
                    Swal.fire({
                        title: "Eliminado!",
                        text: "El Especialista ha sido eliminado correctamente.",
                        icon: "success"
                    });
                }
            });
        });
    </script>
@endsection
