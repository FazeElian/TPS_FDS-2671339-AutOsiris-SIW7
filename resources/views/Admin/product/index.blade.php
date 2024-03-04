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

            <form action="{{ route("products.index") }}" method="get" class="barra_busqueda">
                <input type="search" name="search" id="barra_busqueda" placeholder="Buscar Producto" value="{{ $inputSearchValue }}" class="barra_busqueda">
            </form>
        </div>

        {{-- Sección de lista de productos --}}
        <section class="productos">
            {{-- Tabla Productos --}}
            <table class="tabla-prods">
                <tr class="columnas-caract">
                    <td class="item-columna no-prod">No</td>
                    <td class="item-columna nombre-prod">Nombre</td>
                    <td class="item-columna categoria-prod">Categoría</td>
                    <td class="item-columna acciones-prod">Acciones</td>
                </tr>
                @forelse ($products as $product)
                    <tr class="filas-datos">
                        <td class="item-fila no-prod-dato">{{ ++$i }}</td>
                        <td class="item-fila nombre-prod-dato"><a href="{{ route("products.show", $product->id) }}">{{ $product->name }}</a></td>
                        <td class="item-fila categoria-prod-dato">{{ $product->category->name }}</td>
                        <td class="acciones-prod-dato">
                            {{-- Boton editar --}}
                            <button class="btn-op btn-editar">
                                <a href="{{ route("products.edit", $product->id) }}">
                                    <img src="{{ asset("assets/img/Admin/modules/editar-icono.png") }}" alt="Editar Producto Icono" class="img-icon-op">
                                </a>
                                <a href="{{ route("products.edit", $product->id) }}">
                                    <h2>Editar</h2>
                                </a>
                            </button>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="btn-eliminar">
                                <!-- Eliminar producto -->
                                @csrf
                                @method('DELETE')
                                <button class="btn-op btn-eliminar elim-prod" onclick="return confirm('Estás seguro que deseas eliminar este producto?')">
                                    <a href="{{ route("products.destroy", $product->id) }}"><img src="{{ asset("assets/img/Admin/modules/eliminar-icono.png") }}" alt="Eliminar Producto Icono"></a>
                                    <a href="{{ route("products.destroy", $product->id) }}"><h2>Eliminar</h2></a>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr class="filas-datos">
                        <td class="item-fila no-records">No hay Registros de Productos</td>
                    </tr>
                @endforelse
            </table>

            {{-- Contenedor de opciones de producto --}}
            <div class="opciones-producto">
                <!-- Añadir producto -->
                <div class="añadir-prod">
                    <a href="{{ route("products.create") }}"><img src="{{ asset("assets/img/Admin/modules/anadir-icono.png") }}"></a>
                    <a href="{{ route("products.create") }}"><h1>Añadir </h1><h1>producto</h1></a>
                </div>

                {{-- Alerta de producto creado --}}
                @if (session('created'))
                    <script>
                        alert("{{ session('created') }}");
                    </script>
                @endif

                {{-- Alerta de producto actualizado --}}
                @if (session('updated'))
                    <script>
                        alert("{{ session('updated') }}");
                    </script>
                @endif

                {{-- Alerta de producto eliminado --}}
                @if (session('deleted'))
                    <script>
                        alert("{{ session('deleted') }}");
                    </script>
                @endif

                <!-- Categorías producto -->
                <div class="añadir-prod">
                    <a href="{{ route("categories.index") }}"><img src="{{ asset("assets/img/Admin/modules/categorias-icono.png") }}"></a>
                    <a href="{{ route("categories.index") }}"><h1>Categorías </h1><h1>productos</h1></a>
                </div>
            </div>
        </section>

        {{-- Paginación de registros --}}
        {{ $products->onEachSide(3)->links('Admin.pagination') }}
    </section>
</body>
</html>
