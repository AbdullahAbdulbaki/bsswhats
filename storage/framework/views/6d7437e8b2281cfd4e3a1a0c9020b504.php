<?php if (isset($component)) { $__componentOriginal69dc84650370d1d4dc1b42d016d7226b = $component; } ?>
<?php $component = App\View\Components\GuestLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\GuestLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.auth-card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('auth-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <?php $__env->startSection('title'); ?>
            <?php echo e(__('Reset Password')); ?>

        <?php $__env->stopSection(); ?>
        <?php
            $settings = Utility::settings();
        ?>
        <?php $__env->startSection('language-bar'); ?>
            <?php
                $languages = App\Models\Utility::languages();
            ?>
            <div class="lang-dropdown-only-desk">
                <li class="dropdown dash-h-item drp-language">
                    <a class="dash-head-link dropdown-toggle btn" href="#" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <span class="drp-text"> <?php echo e(ucFirst($languages[$lang])); ?>

                        </span>
                    </a>
                    <div class="dropdown-menu dash-h-dropdown dropdown-menu-end">
                        <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('change.langPass', $code)); ?>" tabindex="0"
                                class="dropdown-item <?php echo e($code == $lang ? 'active' : ''); ?>">
                                <span><?php echo e(ucFirst($language)); ?></span>
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </li>
            </div>
        <?php $__env->stopSection(); ?>

        <?php $__env->startSection('content'); ?>
            <div class="card-body">
                <div>
                    <h2 class="mb-3 f-w-600"><?php echo e(__('Forgot Password')); ?></h2>
                </div>
                <?php if(session('status')): ?>
                    <div class="alert alert-primary">
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?>
                <form method="POST" action="<?php echo e(route('password.email')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="">
                        <div class="form-group mb-3">
                            <label class="form-label"><?php echo e(__('Email')); ?></label>
                            <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email"
                                placeholder="<?php echo e(__('Enter your email')); ?>" autofocus>
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <small><?php echo e($message); ?></small>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <?php if($settings['recaptcha_module'] == 'yes'): ?>
                            <div class="form-group mb-3">
                                <?php echo NoCaptcha::display(); ?>

                                <?php $__errorArgs = ['g-recaptcha-response'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="small text-danger" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        <?php endif; ?>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-block mt-2"
                                id="login_button"><?php echo e(__('Send Password Reset Link')); ?></button>
                        </div>


                        <div class="my-4 text-xs text-center">
                            <p>
                                <?php echo e(__('Already have an account?')); ?>

                                <a href="<?php echo e(route('login', $lang)); ?>"><?php echo e(__('Login')); ?></a>
                            </p>
                        </div>

                    </div>
                </form>
            </div>
        <?php $__env->stopSection(); ?>
        <?php $__env->startPush('custom-scripts'); ?>
            <?php if($settings['recaptcha_module'] == 'yes'): ?>
                <?php echo NoCaptcha::renderJs(); ?>

            <?php endif; ?>
        <?php $__env->stopPush(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $component = $__componentOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>
<?php /**PATH /home/bsswhats/public_html/resources/views/auth/forgot-password.blade.php ENDPATH**/ ?>