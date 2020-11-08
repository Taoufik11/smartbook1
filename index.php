<?php include 'phpinclude/head.php' ?>
<?php include 'phpinclude/loadpage.php' ?>


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
                                
                                <form class="we-form" method="post" action="<?php '[PHP_SELF]'?>">
                                    <input type="text" placeholder="Email or User Name">
                                    <input type="password" placeholder="Password">
                                    <input type="checkbox"><label>remember me</label>
                                    <button type="submit" data-ripple="">sign in</button>
                                    <a class="forgot underline" href="#" title="">forgot password?</a>
                                </form>
                                <?php 
                                
                                
                                
                                ?>
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
