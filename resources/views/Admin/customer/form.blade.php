<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Scripts para validación de formulario --}}
    <script defer src="{{ asset("assets/js/Admin/modules/Roles/rolesValidation.js") }}"></script>
</head>
<body>
    <!-- Tabla Roles -->
    <table class="tabla-roles" id="tabla-roles">
        <tr class="columnas-caract">
            <td class="nombre-rol item-columna">Nombre</td>
            <td class="descripcion-rol item-columna">Descripción</td>
        </tr>
        <tr class="filas-datos">
            <td class="nombre-rol-dato item-fila">
                {{ Form::text('name', $customer->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Escribe aquí nombre de nuevo cliente', "id" => "nombre"]) }}
            </td>

            <td class="descripcion-rol-dato item-fila">
                {{ Form::text('description', $customer->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Describe aquí nuevo cliente', "id" => "descripcion"]) }}
            </td>
        </tr>
    </table>
