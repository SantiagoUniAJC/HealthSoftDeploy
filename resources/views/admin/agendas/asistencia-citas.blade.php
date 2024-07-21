@extends('layouts.app')

@section('subtitle', 'Agenda Asistencia')

@section('content')
    @livewire('admin.agenda.agenda-asistencia-citas')
@endsection

@section('js')
    <script>
        Livewire.on('confirmUser', citaId => {
            Swal.fire({
                title: '¿Está seguro?',
                text: "¡Confirmar asistencia de la cita!",
                icon: 'success',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '¡Sí, confirmar!',
                cancelButtonText: '¡No, cancelar!',
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.dispatch('confirmarCita', {
                        citaId: citaId
                    });

                    Swal.fire(
                        '¡Confirmado!',
                        '¡La asistencia de la cita ha sido confirmada!',
                        'success'
                    )
                }
            })
        });

        // Cancelar cita
        Livewire.on('cancelUser', citaId => {
            Swal.fire({
                title: '¿Está seguro?',
                text: "¡Cancelar asistencia de la cita!",
                icon: 'error',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: '¡Sí, cancelar!',
                cancelButtonText: '¡No, regresar!',
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.dispatch('cancelarCita', {
                        citaId: citaId
                    });

                    Swal.fire(
                        '¡Cancelado!',
                        '¡La asistencia de la cita ha sido cancelada!',
                        'success'
                    )
                }
            })
        });
    </script>
@endsection
