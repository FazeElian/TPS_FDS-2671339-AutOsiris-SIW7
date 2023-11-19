{{-- Inclusión de encabezado --}}
@include("layouts.headerAdmin")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Producto | {{ $product->name }} </title>

    {{-- Hoja de estilos Formulario --}}
    <link rel="stylesheet" href="{{ asset("assets/css/Admin/modules/Products/form-styles.css") }}"> {{-- Formulario --}}

    {{-- Scripts --}}
    <script defer src="{{ asset("assets/js/Admin/modules/Products/newProduct.js") }}"></script>

    {{-- Scripts para validación de formulario --}}
    <script defer src="{{ asset("assets/js/Admin/modules/Products/productsValidation.js") }}"></script>
</head>
<body>
    @includeif('partials.errors')
    <!-- Contenido de página -->
    <section class="contenido-pag">
        <!-- Titulo de ventana -->
        <div class="titulo-ventana">
            <h1 class="titulo">Ver producto:</h1>
        </div>

        <!-- Contenedor Añadir producto -->
        <div class="cont-anadir-producto">
            <!-- Imagen Producto -->
            <div class="cont-img-producto">
                <img src="{{ asset("storage")."/".$product->image }}" id="imagenPrevisualizacion">
            </div>

            <!-- Info producto -->
            <div class="cont-info-producto">
                <!-- Nombre producto -->
                <div class="nombre-prod">
                    <div id="nombre-prod" class="div-show-prod">{{ $product->name }}</div>
                </div>

                <div class="cod-prod" class="div-show-prod">
                    <div id="cod-prod">{{ $product->code }}</div>
                    <div id="select-categoria-prod">
                        {{ $product->category->name}}
                    </div>
                </div>

                <!-- Descripción de producto -->
                <div class="descripcion-prod" class="div-show-prod">
                    <div id="descripcion-prod">{{ $product->description }}</div>
                </div>

                <!-- Precio de producto -->
                <div class="precio-prod" class="div-show-prod">
                    <div id="precio-prod">{{ $product->price }}  </div>
                </div>
            </div>
        </div>

        <!-- Botones Opciones -->
        <div class="botones-opciones">
            <!-- Botón: Cancelar -->
            <a href="{{ route("products.index") }}" class="bott-cancelar"><h2>Volver</h2></a>
        </div>
    </section>
</body>
</html>

{{-- Incluimos el footer --}}
@extends("layouts.footerAdmin")
