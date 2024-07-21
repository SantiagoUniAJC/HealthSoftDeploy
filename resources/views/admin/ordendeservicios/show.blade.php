@extends('layouts.app')

@section('subtitle', 'Orden de Servicios Detalles')

@section('content')
    @livewire('admin.orden-de-servicio.orden-de-servicio-show', ['ordendeservicio'=> $ordendeservicio])
@endsection

@section('js')
    <script>
        // Capturar la informacion para enviarla al Modal
        document.querySelectorAll('.agendar-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                // Obtener los datos de la fila de la tabla
                const fila = this.closest('tr');
                const nombreExamen = fila.querySelector('td:nth-child(1)').textContent.trim();
                const tipoExamen = fila.querySelector('td:nth-child(2)').textContent.trim();
                // const valorExamen = fila.querySelector('td:nth-child(3)').textContent.trim();
                const pacienteId = this.getAttribute('data-paciente-id');

                // Establecer los valores en los campos del formulario dentro del modal
                document.getElementById('nombre_examen').value = nombreExamen;
                document.getElementById('tipo_examen_modal').value = tipoExamen;
                // document.getElementById('valor_examen_modal').value = valorExamen;
                document.getElementById('pacienteId').value = pacienteId;

            });
        });
    </script>
@endsection