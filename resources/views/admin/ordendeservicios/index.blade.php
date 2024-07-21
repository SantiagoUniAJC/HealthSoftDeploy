@extends('layouts.app')

@section('subtitle', 'Orden de Servicios')

@section('content')
    @livewire('admin.orden-de-servicio.index')
@endsection

@section('js')
    <script>
        Livewire.on('confirmUser', ordenservicioId => {
            Swal.fire({
                title: "Estas seguro que deseas cerrar esta Orden de Servicio?",
                text: "Esta acción no se podra revertir!",
                icon: "error",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "SI!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.dispatch('cerrarOrden', {
                        ordenservicioId: ordenservicioId
                    });
                    Swal.fire({
                        title: "Cerrada!",
                        text: "Orden de Servicio cerrada correctamente.",
                        icon: "success"
                    });
                }
            });
        });
    </script>
@endsection
