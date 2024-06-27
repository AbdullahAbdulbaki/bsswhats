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
					<!-- BLOG POSTS CATEGORY -->
					<div class="row">
						<div class="col">
							<div class="posts-category ico-20 wow fadeInUp">
								<h4 class="s-34 w-700">Latest Blogs <span class="flaticon-next"></span></h4>
							</div>
						</div>
					</div>


					<!-- POSTS WRAPPER -->
					<div class="posts-wrapper">
						<div class="row">

                            @foreach ($blogs as $blog)
							<!-- BLOG POST #4 -->
					 		<div class="col-md-6 col-lg-4">
					 			<div class="blog-post mb-40 wow fadeInUp clearfix">


					 				<!-- BLOG POST IMAGE -->
					 				<div class="blog-post-img mb-35">
										<img class=" r-16" src="{{ asset('landing/blogs_super_admin/' . $blog->img) }}" height="500" width="500" alt="blog-post-image">
									</div>


									<!-- BLOG POST TEXT -->
									<div class="blog-post-txt">

										<!-- Post Tag -->
										<span class="post-tag color--pink-400">{{ $blog->category->name }}</span>

										<!-- Post Link -->
										<h6 class="s-20 w-700">
											<a href="{{ route('apps.show_blog', $blog->id) }}">{{ $blog->title }}
											</a>
										</h6>

										<!-- Text -->
										<p>{{ $blog->short_description }}</p>

										<!-- Post Meta -->
										<div class="blog-post-meta mt-20">
											<ul class="post-meta-list ico-10">
												<li><p class="p-sm w-500">By BSSFLOW </p></li>
												<li class="meta-list-divider"><p><span class="flaticon-minus"></span></p></li>
												<li><p class="p-sm">{{ date('j M, Y',strtotime($blog->created_at)) }}</p></li>
											</ul>
										</div>

									</div>	<!-- END BLOG POST TEXT -->


					 			</div>
					 		</div>	<!-- END BLOG POST #4 -->




                            @endforeach


						</div>  <!-- End row -->
					</div>	<!-- END POSTS WRAPPER -->
<br>


			<!-- PAGE PAGINATION
			============================================= -->
			<div class="pb-100 page-pagination theme-pagination">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<nav aria-label="Page navigation">
								<div class="pagination ico-20 justify-content-center">
							    	
								</div>
							</nav>
						</div>
					</div>  <!-- End row -->
				</div> <!-- End container -->
			</div>	<!-- END PAGE PAGINATION -->






			<!-- FOOTER-3
			============================================= -->
            @if ($settings['footer_status'] == 'on')
            @include('landingpage::layouts.partials.footer')
            @endif




		</div>	<!-- END PAGE CONTENT -->




		<!-- EXTERNAL SCRIPTS
		============================================= -->
		<script src="Modules/LandingPage/Resources/assets/js_theme9/jquery-3.7.0.min.js"></script>
		<script src="Modules/LandingPage/Resources/assets/js_theme9/bootstrap.min.js"></script>
		<script src="Modules/LandingPage/Resources/assets/js_theme9/modernizr.custom.js"></script>
		<script src="Modules/LandingPage/Resources/assets/js_theme9/jquery.easing.js"></script>
		<script src="Modules/LandingPage/Resources/assets/js_theme9/jquery.appear.js"></script>
		<script src="Modules/LandingPage/Resources/assets/js_theme9/menu.js"></script>
		<script src="Modules/LandingPage/Resources/assets/js_theme9/owl.carousel.min.js"></script>
		<script src="Modules/LandingPage/Resources/assets/js_theme9/pricing-toggle.js"></script>
		<script src="Modules/LandingPage/Resources/assets/js_theme9/jquery.magnific-popup.min.js"></script>
		<script src="Modules/LandingPage/Resources/assets/js_theme9/quick-form.js"></script>
		<script src="Modules/LandingPage/Resources/assets/js_theme9/jquery.validate.min.js"></script>
		<script src="Modules/LandingPage/Resources/assets/js_theme9/jquery.ajaxchimp.min.js"></script>
		<script src="Modules/LandingPage/Resources/assets/js_theme9/popper.min.js"></script>
		<script src="Modules/LandingPage/Resources/assets/js_theme9/lunar.js"></script>
		<script src="Modules/LandingPage/Resources/assets/js_theme9/wow.js"></script>

		<!-- Custom Script -->
		<script src="Modules/LandingPage/Resources/assets/js_theme9/custom.js"></script>


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
