<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Historia Clinica</title>

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
                    <table class="tabla">
                        <tbody>
                            <tr>
                                <th class="teh">IPS: </th>
                                <td colspan="2">HSEQ S.A.S </td>
                            </tr>
                            <tr>
                                <th class="teh">NIT:</th>
                                <td colspan="2">800.000.000-1</td>
                            </tr>
                            <tr>
                                <th class="teh">Licencia SST:</th>
                                <td colspan="2">123.456.786-9</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="logo">
                    <figure>
                        <img src="{{ base_path('public/images/Logo-Consentimiento.jpeg') }}" alt="logo"
                            width="70%">
                        <figcaption>Historia Clinica #
                            {{ number_format($paciente->numero_identificacion, 0, '.', '.') }}
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </header>

    <!--MAIN-->
    <section>
        {{-- Historia Clínica --}}
        <div>
            <h1 class="titulo">Historia Clínica</h1>
            <div class="paciente">
                <h3>Informacion del Paciente:</h3>
            </div>
            <div class="datos">
                <table>
                    <tr>
                        <th>Nombres</th>
                        <td colspan="2">{{ $paciente->nombres }}</td>
                        <th>Apellidos</th>
                        <td colspan="3">{{ $paciente->apellidos }}</td>
                    </tr>
                    <tr>
                        <th colspan="2">Tipo Identificación</th>
                        <td>{{ $paciente->tipo_identificacion }}</td>
                        <th colspan="3">Numero Identificación</th>
                        <td>{{ $paciente->numero_identificacion }}</td>
                    </tr>
                    <tr>
                        <th>Sexo</th>
                        <td>{{ $paciente->genero }}</td>
                        <th colspan="2">Tipo de Sangre</th>
                        <td>{{ $paciente->tipo_sangre }}</td>
                        <th>RH</th>
                        <td>{{ $paciente->factor_rh }}</td>
                    </tr>
                    <tr>
                        <th>Grupo Etnico</th>
                        <td>{{ $paciente->grupo_etnico }}</td>
                        <th colspan="2">Fecha de Nacimiento</th>
                        <td>{{ $paciente->fecha_de_nacimiento }}</td>
                        <th>Edad</th>
                        <td>{{ $edad }} años</td>
                    </tr>
                    <tr>
                        <th>Estado Civil</th>
                        <td colspan="2">{{ $paciente->estado_civil }}</td>
                        <th colspan="2">Nivel Educativo</th>
                        <td colspan="2">{{ $paciente->nivel_estudio }}</td>
                    </tr>
                    <tr>
                        <th colspan="3">Departamento Residencia</th>
                        <td colspan="2">{{ $paciente->departamento_residencia }}</td>
                        <th>Estrato</th>
                        <td>{{ $paciente->estrato }}</td>
                    </tr>
                    <tr>
                        <th colspan="2">Ciudad Residencia</th>
                        <td colspan="2">{{ $paciente->ciudad_residencia }}</td>
                        <th>Zona Residencial</th>
                        <td colspan="2">{{ $paciente->zona_residencial }}</td>
                    </tr>
                    <tr>
                        <th>Comuna</th>
                        <td>{{ $paciente->comuna }}</td>
                        <th colspan="2">Dirección Residencia</th>
                        <td colspan="3">{{ $paciente->direccion_residencia }}</td>
                    </tr>
                    <tr>
                        <th>Telefono</th>
                        <td colspan="2">{{ $paciente->telefono }}</td>
                        <th>Email</th>
                        <td colspan="3">{{ $paciente->email }}</td>

                    </tr>
                    <tr>
                        <th>EPS</th>
                        <td>{{ $paciente->eps }}</td>
                        <th>ARL</th>
                        <td colspan="2">{{ $paciente->arl }}</td>
                        <th>AFP</th>
                        <td>{{ $paciente->afp }}</td>
                    </tr>
                    <tr>
                        <th>Cargo a Desempeñar</th>
                        <td colspan="2">{{ $paciente->cargo_a_desempeñar }}</td>
                        <th>Acompañante</th>
                        <td colspan="3">{{ $paciente->acompañante }}</td>
                    </tr>
                </table>

                <div class="paciente">
                    <h3>Informacion Laboral Actual:</h3>
                </div>

                <table>
                    <tr>
                        <th>Area de Trabajo</th>
                        <td colspan="2">
                            @foreach ($paciente->informacionLaboral as $info)
                                {{ $info->area_de_trabajo }}
                            @endforeach
                        </td>
                        <th colspan="2">Descripción del Cargo</th>
                        <td colspan="2">
                            @foreach ($paciente->informacionLaboral as $info)
                                {{ $info->descripcion_del_cargo }}
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>Turno de Trabajo</th>
                        <td colspan="2">
                            @foreach ($paciente->informacionLaboral as $info)
                                {{ $info->turno_de_trabajo }}
                            @endforeach
                        </td>
                        <th>Rango Salarial</th>
                        <td colspan="3">
                            @foreach ($paciente->informacionLaboral as $info)
                                {{ $info->rango_salarial }}
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>Fecha Ingreso</th>
                        <td colspan="2">
                            @foreach ($paciente->informacionLaboral as $info)
                                {{ $info->fecha_ingreso }}
                            @endforeach
                        </td>
                        <th>Factores de Riego</th>
                        <td colspan="3">
                            @foreach ($paciente->informacionLaboral as $info)
                                {{ $info->factores_de_riesgo_para_el_cargo }}
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>Exposición a Factores</th>
                        <td colspan="6">
                            @foreach ($paciente->informacionLaboral as $info)
                                {{ $info->exposicion_a_factores_de_riesgo }}
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>Tipos Factores de Riego</th>
                        <td colspan="6">
                            @foreach ($paciente->informacionLaboral as $info)
                                {{ $info->tipos_factores_de_riesgo }}
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>Uso de EPP</th>
                        <td colspan="6">
                            @foreach ($paciente->informacionLaboral as $info)
                                {{ $info->uso_de_epp }}
                            @endforeach
                        </td>
                    </tr>
                </table>

                <div class="paciente">
                    <h3>Motivo de Consulta:</h3>
                </div>

                <table>
                    <tr>
                        <th>Motivo de la Consulta</th>
                        <td colspan="6">
                            @foreach ($paciente->motivoConsulta as $motivo)
                                {{ $motivo->motivo_consulta }}
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>Descripción de la Consulta</th>
                        <td colspan="6">
                            @foreach ($paciente->motivoConsulta as $motivo)
                                {{ $motivo->descripcion_consulta }}
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>Estado Actual de Salud</th>
                        <td colspan="2">
                            @foreach ($paciente->motivoConsulta as $motivo)
                                {{ $motivo->estado_actual_de_salud }}
                            @endforeach
                        </td>
                        <th colspan="2">Restricciones Medicas Vigentes</th>
                        <td colspan="2">
                            @foreach ($paciente->motivoConsulta as $motivo)
                                {{ $motivo->restricciones_medicas_vigentes }}
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>Descripción Estado de Salud Actual</th>
                        <td colspan="6">
                            @foreach ($paciente->motivoConsulta as $motivo)
                                {{ $motivo->descripcion_estado_actual_de_salud }}
                            @endforeach
                        </td>
                    </tr>
                </table>


                <div class="paciente">
                    <h3>Antecendentes Ocupacionales:</h3>
                </div>

                <table>
                    <tr>
                        <th>Empresa Anterior</th>
                        <td colspan="2">
                            @foreach ($paciente->motivoConsulta as $motivo)
                                {{ $motivo->empresa_anterior }}
                            @endforeach
                        </td>
                        <th>Cargo Anterior</th>
                        <td colspan="3">
                            @foreach ($paciente->motivoConsulta as $motivo)
                                {{ $motivo->cargo_anterior }}
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>Tiempo Laborado</th>
                        <td colspan="2">
                            @foreach ($paciente->motivoConsulta as $motivo)
                                {{ number_format($motivo->tiempo_laborado, 0, '.', '.') }} años
                            @endforeach
                        </td>
                        <th>Factores de Riesgo</th>
                        <td colspan="3">
                            @foreach ($paciente->motivoConsulta as $motivo)
                                {{ $motivo->factores_riesgo }}
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>Uso de EPP</th>
                        <td colspan="2">
                            @foreach ($paciente->motivoConsulta as $motivo)
                                {{ $motivo->uso_epp }}
                            @endforeach
                        </td>
                        <th>Motivo de Retiro</th>
                        <td colspan="3">
                            @foreach ($paciente->motivoConsulta as $motivo)
                                {{ $motivo->motivo_retiro }}
                            @endforeach
                        </td>

                    </tr>
                    <tr>
                        <th>Fecha de Retiro</th>
                        <td colspan="2">
                            @foreach ($paciente->motivoConsulta as $motivo)
                                {{ $motivo->fecha_retiro }}
                            @endforeach
                        </td>
                        <th colspan="2">Accidentes Laborales</th>
                        <td colspan="2">
                            @foreach ($paciente->motivoConsulta as $motivo)
                                {{ $motivo->accidentes_laborales }}
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>Accidentes Laborales</th>
                        <td colspan="2">
                            @foreach ($paciente->motivoConsulta as $motivo)
                                {{ $motivo->accidentes_laborales }}
                            @endforeach
                        </td>
                        <th colspan="2">Accidentes Laborales Empresa Anterior</th>
                        <td colspan="2">
                            @foreach ($paciente->motivoConsulta as $motivo)
                                {{ $motivo->accidentes_laborales_empresa_anterior }}
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>Fecha del Accidente Laboral</th>
                        <td colspan="2">
                            @foreach ($paciente->motivoConsulta as $motivo)
                                {{ $motivo->fecha_accidente_laboral }}
                            @endforeach
                        </td>
                        <th>Fue Calificada ?</th>
                        <td colspan="3">
                            @foreach ($paciente->motivoConsulta as $motivo)
                                {{ $motivo->fue_calificada_e_indemnizada }}
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>Descripción del Accidente</th>
                        <td colspan="6">
                            @foreach ($paciente->motivoConsulta as $motivo)
                                {{ $motivo->descripcion_accidente_laboral }}
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>Secuelas del Accidente Laboral</th>
                        <td colspan="2">
                            @foreach ($paciente->motivoConsulta as $motivo)
                                {{ $motivo->secuelas }}
                            @endforeach
                        </td>
                        <th>Descripcion de las Secuelas</th>
                        <td colspan="3">
                            @foreach ($paciente->motivoConsulta as $motivo)
                                {{ $motivo->descripcion_secuelas }}
                            @endforeach
                        </td>
                    </tr>
                </table>
            </div>
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
