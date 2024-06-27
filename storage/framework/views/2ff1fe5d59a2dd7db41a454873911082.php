<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Manage Blog Category')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-breadcrumb'); ?>
    <?php echo e(__('Categories')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('action-btn'); ?>
    <div>

            <a data-url="<?php echo e(route('blog_categories.create')); ?>" data-ajax-popup="true"
                data-bs-toggle="tooltip" title="<?php echo e(__('Create')); ?>" title="<?php echo e(__('Create')); ?>"
                data-title="<?php echo e(__('Create New Category')); ?>" class="btn btn-sm btn-primary">
                <i class="ti ti-plus"></i>
            </a>

    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <table class="table mb-0 pc-dt-simple" id="helpdesk-ticketcategory">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col"><?php echo e(__('Name')); ?></th>
                                    <th scope="col"><?php echo e(__('Created At')); ?></th>
                                    <th class="text-end"><?php echo e(__('Action')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $blog_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <th scope="row"><?php echo e(++$index); ?></th>
                                        <td><?php echo e($category->name); ?></td>
                                        <td><?php echo e($category->created_at); ?></td>
                                            <td>
                                                <span>
                                                    
                                                        <div class="action-btn bg-danger ms-2 float-end">
                                                            <form method="POST"
                                                                action="<?php echo e(route('blog_categories.destroy', $category->id)); ?>"
                                                                id="user-form-<?php echo e($category->id); ?>">
                                                                <?php echo csrf_field(); ?>
                                                                <?php echo method_field('DELETE'); ?>
                                                                <input name="_method" type="hidden" value="DELETE">
                                                                <button type="button"
                                                                    class="mx-3 btn btn-sm d-inline-flex align-items-center show_confirm"
                                                                    data-bs-toggle="tooltip" title='Delete'>
                                                                    <span class="text-white"> <i class="ti ti-trash"></i></span>
                                                                </button>
                                                            </form>
                                                        </div>


                                                        <div class="action-btn bg-info ms-2 float-end">
                                                            <a class="mx-3 btn btn-sm align-items-center"
                                                                data-url="<?php echo e(route('blog_categories.edit', $category->id)); ?>"
                                                                data-ajax-popup="true"
                                                                data-title="<?php echo e(__('Edit Blog Category')); ?>"
                                                                data-bs-toggle="tooltip" title="<?php echo e(__('Edit')); ?>"
                                                                data-original-title="<?php echo e(__('Edit')); ?>">
                                                                <i class="ti ti-pencil text-white"></i>
                                                            </a>
                                                        </div>

                                                </span>
                                            </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <?php echo $__env->make('layouts.nodatafound', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bsswhats/public_html/resources/views/Blog_category/index.blade.php ENDPATH**/ ?>