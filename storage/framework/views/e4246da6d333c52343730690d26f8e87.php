<?php $__env->startSection('page-title'); ?>
  <?php if(Auth::user()->type == 'super admin'): ?>
    <?php echo e(__('Affiliate')); ?>

  <?php else: ?>
    <?php echo e(__('Store Affiliate')); ?>

  <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
  <?php if(Auth::user()->type == 'super admin'): ?>
    <?php echo e(__('Affiliate')); ?>

  <?php else: ?>
    <?php echo e(__('Store Affiliate')); ?>

  <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb'); ?>
  <?php if(Auth::user()->type == 'super admin'): ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('Home')); ?></a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Affiliate configurations')); ?></li>
  <?php else: ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('Home')); ?></a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Store Affiliate')); ?></li>
  <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('filter'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <!-- [ Main Content ] start -->
  <div class="row">
    <!-- [ sample-page ] start -->
    <div class="col-sm-12">
      <div class="tab-content" id="pills-tabContent">
        <?php if(Auth::user()->type == 'super admin'): ?>
          <div class="tab-pane fade active show" id="brand_affiliate" role="tabpanel"
            aria-labelledby="brand_settings-tab">
            <div class="active card" id="brand_settings">
              <div class="card-header">
                <h5><?php echo e(__('Brand Affiliats')); ?></h5>
              </div>
              <div class="card-body">
                <form method="POST" action="<?php echo e(route('affiliate.configurations.store')); ?>">
                  <?php echo csrf_field(); ?>
                  <div class="row">
                    <div class="form-group col-md-4">
                      <label for="commission" class="col-form-label"><?php echo e(__('Affiliate Commission %')); ?></label>
                      <input type="text" class="form-control" id="commission" name="commission"
                        placeholder="<?php echo e(__('Affiliate Commission %')); ?>"
                        value="<?php echo e(old('commission', $affiliate?->commission)); ?>">
                      <?php $__errorArgs = ['commission'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                          <strong class="text-danger"><?php echo e($message); ?></strong>
                        </span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="minimum_withdrawal_amount"
                        class="col-form-label"><?php echo e(__('Minimum Withdrawal Amount $')); ?></label>
                      <input type="text" class="form-control" id="minimum_withdrawal_amount"
                        name="minimum_withdrawal_amount" placeholder="<?php echo e(__('Minimum Withdrawal Amount $')); ?>"
                        value="<?php echo e(old('minimum_withdrawal_amount', $affiliate?->minimum_withdrawal_amount)); ?>">
                      <?php $__errorArgs = ['minimum_withdrawal_amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                          <strong class="text-danger"><?php echo e($message); ?></strong>
                        </span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="payout_payment_methods"
                        class="col-form-label"><?php echo e(__('Payout Payment Methods')); ?></label>
                      <div class="changePayment">
                        <select name="payout_payment_methods" id="payout_payment_methods"
                          class="form-control custom-select" data-toggle="select">
                          <option value="Paypal" <?php if($affiliate?->payout_payment_methods == '$code'): ?> selected <?php endif; ?>>
                            Paypal
                          </option>
                        </select>
                      </div>
                      <?php $__errorArgs = ['payout_payment_methods'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                          <strong class="text-danger"><?php echo e($message); ?></strong>
                        </span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    
                    
                    
                  </div>
                  <div class="row">
                    <div class="form-group col-md-3">
                      <label for="allow_commission_continuously"
                        class="col-form-label"><?php echo e(__('Allow Commission Continuously')); ?></label>
                      <div class="col-md-4">
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" name="allow_commission_continuously"
                            data-toggle="switchbutton" id="allow_commission_continuously"
                            <?php echo e(old('allow_commission_continuously', $affiliate?->allow_commission_continuously) ? 'checked' : ''); ?>>
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="enable_affiliate_system"
                        class="col-form-label"><?php echo e(__('Enable Affiliate System')); ?></label>
                      <div class="col-md-4">
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" name="enable_affiliate_system"
                            data-toggle="switchbutton" id="enable_affiliate_system"
                            <?php echo e(old('enable_affiliate_system', $affiliate?->enable_affiliate_system) ? 'checked' : ''); ?>>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary"><?php echo e(__('Save Changes')); ?></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <!-- [ Main Content ] end -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script-page'); ?>
  <script src="<?php echo e(asset('custom/libs/jquery-mask-plugin/dist/jquery.mask.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bsswhats/public_html/resources/views/affiliate/configurations.blade.php ENDPATH**/ ?>