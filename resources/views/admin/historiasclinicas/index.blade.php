@extends('layouts.app')

@section('subtitle', 'Historia - Clinica')

@section('content')
    @livewire('admin.historia-clinica.historia-clinica-index')
@endsection

@section('js')
    <script>
        Livewire.on('confirmUser', historiaId => {
            Swal.fire({
                title: "Estas seguro que deseas eliminar esta Historia Clinica?",
                text: "Esta acción no se podra revertir!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "SI!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.dispatch('desactivarHistoriaClinica', {
                        historiaId: historiaId
                    });
                    Swal.fire({
                        title: "Eliminado!",
                        text: "La Historia Clinica ha sido eliminada correctamente.",
                        icon: "success"
                    });
                }
            });
        });
    </script>
@endsection