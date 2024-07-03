{{-- Inclusión de encabezado --}}
@include("layouts.headerAdmin")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrador | Inicio</title>

    {{-- Estilos para tabla de ventas diarias --}}
    <link rel="stylesheet" href="{{ asset("assets/css/Admin/modules/Sales/diary-sales.css") }}">
</head>
<body>
    <!-- Contenido página -->
    <section class="contenido-pag">
        <!-- Bienvenida -->
        <div class="bienvenida">
            <h1>¡Bienvenido {{ Auth::user()->name }}!</h1>
            <p>Aquí encontrarás las novedades con respecto a tu negocio y su administración</p>
        </div>

        <br><br><br>

        <!-- Titulo de ventana -->
        <div class="titulo-ventana">
            <h1 class="titulo">Ventas Diarias:</h1>
        </div>

        <table class="tabla-ventas-diarias">
            <!-- Columnas características de Venta -->
            <tr class="columnas-caract-venta">
                <td class="item-columna num-venta">No</td>
                <td class="item-columna total-venta">Total</td>
                <td class="item-columna opciones-venta-tabla">Opciones</td>
            </tr>

            <!-- Filas Datos de Venta -->
            @forelse ($todaySales as $sale)
                <tr class="filas-datos">
                    <td class="item-fila num-venta-dato"> <h2>{{ $sale->id }}</h2></td>
                    <td class="item-fila total-venta-dato"> <h2>{{ $sale->total }} $ </h2></td>
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

            @empty
                <tr class="filas-datos">
                    <td class="no-records item-fila"><h2>Aún no hay registrado una venta hoy</h2></td>
                </tr>
            @endforelse
        </table>
    </section>
</body>
</html>
