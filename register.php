
<?php 
include 'PHP/config.php';
if(isset($_REQUEST['submit'])){
    $email = $_POST['email'];
    $userName = $_POST["username"];
    $pass1 = md5($_POST["pass1"]);
    $pass2 = md5($_POST["pass2"]);
    if($pass1 == $pass2){
        $query = "INSERT INTO user (USERNAME,EMAIL,pass) VALUE('$userName','$email','$pass1')";
        if(mysqli_query($conn,$query)){
            header("location:/smartbook1/index.php");
        }   
    }
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
        	<div class="gap no-gap signin whitish medium-opacity register">
                <div class="bg-image" ></div>
                <div class="container">
                	<div class="row center">
    
                        <div class="col-lg-5">
                            <div class="we-login-register">
                                <div class="form-title">
                                    <i class="fa fa-key"></i>Sign Up
                                    <span>Sign Up now and meet the awesome friends around the world.</span>
                                </div>

                                <form class="we-form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">

                                    <input type="text" name="email" required placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                                    
                                    <input type="text" name="username" placeholder="User Name" required>
                                    <input type="password"  name="pass1" placeholder="Password" required>
                                    <input type="password" name="pass2" placeholder=" Confirm Password" required>
                                    <input type="text" placeholder="+1234-567-987" required>
                                    <input type="checkbox"><label>Send code to Mobile</label>
                                    <button type="submit" name="submit" data-ripple="">Register</button>
                                    <a class="forgot underline" href="#" title="">forgot password?</a>
                                
                                    <?php  ?>                               
                                </form>
                                
                                <a data-ripple="" title="" href="#" class="with-smedia facebook"><i class="fa fa-facebook"></i></a>
                                <a data-ripple="" title="" href="#" class="with-smedia twitter"><i class="fa fa-twitter"></i></a>
								<a data-ripple="" title="" href="#" class="with-smedia instagram"><i class="fa fa-instagram"></i></a>
								<a data-ripple="" title="" href="#" class="with-smedia google"><i class="fa fa-google-plus"></i></a>
                                <span>already have an account? <a class="we-account underline" href="index.php" title="">Sign in</a></span>
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
