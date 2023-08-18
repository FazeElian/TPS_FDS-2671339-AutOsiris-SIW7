@include("layouts.headerAdmin")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Venta por unidad | Registrar</title>
</head>
<body>
    <!-- Contenido de página -->
    <section class="contenido-pag">
        <!-- Titulo de ventana -->
        <div class="titulo-ventana">
            <h1>Registrar venta /u</h1>
        </div>

        @includeif('partials.errors')
        <form method="POST" action="{{ route('unit-sales.store') }}"  role="form" enctype="multipart/form-data">
            @csrf
            @include('Admin.sales.unit-sale.form')
        </form>

    </section>
</body>
</html>

