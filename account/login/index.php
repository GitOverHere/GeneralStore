<?php

require_once("core/init.php");
if(Session::Exists('logged_in') && Session::Get("logged_in")===true){
			header('Location: ../');
}

?>

<!DOCTYPE html>

<html lang="en">
<head>
<title>Login</title>
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="main.css">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@SanjuptaGeneralStore">
<meta name="twitter:title" content="Topfraggr">
<meta name="twitter:description" content="You can stop at several stores or just one.">
<meta name="twitter:image" content="img/code.jpg">
<meta property="og:image" content="img/code.jpg" itemprop="thumbnailUrl">
<meta property="og:title" content="">
<meta property="og:url" content="https://sahu.me/sanjupta">
<meta property="og:site_name" content="Sanjupata General Store">
<meta property="og:description" content="You can stop at several stores or just one.">
<!--<link rel="apple-touch-icon" type="image/png" href="img/touch-icon.png" />-->
<meta name="application-name" href="">
<meta name="apple-mobile-web-app-title" content="Sanjupta General Store">
<link rel="shortcut icon" type="image/x-icon" href="img/touch-icon.png" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<!--<link rel="manifest" href="/manifest.json"> -->

  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />


</head>

<body>


<div class="background">

</div>


<div class="form-container">
	  <div class="error">
		<?php

		
	

		if($_SERVER['REQUEST_METHOD']=="POST"){
			if(isset($_POST['login'])){

				require 'login.php';
			}
			if(isset($_POST['register'])){
				require 'register.php';

			}

			if(isset($_POST['reset'])){
				require 'reset.php';


			}
		}
		   ?>

	  </div>

         <div class="login animate__backInRight">
            <form autocomplete="on" method="POST" action="index.php">
               <h1>Log In</h1>
               <div  class="field">
                  <h3>Email<span class="req">*</span></h3>
                  <input type="text" name="email" placeholder="Email" required>
               </div>
               <div class="field">
                  <h3>Password<span class="req">*</span></h3>
                  <input type="password"  name="password" placeholder="Password" required>
               </div>
               <br>
               <br>
               <label class="remember">
               <input type="checkbox" name="remember" id="check">Remember me </input>
               </label>
			   <div class="alt-login">
			   <h2>Or Use</h2>
			   <div class="social-icons">
			   <a>
			   <img src="img/social-media/google.png" alt="Google Connection" class="account-connection">
			   </a>
			   <a>
			   <img src="img/social-media/twitter.png" alt="Twitter Connection" class="account-connection">
			   </a>
			   <a>
			   <img src="img/social-media/facebook.png" alt="Facebook Connection" class="account-connection">
			   </a>
			   </div>
			   </div>
              <input type="submit" value="LOG IN" class="login" name="login"></input>
            </form>
           <div class="menu">
            <a class="forgot">Forgot Password?</a> <a class="sign_up">Register</a>
			</div>
			</div>
			

         <div class="register hidden">
            <form method="POST" autocomplete="off" action="index.php">
               <h1>Sign Up</h1>
               <div class="field">
                  <h3>Full Name</h3>
                  <input type="text" name="full_name" placeholder="Your Name">
               </div>
               <div class="field">
                  <h3>Email<span class="req">*</span></h3>
                  <input type="text" name="email" placeholder="Email" required>
               </div>
               <div class="field">
                  <h3>Username<span class="req">*</span></h3>
                  <input type="text" name="username" placeholder="Username" required>
               </div>
               <div class="field">
                  <h3>Password<span class="req">*</span></h3>
                  <input type="password" name="password" placeholder="Password" required>
               </div>
				<br>
				<br>
               <input type="submit" value="SIGN UP" name="register"></input>

            </form>
            <h3> Got an account?</h3>
            <a class="sign_in">Login</a>
         </div>
         <div class="reset">
		 <div class="prompt hidden">
            <h3> Type in your Email Address to reset your password</h3>
			</div>
            <form  autocomplete="off" method="POST" action="index.php">
               <input type="text" name="email" placeholder="Email">
               <br>
               <br>
               <input type="submit" value="RESET" name="reset"></input>
            </form>
            <a class="back">Go Back</a>
         </div>
   </div>


</body>

</html>