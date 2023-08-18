<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Hoja de estilos para este archivo --}}
    <link rel="stylesheet" href="{{ asset("assets/css/Admin/modules/Categories/form-styles.css") }}">
</head>
<body>
    <table class="tabla-categorias" id="tabla-categorias">
        <!-- Columnas -->
        <tr class="columnas-caract">
            <td class="cantidad-prod item-columna">Nombre categoría</td>
            <td class="nombre-categoria item-columna">Descripción</td>
        </tr>
        <tr class="filas-datos">
            <td class="cantidad-prod-dato item-fila">
                {{ Form::text('name', $category->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Escribe aquí nombre de nueva categoría', 'id' => 'nombre']) }}
                {!! $errors->first('name', '<div class="character-error">El nombre de categoría es un dato obligatorio</div>') !!}
            </td>

            <td class="nombre-categoria-dato item-fila">
                {{ Form::text('description', $category->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Describe aquí nueva categoría','id' => 'descripcion']) }}
            </td>
        </tr>
    </table>
</body>
</html>

