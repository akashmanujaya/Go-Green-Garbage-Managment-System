<?php
	include '../locations_model.php';
?>
<!DOCTYPE html>

<html class="no-js">


<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="animations.css">
	<link rel="stylesheet" href="fonts.css">
	<link rel="stylesheet" href="main.css" class="color-switcher-link">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	



	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


	

	<!-- Add smooth Srolling to the hash codes-->
	<script>
		$(document).ready(function(){
  		// Add smooth scrolling to all links
  		$("a").on('click', function(event) {

	    // Make sure this.hash has a value before overriding default behavior
	    if (this.hash !== "") {
	      // Prevent default anchor click behavior
	      event.preventDefault();

	      // Store hash
	      var hash = this.hash;

	      // Using jQuery's animate() method to add smooth page scroll
	      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
	      $('html, body').animate({
	        scrollTop: $(hash).offset().top
	      }, 800, function(){
	   
	        // Add hash (#) to URL when done scrolling (default click behavior)
	        window.location.hash = hash;
	      });
	    } // End if
	  });
	});
	</script>

	




</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<!-- search modal -->
	

	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls with_padding">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->

		</div>
	</div>
	<!-- eof .modal -->

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->

			
				<header class="page_header header_white toggler_xs_right section_padding_20" style="position:fixed; ">
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

							<div class="header_mainmenu display_table_cell " style="margin-left: 50px;width:950px; margin:0 auto;">
								<!-- main nav start -->
								<nav class="mainmenu_wrapper">
									<ul class="mainmenu nav sf-menu">
										<li class="active">
											<a href="index.php">Home</a>
										</li>

										<li>
											<a href="#divmap">Garbage Map</a>
										</li>
											
														

										<li>
											<a href="">Add Locations</a>
											
										</li>
										<!-- eof features -->


										<!-- gallery -->
										<li>
											<a href="">Gallery</a>
										</li>

										<!-- contacts -->
										<li>
											<a href="#contactUs">Contact Us</a>
										</li>
										<li>
											<a href="">Login</a>
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
									<a href="#" target="_"><i class="fa fa-twitter" aria-hidden="true" style="font-size:25px;"></i><span>&nbsp&nbsp</span></a>
									<a href="#" ctarget="_"><i class="fa fa-google" aria-hidden="true" style="font-size:25px;"></i><span>&nbsp&nbsp</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!--Add new garbage locartion button Div-->
				<section  style=" margin: 120px auto 0;">
				<div class="container-fluid" style="background: #00000">
					<div class="row">
						<div class="col-md-9 col-sm-8 text-center text-sm-left">
							<a href="captainLogin/signup.php" class="theme_button color4 margin_0">Add new Green Captain</a>
							<br>
							<br>
							<a href="collectingmemberLogin/signup.php" class="theme_button color4 margin_0">Add new Collecting Member</a>


						</div>
						<div class="col-md-3 col-sm-4 text-center text-sm-right">
							<a href="user-map.php" class="theme_button color2 margin_0">Add Garbage Location</a>
							<br><br>
							<a href="deleteLocations/captainmap.php" class="theme_button color2 margin_0">Delete Locations</a>

						</div>
					</div>
				</div>
			</section>


			<section id="Locations">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="section_header">
								Garbage Locations
							</h2>
						</div>
					</div>
					<div class ="splitColumn" id="map" >

							 <script
							  src="https://code.jquery.com/jquery-3.3.1.min.js"
							  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
							  crossorigin="anonymous"></script>
   							<!--Apply API key for Google Map-->
    						<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?language=en&key=AIzaSyCbNfrYitHIsUd-UOQmRw0cDs7Y76vswv4">
    						</script> -->

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

   							<!--Apply API key for Google Map-->
    						<script async defer
    							src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-AB-9XZd-iQby-bNLYPFyb0pR2Qw3orw&callback=initMap">
    						</script>

    					</div>
    					<div class="splitColumn" id="locs" style="background-color:white; overflow-x: scroll; height: 400PX;">
					<
				</div>
			</section>

			<div class="row columns_margin_top_20">
				<div class="container">
					<div class="row">
					</div>
					
				</div>
				
			</div>

			<section id="Articles">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center ls ms section_padding_25">
							<h2 class="section_header" style="padding-top: 30px;">
								Articles
							</h2>
						</div>
					</div>
				</div>


			</section>
			<section  style=" margin: auto auto 0;">
				<div class="container-fluid" style="background: #00000">
					<div class="row">
						<div class="col-md-9 col-sm-8 text-center text-sm-left">
						</div>
						<div class="col-md-3 col-sm-4 text-center text-sm-right">
							<a href="" class="theme_button color2 margin_0">Add New Artical</a>
						</div>
					</div>
				</div>
			</section>
			<section>
				<div class="container">
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
									<p class="margin_0">
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
									<p class="margin_0">
							Users quickly replace their electronic devices with newer, faster &amp; stronger gadgets on the market.
						</p>
									<a href="blog-single-left.html" class="read-more"></a>
								</div>
							</article>
						</div>
						<div class="col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-0">
							<article class="vertical-item content-padding with_background text-center rounded overflow-hidden">
								<div class="item-media">
									<img src="images/article3.jpg" alt="">
								</div>
								<div class="item-content">
									<h4 class="entry-title">
										<a href="blog-single-left.html">Electronics &amp; Computer Resale</a>
									</h4>
									<p class="margin_0">
							Buyers are welcome to leave their best offer on available electronic products.
						</p>
									<a href="blog-single-left.html" class="read-more"></a>
								</div>
							</article>
						</div>
					</div>
				</div>
		
			</section>

		</div>
	</div>
</body>
</html>


