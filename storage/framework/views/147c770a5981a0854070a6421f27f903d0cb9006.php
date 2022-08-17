<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <?php echo e(Form::label('product')); ?>

            <?php echo e(Form::text('product', $paint->product, ['class' => 'form-control' . ($errors->has('product') ? ' is-invalid' : ''), 'placeholder' => 'Product'])); ?>

            <?php echo $errors->first('product', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('description')); ?>

            <?php echo e(Form::text('description', $paint->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description'])); ?>

            <?php echo $errors->first('description', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('brand')); ?>

            <?php echo e(Form::text('brand', $paint->brand, ['class' => 'form-control' . ($errors->has('brand') ? ' is-invalid' : ''), 'placeholder' => 'Brand'])); ?>

            <?php echo $errors->first('brand', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('price')); ?>

            <?php echo e(Form::text('price', $paint->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Price'])); ?>

            <?php echo $errors->first('price', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('idCategory')); ?>

            <?php echo e(Form::select('idCategory', $categories, $paint->idCategory, ['class' => 'form-control' . ($errors->has('idCategory') ? ' is-invalid' : ''), 'placeholder' => 'Idcategory'])); ?>

            <?php echo $errors->first('idCategory', '<div class="invalid-feedback">:message</div>'); ?>

        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div><?php /**PATH C:\xampp\htdocs\hardwareStore\resources\views/paint/form.blade.php ENDPATH**/ ?>