@extends('layouts.app')

@section('subtitle', 'Pacientes')

@section('content')
    @livewire('admin.paciente.paciente-index')
@endsection

@section('js')
    <script>
        Livewire.on('confirmUser', pacienteId => {
            Swal.fire({
                title: "Estas seguro que deseas eliminar este paciente?",
                text: "Esta acción no se podra revertir!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "SI!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.dispatch('desactivarPaciente', {
                        pacienteId: pacienteId
                    });
                    Swal.fire({
                        title: "Eliminado!",
                        text: "El Paciente ha sido eliminado correctamente.",
                        icon: "success"
                    });
                }
            });
        });
    </script>
@endsection
