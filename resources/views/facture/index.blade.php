@extends('layouts.app')

@section('template_title')
    Facture
@endsection

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Facture') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('factures.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                        <div class="mx-5 my-5">
                            <h1>Detalles de la Factura</h1>
                            <h2>Información de la Factura</h2>

                            @foreach ($factures as $facture)
                                <p><strong>Fecha:</strong> {{ $facture->date }}</p>
                                <p><strong>Cliente:</strong> {{ $facture->role->name }}</p>
                            @endforeach

                            <h2>Productos</h2>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Producto</th>
                                        <th>Cantidad</th>
                                        <th>Precio Unitario</th>
                                        <th>Precio Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($facture->product as $product)
                                        <tr>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->pivot->amountProduct }}</td> {{-- Utilizamos pivot para acceder a las columnas adicionales --}}
                                            <td>${{ $product->price }}</td>
                                            <td>${{ $product->pivot->totalProduct }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
                </div>
                {!! $factures->links() !!}
            </div>
        </div>
    </div>
@endsection
