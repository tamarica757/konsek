<!DOCTYPE html>
<html lang="sr">
<?php
include('tekstovi.php');
?>
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title><?php echo _T('Naslov sajta'); ?></title>
	<meta name="description" content="<?php echo _T('Opis sajta'); ?>">

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

	<meta property="og:image" content="http://konsek.info/images/fb.jpg">
	<meta property="og:title" content="КОНСЕК 2019: Инвестирај у себе">
	<meta property="og:url" content="http://konsek.info/">
	<meta property="og:site_name" content="Kongres studenata ekonomije">
	<meta property="og:description" content="Конгрес студената економије (КОНСЕК) одржава се седму годину за редом на Златибору у организацији Групе за СПЕКОФ. Ове године конгрес ће трајати од 14. до 18. марта под слоганом Инверстирај у себе.">

	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="css/reset.css" media="all">
	<link rel="stylesheet" href="css/ut-fontface.css" media="all">
	<link rel="stylesheet" href="css/font-awesome.css" media="all">
	<link rel="stylesheet" href="css/flexslider.css" media="all">
	<link rel="stylesheet" href="css/magnific-popup.css" media="all">
	<link rel="stylesheet" href="css/ut-responsive-grid.css" media="all">
	<link rel="stylesheet" href="css/color.css" media="all">
	<link rel="stylesheet" href="css/style.css" media="all">

	<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<![endif]-->

	<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="ie8-and-down.css" />
	<style>.hero .hero-holder {
	margin-left:-410px;
}
</style>
<![endif]-->
<style>
/* Effect 14: border switch */
.cl-effect-14 a {
	padding: 0 20px;
	height: 45px;
	line-height: 45px;
}

.cl-effect-14 a::before,
.cl-effect-14 a::after {
	position: absolute;
	width: 45px;
	height: 2px;
	background: #fff;
	content: '';
	opacity: 0.2;
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	transition: all 0.3s;
	pointer-events: none;
}

.cl-effect-14 a::before {
	top: 0;
	left: 0;
	-webkit-transform: rotate(90deg);
	-moz-transform: rotate(90deg);
	transform: rotate(90deg);
	-webkit-transform-origin: 0 0;
	-moz-transform-origin: 0 0;
	transform-origin: 0 0;
}

.cl-effect-14 a::after {
	right: 0;
	bottom: 0;
	-webkit-transform: rotate(90deg);
	-moz-transform: rotate(90deg);
	transform: rotate(90deg);
	-webkit-transform-origin: 100% 0;
	-moz-transform-origin: 100% 0;
	transform-origin: 100% 0;
}

.cl-effect-14 a:hover::before,
.cl-effect-14 a:hover::after,
.cl-effect-14 a:focus::before,
.cl-effect-14 a:focus::after {
	opacity: 1;
}

.cl-effect-14 a:hover::before,
.cl-effect-14 a:focus::before {
	left: 50%;
	-webkit-transform: rotate(0deg) translateX(-50%);
	-moz-transform: rotate(0deg) translateX(-50%);
	transform: rotate(0deg) translateX(-50%);
}

.cl-effect-14 a:hover::after,
.cl-effect-14 a:focus::after {
	right: 50%;
	-webkit-transform: rotate(0deg) translateX(50%);
	-moz-transform: rotate(0deg) translateX(50%);
	transform: rotate(0deg) translateX(50%);
}	
	
	
</style>
<!--[if IE]>
<link rel="stylesheet" type="text/css" href="css/ie.css" />
<![endif]-->

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="images/favicon.ico">

<!-- Load jQuery
================================================== -->
<script src="js/jquery.min.js"></script>
<script src="js/SmoothScroll.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/device.min.js"></script>

	
</head>

<body id="mainsite">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60883834-1', 'auto');
  ga('send', 'pageview');

  $(function() {
       $('a[href*="#"]:not([href="#"])').click(function() {
         if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
           var target = $(this.hash);
           target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html, body').animate({
               scrollTop: target.offset().top
             }, 1000);
             return false;
           }
         }
       });
     });	

</script>
	<a id="top"></a>

	<!-- Page Layout
	================================================== -->

	<!-- header section -->
	<header id="header-section" class="ha-header ha-header-hide">
		<div class="grid-container">
			<div class="ha-header-perspective">
				<div class="ha-header-front">
					<div class="grid-20 tablet-grid-20 hide-on-mobile">
						<h1 class="logo"><a href="#top"><img src="images/logo.png" alt="logo"></a></h1>
					</div>
					<nav id="ut-navigation" class="grid-80 tablet-grid-80 hide-on-mobile">
						<a class="selected" href="#top"><?php echo _T('Meni - stavka 1'); ?></a>
						<a href="#o-projektu"><?php echo _T('Meni - stavka 2'); ?></a>
						<a href="#program"><?php echo _T('Meni - stavka 3'); ?></a>
						<a href="#predavaci"><?php echo _T('Meni - stavka 4'); ?></a>
						<a href="#sponzori"><?php echo _T('Meni - stavka 5'); ?></a>
					</nav>
				</div>
			</div><!-- close .ha-header-perspective -->
		</div><!-- close grid container -->
	</header><!-- close header -->

	<div class="clear"></div>

	<!-- hero section -->
	<section class="hero ha-waypoint parallax-section parallax-banner-1 parallax-background" data-animate-up="ha-header-hide" data-animate-down="ha-header-hide">
		<div class="parallax-overlay parallax-overlay-1"></div>
		<div class="grid-container">

			<!-- hero holder -->
			<div class="hero-holder grid-70 mobile-grid-100 tablet-grid-100">
				<div class="hero-inner">
					<img src="images/konsek.png"><br>
					<span class="hero-description"><?php echo _T('Mali tekst na vrhu'); ?></span>
					<div class="hero-title-holder"><h1 class="hero-title hero-title-text"><?php echo _T('Rotacioni tekst 1'); ?></h1></div>
					<span class="btn-holder"><a href="#o-projektu" class="hero-btn"><?php echo _T('Dugme na vrhu'); ?></a></span>
					<div class="hidden hero-title-text"><?php echo _T('Rotacioni tekst 2'); ?></div>
					<div class="hidden hero-title-text"><?php echo _T('Rotacioni tekst 3'); ?></div>
				</div>
			</div><!-- close hero-holder -->
		</div>
	</section><!-- close hero section -->

	<div class="clear"></div>

	<div id="main-content" class="wrap">

		<!-- about section -->
		<div class="nav-waypoint">
			<section id="o-projektu" class="about-section content-section ha-waypoint" data-animate-up="ha-header-hide" data-animate-down="ha-header-small">
				<div class="grid-container">

					<!-- section header -->
					<div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
						<header class="section-header">
							<h2 class="section-title"><span><?php echo _T('Naslov drugog dela'); ?></span></h2>
							<p class="section-slogan"><?php echo _T('Opis drugog dela'); ?></p>
						</header>
					</div>
					<!-- close section header -->

					<div class="prefix-5 grid-40 tablet-grid-100 mobile-grid-100 about-box">
						<figure class="about-icon"><img src="<?php echo _T('Slika levog pasusa'); ?>" alt="<?php echo _T('Naslov levog pasusa'); ?>"></figure>

						<div class="about-box">
							<h3><?php echo _T('Naslov levog pasusa'); ?></h3>
							<p><?php echo _T('Levi pasus'); ?></p>
						</div>
					</div>

					<div class="prefix-10 grid-40 tablet-grid-100 mobile-grid-100 about-box">
						<figure class="about-icon"><img src="<?php echo _T('Slika desnog pasusa'); ?>" alt="<?php echo _T('Naslov desnog pasusa'); ?>"></figure>

						<div class="about-box">
							<h3><?php echo _T('Naslov desnog pasusa'); ?></h3>
							<p><?php echo _T('Desni pasus'); ?></p>
						</div>
					</div>

				</div><!-- close grid-container -->
			</section><!-- close about section -->

			<div class="clear"></div>

			<!-- parallax banner 2-->
			<section id="parallax-section-2" class="parallax-section parallax-banner-2 parallax-background parallax-section-2 ha-waypoint">
				<div class="parallax-overlay parallax-overlay-2"></div>
				<div class="grid-container parallax-content">

					<!-- parallax header -->
					<div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
						<header class="parallax-header">
							<h2 class="parallax-title"><span><?php echo _T('Naslov treceg dela'); ?></span></h2>
							<p class="parallax-slogan"><?php echo _T('Tekst treceg dela'); ?></p>
						</header>
					</div>
					<!-- close parallax header -->

				</div><!-- close grid container -->
			</section><!-- close parallax banner 2-->

			<!-- cta section -->
			<section id="cta-section" class="cta-section content-section">
				<div class="grid-container">
					<div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
						<span class="cta-btn cl-effect-14"><a href="mailto:office@konsek.info" class="cl-effect-14"><?php echo _T('Kontakt opis'); ?></a></span>
					</div>
				</div>
			</section><!-- close cta section -->

		</div><!-- close nav-waypoint -->

		<div class="clear"></div>

		<!-- service section -->
		<div class="nav-waypoint">
			<section id="program" class="parallax-section parallax-banner-3 parallax-background service-section">
				<div class="parallax-overlay parallax-overlay-3"></div>
				<div class="grid-container parallax-content">
					<div class="grid-parent grid-100 mobile-grid-100 tablet-grid-100">

						<!-- entry header -->
						<div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
							<header class="parallax-header">
								<h2 class="parallax-title"><span><?php echo _T('Naslov cetvrtog dela'); ?></span></h2>
								<div style="margin: 2em 0"><a href="http://konsek.info"><img src="images/agenda.png"></a></div>
								<p class="parallax-slogan"><?php echo _T('Tekst cetvrtog dela - pasus 1'); ?></p>
								<p class="parallax-slogan"><?php echo _T('Tekst cetvrtog dela - pasus 2'); ?></p>
							</header>
						</div>
						<!-- close entry header -->

						<!-- icon box 1 -->
						<div class="grid-33 mobile-grid-100 tablet-grid-100">
							<div class="box-fade icon-box">
								<div class="arrow-right"></div>
								<img class="service-icon icon1" src="images/icon1.png">
							</div>
							<div class="box-fade info">
								<h3><?php echo _T('Cetvrti deo - naslov 1'); ?></h3>
								<p><?php echo _T('Cetvrti deo - opis 1'); ?></p>
							</div>
						</div><!-- close icon box -->

						<!-- icon box 2 -->
						<div class="grid-33 mobile-grid-100 tablet-grid-100">
							<div class="box-fade icon-box">
								<div class="arrow-right"></div>
								<img class="service-icon icon2" src="images/icon2.png">
							</div>
							<div class="box-fade info">
								<h3><?php echo _T('Cetvrti deo - naslov 2'); ?></h3>
								<p><?php echo _T('Cetvrti deo - opis 2'); ?></p>
							</div>

						</div><!-- close icon box -->

						<!-- icon box 3 -->
						<div class="grid-33 mobile-grid-100 tablet-grid-100">
							<div class="box-fade icon-box">
								<div class="arrow-right"></div>
								<img class="service-icon icon3" src="images/icon3.png">
							</div>
							<div class="box-fade info">
								<h3><?php echo _T('Cetvrti deo - naslov 3'); ?></h3>
								<p><?php echo _T('Cetvrti deo - opis 3'); ?></p>
							</div>
						</div><!-- close icon box -->

					</div><!-- close grid-100 -->
				</div><!-- close grid container -->
			</section><!-- close service section -->

		</div><!-- close nav-waypoint -->

		<div class="clear"></div>

		<!-- team section -->
		<div class="nav-waypoint">
			<section id="predavaci" class="team-section content-section">
				<div class="grid-container">

					<!-- section header -->
					<div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
						<header class="section-header">
							<h2 class="section-title"><span><?php echo _T('Naslov petog dela'); ?></span></h2>
							<p class="section-slogan"><?php echo _T('Tekst petog dela'); ?></p>
						</header>
					</div>
					<!-- close section header -->

					<div class="clear"></div>

					<!-- member 1 -->
					<?php
					for ($i=1; $i<=intval(_T('Broj predavaca')); $i++) {
					?>
					<div class="member-box grid-33 mobile-grid-100 tablet-grid-50">
						<figure class="member-photo"><img src="images/<?php echo _T('Slika predavaca '.$i); ?>" alt="member"></figure>

						<div class="member-box">
							<h3><?php echo _T('Ime predavaca '.$i); ?></h3>
							<span><?php echo _T('Titula predavaca '.$i); ?></span>
						</div>

					</div><!-- close member -->
					<?php
					}
					?>

				</div><!-- close grid-container -->
			</section><!-- close team section -->

			<div class="clear"></div>

			<!-- social section -->
			<section id="social-section" class="parallax-section parallax-banner-4 parallax-background social-section">
				<div class="parallax-overlay parallax-overlay-4"></div><!-- parallax overlay -->
				<div class="grid-container parallax-content">
					<div class="grid-parent grid-100 mobile-grid-100 tablet-grid-100">

						<!-- parallax header -->
						<div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
							<header class="parallax-header">
								<h2 class="parallax-title"><span><?php echo _T('Naslov sestog dela'); ?></span></h2>
								<p class="parallax-slogan"><?php echo _T('Tekst sestog dela'); ?></p>
							</header>
						</div>
						<!-- close parallax header -->

						<div class="clear"></div>

						<!-- social network -->
						<ul class="social-network">
							<li class="facebook grid-25 tablet-grid-25 mobile-grid-50">
								<a class="social-link" href="<?php echo _T('Link za Facebook'); ?>" target="_blank">
									<span class="social-icon"><i class="icon-facebook icon-4x"></i></span>
									<h3 class="social-title">Facebook</h3>
									<span class="social-info"><?php echo _T('Tekst za Facebook'); ?></span>
								</a>
							</li>
							<li class="twitter grid-25 tablet-grid-25 mobile-grid-50">
								<a class="social-link" href="<?php echo _T('Link za Twitter'); ?>" target="_blank">
									<span class="social-icon"><i class="icon-twitter icon-4x"></i></span>
									<h3 class="social-title">Twitter</h3>
									<span class="social-info"><?php echo _T('Tekst za Twitter'); ?></span>
								</a>
							</li>
							<li class="instagram grid-25 tablet-grid-25 mobile-grid-50">
								<a class="social-link" href="<?php echo _T('Link za Instagram'); ?>" target="_blank">
									<span class="social-icon"><i class="icon-instagram icon-4x"></i></span>
									<h3 class="social-title">Instagram</h3>
									<span class="social-info"><?php echo _T('Tekst za Instagram'); ?></span>
								</a>
							</li>
							<li class="grid-25 tablet-grid-25 mobile-grid-50">
								<a href="live.php" class="social-link livestream" target="_blank">
									<span class="social-icon"><i class="icon-facetime-video icon-4x"></i></span>
									<h3 class="social-title">Livestream</h3>
									<span class="social-info"><?php echo _T('Tekst za Livestream'); ?></span>
								</a>
							</li>
						</ul><!-- close social network -->

					</div><!-- close grid-100 -->
				</div><!-- close grid container -->
			</section><!-- close social section -->
		</div><!-- close nav-waypoint -->

		<div class="clear"></div>

		<!-- team section -->


		<!-- testimonial section -->
		<div class="nav-waypoint">
			<section id="sponzori" class="testimonial-section content-section">

				<div class="grid-container">

					<!-- section header -->
					<div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
						<header class="section-header">
							<h2 class="section-title"><span><?php echo _T('Naslov sedmog dela'); ?></span></h2>
							<p class="section-slogan"><?php echo _T('Tekst sedmog dela'); ?></p>

							<h3 class="section-title small"><span><?php echo _T('Sedmi deo - podnaslov 1'); ?></span></h3>
							<div class="grid-container large-spacing">
								<div class="grid-100 mobile-grid-100 tablet-grid-100" style="opacity: 1;">
									<img src="images/pokrovitelji/ministarstvo-pntr.png" alt="Министраство просвете, науке и технолошког развоја">
								</div>
							</div>

							<h3 class="section-title small"><span><?php echo _T('Sedmi deo - podnaslov 2'); ?></span></h3>
							<div class="grid-container large-spacing">
								<div class="grid-25 mobile-grid-50 tablet-grid-33" style="opacity: 1;">
									<img src="images/zlatni/pks.png" alt="Привредна комора Србије">
								</div>
								<div class="grid-25 mobile-grid-50 tablet-grid-33" style="opacity: 1;">
									<img src="images/zlatni/ministarstvo-prosvete.png" alt="Министарство просвете">
								</div>
								<div class="grid-25 mobile-grid-50 tablet-grid-33" style="opacity: 1;">
									<img src="images/partneri/NBS.png" alt="Народна банка Србије">
								</div>
								<div class="grid-25 mobile-grid-50 tablet-grid-33" style="opacity: 1;">
									<img src="images/partneri/univerzitet.png" alt="Универзитет у Београду">
								</div>
							</div>



							<h3 class="section-title small"><span><?php echo _T('Sedmi deo - podnaslov 4'); ?></span></h3>
							<div class="grid-container large-spacing">
								<div class="grid-25 mobile-grid-50 tablet-grid-33" style="opacity: 1;">
									<img src="images/partneri/CO-ratko-mitrovic.png" alt="Coca-Cola Hellenic">
								</div>
								<div class="grid-25 mobile-grid-50 tablet-grid-33" style="opacity: 1;">
									<img src="images/partneri/cards-print.png" alt="Cards Print">
								</div>
								<div class="grid-25 mobile-grid-50 tablet-grid-33" style="opacity: 1;">
									<img src="images/partneri/CEDEM.png" alt="CEDEM">
								</div>
								<div class="grid-25 mobile-grid-50 tablet-grid-33" style="opacity: 1;">
									<img src="images/partneri/feniks.png" alt="Privredni Forum Mladih">
								</div>

							</div>


						</header>
					</div>
					<!-- close section header -->

					<div class="clear"></div>

					<div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">



					</div><!-- close grid-70 prefix-15 mobile-grid-100 tablet-grid-100 -->

				</div><!-- close container -->
			</section><!-- close testimonial section -->

		</div><!-- close nav-waypoint -->

		<div class="clear"></div>

		<div class="nav-waypoint">
			<!-- Counter Section -->
			<section id="counter-section" class="counter-section parallax-section parallax-banner-6 parallax-background">
				<div class="parallax-overlay parallax-overlay-6"></div>
				<div class="grid-container parallax-content">
					<div class="grid-parent grid-100 mobile-grid-100 tablet-grid-100">

						<!-- parallax header -->
						<div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
							<header class="parallax-header">
								<h2 class="parallax-title"><span><?php echo _T('Naslov statistike'); ?></span></h2>
								<p class="parallax-slogan"><?php echo _T('Tekst statistike'); ?></p>
							</header>
						</div>
						<!-- close parallax header -->

						<!-- counter box 1 -->
						<div class="grid-25 mobile-grid-100 tablet-grid-25">
							<div class="counter-box counter" data-counter="<?php echo _T('Statistika 1 - broj'); ?>">
								<span class="count"><?php echo _T('Statistika 1 - broj'); ?></span>
								<h3 class="counter-details"><?php echo _T('Statistika 1 - opis'); ?></h3>
							</div>
						</div><!-- close counter box -->

						<!-- counter box 2 -->
						<div class="grid-25 mobile-grid-100 tablet-grid-25">
							<div class="counter-box counter" data-counter="<?php echo _T('Statistika 2 - broj'); ?>">
								<span class="count"><?php echo _T('Statistika 2 - broj'); ?></span>
								<h3 class="counter-details"><?php echo _T('Statistika 2 - opis'); ?></h3>
							</div>
						</div><!-- close counter box -->

						<!-- counter box 3 -->
						<div class="grid-25 mobile-grid-100 tablet-grid-25">
							<div class="counter-box counter" data-counter="<?php echo _T('Statistika 3 - broj'); ?>">
								<span class="count"><?php echo _T('Statistika 3 - broj'); ?></span>
								<h3 class="counter-details"><?php echo _T('Statistika 3 - opis'); ?></h3>
							</div>
						</div><!-- close counter box -->

						<!-- counter box 4 -->
						<div class="grid-25 mobile-grid-100 tablet-grid-25">
							<div class="counter-box counter" data-counter="<?php echo _T('Statistika 4 - broj'); ?>">
								<span class="count"><?php echo _T('Statistika 4 - broj'); ?></span>
								<h3 class="counter-details"><?php echo _T('Statistika 4 - opis'); ?></h3>
							</div>
						</div><!-- close counter box -->

					</div><!-- close grid-100 -->
				</div><!-- close grid container -->
			</section><!-- close parallax banner 3-->


		</div><!-- close nav-waypoint -->

		<div class="clear"></div>

		<!-- Footer Section -->
		<footer class="footer">
			<a href="#top" class="toTop"><i class="icon-angle-up"></i></a>
			<div class="grid-container">
				<div class="grid-150 mobile-grid-150 tablet-grid-150">
					<a href="http://www.grupazaspekof.org.rs/sr/pocetna-stranica/">
                        <img width="150" height="50" alt="Група за СПЕКОФ" src="images/gzs.jpg">
				</div>
			</div><!-- close container -->
		</footer><!-- close footer -->
	</div>

	<!-- Load Javascript
	================================================== -->
	<script src="js/jquery.mb.YTPlayer.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
	<script src="js/jquery.parallax.min.js"></script>
	<script src="js/jquery.scrollTo.min.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery.custom.js"></script>

	<!-- End Document
	================================================== -->
</body>
</html>
