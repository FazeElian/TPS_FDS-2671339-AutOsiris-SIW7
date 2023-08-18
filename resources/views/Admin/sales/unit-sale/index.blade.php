@include("layouts.headerAdmin")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ventas | Por unidad</title>

    {{-- Hoja de estilos para este archivo --}}
    <link rel="stylesheet" href="{{ asset("assets/css/Admin/modules/Sales/unit_sales/unit_sales.css") }}">
</head>
<body>
    <!-- Contenido de página -->
    <section class="contenido-pag">
        <!-- Titulo de ventana -->
        <div class="titulo-ventana">
            <h1>Ventas por unidad</h1>
        </div>

        {{-- TabLa Ventas --}}
        <table class="tabla_ventas">
            {{-- Columnas características --}}
            <tr class="columnas-caract">
                <td class="no item-columna">No</td>
                <td class="producto item-columna">Nombre Producto</td>
                <td class="cantidad-prod item-columna">Cantidad</td>
                <td class="precio-prod item-columna">Precio Total</td>
                <td class="acciones item-columna">Acciones</td>
            </tr>
            @foreach ($SalesUnit as $unitSale)
            <tr>
                <td>{{ ++$i }}</td>

                <td>{{ $unitSale->product_id }}</td>
                <td>{{ $unitSale->amountProduct }}</td>
                <td>{{ $unitSale->priceProduct }}</td>

                <td>
                    <form action="{{ route('unit-sales.destroy',$unitSale->id) }}" method="POST">
                        <a class="btn btn-sm btn-primary " href="{{ route('unit-sales.show',$unitSale->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                        <a class="btn btn-sm btn-success" href="{{ route('unit-sales.edit',$unitSale->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </table>

        <!-- Opciones Venta -->
        <div class="opciones-inventario">
            <!-- Botón: Cancelar -->
            <button>
            </button>
            <button class="bott-guardar-cambios">
                <a href="{{ route("unit_sales.create") }}"><h2>Registrar Venta /u</h2></a>
            </button>
        </div>

    </section>
</body>
</html>

