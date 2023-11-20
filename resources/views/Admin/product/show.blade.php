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
    <link rel="stylesheet" href="{{ asset("assets/css/Admin/modules/Products/show-styles.css") }}">
</head>
<body>
    @includeif('partials.errors')
    <!-- Contenido de página -->
    <section class="contenido-pag">
        <!-- Titulo de ventana -->
        <div class="titulo-ventana">
            <h1 class="titulo">Ver Producto:</h1>
        </div>

        {{-- Contenedor Ver Producto --}}
        <div class="cont-ver-prod">
            <div class="contenido-ver-prod">
                <div class="cont-img-prod">
                    <img src="{{ asset("storage")."/".$product->image }}" id="imagenPrevisualizacion">
                </div>
                <div class="cont-info-prod cont-dato-prod">
                    <div class="cont-nombre-prod">
                        <label for="">Nombre: </label>
                        {{ $product->name }}
                    </div>
                    <div class="cont-codigo-categoria-prod cont-dato-prod">
                        <div class="cont-codigo-prod cont-dato-prod">
                            <label for="">Código: </label>
                            {{ $product->code }}
                        </div>
                        <div class="cont-codigo-prod cont-dato-prod">
                            <label for="">Categoría: </label>
                            {{ $product->category->name }}
                        </div>
                    </div>
                    <div class="cont-nombre-prod cont-dato-prod">
                        <label for="">Descripción: </label>
                        {{ $product->description }}
                    </div>
                    <div class="cont-nombre-prod cont-precio-prod cont-dato-prod">
                        <label for="">Precio: </label>
                        {{ $product->price }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Botones Opciones -->
        <div class="botones-opciones">
            <!-- Botón: volver -->
            <button class="btn-volver">
                <a href="{{ route("products.index") }}"><img src="{{ asset("assets/img/Admin/modules/volver_flecha-icono.png") }}" alt=""></a>
                <a href="{{ route("products.index") }}">Volver</a>
            </button>
        </div>
    </section>
</body>
</html>

{{-- Incluimos el footer --}}
@extends("layouts.footerAdmin")
