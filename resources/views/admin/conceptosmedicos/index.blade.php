@extends('layouts.app')

@section('subtitle', 'Conceptos Médicos')

@section('content')
    @livewire('admin.concepto-medico.concepto-medico-index')
@endsection

@section('js')
    <script>
        Livewire.on('confirmUser', conceptoId => {
            Swal.fire({
                title: "Estas seguro que deseas cerrar este concepto médico??",
                text: "Esta acción no se podra revertir!",
                icon: "error",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "SI!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.dispatch('cerrarConceptoMedico', {
                        conceptoId: conceptoId
                    });
                    Swal.fire({
                        title: "Cerrado!",
                        text: "El Concepto Médico ha sido cerrado correctamente.",
                        icon: "success"
                    });
                }
            });
        });
    </script>
@endsection