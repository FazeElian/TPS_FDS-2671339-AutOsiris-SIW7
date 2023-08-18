@include("layouts.headerAdmin")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Venta por unidad | Editar</title>
</head>
<body>
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Unit Sale</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('unit-sales.update', $unitSale->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf
                            @include('Admin.sales.unit-sale.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
