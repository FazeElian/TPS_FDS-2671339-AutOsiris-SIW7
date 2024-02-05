@include("layouts.headerAdmin")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ventas | Editar</title>

    {{-- Estilos para este archivo --}}
    <link rel="stylesheet" href="{{ asset("assets/css/Admin/modules/Sales/form-styles.css") }}">
</head>
<body>
    <!-- Contenido de página -->
    <section class="contenido-pag">
        <!-- Titulo de ventana -->
        <div class="titulo-ventana">
            <h1 class="titulo">Editar Venta</h1>
        </div>

        @includeif('partials.errors')
        <form method="POST" action="{{ route('sales.update', $sale->id) }}"  role="form" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            @csrf

            <!-- Contenedor de nueva venta -->
            <div class="cont-venta">
                <!-- Contenedor información de venta -->
                <div class="cont-info-venta">
                    <!-- Fecha -->
                    <label for="" class="lbl-venta">Fecha: </label>
                    {{ Form::date('date', $sale->date ?? now()->toDateString(), ['class' => 'inp-venta' . ($errors->has('date') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar una fecha', "id" => "fechaVenta", "name" => "date"]) }}
                </div>

                <!-- Tabla lista de productos de venta -->
                <table class="tab-productos-venta" id="listaProductos">
                    <!-- Columnas características de lista de productos -->
                    <tr class="columnas-caract">
                        <td class="item-columna nombre-prod">Nombre producto</td>
                        <td class="item-columna cantidad-prod">Cantidad</td>
                        <td class="item-columna precio-prod">Precio /u</td>
                        <td class="item-columna elim-fila">
                            <img src="{{ asset("assets/img/Admin/modules/icono-eliminar-rojo.png") }}" alt="">
                        </td>
                    </tr>

                    <!-- Mostrar productos asociados a la factura -->
                    @foreach ($selectedProducts as $product)
                        <tr class="filas-datos">
                            <td class="item-fila nombre-prod-dato">
                                <select name='product_id[]' id="seleccionarProducto">
                                    @foreach ($allProducts as $availableProduct)
                                        <option value='{{ $availableProduct->id }}' {{ $availableProduct->id == $product->id ? 'selected' : '' }}>
                                            {{ $availableProduct->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="item-fila cantidad-prod">
                                <input type="number" name="quantity[]" id="cantidadProd" placeholder="#" value="{{ $product->pivot->quantity }}">
                            </td>
                            <td class="item-fila precio-prod">
                                <input type="number" name="price[]" id="precioProd" placeholder="$$$" value="{{ $product->pivot->price }}">
                            </td>
                            <td class="item-fila elim-fila-dato">
                                <img src="{{ asset("assets/img/Admin/modules/icono-eliminar-rojo.png") }}" alt="Eliminar Producto" onclick="removeRow(this)">
                            </td>
                        </tr>
                    @endforeach
                </table>

                <!-- Contenedor añadir fila -->
                <div class="cont-anadir-fila">
                    <!-- Botón -->
                    <div class="btn-anadir-fila" id="btn-anadir-fila">
                        Añadir Producto
                    </div>
                </div>
            </div>

            {{-- Opciones Venta --}}
            <div class="opciones-venta">
                <!-- Botón: Cancelar -->
                <button class="bott-cancelar" type="button">
                    <a href="{{ route("sales.index") }}"><h2>Cancelar</h2></a>
                </button>
                <button class="bott-guardar-cambios" type="submit">
                    <a href="#"><h2>Actualizar Venta</h2></a>
                </button>
            </div>
        </form>
    </section>
</body>
</html>
<script>
    document.getElementById('btn-anadir-fila').addEventListener('click', function() {
        const table = document.getElementById('listaProductos').getElementsByTagName('tbody')[0]; // Cambia el índice a 0
        const newRow = table.insertRow(table.rows.length);

        newRow.classList.add("filas-datos");

        const productName = newRow.insertCell(0);
        const productQuantity = newRow.insertCell(1);
        const productPrice = newRow.insertCell(2);
        const deleteRowBtn = newRow.insertCell(3);

        const productList = {!! json_encode($allProducts) !!};
        const select = document.createElement('select');
        select.name = 'product_id[]';
        select.id = "seleccionarProducto";
        productName.classList.add('item-fila', 'nombre-prod-dato');

        const defaultOption = document.createElement('option');
        defaultOption.value = '';
        defaultOption.text = 'Seleccionar producto';
        select.appendChild(defaultOption);

        for (const product of productList) {
            const option = document.createElement('option');
            option.value = product.id;
            option.text = product.name;
            select.appendChild(option);
        }

        productName.appendChild(select);

        productQuantity.innerHTML = '<td><input type="number" name="quantity[]" id="cantidadProd" placeholder="#"></td>';
        productQuantity.className = "item-fila cantidad-prod";

        productPrice.innerHTML = '<td><input type="number" name="price[]" id="precioProd" placeholder="$$$"></td>';
        productPrice.className = "item-fila precio-prod";

        // Agregar un listener de cambio al select para obtener el precio del producto seleccionado
        select.addEventListener('change', function() {
            const selectedProductId = select.value;

            // Buscar el producto seleccionado en la lista de productos
            const selectedProduct = productList.find(product => product.id == selectedProductId);

            // Actualizar el campo de precio con el precio del producto seleccionado
            if (selectedProduct) {
                const priceInput = productPrice.querySelector('input');
                priceInput.value = selectedProduct.price;
            }
        });

        deleteRowBtn.innerHTML = '<td><img src="{{ asset("assets/img/Admin/modules/icono-eliminar-rojo.png") }}" alt="Eliminar Producto" onclick="removeRow(this)"></td>';
        deleteRowBtn.className = "item-fila elim-fila-dato";
    });
</script>
