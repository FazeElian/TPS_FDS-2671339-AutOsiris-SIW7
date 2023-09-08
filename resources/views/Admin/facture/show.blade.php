<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Factura | Número {{ $facture->id }}</title>
</head>
<body>
    <!-- Contenido de página -->
    <section class="contenido-pag">
        <!-- Titulo de ventana -->
        <div class="titulo-ventana">
            <h1>Facturas</h1>
        </div>

        <section class="content container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-left">
                                <span class="card-title">{{ __('Show') }} Facture</span>
                            </div>
                            <div class="float-right">
                                <a class="btn btn-primary" href="{{ route('factures.index') }}"> {{ __('Back') }}</a>
                            </div>
                        </div>

                        <div class="card-body">

                            <div class="form-group">
                                <strong>Role Id:</strong>
                                {{ $facture->role_id }}
                            </div>
                            <div class="form-group">
                                <strong>Date:</strong>
                                {{ $facture->date }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</body>
</html>

