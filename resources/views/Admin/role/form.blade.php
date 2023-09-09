<!-- Tabla Roles -->
<table class="tabla-roles" id="tabla-roles">
    <tr class="columnas-caract">
        <td class="nombre-rol item-columna">Nombre</td>
        <td class="descripcion-rol item-columna">Descripción</td>
    </tr>
    <tr class="filas-datos">
        <td class="nombre-rol-dato item-fila">
            {{ Form::text('name', $role->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Escribe aquí nombre de nuevo rol']) }}
            {!! $errors->first('name', "<script> alert('El nombre del rol de factura es un dato obligatorio'); </script>") !!}
        </td>

        <td class="descripcion-rol-dato item-fila">
            {{ Form::text('description', $role->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Describe aquí nuevo rol']) }}
            {!! $errors->first('description', "<script> alert('Debes describir el nuevo rol de factura'); </script>") !!}
        </td>
    </tr>
</table>
