<?php
	
	$connect=mysqli_connect("localhost","root","","techknights");
	$mailerr=$mailb=$messerr=$nameerr=$numberr=$brancherr=$mailerr=$rollerr=$cityerr="";

	if (isset($_POST['submit'])) {
		
		if (empty($_POST['name'])) {
			$nameerr='Fill all the fields';
		}
		elseif (empty($_POST['email'])) {
			$mailerr="Fill all the fields";
		}
		elseif (empty($_POST['numb'])) {
			$numberr="Fill all the fields";
		}
		elseif (empty($_POST['branch'])) {
			$brancherr="Fill all the fields";
		}
		elseif (empty($_POST['email'])) {
			$mailerr="Fill all the fields";
		}
		elseif (empty($_POST['roll'])) {
			$rollerr="Fill all the fields";
		}
		elseif (empty($_POST['city'])) {
			$cityerr="Fill all the fields";
		}
		elseif (empty($_POST['message'])) {
			$messerr="Fill all the fields";
		}
		elseif (isset($_POST['submit'])) {
		$sel="select * from register where email='".$_POST['email']."'";
		$exe=mysqli_query($connect,$sel);
		$tot=mysqli_num_rows($exe); //count no. of rows

		if ($tot==0) {
			$ins="insert into register set name='".$_POST['name']."', email='".$_POST['email']."', contactno='".$_POST['numb']."', branch='".$_POST['branch']."', rollno='".$_POST['roll']."', city='".$_POST['city']."', why='".$_POST['message']."'";
			mysqli_query($connect,$ins);
		}
		else{
			$mailb="E-mail is Already Registered";
			mysqli_query($connect,$mailb);
		}
		}
	}

?>


<!DOCTYPE HTML>

<html>
	<head>
		<title>Rajistration :Techknights</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		
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
								<header id="header">
									<a href="index.html" class="logo"><img src="images/Asset 1.png" width="230" height="120" style=""></a>
									<ul class="icons" style="padding-top: 40px;">
										<li style="font-size: 20px;"><a href="login.php">Login</a></li>
										<li><a href="https://twitter.com/login" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
									</ul>
								</header>

							<!-- Banner -->
									<div style= "background-color:#FAF7F7" ><h1 style=" margin-top: 30px;" align="center">REGISTER TO COMMUNITY</h1></div>
									<p style="font-size:20px;"> Please write us with your questions or comments</p>
									<hr/>


								<section>
									<header class="major">
										<h2>Please Fill The Form</h2>
									</header>
									<form style="font-size: 20px;" method="post">
										
										Name:-<span style="color: red;">*<?php echo $nameerr ?></span><input type="text" name="name"></br></br>

										E-mail:-<span style="color: red;">*<?php echo $mailerr ?></span><input type="email" name="email"></br></br>
										
										Contact Number:-<span style="color: red;">*<?php echo $numberr ?></span></br><input type="text" name="numb"></br></br>
										
										Branch:-<span style="color: red;">*<?php echo $brancherr ?></span><input type="text" name="branch"></br></br>
										
										College Roll Number:-<span style="color: red;">*<?php echo $rollerr ?></span><input type="text" name="roll"></br></br>
										
										City:-<span style="color: red;">*<?php echo $cityerr ?></span><input type="text" name="city"></br></br>
										
										Why you want to join techknights?<span style="color: red;">*<?php echo $messerr ?></span><textarea name="message"></textarea></br></br></br>
										<span style="color: red;"><?php echo $mailb ?></span>
										<input type="submit" name="submit" value="Send">
										
										<input type="reset" name="reset" value="Reset" style="margin-left: 100px;">

									</form>
									
								</section>
								<section>
                					<div><h4 class "content" style=" margin-top: 20px;" align="center">
                					<em> HOME | ABOUT US | EVENTS | TECH-LIBRARY | BLOGS | COMMUNITY | CONTACT US | TALK-TO-SAKSHAM | STUDENT PODCAST </em></h4></div>
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
										<li><a href="elements.php" >Blogs</a></li>
										<li><a href="community.php" >Community</a></li>
										<li><a href="contact.php" >Contact Us</a></li>
										<li><a href="register.php" >Register to the community</a></li>
										<li><a href="talk.php" > Talk-To-Saksham</a></li>
										<li><a href="podcast.php" > Student Podcast</a></li>
									</ul>
								</nav>

							
								<section>
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

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Copyright 2019 Techknights | Powered by Techknights</p>
								</footer>

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