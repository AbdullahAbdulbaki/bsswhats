			<footer id="footer-3" class="pt-100 footer ft-3-ntr">
				<div class="container">


					<!-- FOOTER CONTENT -->
					<div class="row">


						<!-- FOOTER LOGO -->
						<div class="col-xl-3">
							<div class="footer-info">
								<a href="#">
									<?php if($setting['cust_darklayout'] == 'on'): ?>
										<img src="<?php echo e($logo . '/' . $settings['site_logo_light'] . '?timestamp=' . time()); ?>"
											alt="logo" style="filter: drop-shadow(2px 3px 7px #011C4B);" class="footer-logo">
									<?php else: ?>
										<img src="<?php echo e($logo . '/' . $settings['site_logo_dark'] . '?timestamp=' . time()); ?>"
											alt="logo" style="filter: drop-shadow(2px 3px 7px #011C4B);" class="footer-logo">
									<?php endif; ?>
								</a>
							</div>
						</div>


						<!-- FOOTER LINKS -->
						<div class="col-sm-4 col-lg-3 col-xl-2">
							<div class="footer-links fl-1">

								<!-- Title -->
								<h6 class="s-17 w-700">Company</h6>

								<!-- Links -->
								<ul class="foo-links clearfix">
									<li><p><a href="about.html">About Us</a></p></li>
									<li><p><a href="blog-listing.html">Our Blog</a></p></li>
									<li><p><a href="testimonials.html">Customers</a></p></li>
									<li><p><a href="#">Community</a></p></li>
								</ul>

							</div>
						</div>	<!-- END FOOTER LINKS -->


						<!-- FOOTER LINKS -->
						<div class="col-sm-4 col-lg-2">
							<div class="footer-links fl-2">

								<!-- Title -->
								<h6 class="s-17 w-700">Product</h6>

								<!-- Links -->
								<ul class="foo-links clearfix">
									<li><p><a href="features.html">Integration</a></p></li>
									<li><p><a href="download.html">What's New</a></p></li>
									<li><p><a href="pricing-1.html">Pricing</a></p></li>
									<li><p><a href="help-center.html">Help Center</a></p></li>
								</ul>

							</div>
						</div>	<!-- END FOOTER LINKS -->


						<!-- FOOTER LINKS -->
						<div class="col-sm-4 col-lg-3 col-xl-2">
							<div class="footer-links fl-3">

								<!-- Title -->
								<h6 class="s-17 w-700">Legal</h6>

								<!-- Links -->
								<ul class="foo-links clearfix">
									<li><p><a href="terms.html">Terms of Use</a></p></li>
									<li><p><a href="privacy.html">Privacy Policy</a></p></li>
									<li><p><a href="cookies.html">Cookie Policy</a></p></li>
									<li><p><a href="#">Site Map</a></p></li>
								</ul>

							</div>
						</div>	<!-- END FOOTER LINKS -->



						<!-- FOOTER NEWSLETTER FORM -->
						<div class="col-sm-10 col-md-8 col-lg-4 col-xl-3">


								<!-- Title -->
                                <?php if($settings['joinus_status'] == 'on'): ?>
                                <h6 class="s-17 w-700"><?php echo $settings['joinus_heading']; ?></h6>
                                <h6 class="s-17 w-500"><?php echo $settings['joinus_description']; ?></h6>

								<!-- Newsletter Form Input -->
								<form class="newsletter-form" method="post" action="<?php echo e(route('join_us_store')); ?>">
                                    <?php echo csrf_field(); ?>
									<div class="input-group r-06">
										<input type="email" class="form-control" placeholder="Type your email address..." required id="s-email">
										<span class="input-group-btn ico-15">
											<button type="submit" class="btn color--theme">
												<span class="flaticon-right-arrow-1">Join Us!</span>
											</button>
										</span>
									</div>

									<!-- Newsletter Form Notification -->
									<label for="s-email" class="form-notification"></label>

								</form>
                                <?php endif; ?>
							</div>
						</div>	<!-- END FOOTER NEWSLETTER FORM -->


					</div>	<!-- END FOOTER CONTENT -->


					<hr>	<!-- FOOTER DIVIDER LINE -->


					<!-- BOTTOM FOOTER -->
					<div class="bottom-footer">
						<div class="row row-cols-1 row-cols-md-2 d-flex align-items-center">


							<!-- FOOTER COPYRIGHT -->
							<div class="col">
								<div class="footer-copyright">
									<p class="p-sm"><span>&copy; <?php echo e(date('Y')); ?> <?php echo e((App\Models\Utility::getValByName('footer_text')) ? App\Models\Utility::getValByName('footer_text') :config('app.name', 'WhatsStore SaaS')); ?></span>&nbsp;&nbsp;<span>All Rights Reserved</span></p>
								</div>
							</div>


							<!-- FOOTER SOCIALS -->
							<div class="col">
								<ul class="bottom-footer-socials ico-20 text-end">
									<li><a href="#"><span class="flaticon-facebook"></span></a></li>
									<li><a href="#"><span class="flaticon-twitter"></span></a></li>
									<li><a href="#"><span class="flaticon-instagram"></span></a></li>
									<li><a href="#"><span class="flaticon-youtube"></span></a></li>
								</ul>
							</div>


						</div>  <!-- End row -->
					</div>	<!-- END BOTTOM FOOTER -->


				</div>     <!-- End container -->
			</footer>   <!-- END FOOTER-3 -->





		<!-- EXTERNAL SCRIPTS
		============================================= -->
		<script src="<?php echo e(asset('public/js_23/jquery-3.7.0.min.js')); ?>"></script>
		<script src="<?php echo e(asset('public/js_23/bootstrap.min.js')); ?>"></script>
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

		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-XXXXX-X']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script><?php /**PATH /home/bsswhats/public_html/Modules/LandingPage/Resources/views/layouts/partials/footer.blade.php ENDPATH**/ ?>