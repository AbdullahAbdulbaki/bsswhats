@php
    $settings = App\Models\Utility::settings();
@endphp
@php
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

    
@endphp
@section('title')
    {{ __('Login') }}
@endsection

@section('language-bar')
@php
    $languages = App\Models\Utility::languages();
@endphp
    <div class="lang-dropdown-only-desk">
        <li class="dropdown dash-h-item drp-language">
            <a class="dash-head-link dropdown-toggle btn" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="drp-text"> {{ ucFirst($languages[$lang]) }}
                </span>
            </a>
            <div class="dropdown-menu dash-h-dropdown dropdown-menu-end">
                @foreach($languages as $code => $language)
                    <a href="{{ route('login',$code) }}" tabindex="0" class="dropdown-item {{ $code == $lang ? 'active':'' }}">
                        <span>{{ ucFirst($language)}}</span>
                    </a>
                @endforeach
            </div>
        </li>
    </div>
@endsection


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
    <link rel="icon" href="{{asset(Storage::url('uploads/logo/')).'/favicon.png' . '?timestamp='. time()}}" type="image/png">

    <link rel="stylesheet" href="{{ asset('custom/libs/animate.css/animate.min.css') }}" id="stylesheet">



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


        <link rel="stylesheet" href="{{ asset('css/custom-color.css') }}">
				
  		<!-- SITE TITLE -->
		<title>{{(\App\Models\Utility::getValByName('title_text')) ? \App\Models\Utility::getValByName('title_text') : config('app.name', 'WhatsStore SaaS')}} - @yield('title')</title>
							
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
		<link href="{{ asset('public/css_23/bootstrap.min.css')}}" rel="stylesheet">
				
		<!-- FONT ICONS -->
		<link href="{{ asset('public/css_23/flaticon.css')}}" rel="stylesheet">

		<!-- PLUGINS STYLESHEET -->
		<link href="{{ asset('public/css_23/menu.css')}}" rel="stylesheet">	
		<link id="effect" href="{{ asset('public/css_23/dropdown-effects/fade-down.css')}}" media="all" rel="stylesheet">
		<link href="{{ asset('public/css_23/magnific-popup.css')}}" rel="stylesheet">	
		<link href="{{ asset('public/css_23/owl.carousel.min.css')}}" rel="stylesheet">
		<link href="{{ asset('public/css_23/owl.theme.default.min.css')}}" rel="stylesheet">
		<link href="{{ asset('public/css_23/lunar.css')}}" rel="stylesheet">

		<!-- ON SCROLL ANIMATION -->
		<link href="{{ asset('public/css_23/animate.css')}}" rel="stylesheet">

		<!-- TEMPLATE CSS -->
		<link href="{{ asset('public/css_23/blue-theme.css')}}" rel="stylesheet">
		<!-- <link href="css/crocus-theme.css" rel="stylesheet"> -->
		<!-- <link href="css/green-theme.css" rel="stylesheet"> -->
		<!-- <link href="css/magenta-theme.css" rel="stylesheet"> -->
		<!-- <link href="css/pink-theme.css" rel="stylesheet"> -->
		<!-- <link href="css/purple-theme.css" rel="stylesheet"> -->
		<!-- <link href="css/skyblue-theme.css" rel="stylesheet"> -->
		<!-- <link href="css/red-theme.css" rel="stylesheet"> -->
		<!-- <link href="css/violet-theme.css" rel="stylesheet"> -->	
		
		<!-- RESPONSIVE CSS -->
		<link href="{{ asset('public/css_23/responsive.css')}}" rel="stylesheet">
	</head>

	<body> 

            <header class="dash-header">
                <nav class="navbar navbar-expand-md default">
                    <div class="container">
                        <div class="navbar-brand">
                            <a href="#">
                                @if($setting['cust_darklayout']=='on')
                                    <img src="{{$logo . (!empty($company_logo) ? $company_logo : 'logo-light.png') . '?timestamp='. time()}}" alt="{{ config('app.name', 'WhatsStore SaaS') }}" alt="logo" loading="lazy" class="logo" height="41px" width="150px"/>
                                @else
                                    <img src="{{$logo . (!empty($company_logo) ? $company_logo : 'logo-dark.png') . '?timestamp='. time()}}" alt="{{ config('app.name', 'WhatsStore SaaS') }}" alt="logo" loading="lazy" class="logo" height="41px" width="150px"/>
                                @endif
                            </a>
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarlogin">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarlogin">
                            <ul class="navbar-nav align-items-center ms-auto mb-2 mb-lg-0">
                                @include('landingpage::layouts.buttons')
                                @yield('language-bar')
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>



		<!-- PRELOADER SPINNER
		============================================= -->	
		<div id="loading" class="loading--theme">
			<div id="loading-center"><span class="loader"></span></div>
		</div>
		
		<!-- PAGE CONTENT
		============================================= -->	
		<div id="page" class="page font--jakarta">

			<!-- LOGIN PAGE
			============================================= -->
			<div id="login" class="bg--fixed login-1 login-section division" style="margin-bottom: -40px;">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-lg-6 offset-md-2 offset-lg-3">	
							<div class="register-page-form">


								<!-- TITLE -->
								<div class="col-md-12">
									<div class="register-form-title">
										<h3 class="s-32 w-700">{{__('Log in to BSSWHATS')}}</h3>
										@if ((!empty($settings['signup_button']) ? $settings['signup_button'] : '') == 'on')
                                        <p class="p-md">
                                            {{ __("Don't have an account?") }}
                                            <a href="{{ route('register', $lang) }}" class="color--theme">{{ __('Register') }}</a>
                                        </p>
                                        @endif
									</div>
								</div>
								
								<!-- LOGIN FORM -->
								<form method="POST" action="{{ route('login') }}" id="form_data" class="needs-validation row sign-in-form" novalidate="">
                                    @csrf
									<!-- Google Button -->	
									<div class="col-md-12">
										<a  href="#" class="btn btn-google ico-left">
											<img src="{{ asset('public/images_23/png_icons/google.png')}}" alt="google-icon"> Sign in with Google
										</a>
									</div>  

									<!-- Login Separator -->
									<div class="col-md-12 text-center">	
										<div class="separator-line">Or, sign in with your email</div>
									</div>

									<!-- Form Input -->	
									<div class="col-md-12">
										<p class="p-sm input-header">{{ __('Email') }}</p>
                                        <input id="email" type="email" class="form-control email  @error('email') is-invalid @enderror"
                                            name="email" placeholder="{{ __('Enter your email') }}"
                                            required autofocus>
                                        @error('email')
                                            <span class="error invalid-email text-danger" role="alert">
                                                <small>{{ $message }}</small>
                                            </span>
                                        @enderror
									</div>

									<!-- Form Input -->	
									<div class="col-md-12">
										<p class="p-sm input-header">{{ __('Password') }}</p>
										<div class="wrap-input">
											<span class="btn-show-pass ico-20"><span class="flaticon-visibility eye-pass"></span></span>
											<input id="password" type="password" class="form-control password  @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Password') }}" required> 
											@error('password')
                                            <span class="error invalid-password text-danger" role="alert">
                                                <small>{{ $message }}</small>
                                            </span>
                                            @enderror
										</div>
									</div>

									<!-- Reset Password Link -->	
									<div class="col-md-12">
										<div class="reset-password-link">
											@if (Route::has('change.langPass'))
                                            <span>
                                                <a href="{{ route('change.langPass', $lang) }}" tabindex="0">{{ __('Forgot Your Password?') }}</a>
                                            </span>
                                            @endif
										</div>
									</div>
                                    @if ($settings['recaptcha_module'] == 'yes')
                                        <div class="form-group mb-3">
                                            {!! NoCaptcha::display() !!}
                                            @error('g-recaptcha-response')
                                                <span class="small text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    @endif
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn--theme hover--theme submit" id="login_button">{{ __('Login') }}</button>
                                </div>
                                </form>
							</div>	
						</div>	
			 		</div>	   <!-- End row -->	
			 	</div>	   <!-- End container -->		
			</div>	<!-- END LOGIN PAGE -->
					</div>	<!-- END PAGE CONTENT -->
					
		    <footer>
                <div class="auth-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <center><span>&copy; {{date('Y')}} {{ (App\Models\Utility::getValByName('footer_text')) ? App\Models\Utility::getValByName('footer_text') :config('app.name', 'WhatsStore SaaS') }}</span></center>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

@push('custom-scripts')
    <script>
        $(document).ready(function() {
            $("#form_data").submit(function(e) {
                $("#login_button").attr("disabled", true);
                return true;
            });
        });

    </script>
        @if ($settings['recaptcha_module'] == 'yes')
            {!! NoCaptcha::renderJs() !!}
        @endif
@endpush
		<!-- EXTERNAL SCRIPTS
		============================================= -->	
		<script src="{{asset('public/js_23/jquery-3.7.0.min.js')}}"></script>
		
		<script src="{{asset('public/js_23/modernizr.custom.js')}}"></script>
		<script src="{{asset('public/js_23/jquery.easing.js')}}"></script>
		<script src="{{asset('public/js_23/jquery.appear.js')}}"></script>
		<script src="{{asset('public/js_23/menu.js')}}"></script>
		<script src="{{asset('public/js_23/owl.carousel.min.js')}}"></script>
		<script src="{{asset('public/js_23/pricing-toggle.js')}}"></script>
		<script src="{{asset('public/js_23/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('public/js_23/request-form.js')}}"></script>	
		<script src="{{asset('public/js_23/jquery.validate.min.js')}}"></script>
		<script src="{{asset('public/js_23/jquery.ajaxchimp.min.js')}}"></script>	
		<script src="{{asset('public/js_23/popper.min.js')}}"></script>
		<script src="{{asset('public/js_23/lunar.js')}}"></script>
		<script src="{{asset('public/js_23/wow.js')}}"></script>
				
		<!-- Custom Script -->		
		<script src="{{asset('public/js_23/custom.js')}}"></script>


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
    @if ($settings['enable_cookie'] == 'on')
        @include('layouts.cookie_consent')
    @endif
    <!-- Required Js -->
    
    <script src="{{ asset('custom/js/custom-admin.js') }}"></script>
    <script src="{{ asset('assets/js/vendor-all.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/feather.min.js') }}"></script>
    <script src="{{ asset('custom/libs/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('assets/js/cookieconsent.js') }}"></script>

    @if (isset($settings['cust_darklayout']) && $settings['cust_darklayout'] == 'on')
        <script>
            document.addEventListener('DOMContentLoaded', (event) => {
                const recaptcha = document.querySelector('.g-recaptcha');
                recaptcha.setAttribute("data-theme", "dark");
            });
        </script>
    @endif

    @if (Session::has('success'))
    <script>
        show_toastr('{{ __('Success') }}', '{!! session('success') !!}', 'success');
    </script>
    {{ Session::forget('success') }}
    @endif
    @if (Session::has('error'))
    <script>
        show_toastr('{{ __('Error') }}', '{!! session('error') !!}', 'error');
    </script>
    {{ Session::forget('error') }}
    @endif
    @stack('script')
    @stack('custom-scripts')

	</body>




</html>
