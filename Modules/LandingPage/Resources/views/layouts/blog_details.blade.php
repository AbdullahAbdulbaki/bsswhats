@php
    use App\Models\Utility;
    $settings = \Modules\LandingPage\Entities\LandingPageSetting::settings();
    $logo = Utility::get_file('uploads/landing_page_image');
    $sup_logo = Utility::get_file('uploads/logo');
    $adminSettings = Utility::settings();

    $setting = \App\Models\Utility::colorset();
    $SITE_RTL = Utility::getValByName('SITE_RTL');

    $color = !empty($setting['color']) ? $setting['color'] : 'theme-3';

    if(isset($setting['color_flag']) && $setting['color_flag'] == 'true')
    {
        $themeColor = 'custom-color';
    }
    else {
        $themeColor = $color;
    }

    // $getseo= App\Models\Utility::getSeoSetting();
    $metatitle = isset($adminSettings['meta_title']) ? $adminSettings['meta_title'] : '';
    $metsdesc = isset($adminSettings['meta_desc']) ? $adminSettings['meta_desc'] : '';
    $meta_image = \App\Models\Utility::get_file('uploads/meta/');
    $meta_logo = isset($adminSettings['meta_image']) ? $adminSettings['meta_image'] : '';
    // $get_cookie = Utility::getCookieSetting();
@endphp

@include('landingpage::layouts.partials.header')


			<!-- BLOG POSTS LISTING
			============================================= -->
			<section id="blog-page" class="pb-60 inner-page-hero blog-page-section">
				<div class="container">
                    <!--button style="width:150px;float:right" class="btn btn-success" href="{{ route('Blogs') }}">{{ __('Back To Blogs') }}</button-->

					<!-- WIDE BLOG POST -->
					<div class="blog-post wide-post wow fadeInUp">
                        <div class="row d-flex align-items-center">


                           <!-- BLOG POST IMAGE -->
                            <div class="col-md-6">
                                <div class="blog-post-img">
                                   <img class=" r-16" height="500px" width="500px" src="{{ asset('landing/blogs_super_admin/' . $blog->img) }}" alt="blog-post-image">
                               </div>
                           </div>

                           <!-- BLOG POST TEXT -->
                           <div class="col-md-6">
                               <div class="blog-post-txt">

                                   <!-- Post Tag -->
                                   <span class="post-tag color--blue-400">{{ $blog->category->name }}</span>

                                   <!-- Post Link -->
                                   <h3 class="s-38 w-700">
                                       <a href="">{{ $blog->title }}
                                       </a>
                                   </h3>

                                   <!-- Text -->
                                   <p>{{ $blog->long_description }}</p>

                                   <!-- Post Meta -->
                                   <div class="blog-post-meta mt-30">
                                       <ul class="post-meta-list ico-10">
                                           <li><p class="w-500">By BSSFLOW Team</p></li>
                                           <li class="meta-list-divider"><p><span class="flaticon-minus"></span></p></li>
                                           <li><p>{{ date('j M, Y',strtotime($blog->created_at)) }}</p></li>
                                       </ul>
                                   </div>

                               </div>
                           </div>	<!-- END BLOG POST TEXT -->


                       </div>   <!-- End row -->
                    </div>	<!-- END WIDE BLOG POST -->


					 		</div>	<!-- END BLOG POST #6 -->


						</div>  <!-- End row -->
					</div>	<!-- END POSTS WRAPPER -->

			<!-- FOOTER-3
			============================================= -->
            @if ($settings['footer_status'] == 'on')
            @include('landingpage::layouts.partials.footer')
            @endif




		</div>	<!-- END PAGE CONTENT -->




		<!-- EXTERNAL SCRIPTS
		============================================= -->
		<script src="{{ asset('Modules/LandingPage/Resources/assets/js_theme9/jquery-3.7.0.min.js')}}"></script>
		<script src="{{ asset('Modules/LandingPage/Resources/assets/js_theme9/bootstrap.min.js')}}"></script>
		<script src="{{ asset('Modules/LandingPage/Resources/assets/js_theme9/modernizr.custom.js')}}"></script>
		<script src="{{ asset('Modules/LandingPage/Resources/assets/js_theme9/jquery.easing.js')}}"></script>
		<script src="{{ asset('Modules/LandingPage/Resources/assets/js_theme9/jquery.appear.js')}}"></script>
		<script src="{{ asset('Modules/LandingPage/Resources/assets/js_theme9/menu.js')}}"></script>
		<script src="{{ asset('Modules/LandingPage/Resources/assets/js_theme9/owl.carousel.min.js')}}"></script>
		<script src="{{ asset('Modules/LandingPage/Resources/assets/js_theme9/pricing-toggle.js')}}"></script>
		<script src="{{ asset('Modules/LandingPage/Resources/assets/js_theme9/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{ asset('Modules/LandingPage/Resources/assets/js_theme9/quick-form.js')}}"></script>
		<script src="{{ asset('Modules/LandingPage/Resources/assets/js_theme9/jquery.validate.min.js')}}"></script>
		<script src="{{ asset('Modules/LandingPage/Resources/assets/js_theme9/jquery.ajaxchimp.min.js')}}"></script>
		<script src="{{ asset('Modules/LandingPage/Resources/assets/js_theme9/popper.min.js')}}"></script>
		<script src="{{ asset('Modules/LandingPage/Resources/assets/js_theme9/lunar.js')}}"></script>
		<script src="{{ asset('Modules/LandingPage/Resources/assets/js_theme9/wow.js')}}"></script>
		<!-- Custom Script -->
		<script src="{{ asset('Modules/LandingPage/Resources/assets/js_theme9/custom.js')}}"></script>


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


	</body>




</html>
