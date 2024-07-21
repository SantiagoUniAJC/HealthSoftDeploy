@extends('layouts.app')

@section('subtitle', 'Historia - Clinica')

@section('content')
    @livewire('admin.historia-clinica.info-laboral-actual', ['paciente' => $paciente, 'cita' => $cita])
@endsection

@section('js')
    {{-- Obtiene las antiguedades de la empresa y del cargo --}}
    <script>
        document.getElementById('fecha_ingreso').addEventListener('change', function() {
            var fechaIngreso = new Date(this.value);
            var fechaActual = new Date();
            var diff = fechaActual - fechaIngreso;
            var years = Math.floor(diff / (1000 * 60 * 60 * 24 * 365));
            var months = Math.floor((diff % (1000 * 60 * 60 * 24 * 365)) / (1000 * 60 * 60 * 24 * 30.44));

            document.getElementById('antiguedad_empresa_anios').value = years;
            document.getElementById('antiguedad_empresa_meses').value = months;
            document.getElementById('antiguedad_cargo_anios').value = years;
            document.getElementById('antiguedad_cargo_meses').value = months;
        });
    </script>

    {{-- Función para mostrar el modal correspondiente al tipo de exposición seleccionado --}}
    <script>
        document.getElementById('exposicion_select').addEventListener('change', function() {
            var selectedOption = this.value;
            if (selectedOption === 'Fisicos') {
                $('#modelIdFisicos').modal('show');
            } else if (selectedOption === 'Quimicos') {
                $('#modelIdQuimicos').modal('show');
            }
        });
    </script>

    <script>
        function cerrarModal() {
            $('#modelIdFisicos').modal('hide');
        }

        function cerrarModalQuimicos() {
            $('#modelIdQuimicos').modal('hide');
        }
    </script>
@endsection

@push('js')
<script>

    $(document).ready(function() {

        let iBox = new _AdminLTE_InfoBox('ibUpdatable');

        let updateIBox = () =>
        {
            // Update data.
            let rep = Math.floor(1000 * Math.random());
            let idx = rep < 100 ? 0 : (rep > 500 ? 2 : 1);
            let progress = Math.round(rep * 100 / 1000);
            let text = rep + '/1000';
            let icon = 'fas fa-lg fa-medal ' + ['text-primary', 'text-light', 'text-warning'][idx];
            let description = progress + '% reputation completed to reach next level';

            let data = {text, icon, description, progress};
            iBox.update(data);
        };

        setInterval(updateIBox, 5000);
    })

</script>
@endpush
