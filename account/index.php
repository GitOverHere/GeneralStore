<?php
/*
  session_start();
   require_once("core/init.php");
 $user= new User();
   if(!Session::exists('logged_in')){
   	header('location: login');
   }
*/
?>


<!DOCTYPE html>

<html lang="en">
<head>
<title>Manage Your Account</title>
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
<link rel="apple-touch-icon" type="image/png" href="img/touch-icon.png" />
<meta name="application-name" href="">
<meta name="apple-mobile-web-app-title" content="Sanjupta General Store">
<link rel="shortcut icon" type="image/x-icon" href="img/touch-icon.png" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<!--<link rel="manifest" href="/manifest.json"> -->

</head>

<body>
<header class="header">
<div class="section">
<div class="logo" id="logo">
<a class="home" id="home" href="#intro"><img src="images/logo.svg" width="60" height="60" alt="General Store Logo" \=""></a>
</div>


<div class="links">
<div class="my-account">

<img src="img/profle.svg" alt="Your Account"></img>
<a href="account">Welcome <?php echo $user->username()?></a>
</div>
<div class="cart">
<img src="img/cart.svg"></img>
<a href="cart" alt="Cart">My Cart</a>

</div>

<div class="products">
<img src="img/products" alt="Products">
<a href="cart" alt="Cart">My Cart</a>
</div>


<div class="deals">
<img src="img/products" alt="Products">
<a href="deals" alt="Deals">Deals</a>
</div>

</div>



</div>
</header>


<section class="my-account">



<div class="item" id="viewprofile">

<a href="subscription">
<img src="img/profile.svg">
</a>
<p>View Your Profile</p>

</div>

<div class="viewforumprofile">

<a href="subscription">
<img src="img/profile.svg">
</a>
<p>View Forum Profile</p>

</div>


<div class="item" id="changeinfo">
	
<a href="changeinfo">
<img src="img/gear.svg">
</a>
<p>Change Account Information</p>



</div>
<div class="item" id="managesubscription">
<a href="subscription">
<img src="img/subscription.svg">
</a>
<p>Manage Your Subscription</p>

</div>
<div class="item" id="managegcbalance">

<a href="gcbalance">
<img src="img/rupee.svg" alt="Manage Gift Card Balance">
</a>
<p>Manage Gift Card Balance</p>
</div>






</section>













</div>


</section>








<footer class="footer">


<div class="col1">
<div class="social-media">
<h1>Follow us on Social Media</h1>
<a href=""></a>
<a href="asdasdasd">Facebook</a>
<a href="asdasdasd">Twitter</a>
<a href="asdasdasd">Instagram</a>
<a href="asdasdasd">Whatsapp</a>
</div>
</div>
<div class="col2">
<a href="about">About Us</a>
<a href="products">Products</a>
<a href="deals">Deals</a>
<a href="forum">Forum</a>
<a href="about">Sitemap</a>
<a href="jobs">Jobs</a>
</div>
<div class="col3">
<a href="tos">Terms of Service</a>
<a href="privacy-policy">Privacy policy</a>
<a href="deals">Deals</a>
<a href="faq">Frequently asked questions</a>
<a href="about">Sitemap</a>
<a href="jobs">Jobs</a>
</div>
</footer>
</body>
</html>