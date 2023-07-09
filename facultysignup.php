<?php ?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Faculty Signup</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header ><a class="logo" href="/"><img src="images\l1.jpg" alt="logo" width="110dp" height="100dp"></a>
        <nav>
            <ul class="nav__links">
                <li><a href="services.php">Services</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </nav>
        <a class="cta" href="home.php">Home</a>
    </header>


<div class="full" id="full">
    <div class="container2" id="container2">
		<div class="form-container log-in-container">
			<form action="connection.php" method="post">
				<h1>Faculty Sign up</h1>
                <input name="firstname" type="firstname" placeholder="First Name" />
				<input name="lastname" type="lastname" placeholder="Last Name" />
                <input name="empid" type="empid" placeholder="Employee ID"/>
				<input name="email" type="email" placeholder="Email" />
                <input name="designation" type="designation" placeholder="Designation" />
				<input name="number" type="phoneno" placeholder="Phone No" />
				<input name="password" type="password" placeholder="Password" />
				<button type="submit" class="btn btn-primary btn-dark "style="margin:1rem 1rem;" name="fsignup">Sign Up</button>
			</form>
		</div>
	</div>
    </div>





    
</body>

</html>