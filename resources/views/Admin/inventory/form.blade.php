<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Hoja de estilos para este archivo --}}
    <link rel="stylesheet" href="{{ asset("assets/css/Admin/modules/Inventories/form-inventories.css") }}">

    {{-- Scripts de alertas de errores --}}
    <script deferc src="{{ asset("assets/js/Admin/modules/form-alerts.js") }}"></script>
</head>
<body>
    <!-- Tabla Inventarios -->
    <table class="tabla-productos" id="tabla-productos">
        <tr class="columnas-caract">
            <td class="nombre-prod item-columna"> <h3>Nombre Producto </h3></td>
            <td class="entradas-prod item-columna"><h3>Entradas</h3></td>
            <td class="salidas-prod item-columna"><h3>Salidas</h3></td>
        </tr>
        <!-- Mostrar productos -->
            <tr class="filas-datos">
                <td class="nombre-prod-dato item-fila">
                    {{ Form::select('product_id', $products ,$inventory->product_id, ['class' => 'form-control' . ($errors->has('product_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar Producto']) }}
                    {!! $errors->first('product_id', "El producto es un campo obligatorio") !!}
                </td>
                <td class="entradas-prod-dato item-fila">
                    {{ Form::number('initial_stock', $inventory->initial_stock, ['class' => 'form-control' . ($errors->has('initial_stock') ? ' is-invalid' : ''), 'placeholder' => '#']) }}
                    {!! $errors->first('initial_stock', "Las estradas del producto son un campo obligatorio") !!}
                </td>
                <td class="salidas-prod-dato item-fila">
                    {{ Form::number('output', $inventory->output, ['class' => 'form-control' . ($errors->has('output') ? ' is-invalid' : ''), 'placeholder' => '#']) }}
                    {!! $errors->first('output', "Las salidas del producto son un campo obligatorio") !!}
                </td>
            </tr>
    </table>
</body>
</html>