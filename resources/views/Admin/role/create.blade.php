@include("layouts.headerAdmin")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Roles | Crear</title>

    {{-- Hoja de estilos --}}
    <link rel="stylesheet" href="{{ asset("assets/css/Admin/modules/Roles/form-roles.css") }}">
</head>
<body>
    @includeif('partials.errors')
        <!-- Contenido de página -->
        <section class="contenido-pag">
            <!-- Titulo de ventana -->
            <div class="titulo-ventana">
                <h1>Crear Rol</h1>
            </div>

            <form method="POST" action="{{ route('roles.store') }}"  role="form" enctype="multipart/form-data" id="form-roles">
                @csrf
                @include('Admin.role.form')

                <!-- Opciones roles -->
                <div class="opciones-roles">
                    <!-- Botón: Cancelar -->
                    <button class="bott-cancelar">
                        <h2><a href="{{ route("roles.index") }}">Volver</a></h2>
                    </button>
                    <button class="bott-guardar-cambios" type="submit">
                        <h2>Crear Rol</h2>
                    </button>
                </div>
            </form>
        </section>
</body>
</html>
