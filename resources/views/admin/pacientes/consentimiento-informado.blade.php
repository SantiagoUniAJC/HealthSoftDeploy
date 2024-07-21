<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consentimiento Informado</title>

    {{-- Estilos CSS --}}
    <link rel="stylesheet" href="css/membrete-pdf.css">

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
                    <img src="{{ base_path('public/images/Logo-Consentimiento.jpeg') }}" alt="logo" width="70%">
                </div>
            </div>
        </div>
    </header>

    <!--MAIN-->
    <section>
        <div class="consentimiento">
            <h3 class="titulos">Consentimiento Informado</h3>
        </div>
        <p class="parrafo">
            Yo <b>{{ $paciente->nombres . ' ' . $paciente->apellidos }}</b> identificado(a) con
            <b>{{ $paciente->tipo_identificacion }}</b> # <b>{{ $paciente->numero_identificacion }}</b> certifico que he
            sido informado(a) acerca de los objetivos, beneficios y riesgos de las valoraciones de salud a la que seré
            sometido(a). Tengo claro que el procedimiento que me realicen me permitirá conocer mi estado de salud, y que
            los resultados permiten que el/los profesionales de <b> HSEQ S.A.S </b> (IPS) me brinden
            recomendaciones
            para mantenerme saludable..
        </p>
        <p class="parrafo">
            Entiendo que, para el desarrollo del o los exámenes a realizar seré interrogado(a) y examinado(a) por el/los
            profesional(es) de salud. Igualmente fui informado(a) que, en el caso de requerir pruebas de sangre, se me
            realizará la extracción de la muestra por venopunción y me explicaron explícitamente que en el procedimiento
            puedo sentir dolor y que la inserción de la aguja puede causar un pequeño hematoma (morado) que mejora
            espontáneamente en siguientes días. Que puedo presentar un sangrado más prolongado de lo esperado,
            especialmente si me encuentro tomando anticoagulantes como aspirina, pero se
            puede controlar fácilmente haciendo presión suave en el sitio de punción con un algodón seco por 2 a 5
            minutos. También comprendo que, a pesar de las medidas de bioseguridad para evitar el contagio de COVID-19
            que toma la IPS, actualmente existe un
            riesgo de contagio del virus en cualquier lugar público.
        </p>
        <p class="parrafo">
            Manifiesto que he leído y comprendido perfectamente lo anterior, y que en pleno uso de mis facultades
            físicas y mentales expreso mi consentimiento y autorizo a los profesionales de la IPS a realizar en mí, los
            siguientes exámenes: Audiometría Ocupacional, Optometría, Evaluación Médica Ocupacional, Hemograma IV Metodo
            Automatico.
        </p>
        <p class="parrafo">
            Entiendo que la realización de los exámenes solicitados es voluntaria, y manifiesto que tuve la oportunidad
            de rechazar mi consentimiento antes de que fueran realizados. Igualmente me comprometo a no omitir o alterar
            información acerca de mi estado de salud.
        </p>
        <p class="parrafo">
            Cuando mi evaluación médica haga parte de un proceso laboral, autorizo a la IPS para que envíe a la empresa
            contratante, el Certificado Médico Ocupacional resultante de este proceso. Si la empresa cuenta con Médico
            de Salud Ocupacional, autorizo que la IPS informe al profesional sobre las condiciones de mi estado de
            salud, y le remita copia de mi historia clínica ocupacional para que dé cumplimiento a los Programas de
            Medicina Preventiva y del Trabajo según lo establecido en la normatividad vigente.
        </p>
        <p class="parrafo">
            Expresamente manifiesto que entiendo que mis datos personales suministrados serán objeto de Tratamiento por
            parte de la IPS, en los términos de la Ley 1581 de 2012. Así mismo, entiendo que mis datos personales,
            registros fotográficos y registro de firma, quedarán asociados exclusivamente a mi historia clínica
            ocupacional No. <b> {{ $paciente->numero_identificacion }}</b>.
        </p>
        <p class="parrafo constancia">Para constancia se firma en Cali (Valle Del Cauca) el día {{ $now }}.</p>
    </section>

    <!--FIRMAS-->

    <div class="firmadigital">
        @if ($paciente->path_firma)
            <img src="{{ base_path('public/' . $paciente->path_firma) }}" alt="Firma del Paciente" class="firmadigital">
        @else
            <button class="btn"><a href="{{ route('admin.pacientes.firma-pacientes', $paciente->id) }}">Crear
                    firma de {{ $paciente->nombres }}</a></button>
        @endif
    </div>
    <div class="firma">
        <span> Firma digitalizada del paciente: {{ $paciente->nombres . ' ' . $paciente->apellidos }}</span>
        <p>{{ $paciente->tipo_identificacion . ' # ' . $paciente->numero_identificacion }}</p>
    </div>

    <p class="parrafo certifico">Certifico que la firma digital de este documento fue registrada por mí, y autorizo a
        <b> HSEQ S.A.S </b> para que esta sea usada en cada uno de los exámenes mencionados en la parte superior
        de este consentimiento.
    </p>


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
        <p> <span class="dirEmail"> sashseq@gmail.com </span> <span class="numberPhone"> 6023594949 - 3044312755 </span> <span class="numberLocation"> Carrera 80 # 38 - 17 </span>
        </p>
    </footer>

</body>

</html>