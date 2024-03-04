@include("layouts.headerAdmin")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Ventas</title>

    <link rel="stylesheet" href="{{ asset("assets/css/Admin/modules/Sales/sales-styles.css") }}">
</head>
<body>
    <!-- Contenido de página -->
    <section class="contenido-pag">
        <!-- Titulo de ventana -->
        <div class="titulo-ventana">
            <h1 class="titulo">Ventas</h1>
        </div>

        <!-- Buscar ventas-->
        <div class="filtros-busqueda">
            <div class="ordenar_por">
                <select name="ordenar_por" id="ordenar_por">
                    <option value="Ordenar Por">Ordenar Por</option>
                    <option value="A-Z">A-Z</option>
                    <option value="Precio">Total</option>
                </select>
            </div>
            <div class="barra_busqueda">
                <input type="search" name="buscarVenta" id="barra_busqueda" placeholder="Buscar venta por su número">
            </div>
        </div>

        <!-- Contenedor Ventas -->
        <div class="cont-ventas">
            <!-- Contenedor Lista de ventas -->
            <div class="cont-lista-ventas">
                <!-- Tabla Ventas -->
                <table class="tabla-ventas" id="tabla-ventas">
                    <!-- Columnas características de Venta -->
                    <tr class="columnas-caract-venta">
                        <td class="item-columna num-venta">No</td>
                        <td class="item-columna fecha-venta">Fecha</td>
                        <td class="item-columna total-venta">Total</td>
                        <td class="item-columna opciones-venta-tabla">Opciones</td>
                    </tr>

                    <!-- Filas Datos de Venta -->
                    @forelse ($sales as $sale)
                        <tr class="filas-datos">
                            <td class="item-fila num-venta-dato">{{ $sale->id }}</td>
                            <td class="item-fila fecha-venta-dato">{{ $sale->date }}</td>
                            <td class="item-fila total-venta-dato">{{ $sale->total }} $</td>
                            <td class="opciones-venta-tabla-dato">
                                <a href="{{ route('sales.show', $sale->id) }}"><button class="btn-venta btn-ver"><a href="{{ route('sales.show', $sale->id) }}" class="link-op-venta">Ver</a><a href="{{ route('sales.show', $sale->id) }}"><img src="{{ asset("assets/img/Admin/modules/ver-factura-icono.png") }}" alt="Ver Icono" class="icono-op-venta"></button></a>
                                <a href="{{ route('sales.edit', $sale->id) }}"><button class="btn-venta btn-editar"><a href="{{ route('sales.edit', $sale->id) }}" class="link-op-venta">Editar</a><a href="{{ route('sales.edit', $sale->id) }}"><img src="{{ asset("assets/img/Admin/modules/editar-icono.png") }}" alt="Editar Icono"></a></button></a>
                                <form action="{{ route('sales.destroy', $sale->id) }}" method="POST" class="btn-eliminar">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn-venta eliminar-venta" onclick="return confirm('¿Estás seguro de que deseas eliminar esta venta?')"> Eliminar
                                        <img src="{{ asset("assets/img/Admin/modules/eliminar-icono.png") }}" alt="Eliminar Icono">
                                    </button>
                                </form>
                            </td>
                        </tr>

                    {{-- No hay registros de Ventas --}}
                    @empty
                        <tr class="filas-datos">
                            <td class="no-records item-fila">No hay Registros de Ventas</td>
                        </tr>
                    @endforelse
                </table>
            </div>

            <!-- Contenedor Opciones de venta/s -->
            <div class="cont-opciones-venta">
                <!-- Opciones de venta -->
                <div class="opciones-venta">
                    <!-- Registrar Venta  -->
                    <button class="cont-opcion-venta">
                        <a href="{{ route("sales.create") }}"><img src="{{ asset("assets/img/Admin/modules/anadir-icono.png") }}" alt="Registrar Venta Icono"></a>
                        <a href="{{ route("sales.create") }}" class="link-sect-venta"><h2>Registrar Venta</h2></a>
                    </button>
                </div>
            </div>
        </div>

        {{-- Paginación de registros --}}
        {{ $sales->onEachSide(3)->links('Admin.pagination')}}
    </section>

    {{-- Alertas de acciones de venta --}}
        {{-- Alerta de venta creada --}}
        @if (session('created'))
            <script>
                alert("{{ session('created') }}");
            </script>
        @endif
        {{-- Alerta de venta actualizada --}}
        @if (session('updated'))
            <script>
                alert("{{ session('updated') }}");
            </script>
        @endif
        {{-- Alerta de venta eliminada --}}
        @if (session('deleted'))
            <script>
                alert("{{ session('deleted') }}");
            </script>
        @endif

        {{-- @section('content')
        <canvas id="myChart" width="400" height="150"></canvas>
        <script>
            document.addEventListener('DOMContentLoaded', function () {

                const ctx = document.getElementById('myChart');
                const myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                        datasets: [{
                            label: '# of Votes',
                            data: [12, 19, 3, 5, 2, 3],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    }
                });
            }, true);
        </script> --}}
        {{-- @endsection --}}
</body>
</html>
