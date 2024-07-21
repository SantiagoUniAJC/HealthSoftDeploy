@extends('layouts.app')

@section('subtitle', 'Formatos - Descargar')

@section('content')
    @livewire('admin.formatos.formatos-download')
@endsection
  
@section('js')
<script>
    document.getElementById('btnImprimir').addEventListener('click', function() {
        var formatoSeleccionado = document.getElementById('formato').value;
        if (formatoSeleccionado) {
            window.open(formatoSeleccionado, '_blank');
        } else {
            swal({
                title: "Seleccione un formato antes de imprimir!",
                text: "Click en el boton para Salir!",
                icon: "error",
                button: "Salir",
            });
        }
    });
</script>

@endsection