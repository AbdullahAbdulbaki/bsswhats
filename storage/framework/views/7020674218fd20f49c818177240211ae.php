<?php
/*$users = Auth::user();
    $currantLang = $users->currentLanguages();
    $profile = \App\Models\Utility::get_file('uploads/profile/');
    if ($currantLang == null) {
        $currantLang = 'en';
    }*/
    //Session::put('locale', $currantLang->code);
    //App::setLocale($currantLang->code);
    //dd(app()->getLocale());
    ?>
<head>
		<!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />

        <meta name="title" content="<?php echo e($metatitle); ?>">
        <meta name="description" content="<?php echo e($metsdesc); ?>">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="<?php echo e(env('APP_URL')); ?>">
        <meta property="og:title" content="<?php echo e($metatitle); ?>">
        <meta property="og:description" content="<?php echo e($metsdesc); ?>">
        <meta property="og:image" content="<?php echo e($meta_image . $meta_logo); ?>">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="<?php echo e(env('APP_URL')); ?>">
        <meta property="twitter:title" content="<?php echo e($metatitle); ?>">
        <meta property="twitter:description" content="<?php echo e($metsdesc); ?>">
        <meta property="twitter:image" content="<?php echo e($meta_image . $meta_logo); ?>">

  		<!-- SITE TITLE -->
          <title><?php echo e(env('APP_NAME')); ?></title>
    <style>
        .no-space::before {
            content: attr(data-text);
            white-space: nowrap;
        }
        
    </style>
		<!-- FAVICON AND TOUCH ICONS -->
        <link rel="icon" href="<?php echo e($sup_logo . '/' . $adminSettings['company_favicon'] . '?timestamp=' . time()); ?>"
        type="image/x-icon" />
		<!--link rel="shortcut icon" href="<?php echo e(asset('public/images_23/favicon.ico')); ?>" type="image/x-icon">
		<link rel="icon" href="<?php echo e(asset('public/images_23/favicon.ico')); ?>" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo e(asset('public/images_23/apple-touch-icon-152x152.png')); ?>">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo e(asset('public/images_23/apple-touch-icon-120x120.png')); ?>">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('public/images_23/apple-touch-icon-76x76.png')); ?>">
		<link rel="apple-touch-icon" href="<?php echo e(asset('public/images_23/apple-touch-icon.png')); ?>">
		<link rel="icon" href="<?php echo e(asset('public/images_23/apple-touch-icon.png')); ?>" type="image/x-icon"-->
            <!-- font css -->


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
		<!-- <link href="css/blue-theme.css" rel="stylesheet"> -->
		<!-- <link href="css/crocus-theme.css" rel="stylesheet"> -->
		<!-- <link href="css/green-theme.css" rel="stylesheet"> -->
		<!-- <link href="css/magenta-theme.css" rel="stylesheet"> -->
		<!-- <link href="css/pink-theme.css" rel="stylesheet"> -->
		<!-- <link href="css/purple-theme.css" rel="stylesheet"> -->
		<link href="<?php echo e(asset('public/css_23/skyblue-theme.css')); ?>" rel="stylesheet">
		<!-- <link href="css/red-theme.css" rel="stylesheet"> -->
		<!-- <link href="css/violet-theme.css" rel="stylesheet"> -->

		<!-- RESPONSIVE CSS -->
		<link href="<?php echo e(asset('public/css_23/responsive.css')); ?>" rel="stylesheet">

		    <!-- vendor css -->
			<?php if($SITE_RTL == 'on'): ?>
			<!--link rel="stylesheet" href="<?php echo e(asset('assets/css/style-rtl.css')); ?>"-->
		<?php endif; ?>

		<?php if($setting['cust_darklayout'] == 'on'): ?>
			<link rel="stylesheet" href="<?php echo e(asset('assets/css/style-dark.css')); ?>">
		<?php else: ?>
			<link rel="stylesheet" href="<?php echo e(Module::asset('LandingPage:Resources/assets/css/style.css')); ?>"
				id="main-style-link">
		<?php endif; ?>

	</head>




	<?php if($setting['cust_darklayout'] == 'on'): ?>

    <body class="<?php echo e($themeColor); ?> landing-dark">
    <?php else: ?>

        <body class="<?php echo e($themeColor); ?>">
    <?php endif; ?>




		<!-- PRELOADER SPINNER
		============================================= -->
		<div id="loading" class="loading--theme">
			<div id="loading-center"><span class="loader"></span></div>
		</div>




		<!-- PAGE CONTENT
		============================================= -->
		<div id="page" class="page font--jakarta">




			<!-- HEADER
			============================================= -->
			<header id="header" class=" tra-menu navbar-dark white-scroll">
                <?php if($settings['topbar_status'] == 'on'): ?>
                <div class="announcement bg-dark text-center p-2">
                    <p class="mb-0"><?php echo $settings['topbar_notification_msg']; ?></p>
                </div>
                <?php endif; ?>
				<div class="header-wrapper">


					<!-- MOBILE HEADER -->
				    <div class="wsmobileheader clearfix">
				    	<span class="smllogo"><img src="<?php echo e($logo . '/' . $settings['site_logo_dark'] . '?timestamp=' . time()); ?>"
                            alt="logo" height="20px" width="150px"></span>
				    	<a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
				 	</div>

                     <?php if($settings['menubar_status'] == 'on'): ?>
				 	<!-- NAVIGATION MENU -->
				  	<div class="wsmainfull menu clearfix">
	    				<div class="wsmainwp clearfix">

                            <?php if($themeColor != 'theme-9'): ?>
	    					<!-- HEADER BLACK LOGO -->
	    					<div class="desktoplogo">
	    						<a href="#hero-23" class="logo-black"><img src="<?php echo e($logo . '/' . $settings['site_logo_dark'] . '?timestamp=' . time()); ?>"
                                    alt="logo" height="20px" width="150px"></a>
	    					</div>

                            <?php else: ?>
	    					<!-- HEADER WHITE LOGO -->
	    					<div class="desktoplogo">
	    						<a href="#hero-23" class="logo-white"><img src="<?php echo e($logo . '/' . $settings['site_logo_light'] . '?timestamp=' . time()); ?>"
                                    alt="logo" height="20px" width="150px">

	    					</div>
                            <?php endif; ?>

	    					<!-- MAIN MENU -->
	      					<nav class="wsmenu clearfix">
	        					<ul class="wsmenu-list nav-theme">
								    <!-- SIMPLE NAVIGATION LINK -->
                                    <li class="nl-simple" aria-haspopup="true"><a href="<?php echo e(url('/')); ?>" class="h-link"><?php echo e(GoogleTranslate::trans($settings['home_title'],app()->getLocale())); ?></a></li>
                                    <?php if($settings['feature_status'] == 'on'): ?>
							    	<li class="nl-simple" aria-haspopup="true"><a href="#features" class="h-link"><?php echo e(GoogleTranslate::trans($settings['feature_title'],app()->getLocale())); ?></a></li>
                                    <?php endif; ?>

                                    <?php if($settings['plan_status'] == 'on'): ?>
								    <!-- SIMPLE NAVIGATION LINK -->
							    	<li class="nl-simple" aria-haspopup="true"><a href="#plan" class="h-link"><?php echo e(GoogleTranslate::trans($settings['plan_title'],app()->getLocale())); ?></a></li>
                                    <?php endif; ?>
                                    <?php if($settings['faq_status'] == 'on'): ?>
						          	<!-- SIMPLE NAVIGATION LINK -->
							    	<li class="nl-simple" aria-haspopup="true"><a href="#faq" class="h-link"><?php echo e(GoogleTranslate::trans($settings['faq_title'],app()->getLocale())); ?></a></li>
                                    <?php endif; ?>

								    <!-- SIMPLE NAVIGATION LINK -->
							    	<li class="nl-simple" aria-haspopup="true"><a href="<?php echo e(route('Blogs')); ?>" class="h-link"><?php echo e(__('Blogs')); ?></a></li>

                                    

                                    <?php if(is_array(json_decode($settings['menubar_page'])) || is_object(json_decode($settings['menubar_page']))): ?>
                                    <?php $__currentLoopData = json_decode($settings['menubar_page']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($value->header == 'on' && $value->template_name == 'page_content'): ?>
                                            <li class="nl-simple">
                                                <a class="h-link"
                                                    href="<?php echo e(route('custom.page', $value->page_slug)); ?>"><?php echo e(GoogleTranslate::trans($value->menubar_page_name,app()->getLocale())); ?></a>
                                            </li>
                                        <?php elseif($value->header == 'on' && $value->template_name == 'page_url'): ?>
                                            <li class="nl-simple">
                                                <a class="h-link" target="_blank"
                                                    href="<?php echo e($value->page_url); ?>"><?php echo e(GoogleTranslate::trans($value->menubar_page_name,app()->getLocale())); ?></a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>

							    	<!-- SIGN IN LINK -->
							    	<li class="nl-simple reg-fst-link mobile-last-link" aria-haspopup="true">
							    		<a href="<?php echo e(route('login')); ?>" class="h-link"><?php echo e(__('Login')); ?></a>
							    	</li>
								    <!-- SIGN UP BUTTON -->
								    <li class="nl-simple" aria-haspopup="true">
								    	<a href="<?php echo e(route('register')); ?>" class="btn r-04  hover--theme last-link" style="background-color:#FE4A65"><?php echo e(__('Register')); ?></a>
								    </li>
								    <li class="nl-simple" aria-haspopup="true">
                                    <form id="languageForm" action="<?php echo e(route('changeLangfront')); ?>" method="GET">
                                            <select class="changeLangfront btn btn-outline-danger" name="lang" onchange="this.form.submit()" style="width:130px;margin-top:12px">
                                                <?php $__currentLoopData = App\Models\Utility::languages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($key); ?>" <?php if($key == Session::get('locale')): ?> selected <?php endif; ?>>
                                                       <p class="no-space"> <?php echo e(Str::ucfirst($language)); ?></p>
                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </form>
                                    </li>



                                        <!--select class="changeLangfront btn r-04 btn--tra-black last-link" name="lang" onchange="this.form.submit()">
                                            <option class="dash-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="ti ti-world nocolor"></i>
                        <span class="drp-text"--><!--/span>
                        <i class="ti ti-chevron-down drp-arrow nocolor"></i>
                    </option>
                        <?php $__currentLoopData = App\Models\Utility::languages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option href="<?php echo e(route('change.language', $code)); ?>">
                                <span><?php echo e(Str::ucfirst($lang)); ?></span>
                            </option>  
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                        </select-->
                        
                        
           
	        					</ul>
	        				</nav>	<!-- END MAIN MENU -->


	    				</div>
	    			</div>	<!-- END NAVIGATION MENU -->


				</div>     <!-- End header-wrapper -->
                <?php endif; ?>
			</header>	<!-- END HEADER -->
<?php /**PATH /home/bsswhats/public_html/Modules/LandingPage/Resources/views/layouts/partials/header.blade.php ENDPATH**/ ?>