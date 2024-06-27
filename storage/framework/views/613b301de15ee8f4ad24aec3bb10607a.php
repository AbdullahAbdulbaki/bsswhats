<?php
    $settings = App\Models\Utility::settings();
?>
<?php
    $settings = Utility::settings();
    $setting = App\Models\Utility::colorset();
    $languages = App\Models\Utility::languages();
    
    $color = !empty($setting['color']) ? $setting['color'] : 'theme-3';

    if(isset($setting['color_flag']) && $setting['color_flag'] == 'true')
    {
        $themeColor = 'custom-color';
    }
    else {
        $themeColor = $color;
    }
    $company_logo = \App\Models\Utility::GetLogo();
    $logo=\App\Models\Utility::get_file('uploads/logo/');
    $lang = \App::getLocale('lang');

    
?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Register')); ?>

<?php $__env->stopSection(); ?>

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
                            <a href="<?php echo e(route('register', $code)); ?>" tabindex="0"
                                class="dropdown-item <?php echo e($code == $lang ? 'active' : ''); ?>">
                                <span><?php echo e(ucFirst($language)); ?></span>
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </li>
            </div>
        <?php $__env->stopSection(); ?>


<!doctype html>
<!-- Martex - Software, App, SaaS & Startup Landing Pages Pack design by DSAThemes (http://www.dsathemes.com) -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">




	<head>

		 <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Dashboard Template Description" />
    <meta name="keywords" content="Dashboard Template" />
    <meta name="author" content="Rajodiya Infotech" />

    <!-- Favicon icon -->
    <link rel="icon" href="<?php echo e(asset(Storage::url('uploads/logo/')).'/favicon.png' . '?timestamp='. time()); ?>" type="image/png">

    <link rel="stylesheet" href="<?php echo e(asset('custom/libs/animate.css/animate.min.css')); ?>" id="stylesheet">



    <style>
        :root {
            --color-customColor: <?= $color ?>;    
        }
                .dash-header {
    position: fixed; /* Ensures the header stays at the top */
    top: 0;
    width: 100%;
    z-index: 1000; /* High z-index to ensure it appears above other elements */
}
    </style>


        <link rel="stylesheet" href="<?php echo e(asset('css/custom-color.css')); ?>">
				
  		<!-- SITE TITLE -->
		<title><?php echo e((\App\Models\Utility::getValByName('title_text')) ? \App\Models\Utility::getValByName('title_text') : config('app.name', 'WhatsStore SaaS')); ?> - <?php echo $__env->yieldContent('title'); ?></title>
							
		<!-- FAVICON AND TOUCH ICONS -->
		<!--link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
		<link rel="icon" href="images/apple-touch-icon.png" type="image/x-icon"-->

		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">
		
		<!-- BOOTSTRAP CSS -->
		<link href="<?php echo e(asset('public/css_23/bootstrap.min.css')); ?>" rel="stylesheet">
				
		<!-- FONT ICONS -->
		<link href="<?php echo e(asset('public/css_23/flaticon.css')); ?>" rel="stylesheet">

		<!-- PLUGINS STYLESHEET -->
		<link href="<?php echo e(asset('public/css_23/menu.css')); ?>" rel="stylesheet">	
		<link id="effect" href="<?php echo e(asset('public/css_23/dropdown-effects/fade-down.css')); ?>" media="all" rel="stylesheet">
		<link href="<?php echo e(asset('public/css_23/magnific-popup.css')); ?>" rel="stylesheet">	
		<link href="<?php echo e(asset('public/css_23/owl.carousel.min.css')); ?>" rel="stylesheet">
		<link href="<?php echo e(asset('public/css_23/owl.theme.default.min.css')); ?>" rel="stylesheet">
		<link href="<?php echo e(asset('public/css_23/lunar.css')); ?>" rel="stylesheet">

		<!-- ON SCROLL ANIMATION -->
		<link href="<?php echo e(asset('public/css_23/animate.css')); ?>" rel="stylesheet">

		<!-- TEMPLATE CSS -->
		<link href="<?php echo e(asset('public/css_23/blue-theme.css')); ?>" rel="stylesheet">
		<!-- <link href="css/crocus-theme.css" rel="stylesheet"> -->
		<!-- <link href="css/green-theme.css" rel="stylesheet"> -->
		<!-- <link href="css/magenta-theme.css" rel="stylesheet"> -->
		<!-- <link href="css/pink-theme.css" rel="stylesheet"> -->
		<!-- <link href="css/purple-theme.css" rel="stylesheet"> -->
		<!-- <link href="css/skyblue-theme.css" rel="stylesheet"> -->
		<!-- <link href="css/red-theme.css" rel="stylesheet"> -->
		<!-- <link href="css/violet-theme.css" rel="stylesheet"> -->	
		
		<!-- RESPONSIVE CSS -->
		<link href="<?php echo e(asset('public/css_23/responsive.css')); ?>" rel="stylesheet">
	</head>

	<body> 
    <!-- PRELOADER SPINNER
		============================================= -->	
		<div id="loading" class="loading--theme">
			<div id="loading-center"><span class="loader"></span></div>
		</div>
		
            <header class="dash-header">
                <nav class="navbar navbar-expand-md default">
                    <div class="container">
                        <div class="navbar-brand">
                            <a href="#">
                                <?php if($setting['cust_darklayout']=='on'): ?>
                                    <img src="<?php echo e($logo . (!empty($company_logo) ? $company_logo : 'logo-light.png') . '?timestamp='. time()); ?>" alt="<?php echo e(config('app.name', 'WhatsStore SaaS')); ?>" alt="logo" loading="lazy" class="logo" height="41px" width="150px"/>
                                <?php else: ?>
                                    <img src="<?php echo e($logo . (!empty($company_logo) ? $company_logo : 'logo-dark.png') . '?timestamp='. time()); ?>" alt="<?php echo e(config('app.name', 'WhatsStore SaaS')); ?>" alt="logo" loading="lazy" class="logo" height="41px" width="150px"/>
                                <?php endif; ?>
                            </a>
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarlogin">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarlogin">
                            <ul class="navbar-nav align-items-center ms-auto mb-2 mb-lg-0">
                                <?php echo $__env->make('landingpage::layouts.buttons', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php echo $__env->yieldContent('language-bar'); ?>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>


			<!-- SIGN UP PAGE
			============================================= -->
			<div id="signup" class="bg--fixed signup-1 login-section division">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-lg-6 offset-md-2 offset-lg-3">	
							<div class="register-page-form">

     <div class="card-body">
         <?php if(session('status')): ?>
             <div class="mb-4 font-medium text-lg text-green-600 text-danger">
                 <?php echo e(__('Email SMTP settings does not configured so please contact to your site admin.')); ?>

             </div>
         <?php endif; ?>
         <div>
								<!-- TITLE -->
								<div class="col-md-12">
									<div class="register-form-title">
										<h3 class="s-32 w-700"><?php echo e(__('Register')); ?></h3>
										<p class="p-md"><?php echo e(__('Already have an account?')); ?>  <a href="<?php echo e(route('login', $lang)); ?>" class="color--theme"><?php echo e(__('Login')); ?></a></p>
									</div>
								</div>


								<!-- SIGN UP FORM -->
								<form method="POST" action="<?php echo e(route('register')); ?>" class="needs-validation row sign-up-form" novalidate="" >
								<?php echo csrf_field(); ?>

									<!-- Google Button -->	
									<div class="col-md-12">
										<a  href="#" class="btn btn-google ico-left">
											<img src="<?php echo e(asset('public/images_23/png_icons/google.png')); ?>" alt="google-icon"> Sign up with Google
										</a>
									</div>  

									<!-- Login Separator -->
									<div class="col-md-12 text-center">	
										<div class="separator-line">Or, sign up with your email</div>
									</div>

									<!-- Form Input -->	
									<div class="form-group mb-3">
										<p class="p-sm input-header"><?php echo e(__('Name')); ?></p>
										<input class="form-control name <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" type="text" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus
                                        placeholder="<?php echo e(__('Enter your name')); ?>"> 
                                                             <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="error invalid-name text-danger" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
									</div>
									
				                    <div class="form-group mb-3">
                                         <p class="p-sm input-header"><?php echo e(__('Store Name')); ?></p>
                                         <input id="store_name" type="text" class="form-control <?php $__errorArgs = ['store_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                             name="store_name" value="<?php echo e(old('store_name')); ?>" required autocomplete="store_name"
                                             placeholder="<?php echo e(__('Enter your store name')); ?>">
                                         <?php $__errorArgs = ['store_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                             <span class="error invalid-name text-danger" role="alert">
                                                 <strong><?php echo e($message); ?></strong>
                                             </span>
                                         <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                     </div>
                                                <div class="form-group mb-3">
                                                <p class="p-sm input-header"><?php echo e(__('Email')); ?></p>
                                                <input id="email" type="email" class="form-control  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                    name="email" value="<?php echo e(old('email')); ?>" required placeholder="<?php echo e(__('Enter your email')); ?>">
                                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="error invalid-email text-danger" role="alert">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                    
                                        <div class="form-group mb-3">
                                            <p class="p-sm input-header"><?php echo e(__('Password')); ?></p>
                                            <input id="password" type="password" class="form-control  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                name="password" required autocomplete="new-password" placeholder="<?php echo e(__('Enter your password')); ?>">
                                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="error invalid-password text-danger" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                        
                                        <div class="form-group">
                                            <p class="p-sm input-header"><?php echo e(__('Confirm password')); ?></p>
                                            <input id="password-confirm" type="password"
                                                class="form-control <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                name="password_confirmation" required autocomplete="new-password"
                                                placeholder="<?php echo e(__('Enter confirm password')); ?>">
                                            <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="error invalid-password_confirmation text-danger" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
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
									<!-- Checkbox -->
									<div class="col-md-12">
										<div class="form-data">
											<span>By clicking “Create Account”, you agree to our 
												<a href="#">Terms</a> and that you have read our
												<a href="#"> Privacy Policy</a>
											</span>
										</div>
									</div>
										
									<!-- Form Submit Button -->	
									<div class="col-md-12">
									     <input type="hidden" name="ref_code" value="<?php echo e($ref_code); ?>">
										<button type="submit" class="btn btn--theme hover--theme submit"><?php echo e(__('Register')); ?></button>
									</div> 

								</form>	<!-- END SIGN UP FORM -->


							</div>	
						</div>
			 		</div>	   <!-- End row -->	
			 	</div>	   <!-- End container -->		
			</div>	<!-- END SIGN UP PAGE -->
			<br>
     		    <footer>
                <div class="auth-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <center><span>&copy; <?php echo e(date('Y')); ?> <?php echo e((App\Models\Utility::getValByName('footer_text')) ? App\Models\Utility::getValByName('footer_text') :config('app.name', 'WhatsStore SaaS')); ?></span></center>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

<?php $__env->startPush('custom-scripts'); ?>
    <script>
        $(document).ready(function() {
            $("#form_data").submit(function(e) {
                $("#login_button").attr("disabled", true);
                return true;
            });
        });

    </script>
        <?php if($settings['recaptcha_module'] == 'yes'): ?>
            <?php echo NoCaptcha::renderJs(); ?>

        <?php endif; ?>
<?php $__env->stopPush(); ?>
		<!-- EXTERNAL SCRIPTS
		============================================= -->	
		<script src="<?php echo e(asset('public/js_23/jquery-3.7.0.min.js')); ?>"></script>
		<script src="<?php echo e(asset('public/js_23/modernizr.custom.js')); ?>"></script>
		<script src="<?php echo e(asset('public/js_23/jquery.easing.js')); ?>"></script>
		<script src="<?php echo e(asset('public/js_23/jquery.appear.js')); ?>"></script>
		<script src="<?php echo e(asset('public/js_23/menu.js')); ?>"></script>
		<script src="<?php echo e(asset('public/js_23/owl.carousel.min.js')); ?>"></script>
		<script src="<?php echo e(asset('public/js_23/pricing-toggle.js')); ?>"></script>
		<script src="<?php echo e(asset('public/js_23/jquery.magnific-popup.min.js')); ?>"></script>
		<script src="<?php echo e(asset('public/js_23/request-form.js')); ?>"></script>	
		<script src="<?php echo e(asset('public/js_23/jquery.validate.min.js')); ?>"></script>
		<script src="<?php echo e(asset('public/js_23/jquery.ajaxchimp.min.js')); ?>"></script>	
		<script src="<?php echo e(asset('public/js_23/popper.min.js')); ?>"></script>
		<script src="<?php echo e(asset('public/js_23/lunar.js')); ?>"></script>
		<script src="<?php echo e(asset('public/js_23/wow.js')); ?>"></script>
				
		<!-- Custom Script -->		
		<script src="<?php echo e(asset('public/js_23/custom.js')); ?>"></script>


		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->															
		<!--
		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-XXXXX-X']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		-->	
 <!-- [custom-login] end -->
    <?php if($settings['enable_cookie'] == 'on'): ?>
        <?php echo $__env->make('layouts.cookie_consent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <!-- Required Js -->
    <script src="<?php echo e(asset('custom/js/custom-admin.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/vendor-all.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/feather.min.js')); ?>"></script>
    <script src="<?php echo e(asset('custom/libs/bootstrap-notify/bootstrap-notify.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/cookieconsent.js')); ?>"></script>

    <?php if(isset($settings['cust_darklayout']) && $settings['cust_darklayout'] == 'on'): ?>
        <script>
            document.addEventListener('DOMContentLoaded', (event) => {
                const recaptcha = document.querySelector('.g-recaptcha');
                recaptcha.setAttribute("data-theme", "dark");
            });
        </script>
    <?php endif; ?>

    <?php if(Session::has('success')): ?>
    <script>
        show_toastr('<?php echo e(__('Success')); ?>', '<?php echo session('success'); ?>', 'success');
    </script>
    <?php echo e(Session::forget('success')); ?>

    <?php endif; ?>
    <?php if(Session::has('error')): ?>
    <script>
        show_toastr('<?php echo e(__('Error')); ?>', '<?php echo session('error'); ?>', 'error');
    </script>
    <?php echo e(Session::forget('error')); ?>

    <?php endif; ?>
    <?php echo $__env->yieldPushContent('script'); ?>
    <?php echo $__env->yieldPushContent('custom-scripts'); ?>
	</body>




</html>

<?php /**PATH /home/bsswhats/public_html/resources/views/auth/register.blade.php ENDPATH**/ ?>