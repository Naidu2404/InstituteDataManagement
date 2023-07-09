
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HOD Login</title>
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
    <div class="containerlog" id="container">
		<div class="form-containerlog log-in-container">
			<form action="connection.php" method="post">
				<h1>HOD Login</h1>
				<input name="hodid" type="name" placeholder="HOD Id" />
				<input name="password" type="password" placeholder="Password" />

				<a href="#">Forgot your password?</a>
				<button type="submit" class="btn btn-primary btn-dark "style="margin:1rem 1rem;" name="hLogin">Log In</button>
			</form>
		</div>
	</div>





    
</body>

</html>