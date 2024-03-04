@include("layouts.headerAdmin")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrador | Clientes</title>

    {{-- Hoja de estilos para este archivo --}}
    <link rel="stylesheet" href="{{ asset("assets/css/Admin/modules/Customers/customers-styles.css") }}">
</head>
<body>
    <!-- Contenido de página -->
    <section class="contenido-pag">
        <!-- Titulo de ventana -->
        <div class="titulo-ventana">
            <h1>Clientes</h1>
        </div>

        <!-- Tabla Clientes -->
        <table class="tabla-clientes" id="tabla-clientes">
            <tr class="columnas-caract">
                <td class="no item-columna">No</td>
                <td class="nombre-cliente item-columna">Nombre</td>
                <td class="descripcion-cliente item-columna">Descripción</td>
                <td class="acciones-cliente item-columna">Acciones</td>
            </tr>

            @forelse ($customers as $customer)
                <tr class="filas-datos">
                    <td class="no-dato item-fila">{{ ++$i }}</td>
                    <td class="nombre-cliente-dato item-fila">{{ $customer->name }}</td>
                    <td class="descripcion-cliente-dato item-fila">{{ $customer->description }}</td>
                    <td class="acciones-cliente-dato item-fila">
                        <button class="btn-editar">
                            <a href="{{ route("customers.edit", $customer->id) }}"><h2>Editar</h2></a>
                            <a href="{{ route("customers.edit", $customer->id) }}"><img src="{{ asset("assets/img/Admin/modules/editar-icono.png") }}"></a>
                        </button>
                        <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" class="eliminar-cliente">
                            @csrf
                            @method('DELETE')
                            <button class="btn-eliminar" onclick="return confirm('¿Estás seguro de que deseas eliminar este cliente?')">
                                <h2>Eliminar</h2>
                                <img src="{{ asset("assets/img/Admin/modules/eliminar-icono.png") }}">
                            </button>
                        </form>
                    </td>
                </tr>

            @empty
                <tr class="filas-datos">
                    <td class="no-records item-fila">No hay Registros de Clientes</td>
                </tr>
            @endforelse
        </table>

        {{-- Paginación de registros --}}
        {{ $customers->onEachSide(3)->links('Admin.pagination') }}

        <!-- Opciones clientes -->
        <div class="opciones-clientes">
            <!-- Botón: Cancelar -->
            <button class="dp-hidden">
            </button>
            <button class="añadir-fila">
                <a href="{{ route("customers.create") }}"><h2>Añadir Cliente</h2></a>
            </button>

            {{-- Alerta de cliente de facturas creado --}}
            @if (session('created'))
                <script>
                    alert("{{ session('created') }}");
                </script>
            @endif

            {{-- Alerta de cliente de facturas actualizado --}}
            @if (session('updated'))
                <script>
                    alert("{{ session('updated') }}");
                </script>
            @endif

            {{-- Alerta de cliente de facturas eliminado --}}
            @if (session('deleted'))
                <script>
                    alert("{{ session('deleted') }}");
                </script>
            @endif
        </div>
    </section>
</body>
</html>
