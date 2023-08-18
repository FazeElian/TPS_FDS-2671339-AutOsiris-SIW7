@include("layouts.headerAdmin")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rol | {{ $role->name }} | Editar</title>

    <link rel="stylesheet" href="{{ asset("assets/css/Admin/modules/Roles/form-roles.css") }}">
</head>
<body>
    @includeif('partials.errors')
        <!-- Contenido de página -->
        <section class="contenido-pag">
            <!-- Titulo de ventana -->
            <div class="titulo-ventana">
                <h1>Editar Rol</h1>
            </div>
            <form method="POST" action="{{ route('roles.update', $role->id) }}"  role="form" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf
                @include('Admin.role.form')

                <!-- Opciones roles -->
                <div class="opciones-roles">
                    <!-- Botón: Cancelar -->
                    <button class="bott-cancelar">
                        <a href="{{ route("roles.index") }}"><h2>Volver</h2></a>
                    </button>
                    <button class="bott-guardar-cambios" type="submit">
                        <h2>Actualizar Rol</h2>
                    </button>
                </div>
            </form>
        </section>
</body>
</html>
