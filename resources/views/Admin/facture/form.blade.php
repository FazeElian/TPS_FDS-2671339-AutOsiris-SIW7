<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Scripts --}}
    <script defer src="{{ asset("assets/js/Admin/modules/Factures/factures.js") }}"></script>
</head>
<body>
            <div class="form-group">
                {{ Form::label('role_id') }}
                {{ Form::select('role_id', $roles ,$facture->role_id, ['class' => 'form-control' . ($errors->has('role_id') ? ' is-invalid' : ''), 'placeholder' => 'Elegir Rol de Factura']) }}
                {!! $errors->first('role_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('date') }}
                {{ Form::date('date', $facture->date, ['class' => 'form-control' . ($errors->has('date') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar Fecha']) }}
                {!! $errors->first('date', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <br><br>
            <h1>Productos: </h1>
            <div class="form-group">
                {{ Form::select('product_id', $products ,$facture->product_id, ['class' => 'form-control' . ($errors->has('product_id') ? ' is-invalid' : ''), 'placeholder' => 'Elegir Producto de Factura']) }}
                {!! $errors->first('product_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::number('amountProduct', $products ,$facture->amountProduct, ['class' => 'form-control' . ($errors->has('role_id') ? ' is-invalid' : ''), 'placeholder' => 'Elegir Producto de Factura']) }}
                {!! $errors->first('amountProduct', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::number('price', $product_price , $facture->price_product, ['class' => 'form-control' . ($errors->has('role_id') ? ' is-invalid' : ''), 'placeholder' => 'Elegir Producto de Factura']) }}
                {!! $errors->first('price', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            {{-- <div class="elemento-factura">
                <input type="text" name="descripcion[]" placeholder="Descripción">
                <input type="number" name="cantidad[]" placeholder="Cantidad">
                <input type="number" name="precio[]" placeholder="Precio" step="50">
                <button type="button" class="eliminar-elemento">Eliminar</button>
            </div>
            <button type="button" id="agregar-elemento">Agregar Elemento</button> --}}
        </div>
    </div>
