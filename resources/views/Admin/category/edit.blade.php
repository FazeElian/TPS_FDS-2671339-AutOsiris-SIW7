{{-- Inclusión de encabezado --}}
@include("layouts.headerAdmin")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categoría | {{ $category->name }} | Editar</title>
</head>
<body>
    <!-- Contenido de página -->
    <section class="contenido-pag">
        <!-- Titulo de ventana -->
        <div class="titulo-ventana">
            <h1 class="titulo">Editar Categoría: {{ $category->name }}</h1>
        </div>
            @includeif('partials.errors')
                <form method="POST" action="{{ route('categories.update', $category->id) }}" role="form" enctype="multipart/form-data">
                    {{ method_field('PATCH') }}
                    @csrf
                    @include('Admin.category.form')

                    <!-- Opciones Categorías -->
                    <div class="opciones-categorias">
                        <!-- Botón: Cancelar -->
                        <a href="{{ route("categories.index") }}" class="bott-cancelar"><h2>Cancelar</h2></a>

                        <button class="bott-guardar-cambios" name="btn-actualizar-categoria" type="submit">
                            <a href=""><h2>Actualizar Categoría</h2></a>
                        </button>
                    </div>
                </form>
    </section>
</body>
</html>

{{-- Incluimos el footer --}}
@extends("layouts.footerAdmin")
