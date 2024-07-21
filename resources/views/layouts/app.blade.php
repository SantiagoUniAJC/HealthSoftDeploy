@extends('adminlte::page')

{{-- Extend and customize the browser title --}}

@section('title')
    {{ config('adminlte.title') }}
    @hasSection('subtitle')
        | @yield('subtitle')
    @endif
@stop

{{-- Extend and customize the page content header --}}

@section('content_header')
    @hasSection('content_header_title')
        <h1 class="text-muted">
            @yield('content_header_title')

            @hasSection('content_header_subtitle')
                <small class="text-dark">
                    <i class="fas fa-xs fa-angle-right text-muted"></i>
                    @yield('content_header_subtitle')
                </small>
            @endif
        </h1>
    @endif
@stop

{{-- Rename section content to content_body --}}

@section('content')
    @yield('content_body')
@stop

{{-- Create a common footer --}}

@section('footer')
    <div class="row">
        <div class="col-md-4 text-left">
            <strong style="font-size: 14px;">
                <a href="duk000@hotmail.com" style="color: gray">
                    Desarrollador: Luis Eduardo Gómez Valencia
                </a>
            </strong>
        </div>

        <div class="col-md-4 text-center">
            <strong style="font-size: 14px;">
                <a href="{{ config('app.developer_url', 'https://www.healthsoft.com.co') }}" style="color: gray">
                    {{ config('app.developer_name', 'Health Software') }}
                </a>
            </strong> &copy; {{ '2024' }}
        </div>

        <div class="col-md-4 text-right">
            <strong style="font-size: 14px;">
                Version:
            </strong>
            <span> {{ config('app.version', '1.2.0') }} </span>
        </div>
    </div>
@stop

{{-- Add common Javascript/Jquery code --}}

@push('js')
    {{-- Inico de Swithalert 2 --}}
    @if (session('success'))
        <script>
            Swal.fire({
                position: "center",
                icon: "success",
                title: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 3000
            });
        </script>
    @elseif (session('warning'))
        <script>
            Swal.fire({
                position: "center",
                icon: "warning",
                title: "{{ session('warning') }}",
                showConfirmButton: false,
                timer: 3000
            });
        </script>
    @elseif (session('danger'))
        <script>
            Swal.fire({
                position: "center",
                icon: "error",
                title: "{{ session('danger') }}",
                showConfirmButton: false,
                timer: 3000
            });
        </script>
    @endif
    {{-- Fin de Swithalert 2 --}}

    <script>
        $(document).ready(function() {
            // Add your common script logic here...
        });
    </script>
@endpush

{{-- Add common CSS customizations --}}

@push('css')
    <style type="text/css">
        {{-- You can add AdminLTE customizations here --}}
        /*
                                                                .card-header {
                                                                    border-bottom: none;
                                                                }
                                                                .card-title {
                                                                    font-weight: 600;
                                                                }
                                                                */
    </style>
@endpush

@section('preloader')

    <i class="fas fa-4x fa-spin fa-spinner"></i>
    <img src="{{ asset('images/logo_HSEQ.png') }}" alt="Logo" width="25%">
    <h4 class="mt-4">Cargando.....</h4>

@stop
