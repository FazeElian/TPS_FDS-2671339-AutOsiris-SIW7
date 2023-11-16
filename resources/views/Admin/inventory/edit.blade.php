@include("layouts.headerAdmin")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Inventario | {{ $inventory->product->name }} </title>

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
        <form method="POST" action="{{ route('inventories.update', $inventory->id) }}"  role="form" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            @csrf
            @include('Admin.inventory.form')
            <!-- Opciones Inventario -->
            <div class="opciones-inventario">
                <!-- Botón: Cancelar -->
                <button class="dp-hidden">
                </button>
                <button class="bott-guardar-cambios">
                    <a href=""><h2>Actualizar Inventario</h2></a>
                </button>
            </div>
        </form>
    </section>
</body>
</html>
