@include("layouts.headerAdmin")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventarios | Registrar</title>

    {{-- Hoja de estilos para este archivo --}}
    <link rel="stylesheet" href="{{ asset("assets/css/Admin/modules/Inventories/inventories.css") }}">
</head>
<body>
    <!-- Contenido de página -->
    <section class="contenido-pag">
        <!-- Titulo de ventana -->
        <div class="titulo-ventana">
            <h1>Registrar Inventario</h1>
        </div>
        @includeif('partials.errors')
            <form method="POST" action="{{ route('inventories.store') }}"  role="form" enctype="multipart/form-data" id="form-inventories">
                @csrf
                @include('Admin.inventory.form')

                <!-- Opciones Inventario -->
                <div class="opciones-inventario">
                    <!-- Botón: Cancelar -->
                    <button class="dp-hidden">
                    </button>
                    <button class="bott-guardar-cambios">
                        <a href=""><h2>Registrar Inventario</h2></a>
                    </button>
                </div>
            </form>
    </section>
</body>
</html>
