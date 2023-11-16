{{-- Inclusión de encabezado --}}
@include("layouts.headerAdmin")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Producto | {{ $product->name }} </title>
</head>
<body>
    @includeif('partials.errors')
    <!-- Contenido de página -->
    <section class="contenido-pag">
        <!-- Titulo de ventana -->
        <div class="titulo-ventana">
            <h1 class="titulo">Editar Producto:</h1>
        </div>
        <form method="POST" action="{{ route('products.update', $product->id) }}"  role="form" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            @csrf
            @include("Admin.product.form")

            <!-- Botones Opciones -->
            <div class="botones-opciones">
                <!-- Botón: Cancelar -->
                <a href="{{ route("products.index") }}" class="bott-cancelar"><h2>Cancelar</h2></a>

                <!-- Botón: Añadir Producto -->
                <button type="submit" name="btn-añadir-producto" class="bott-añadir-prod">Actualizar Producto</button>
            </div>
        </form>
    </section>
</body>
</html>

{{-- Incluimos el footer --}}
@extends("layouts.footerAdmin")
