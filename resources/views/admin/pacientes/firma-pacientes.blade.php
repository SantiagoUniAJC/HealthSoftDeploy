@extends('layouts.app')

@section('subtitle', 'Pacientes Firma')

@section('content')
    <div class="row">
        <div class="container">
            <div class="card card-secondary card-outline mt-3">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="card-title">Crear Firma del Paciente : <span class="text-bold text-lightblue">
                                    {{ $paciente->nombres . ' ' . $paciente->apellidos }} </span></h3>
                        </div>
                        <p class="col-md-2"></p>
                        <div class="col-md-4">
                            <a href="{{ route('admin.paciente.pacientes.index') }}" type="submit"
                                class="btn btn-outline-primary"><i class="fas fa-arrow-left"> </i> Volver</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <div id="signature-pad" class="signature-pad">
                            <form action="guardarfirmaPacientes" enctype="multipart/form-data" method="post">
                                @csrf
                                {{-- Agregar un campo oculto para el ID del paciente --}}
                                <x-adminlte-input type="hidden" id="paciente_id" value="{{ $paciente->id }}"
                                    name="paciente_id" />
                                {{-- El resto del formulario --}}
                                <x-adminlte-input name="firma" type="file" hidden />
                                <x-adminlte-button label="Guardar Firma" type="submit" theme="outline-success"
                                    icon="fas fa-thumbs-up" id="btnGuardarFirma" hidden>
                                    Guardar Firma
                                </x-adminlte-button>
                            </form>
                            <div class="mt-3">
                                <canvas id="canvas" class="canvas"></canvas>
                            </div>
                        </div>
                        <button class="btn btn-outline-success mt-3" id="btnCrearFirma">Crear Firma</button>
                        <button class="btn btn-outline-secondary mt-3" id="btnLimpiar">Limpiar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <style>
        .canvas {
            border: 1px solid black;
        }
    </style>
@endsection

@section('js')
    <script>
        window.onload = () => {
            //Inicialización de variables y selección de elementos del DOM
            const $canvas = document.querySelector("#canvas"),
                $btnCrearFirma = document.querySelector("#btnCrearFirma"),
                $btnLimpiar = document.querySelector("#btnLimpiar"),
                $btnGuardarFirma = document.querySelector("#btnGuardarFirma");

            const contexto = $canvas.getContext("2d");
            const COLOR_PINCEL = "black";
            const COLOR_FONDO = "white";
            const GROSOR = 2;

            let xAnterior = 0,
                yAnterior = 0,
                xActual = 0,
                yActual = 0;
            const obtenerXReal = (client) => event.clientX - $canvas.getBoundingClientRect().left;
            const obtenerYReal = (client) => event.clientY - $canvas.getBoundingClientRect().top;

            let haComenzadoDibujo = false;

            const limpiarCanvas = () => {
                contexto.fillStyle = COLOR_FONDO;
                contexto.fillRect(0, 0, $canvas.width, $canvas.height);
            }
            //Función para limpiar el canvas
            limpiarCanvas();
            $btnLimpiar.onclick = limpiarCanvas;

            //Con este script se crea en el input de firma directamente
            $btnCrearFirma.onclick = () => {
                // Verificar si el canvas está vacío
                if (!canvasVacio()) {
                    Swal.fire({
                        position: "top-right",
                        icon: "error",
                        title: "Por favor, dibuje algo antes de guardar la firma!",
                        showConfirmButton: false,
                        timer: 3000
                    });
                    return;
                }

                const enlace = document.createElement('a');
                // enlace.download = "Firma.png";
                enlace.href = $canvas.toDataURL();
                // alert("Firma creada con éxito");
                Swal.fire({
                    position: "top-right",
                    icon: "success",
                    title: "Click en Guardar Firma para Continuar!",
                    showConfirmButton: false,
                    timer: 2000
                });
                enlace.click();
                // Obtener la imagen como base64 y asignarla al input de archivo
                const firmaBase64 = $canvas.toDataURL("image/png");
                document.querySelector("input[name='firma']").setAttribute('type', 'text');
                document.querySelector("input[name='firma']").value = firmaBase64;
                $canvas.style.display = "none";
                $btnCrearFirma.style.display = "none";
                $btnLimpiar.style.display = "none";
                $btnGuardarFirma.style.display = document.getElementById("btnGuardarFirma").removeAttribute(
                    "hidden");
            }
            $canvas.addEventListener("mousedown", event => {

                xAnterior = xActual;
                yAnterior = yActual;
                xActual = obtenerXReal(event.clientX);
                yActual = obtenerYReal(event.clientY);
                contexto.beginPath();
                contexto.fillStyle = COLOR_PINCEL;
                contexto.fillRect(xActual, yActual, GROSOR, GROSOR);
                contexto.closePath();
                haComenzadoDibujo = true;

                document.addEventListener("mouseup", mouseUpHandler);
                $canvas.addEventListener("mouseleave", mouseLeaveHandler);
            });

            function mouseUpHandler() {
                haComenzadoDibujo = false;
                document.removeEventListener("mouseup", mouseUpHandler);
                $canvas.removeEventListener("mouseleave", mouseLeaveHandler);
            }

            function mouseLeaveHandler() {
                haComenzadoDibujo = false;
                document.removeEventListener("mouseup", mouseUpHandler);
                $canvas.removeEventListener("mouseleave", mouseLeaveHandler);
            }

            function canvasVacio() {
                const imageData = contexto.getImageData(0, 0, $canvas.width, $canvas.height).data;
                for (let i = 0; i < imageData.length; i++) {
                    if (imageData[i] !== 255) {
                        return true;
                    }
                }
                return false;
            }

            $canvas.addEventListener("mousemove", (evento) => {
                if (!haComenzadoDibujo) {
                    return;
                }
                xAnterior = xActual;
                yAnterior = yActual;
                xActual = obtenerXReal(event);
                yActual = obtenerYReal(event);

                contexto.beginPath();
                contexto.moveTo(xAnterior, yAnterior);
                contexto.lineTo(xActual, yActual);
                contexto.strokeStyle = COLOR_PINCEL;
                contexto.lineWidth = GROSOR;
                contexto.stroke();
                contexto.closePath();
            })
        }
    </script>
@endsection
