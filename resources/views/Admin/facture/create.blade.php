@include("layouts.headerAdmin")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Facturas | Crear</title>
</head>
<body>
    <section class="contenido-pag">
        <!-- Titulo de ventana -->
        <div class="titulo-ventana">
            <h1 class="titulo">Crear Factura</h1>
        </div>

        @includeif('partials.errors')
            <form method="POST" action="{{ route('factures.store') }}"  role="form" enctype="multipart/form-data">
                @csrf
                @include('Admin.facture.form')

                <!-- Opciones Factura -->
                <div class="opciones-factura">
                    <!-- Botón: Cancelar -->
                    <button class="bott-cancelar" type="button">
                        <a href="{{ route("factures.index") }}"><h2>Cancelar</h2></a>
                    </button>
                    <button class="bott-guardar-cambios" type="submit">
                        <a href="#"><h2>Crear factura</h2></a>
                    </button>
                </div>
            </form>
    </section>
</body>
</html>
