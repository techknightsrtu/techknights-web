<?php
	$connect=mysqli_connect("localhost","root","","techknights");

		if (isset($_POST['subscribe'])) {
			$sel="select * from newsletter where email='".$_POST['email']."'";
			$exe=mysqli_query($connect,$sel);
			$tot=mysqli_num_rows($exe);

			if($tot==0)
			{
				$ins="insert into newsletter set email='".$_POST['email']."'";
				mysqli_query($connect,$ins);
			}
		}




?>

<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Techknights</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script type="text/javascript">
			function showdiv(show) {
				var hide=document.getElementById('hide').value;
				if (hide==0) {
					document.getElementById('show').style.display="block";
					document.getElementById('hide').value=1;
				}
				if(hide==1){
					document.getElementById('show').style.display="none";
					document.getElementById('hide').value=0;
				}
			}
		</script>
		<style type="text/css">
			#show{
				display: none;
			}
			header a:link{
				 text-decoration: none;
			}
			.text_move{
				animation: myfirst 4s linear 0s infinite;
			}
			@keyframes myfirst{
				0%{top:0px; bottom: 0px; }
				25%{top:75px; bottom: 100px; }
				50%{top:150px; bottom: 0px; }
				75%{top:225px; bottom: 0px; }
				100%{top:300px; bottom: 0px; }
			}
		</style>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">
							
							
							
							<!-- Header-->
								<header id="header" style="margin-bottom: -30px;">								
									<ul class="icons" style="margin-top: -40px; ">
										<li style="float: left; margin-top: -45px; margin-left: 20px;"><a href="index.php" class="logo"><img src="images/Asset 1.png" width="230" height="120" style=""></a></li>										
									</ul>
								</header>
								
							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<h1>Hi, Programmers<br />
											</h1>
											<p>JOIN COMMUNITY OF TECH PEOPLE</p>
										</header>
										<p>We are doing lots of creative things together to explore the world around us. We are trying to solve real-life problems with the help of technology. We are working day and night to develop a coding culture in our college.<strong> What are you doing?</strong> Join our community and be a part of revolution happening around.</p><span id="show" ><p>We are building a better college community with the help of tech enthusiasts from the campus.</p></span>
										<ul class="actions">
											<li style="float: left;">
												<button onclick="showdiv()" value="0" id="hide">Learn More</button>

											</li>
											<li style="float: right;">
												<button><a href="register.php">Register</a></button>
											</li>
										</ul>
									</div>
									<div style="border: 2px solid black; width: 500px; height: 300px; background-image: url('images/Untitled design.png');  background-size: 100% 100%; background-repeat: no-repeat;">				
										<marquee direction="up" style="height: 300px; font-size: 22px; padding-left: 20px; color: black;"> 
											* Technovoice 2019-2020 is in execution.<br>
											* THAR-2K20 events (coming soon.....)
										</marquee>
									</div>
								</section>
								
							<!-- Section -->
							<section>
																<script src="js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
								    <script type="text/javascript">
								        jssor_1_slider_init = function() {

								            var jssor_1_SlideshowTransitions = [
								              {$Duration:500,$Delay:12,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2049,$Easing:$Jease$.$OutQuad},
								              {$Duration:500,$Delay:40,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$SlideOut:true,$Easing:$Jease$.$OutQuad},
								              {$Duration:1000,x:-0.2,$Delay:20,$Cols:16,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:260,$Easing:{$Left:$Jease$.$InOutExpo,$Opacity:$Jease$.$InOutQuad},$Opacity:2,$Outside:true,$Round:{$Top:0.5}},
								              {$Duration:1600,y:-1,$Delay:40,$Cols:24,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Easing:$Jease$.$OutJump,$Round:{$Top:1.5}},
								              {$Duration:1200,x:0.2,y:-0.1,$Delay:16,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Round:{$Left:1.3,$Top:2.5}},
								              {$Duration:1500,x:0.3,y:-0.3,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}},
								              {$Duration:1500,x:0.3,y:-0.3,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.1,0.9],$Top:[0.1,0.9]},$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}}
								            ];

								            var jssor_1_options = {
								              $AutoPlay: 1,
								              $SlideshowOptions: {
								                $Class: $JssorSlideshowRunner$,
								                $Transitions: jssor_1_SlideshowTransitions,
								                $TransitionsOrder: 1
								              },
								              $ArrowNavigatorOptions: {
								                $Class: $JssorArrowNavigator$
								              },
								              $BulletNavigatorOptions: {
								                $Class: $JssorBulletNavigator$
								              }
								            };

								            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

								            /*#region responsive code begin*/

								            var MAX_WIDTH = 980;

								            function ScaleSlider() {
								                var containerElement = jssor_1_slider.$Elmt.parentNode;
								                var containerWidth = containerElement.clientWidth;

								                if (containerWidth) {

								                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

								                    jssor_1_slider.$ScaleWidth(expectedWidth);
								                }
								                else {
								                    window.setTimeout(ScaleSlider, 30);
								                }
								            }

								            ScaleSlider();

								            $Jssor$.$AddEvent(window, "load", ScaleSlider);
								            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
								            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
								            /*#endregion responsive code end*/
								        };
								    </script>
								    <style>
								        /*jssor slider loading skin spin css*/
								        .jssorl-009-spin img {
								            animation-name: jssorl-009-spin;
								            animation-duration: 1.6s;
								            animation-iteration-count: infinite;
								            animation-timing-function: linear;
								        }

								        @keyframes jssorl-009-spin {
								            from { transform: rotate(0deg); }
								            to { transform: rotate(360deg); }
								        }

								        /*jssor slider bullet skin 053 css*/
								        .jssorb053 .i {position:absolute;cursor:pointer;}
								        .jssorb053 .i .b {fill:#fff;fill-opacity:0.5;}
								        .jssorb053 .i:hover .b {fill-opacity:.7;}
								        .jssorb053 .iav .b {fill-opacity: 1;}
								        .jssorb053 .i.idn {opacity:.3;}

								        /*jssor slider arrow skin 093 css*/
								        .jssora093 {display:block;position:absolute;cursor:pointer;}
								        .jssora093 .c {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
								        .jssora093 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
								        .jssora093:hover {opacity:.8;}
								        .jssora093.jssora093dn {opacity:.6;}
								        .jssora093.jssora093ds {opacity:.3;pointer-events:none;}
								    </style>
								    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
								        <!-- Loading Screen -->
								        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
								            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
								        </div>
								        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
								            <div>
								                <img data-u="image" src="img/banner[314].png" />
								            </div>
								            <div>
								                <img data-u="image" src="img/20190805144513_IMG_8577.JPG" />
								            </div>
								            <div>
								                <img data-u="image" src="img/IMG_1132.JPG" />
								            </div>
								            <div>
								                <img data-u="image" src="img/IMG_20190804_182530.jpg" />
								            </div>
								            <div>
								                <img data-u="image" src="img/20190805145504_IMG_8588.JPG" />
								            </div>
								            <div>
								                <img data-u="image" src="img/IMG_7785.JPG" />
								            </div>
								        </div>
								        <!-- Bullet Navigator -->
								        <div data-u="navigator" class="jssorb053" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
								            <div data-u="prototype" class="i" style="width:16px;height:16px;">
								                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
								                    <path class="b" d="M11400,13800H4600c-1320,0-2400-1080-2400-2400V4600c0-1320,1080-2400,2400-2400h6800 c1320,0,2400,1080,2400,2400v6800C13800,12720,12720,13800,11400,13800z"></path>
								                </svg>
								            </div>
								        </div>
								        <!-- Arrow Navigator -->
								        <div data-u="arrowleft" class="jssora093" style="width:50px;height:50px;top:0px;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
								            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
								                <circle class="c" cx="8000" cy="8000" r="5920"></circle>
								                <polyline class="a" points="7777.8,6080 5857.8,8000 7777.8,9920 "></polyline>
								                <line class="a" x1="10142.2" y1="8000" x2="5857.8" y2="8000"></line>
								            </svg>
								        </div>
								        <div data-u="arrowright" class="jssora093" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
								            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
								                <circle class="c" cx="8000" cy="8000" r="5920"></circle>
								                <polyline class="a" points="8222.2,6080 10142.2,8000 8222.2,9920 "></polyline>
								                <line class="a" x1="5857.8" y1="8000" x2="10142.2" y2="8000"></line>
								            </svg>
								        </div>
								    </div>
								    <script type="text/javascript">jssor_1_slider_init();</script>
								</section>
								    <!-- #endregion Jssor Slider End -->

							<!-- Section -->
								<section style="margin: auto; max-width: 1200px;">
									<header class="major">
										<h2>SUBSCRIBE TO OUR NEWSLETTER</h2>
									</header>
									<div class="posts">
										<article>
											Subscribe to our Newsletter and we promise you to send every single update regarding our club activities directly into your inbox
										</article>
										<article>
											<form method="post">
											<input type="text" name="email" placeholder="Email Address"><ul class="actions">
											<li>
												</br><input type="submit" name="subscribe" value="Subscribe">

											</li>
											</ul>
									</form>
										</article>
									</div>

								</section>
								<section style="background-image: url(images/team-3373638_1920.jpg); background-repeat: no-repeat; width: 1000px; height: 550px; background-size: cover; margin: auto;max-width: 1200px; margin-bottom: 20px;">
									
									<article>
										<ul class="actions">
											<li>
												<button style="margin-left: 420px; margin-top: 200px; width: 250px; background-color: #F5C0FB;"><strong><a href="register.php"> REGISTER TO THE COMMUNITY </a></strong></button>

											</li>
										</ul>
									</article>
								</section>
								<section>
								<div style="margin-top: -50px; font-size: 22px;">
									<p align="center"><a style="margin-right: 30px;" href="https://twitter.com/techknightsrtu" class="icon brands fa-twitter"><span class="label">Twitter</span></a><a style="margin-right: 30px;" href="https://facebook.com/techknights" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a><a style="margin-right: 30px;" href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a><a style="margin-right: 30px;" href="#" class="icon brands fa-github"><span class="label">GitHub</span></a><a style="margin-right: 30px;" href="https://linkedin.com/company/techknightsrtu" class="icon brands fa-linkedin"><span class="label">Linkedin</span></a><a href="https://youtube.com/techknightsprogrammingclubrtu" class="icon brands fa-youtube"><span class="label">Youtube</span></a></p>
								</div>
																	
                					<footer id="footer">               						
									<p style="float: left;" class="copyright">&copy; Made with LOVE Techknights | Powered by Techknights</p>
									<p style="float: right;" class="copyright">Designed and Developed by Sunny and Pradhumn</p>
								</footer>
           						 </section>
						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="index.php" >Home</a></li>
										<li><a href="about.php" >About Us</a></li>
										<li><a href="events.php" >Events</a></li>
										<li><a href="learning.php" >Tech-Library</a></li>
										<li><a href="blogs.php" >Blogs</a></li>
										<li><a href="community.php" >Community</a></li>
										<li><a href="contact.php" >Contact Us</a></li>
										<li><a href="register.php" >Register to the community</a></li>
										<li><a href="talk.php" > Talk-To-Saksham</a></li>
										<li><a href="podcast.php" > Student Podcast</a></li>
									</ul>
								</nav>

							
								<!--<section>
									<header class="major">
										<h2>Get in touch</h2>
									</header>
									<p><strong> We would love to hear from you</strong></br>
									Please write us with your questions or comments</p>
									<ul class="contact">
										<li class="icon solid fa-envelope">techknightsrtu@gmail.com</li>
										<li class="icon solid fa-phone">(000) 000-0000</li>
										<li class="icon solid fa-home">University Departments, Rajasthan Technical University, Rawatbhata Road, Kota (Rajasthan)</li>
									</ul>
								</section>

							
								-->

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>