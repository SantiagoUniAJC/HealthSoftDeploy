<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orden de Servicio</title>

    {{-- Estilos CSS --}}
    <link rel="stylesheet" href="css/membrete-pdf.css">
    <link rel="stylesheet" href="css/historiaclinica-pdf.css">


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
        <div class="">
            <div class="OrdenServicio">
                <h1>Orden de Servicio</h1>
            </div>
            <div class="datos">
                <table>
                    <tbody>
                        <tr>
                            <th colspan="3">Orden Servicio No.</th>
                            <td colspan="4">{{ $ordendeservicio->orden_numero }}</td>

                        </tr>
                        <tr>
                            <th colspan="3">Tipo Evaluación:</th>
                            <td colspan="4">{{ $ordendeservicio->tipo_evaluacion }}</td>
                        </tr>
                        <tr>
                            <th colspan="3"> Énfasis en:</th>
                            <td colspan="4">{{ $ordendeservicio->enfasis }}</td>
                        </tr>
                        <tr>
                            <th>Fecha Solicitud</th>
                            <td>{{ $ordendeservicio->created_at->format('Y-m-d') }}</td>
                            <th>Cliente:</th>
                            <td colspan="4">{{ $ordendeservicio->cliente->razon_social }}</td>
                        </tr>
                        <tr>
                            <th colspan="2">Lugar de Realización:</th>
                            <td colspan="5">
                                {{ $ordendeservicio->prestadorDeSalud->razon_social . ' - ' . $ordendeservicio->prestadorDeSalud->ciudad }}
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">Dirección:</th>
                            <td colspan="5">{{ $ordendeservicio->prestadorDeSalud->direccion }}</td>
                        </tr>
                        <tr>
                            <th>Departamento:</th>
                            <td>{{ $ordendeservicio->prestadorDeSalud->departamento }}</td>
                            <th>Ciudad:</th>
                            <td colspan="4">{{ $ordendeservicio->prestadorDeSalud->ciudad }}</td>
                        </tr>
                        <tr>
                            <th>Teléfono Celular:</th>
                            <td colspan="2">{{ $ordendeservicio->prestadorDeSalud->telefono_celular }}</td>
                            <th>Telefono Fijo:</th>
                            <td colspan="3">{{ $ordendeservicio->prestadorDeSalud->telefono_fijo }}</td>
                        </tr>
                        <tr>
                            <th>Atendido por:</th>
                            <td colspan="6">{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>Paciente:</th>
                            <td colspan="2">
                                {{ $ordendeservicio->paciente->nombres . ' ' . $ordendeservicio->paciente->apellidos }}
                            </td>
                            <th>Identificación:</th>
                            <td colspan="3">
                                {{ $ordendeservicio->paciente->tipo_identificacion . ' # ' . $ordendeservicio->paciente->numero_identificacion }}
                            </td>
                        </tr>
                        <tr>
                            <th>Fecha de Nacimiento:</th>
                            <td colspan="2">{{ $ordendeservicio->paciente->fecha_de_nacimiento }}</td>
                            <th>Edad:</th>
                            <td colspan="3">{{ $edad }} años</td>
                        </tr>
                        <tr>
                            <th>Tipo de Sangre</th>
                            <td colspan="2">{{ $ordendeservicio->paciente->tipo_sangre }}</td>
                            <th>Factor RH</th>
                            <td colspan="3">{{ $ordendeservicio->paciente->factor_rh }}</td>
                        </tr>
                        <tr>
                            <th>Genero:</th>
                            <td colspan="2">{{ $ordendeservicio->paciente->genero }}</td>
                            <th>Estado Civil:</th>
                            <td colspan="3">{{ $ordendeservicio->paciente->estado_civil }}</td>
                        </tr>
                        <tr>
                            <th>Dirección de residencia:</th>
                            <td colspan="3">{{ $ordendeservicio->paciente->direccion_residencia }}</td>
                            <th>Telefono:</th>
                            <td colspan="2">{{ $ordendeservicio->paciente->telefono }}</td>
                        </tr>
                        <tr>
                            <th>Correo Electrónico:</th>
                            <td colspan="2">{{ $ordendeservicio->paciente->email }}</td>
                            <th>Cargo a desempeñar</th>
                            <td colspan="3">{{ $ordendeservicio->paciente->cargo_a_desempeñar }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="OrdenServicio">
                <h1>Procedimientos a Realizar: </h1>
            </div>
            <div class="datos">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Codigo CUP</th>
                            <th>Procedimiento</th>
                            <th>Fecha Atención</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ordendeservicio->tarifas as $index => $procedimiento)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $procedimiento->codigo }}</td>
                                <td>{{ $procedimiento->nombre }}</td>
                                <td>
                                    @foreach ($citas as $cita)
                                        {{ $cita->fecha_inicio }}
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </section>

    <!--FOOTER-->
    <footer>
        <span class="fecha"> Fecha de impresión:
            <?php echo date('d/m/Y H:i:s'); ?>
        </span>
        <span class="pag">Página: 1 / 1</span>
        <hr>
        <p> <img src="{{ base_path('public/images/iconos/email.png') }}" class="iconoEmail" alt="Email">
            <span class="textEmail"> Email </span>
            <img src="{{ base_path('public/images/iconos/phone.png') }}" class="iconoPhone" alt="Telefonos">
            <span class="textPhone"> Telefonos </span>
            <img src="{{ base_path('public/images/iconos/location.png') }}" class="iconoLocation" alt="Dirección">
            <span class="textLocation"> Dirección </span>
        </p>
        <p> <span class="dirEmail"> sashseq@gmail.com </span> <span class="numberPhone"> 6023594949 - 3044312755 </span>
            <span class="numberLocation"> Carrera 80 # 38 - 17 </span>
        </p>
    </footer>
</body>

</html>
