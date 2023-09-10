@include("layouts.headerAdmin")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrador | Inventarios</title>

    {{-- Hojas de estilos complementaria para sección de búsqueda --}}
    <link rel="stylesheet" href="{{ asset("assets/css/Admin/modules/Products/products-styles.css") }}">

    {{-- Hoja de estilos para este archivo --}}
    <link rel="stylesheet" href="{{ asset("assets/css/Admin/modules/Inventories/inventories.css") }}">
</head>
<body>
    <!-- Contenido de página -->
    <section class="contenido-pag">
        <!-- Titulo de ventana -->
        <div class="titulo-ventana">
            <h1 class="titulo">Inventarios</h1>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <!-- Filtros de búsqueda -->
        <div class="filtros-busqueda">
            <div class="ordenar_por">
            </div>
            <div class="barra_busqueda">
                <input type="search" name="barra_busqueda" id="barra_busqueda" placeholder="  Buscar Producto">
            </div>
        </div>

        <!-- Tabla Productos -->
        <table class="tabla-productos" id="tabla-productos">
            <tr class="columnas-caract">
                <td class="num-prod item-columna"><h3>No</h3></td>
                <td class="nombre-prod item-columna"> <h3>Nombre Producto </h3></td>
                <td class="entradas-prod item-columna"><h3>Entradas</h3></td>
                <td class="salidas-prod item-columna"><h3>Salidas</h3></td>
                <td class="stock-prod item-columna"><h3>Stock</h3></td>
                <td class="acciones item-columna"><h3>Acciones</h3></td>
            </tr>
            <!-- Mostrar productos -->
            @forelse ($inventories as $inventory)
                <tr class="filas-datos">
                    <td class="num-prod-dato item-fila">{{ ++$i }}</td>
                    <td class="nombre-prod-dato item-fila">{{ $inventory->product->name }}</td>
                    <td class="entradas-prod-dato item-fila">{{ $inventory->initial_stock }}</td>
                    <td class="salidas-prod-dato item-fila">{{ $inventory->output }}</td>
                    <td class="stock-prod-dato item-fila">{{ $inventory->stock }}</td>
                    <td class="acciones-dato item-fila">
                        <button class="btn-editar-inventario">
                            <a href="{{ route("inventories.edit", $inventory->id) }}"><h2>Editar</h2></a>
                            <a href="{{ route("inventories.edit", $inventory->id) }}"><img src="{{ asset("assets/img/Admin/modules/editar-icono.png") }}"></a>
                        </button>
                        <form action="{{ route('inventories.destroy', $inventory->id) }}" method="POST" class="eliminar-inventario">
                            @csrf
                            @method('DELETE')
                            <button class="btn-eliminar-inventario" onclick="return confirm('¿Estás seguro de que deseas eliminar este inventario de producto?')">
                                <h2>Eliminar</h2>
                                <img src="{{ asset("assets/img/Admin/modules/eliminar-icono.png") }}">
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr class="filas-datos">
                    <td class="no-records-inventories">No hay registros de inventario para productos</td>
                </tr>
            @endforelse
        </table>

        <!-- Opciones Inventario -->
        <div class="opciones-inventario">
            <!-- Botón: Cancelar -->
            <button class="dp-hidden">
            </button>
            <button class="bott-guardar-cambios">
                <a href="{{ route("inventories.create") }}"><h2>Registrar Inventario</h2></a>
            </button>
        </div>
    </section>
</body>
</html>
