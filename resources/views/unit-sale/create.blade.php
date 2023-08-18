@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Unit Sale
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Unit Sale</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('unit-sales.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('unit-sale.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
