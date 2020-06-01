<?php
    $conn=mysqli_connect("localhost","root","","techknights");
    $nameerr=$mailerr=$blogerr="";
    if (isset($_POST['submit']))
    {
        if (empty($_POST['name'])) {
            $nameerr='Fill your name';
        }
        elseif (empty($_POST['email'])) {
            $mailerr="Fill your mail address";
        }
        elseif (empty($_POST['blog'])) {
            $blogerr="You have not written the blog";
        }
        elseif(isset($_POST['submit']))
        {
            $ins="INSERT INTO blogs set name='".$_POST['name']."', email='".$_POST['email']."', blog='".$_POST['blog']."'";
            mysqli_query($conn,$ins);
        }
    }

?>
<!DOCTYPE HTML>

<html>
<head>
    <title>Blogs :Techknights</title>
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
            <header id="header" style="margin-bottom: -30px;">                
                  <ul class="icons" style="margin-top: -40px; ">
                    <li style="float: left; margin-top: -45px; margin-left: 20px;"><a href="index.php" class="logo"><img src="images/Asset 1.png" width="230" height="120" style=""></a></li>                   
                  </ul>
                </header>

            <!-- Banner -->
            <section id="banner">
                <div class="content">
                    <header>
                       <div style= "background-color:#FAF7F7" ><h1 style=" margin-top: -42px;" align="center">BLOGS</h1></div>
                    </header>
                    </p><p style="font-size: 20px;"> You can write to us and we will show your blogs on our page</p>

                </div>
            </section>
            <section>
                <header class="major">
                    <h2>Fill up your details</h2>
                </header>
                <div>
                    <form action="blog.php" method="post">
                       <strong> Name:-*</strong><span style="color: red;"><?php echo $nameerr;?></span> <input type="text" name="name" >
                        <strong>Email:-</strong><span style="color: red;"><?php echo $mailerr;?></span><input type="email" name="email"><br>
                        <strong>Write Here</strong><span style="color: red;"><?php echo $blogerr;?></span>
                        <textarea rows="15" name="blog"></textarea><br>
                        <button name="submit">Submit</button>
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