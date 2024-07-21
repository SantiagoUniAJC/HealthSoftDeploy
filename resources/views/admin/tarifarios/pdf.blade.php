<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tarifario</title>

    {{-- Estilos CSS --}}
    <link rel="stylesheet" href="css/membrete-pdf.css">

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

    <!--MAIN-->
    <section>
        <div class="consentimiento">
            <h3 class="titulos">Tarifario: </h3>
        </div>
        <!--DATOS GENERALES-->
        <table>
            <thead>
                <tr>
                    <th>Razon Social</th>
                    <th>NIT</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Asesor Comercial</th>
                    <th>Ciudad</th>
                    <th>Validez</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $cliente->razon_social }}</td>
                    <td>{{ number_format(floatval($cliente->nit), 0, '.', '.') }}</td>
                    <td>{{ $cliente->email }}</td>
                    <td>{{ $cliente->telefono_contacto1 }}</td>
                    <td>{{ $tarifa->user->name }}</td>
                    <td>{{ $cliente->ciudad }}</td>
                    <td>{{ $tarifa->created_at->addYear()->format('Y-m-d') }}</td>

                </tr>
            </tbody>
        </table>
    </section>
    <section>
        <table>
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Producto</th>
                    <th>Tipo</th>
                    <th>Precio unitario</th>
                    <th>Descuento</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tarifas as $tarifa)
                    <tr>
                        <td>{{ $tarifa->codigo }}</td>
                        <td>{{ $tarifa->nombre }}</td>
                        <td>LAB</td>
                        <td>$ {{ number_format($tarifa->precio, 0, ',', '.') }} COP</td>
                        <td>{{ $tarifa->descuento }}%</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
    <table>
        <tr>
            <td class="">
                <table class="table_datosFtxt">
                    <tr>
                        <td>
                            <p class="parrafo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum maxime
                                eos minus illum dignissimos voluptas? Expedita optio eligendi hic pariatur quisquam
                                ratione, ipsam ipsa temporibus perspiciatis, alias iure sequi sit.</p>
                        </td>
                    </tr>
                </table>
            </td>
            <td class="datosFinales">
                <table class="table_datosfinales">
                    <tr>
                        <td>
                            <p>
                                Subtotal:
                            </p>
                        </td>
                        <td>
                            <p>
                                $ {{ number_format($subtotal, 0, ',', '.') }} COP
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                Descuento :
                            </p>
                        </td>
                        <td>
                            <p>
                                $ {{ number_format($descuento, 0, ',', '.') }} COP
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                IVA:
                            </p>
                        </td>
                        <td>
                            <p>
                                $ {{ number_format($iva, 0, ',', '.') }} COP
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                Total:
                            </p>
                        </td>
                        <td>
                            <p>
                                $ {{ number_format($total, 0, ',', '.') }} COP
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!--FIRMA-->
    <div class="firma">
        Firma del cliente
    </div>

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
