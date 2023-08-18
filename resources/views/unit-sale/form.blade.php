<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('product_id') }}
            {{ Form::text('product_id', $unitSale->product_id, ['class' => 'form-control' . ($errors->has('product_id') ? ' is-invalid' : ''), 'placeholder' => 'Product Id']) }}
            {!! $errors->first('product_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('amountProduct') }}
            {{ Form::text('amountProduct', $unitSale->amountProduct, ['class' => 'form-control' . ($errors->has('amountProduct') ? ' is-invalid' : ''), 'placeholder' => 'Amountproduct']) }}
            {!! $errors->first('amountProduct', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('priceProduct') }}
            {{ Form::text('priceProduct', $unitSale->priceProduct, ['class' => 'form-control' . ($errors->has('priceProduct') ? ' is-invalid' : ''), 'placeholder' => 'Priceproduct']) }}
            {!! $errors->first('priceProduct', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>