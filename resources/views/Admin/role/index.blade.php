@include("layouts.headerAdmin")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrador | Roles</title>

    {{-- Hoja de estilos para este archivo --}}
    <link rel="stylesheet" href="{{ asset("assets/css/Admin/modules/Roles/roles-styles.css") }}">
</head>
<body>
    <!-- Contenido de página -->
    <section class="contenido-pag">
        <!-- Titulo de ventana -->
        <div class="titulo-ventana">
            <h1>Roles</h1>
        </div>

        <!-- Tabla Roles -->
        <table class="tabla-roles" id="tabla-roles">
            <tr class="columnas-caract">
                <td class="no item-columna">No</td>
                <td class="nombre-rol item-columna">Nombre</td>
                <td class="descripcion-rol item-columna">Descripción</td>
                <td class="acciones-rol item-columna">Acciones</td>
            </tr>

            @forelse ($roles as $role)
                <tr class="filas-datos">
                    <td class="no-dato item-fila">{{ ++$i }}</td>
                    <td class="nombre-rol-dato item-fila">{{ $role->name }}</td>
                    <td class="descripcion-rol-dato item-fila">{{ $role->description }}</td>
                    <td class="acciones-rol-dato item-fila">
                        <button class="btn-editar">
                            <a href="{{ route("roles.edit", $role->id) }}"><h2>Editar</h2></a>
                            <a href="{{ route("roles.edit", $role->id) }}"><img src="{{ asset("assets/img/Admin/modules/editar-icono.png") }}"></a>
                        </button>
                        <form action="{{ route('roles.destroy', $role->id) }}" method="POST" class="eliminar-rol">
                            @csrf
                            @method('DELETE')
                            <button class="btn-eliminar" onclick="return confirm('¿Estás seguro de que deseas eliminar este rol?')">
                                <h2>Eliminar</h2>
                                <img src="{{ asset("assets/img/Admin/modules/eliminar-icono.png") }}">
                            </button>
                        </form>
                    </td>
                </tr>

            @empty
                <tr class="filas-datos">
                    <td class="no-records item-fila">No hay Registros de Roles</td>
                </tr>
            @endforelse
        </table>

        <!-- Opciones roles -->
        <div class="opciones-roles">
            <!-- Botón: Cancelar -->
            <button class="dp-hidden">
            </button>
            <button class="añadir-fila">
                <a href="{{ route("roles.create") }}"><h2>Añadir Rol</h2></a>
            </button>
        </div>
    </section>
</body>
</html>
