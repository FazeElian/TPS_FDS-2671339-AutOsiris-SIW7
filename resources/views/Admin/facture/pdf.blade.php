<!DOCTYPE html>
<html>
<head>
    <title>Factura No. {{ $facture->id }}</title>
</head>
<body>
    <h1>Detalles de la Factura</h1>
    <p>Fecha: {{ $facture->date }}</p>
    <p>Cliente: {{ $facture->customer->name }}</p>

    <h2>Lista de Productos:</h2>
    <ul>
        @foreach ($facture->products as $product)
            <li>{{ $product->name }} - Cantidad: {{ $product->pivot->quantity }} - Precio: {{ $product->pivot->price }}</li>
        @endforeach
    </ul>

    <p>Total: {{ $facture->total }}</p>
</body>
</html>
