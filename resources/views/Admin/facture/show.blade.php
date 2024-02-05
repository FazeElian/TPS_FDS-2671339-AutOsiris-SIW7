@include("layouts.headerAdmin")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Factura | No {{ $facture->id }} </title>

    {{-- Estilos para este archivo --}}
    <link rel="stylesheet" href="{{ asset("assets/css/Admin/modules/Factures/show-styles.css") }}">
</head>
<body>
    <!-- Contenido de página -->
    <section class="contenido-pag">
        <!-- Titulo de ventana -->
        <div class="titulo-ventana">
            <h1 class="titulo">Ver Factura</h1>
        </div>

        <!-- Contenedor de nueva factura -->
        <div class="cont-factura">
            <!-- Contenedor información de factura -->
            <div class="cont-info-fact">
                {{-- Número de la Factura --}}
                <div class="num-fact">
                    <h2>Número de la factura:</h2> <h3>{{ $facture->id }}</h3>
                </div>
                <!-- Fecha -->
                <div class="fecha-fact">
                    <h2>Fecha:</h2> <h3>{{ $facture->date }}</h3>
                </div>

                <!-- Cliente -->
                <div class="cliente-fact">
                    <h2>Cliente: </h2> <h3>{{ $facture->customer->name }}</h3>
                </div>
            </div>

            <!-- Tabla lista de productos de factura -->
            <table class="tab-productos-fact" id="listaProductos">
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
                    <td class="item-columna precio-total">{{ $facture->total }} $</td>
                </tr>
            </table>
        </div>

        <!-- Contenedor Botón Volver -->
        <div class="cont-volver">
            <a href="{{ route("factures.index") }}" class="link-btn-volver">
                <button class="btn-volver">
                    <img src="{{ asset("assets/img/Admin/modules/volver-flecha-icono-negro.png") }}" alt="Volver icono">
                    <h2>Volver</h2>
                </button>
            </a>
        </div>
    </section>
</body>
</html>
