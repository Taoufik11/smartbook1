<?php include 'phpinclude/loadpage.php' ?>
<?php
include "login.php";
session_start();
if(isset($_SESSION["username"])){
    header("location:home.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Smartsocialbook.com</title>
    <link rel="icon" href="images/onelogo.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="css/main.min.css">
	<link rel="stylesheet" href="css/weather-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    

</head>


<body>
	<div class="www-layout">
        
        <section>
        	<div class="gap no-gap signin whitish medium-opacity">
                
                <div class="container">
                	<div class="row center">
                        <div class="col-lg-4">
                            <div class="we-login-register">
                                <div class="form-title">
                                    <i class="fa fa-key"></i>login
                                    <span>sign in now and meet the awesome Friends around the world.</span>
                                </div>
                                   
                                <form class="we-form" method="POST" action="PHP/login.php">

                                    <input type="text" name ="username" placeholder="Email or User Name">
                                    
                                    <input type="password" name ="password" placeholder="Password">

                                    <input type="checkbox"><label>remember me</label>

                                    <button type="submit" name="submit" data-ripple="">sign in</button>

                                    <a class="forgot underline" href="#" title="">forgot password?</a>
                                </form>
                                <a class="with-smedia facebook" href="#" title="" data-ripple=""><i class="fa fa-facebook"></i></a>
                                <a class="with-smedia twitter" href="#" title="" data-ripple=""><i class="fa fa-twitter"></i></a>
								<a class="with-smedia instagram" href="#" title="" data-ripple=""><i class="fa fa-instagram"></i></a>
								<a class="with-smedia google" href="#" title="" data-ripple=""><i class="fa fa-google-plus"></i></a>
                                <span>don't have an account? <a class="we-account underline" href="register.php" title="">register now</a></span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </div>

    	<script src="js/main.min.js"></script>
		<script src="js/script.js"></script>
</body>
</html>
