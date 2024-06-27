<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Landing Page')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
    <li class="breadcrumb-item"><?php echo e(__('Landing Page')); ?></li>
<?php $__env->stopSection(); ?>

<?php
    $settings = \Modules\LandingPage\Entities\LandingPageSetting::settings();
    $logo = \App\Models\Utility::get_file('uploads/landing_page_image');

?>

<?php $__env->startPush('script-page'); ?>
    <script>
        // document.getElementById('home_banner').onchange = function() {
        //     var src = URL.createObjectURL(this.files[0])
        //     document.getElementById('image').src = src
        // }
        // document.getElementById('home_logo').onchange = function() {
        //     var src = URL.createObjectURL(this.files[0])
        //     document.getElementById('image1').src = src
        // }
    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
    <li class="breadcrumb-item"><?php echo e(__('Landing Page')); ?></li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('action-btn'); ?>
    <ul class="nav nav-pills cust-nav   rounded  mb-3" id="pills-tab" role="tablist">
        <?php echo $__env->make('landingpage::layouts.tab', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </ul>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                
                <div>
                    <div class="card">
                        <?php echo e(Form::model(null, ['route' => ['join_us.store'], 'method' => 'POST'])); ?>

                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h5 class="mb-2"><?php echo e(__('Join User')); ?></h5>
                                    </div>
                                    <div class="col switch-width text-end">
                                        <div class="form-group mb-0">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" data-toggle="switchbutton" data-onstyle="primary"
                                                    class="" name="joinus_status" id="joinus_status"
                                                    <?php echo e($settings['joinus_status'] == 'on' ? 'checked="checked"' : ''); ?>>
                                                <label class="custom-control-label" for="joinus_status"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="card-body">
                                <div class="row">
    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <?php echo e(Form::label('Heading', __('Heading'), ['class' => 'form-label'])); ?>

                                            <?php echo e(Form::text('joinus_heading', $settings['joinus_heading'], ['class' => 'form-control', 'placeholder' => __('Enter Description')])); ?>

                                            <?php $__errorArgs = ['mail_port'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-mail_port" role="alert">
                                                    <strong class="text-danger"><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <?php echo e(Form::label('Description', __('Description'), ['class' => 'form-label'])); ?>

                                            <?php echo e(Form::text('joinus_description', $settings['joinus_description'], ['class' => 'form-control', 'placeholder' => __('Enter Description')])); ?>

                                            <?php $__errorArgs = ['mail_port'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-mail_port" role="alert">
                                                    <strong class="text-danger"><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
    
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <input class="btn btn-print-invoice btn-primary m-r-10" type="submit"
                                    value="<?php echo e(__('Save Changes')); ?>">
                            </div>
                        <?php echo e(Form::close()); ?>

                    </div>
    
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-lg-9 col-md-9 col-sm-9">
                                    <h5><?php echo e(__('Join Us User')); ?></h5>
                                </div>
                                
                            </div>
                        </div>
                        <div class="card-body">
    
                            
    
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th><?php echo e(__('Email')); ?></th>
                                            <th><?php echo e(__('Action')); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
    
                                        <?php if(is_array($join_us) || is_object($join_us)): ?>
                                            <?php $__currentLoopData = $join_us; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($value->email); ?></td>
                                                    <td>
                                                        <span>
                                                            
                                                                <?php echo Form::open(['method' => 'Delete', 'route' => ['join_us.destroy', $value->id]]); ?>

                                                                <a class="btn btn-sm btn-icon  bg-light-secondary me-2 show_confirm"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="<?php echo e(__('Delete')); ?>">
                                                                    <i class="ti ti-trash f-20"></i>
                                                                </a>
                                                                <?php echo Form::close(); ?>

    
                                                            
                                                        </span>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                 
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bsswhats/public_html/Modules/LandingPage/Resources/views/landingpage/joinus.blade.php ENDPATH**/ ?>