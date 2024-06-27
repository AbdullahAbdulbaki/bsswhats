<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Manage Blogs')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-breadcrumb'); ?>
    <?php echo e(__('Blogs')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('action-btn'); ?>
    <div>

            <a data-url="<?php echo e(route('blog_backend.create')); ?>" data-ajax-popup="true"
                data-bs-toggle="tooltip" title="<?php echo e(__('Create')); ?>" title="<?php echo e(__('Create')); ?>"
                data-title="<?php echo e(__('Create New Blog')); ?>" class="btn btn-sm btn-primary">
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
                                    <th scope="col"><?php echo e(__('Title')); ?></th>
                                    <th scope="col"><?php echo e(__('Category')); ?></th>
                                    <th scope="col"><?php echo e(__('Short Des.')); ?></th>
                                    <th scope="col"><?php echo e(__('Long Des.')); ?></th>
                                    <th scope="col"><?php echo e(__('Lang')); ?></th>
                                    <th scope="col"><?php echo e(__('Img')); ?></th>
                                    <th scope="col"><?php echo e(__('Created At')); ?></th>
                                    <th class="text-end"><?php echo e(__('Action')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <th scope="row"><?php echo e(++$index); ?></th>
                                        <td><?php echo e($blog->title); ?></td>
                                        <td><?php echo e($blog->category->name); ?></td>
                                        <td><?php echo e(\Illuminate\Support\Str::limit($blog->short_description, 30)); ?></td>
                                        <td><?php echo e(\Illuminate\Support\Str::limit($blog->long_description, 30)); ?></td>
                                        <td><?php echo e($blog->language->fullname); ?></td>
                                        <td><img src="<?php echo e(asset('landing/blogs_super_admin/' . $blog->img)); ?>" height="200" width="200" alt="Blog Image"></td>
                                        <td><?php echo e($blog->created_at); ?></td>

                                            <td>
                                                <span>

                                                        <div class="action-btn bg-danger ms-2 float-end">
                                                            <form method="POST"
                                                                action="<?php echo e(route('blog_backend.destroy', $blog->id)); ?>"
                                                                id="user-form-<?php echo e($blog->id); ?>">
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
                                                                data-url="<?php echo e(route('blog_backend.edit', $blog->id)); ?>"
                                                                data-ajax-popup="true"
                                                                data-title="<?php echo e(__('Edit Blog')); ?>"
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bsswhats/public_html/resources/views/Blog/index.blade.php ENDPATH**/ ?>