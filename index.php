<!DOCTYPE html>

<html lang="en">
<head>
<title>Sanjupta General Store</title>
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
<meta property="og:url" content="https://sahu.me/Websites/Sanjupta">
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
<div class="my-account header-item">

<img src="img/profile.svg" alt="Your Account"></img>
<a href="account">Welcome <?php

if(isset($_SESSION["username"])){
 echo $_SESSION["username"];
}
else {
echo "User";	
	
	
}
 ?></a>
</div>
<div class="cart header-item">
<img src="img/cart.svg"></img>
<a href="cart" alt="Cart">My Cart</a>

</div>

<div class="products header-item">
<img src="img/products.svg" alt="Products">
<a href="products" alt="Cart">All Products</a>
</div>


<div class="deals header-item">
<img src="img/deals.svg" alt="Deals">
<a href="deals" alt="Deals">Deals</a>
</div>

</div>



</div>



</header>



<section class="intro page">

<div class="title-and-subtitle">
<h1>You can shop at many stores or just one.</h1>
<p>We have everything you need under one roof.</p>
</div>

<div class="buttons">
<a class="big-green-button" id="view-products">View Products</a>
<a class="big-white-button" id="view-categories">View Categories</a>
</div>


</section>


<section class="how-it-works page">

<div class="step" id="step1">

<div class="step-img">

<img src="img/step1.svg" alt="step1 image">

</div>


<div class="step-text">
<h1>Step 1</h1>
<p>Order groceries using our epic website. Everything we have is listed here, as well as categories for various items. </p>
</div>

</div>

<div class="step" id="step2">

<div class="step-img">

<img src="img/step2.svg" alt="step2 image">

</div>

<div class="step-text">
<h1>Step 2</h1>
<p>Add them to your cart. Pay with many different payment options. </p>
</div>
</div>

<div class="step" id="step3">
<div class="step-img">

<img src="img/step3.svg" alt="step3 image">

</div>
<div class="step-text">
<h1>Step 3</h1>
<p>After payment, simply come to our store to pick up your goods. We plan on adding delivery options soon.</p>
</div>
</div>



</section>

<section class="categories page">

<h2>Our most popular categories.</h2>



<div class="category" id="categories">

<div class="category-image">
<a href="" target="_blank">
<img src="img/plus.svg" alt="All Categories">
</a>
</div>
<div class="category-text">
<a href="Search?categories=all">All Categories</a>
</div>


</div>
<div class="category" id="fruits">

<div class="category-image">
<a href="" target="_blank">
<img src="img/fruit.svg" alt="Fruits">
</a>
</div>
<div class="category-text">
<a href="Search?categories=all">Fruit</a>
</div>

</div>
<div class="category" id="vegtables">

<div class="category-image">
<a href="" target="_blank">
<img src="img/vegtables.svg" alt="All Categories">
</a>
</div>
<div class="category-text">
<a href="Search?categories=all">Vegetables</a>
</div>

</div>
<div class="category" id="grains">

<div class="category-image">
<a href="" target="_blank">
<img src="img/wheat.svg" alt="Wheat Image">
</a>
</div>
<div class="category-text">
<a href="Search?categories=all">Grains</a>
</div>


</div>
<div class="category" id="meat-and-eggs">

<div class="category-image">
<a href="" target="_blank">
<img src="img/meat.svg" alt="Meat">
</a>
</div>
<div class="category-text">
<a href="Search?categories=meat-and-eggs">Meat and Eggs</a>
</div>


</div>

<div class="category" id="snacks">

<div class="category-image">
<a href="" target="_blank">
<img src="img/snacks.svg" alt="snacks.svg">
</a>
</div>
<div class="category-text">
<a href="Search?categories=all">Snacks</a>
</div>


</div>

<div class="category" id="ice-cream">

<div class="category-image">
<a href="" target="_blank">
<img src="img/plus.svg" alt="ice-cream">
</a>
</div>
<div class="category-text">
<a href="Search?categories=frozen">Ice Cream</a>
</div>

</div>


<div class="category" id="all">

<div class="category-image">
<a href="" target="_blank">
<img src="img/plus.svg" alt="All Categories">
</a>
</div>
<div class="category-text">
<a href="Search?categories=all">All Categories</a>
</div>


</div>





</div>


</section>



<section class="aboutus">

<h1>About Us</h1>
<p>Since the dawn of time, humanity has required food. It obtained food using a variety of sources. We obtained food by foraging and hunting. Eventually we found we could take seeds from fruit we collect and plant them into 
the gournd in order to grow more food. We have used this tecnique to obtain food for thousqansd of years. Before, everyone used to farm, but now, only a small percentage do. No more do we need to farm, just buy from us. 
We have everything you ever need. This is what a general store is. A place where you can buy all kinds of goods at low prices. No more haggling vegetable vendors on the street for low prices.
</p>

<a class="big-white-button" id="view-categories" href="about">Learn Our Story</a>



</section>


<section class="ourmission">

<h1>Our Mission</h1>

<p>Our mission is to provei as many peoptle with fresh healthy food as posible. We have a lot of sweet and salty treats, but you really should not be consuming those everyday.
Instead, you shoudl consime fresh fruits,grains, and vegtables everyday.
</p>

<a class="big-white-button" id="view-categories" href="mission">Learn Our Goals</a>


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