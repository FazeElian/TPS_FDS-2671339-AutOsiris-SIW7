{{-- Inclusión de encabezado --}}
@include("layouts.headerAdmin")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Facturas | Nueva</title>
</head>
<body>
    <!-- Contenido de página -->
    <section class="contenido-pag">
        <!-- Titulo de ventana -->
        <div class="titulo-ventana">
            <h1>Facturas</h1>
        </div>

        @includeif('partials.errors')

        <form method="POST" action="{{ route('factures.store') }}"  role="form" enctype="multipart/form-data">
            @csrf
            @include('Admin.facture.form')
            <br>
            <div class="box-footer mt20">
                <button type="submit" class="btn btn-primary">Crear Factura</button>
            </div>
        </form>
    </section>
</body>
</html>

{{-- Incluimos el footer --}}
@extends("layouts.footerAdmin")
