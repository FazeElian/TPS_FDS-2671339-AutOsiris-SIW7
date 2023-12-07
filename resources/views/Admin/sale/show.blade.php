@include("layouts.headerAdmin")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Venta | No {{ $sale->id }} </title>

    {{-- Estilos para este archivo --}}
    <link rel="stylesheet" href="{{ asset("assets/css/Admin/modules/Sales/show-styles.css") }}">
</head>
<body>
    <!-- Contenido de página -->
    <section class="contenido-pag">
        <!-- Titulo de ventana -->
        <div class="titulo-ventana">
            <h1 class="titulo">Ver Venta</h1>
        </div>

        <!-- Contenedor de nueva venta -->
        <div class="cont-venta">
            <!-- Contenedor información de venta -->
            <div class="cont-info-venta">
                {{-- Número de la venta --}}
                <div class="num-venta">
                    <h2>Número de la venta:</h2> <h3>{{ $sale->id }}</h3>
                </div>
                <!-- Fecha -->
                <div class="fecha-venta">
                    <h2>Fecha:</h2> <h3>{{ $sale->date }}</h3>
                </div>
            </div>

            <!-- Tabla lista de productos de venta -->
            <table class="tab-productos-venta" id="listaProductos">
                <!-- Columnas características de lista de productos -->
                <tr class="columnas-caract">
                    <td class="item-columna nombre-prod">Nombre producto</td>
                    <td class="item-columna cantidad-prod">Cantidad</td>
                    <td class="item-columna precio-prod">Precio /u</td>
                </tr>

                <!-- Filas datos -->
                @foreach ($products as $product)
                    <tr class="filas-datos">
                        <td class="item-fila nombre-prod-dato">{{ $product->name }}</td>
                        <td class="item-fila cantidad-prod-dato">{{ $product->pivot->quantity }}</td>
                        <td class="item-fila precio-prod-dato">{{ $product->pivot->price }} $</td>
                    </tr>
                @endforeach

                {{-- Total --}}
                <tr class="columnas-caract cols-total">
                    <td class="item-columna texto-total">Total</td>
                    <td class="item-columna cantidad-total"></td>
                    <td class="item-columna precio-total">{{ $sale->total }} $</td>
                </tr>
            </table>
        </div>

        <!-- Contenedor Botón Volver -->
        <div class="cont-volver">
            <a href="{{ route("sales.index") }}" class="link-btn-volver">
                <button class="btn-volver">
                    <img src="{{ asset("assets/img/Admin/modules/volver-flecha-icono-negro.png") }}" alt="Volver icono">
                    <h2>Volver</h2>
                </button>
            </a>
        </div>
    </section>
</body>
</html>
