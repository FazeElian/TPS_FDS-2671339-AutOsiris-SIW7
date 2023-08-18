@extends('layouts.app')

@section('template_title')
    {{ $unitSale->name ?? "{{ __('Show') Unit Sale" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Unit Sale</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('unit-sales.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Product Id:</strong>
                            {{ $unitSale->product_id }}
                        </div>
                        <div class="form-group">
                            <strong>Amountproduct:</strong>
                            {{ $unitSale->amountProduct }}
                        </div>
                        <div class="form-group">
                            <strong>Priceproduct:</strong>
                            {{ $unitSale->priceProduct }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
