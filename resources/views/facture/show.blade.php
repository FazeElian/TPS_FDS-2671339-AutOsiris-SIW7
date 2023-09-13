@extends('layouts.app')

@section('template_title')
    {{ $facture->name ?? "{{ __('Show') Facture" }}
@endsection

@section('content')
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
@endsection
