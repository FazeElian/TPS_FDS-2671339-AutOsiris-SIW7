{{-- Inclusión de encabezado --}}
@include("layouts.headerAdmin")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrador | Productos</title>

    {{-- Hoja de estilos de este archivo --}}
    <link rel="stylesheet" href="{{ asset("assets/css/Admin/modules/Products/products-styles.css") }}">
</head>
<body>
    <!-- Contenido de página -->
    <section class="contenido-pag">
        <!-- Titulo de ventana -->
        <div class="titulo-ventana">
            <h1 class="titulo">Productos</h1>
        </div>

        <!-- Filtros de búsqueda -->
        <div class="filtros-busqueda">
            <div class="ordenar_por">
                <select name="ordenar_por" id="ordenar_por">
                    <option value="Ordenar Por">Ordenar Por</option>
                    <option value="A-Z">A-Z</option>
                    <option value="Precio">Precio</option>
                </select>
            </div>

            <div class="barra_busqueda">
                <input type="search" name="barra_busqueda" id="barra_busqueda" placeholder="  Buscar Producto">
            </div>
        </div>

    {{-- Sección de lista de productos --}}
    <section class="productos">
        <!-- Contenedor de todas las cajas de todos los productos -->
        <section class="sect-productos">
            @forelse ($products as $product)
                <!-- Contenedor de producto -->
                <div class="cont-producto">
                    <!-- Formulario de producto -->
                    <form action="{{ route("products.create") }}" method="post" class="form-producto">
                        <div class="img-producto">
                            <img src="{{ asset("storage")."/".$product->image }}" alt="Este producto no tiene una imagen">
                        </div>

                        <div class="info-producto">
                            <h1>Nombre: {{ $product->name }}</h1>
                            <h4 class="title-descrip"><b>Descripción:</b></h4>
                            <p>{{ $product->description}} </p>
                            <h2>Precio: {{ number_format($product->price, 0, ',', '.') }}</h2>
                            <h3>Código: {{ $product->code}} </h3>
                        </div>
                    </form>

                    <!-- Acciones Producto -->
                    <div class="acciones-prod">
                        <!-- Categoría de producto -->
                        <div class="categoria-prod">
                            <h2>Categoría Producto: {{ $product->category->name}}</h2>
                        </div>

                        <!-- Editar producto -->
                        <button class="editar-prod">
                            <a href="{{ route("products.edit", $product->id) }}"><h2>Editar</h2>
                            <img src="{{ asset("assets/img/Admin/modules/editar-icono.png") }}"></a>
                        </button>

                        <form action="{{ route('products.destroy',$product->id) }}" method="POST" class="eliminar-prod">
                            <!-- Eliminar producto -->
                            @csrf
                            @method('DELETE')
                            <button class="btn-eliminar" type="submit">
                                <h2>Eliminar</h2>
                                <img src="{{ asset("assets/img/Admin/modules/eliminar-icono.png") }}">
                            </button>
                        </form>
                    </div>
                </div>

            @empty
                <div class="no-records-prod">
                    <h2>No hay productos</h2>
                </div>
            @endforelse
        </section>
            <!-- Contenedor de opciones de producto -->
            <div class="opciones-producto">
                <!-- Añadir producto -->
                <div class="añadir-prod">
                    <a href="{{ route("products.create") }}"><img src="{{ asset("assets/img/Admin/modules/anadir-icono.png") }}"></a>
                    <a href="{{ route("products.create") }}"><h1>Añadir </h1><h1>producto</h1></a>
                </div>

                <!-- Categorías producto -->
                <div class="añadir-prod">
                    <a href="{{ route("categories.index") }}"><img src="{{ asset("assets/img/Admin/modules/categorias-icono.png") }}"></a>
                    <a href="{{ route("categories.index") }}"><h1>Categorías </h1><h1>productos</h1></a>
                </div>
            </div>
        </section>
    </section>
</body>
</html>
{{-- Incluimos el footer --}}
@extends("layouts.footerAdmin")
