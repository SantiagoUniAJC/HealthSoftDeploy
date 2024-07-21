@extends('layouts.app')

@section('subtitle', 'Clientes')

@section('content')
    @livewire('admin.cliente.cliente-index')
@endsection

@section('js')
    <script>
        Livewire.on('confirmUser', clienteId => {
            Swal.fire({
                title: "Estas seguro que deseas eliminar este Cliente?",
                text: "Esta acción no se podra revertir!",
                icon: "error",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "SI!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.dispatch('desactivarCliente', {
                        clienteId: clienteId
                    });
                    Swal.fire({
                        title: "Eliminado!",
                        text: "El Cliente ha sido eliminado correctamente.",
                        icon: "success"
                    });
                }
            });
        });
    </script>
@endsection
