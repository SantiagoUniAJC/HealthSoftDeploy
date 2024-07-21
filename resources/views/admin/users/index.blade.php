@extends('layouts.app')

@section('subtitle', 'Usuarios')

@section('content')
    @livewire('admin.usuario.usuario-index')
@endsection

@section('js')
    <script>
        Livewire.on('confirmUser', userId => {
            Swal.fire({
                title: "Estas seguro que deseas eliminar este Usuario?",
                text: "Esta acción no se podra revertir!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "SI!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.dispatch('disable', {
                        userId: userId
                    });
                    Swal.fire({
                        title: "Eliminado!",
                        text: "El Usuario sido eliminado correctamente.",
                        icon: "success"
                    });
                }
            });
        });
    </script>
@endsection

