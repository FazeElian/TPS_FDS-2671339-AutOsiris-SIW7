{{-- Inclusión de encabezado --}}
@include("layouts.headerAdmin")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrador | Productos | Categorías</title>

    {{-- Hoja de estilos para este archivo --}}
    <link rel="stylesheet" href="{{ asset("assets/css/Admin/modules/Categories/categories-styles.css") }}">
</head>
<body>
    {{-- Mensaje de satisfacción al realizar una funcionalidad --}}
    @if ($message = Session::get('success'))
        <script>alert({{ $message }});</script>
    @endif

    <!-- Contenido de página -->
    <section class="contenido-pag">
        <!-- Titulo de ventana -->
        <div class="titulo-ventana">
            <h1 class="titulo">Categorías</h1>
        </div>

        <!-- Barra de búsqueda -->
        <div class="cont-barra-busqueda">
            <input type="search" name="barraBusquedaCategorias" id="barraBusqueda" placeholder="  Buscar categoría de productos">
        </div>

        <!-- Tabla categorías -->
        <table class="tabla-categorias" id="tabla-categorias">
            <!-- Columnas -->
            <tr class="columnas-caract">
                <td class="no item-columna">No</td>
                <td class="cantidad-prod item-columna">Nombre</td>
                <td class="nombre-categoria item-columna">Descripción</td>
                <td class="opciones-categoria item-columna">Opciones</td>
            </tr>

            @forelse ($categories as $category)
                <tr class="filas-datos">
                    <td class="no-dato item-fila">{{ ++$i }}</td>
                    <td class="cantidad-prod-dato item-fila">{{ $category->name }}</td>
                    <td class="nombre-categoria-dato item-fila">{{ $category->description }}</td>
                    <td class="opciones-categoria-dato item-fila">
                        <button class="editar-cat">
                            <a href="{{ route("categories.edit", $category->id) }}">
                                <h2>Editar</h2>
                                <img src="{{ asset("assets/img/Admin/modules/editar-icono.png") }}">
                            </a>
                        </button>

                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="eliminar-cat">
                            @csrf
                            @method('DELETE')
                            <button class="btn-eliminar-cat">
                                <h2>Eliminar</h2>
                                <img src="{{ asset("assets/img/Admin/modules/eliminar-icono.png") }}">
                            </button>
                        </form>
                    </td>
                </tr>

            @empty
                <tr class="filas-datos">
                    <td class="no-records item-fila">No hay Registros de Categorías de productos</td>
                </tr>
            @endforelse
        </table>

        <!-- Opciones Categorías -->
        <div class="opciones-categorias">
            <!-- Botón: Cancelar -->
            <button class="bott-cancelar">
                <a href="{{ route("products.index") }}"><h2>Volver</h2></a>
            </button>
            <button class="añadir-fila">
                <a href="{{ route("categories.create") }}"><h2>Nueva Categoría</h2></a>
            </button>
        </div>
    </section>
</body>
</html>

{{-- Incluimos el footer --}}
@extends("layouts.footerAdmin")
