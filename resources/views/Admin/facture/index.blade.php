@include("layouts.headerAdmin")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Facturas</title>

    <link rel="stylesheet" href="{{ asset("assets/css/Admin/modules/Factures/factures.css") }}">
</head>
<body>
    <!-- Contenido de página -->
    <section class="contenido-pag">
        <!-- Titulo de ventana -->
        <div class="titulo-ventana">
            <h1 class="titulo">Facturas</h1>
        </div>

        <!-- Buscar factura-->
        <div class="cont-busqueda">
            <input type="search" name="buscarFactura" id="buscarFactura" placeholder="Buscar factura por su número">
        </div>

        <!-- Contenedor Facturas -->
        <div class="cont-facturas">
            <!-- Contenedor Lista de Facturas -->
            <div class="cont-lista-facturas">
                <!-- Tabla Facturas -->
                <table class="tabla-facturas" id="tabla-facturas">
                    <!-- Columnas características de factura -->
                    <tr class="columnas-caract-fact">
                        <td class="item-columna num-factura">Número</td>
                        <td class="item-columna fecha-factura">Fecha</td>
                        <td class="item-columna opciones-factura-tabla">Opciones</td>
                    </tr>

                    <!-- Filas Datos de Factura -->
                    @forelse ($factures as $facture)
                        <tr class="filas-datos">
                            <td class="item-fila num-factura-dato">{{ $facture->id }}</td>
                            <td class="item-fila fecha-factura-dato">{{ $facture->date }}</td>
                            <td class="opciones-factura-tabla-dato">
                                <a href=".pdf"><button class="btn-factura btn-pdf"><a href="#" class="link-op-fact">PDF</a><img src="{{ asset("assets/img/Admin/modules/pdf-factura-icono.png") }}" alt="PDF Icono"></button></a>
                                <a href="{{ route('factures.show', $facture->id) }}"><button class="btn-factura btn-ver"><a href="{{ route('factures.show', $facture->id) }}" class="link-op-fact">Ver</a><a href="{{ route('factures.show', $facture->id) }}"><img src="{{ asset("assets/img/Admin/modules/ver-factura-icono.png") }}" alt="Ver Icono" class="icono-op-fact"></button></a>
                                <a href="#"><button class="btn-factura btn-editar"><a href="#" class="link-op-fact">Editar</a><a href="#"><img src="{{ asset("assets/img/Admin/modules/editar-icono.png") }}" alt="Editar Icono"></a></button></a>

                                <form action="{{ route('factures.destroy', $facture->id) }}" method="POST" class="btn-eliminar">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn-factura eliminar-fact" onclick="return confirm('¿Estás seguro de que deseas eliminar esta factura?')"> Eliminar
                                        <img src="{{ asset("assets/img/Admin/modules/eliminar-icono.png") }}" alt="Eliminar Icono">
                                    </button>
                                </form>
                            </td>
                        </tr>

                    {{-- No hay registros de facturas --}}
                    @empty
                        <tr class="filas-datos">
                            <td class="no-records item-fila">No hay Registros de Facturas</td>
                        </tr>
                    @endforelse
                </table>
            </div>

            <!-- Contenedor Opciones de Factura/s -->
            <div class="cont-opciones-factura">
                <!-- Opciones de factura -->
                <div class="opciones-factura">
                    <!-- Nueva Factura  -->
                    <button class="cont-opcion-factura">
                        <a href="{{ route("factures.create") }}"><img src="{{ asset("assets/img/Admin/modules/nueva_factura-icono.png") }}" alt="Nueva Factura Icono"></a>
                        <a href="{{ route("factures.create") }}" class="link-sect-fact">Nueva Factura</a>
                    </button>
                    <!-- Clientes de Factura -->
                    <button class="cont-opcion-factura">
                        <a href="{{ route("customers.index") }}"><img src="{{ asset("assets/img/Admin/modules/clientes-factura-icono.png") }}" alt="Clientes Icono"></a>
                        <a href="{{ route("customers.index") }}" class="link-sect-fact">Clientes</a>
                    </button>
                </div>
            </div>
        </div>
    </section>

        {{-- <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <div style="display: flex; justify-content: space-between; align-items: center;">

                                <span id="card_title">
                                    <h2 class="my-3">Lista de Facturas</h2>
                                </span>

                                <div class="float-right">
                                    <a href="{{ route('factures.create') }}" class="btn btn-primary btn-sm float-right px-3"  data-placement="left">
                                      Nueva Factura
                                    </a>
                                </div>
                                <div class="float-right">
                                    <a href="{{ route("customers.index") }}" class="btn btn-primary btn-sm float-right px-3"  data-placement="left">
                                      Clientes
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="thead">
                                        <tr>
                                            <th>No Fila</th>
                                            <th>Número de factura</th>
                                            <th>Fecha</th>
                                            <th>Fecha última actualización</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($factures as $facture)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td> {{ $facture->id }}</td>
                                                <td>{{ $facture->date }}</td>
                                                <td>{{ $facture->updated_at }}</td>
                                                <td>
                                                    <form action="{{ route('factures.destroy',$facture->id) }}" method="POST">
                                                        <a class="btn btn-sm btn-primary " href="{{ route('factures.show', $facture->id) }}">Ver</a>
                                                        <a class="btn btn-sm btn-success" href="{{ route('factures.edit', $facture->id) }}">Editar</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    {!! $factures->links() !!}
                </div>
            </div>
        </div> --}}
</body>
</html>
