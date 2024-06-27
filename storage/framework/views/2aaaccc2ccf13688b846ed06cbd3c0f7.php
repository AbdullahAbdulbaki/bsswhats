
    <?php echo e(Form::open(array('route' => array('product.import'),'method'=>'post', 'enctype' => "multipart/form-data"))); ?>

    <div class="modal-body">
        <div class="row">
            <div class="col-md-12 mb-6">
                <?php echo e(Form::label('file',__('Download Sample Product CSV File'),['class'=>'col-form-label'])); ?>

            <a href="<?php echo e(asset(Storage::url('uploads/sample')).'/sample-product.xlsx'); ?>" class="btn btn-sm btn-primary btn-icon-only rounded-circl">
                <i class="fa fa-download"></i>
            </a>
        </div>
        <div class="col-md-12 mt-1">
            <?php echo e(Form::label('file',__('Select CSV File'),['class'=>'col-form-label'])); ?>

            <div class="choose-file form-group">
                <label for="file" class="col-form-label">
                    <input type="file" class="form-control" name="file" id="file" data-filename="upload_file" required>
                </label>
                <p class="upload_file"></p>
            </div>
        </div>
        </div>
    </div>

<div class="modal-footer">
    <button type="button" class="btn  btn-light" data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>
    <button type="submit" class="btn  btn-primary add-variants"><?php echo e(__('Upload')); ?></button>
</div>
<?php echo e(Form::close()); ?>

<?php /**PATH /home/bsswhats/public_html/resources/views/product/import.blade.php ENDPATH**/ ?>