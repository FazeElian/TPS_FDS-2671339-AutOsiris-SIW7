@include("layouts.headerAdmin")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrador | Inventarios</title>

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

            <form action="{{ route("inventories.index") }}" method="get" class="barra_busqueda">
                <input type="search" name="search" id="barra_busqueda" placeholder="Buscar Producto">
            </form>
        </div>

        <!-- Tabla Productos -->
        <table class="tabla-productos" id="tabla-productos">
            <tr class="columnas-caract">
                <td class="num-prod item-columna">No</td>
                <td class="nombre-prod item-columna"> Nombre Producto </td>
                <td class="entradas-prod item-columna">Entradas</td>
                <td class="salidas-prod item-columna">Salidas</td>
                <td class="stock-prod item-columna">Stock</td>
                <td class="acciones item-columna">Acciones</td>
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
                    <td class="item-fila no-records">No hay Registros de Inventarios de Productos</td>
                </tr>
            @endforelse
        </table>

        {{-- Paginación de registros --}}
        {{ $inventories->onEachSide(3)->links('Admin.pagination')}}

        <!-- Opciones Inventario -->
        <div class="opciones-inventario">
            <!-- Botón: Cancelar -->
            <button class="dp-hidden">
            </button>
            <button class="bott-guardar-cambios">
                <a href="{{ route("inventories.create") }}"><h2>Registrar Inventario</h2></a>
            </button>

            {{-- Alerta de inventario de producto creado --}}
            @if (session('created'))
                <script>
                    alert("{{ session('created') }}");
                </script>
            @endif

            {{-- Alerta de inventario de producto actualizado --}}
            @if (session('updated'))
                <script>
                    alert("{{ session('updated') }}");
                </script>
            @endif

            {{-- Alerta de inventario de producto eliminado --}}
            @if (session('deleted'))
                <script>
                    alert("{{ session('deleted') }}");
                </script>
            @endif
        </div>
    </section>
</body>
</html>
