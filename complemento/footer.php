<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">

						Copyrights &copy; 2017  Todos los derechos reservados a <b>BitGroup</b>
					</div>

					<div class="col_half col_last tright">
						<div class="copyrights-menu copyright-links fright clearfix">
							<a href="#">Inicio</a>/<a href="#">Quienes somos</a>/<a href="#">Equipo Consultor</a>/<a href="#">Servicios</a>/<a href="#">Contacto</a>
						</div>
						<div class="fright clearfix">
							<a href="#" class="social-icon si-small si-borderless nobottommargin si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>
							<a href="#" class="social-icon si-small si-borderless nobottommargin si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>
							<a href="#" class="social-icon si-small si-borderless nobottommargin si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>	
						</div>
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->
</div><!-- #wrapper end -->
<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>
<!-- External JavaScripts
============================================= -->
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/plugins.js"></script>
<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="../js/functions.js"></script>
<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
<script type="text/javascript" src="../include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="../include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="../include/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="../include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="../include/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="../include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="../include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="../include/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="../include/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="../include/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyA-5LObGmvDW7pi03xesRyKOb65tKsfmkM"></script>
<script type="text/javascript" src="../js/jquery.gmap.js"></script>
<script type="text/javascript">
	var tpj=jQuery;
	tpj.noConflict();
	tpj(document).ready(function() {
		var apiRevoSlider = tpj('.tp-banner').show().revolution(
		{
			sliderType:"standard",
			jsFileLocation:"../include/rs-plugin/js/",
			sliderLayout:"fullwidth",
			dottedOverlay:"none",
			delay:16000,
			startwidth:1140,
			startheight:600,
			hideThumbs:200,
			thumbWidth:100,
			thumbHeight:50,
			thumbAmount:5,
			navigation: {
				keyboardNavigation:"off",
				keyboard_direction: "horizontal",
				mouseScrollNavigation:"off",
				onHoverStop:"off",
				touch:{
					touchenabled:"on",
					swipe_threshold: 75,
					swipe_min_touches: 1,
					swipe_direction: "horizontal",
					drag_block_vertical: false
				},
				arrows: {
style: "hermes",
enable: true,
hide_onmobile: false,
hide_onleave: false,
		tmp: '<div class="tp-arr-allwrapper">	<div class="tp-arr-imgholder"></div>	<div class="tp-arr-titleholder">{{title}}</div>	</div>',
left: {
h_align: "left",
v_align: "center",
h_offset: 10,
v_offset: 0
},
right: {
h_align: "right",
v_align: "center",
h_offset: 10,
v_offset: 0
}
}
			},
			touchenabled:"on",
			onHoverStop:"on",
			swipe_velocity: 0.7,
			swipe_min_touches: 1,
			swipe_max_touches: 1,
			drag_block_vertical: false,
			parallax:"mouse",
			parallaxBgFreeze:"on",
			parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
			keyboardNavigation:"off",
			navigationHAlign:"center",
			navigationVAlign:"bottom",
			navigationHOffset:0,
			navigationVOffset:20,
			soloArrowLeftHalign:"left",
			soloArrowLeftValign:"center",
			soloArrowLeftHOffset:20,
			soloArrowLeftVOffset:0,
			soloArrowRightHalign:"right",
			soloArrowRightValign:"center",
			soloArrowRightHOffset:20,
			soloArrowRightVOffset:0,
			shadow:0,
			fullWidth:"on",
			fullScreen:"off",
			spinner:"spinner4",
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,
			shuffle:"off",
			autoHeight:"off",
			forceFullWidth:"off",
			hideTimerBar:"on",
			hideThumbsOnMobile:"off",
			hideNavDelayOnMobile:1500,
			hideBulletsOnMobile:"off",
			hideArrowsOnMobile:"off",
			hideThumbsUnderResolution:0,
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			startWithSlide:0,
		});
		apiRevoSlider.bind("revolution.slide.onloaded",function (e) {
			setTimeout( function(){ SEMICOLON.slider.sliderParallaxDimensions(); }, 200 );
		});
		apiRevoSlider.bind("revolution.slide.onchange",function (e,data) {
			SEMICOLON.slider.revolutionSliderMenu();
		});
	});
</script>
<script type="text/javascript">
	jQuery('#google-map').gMap({
		address: 'Melbourne, Australia',
		maptype: 'ROADMAP',
		zoom: 14,
		markers: [
			{
				address: "Melbourne, Australia",
				html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;">Hi, we\'re <span>Envato</span></h4><p class="nobottommargin">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day, and a network of educational blogs where millions learn <strong>creative skills</strong>.</p></div>',
				icon: {
					image: "../images/icons/map-icon-red.png",
					iconsize: [32, 39],
					iconanchor: [32,39]
				}
			}
		],
		doubleclickzoom: false,
		controls: {
			panControl: true,
			zoomControl: true,
			mapTypeControl: true,
			scaleControl: false,
			streetViewControl: false,
			overviewMapControl: false
		}
	});
</script>

</body>
</html>