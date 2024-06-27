@php
/*$users = Auth::user();
    $currantLang = $users->currentLanguages();
    $profile = \App\Models\Utility::get_file('uploads/profile/');
    if ($currantLang == null) {
        $currantLang = 'en';
    }*/
    //Session::put('locale', $currantLang->code);
    //App::setLocale($currantLang->code);
    //dd(app()->getLocale());
    @endphp
<head>
		<!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />

        <meta name="title" content="{{ $metatitle }}">
        <meta name="description" content="{{ $metsdesc }}">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ env('APP_URL') }}">
        <meta property="og:title" content="{{ $metatitle }}">
        <meta property="og:description" content="{{ $metsdesc }}">
        <meta property="og:image" content="{{ $meta_image . $meta_logo }}">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="{{ env('APP_URL') }}">
        <meta property="twitter:title" content="{{ $metatitle }}">
        <meta property="twitter:description" content="{{ $metsdesc }}">
        <meta property="twitter:image" content="{{ $meta_image . $meta_logo }}">

  		<!-- SITE TITLE -->
          <title>{{ env('APP_NAME') }}</title>
    <style>
        .no-space::before {
            content: attr(data-text);
            white-space: nowrap;
        }
        
    </style>
		<!-- FAVICON AND TOUCH ICONS -->
        <link rel="icon" href="{{ $sup_logo . '/' . $adminSettings['company_favicon'] . '?timestamp=' . time() }}"
        type="image/x-icon" />
		<!--link rel="shortcut icon" href="{{ asset('public/images_23/favicon.ico') }}" type="image/x-icon">
		<link rel="icon" href="{{ asset('public/images_23/favicon.ico') }}" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('public/images_23/apple-touch-icon-152x152.png') }}">
		<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('public/images_23/apple-touch-icon-120x120.png') }}">
		<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('public/images_23/apple-touch-icon-76x76.png') }}">
		<link rel="apple-touch-icon" href="{{ asset('public/images_23/apple-touch-icon.png') }}">
		<link rel="icon" href="{{ asset('public/images_23/apple-touch-icon.png') }}" type="image/x-icon"-->
            <!-- font css -->


		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">

		<!-- BOOTSTRAP CSS -->
		<link href="{{ asset('public/css_23/bootstrap.min.css') }}" rel="stylesheet">

		<!-- FONT ICONS -->
        <link href="{{ asset('public/css_23/flaticon.css') }}" rel="stylesheet">

		<!-- PLUGINS STYLESHEET -->
		<link href="{{ asset('public/css_23/menu.css') }}" rel="stylesheet">
		<link id="effect" href="{{ asset('public/css_23/dropdown-effects/fade-down.css') }}" media="all" rel="stylesheet">
		<link href="{{ asset('public/css_23/magnific-popup.css') }}" rel="stylesheet">
		<link href="{{ asset('public/css_23/owl.carousel.min.css') }}" rel="stylesheet">
		<link href="{{ asset('public/css_23/owl.theme.default.min.css') }}" rel="stylesheet">
		<link href="{{ asset('public/css_23/lunar.css') }}" rel="stylesheet">

		<!-- ON SCROLL ANIMATION -->
		<link href="{{ asset('public/css_23/animate.css') }}" rel="stylesheet">

		<!-- TEMPLATE CSS -->
		<!-- <link href="css/blue-theme.css" rel="stylesheet"> -->
		<!-- <link href="css/crocus-theme.css" rel="stylesheet"> -->
		<!-- <link href="css/green-theme.css" rel="stylesheet"> -->
		<!-- <link href="css/magenta-theme.css" rel="stylesheet"> -->
		<!-- <link href="css/pink-theme.css" rel="stylesheet"> -->
		<!-- <link href="css/purple-theme.css" rel="stylesheet"> -->
		<link href="{{ asset('public/css_23/skyblue-theme.css') }}" rel="stylesheet">
		<!-- <link href="css/red-theme.css" rel="stylesheet"> -->
		<!-- <link href="css/violet-theme.css" rel="stylesheet"> -->

		<!-- RESPONSIVE CSS -->
		<link href="{{ asset('public/css_23/responsive.css') }}" rel="stylesheet">

		    <!-- vendor css -->
			@if ($SITE_RTL == 'on')
			<!--link rel="stylesheet" href="{{ asset('assets/css/style-rtl.css') }}"-->
		@endif

		@if ($setting['cust_darklayout'] == 'on')
			<link rel="stylesheet" href="{{ asset('assets/css/style-dark.css') }}">
		@else
			<link rel="stylesheet" href="{{ Module::asset('LandingPage:Resources/assets/css/style.css') }}"
				id="main-style-link">
		@endif

	</head>




	@if ($setting['cust_darklayout'] == 'on')

    <body class="{{ $themeColor }} landing-dark">
    @else

        <body class="{{ $themeColor }}">
    @endif




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
                @if ($settings['topbar_status'] == 'on')
                <div class="announcement bg-dark text-center p-2">
                    <p class="mb-0">{!! $settings['topbar_notification_msg'] !!}</p>
                </div>
                @endif
				<div class="header-wrapper">


					<!-- MOBILE HEADER -->
				    <div class="wsmobileheader clearfix">
				    	<span class="smllogo"><img src="{{ $logo . '/' . $settings['site_logo_dark'] . '?timestamp=' . time() }}"
                            alt="logo" height="20px" width="150px"></span>
				    	<a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
				 	</div>

                     @if ($settings['menubar_status'] == 'on')
				 	<!-- NAVIGATION MENU -->
				  	<div class="wsmainfull menu clearfix">
	    				<div class="wsmainwp clearfix">

                            @if ($themeColor != 'theme-9')
	    					<!-- HEADER BLACK LOGO -->
	    					<div class="desktoplogo">
	    						<a href="#hero-23" class="logo-black"><img src="{{ $logo . '/' . $settings['site_logo_dark'] . '?timestamp=' . time() }}"
                                    alt="logo" height="20px" width="150px"></a>
	    					</div>

                            @else
	    					<!-- HEADER WHITE LOGO -->
	    					<div class="desktoplogo">
	    						<a href="#hero-23" class="logo-white"><img src="{{ $logo . '/' . $settings['site_logo_light'] . '?timestamp=' . time() }}"
                                    alt="logo" height="20px" width="150px">

	    					</div>
                            @endif

	    					<!-- MAIN MENU -->
	      					<nav class="wsmenu clearfix">
	        					<ul class="wsmenu-list nav-theme">
								    <!-- SIMPLE NAVIGATION LINK -->
                                    <li class="nl-simple" aria-haspopup="true"><a href="{{url('/')}}" class="h-link">{{ GoogleTranslate::trans($settings['home_title'],app()->getLocale()) }}</a></li>
                                    @if ($settings['feature_status'] == 'on')
							    	<li class="nl-simple" aria-haspopup="true"><a href="#features" class="h-link">{{ GoogleTranslate::trans($settings['feature_title'],app()->getLocale()) }}</a></li>
                                    @endif

                                    @if ($settings['plan_status'] == 'on')
								    <!-- SIMPLE NAVIGATION LINK -->
							    	<li class="nl-simple" aria-haspopup="true"><a href="#plan" class="h-link">{{ GoogleTranslate::trans($settings['plan_title'],app()->getLocale()) }}</a></li>
                                    @endif
                                    @if ($settings['faq_status'] == 'on')
						          	<!-- SIMPLE NAVIGATION LINK -->
							    	<li class="nl-simple" aria-haspopup="true"><a href="#faq" class="h-link">{{ GoogleTranslate::trans($settings['faq_title'],app()->getLocale()) }}</a></li>
                                    @endif

								    <!-- SIMPLE NAVIGATION LINK -->
							    	<li class="nl-simple" aria-haspopup="true"><a href="{{route('Blogs')}}" class="h-link">{{__('Blogs')}}</a></li>

                                    

                                    @if (is_array(json_decode($settings['menubar_page'])) || is_object(json_decode($settings['menubar_page'])))
                                    @foreach (json_decode($settings['menubar_page']) as $key => $value)
                                        @if ($value->header == 'on' && $value->template_name == 'page_content')
                                            <li class="nl-simple">
                                                <a class="h-link"
                                                    href="{{ route('custom.page', $value->page_slug) }}">{{ GoogleTranslate::trans($value->menubar_page_name,app()->getLocale()) }}</a>
                                            </li>
                                        @elseif ($value->header == 'on' && $value->template_name == 'page_url')
                                            <li class="nl-simple">
                                                <a class="h-link" target="_blank"
                                                    href="{{ $value->page_url }}">{{ GoogleTranslate::trans($value->menubar_page_name,app()->getLocale()) }}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                @endif

							    	<!-- SIGN IN LINK -->
							    	<li class="nl-simple reg-fst-link mobile-last-link" aria-haspopup="true">
							    		<a href="{{ route('login') }}" class="h-link">{{ __('Login') }}</a>
							    	</li>
								    <!-- SIGN UP BUTTON -->
								    <li class="nl-simple" aria-haspopup="true">
								    	<a href="{{ route('register') }}" class="btn r-04  hover--theme last-link" style="background-color:#FE4A65">{{ __('Register') }}</a>
								    </li>
								    <li class="nl-simple" aria-haspopup="true">
                                    <form id="languageForm" action="{{ route('changeLangfront') }}" method="GET">
                                            <select class="changeLangfront btn btn-outline-danger" name="lang" onchange="this.form.submit()" style="width:130px;margin-top:12px">
                                                @foreach (App\Models\Utility::languages() as $key => $language)
                                                    <option value="{{ $key }}" @if ($key == Session::get('locale')) selected @endif>
                                                       <p class="no-space"> {{ Str::ucfirst($language) }}</p>
                                                    </option>
                                                @endforeach
                                            </select>
                                        </form>
                                    </li>



                                        <!--select class="changeLangfront btn r-04 btn--tra-black last-link" name="lang" onchange="this.form.submit()">
                                            <option class="dash-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="ti ti-world nocolor"></i>
                        <span class="drp-text"-->{{--{{Str::ucfirst($currantLang->fullname) }}--}}<!--/span>
                        <i class="ti ti-chevron-down drp-arrow nocolor"></i>
                    </option>
                        @foreach (App\Models\Utility::languages() as $code => $lang)
                            <option href="{{ route('change.language', $code)}}">
                                <span>{{ Str::ucfirst($lang) }}</span>
                            </option>  
                        @endforeach 
                        </select-->
                        
                        
           
	        					</ul>
	        				</nav>	<!-- END MAIN MENU -->


	    				</div>
	    			</div>	<!-- END NAVIGATION MENU -->


				</div>     <!-- End header-wrapper -->
                @endif
			</header>	<!-- END HEADER -->
