<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orden de Servicio</title>

    {{-- Estilos CSS --}}
    <link rel="stylesheet" href="css/membrete-pdf.css">
    <link rel="stylesheet" href="css/certificado-pdf.css">


</head>

<body>
    <!--HEADER-->
    <header>
        <div class="custom-container">
            <div class="header">
                <div class="info">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th class="">IPS: </th>
                                <td colspan="2">HSEQ S.A.S </td>
                            </tr>
                            <tr>
                                <th>NIT:</th>
                                <td colspan="2">800.000.000-1</td>
                            </tr>
                            <tr>
                                <th>Licencia SST:</th>
                                <td colspan="2">123.456.786-9</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="logo">
                    <img src="{{ base_path('public/images/Logo-Consentimiento.jpeg') }}" alt="logo" width="70%">
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="OrdenServicio">
            <h1>Certificado Médico Ocupacional</h1>
        </div>
        <div class="contenedor">
            <div class="certificado">
                <table>
                    <tbody>
                        <tr>
                            <th colspan="2">Fecha:</th>
                            <td colspan="4">{{ $now->format('d/m/Y') }}</td>
                        </tr>
                        <tr>
                            <th colspan="2">Orden de Servicio No.</th>
                            <td colspan="4">{{ $concepto->ordenDeServicio->orden_numero }}</td>
                        </tr>
                        <tr>
                            <th colspan="2">Realizado en:</th>
                            <td colspan="4">
                                {{ $concepto->ordenDeServicio->prestadorDeSalud->ciudad . ' ( ' . $concepto->ordenDeServicio->prestadorDeSalud->departamento . ' ) ' }}
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">Tipo de Evaluación & Énfasis</th>
                            <td colspan="4">
                                {{ $concepto->ordenDeServicio->tipo_evaluacion . ' - ' . $concepto->ordenDeServicio->enfasis }}
                            </td>
                        </tr>
                        <tr>
                            <th>Paciente:</th>
                            <td colspan="5">
                                {{ $concepto->ordenDeServicio->paciente->nombres . ' ' . $concepto->ordenDeServicio->paciente->apellidos }}
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">Tipo & No. Documento</th>
                            <td colspan="4">
                                {{ $concepto->ordenDeServicio->paciente->tipo_identificacion . ' # ' . $concepto->ordenDeServicio->paciente->numero_identificacion }}
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">Fecha de Nacimiento:</th>
                            <td colspan="2">{{ $concepto->ordenDeServicio->paciente->fecha_de_nacimiento }}</td>
                            <th>Edad</th>
                            <td>{{ $edad }} Años</td>
                        </tr>
                        {{-- <tr>
                            <th>Sexo</th>
                            <td>{{ $concepto->ordenDeServicio->paciente->genero }}</td>
                            <th colspan="3">Tipo & RH</th>
                            <td>{{ $concepto->ordenDeServicio->paciente->tipo_sangre . ' ' . $concepto->ordenDeServicio->paciente->factor_rh }}
                            </td>
                        </tr>
                        <tr>
                            <th>Peso</th>
                            <td>
                                @foreach ($concepto->ordenDeServicio->paciente->examenFisico as $examen)
                                    {{ number_format($examen->peso, 0, '.') }} Kg
                                @endforeach
                            </td>
                            <th>Talla</th>
                            <td colspan="3">
                                @foreach ($concepto->ordenDeServicio->paciente->examenFisico as $examen)
                                    {{ number_format($examen->talla, 0, '.') }} cm
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>IMC</th>
                            <td>
                                @foreach ($concepto->ordenDeServicio->paciente->examenFisico as $examen)
                                    {{ $examen->imc }}
                                @endforeach
                            </td>
                            <th>Telefono</th>
                            <td colspan="3">
                                {{ $concepto->ordenDeServicio->paciente->telefono }}
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">Direccion de Residencia</th>
                            <td colspan="4">
                                {{ $concepto->ordenDeServicio->paciente->direccion_residencia }}
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">Cargo a Desempeñar</th>
                            <td colspan="4">
                                {{ $concepto->ordenDeServicio->paciente->cargo_a_desempeñar }}
                            </td>
                        </tr>
                        <tr>
                            <th>Cliente</th>
                            <td colspan="5">
                                {{ $concepto->ordenDeServicio->cliente->razon_social }}
                            </td>
                        </tr> --}}
                    </tbody>
                </table><br>
                <table>
                    <tbody>
                        <tr>
                            <th>Sexo</th>
                            <td>{{ $concepto->ordenDeServicio->paciente->genero }}</td>
                            <th colspan="3">Tipo & RH</th>
                            <td>{{ $concepto->ordenDeServicio->paciente->tipo_sangre . ' ' . $concepto->ordenDeServicio->paciente->factor_rh }}
                            </td>
                        </tr>
                        <tr>
                            <th>Peso</th>
                            <td>
                                @foreach ($concepto->ordenDeServicio->paciente->examenFisico as $examen)
                                    {{ number_format($examen->peso, 0, '.') }} Kg
                                @endforeach
                            </td>
                            <th>Talla</th>
                            <td colspan="3">
                                @foreach ($concepto->ordenDeServicio->paciente->examenFisico as $examen)
                                    {{ number_format($examen->talla, 0, '.') }} cm
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>IMC</th>
                            <td>
                                @foreach ($concepto->ordenDeServicio->paciente->examenFisico as $examen)
                                    {{ $examen->imc }}
                                @endforeach
                            </td>
                            <th>Telefono</th>
                            <td colspan="3">
                                {{ $concepto->ordenDeServicio->paciente->telefono }}
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">Direccion de Residencia</th>
                            <td colspan="4">
                                {{ $concepto->ordenDeServicio->paciente->direccion_residencia }}
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">Cargo a Desempeñar</th>
                            <td colspan="4">
                                {{ $concepto->ordenDeServicio->paciente->cargo_a_desempeñar }}
                            </td>
                        </tr>
                        <tr>
                            <th>Cliente</th>
                            <td colspan="5">
                                {{ $concepto->ordenDeServicio->cliente->razon_social }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="foto">
                <img src="{{ base_path('public/images/avatar.png') }}" alt="logo">
            </div>
        </div>
        <div class="parrafo">
            <p>Certificado emitido de acuerdo con la Evaluación Médica Ocupacional realizada el <span>
                @foreach ($concepto->ordenDeServicio->paciente->examenFisico as $examen)
                {{ $examen->created_at->format('d/m/Y') }}
            @endforeach</span>. Para emitir el concepto médico ocupacional se analizaron los siguientes exámenes complementarios:!</p>
        </div>
    </section>

    <!--FOOTER-->
    <footer>
        <span class="fecha"> Fecha de impresión:
            <?php echo date('d/m/Y H:i:s'); ?>
        </span>
        <span class="pag">Página: 1 / 1</span>
        <hr>
        <p> <img src=" base_path('public/images/iconos/email.png') " class="iconoEmail" alt="Email">
            <span class="textEmail"> Email </span>
            <img src=" base_path('public/images/iconos/phone.png') " class="iconoPhone" alt="Telefonos">
            <span class="textPhone"> Telefonos </span>
            <img src=" base_path('public/images/iconos/location.png') " class="iconoLocation" alt="Dirección">
            <span class="textLocation"> Dirección </span>
        </p>
        <p> <span class="dirEmail"> sashseq@gmail.com </span> <span class="numberPhone"> 6023594949 - 3044312755 </span>
            <span class="numberLocation"> Carrera 80 # 38 - 17 </span>
        </p>
    </footer>
</body>

</html>
