<?php
	$PAGE_ID = 'index';
	$PAGE_TITLE = 'Welcome to USS Foundation - Dedicated to helping the impoverished, vulnerable children of the world';
	require('_header.php');
?>
<style>
	#golf-gallery2 {
		background: url('http://www.ussfoundation.org/img/adoptabike/uss_foundation_adopt_bike_icon-purple.jpg') no-repeat #8757af bottom;
		width: 124px;
		height: 395px;
	}
	#bottomdonate {
		text-decoration: none;
		color: #fff;
		font: 30px/100% arial,sans-serif;
		letter-spacing: 1px;
		text-transform: uppercase;
	}
	#DonateButtononBottom {
		background:#8757AF;
		height: 50px;
		position: relative;
	}
	#DonateButtononBottom p {
		text-decoration: none;
		color: #fff;
		font: 30px/100% arial,sans-serif;
		letter-spacing: 1px;
		text-transform: uppercase;
		}
	#PlatGirl {
		background:url(img/adoptabike/adopt/PlatLittleGirl.jpg) no-repeat;
		width: 620px;
		height: 450px;
	}
	#donatebox {
		background:url(img/adoptabike/adopt/button1.png) no-repeat;
		width: 190px;
		height: 37px;
		position: relative;
		top: 175px;
		left: 30px;
	}
	#donatebox:hover {
		background:url(img/adoptabike/adopt/button2.png) no-repeat 0 1px;
		width: 190px;
		height: 37px;
		position: relative;
		top: 175px;
		left: 30px;
	}
	.footer {margin-bottom: 65px;}
	.floating {
		width: 940px;
		height: 65px;
		position: fixed;
		bottom: 0;
		left: 50%;
		z-index: 100;
		margin-left: -470px;
		background: #8757af;
		-webkit-box-shadow: 0px 5px 30px rgba(0, 0, 0, 0.52);
		-moz-box-shadow: 0px 5px 30px rgba(0, 0, 0, 0.52);
		box-shadow: 0px 5px 30px rgba(0, 0, 0, 0.52);
	}
		.floating a {
			text-decoration: none;
			color: #fff;
			font: 40px/100% arial,sans-serif;
			letter-spacing: 1px;
			text-transform: uppercase;
	}
	#centered {
		width: 650px;
		height: 40px;
		margin: auto;
		position: absolute;
		top: 0;
		right: 0;
		left: 0;
		bottom: 0;
	}
	#golf-promo {
    width: 350px;
    display: block;
    margin: 0 auto;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
  }
</style>
<div class="container_12">
	<div class="firsthomecontent">
    <div class="grid_6">
      <img src="http://www.ussfoundation.org//img/adel/adelandkids.jpg" alt="Adel and Kids" style="width: 150px;">
      <img src="http://ussfoundation.org/img/title.jpg" alt="Welcome to the USS Foundation" style="width: 300px;">
      <p style="margin: 15px 0;"><b>The USS Foundation</b> is a non-profit organization dedicated to helping underprivileged children realize their dreams through practical projects that meet critical needs. We break the cycle of poverty by giving hope and inspiration for a brighter tomorrow.</p>
      <a href="letters.php">Read what the kids are saying about us!</a>
    </div>
    <div class="grid_6">
      <iframe width="460" height="260" src="//www.youtube.com/embed/_raxN0XB2NU" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="grid_12">
      <div class="shadow2"></div>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="secondhomecontent">
		<div class="programs">
			<div id="green-text"></div>
			<div class="grid_12">
				<div class="foundation-programs">
					<a href="adoptabike.php"><div id="adoptabike-icon"></div></a>
					<a href="golf.php"><div id="golf-icon"></div></a>
					<a href="thanksgiving.php"><div id="thanks-icon"></div></a>
					<a href="feedthehomeless.php"><div id="homeless-icon"></div></a>
					<a href="casacolina.php"><div id="casa-icon"></div></a>
				</div>
				<div class="shadow"></div>
			</div>
		</div>
		<img src="http://www.ussfoundation.org//img/landing/adopt_a_bike_tour.jpg" alt="" style="margin-left: 10px;">
		<div class="grid_11" style="padding:0 40px;">
			<div class="indexgalleryIcon">
				<a href="gallery.php">
					<div id="golf-gallery2"></div>
					<p style="text-align: center;">View More</p>
				</a>
			</div>
			<div id="wowslider-container1" style="float: left;margin-bottom: 25px;">
				<div class="ws_images">
					<ul>
						<li>
							<img src="http://ussfoundation.org/img/adoptabike/adopt/DSC_0004.jpg" id="wows1_0">
						</li>
						<li>
							<img src="http://ussfoundation.org/img/adoptabike/adopt/DSC_0355.jpg"  id="wows1_1">
						</li>
						<li>
							<img src="http://ussfoundation.org/img/adoptabike/adopt/DSC_0344.jpg">
						</li>
						<li>
							<img src="http://ussfoundation.org/img/adoptabike/adopt/DSC_0373.jpg">
						</li>
						<li>
							<img src="http://ussfoundation.org/img/adoptabike/adopt/DSC_0309.jpg">
						</li>
					</ul>
				</div>
				<div class="ws_thumbs">
					<div>
						<a href="#" title="nichole_brandon_banner">
							<img src="http://ussfoundation.org/img/adoptabike/adopt/DSC_0004.jpg" style="width: 64px;height: 48px;">
						</a>
						<a href="#" title="uss_foundation_about_banner">
							<img src="http://ussfoundation.org/img/adoptabike/adopt/DSC_0355.jpg" style="width: 64px;height: 48px;">
						</a>
						<a href="#">
							<img src="http://ussfoundation.org/img/adoptabike/adopt/DSC_0344.jpg" style="width: 64px;height: 48px;">
						</a>
						<a href="#">
							<img src="http://ussfoundation.org/img/adoptabike/adopt/DSC_0373.jpg" style="width: 64px;height: 48px;">
						</a>
						<a href="#">
							<img src="http://ussfoundation.org/img/adoptabike/adopt/DSC_0294.jpg" style="width: 64px;height: 48px;">
						</a>
						<a href="#">
							<img src="http://ussfoundation.org/img/adoptabike/adopt/DSC_0309.jpg" style="width: 64px;height: 48px;">
						</a>
					</div>
				</div>
			</div>
				<!-- <div class="ws_shadow"></div> -->
		</div>
	</div>
	<div class="floating">
		<div id="centered">
			<a href="donate.php">Click here to <b>Donate Now!</b></a>
		</div>
	</div>
</div>

<?php require('_footer.php'); ?>
