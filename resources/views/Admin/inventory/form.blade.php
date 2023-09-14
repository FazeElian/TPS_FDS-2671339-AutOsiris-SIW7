<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Hoja de estilos para este archivo --}}
    <link rel="stylesheet" href="{{ asset("assets/css/Admin/modules/Inventories/form-inventories.css") }}">

    {{-- Scripts de validación de formulario --}}
    <script defer src="{{ asset("assets/js/Admin/modules/Inventories/inventoriesValidation.js") }}"></script>
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
                    {{ Form::select('product_id', $products ,$inventory->product_id, ['class' => 'form-control' . ($errors->has('product_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar Producto', 'id' => 'seleccionar-prod']) }}
                    {!! $errors->first('product_id', "<script> alert('El producto es un campo obligatorio'); </script>") !!}
                </td>
                <td class="entradas-prod-dato item-fila">
                    {{ Form::number('initial_stock', $inventory->initial_stock, ['class' => 'form-control' . ($errors->has('initial_stock') ? ' is-invalid' : ''), 'placeholder' => '#', "id" => "entradas"]) }}
                    {!! $errors->first('initial_stock', "<script> alert('Las estradas del producto son un campo obligatorio'); </script>") !!}
                </td>
                <td class="salidas-prod-dato item-fila">
                    {{ Form::number('output', $inventory->output, ['class' => 'form-control' . ($errors->has('output') ? ' is-invalid' : ''), 'placeholder' => '#', "id" => "salidas"]) }}
                    {!! $errors->first('output', "<script> alert('Las salidas del producto son un campo obligatorio'); </script>") !!}
                </td>
            </tr>
    </table>
</body>
</html>
