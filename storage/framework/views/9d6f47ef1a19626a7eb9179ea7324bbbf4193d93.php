<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <?php echo e(Form::label('typesOfProducts')); ?>

            <?php echo e(Form::text('typesOfProducts', $category->typesOfProducts, ['class' => 'form-control' . ($errors->has('typesOfProducts') ? ' is-invalid' : ''), 'placeholder' => 'Typesofproducts'])); ?>

            <?php echo $errors->first('typesOfProducts', '<div class="invalid-feedback">:message</div>'); ?>

        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div><?php /**PATH C:\xampp\htdocs\hardwareStore\resources\views/category/form.blade.php ENDPATH**/ ?>