
<?php
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Automation</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header >
        <a class="logo" href="/"><img src="images\l1.jpg" alt="logo" width="110dp" height="100dp"></a>
        <nav>
            <ul class="nav__links">
                <li><a href="services.php">Services</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </nav>
        <a class="cta" href="signup.php">SignUp</a>
    </header>

<!--login-->
<div class="full" id="full">
    <div class="container" id="container">
		<div class="form-container log-in-container">
			<form  method="post">
				<h1>Logins</h1>
				<div class="row">
                    <div class="column">
                      <img src="images\student.jpg" alt="Snow" style="width:100%">
                      <a class="ctabt" href="studentlogin.php" style="margin-top: 10px;">Student Login</a>
                    </div>
                    <div class="column">
                      <img src="images\faculty.jpg" alt="Forest" style="width:100%">
                      <a class="ctabt" href="facultylogin.php" style="margin-top: 100px;">Faculty Login</a>
                    </div>
                    <div class="column">
                      <img src="images\hod.jpg" alt="Mountains" style="width:100%">
                      <a class="ctabt" href="hodlogin.php" style="margin-top: 10px;">HOD Login</a>
                    </div>
                  </div>
				
			</form>
		</div>
	</div>


    
</div>


    <div class="main-wrap">
        <div class="footer-wrap">
            <div class="footer-wrap-1">
                <div class="footer-section">
                    <h1>About</h1>
                    <a href="services.php">Services</a>
                    <a href="#">Portfolio</a>
                </div>
                <div class="footer-section">
                    <h1>Resources</h1>
                    <a href="#">Pics</a>
                    <a href="#">Blog</a>
                </div>
                <div class="footer-section">
                    <h1>Contact</h1>
                    <a href="#">Help</a>
                    <a href="#">Advertise</a>
                </div>
            </div>
            <div class="footer-wrap-2">
                <center>
                    <div class="social-link">
                        <a href="#">
                            <img src="images/fb.png" alt="Facebook">
                        </a>
                        <a href="#">
                            <img src="images/google.png" alt="Google">
                        </a>
                        <a href="#">
                            <img src="images/linkedin.png" alt="linkedin">
                        </a>
                        <a href="#">
                            <img src="images/twitter.png" alt="twitter">
                        </a>
                    </div>
                </center>
            </div>
        </div>
    </div>
</body>

</html>
