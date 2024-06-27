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
<!doctype html>
<!-- Martex - Software, App, SaaS & Startup Landing Pages Pack design by DSAThemes (http://www.dsathemes.com) -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en" dir="{{ $setting['SITE_RTL'] == 'on' ? 'rtl' : '' }}">
@include('landingpage::layouts.partials.header')




			<!-- HERO-23
			============================================= -->
			<section id="hero-23" class="bg--scroll hero-section">
				<div class="container text-center">


					<!-- HERO TEXT -->
					<div class="row justify-content-center">
						<div class="col-md-10 col-lg-9 col-xl-10">
							<div class="hero-23-txt wow fadeInUp">

								<!-- Hero Logo  -->
								<div class="hero-square-logo">
									<img class="img-fluid" src="public/images_23/square-logo.png" alt="hero-logo">
								</div>

								<!-- Title -->
								<h2 class="s-58 w-700">
									Sell  <span style="color:#FE4A65">Your Products Directly1111</span> Through WhatsApp
								</h2>

								<!-- Text -->
								<p class="p-xl">Start your online store today with  <span class="color--black">Bss Whats !</span>
								</p>

							</div>
						</div>
					</div>	<!--END HERO TEXT -->


					<!-- HERO IMAGE -->
					<div class="row">
						<div class="col">
							<div class="hero-23-img video-preview wow fadeInUp">


								<!-- Preview Image -->
								<img class="img-fluid" src="public/images_23/dashboard.svg" alt="video-preview" style="width:1300px">

							</div>
						</div>
					</div>	<!-- END HERO IMAGE -->


				</div>	   <!-- End container -->


				<!-- WAVE SHAPE BOTTOM -->
				<div class="wave-shape-bottom">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill-opacity="1" d="M0,128L80,149.3C160,171,320,213,480,240C640,267,800,277,960,277.3C1120,277,1280,267,1360,261.3L1440,256L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
				</div>


			</section>	<!-- END HERO-23 -->




			<!-- BRANDS-1
			============================================= -->
			<div id="brands-1" class="py-100 brands-section">
				<div class="container">
					<div class="row">
						<div class="col text-center">


							<!-- BRANDS CAROUSEL -->
							<div class="owl-carousel brands-carousel-6">

								<!-- BRAND LOGO IMAGE -->
								<div class="brand-logo">
									<a href="#"><img class="img-fluid" src="public/images_23/logos/Ai Studdy/400.png" alt="brand-logo"></a>
								</div>


								<!-- BRAND LOGO IMAGE -->
								<div class="brand-logo">
									<a href="#"><img class="img-fluid" src="public/images_23/logos/bss code/400.png" alt="brand-logo"></a>
								</div>


								<!-- BRAND LOGO IMAGE -->
								<div class="brand-logo">
									<a href="#"><img class="img-fluid" src="public/images_23/logos/BSS Whats/400.png" alt="brand-logo"></a>
								</div>

                                
								<!-- BRAND LOGO IMAGE -->
								<div class="brand-logo">
									<a href="#"><img class="img-fluid" src="public/images_23/logos/bsscard/400.png" alt="brand-logo"></a>
								</div>


								<!-- BRAND LOGO IMAGE -->
								<div class="brand-logo">
									<a href="#"><img class="img-fluid" src="public/images_23/logos/BSSflow/400.png" alt="brand-logo"></a>
								</div>


								<!-- BRAND LOGO IMAGE -->
								<div class="brand-logo">
									<a href="#"><img class="img-fluid" src="public/images_23/logos/chats ads/400.png" alt="brand-logo"></a>
								</div>


								<!-- BRAND LOGO IMAGE -->
								<div class="brand-logo">
									<a href="#"><img class="img-fluid" src="public/images_23/logos/daymailer/400.png" alt="brand-logo"></a>
								</div>


								<!-- BRAND LOGO IMAGE -->
								<div class="brand-logo">
									<a href="#"><img class="img-fluid" src="public/images_23/logos/einshteiin/400.png" alt="brand-logo"></a>
								</div>
								
								<!-- BRAND LOGO IMAGE -->
								<div class="brand-logo">
									<a href="#"><img class="img-fluid" src="public/images_23/logos/emenu/400.png" alt="brand-logo"></a>
								</div>
								
								<!-- BRAND LOGO IMAGE -->
								<div class="brand-logo">
									<a href="#"><img class="img-fluid" src="public/images_23/logos/Fav icon/400.png"  alt="brand-logo"></a>
								</div>


							</div>	<!-- END BRANDS CAROUSEL -->


						</div>
					</div>  <!-- End row -->
				</div>	<!-- End container -->
			</div>	<!-- END BRANDS-1 -->




			<!-- DIVIDER LINE -->
			<hr class="divider">




			<!-- TEXT CONTENT
			============================================= -->
			<section id="lnk-1" class="py-100 ct-02 content-section division">
				<div class="container">


					<!-- SECTION CONTENT (ROW) -->
					<div class="row d-flex align-items-center">


						<!-- IMAGE BLOCK -->
						<div class="col-md-6">
							<div class="img-block left-column wow fadeInRight">
								<img class="img-fluid" src="public/images_23/dashboard1.jpg" alt="content-image" style="border-radius:10px;">
							</div>
						</div>


						<!-- TEXT BLOCK -->
						<div class="col-md-6">
							<div class="txt-block right-column wow fadeInLeft">

								<!-- Section ID -->
						 		<span class="section-id color--grey">Why Bss Whats ?</span>

								<!-- Title -->
								<h2 class="s-46 w-700">BssWhats is the perfect solution for you if you are looking to</h2>



								<!-- Small Title -->
								<h5 class="s-24 w-700">Get more done in less time</h5>

								<!-- CONTENT BOX #1 -->
								<div class="cbox-1 ico-16" >

		 							<div class="ico-wrap" style="color:#FE4A65">
		 								<div class="cbox-1-ico"><span class="flaticon-check"></span></div>
		 							</div>

									<div class="cbox-1-txt">
										<p> &nbsp; Sell your products directly through WhatsApp.</p>
									</div>

								</div>

								<!-- CONTENT BOX #2 -->
								<div class="cbox-1 ico-16">

		 							<div class="ico-wrap" style="color:#FE4A65">
		 								<div class="cbox-1-ico"><span class="flaticon-check"></span></div>
		 							</div>

									<div class="cbox-1-txt">
										<p> &nbsp; Create your own store without the need for a complex website.
										</p>
									</div>

								</div>
									<div class="cbox-1 ico-16">

		 							<div class="ico-wrap" style="color:#FE4A65">
		 								<div class="cbox-1-ico"><span class="flaticon-check"></span></div>
		 							</div>

									<div class="cbox-1-txt">
										<p> &nbsp; Customize your store to match your brand.

										</p>
									</div>

								</div>
								<div class="cbox-1 ico-16">

		 							<div class="ico-wrap" style="color:#FE4A65">
		 								<div class="cbox-1-ico"><span class="flaticon-check"></span></div>
		 							</div>

									<div class="cbox-1-txt">
										<p>&nbsp; Reach customers all over the world.
										</p>
									</div>

								</div>

								<!-- CONTENT BOX #3 -->
								<div class="cbox-1 ico-16">

		 							<div class="ico-wrap" style="color:#FE4A65">
		 								<div class="cbox-1-ico"><span class="flaticon-check"></span></div>
		 							</div>

									<div class="cbox-1-txt">
										<p class="mb-0">&nbsp; Easily manage your products and orders.
</p>
									</div>

								</div>

							</div>
						</div>	<!-- END TEXT BLOCK -->


					</div>	<!-- END SECTION CONTENT (ROW) -->


				</div>	   <!-- End container -->
			</section>	<!-- END TEXT CONTENT -->




			<!-- TEXT CONTENT
			============================================= -->
			<section class="bg--white-400 py-100 ct-01 content-section division">
				<div class="container">


					<!-- SECTION CONTENT (ROW) -->
					<div class="row d-flex align-items-center">


						<!-- TEXT BLOCK -->
						<div class="col-md-6 order-last order-md-2">
							<div class="txt-block left-column wow fadeInRight">

								<!-- Section ID -->
						 		<span class="section-id color--grey">One-Stop Solution</span>

								<!-- Title -->
								<h1 class="s-46 w-700">With BssWhats, you can <span style="color:#FE4A65">:</span></h1>

								<!-- Text -->
								<p style="font-size:14px;">Create your own store in minutes. <span style="color:#FE4A65">& </span> Add products, categorize them, and set prices with ease.
								<span style="color:#FE4A65">& </span> Process orders and track inventory. <span style="color:#FE4A65">& </span> Communicate with customers directly through WhatsApp.
								<span style="color:#FE4A65">& </span> Accept payments from customers securely.
								<span style="color:#FE4A65">& </span> Analyze your store's performance to gain valuable insights.
								</p>

								<!-- Link -->
								<div class="txt-block-tra-link mt-25">
									<a href="" class="tra-link ico-20" style="color:#FE4A65">
										What are you waiting for?<span class="flaticon-next"></span>
									</a>
								</div>

							</div>
						</div>	<!-- END TEXT BLOCK -->


						<!-- IMAGE BLOCK -->
						<div class="col-md-6 order-first order-md-2">
							<div class="img-block right-column wow fadeInLeft">
								<img class="img-fluid" src="public/images_23/img-09.png" alt="content-image">
							</div>
						</div>


					</div>	<!-- END SECTION CONTENT (ROW) -->


				</div>	   <!-- End container -->
			</section>	<!-- END TEXT CONTENT -->




			
			<!-- FEATURES-12
			============================================= -->
			<section id="features-12" class="shape--bg shape--white-400 pt-100 features-section division">
				<div class="container">
					<div class="row d-flex align-items-center">


						<!-- TEXT BLOCK -->
						<div class="col-md-5">
							<div class="txt-block left-column wow fadeInRight">

								<!-- Section ID -->
						 		<span class="section-id">Intuitive Dashboard</span>

			 					<!-- Title -->
								<h2 class="s-46 w-700"> Increase Sales<span style="color:#FE4A65">:</span> Reach a Wider Customer Base Through WhatsApp </h2>

								<!-- Text -->
								<p>Simplify Shopping Process and Enhance Effective Customer Communication for an Outstanding User Experience 

								</p>

								<!-- List -->
								<ul class="simple-list">

									<li class="list-item">
										<p>Expanding Your Customer Base and Enhancing Marketing Strategies to Drive Sales and Increase Customer Engagement
										</p>
									</li>

									<li class="list-item">
										<p class="mb-0">Achieving Effective Results through WhatsApp Integration for Expanded Market Influence
										</p>
									</li>

								</ul>

							</div>
						</div>	<!-- END TEXT BLOCK -->


						<!-- FEATURES-12 WRAPPER -->
						<div class="col-md-7">
							<div class="fbox-12-wrapper wow fadeInLeft">
								<div class="row">


				 					<div class="col-md-6">

				 						<!-- FEATURE BOX #1 -->
				 						<div id="fb-12-1" class="fbox-12 bg--white-100 block-shadow r-12 mb-30">

											<!-- Icon -->
											<div class="fbox-ico ico-50">
												<div class="shape-ico color--theme">

													<!-- Vector Icon -->
													<span class="flaticon-layers-1"></span>

													<!-- Shape -->
													<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
													 <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
													</svg>

												</div>
											</div>	<!-- End Icon -->

											<!-- Text -->
											<div class="fbox-txt">
												<h5 class="s-20 w-700">Two user interfaces</h5>
												<p>One for the end user (customer) and one for the admin.</p>
											</div>

				 						</div>

				 						<!-- FEATURE BOX #2 -->
				 						<div id="fb-12-2" class="fbox-12 bg--white-100 block-shadow r-12">

											<!-- Icon -->
											<div class="fbox-ico ico-50">
												<div class="shape-ico color--theme" >

													<!-- Vector Icon -->
													<span class="flaticon-click-1"></span>

													<!-- Shape -->
													<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
													  <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
													</svg>

												</div>
											</div>	<!-- End Icon -->

											<!-- Text -->
											<div class="fbox-txt">
												<h5 class="s-20 w-700">Theme customization</h5>
												<p>A variety of themes to choose from to design your store according to your brand.</p>
											</div>

				 						</div>


				 					</div>


				 					<div class="col-md-6">


				 						<!-- FEATURE BOX #3 -->
				 						<div id="fb-12-3" class="fbox-12 bg--white-100 block-shadow r-12 mb-30">

											<!-- Icon -->
											<div class="fbox-ico ico-50">
												<div class="shape-ico color--theme">

													<!-- Vector Icon -->
													<span class="flaticon-prioritize"></span>

													<!-- Shape -->
													<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
													  <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
													</svg>

												</div>
											</div>	<!-- End Icon -->

											<!-- Text -->
											<div class="fbox-txt">
												<h5 class="s-20 w-700">Easy store management</h5>
												<p>Add products, categorize them, set prices, manage orders, and track inventory.</p>
											</div>

				 						</div>

				 						<!-- FEATURE BOX #4 -->
				 						<div id="fb-12-4" class="fbox-12 bg--white-100 block-shadow r-12">

											<!-- Icon -->
											<div class="fbox-ico ico-50">
												<div class="shape-ico color--theme">

													<!-- Vector Icon -->
													<span class="flaticon-analytics"></span>

													<!-- Shape -->
													<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
													  <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
													</svg>

												</div>
											</div>	<!-- End Icon -->

											<!-- Text -->
											<div class="fbox-txt">
												<h5 class="s-20 w-700">Multilingual support</h5>
												<p>Reach customers from all over the world.</p>
											</div>

				 						</div>


				 					</div>


				 				</div>
							</div>	<!-- End row -->
						</div>	<!-- END FEATURES-12 WRAPPER -->


					</div>    <!-- End row -->
				</div>     <!-- End container -->
			</section>	<!-- END FEATURES-12 -->

<!-- TEXT CONTENT
			============================================= -->
			<section class="pt-100 ct-02 content-section division">
				<div class="container">


					<!-- SECTION CONTENT (ROW) -->
					<div class="row d-flex align-items-center">


						<!-- IMAGE BLOCK -->
						<div class="col-md-6">
							<div class="img-block left-column wow fadeInRight">
								<img class="img-fluid" src="public/images_23/img-06.png" alt="content-image">
							</div>
						</div>


						<!-- TEXT BLOCK -->
						<div class="col-md-6">
							<div class="txt-block right-column wow fadeInLeft">


								<!-- TEXT BOX -->
								<div class="txt-box">

									<!-- Title -->
									<h5 class="s-24 w-700">Increase Sales: Reach a Wider Customer Base Through WhatsApp </h5>

									<!-- Text -->
									<p>Expand Your Customer Base and Enhance Marketing Strategies to Increase Sales and Boost Customer Engagement
									</p>

								</div>	<!-- END TEXT BOX -->


								<!-- TEXT BOX -->
								<div class="txt-box mb-0">

									<!-- Title -->
									<h5 class="s-24 w-700">Improve Customer Experience Easily </h5>

									<!-- Text -->
									<p>Simplify Shopping Process and Enhance Effective Customer Communication for an Outstanding User Experience 
									</p>

									<!-- List -->
									<ul class="simple-list">

										<li class="list-item">
											<p>Expanding Your Customer Base and Enhancing Marketing Strategies to Drive Sales and Increase Customer Engagement

											</p>
										</li>

										<li class="list-item">
											<p class="mb-0">Achieving Effective Results through WhatsApp Integration for Expanded Market Influence
											</p>
										</li>

									</ul>

									<!-- Link -->
									<div class="txt-block-tra-link mt-25">
										<a href="{{route('register')}}" class="tra-link ico-20" style="color:#FE4A65">
											Get Started Free Today! <span class="flaticon-next"></span>
										</a>
									</div>

								</div>	<!-- END TEXT BOX -->


							</div>
						</div>	<!-- END TEXT BLOCK -->


					</div>	<!-- END SECTION CONTENT (ROW) -->


				</div>	   <!-- End container -->
			</section>	<!-- END TEXT CONTENT -->






			<!-- TEXT CONTENT
			============================================= -->
			<section class="pt-100 ct-02 content-section division">
				<div class="container">


					<!-- SECTION CONTENT (ROW) -->
					<div class="row d-flex align-items-center">


						<!-- IMAGE BLOCK -->
						<div class="col-md-6">
							<div class="img-block left-column wow fadeInRight">
								<img class="img-fluid" src="public/images_23/img-02.png" alt="content-image">
							</div>
						</div>


						<!-- TEXT BLOCK -->
						<div class="col-md-6">
							<div class="txt-block right-column wow fadeInLeft">

								<!-- Section ID -->
						 		<span class="section-id">Effortless Integration with WhatsApp</span>

								<!-- Title -->
								<h2 class="s-46 w-700">BssWhats Integration: Simplify Your Sales Process</h2>

								<!-- List -->
								<ul class="simple-list">

									<li class="list-item">
										<p>Increase Sales: Reach a wider audience.
										</p>
									</li>

									<li class="list-item">
										<p class="mb-0">Reduce Costs: No need for a complex website.
										</p>
									</li>
									<li class="list-item">
										<p class="mb-0">Improve Customer Experience: Direct communication with customers.
										</p>
									</li>

								</ul>

							</div>
						</div>	<!-- END TEXT BLOCK -->


					</div>	<!-- END SECTION CONTENT (ROW) -->


				</div>	   <!-- End container -->
			</section>	<!-- END TEXT CONTENT -->




			<!-- FEATURES-5
			============================================= -->
			<section id="features-5" class="pt-100 features-section division">
				<div class="container">


					<!-- SECTION TITLE -->
					<div class="row justify-content-center">
						<div class="col-md-10 col-lg-9">
							<div class="section-title mb-70">

								<!-- Title -->
								<h2 class="s-50 w-700">Build a customer-centric marketing strategy</h2>

								<!-- Text -->
								<p class="s-21 color--grey">Communicate with customers and receive orders seamlessly through WhatsApp integration.</p>

							</div>
						</div>
					</div>


					<!-- FEATURES-5 WRAPPER -->
					<div class="fbox-wrapper text-center">
						<div class="row d-flex align-items-center">


							<!-- FEATURE BOX #1 -->
							<div class="col-md-6">
								<div class="fbox-5 fb-1 gr--smoke r-16 wow fadeInUp">

									<!-- Text -->
									<div class="fbox-txt order-last order-md-2">
										<h5 class="s-26 w-700">Marketing Integrations</h5>
										<p>Enhance your communication and order processing through seamless WhatsApp integration.</p>
									</div>

		 							<!-- Image -->
									<div class="fbox-5-img order-first order-md-2">
										<img class="img-fluid" src="public/images_23/productivity1.jpg" alt="feature-image" style="border-radius:10px">
									</div>

		 						</div>
		 					</div>	<!-- END FEATURE BOX #1 -->


		 					<!-- FEATURE BOX #2 -->
							<div class="col-md-6">
								<div class="fbox-5 fb-2 gr--smoke r-16 wow fadeInUp">

		 							<!-- Image -->
									<div class="fbox-5-img">
										<img class="img-fluid" src="public/images_23/productivity.jpg" alt="feature-image" style="border-radius:10px">
									</div>

									<!-- Text -->
									<div class="fbox-txt">
										<h5 class="s-26 w-700">Productivity Focused</h5>
										<p>Easily manage your products and orders with a simple and user-friendly interface.</p>
									</div>

		 						</div>
		 					</div>	<!-- END FEATURE BOX #2 -->


						</div>  <!-- End row -->
					</div>	<!-- END FEATURES-5 WRAPPER -->


				</div>     <!-- End container -->
			</section>	<!-- END FEATURES-5 -->




			<!-- STATISTIC-1
			============================================= -->
			<div id="statistic-1" class="py-100 statistic-section division">
				<div class="container">


					<!-- STATISTIC-1 WRAPPER -->
					<div class="statistic-1-wrapper">
						<div class="row justify-content-md-center row-cols-1 row-cols-md-3">


							<!-- STATISTIC BLOCK #1 -->
							<div class="col">
								<div id="sb-1-1" class="wow fadeInUp">
									<div class="statistic-block">

										<!-- Digit -->
										<div class="statistic-block-digit text-center">
											<h2 class="s-46 statistic-number"><span class="count-element">89</span>k</h2>
										</div>

										<!-- Text -->
										<div class="statistic-block-txt color--grey">
											<p class="p-md">Number of customers currently using BssWhats</p>
										</div>

									</div>
								</div>
							</div>	<!-- END STATISTIC BLOCK #1 -->


							<!-- STATISTIC BLOCK #2 -->
							<div class="col">
								<div id="sb-1-2" class="wow fadeInUp">
									<div class="statistic-block">

										<!-- Digit -->
										<div class="statistic-block-digit text-center">
											<h2 class="s-46 statistic-number"><span class="count-element">76</span>%</h2>
										</div>

										<!-- Text -->
										<div class="statistic-block-txt color--grey">
											<p class="p-md">Increase in productivity using sales management tools</p>
										</div>

									</div>
								</div>
							</div>	<!-- END STATISTIC BLOCK #2 -->


							<!-- STATISTIC BLOCK #3 -->
							<div class="col">
								<div id="sb-1-3" class="wow fadeInUp">
									<div class="statistic-block">

										<!-- Digit -->
										<div class="statistic-block-digit text-center">
											<h2 class="s-46 statistic-number">
												<span class="count-element">4</span>.<span class="count-element">93</span>
											</h2>
										</div>

										<!-- Text -->
										<div class="statistic-block-txt color--grey">
											<p class="p-md">User rating for their online stores after using BssWhats</p>
										</div>

									</div>
								</div>
							</div>	<!-- END STATISTIC BLOCK #3 -->


						</div>  <!-- End row -->
					</div>	<!-- END STATISTIC-1 WRAPPER -->


				</div>	 <!-- End container -->
			</div>	 <!-- END STATISTIC-1 -->




			<!-- DIVIDER LINE -->
			<hr class="divider">




			<!-- IMAGE CONTENT
			============================================= -->
			<section id="lnk-2" class="pt-100 ct-08 content-section division">
				<div class="container">


					<!-- SECTION TITLE -->
					<div class="row justify-content-center">
						<div class="col-md-10 col-lg-9">
							<div class="section-title mb-70">

								<!-- Title -->
								<h2 class="s-50 w-700">Add a unique touch to your store with <span style="color:#FE4A65">BssWhats</span></h2>

								<!-- Text -->
								<p class="s-21">stunning theme collection. Make your store stand out and look attractive with elegant designs that reflect your personal identity.</p>

							</div>
						</div>
					</div>


					<!-- IMAGE BLOCK -->
					<div class="row">
						<div class="col">
							<div class="img-block video-preview wow fadeInUp">


								<!-- Preview Image -->
			 					<img class="img-fluid" src="public/images_23/themes_land1.png" alt="video-preview" style="width:1300px;border-radius:10px">

							</div>
						</div>
					</div>


				</div>	   <!-- End container -->
			</section>	<!-- END IMAGE CONTENT -->




			<!-- FEATURES-11
			============================================= -->
			<section id="features-11" class="pt-90 pb-100 features-section division">
				<div class="container">


					<!-- SECTION TITLE -->
					<div class="row justify-content-center">
						<div class="col-md-10 col-lg-9">
							<div class="section-title mb-70">

								<!-- Title -->
								<h2 class="s-50 w-700">The Complete Solutions</h2>

								<!-- Text -->
								<p class="s-21 color--grey">Achieve your business goals with our all-in-one solutions:</p>

							</div>
						</div>
					</div>


					<!-- FEATURES-11 WRAPPER -->
					<div class="fbox-wrapper">
						<div class="row row-cols-1 row-cols-md-2 rows-3">


							<!-- FEATURE BOX #1 -->
		 					<div class="col">
		 						<div class="fbox-11 fb-1 wow fadeInUp">

		 							<!-- Icon -->
		 							<div class="fbox-ico-wrap">
		 								<div class="fbox-ico ico-50">
		 									<div class="shape-ico color--theme">

												<!-- Vector Icon -->
												<span class="flaticon-graphics" ></span>

												<!-- Shape -->
												<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
												  <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
												</svg>

											</div>
		 								</div>
									</div>	<!-- End Icon -->

									<!-- Text -->
									<div class="fbox-txt">
										<h6 class="s-22 w-700"> WhatsApp Integration</h6>
										<p>Direct and seamless communication with your customers via WhatsApp for instant orders and interaction.
										</p>
									</div>

		 						</div>
		 					</div>	<!-- END FEATURE BOX #1 -->


		 					<!-- FEATURE BOX #2 -->
		 					<div class="col">
		 						<div class="fbox-11 fb-2 wow fadeInUp">

		 							<!-- Icon -->
		 							<div class="fbox-ico-wrap">
		 								<div class="fbox-ico ico-50">
		 									<div class="shape-ico color--theme">

												<!-- Vector Icon -->
												<span class="flaticon-idea"></span>

												<!-- Shape -->
												<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
												  <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
												</svg>

											</div>
		 								</div>
									</div>	<!-- End Icon -->

									<!-- Text -->
									<div class="fbox-txt">
										<h6 class="s-22 w-700">Product Management</h6>
										<p>Easily add products, categorize them, and set prices.
										</p>
									</div>

		 						</div>
		 					</div>	<!-- END FEATURE BOX #2 -->


		 					<!-- FEATURE BOX #3 -->
		 					<div class="col">
		 						<div class="fbox-11 fb-3 wow fadeInUp">

		 							<!-- Icon -->
		 							<div class="fbox-ico-wrap">
		 								<div class="fbox-ico ico-50">
		 									<div class="shape-ico color--theme">

												<!-- Vector Icon -->
												<span class="flaticon-graphic"></span>

												<!-- Shape -->
												<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
												  <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
												</svg>

											</div>
		 								</div>
									</div>	<!-- End Icon -->

									<!-- Text -->
									<div class="fbox-txt">
										<h6 class="s-22 w-700">Performance Analytics</h6>
										<p>Track your store's performance and analyze data for valuable insights.

										</p>
									</div>

		 						</div>
		 					</div>	<!-- END FEATURE BOX #3 -->


		 					<!-- FEATURE BOX #4 -->
		 					<div class="col">
		 						<div class="fbox-11 fb-4 wow fadeInUp">

		 							<!-- Icon -->
		 							<div class="fbox-ico-wrap">
		 								<div class="fbox-ico ico-50">
		 									<div class="shape-ico color--theme">

												<!-- Vector Icon -->
												<span class="flaticon-wireframe"></span>

												<!-- Shape -->
												<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
												  <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
												</svg>

											</div>
		 								</div>
									</div>	<!-- End Icon -->

									<!-- Text -->
									<div class="fbox-txt">
										<h6 class="s-22 w-700">User Experience</h6>
										<p>Enhance the user interface to make shopping a pleasant experience for customers.

										</p>
									</div>

		 						</div>
		 					</div>	<!-- END FEATURE BOX #4 -->


                            <!-- FEATURE BOX #5 -->
                            <div class="col">
                                <div class="fbox-11 fb-5 wow fadeInUp">
                            
                                    <!-- Icon -->
                                    <div class="fbox-ico-wrap">
                                        <div class="fbox-ico ico-50">
                                            <div class="shape-ico color--theme">
                            
                                                <!-- Vector Icon -->
                                                <span class="flaticon-trophy"  style="color:#FE4A65"></span>
                            
                                                <!-- Shape -->
                                                <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
                                                </svg>
                            
                                            </div>
                                        </div>
                                    </div> <!-- End Icon -->
                            
                                    <!-- Text -->
                                    <div class="fbox-txt">
                                        <h6 class="s-22 w-700">Multilingual Support</h6>
                                        <p>Reach customers from all over the world with multilingual support.</p>
                                    </div>
                            
                                </div>
                            </div> 
                            <!-- END FEATURE BOX #5 -->


		 					<!-- FEATURE BOX #6 -->
		 					<div class="col">
		 						<div class="fbox-11 fb-6 wow fadeInUp">

		 							<!-- Icon -->
		 							<div class="fbox-ico-wrap">
		 								<div class="fbox-ico ico-50">
		 									<div class="shape-ico color--theme" >

												<!-- Vector Icon -->
												<span class="flaticon-search-engine-1" ></span>

												<!-- Shape -->
												<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
												  <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
												</svg>

											</div>
		 								</div>
									</div>	<!-- End Icon -->

									<!-- Text -->
									<div class="fbox-txt">
										<h6 class="s-22 w-700">Flexible Store Design </h6>
										<p>Customize your store's appearance to match your brand identity.
										</p>
									</div>

		 						</div>
		 					</div>	<!-- END FEATURE BOX #6 -->


						</div>  <!-- End row -->
					</div>	<!-- END FEATURES-11 WRAPPER -->


				</div>     <!-- End container -->
			</section>	<!-- END FEATURES-11 -->




			<!-- TEXT CONTENT
			============================================= -->
			<section class="bg--04 py-100 ct-03 content-section division">
				<div class="container">
					<div class="row d-flex align-items-center">


						<!-- IMAGE BLOCK -->
						<div class="col-md-6 col-lg-7">
							<div class="img-block left-column wow fadeInRight">
								<img class="img-fluid" src="public/images_23/img-14.png" alt="content-image">
							</div>
						</div>


						<!-- TEXT BLOCK -->
			 			<div class="col-md-6 col-lg-5">
			 				<div class="txt-block right-column wow fadeInLeft">

			 					<!-- Section ID -->
						 		<span class="section-id color--grey">Control Data Access</span>

			 					<!-- Title -->
								<h2 class="s-46 w-700">Data-driven digital marketing</h2>

								<!-- List -->
								<ul class="simple-list">

									<li class="list-item">
										<p>Discover the power of data-driven digital marketing to enhance your strategies and increase the effectiveness of your campaigns.
										</p>
									</li>
																		<li class="list-item">
										<p>Utilize deep analytics to make informed decisions and elevate your business performance to new heights.
										</p>
									</li>


								</ul>

			 				</div>
					 	</div>	<!-- END TEXT BLOCK -->


					</div>    <!-- End row -->
				</div>	   <!-- End container -->
			</section>	<!-- END TEXT CONTENT -->




			<!-- FEATURES-2
			============================================= -->
			<section id="features-2" class="py-100 features-section division">
				<div class="container">


					<!-- SECTION TITLE -->
					<div class="row justify-content-center">
						<div class="col-md-10 col-lg-9">
							<div class="section-title mb-80">

								<!-- Title -->
								<h2 class="s-50 w-700">Everything in One Place</h2>

								<!-- Text -->
								<p class="s-21 color--grey">Take advantage of our integrated solutions to simplify and organize your work, with everything you need in one platform.</p>

							</div>
						</div>
					</div>


					<!-- FEATURES-2 WRAPPER -->
					<div class="fbox-wrapper text-center">
						<div class="row row-cols-1 row-cols-md-3">


							<!-- FEATURE BOX #1 -->
		 					<div class="col">
		 						<div class="fbox-2 fb-1 wow fadeInUp">

		 							<!-- Image -->
									<div class="fbox-img gr--whitesmoke h-175">
										<img class="img-fluid" src="public/images_23/f_01.png" alt="feature-image">
									</div>

									<!-- Text -->
									<div class="fbox-txt">
										<h6 class="s-22 w-700">Intuitive Dashboard</h6>
										<p>Benefit from a simple and easy-to-use dashboard to track your performance and analyze your data effectively</p>
									</div>

		 						</div>
		 					</div>	<!-- END FEATURE BOX #1 -->


		 					<!-- FEATURE BOX #2 -->
		 					<div class="col">
		 						<div class="fbox-2 fb-2 wow fadeInUp">

		 							<!-- Image -->
									<div class="fbox-img gr--whitesmoke h-175">
										<img class="img-fluid" src="public/images_23/f_02.png" alt="feature-image">
									</div>

									<!-- Text -->
									<div class="fbox-txt">
										<h6 class="s-22 w-700">Engagement Analysis</h6>
										<p>Use engagement analysis tools to gain precise insights into customer interactions with your content and improve your strategies based on the data.</p>
									</div>

		 						</div>
		 					</div>	<!-- END FEATURE BOX #2 -->


		 					<!-- FEATURE BOX #3 -->
		 					<div class="col">
		 						<div class="fbox-2 fb-3 wow fadeInUp">

		 							<!-- Image -->
									<div class="fbox-img gr--whitesmoke h-175">
										<img class="img-fluid" src="public/images_23/f_03.png" alt="feature-image">
									</div>

									<!-- Text -->
									<div class="fbox-txt">
										<h6 class="s-22 w-700">Data Protection</h6>
										<p>Protect your data with reliable security solutions that ensure the confidentiality of your information and safeguard it from any threats.</p>
									</div>

		 						</div>
		 					</div>	<!-- END FEATURE BOX #3 -->


						</div>  <!-- End row -->
					</div>	<!-- END FEATURES-2 WRAPPER -->


				</div>     <!-- End container -->
			</section>	<!-- END FEATURES-2 -->




			<!-- DIVIDER LINE -->
			<hr class="divider">




			<!-- TEXT CONTENT
			============================================= -->
			<section class="pt-100 ct-04 content-section division">
				<div class="container">


					<!-- SECTION CONTENT (ROW) -->
					<div class="row d-flex align-items-center">


						<!-- TEXT BLOCK -->
			 			<div class="col-md-6 order-last order-md-2">
			 				<div class="txt-block left-column wow fadeInRight">


			 					<!-- CONTENT BOX #1 -->
								<div class="cbox-2 process-step">

									<!-- Icon -->
									<div class="ico-wrap">
										<div class="cbox-2-ico" style="background-color: #FE4A65;color: #fff!important;border-color: #FE4A65!important;">1</div>
										<span class="cbox-2-line"></span>
									</div>

									<!-- Text -->
									<div class="cbox-2-txt">
										<h5 class="s-22 w-700">Simple, Secure & Intuitive</h5>
										<p>Our platform offers a user-friendly interface that ensures simplicity, security, and an intuitive experience for all users.
										</p>
									</div>

								</div>	<!-- END CONTENT BOX #1 -->


								<!-- CONTENT BOX #2 -->
								<div class="cbox-2 process-step">

									<!-- Icon -->
									<div class="ico-wrap">
										<div class="cbox-2-ico" style="background-color: #FE4A65;color: #fff!important;border-color: #FE4A65!important;">2</div>
										<span class="cbox-2-line"></span>
									</div>

									<!-- Text -->
									<div class="cbox-2-txt">
										<h5 class="s-22 w-700">Weekly Email Reports</h5>
										<p>Receive comprehensive email reports every week, providing you with crucial insights and performance metrics to keep you informed.
										</p>
									</div>

								</div>	<!-- END CONTENT BOX #2 -->


								<!-- CONTENT BOX #3 -->
								<div class="cbox-2 process-step">

									<!-- Icon -->
									<div class="ico-wrap">
										<div class="cbox-2-ico" style="background-color: #FE4A65;color: #fff!important;border-color: #FE4A65!important;">3</div>
									</div>

									<!-- Text -->
									<div class="cbox-2-txt">
										<h5 class="s-22 w-700">No Personal Data Collected</h5>
										<p class="mb-0">We prioritize your privacy by ensuring that no personal data is collected, giving you peace of mind while using our services.
										</p>
									</div>

								</div>	<!-- END CONTENT BOX #3 -->


			 				</div>
					 	</div>	<!-- END TEXT BLOCK -->


						<!-- IMAGE BLOCK -->
						<div class="col-md-6 order-first order-md-2">
							<div class="img-block wow fadeInLeft">
								<img class="img-fluid" src="public/images_23/tablet-01.png" alt="content-image">
							</div>
						</div>


					</div>	<!-- END SECTION CONTENT (ROW) -->


				</div>	   <!-- End container -->
			</section>	<!-- END TEXT CONTENT -->




			<!-- INTEGRATIONS-2
			============================================= -->
			<section id="integrations-2" class="pt-100 integrations-section">
				<div class="container">


					<!-- INTEGRATIONS-2 WRAPPER -->
					<div class="integrations-2-wrapper bg--02 bg--scroll r-12 text-center">


						<!-- SECTION TITLE -->
						<div class="row justify-content-center">
							<div class="col-md-10 col-lg-9">
								<div class="section-title mb-50">

									<!-- Title -->
									<h2 class="s-50 w-700">Easy integrate all your essential tools</h2>

									<!-- Text -->
									<p class="s-21 color--grey">Integrate seamlessly with a wide range of essential tools to enhance your workflow and efficiency.</p>

								</div>
							</div>
						</div>


						<!-- TOOLS ROW -->
						<div class="row row-cols-1 row-cols-sm-3 row-cols-md-5">


							<!-- TOOL #1 -->
		 					<div class="col">
		 						<a href="#" class="in_tool it-1 r-12 wow fadeInUp">

		 							<!-- Logo -->
									<div class="in_tool_logo ico-65 bg--white-100 block-shadow r-12">
										<img class="img-fluid" src="public/images_23/png_icons/tool-1.png" alt="brand-logo">
									</div>

									<!-- Title -->
									<h6 class="s-17 w-700">Zapier</h6>

		 						</a>
		 					</div>	<!-- END TOOL #1 -->


		 					<!-- TOOL #2 -->
		 					<div class="col">
		 						<a href="#" class="in_tool it-2 r-12 wow fadeInUp">

									<!-- Logo -->
									<div class="in_tool_logo ico-65 bg--white-100 block-shadow r-12">
										<img class="img-fluid" src="public/images_23/png_icons/tool-2.png" alt="brand-logo">
									</div>

									<!-- Title -->
									<h6 class="s-17 w-700">Google Analytics</h6>

		 						</a>
		 					</div>	<!-- END TOOL #2 -->


		 					<!-- TOOL #3 -->
		 					<div class="col">
		 						<a href="#" class="in_tool it-3 r-12 wow fadeInUp">

		 							<!-- Logo -->
									<div class="in_tool_logo ico-65 bg--white-100 block-shadow r-12">
										<img class="img-fluid" src="public/images_23/png_icons/tool-3.png" alt="brand-logo">
									</div>

									<!-- Title -->
									<h6 class="s-17 w-700">Amplitude</h6>

		 						</a>
		 					</div>	<!-- END TOOL #3 -->


		 					<!-- TOOL #4 -->
		 					<div class="col">
		 						<a href="#" class="in_tool it-4 r-12 wow fadeInUp">

		 							<!-- Logo -->
									<div class="in_tool_logo ico-65 bg--white-100 block-shadow r-12">
										<img class="img-fluid" src="public/images_23/png_icons/tool-4.png" alt="brand-logo">
									</div>

									<!-- Title -->
									<h6 class="s-17 w-700">Hubspot</h6>

		 						</a>
		 					</div>	<!-- END TOOL #4 -->


		 					<!-- TOOL #5 -->
		 					<div class="col">
		 						<a href="#" class="in_tool it-5 r-12 wow fadeInUp">

		 							<!-- Logo -->
									<div class="in_tool_logo ico-65 bg--white-100 block-shadow r-12">
										<img class="img-fluid" src="public/images_23/png_icons/tool-5.png" alt="brand-logo">
									</div>

									<!-- Title -->
									<h6 class="s-17 w-700">MailChimp</h6>

		 						</a>
		 					</div>	<!-- END TOOL #5 -->


						</div>	<!-- END TOOLS ROW -->


						<!-- MORE BUTTON -->
						<div class="row">
							<div class="col">
								<div class="more-btn text-center mt-60 wow fadeInUp">
									<a href="integrations.html" class="btn btn--tra-black hover--theme">View all integrations</a>
								</div>
							</div>
						</div>


					</div>	<!-- END INTEGRATIONS-2 WRAPPER -->


				</div>     <!-- End container -->
			</section>	<!-- END INTEGRATIONS-2 -->




			<!-- TEXT CONTENT
			============================================= -->
			<section class="py-100 ct-02 content-section division">
				<div class="container">


					<!-- SECTION CONTENT (ROW) -->
					<div class="row d-flex align-items-center">


						<!-- IMAGE BLOCK -->
						<div class="col-md-6">
							<div class="img-block left-column wow fadeInRight">
								<img class="img-fluid" src="public/images_23/img-05.png" alt="content-image">
							</div>
						</div>


						<!-- TEXT BLOCK -->
						<div class="col-md-6">
							<div class="txt-block right-column wow fadeInLeft">


								<!-- CONTENT BOX #1 -->
								<div class="cbox-4">

									<!-- Icon & Title -->
		 							<div class="box-title">
										<span class="flaticon-paper-sizes" style="color:#FE4A65"></span>
										<h5 class="s-24 w-700">Built-in automation</h5>
									</div>

									<!-- Text -->
									<div class="cbox-4-txt">
										<p>Leverage built-in automation features to streamline your processes and save valuable time.
										</p>
									</div>

								</div>	<!-- END CONTENT BOX #1 -->


								<!-- CONTENT BOX #2 -->
								<div class="cbox-4">

									<!-- Icon & Title -->
		 							<div class="box-title">
										<span class="flaticon-layers-1" style="color:#FE4A65"></span>
										<a href="{{route('register')}}"><h5 class="s-24 w-700">Get Started Free Today!</h5></a>
									</div>

									<!-- Text -->
									<div class="cbox-4-txt">
										<p>Sign up now and start using our platform for free, with no hidden fees or commitments.

										</p>
									</div>

								</div>	<!-- END CONTENT BOX #2 -->


								<!-- CONTENT BOX #3 -->
								<div class="cbox-4">

									<!-- Icon & Title -->
		 							<div class="box-title">
										<span class="flaticon-pie-chart " style="color:#FE4A65"></span>
										<h5 class="s-24 w-700">Real-time analytics</h5>
									</div>

									<!-- Text -->
									<div class="cbox-4-txt">
										<p class="mb-0">Access real-time analytics to monitor your performance and make data-driven decisions quickly and effectively.
										</p>
									</div>

								</div>	<!-- END CONTENT BOX #3 -->


							</div>
						</div>	<!-- END TEXT BLOCK -->


					</div>	<!-- END SECTION CONTENT (ROW) -->


				</div>	   <!-- End container -->
			</section>	<!-- END TEXT CONTENT -->




	<!-- PRICING-1
			============================================= -->
			<section id="pricing-1" class="gr--whitesmoke pb-40 inner-page-hero pricing-section">
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row justify-content-center">	
						<div class="col-md-10 col-lg-8">
							<div class="section-title mb-70">	

								<!-- Title -->	
								<h2 class="s-52 w-700">Simple, Flexible Pricing</h2>	

								<!-- TOGGLE BUTTON -->
								<div class="toggle-btn ext-toggle-btn toggle-btn-md mt-30">
									<span class="toggler-txt">Billed monthly</span>
							        <label class="switch-wrap">
							          <input type="checkbox" id="checbox" onclick="check()">
							          <span class="switcher bg--grey switcher--theme">
											<span class="show-annual"></span>
								   			<span class="show-monthly"></span>
							          </span>
							        </label>
							        <span class="toggler-txt">Billed yearly</span>

							        <!-- Text -->	
							        <p class="color--theme">Save up to 35% with yearly billing</p>

							    </div>


							</div>	
						</div>
					</div>	<!-- END SECTION TITLE -->	

					<!-- PRICING TABLES -->
					<div class="pricing-1-wrapper">
						<div class="row row-cols-1 row-cols-md-3">


							<!-- STARTER PLAN -->
							<div class="col">
								<div id="pt-1-1" class="p-table pricing-1-table bg--white-100 block-shadow r-12 wow fadeInUp">


									<!-- TABLE HEADER -->
									<div class="pricing-table-header">

										<!-- Title -->
										<h5 class="s-24 w-700">Starter</h5>

										<!-- Price -->	
										<div class="price">								
											<sup class="color--black">$</sup>								
											<span class="color--black">0</span>
											<sup class="validity color--grey">&nbsp;/&ensp;forever</sup>
											<p class="color--grey">For professionals getting started with smaller projects.</p>
										</div>

										<!-- Button -->
										<a href="#" class="pt-btn btn r-04 btn--theme hover--theme">Get srarted - it's free</a>
										<p class="p-sm btn-txt text-center color--grey">No credit card required</p>

									</div>	<!-- END TABLE HEADER -->


									<!-- PRICING FEATURES -->
									<ul class="pricing-features color--black ico-10 ico--green mt-25">
										<li><p><span class="flaticon-check"></span> 2 free projects</p></li>
										<li><p><span class="flaticon-check"></span> 1 GB of cloud storage</p></li>
										<li><p><span class="flaticon-check"></span> For personal use</p></li>
										<li class="disabled-option"><p><span class="flaticon-check"></span> Weekly data backup</p></li>
										<li class="disabled-option"><p><span class="flaticon-check"></span> No Ads. No trackers</p></li>	
										<li><p><span class="flaticon-check"></span> 12/5 email support</p></li>
									</ul>	


								</div>
							</div>	<!-- END STARTER PLAN -->


							<!-- BASIC PLAN -->
							<div class="col">
								<div id="pt-1-2" class="p-table pricing-1-table bg--white-100 block-shadow r-12 wow fadeInUp">


									<!-- TABLE HEADER -->
									<div class="pricing-table-header">

										<!-- Title -->
										<h5 class="s-24">Basic</h5>

										<!-- Price -->	
										<div class="price">								

											<!-- Monthly Price -->	
											<div class="price2">
												<sup class="color--black">$</sup>								
												<span class="color--black">16.99</span>
												<sup class="validity color--grey">&nbsp;/&ensp;mo</sup>
											</div>

											<!-- Yearly Price -->	
											<div class="price1">
												<sup class="color--black">$</sup>								
												<span class="color--black">142.75</span>
												<sup class="validity color--grey">&nbsp;/&ensp;yr</sup>

												<!-- Discount Badge -->
												<div class="pricing-discount bg--yellow-400 color--black r-36">
													<h6 class="s-17">Save 30%</h6>
												</div>

											</div>

											<!-- Text -->	
											<p class="color--grey">For personal use or small teams with simple workflows.</p>

										</div>	<!-- End Price -->	

										<!-- Button -->
										<a href="#" class="pt-btn btn r-04 btn--theme hover--theme">Start 14-day trial</a>
										<p class="p-sm btn-txt text-center color--grey">7-Day Money Back Guarantee</p>	

									</div>	<!-- END TABLE HEADER -->


									<!-- PRICING FEATURES -->
									<ul class="pricing-features color--black ico-10 ico--green mt-25">
										<li><p><span class="flaticon-check"></span> Up to 250 projects</p></li>
										<li><p><span class="flaticon-check"></span> 15 GB of Cloud Storage</p></li>
										<li><p><span class="flaticon-check"></span> Shared team workspace</p></li>
										<li><p><span class="flaticon-check"></span> Daily data backup</p></li>
										<li><p><span class="flaticon-check"></span> No Ads. No trackers</p></li>					
										<li><p><span class="flaticon-check"></span> 12/7 email support</p></li>
									</ul>


								</div>
							</div>	<!-- END BASIC PLAN -->


							<!-- ADVANCED PLAN -->
							<div class="col">
								<div id="pt-1-3" class="p-table pricing-1-table bg--white-100 block-shadow r-12 wow fadeInUp">


									<!-- TABLE HEADER -->
									<div class="pricing-table-header">

										<!-- Title -->
										<h5 class="s-24">Advanced</h5>

										<!-- Price -->	
										<div class="price">	

											<!-- Monthly Price -->	
											<div class="price2">
												<sup class="color--black">$</sup>								
												<span class="color--black">24.99</span>
												<sup class="validity color--grey">&nbsp;/&ensp;mo</sup>
											</div>

											<!-- Yearly Price -->	
											<div class="price1">
												<sup class="color--black">$</sup>								
												<span class="color--black">194.99</span>
												<sup class="validity color--grey">&nbsp;/&ensp;yr</sup>

												<!-- Discount Badge -->
												<div class="pricing-discount bg--yellow-400 color--black r-36">
													<h6 class="s-17">Save 35%</h6>
												</div>

											</div>

											<!-- Text -->	
											<p class="color--grey">For growing teams that need more services and flexibility.</p>

										</div>	<!-- End Price -->	

										<!-- Button -->
										<a href="#" class="pt-btn btn r-04 btn--theme hover--theme">Upgrade your plan</a>
										<p class="p-sm btn-txt text-center color--grey">7-Day Money Back Guarantee</p>	

									</div>	<!-- END TABLE HEADER -->


									<!-- PRICING FEATURES -->
									<ul class="pricing-features color--black ico-10 ico--green mt-25">
										<li><p><span class="flaticon-check"></span> Everything in Basic</p></li>
										<li><p><span class="flaticon-check"></span> Private cloud hosting</p></li>
										<li><p><span class="flaticon-check"></span> Custom security</p></li>
										<li><p><span class="flaticon-check"></span> Advanced user permissions</p></li>
										<li><p><span class="flaticon-check"></span> Multi-team management</p></li>					
										<li><p><span class="flaticon-check"></span> 24/7 Email Support</p></li>
									</ul>
									

								</div>
							</div>	<!-- END ADVANCED PLAN -->


						</div>
					</div>	<!-- PRICING TABLES -->
                    <div>
                        <center><a href="#" class="pt-btn btn r-04 btn--theme hover--theme" style="width:200px">Discover more...</a></center>
                    </div>
                    				
				</div>	   <!-- End container -->
			</section>	<!-- END PRICING-1 -->


			<!-- TESTIMONIALS-2
			============================================= -->
			<section id="reviews-2" class="pt-100 reviews-section">
				<div class="container">


					<!-- SECTION TITLE -->
					<div class="row justify-content-center">
						<div class="col-md-10 col-lg-9">
							<div class="section-title mb-70">

								<!-- Title -->
								<h2 class="s-50 w-700">Our Happy Customers</h2>

								<!-- Text -->
								<p class="s-21 color--grey">Customers recommend BssWhats for its easy setup of WhatsApp stores and seamless integration, ideal for efficient online product sales.</p>

							</div>
						</div>
					</div>


					<!-- TESTIMONIALS-2 WRAPPER -->
					<div class="reviews-2-wrapper rel shape--02 shape--white-400">
						<div class="row align-items-center row-cols-1 row-cols-md-2">


							<!-- TESTIMONIAL #1 -->
							<div class="col">
								<div id="rw-2-1" class="review-2 bg--white-100 block-shadow r-08">

									<!-- Quote Icon -->
		 							<div class="review-ico ico-65"><span class="flaticon-quote"></span></div>

									<!-- Text -->
									<div class="review-txt">

										<!-- Text -->
										<p>"I highly recommend BssWhats for anyone looking to launch a store on WhatsApp. The user interface is user-friendly, and the integration with the app is amazing!"
										</p>

										<!-- Author -->
										<div class="author-data clearfix">

											<!-- Avatar -->
											<div class="review-avatar">
												<img src="public/images_23/review-author-1.jpg" alt="review-avatar">
											</div>

											<!-- Data -->
											<div class="review-author">
												<h6 class="s-18 w-700">Scott Boxer</h6>
											
											</div>

										</div>	<!-- End Author -->

									</div>	<!-- End Text -->

								</div>
							</div>	<!-- END TESTIMONIAL #1 -->


							<!-- TESTIMONIAL #2 -->
							<div class="col">
								<div id="rw-2-2" class="review-2 bg--white-100 block-shadow r-08">

									<!-- Quote Icon -->
		 							<div class="review-ico ico-65"><span class="flaticon-quote"></span></div>

									<!-- Text -->
									<div class="review-txt">

										<!-- Text -->
										<p>"Thanks to BssWhats, I can sell my products in a flexible and direct way through WhatsApp. I appreciate the available themes that have made my store look unique."

										</p>

										<!-- Author -->
										<div class="author-data clearfix">

											<!-- Avatar -->
											<div class="review-avatar">
												<img src="public/images_23/review-author-2.jpg" alt="review-avatar">
											</div>

											<!-- Data -->
											<div class="review-author">
												<h6 class="s-18 w-700">Joel Peterson</h6>
												
											</div>

										</div>	<!-- End Author -->

									</div>	<!-- End Text -->

								</div>
							</div>	<!-- END TESTIMONIAL #2 -->


							<!-- TESTIMONIAL #3 -->
							<div class="col">
								<div id="rw-2-3" class="review-2 bg--white-100 block-shadow r-08">

									<!-- Quote Icon -->
		 							<div class="review-ico ico-65"><span class="flaticon-quote"></span></div>

									<!-- Text -->
									<div class="review-txt">

										<!-- Text -->
										<p>"I can't imagine my store without BssWhats now. Managing orders and quick responses via WhatsApp has become incredibly easy and efficient."
										</p>

										<!-- Author -->
										<div class="author-data clearfix">

											<!-- Avatar -->
											<div class="review-avatar">
												<img src="public/images_23/review-author-5.jpg" alt="review-avatar">
											</div>

											<!-- Data -->
											<div class="review-author">
												<h6 class="s-18 w-700">Jennifer Harper</h6>
											
											</div>

										</div>	<!-- End Author -->

									</div>	<!-- End Text -->

								</div>
							</div>	<!-- END TESTIMONIAL #3 -->


							<!-- TESTIMONIAL #4 -->
							<div class="col">
								<div id="rw-2-4" class="review-2 bg--white-100 block-shadow r-08">

									<!-- Quote Icon -->
		 							<div class="review-ico ico-65"><span class="flaticon-quote"></span></div>

									<!-- Text -->
									<div class="review-txt">

										<!-- Text -->
										<p>"I'm really impressed with my experience using BssWhats. I was able to build my own store and attract customers quickly, and the multilingual support has had a significant impact."
										</p>

										<!-- Author -->
										<div class="author-data clearfix">

											<!-- Avatar -->
											<div class="review-avatar">
												<img src="public/images_23/review-author-8.jpg" alt="review-avatar">
											</div>

											<!-- Data -->
											<div class="review-author">
												<h6 class="s-18 w-700">Evelyn Martinez</h6>
										
											</div>

										</div>	<!-- End Author -->

									</div>	<!-- End Text -->

								</div>
							</div>	<!-- END TESTIMONIAL #4 -->


						</div>  <!-- End row -->
					</div>	<!-- END TESTIMONIALS-2 WRAPPER -->


				</div>	   <!-- End container -->
			</section>	<!-- END TESTIMONIALS-2 -->




			<!-- BANNER-7
			============================================= -->
			<section id="banner-7" class="banner-section">
				<div class="banner-overlay py-100">
					<div class="container">


						<!-- BANNER-7 WRAPPER -->
						<div class="banner-7-wrapper">
							<div class="row justify-content-center">


								<!-- BANNER-7 TEXT -->
								<div class="col-md-8">
									<div class="banner-7-txt text-center">

										<!-- Title -->
										<h2 class="s-50 w-700">Get started with BssWhats now to effortlessly build your WhatsApp store Now !</h2>

										<!-- Buttons -->
										<div class="btns-group">
											<a href="{{route('register')}}" class="btn r-04  hover--theme" style="color:white;background-color:#FE4A65">Get srarted - it's free
											</a>
											<a href="pricing-1.html" class="btn r-04 btn--tra-black hover--theme">Discover pricing</a>
										</div>

										<!-- Button Text -->
										<p class="btn-txt ico-15">Free for 30 days - no credit card required.</p>

									</div>
								</div>


							</div>   <!-- End row -->
						</div>    <!-- END BANNER-7 WRAPPER -->


					</div>    <!-- End container -->
				</div>     <!-- End banner overlay -->
			</section>	<!-- END BANNER-7 -->
			
		





			<!-- DIVIDER LINE -->
			<hr class="divider">




			<!-- MODAL WINDOW (IMAGE LINK)
			============================================= -->
			<!--div id="modal-1" class="modal fade" tabindex="-1">
			    <div class="modal-dialog modal-dialog-centered">
			        <div class="modal-content">


			            <!-- CLOSE BUTTON -->
			            <!--button type="button" class="btn-close ico-10 white-color" data-bs-dismiss="modal" aria-label="Close">
			            	<span class="flaticon-cancel"></span>
			            </!--button>


			            <!-- MODAL CONTENT -->
	                    <!--div class="bg-img rounded">
                            <div class="overlay-light">
                                <div class="modal-img text-center">
                                	<a href="pricing-1.html">
                                		<img class="img-fluid" src="public/images_23/modal-1-img.jpg" alt="modal-image">
                                	</a>
                                </div>
                            </div>
	                    </!--div>	<!-- END MODAL CONTENT -->


			        <!--/div>
			    </div>
			</div-->	<!-- END MODAL WINDOW (IMAGE LINK) -->




			<!-- MODAL WINDOW (REQUEST FORM)
			============================================= -->
			<div id="modal-3" class="modal auto-off fade" tabindex="-1" role="dialog" aria-labelledby="modal-3">
				 <div class="modal-dialog modal-xl modal-dialog-centered">
			        <div class="modal-content">


			        	<!-- CLOSE BUTTON -->
			            <button type="button" class="btn-close ico-10 white-color" data-bs-dismiss="modal" aria-label="Close">
			            	<span class="flaticon-cancel"></span>
			            </button>


			            <!-- MODAL CONTENT -->
			            <div class="modal-body">
			            	<div class="container">
                  				 <div class="row">


                  				 	<!-- BACKGROUND IMAGE -->
                  				 	<div class="col-md-5 bg-img d-none d-sm-flex align-items-end"></div>


                  				 	<!-- REQUEST FORM -->
                  				 	<div class="col-md-7">
                  				 		<div class="modal-body-content">

                  				 			<!-- TEXT -->
                  				 			<div class="request-form-title">

		                  				 		<!-- Title 	-->
												<h3 class="s-28 w-700">Get started for Free!</h3>

												<!-- Text -->
												<p class="color--grey">Aliquam augue suscipit, luctus neque purus ipsum
												   neque dolor primis libero
												</p>

											</div>

											<!-- FORM -->
	                  				 		<form name="requestForm" class="row request-form">

								                <!-- Form Input -->
								                <div class="col-md-12">
								                	<input type="text" name="name" class="form-control name" placeholder="Enter Your Name*" autocomplete="off" required>
								                </div>

								                <!-- Form Input -->
								                <div class="col-md-12">
								                	<input type="email" name="email" class="form-control email" placeholder="Enter Your Email*" autocomplete="off" required>
								                </div>

								                <!-- Form Button -->
								                <div class="col-md-12 form-btn">
								                	<button type="submit" class="btn btn--theme hover--theme submit">Get Started Now</button>
								                </div>

								                <!-- Form Message -->
								                <div class="col-md-12 request-form-msg">
								                	<span class="loading"></span>
								                </div>

								            </form>	<!-- END FORM -->

								        </div>
                  				 	</div>	<!-- END REQUEST FORM -->


                  				 </div>
                  			</div>
			            </div>	<!-- END MODAL CONTENT -->


					 </div>
			    </div>
			</div>	<!-- END MODAL WINDOW (REQUEST FORM) -->




			<!-- FOOTER-3
			============================================= -->
@include('landingpage::layouts.partials.footer')

		<!--script>
			// Start [ Menu hide/show on scroll ]
			let ost = 0;
			document.addEventListener("scroll", function() {
				let cOst = document.documentElement.scrollTop;
				if (cOst == 0) {
					document.querySelector(".navbar").classList.add("top-nav-collapse");
				} else if (cOst > ost) {
					document.querySelector(".navbar").classList.add("top-nav-collapse");
					document.querySelector(".navbar").classList.remove("default");
				} else {
					document.querySelector(".navbar").classList.add("default");
					document
						.querySelector(".navbar")
						.classList.remove("top-nav-collapse");
				}
				ost = cOst;
			});
			// End [ Menu hide/show on scroll ]

			var scrollSpy = new bootstrap.ScrollSpy(document.body, {
				target: "#navbar-example",
			});
			feather.replace();
		</script-->
		@if ($adminSettings['enable_cookie'] == 'on')
			@include('layouts.cookie_consent')
		@endif
	</body>




</html>
