
<?php
	include '../locations_model.php';
?>

<!DOCTYPE html>

<html class="no-js">


<head>
	<title>GoGreen.com</title>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="animations.css">
	<link rel="stylesheet" href="fonts.css">
	<link rel="stylesheet" href="main.css" type="text/css" class="color-switcher-link">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>



	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


	

	<!-- Add smooth Srolling to the hash codes-->
	<script>
		$(document).on('click', 'a[href^="#"][href*=to]', function (event) {
    		event.preventDefault();

	    	$('html, body').animate({
	        		scrollTop: $($.attr(this, 'href')).offset().top}, 1000);
		});
	</script>

	




</head>

<body>
	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->
			
				<header class="page_header header_white toggler_xs_right section_padding_20" style="position:fixed;z-index: 9999">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12 display_table">
							<div class="header_left_logo display_table_cell">
								<div class="logo top_logo">
									<img src="logo.png" alt="">
									<span class="logo_text">
										<span class="big">GoGreen</span>
										<span class="small-text">.com</span>
									</span>
								</div>
							</div>

							<div class="header_mainmenu display_table_cell text-center" style="width: 930px;margin: 0 auto;">
								<!-- main nav start -->
								<nav class="mainmenu_wrapper">
									<ul class="mainmenu nav sf-menu">
										<li class="active">
											<a href="index.php">Home</a>
										</li>

										<li>
											<a href="#todivmap">Garbage Map</a>
										</li>
											
														

										<li>
											<a href="">Add Locations</a>
											
										</li>
									

										<!-- gallery -->
										<li>
											<a href="">Gallery</a>
										</li>
											
		
										<!-- contacts -->
										<li>
											<a href="#tocontactUs">Contact Us</a>
										</li>
										<li>
											<a href="#">Login</a>
											<ul>
												<li>
													<a href="gtfmemberLogin/login.php">Login As GTF Member</a>
												</li>
												<li>
													<a href="captainLogin/login.php">Login As Green Captain</a>
												</li>
												<li>
													<a href="adminLogin/login.php">Login As Admin</a>
												</li>
												<li>
													<a href="collectingmemberLogin/login.php">Login As Collecting Member</a>
												</li>
											</ul>
										</li>
										<!-- eof contacts -->
									</ul>
								</nav>
								<!-- eof main nav -->


								<!-- header toggler -->
								<span class="toggle_menu">
									<span></span>
								</span>
							</div>

							<div class="header_right_buttons display_table_cell text-right hidden-xs">
								<div class="darklinks" style="padding-right: 10px">
									<a href="#" target="_"><i class="fa fa-facebook" aria-hidden="true" style="font-size:25px;"></i></a><span>&nbsp&nbsp</span>
									<a href="#" target="_"><i class="fa fa-twitter" aria-hidden="true" style="font-size:25px;"></i></a><span>&nbsp&nbsp</span>
									<a href="#" ctarget="_"><i class="fa fa-google" aria-hidden="true" style="font-size:25px;"></i></a><span>&nbsp&nbsp</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			
			<section class="ds section_padding_top_15 section_padding_bottom_15 table_section section_bottom_overlap" style=" margin: 120px auto 0;">
				<div class="container-fluid" style="background: #00000">
					<div class="row">
						<div class="col-md-9 col-sm-8 text-center text-sm-left">
							<div class="media small-teaser teaser inline-block">
								<div class="media-left media-middle">
									<div class="teaser_icon light_bg_color big_bg highlight2 round size_xsmall">
										<i class="fa fa-phone"></i>
									</div>
								</div>
								<div class="media-body media-middle">
									<span class="fontsize_20 medium grey">HotLine</span>
									<br>
									<span class="small-text medium grey">+94 77 4630 527</span>
								</div>
							</div>

						</div>
						<div class="col-md-3 col-sm-4 text-center text-sm-right">
							<a href="gtfmemberLogin/signup.php" class="theme_button color2 margin_0">Register</a>
						</div>
					</div>
				</div>
			</section>

			<section class="intro_section page_mainslider ds">
				<div class="flexslider" data-dots="true">
					<ul class="slides">

						<li>
							<img src="images/slide01.jpg" alt="">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer" data-animation="fadeInRight">
													<h2>
														Recycling
													</h2>
												</div>
												<div class="intro-layer" data-animation="fadeInRight">
													<p class="medium grey">We can solve your corporate IT disposition needs quickly and professionally.<br> Save Your community, Save Your planet</p>
													<a href="gallery-extended-2-cols.html" class="theme_button color1">About us</a>
												</div>
											</div>
											<!-- eof .slide_description -->
										</div>
										<!-- eof .slide_description_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>

						<li>
							<img src="images/slide01.jpg" alt="">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer" data-animation="fadeInRight">
													<h2 class="small">
														Save Your Planet
													</h2>
												</div>
												<div class="intro-layer" data-animation="fadeInRight">
													<h3 class="highlight text-uppercase bottommargin">
														Save Your community
													</h3>
												</div>
												<div class="intro-layer" data-animation="fadeInRight">
													<p>We can solve your corporate IT disposition needs quickly and professionally.<br> Save Your community, Save Your planet</p>
													<a href="gallery-extended-2-cols.html" class="theme_button color1">Our services</a>
												</div>
											</div>
											<!-- eof .slide_description -->
										</div>
										<!-- eof .slide_description_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>

						<li>
							<img src="images/slide01.jpg" alt="">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer" data-animation="fadeInRight">
													<h3 class="highlight text-uppercase">
														Circular
													</h3>
												</div>
												<div class="intro-layer" data-animation="fadeInRight">
													<h2 class="text-uppercase">
														Economy
													</h2>
												</div>
												<div class="intro-layer" data-animation="fadeInRight">
													<p>We can solve your corporate IT disposition needs quickly and professionally.<br> Save Your community, Save Your planet</p>
													<a href="gallery-extended-2-cols.html" class="theme_button color1">contact us</a>
												</div>
											</div>
											<!-- eof .slide_description -->
										</div>
										<!-- eof .slide_description_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>

					</ul>
				</div>
				<!-- eof flexslider -->

				<div class="scroll_button_wrap">
					<a href="#toabout" class="scroll_button">
						<span class="sr-only">scroll down</span>
					</a>
				</div>
			</section>

			<section id="toabout" class="ls section_padding_top_100 section_padding_bottom_150">
				<div class="container" >
					<div class="row">
						<div class="col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2 text-center">
							<h2 class="section_header with_icon">
								Welcome to GoGreen.com
							</h2>
							<p class="small-text grey">More About Us</p>
							<p class="bottommargin_30 small-text">
								GoGreen.com is a Family-owned company located in Sri Lanka proudly serving individuals and businesses in Asia with their computers and electronics upgrade needs, accepting garbage in any conditions.
							</p>
						</div>
					</div>
					<div class="row topmargin_40 columns_margin_top_60">
						<div class="col-md-4">
							<div class="teaser with_border rounded text-center">
								<div class="teaser_icon main_bg_color2 round size_small offset_icon">
									<i class="fa fa-leaf" style="font-size:24px"></i>
								</div>
								<h4 class="poppins hover-color2">
									<a href="#">Corporate Services</a>
								</h4>
								<p class="small-text">
									Guaranteed that all of your universal waste management is performed safely and responsibly.
								</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="teaser with_border rounded text-center">
								<div class="teaser_icon main_bg_color3 round size_small offset_icon">
									<i class="fa fa-inbox" style="font-size:24px"></i>
								</div>
								<h4 class="poppins hover-color3">
									<a href="#">Convenient Pickup</a>
								</h4>
								<p class="small-text">
									We offer business pickup services to safely recycle your electronics in a safe manner.
								</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="teaser with_border rounded text-center">
								<div class="teaser_icon main_bg_color round size_small offset_icon">
									<i class="fa fa-calendar" style="font-size:24px"></i>
								</div>
								<h4 class="poppins">
									<a href="#">E-waste Events</a>
								</h4>
								<p class="small-text">
									We work with non-profits, businesses, and other organizations to host community e-waste events.
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!--div garbage map-->
			<div  id="todivmap" style="background-color:#ffff;width: 100%;height: 125px">
				<div class="teaser rounded text-center" style="font-size: 50px;">

					<h3 class="section_header"><u>GARBAGE MAP</u></h1>

				</div>

			</div>

			<section id="pickup" class="ds page_contact parallax section_padding_25" >
				<div class="container" >
					<div class="row" >

						<div class ="splitColumn" id="map" >

							 <script
							  src="https://code.jquery.com/jquery-3.3.1.min.js"
							  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
							  crossorigin="anonymous"></script>
   							<!--Apply API key for Google Map-->
    						<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?language=en&key=AIzaSyCbNfrYitHIsUd-UOQmRw0cDs7Y76vswv4">
    						</script>

							<!-- Add Google Map to the div-->
							<script>


								$(document).ready(function(){
								// $('#locs').append('<div>hello</div>');

						        /**
						         * Create new map
						         */
						        var infowindow;
						        var map;
						        var red_icon =  'http://maps.google.com/mapfiles/ms/icons/red-dot.png' ;
						        var purple_icon =  'http://maps.google.com/mapfiles/ms/icons/purple-dot.png' ;
						        var locations = <?php get_confirmed_locations() ?>;
						        var myOptions = {
						            zoom: 11,
						            center: new google.maps.LatLng(6.8602, 80.0535),
						            mapTypeId: 'roadmap'
						        };
						        map = new google.maps.Map(document.getElementById('map'), myOptions);

						        /**
						         * Global marker object that holds all markers.
						         * @type {Object.<string, google.maps.LatLng>}
						         */
						        var markers = {};

						        /**
						         * Concatenates given lat and lng with an underscore and returns it.
						         * This id will be used as a key of marker to cache the marker in markers object.
						         * @param {!number} lat Latitude.
						         * @param {!number} lng Longitude.
						         * @return {string} Concatenated marker id.
						         */
						        var getMarkerUniqueId= function(lat, lng) {
						            return lat + '_' + lng;
						        };

						        /**
						         * Creates an instance of google.maps.LatLng by given lat and lng values and returns it.
						         * This function can be useful for getting new coordinates quickly.
						         * @param {!number} lat Latitude.
						         * @param {!number} lng Longitude.
						         * @return {google.maps.LatLng} An instance of google.maps.LatLng object
						         */
						        var getLatLng = function(lat, lng) {
						            return new google.maps.LatLng(lat, lng);
						        };

						        /**
						         * loop through (Mysql) dynamic locations to add markers to map.
						         */
						        var i ; var confirmed = 0;
						        for (i = 0; i < locations.length; i++) {

						        	

						            marker = new google.maps.Marker({
						                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
						                map: map,
						                icon :   locations[i][5] === '1' ?  red_icon  : purple_icon,
						                html: "<div>\n" +
						                "<table class=\"map1\">\n" +
						                "<tr>\n" +
						                "<td><a>Description:</a></td>\n" +
						                "<td><textarea disabled id='manual_description' placeholder='Description'>"+locations[i][3]+"</textarea></td></tr>\n" +
						                 "<td><a>Image:</a></td>\n" +
						                "<td><img src="+'../'+locations[i][4]+" style='width: 250px; height: auto;'></td></tr>\n" +
						                "</table>\n" +
						                "</div>"
						            });

								           // ajax call get data from server and append to the div
								           $('#locs').append('\
						            		<div class="row">\
				    							<div class="col-md-12" id="'+ locations[i][0] +'" style="-webkit-box-shadow: 0 4px 6px -6px #222;-moz-box-shadow: 0 4px 6px -6px #222;box-shadow: 0 4px 6px -6px #222;margin:0;">\
					    							<div style="display: table-cell;">\
					    								<img src="../'+ locations[i][4] +'" style="width: 100px; height: auto; margin-bottom:20px;margin-top:20px">\
					    							</div>\
					    							<div style="display: table-cell; vertical-align: top; padding-left: 10px;padding-top:20px">\
														<div style="word-wrap: break-word;font-size:14px">'+locations[i][3]+'</div>\
													</div>\
				    							</div>\
				    						</div>\
						            	');
								    


						            


									
						            google.maps.event.addListener(marker, 'click', (function(marker, i) {
						                return function() {
						                    infowindow = new google.maps.InfoWindow();
						                    confirmed =  locations[i][4] === '1' ?  'checked'  :  0;
						                    $("#confirmed").prop(confirmed,locations[i][4]);
						                    $("#id").val(locations[i][0]);
						                    $("#description").val(locations[i][3]);
						                    $("#image").val(locations[i][4]);
						                    $("#form").show();
						                    infowindow.setContent(marker.html);
						                    infowindow.open(map, marker);

						                    
						                    //reseting highlight
						                    for (j = 0; j < locations.length; j++) {
				                    	 		$("#"+ locations[j][0]).css("background-color", "transparent");


						                    }

						                    $("#"+ locations[i][0]).css("background-color", "#ff0000");

					                    	 $('#locs').animate({
											        scrollTop: $("#" + locations[i][0]).offset().top
											    }, 2000);

						     //                $("#"+ locations[i][0]).click(function() {

											//   	var x = window.scrollX, y = window.scrollY;
											//   	elem.focus();
											//   	window.scrollTo(x, y);
											// });

						       
						                }
						            })(marker, i));
						        }
						        });

								// // Initialize and add the map
								// function initMap() {
  								// 			// The location of Uluru
  								// 			var uluru = {lat: -25.344, lng: 131.036};

  								// 			// The map, centered at Uluru
  								// 			var map = new google.maps.Map(
      							// 										document.getElementById('map'), {zoom: 1, center: uluru}
								// 				);

  								// 			// The marker, positioned at Uluru
  								// 			var marker = new google.maps.Marker({position: uluru, map: map});
								// }
   							</script>

    					</div>
    					<div class="splitColumn" id="locs" style="background-color:white; overflow-x: scroll; height: 400PX;">
    						
    					</div>
					</div>
				</div>
			</section>

			<section id="services" class="ls ms section_padding_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="section_header with_icon">
								Our Services
							</h2>
							<p class="small-text grey">What we do</p>
						</div>
					</div>
					<div class="row columns_margin_bottom_20">
						<div class="col-md-4 col-sm-6">
							<article class="vertical-item content-padding with_background text-center rounded overflow-hidden">
								<div class="item-media">
									<img src="images/service1.jpg" alt="">
								</div>
								<div class="item-content">
									<h4 class="entry-title">
										<a href="service-single.html">Hard Drive, Flash Drive &amp; SSD Destruction</a>
									</h4>
									<p class="margin_0 small-text">
										Clients can simply schedule their hard drive destruction online and through our website.
									</p>
									<a href="service-single.html" class="read-more"></a>
								</div>
							</article>
						</div>
						<div class="col-md-4 col-sm-6">
							<article class="vertical-item content-padding with_background text-center rounded overflow-hidden">
								<div class="item-media">
									<img src="images/service2.jpg" alt="">
								</div>
								<div class="item-content">
									<h4 class="entry-title">
										<a href="service-single.html">Electronic Waste Collection &amp; Recycling</a>
									</h4>
									<p class="margin_0 small-text">
										Users quickly replace their electronic devices with newer, faster &amp; stronger gadgets on the market.
									</p>
									<a href="service-single.html" class="read-more"></a>
								</div>
							</article>
						</div>
						<div class="col-md-4 col-sm-6">
							<article class="vertical-item content-padding with_background text-center rounded overflow-hidden">
								<div class="item-media">
									<img src="images/service3.jpg" alt="">
								</div>
								<div class="item-content">
									<h4 class="entry-title">
										<a href="service-single.html">Electronic Waste Collection &amp; Recycling</a>
									</h4>
									<p class="margin_0 small-text">
										Users quickly replace their electronic devices with newer, faster &amp; stronger gadgets on the market.
									</p>
									<a href="service-single.html" class="read-more"></a>
								</div>
							</article>
						</div>
					</div>
					<div class="row topmargin_30">
						<div class="col-sm-12 text-center">
							<a href="services.html" class="theme_button wide_button color1">All services</a>
						</div>
					</div>
				</div>
			</section>

			<section class="ls overflow_hidden half_section section_padding_top_100 section_padding_bottom_150 columns_padding_80">
				<div class="image_cover image_cover_left">

					<!-- you can put your image here instead of puting it in column-->
					<!-- <img src="img/parallax/half_image.jpg" alt=""> -->
				</div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6">
							<img src="images/ourMission.jpg" alt="">
						</div>
						<!-- .col-* -->
						<div class="col-md-6">

							<h2 class="section_header with_icon">
								Our Mission
							</h2>
							<p class="small-text grey">About us</p>

							<p class="small-text">
								Our mission is to keep as much electronic waste from ending up in local landfills as we can
							</p>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion1" href="#collapse1" class="collapsed">
												<i class="fa fa-envelope"></i>
												Reducing Waste
											</a>
										</h4>
									</div>
									<div id="collapse1" class="panel-collapse collapse">
										<div class="panel-body small-text">
											Stet clita kasd gubergren, no sea takimata sanctus est lorem ipsum dolor sit amet ipsum dolor sit amet, consetetur elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
										</div>
									</div>
								</div>

							
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion1" href="#collapse2" class="collapsed">
												<i class="fa fa-envelope"></i>
												Reduce program
											</a>
										</h4>
									</div>
									<div id="collapse2" class="panel-collapse collapse">
										<div class="panel-body small-text">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facere doloremque ut dolores laudantium nihil at, repudiandae est numquam fuga tempora totam sequi quidem saepe officiis sint beatae, magni fugit.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion1" href="#collapse3" class="collapsed">
												<i class="fa fa-envelope"></i>
												recycle more
											</a>
										</h4>
									</div>
									<div id="collapse3" class="panel-collapse collapse">
										<div class="panel-body small-text">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. At nobis omnis delectus, asperiores quo obcaecati et iste corporis necessitatibus tempora aspernatur doloribus. Ut deleniti commodi dicta distinctio sit enim quidem!
										</div>
									</div>
								</div>
							</div>

						</div>
						<!-- .col-* -->


					</div>
				</div>

			</section>

			<section id="faq" class="ls ms section_padding_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="section_header with_icon">
								FAQ
							</h2>
							<p class="small-text grey bottommargin_0">Frequently asked qaestions</p>
						</div>
					</div>
					<div class="row columns_margin_top_60">
						<div class="col-md-4">
							<div class="teaser with_background rounded text-center">
								<div class="teaser_icon main_bg_color2 round size_small offset_icon">
									<i class="fa fa-question" aria-hidden="true" style="font-size:24px"></i>
								</div>
								<h4 class="poppins">
									Consetetur sadipscing elitr, sed diam nonumy?
								</h4>
								<p class="small-text">
									Lorem ipsum dolamet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.
								</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="teaser with_background rounded text-center">
								<div class="teaser_icon main_bg_color3 round size_small offset_icon">
									<i class="fa fa-question" aria-hidden="true" style="font-size:24px"></i>
								</div>
								<h4 class="poppins">
									Eirmod tempor invidunt ut labore et?
								</h4>
								<p class="small-text">
									Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam.
								</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="teaser with_background rounded text-center">
								<div class="teaser_icon main_bg_color round size_small offset_icon">
									<i class="fa fa-question" aria-hidden="true" style="font-size:24px"></i>
								</div>
								<h4 class="poppins">
									Dolore magna aquyam erat, sed diam voluptua?
								</h4>
								<p class="small-text">
									Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
								</p>
							</div>
						</div>
					</div>
					<div class="row topmargin_30">
						<div class="col-sm-12 text-center">
							<a href="faq.html" class="theme_button color1 wide_button">to faq page</a>
						</div>
					</div>
				</div>
			</section>

			<section id="reviews" class="ls section_padding_100">
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-md-offset-1 text-center">
							<h2 class="section_header with_icon">
								Testimonials
							</h2>
							<p class="small-text grey">what clients say</p>

							<div class="owl-carousel" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-dots="true">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<blockquote class="with_quotes text-center">
											<img src="logo.png" alt="" /> I felt really comfortable and trust them. They have a lot of security measures in place. Pretty cheap for such great peace of mind!
											<div class="item-meta">
												<h4 class="poppins margin_0">Gregory Rondeau</h4>
												<p class="small-text">Director</p>
											</div>
										</blockquote>
									</div>

									<div class="carousel-item">

										<blockquote class="with_quotes text-center">
											<img src="logo.png" alt="" /> I felt really comfortable and trust them. They have a lot of security measures in place. Pretty cheap for such great peace of mind!
											<div class="item-meta">
												<h4 class="poppins margin_0">Lamar Owens</h4>
												<p class="small-text">CEO</p>
											</div>
										</blockquote>
									</div>

									<div class="carousel-item">
										<blockquote class="with_quotes text-center">
											<img src="logo.png" alt="" /> I felt really comfortable and trust them. They have a lot of security measures in place. Pretty cheap for such great peace of mind!
											<div class="item-meta">
												<h4 class="poppins margin_0">Robert Wade</h4>
												<p class="small-text">Designer</p>
											</div>
										</blockquote>
									</div>

								</div>

								
							</div>

						</div>
					</div>
				</div>
			</section>

			<section id="news" class="ls ms section_padding_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="section_header with_icon">
								Latest Articals
							</h2>
							<p class="small-text grey">Blog Posts</p>
						</div>
					</div>
					<div class="row columns_margin_bottom_20">
						<div class="col-md-4 col-sm-6">
							<article class="vertical-item content-padding with_background text-center rounded overflow-hidden">
								<div class="item-media">
									<img src="images/article1.jpg" alt="">
								</div>
								<div class="item-content">
									<h4 class="entry-title">
										<a href="blog-single-left.html">The importance of disposing electronic waste</a>
									</h4>
									<p class="margin_0 small-text">
										Clients can simply schedule their hard drive destruction online and through our website.
									</p>
									<a href="blog-single-left.html" class="read-more"></a>
								</div>
							</article>
						</div>
						<div class="col-md-4 col-sm-6">
							<article class="vertical-item content-padding with_background text-center rounded overflow-hidden">
								<div class="item-media">
									<img src="images/article2.jpg" alt="">
								</div>
								<div class="item-content">
									<h4 class="entry-title">
										<a href="blog-single-left.html">We pickup ewaste from businesses for free</a>
									</h4>
									<p class="margin_0 small-text">
										Users quickly replace their electronic devices with newer, faster &amp; stronger gadgets on the market.
									</p>
									<a href="blog-single-left.html" class="read-more"></a>
								</div>
							</article>
						</div>
						<div class="col-md-4 col-sm-6">
							<article class="vertical-item content-padding with_background text-center rounded overflow-hidden">
								<div class="item-media">
									<img src="images/article3.jpg" alt="">
								</div>
								<div class="item-content">
									<h4 class="entry-title">
										<a href="blog-single-left.html">We pickup ewaste from businesses for free</a>
									</h4>
									<p class="margin_0 small-text">
										Users quickly replace their electronic devices with newer, faster &amp; stronger gadgets on the market.
									</p>
									<a href="blog-single-left.html" class="read-more"></a>
								</div>
							</article>
						</div>
					</div>
					<div class="row topmargin_30">
						<div class="col-sm-12 text-center">
							<a href="blog-left.html" class="theme_button wide_button color1">Our blog</a>
						</div>
					</div>
				</div>
			</section>

			<footer class="page_footer ds section_padding_top_100 section_padding_bottom_65 columns_padding_25" id="tocontactUs">
				<div class="container">
					<div class="row">

						<div class="col-md-4 col-sm-12 text-center">
							<div class="widget">
								<a href="./" class="logo bg_logo bottommargin_25">
									<img src="logo.png" alt="">
									<span class="logo_text">
										<span class="big">GoGreen</span>
										<span class="small-text">.com</span>
									</span>
								</a>
								<p class="small-text">
									Family-owned company from San Diego proudly serving individuals and businesses in Southern California.
								</p>
								<div class="line-height-thin">
									<div class="media small-teaser inline-block margin_0">
										<div class="media-left media-middle">
											<i class="fa fa-map-marker highlight2" aria-hidden="true"></i>
										</div>
										<div class="media-body media-middle grey">
											140 Horizon Circle, San Diego, CA
										</div>
									</div>
									<br>
									<div class="media small-teaser inline-block margin_0">
										<div class="media-left media-middle">
											<i class="fa fa-phone highlight2" aria-hidden="true"></i>
										</div>
										<div class="media-body media-middle grey">
											01 123 456 789
										</div>
									</div>
									<br>
									<div class="media small-teaser inline-block margin_0">
										<div class="media-left media-middle">
											<i class="fa fa-map-marker highlight2" aria-hidden="true"></i>
										</div>
										<div class="media-body media-middle highlightlinks">
											<a href="#">gogreen@support.com</a>
										</div>
									</div>
								</div>

								<div class="darklinks topmargin_20">
									<a href="#" class="social-icon border-icon rounded-icon soc-facebook"></a>
									<a href="#" class="social-icon border-icon rounded-icon soc-twitter"></a>
									<a href="#" class="social-icon border-icon rounded-icon soc-google"></a>
								</div>
							</div>
						</div>

						<div class="col-md-4 col-sm-6 text-center">
							<div class="widget widget_contact topmargin_10">
								<h3>Contact Form</h3>
								<form class="contact-form topmargin_45" method="post" action="./">
									<p class="contact-form-name">
										<label for="footer-name">Name <span class="required">*</span></label>
										<input type="text" aria-required="true" size="30" value="" name="name" id="footer-name" class="form-control text-center" placeholder="Full Name">
									</p>
									<p class="contact-form-email">
										<label for="footer-email">Email <span class="required">*</span></label>
										<input type="email" aria-required="true" size="30" value="" name="email" id="footer-email" class="form-control text-center" placeholder="Email Address">
									</p>
									<p class="contact-form-message">
										<label for="footer-message">Message <span class="required">*</span></label>
										<textarea aria-required="true" rows="3" cols="45" name="message" id="footer-message" class="form-control text-center" placeholder="Message"></textarea>
									</p>
									<p class="footer_contact-form-submit topmargin_30">
										<button type="submit" id="footer_contact_form_submit" name="contact_submit" class="theme_button color1 wide_button">Send Message</button>
									</p>
								</form>
							</div>
						</div>

						<div class="col-md-4 col-sm-6 text-center">

							<div class="widget widget_recent_entries topmargin_10">

								<h3 class="widget-title">Recent News</h3>
								<ul class="greylinks">
									<li>
										<p class="margin_0">
								<a href="blog-single-right.html">
									At vero eos et accusam et justo duo dolores et ea rebum clita kasd
								</a>
							</p>
										<span class="entry-date highlight">
											<time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
												March 9, 2017
											</time>
										</span>
									</li>
									<li>
										<p class="margin_0">
								<a href="blog-single-right.html">
									Gubergren, no sea takimata sanctus est lorem ipsum dolor sit amet
								</a>
							</p>
										<span class="entry-date highlight">
											<time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
												March 9, 2017
											</time>
										</span>
									</li>
									<li>
										<p class="margin_0">
								<a href="blog-single-right.html">
									Lorem ipsum dolor sit amet, consetetur
								</a>
							</p>
										<span class="entry-date highlight">
											<time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
												March 9, 2017
											</time>
										</span>
									</li>

								</ul>
							</div>
						</div>

					</div>
				</div>
			</footer>

			<section class="ls page_copyright section_padding_15">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<p class="small-text small-spacing grey">&copy; Copyright 2018 All Rights Reserved</p>
						</div>
					</div>
				</div>
			</section>

		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->

	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<script src="js/switcher.js"></script>

	<a href="#top" id="toTop" style="display: block; display: none;">
		<span id="toTopHover" style="opacity: 0;"></span>
		"To Top"
	</a>

	<script>

		$(window).scroll(function() {
		    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
		        $('#toTop').fadeIn(200);    // Fade in the arrow
		    } else {
		        $('#toTop').fadeOut(200);   // Else fade out the arrow
		    }
		});

		$("a[href='#top']").click(function() {
		  $("html, body").animate({ scrollTop: 0 }, "slow");
		  return false;
		});
	</script>
</body>

</html>