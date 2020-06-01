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
		<title>Contact :Techknights</title>
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

							<!-- Header -->
								<header id="header" style="margin-bottom: -30px;">								
									<ul class="icons" style="margin-top: -40px; ">
										<li style="float: left; margin-top: -45px; margin-left: 20px;"><a href="index.php" class="logo"><img src="images/Asset 1.png" width="230" height="120" style=""></a></li>										
									</ul>
								</header>

							<!-- Banner -->
							<div style= "background-color:#FAF7F7" ><h1 style=" margin-top: 30px;" align="center">CONTACT US</h1></div>
								<section id="banner" style="margin-top: -50px;">
									
									<div class="content">
										<header>
											<h2><strong style="margin-left: 130px;">We would love to hear you</strong></h2>
										</header>
										<p align="center" style="font-size: 17px;"><h3 style="text-align: center; color: #ee0979;">Address</h3><br><span style="margin-left: 75px; text-align: justify-all;">University Departments, Rajasthan Technical University,<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rawatbhata Road, Kota (Rajasthan)</span></p><p style="text-align: center;">Postal Code – 32010</p><p><h3 style="text-align: center; color: #ee0979;">Contact</h3></p><p style="text-align: center;">
										techknightsrtu@gmail.com</p>
										
									</div>
									<div class="content">
										<header>
											<h2><strong style="margin-left: 130px;">Subscribe to our newsletter</strong></h2>
										</header><br>
										<p style="padding-left: 30px; text-align: center;">Subscribe to our Newsletter and we promise you to send<br> every single update regarding our club activities <br>directly into your inbox</p>
										<form method="post">
											<p><input type="email" value="" name="email" class="email" id="mce-EMAIL" placeholder="email address" required="" ><br>
											<span style="margin-left: 200px;">	<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></span></p>
										</form>
									</div>
								</section>
								
							
								<section>
                					<div style="margin-top: -50px; font-size: 22px;">
									<p align="center"><a style="margin-right: 30px;" href="https://twitter.com/techknightsrtu" class="icon brands fa-twitter"><span class="label">Twitter</span></a><a style="margin-right: 30px;" href="https://facebook.com/techknights" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a><a style="margin-right: 30px;" href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a><a style="margin-right: 30px;" href="#" class="icon brands fa-github"><span class="label">GitHub</span></a><a style="margin-right: 30px;" href="https://linkedin.com/company/techknightsrtu" class="icon brands fa-linkedin"><span class="label">Linkedin</span></a><a href="https://youtube.com/techknightsprogrammingclubrtu" class="icon brands fa-youtube"><span class="label">Youtube</span></a></p>
								</div>
								<section>									
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