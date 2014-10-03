<?php
	define("ROOT", "http://www.ussfoundation.org");
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>
			<?php if ($PAGE_ID == 'index') { ?>
					Welcome to USS Foundation - Dedicated to helping the impoverished, vulnerable children of the world
				<?php } else { ?>
					USS Foundation - <?php echo $PAGE_TITLE; ?>
			<?php } ?>
		</title>
		<meta name="description" content="The Universal Surveillance Systems Foundation (USS Foundation) is a non-profit organization dedicated to helping underprivileged children realize their dreams through practical projects that meet critical needs.">
		<meta name="HandheldFriendly" content="true">
		<meta name="viewport" content="width=device-width; initial-scale=0.666667; maximum-scale=0.666667; user-scalable=1">


		<link rel="stylesheet" href="<?php echo ROOT; ?>/css/normalize.min.css">
		<link rel="stylesheet" href="<?php echo ROOT; ?>/css/main.min.css">
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo ROOT; ?>/css/960.css">

		<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Schoolbell' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" type="text/css" href="<?php echo ROOT; ?>/wowslider/engine1/style.css">
		<script type="text/javascript" src="<?php echo ROOT; ?>/wowslider/engine1/jquery.js"></script>

		<script src="<?php echo ROOT; ?>/js/vendor/modernizr-2.6.2.min.js"></script>

		<link rel="stylesheet" href="<?php echo ROOT; ?>/js/nivo-slider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo ROOT; ?>/img/sliderTheme/default.css" type="text/css" media="screen" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="<?php echo ROOT; ?>/js/jquery.nivo.slider.js" type="text/javascript"></script>

		<link rel="stylesheet" href="<?php echo ROOT; ?>/js/nivo-lightbox.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo ROOT; ?>/js/themes/default/default.css" type="text/css" />
		<script src="<?php echo ROOT; ?>/js/nivo-lightbox.min.js"></script>

		<script src="<?php echo ROOT; ?>/js/jquery.carouFredSel.js" type="text/javascript"></script>
		<script src="<?php echo ROOT; ?>/js/jquery.easing.1.3.js" type="text/javascript"></script>
		<script src="<?php echo ROOT; ?>/js/jquery.prettyPhoto.js" type="text/javascript"></script>
		<script src="<?php echo ROOT; ?>/js/countdown.js" type="text/javascript"></script>
		<script src="<?php echo ROOT; ?>/js/jquery.countdown.min.js" type="text/javascript"></script>
		<script src="<?php echo ROOT; ?>/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(function() {
				$( "#menu" ).menu({position: {
					my:"top+25"
				}});
				$('#newsSlider').nivoSlider({
					effect: 'fade',
					directionNav:false,
					controlNav:false,
					randomStart: true,
					pauseOnHover: false,
					pauseTime:7000
				});
				$('#indexSlider').nivoSlider({
					effect:'fade',
					directionNav:true,
					controlNav:true,
					pauseTime:5000,
					pauseOnHover: false,
					animSpeed: 1000,
					prevText: '',
					nextText: ''

				});
				$('.Bounce').hover(
					function() {
						$(this).animate({top: "-10px"}, {
							duration 	: 350,
							complete 	: function() {
								$(this).animate({top: "0px"}, {
									duration 	: 350,
									complete 	: function() {
										$(this).animate({top: "-10px"}, {
											duration 	: 300,
											complete 	: function() {
												$(this).animate({top: "0px"}, 300);
											}
										});
									}
								});
							}
						});
					},
					function() {
						$(this).stop().animate({top: "0px"}, 400);
					}
				);

				$("a[rel^='prettyPhoto']").prettyPhoto();
			});
		</script>
		<link rel="stylesheet" href="<?php echo ROOT; ?>/engine/css/vlightbox1.css" type="text/css">
		<link rel="stylesheet" href="<?php echo ROOT; ?>/engine/css/visuallightbox.css" type="text/css" media="screen">
		<script src="<?php echo ROOT; ?>/engine/js/visuallightbox.js" type="text/javascript"></script>
	</head>

	<?php ?>

	<body id="<?php echo $PAGE_ID; ?>">
		<!--[if lt IE 7]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->
		<div class="container_12">
			<div class="navbar">
				<div style="display:inline;margin: 0 10px 5px 0;float: left;">
					<h1 id="logo">
						<a href="/USSF/">
							<img src="http://www.ussfoundation.org/img/USSF_Logo.png" alt="USS Foundation" title="Click to return to USS Foundation homepage" style="width: 167px;">
						</a>
					</h1>
				</div>
				<div class="nav1">
					<ul>
						<a href="<?php echo ROOT; ?>/video.php"><li class="Bounce newButtons"><div id="navvideos"></div>Videos</li></a>
						<a href="<?php echo ROOT; ?>/coolzone.php"><li class="Bounce newButtons"><div id="navdownloads"></div>Activities</li></a>
						<a href="http://instagram.com/ussfoundation" target="_blank"><li id="ig" class="socialmedia Bounce"></li></a>
						<a href="http://www.youtube.com/user/USSFoundation" target="_blank"><li id="yt" class="socialmedia Bounce"></li></a>
						<a href="https://twitter.com/#!/USSFoundation" target="_blank"><li id="tw" class="socialmedia Bounce"></li></a>
						<a href="https://www.facebook.com/ussfoundationorg" target="_blank"><li id="fb" class="socialmedia Bounce"></li></a>
						<li id="cs">Contact Us: (888) 574-5727</li>
					</ul>
				</div> <!--/nav1-->
				<div class="nav2">
					<ul id="menu">
						<li><a href="http://www.ussfoundation.org/about.php">about</a></li>
						<li><a href="http://www.ussfoundation.org/news.php">news</a></li>
						<li><a href="programs.php">programs</a>
						  <ul style="z-index: 999;">
							<li><a href="adoptabike.php">Adopt-A-Bike</a></li>
							<li><a href="http://ussfoundation.org/golf.php">Charity Golf Tournament</a></li>
							<li><a href="http://ussfoundation.org/thanksgiving.php">Thanksgiving</a></li>
							<li><a href="http://ussfoundation.org/feedthehomeless.php">Feed the Homeless</a></li>
							<li><a href="http://ussfoundation.org/casacolina.php" style="border:0;">Casa Colina</a></li>
						  </ul>
						</li>
						<li><a href="http://www.ussfoundation.org/friends.php">friends</a></li>
						<li><a href="http://www.ussfoundation.org/gallery.php">gallery</a></li>
						<li><a href="http://www.ussfoundation.org/donate.php">donate</a></li>
						<li><a href="http://www.ussfoundation.org/contact.php">contact</a></li>
					</ul>
				</div> <!--/nav2-->
			</div><!--/navbar-->
			<div class="grid_12">
				<div class="banner-wrapper">
					<div>
						<?php if ($PAGE_ID == 'index') { ?>
								<div class="slider-wrapper theme-default" style="position:relative;">
									<div id="indexSlider" class="nivoSlider">
										<a href="<?php echo ROOT; ?>/golf.php"><img src="<?php echo ROOT; ?>/img/golfcharity/2014/indexbanner.jpg" alt="" style="width: 940px;"></a>
										<a href="<?php echo ROOT; ?>/adoptabike.php"><img src="<?php echo ROOT; ?>/img/tsa/AdoptABikeSlidingBanner.jpg" alt="" style="width: 940px;"></a>
										<a href="<?php echo ROOT; ?>/donate.php"><img src="<?php echo ROOT; ?>/img/landing/LittleGirlBanner.jpg" alt="" style="width: 940px;"></a>
									</div>
								</div>
							<?php } else if ($PAGE_ID == 'about') { ?>
								<img src="http://ussfoundation.org/img/about/about_banner.jpg" alt="About Us" style="width:940px;">
							<?php } else if ($PAGE_ID == 'adoptabike') { ?>
								<img src="http://ussfoundation.org/img/adoptabike/adopt_bike_banner.jpg" alt="" style="width:940px;">
							<?php } else if ($PAGE_ID == 'adoptabike-2013') { ?>
								<img src="http://ussfoundation.org/img/adoptabike/congratsLandingBanner.jpg" alt="" style="width:940px;">
							<?php } else if ($PAGE_ID == 'adoptabike-2013-copy') { ?>
								<img src="http://www.ussfoundation.org//img/tsa/AdoptABikeSlidingBanner2.jpg" alt="">
							<?php } else if ($PAGE_ID == 'thanksgiving') { ?>
								<img src="http://ussfoundation.org/img/thanksgiving/thanksgiving_banner.jpg" alt="" style="width:940px;">
							<?php } else if ($PAGE_ID == 'casacolina') { ?>
								<img src="http://ussfoundation.org/img/casacolina/casa_colina_banner.jpg" alt="" style="width:940px;">
							<?php } else if ($PAGE_ID == 'feedthehomeless') { ?>
								<img src="http://ussfoundation.org/img/homeless/feed_homeless_banner.jpg" alt="" style="width:940px;">
							<?php } else if ($PAGE_ID == 'raisethegrade') { ?>
								<img src="http://ussfoundation.org/img/raisethegrade/raise_grade_banner.jpg" alt="" style="width:940px;">
							<?php } else if ($PAGE_ID == 'appre') { ?>
								<img src="http://ussfoundation.org/img/friends_banner.jpg" alt="" style="width:940px;">
							<?php } else if ($PAGE_ID == 'contact') { ?>
								<img src="http://ussfoundation.org/img/contact/contact_banner.jpg" alt="" style="width:940px;">
							<?php } else if ($PAGE_ID == 'donate') { ?>
								<img src="http://ussfoundation.org/img/donate/donate_banner.png" alt="" style="width:940px;">
							<?php } else if ($PAGE_ID == 'donate-lowes') { ?>
								<img src="http://ussfoundation.org/img/header.png" alt="" style="width:940px;">
							<?php } else if ($PAGE_ID == 'program') { ?>
								<img src="http://ussfoundation.org/img/programs/programs_banner.jpg" alt="" style="width:940px;">
							<?php } else if ($PAGE_ID == "news") {?>
								<img src="http://ussfoundation.org/img/news/uss_foundation_news_banner.jpg" alt="" style="width:940px;">
							<?php } else if ($PAGE_ID == "golfcharity") {?>
								<img src="http://ussfoundation.org/img/golfcharity/2014/golf2014-banner.jpg" alt="" style="width:940px;">
							<?php } else if ($PAGE_ID == "coolzone") {?>
								<img src="http://ussfoundation.org/img/coolzone/banner.jpg" alt="" style="width:940px;">
							<?php } else if ($PAGE_ID == "gallery") {?>
								<img src="http://ussfoundation.org/img/gallery/gallery_banner.jpg" alt="" style="width:940px;">
							<?php } else if ($PAGE_ID == "adel") {?>
								<img src="http://ussfoundation.org/img/adel/about_Adel_banner.jpg" alt="" style="width:940px;">
							<?php } else if ($PAGE_ID == "video") {?>
								<img src="http://ussfoundation.org/img/landing/video_banner.png" alt="" style="width:940px;">
							<?php } else if ($PAGE_ID == "raisingthewalls-2013") {?>
								<img src="http://ussfoundation.org/img/landing/raisingthewalls.jpg" alt="" style="width:940px;">
							<?php } else if ($PAGE_ID == "golf-sponsorship") {?>
								<img src="http://www.ussfoundation.org/img/landing/CharityGolfHeader.jpg" alt="USS Foundation Charity Golf Tournament" style="width:940px;">
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
