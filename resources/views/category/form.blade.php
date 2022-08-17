<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('typesOfProducts') }}
            {{ Form::text('typesOfProducts', $category->typesOfProducts, ['class' => 'form-control' . ($errors->has('typesOfProducts') ? ' is-invalid' : ''), 'placeholder' => 'Typesofproducts']) }}
            {!! $errors->first('typesOfProducts', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>