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
                        <?php echo e(Form::open(['route' => 'screenshots.store', 'method' => 'post', 'enctype' => 'multipart/form-data'])); ?>

                        <?php echo csrf_field(); ?>
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-lg-10 col-md-6 col-sm-10">
                                        <h5><?php echo e(__('Screenshots')); ?></h5>
                                    </div>
                                    <div class="col switch-width text-end">
                                        <div class="form-group mb-0">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" data-toggle="switchbutton" data-onstyle="primary"
                                                    class="" name="screenshots_status" id="screenshots_status"
                                                    <?php echo e($settings['screenshots_status'] == 'on' ? 'checked="checked"' : ''); ?>>
                                                <label class="custom-control-label" for="screenshots_status"></label>
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

                                            <?php echo e(Form::text('screenshots_heading', $settings['screenshots_heading'], ['class' => 'form-control ', 'placeholder' => __('Enter Heading')])); ?>

                                            <?php $__errorArgs = ['mail_host'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-mail_driver" role="alert">
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

                                            <?php echo e(Form::text('screenshots_description', $settings['screenshots_description'], ['class' => 'form-control', 'placeholder' => __('Enter Description')])); ?>

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
                                <button class="btn btn-print-invoice btn-primary m-r-10"
                                    type="submit"><?php echo e(__('Save Changes')); ?></button>
                            </div>
                        <?php echo e(Form::close()); ?>

                    </div>
    
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-lg-9 col-md-9 col-sm-9">
                                    <h5><?php echo e(__('Screenshot List')); ?></h5>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 justify-content-end d-flex">
                                    <a data-size="lg" data-url="<?php echo e(route('screenshots_create')); ?>" data-ajax-popup="true"
                                        data-bs-toggle="tooltip" data-title="<?php echo e(__('Create Screenshot')); ?>" title="<?php echo e(__('Create Screenshot')); ?>" class="btn btn-sm btn-primary">
                                        <i class="ti ti-plus text-light"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
    
                            
    
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th><?php echo e(__('No')); ?></th>
                                            <th><?php echo e(__('Name')); ?></th>
                                            <th><?php echo e(__('Action')); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(is_array($screenshots) || is_object($screenshots)): ?>
                                            <?php
                                                $no = 1;
                                            ?>
                                            <?php $__currentLoopData = $screenshots; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($no++); ?></td>
                                                    <td><?php echo e($value['screenshots_heading']); ?></td>
                                                    <td>
                                                        <span>
                                                            <div class="action-btn ms-2">
                                                                <a href="#" class="btn btn-sm btn-icon  bg-light-secondary me-2"
                                                                    data-url="<?php echo e(route('screenshots_edit', $key)); ?>"
                                                                    data-ajax-popup="true" data-title="<?php echo e(__('Edit Screenshot')); ?>"
                                                                    data-size="lg" data-bs-toggle="tooltip"
                                                                    title="<?php echo e(__('Edit Screenshot')); ?>"
                                                                    data-original-title="<?php echo e(__('Edit Screenshot')); ?>">
                                                                    <i class="ti ti-pencil"></i>
                                                                </a>
                                                            </div>
    
                                                            <div class="action-btn ms-2">
                                                                <?php echo Form::open(['method' => 'GET', 'route' => ['screenshots_delete', $key], 'id' => 'delete-form-' . $key]); ?>

    
                                                                <a class=" show_confirm btn btn-sm btn-icon  bg-light-secondary me-2"
                                                                    href="#" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top" title="<?php echo e(__('Delete')); ?>">
                                                                    <i class="ti ti-trash f-20"></i>
                                                                </a>
                                                                <?php echo Form::close(); ?>

                                                            </div>
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bsswhats/public_html/Modules/LandingPage/Resources/views/landingpage/screenshots/index.blade.php ENDPATH**/ ?>