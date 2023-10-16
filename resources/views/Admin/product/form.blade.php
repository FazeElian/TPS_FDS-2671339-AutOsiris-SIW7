<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Hoja de estilos Formulario --}}
    <link rel="stylesheet" href="{{ asset("assets/css/Admin/modules/Products/form-styles.css") }}">

    {{-- Scripts --}}
    <script defer src="{{ asset("assets/js/Admin/modules/Products/newProduct.js") }}"></script>

    {{-- Scripts para validación de formulario --}}
    <script defer src="{{ asset("assets/js/Admin/modules/Products/productsValidation.js") }}"></script>
</head>

    <!-- Contenedor Añadir producto -->
    <div class="cont-anadir-producto">
        <!-- Imagen Producto -->
        <div class="cont-img-producto">
            <img src="{{ asset("storage")."/".$product->image }}" id="imagenPrevisualizacion">
            {{ Form::file('image', ['class' => 'seleccionar-imagen' . ($errors->has('image') ? ' is-invalid' : ''), 'id' => 'seleccionar-imagen', 'name' => 'image', 'accept' => '.jpg, .jpeg, .png']) }}
        </div>

        <!-- Info producto -->
        <div class="cont-info-producto">
            <!-- Nombre producto -->
            <div class="nombre-prod">
                {{ Form::text('name', $product->name, ['class' => '' . ($errors->has('name') ? ' is-invalid' : ''), 'id' => 'nombre-prod', 'placeholder' => 'Nombre Producto: ']) }}
            </div>

            <div class="cod-prod">
                {{ Form::text('code', $product->code, ['class' => '' . ($errors->has('code') ? ' is-invalid' : ''), 'id' => 'cod-prod', 'placeholder' => 'Código: ']) }}
                {{ Form::select('categorie_id', $categories, $product->categorie_id, ['class' => '' . ($errors->has('categorie_id') ? ' is-invalid' : ''), 'id' => 'select-categoria-prod', "placeholder"=> "Seleccionar Categoría"]) }}
            </div>

            <!-- Descripción de producto -->
            <div class="descripcion-prod">
                {{ Form::textarea('description', $product->description, ['class' => '' . ($errors->has('description') ? ' is-invalid' : ''), 'id' => 'descripcion-prod', 'placeholder' => 'Describe aquí el nuevo producto']) }}
            </div>

            <!-- Precio de producto -->
            <div class="precio-prod">
                {{ Form::number('price', $product->price, ['class' => '' . ($errors->has('price') ? ' is-invalid' : ''), 'id' => 'precio-prod', 'placeholder' => 'Precio:', 'step' => '50']) }}
            </div>
        </div>
    </div>
