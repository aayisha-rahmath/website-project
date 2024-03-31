<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Travelcation - Your Gateway to Adventure</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arvo&family=Dancing+Script:wght@500&family=Great+Vibes&family=Libre+Baskerville&family=Nunito+Sans:wght@200&family=Oswald:wght@300&family=Playfair+Display:ital@1&family=Poppins:wght@300&family=Roboto+Serif:ital,opsz,wght@0,8..144,200;1,8..144,100&display=swap" rel="stylesheet">

<link rel="icon" type="image/x-icon" href="logo.png">
<link rel="stylesheet" type="text/css" href="index.css">

</head>

<body>
<!--header-->
<header>
  <h1>Welcome to Travelcation <img src="logo.png" width="60" height="60"></h1>
  
<!--nav-->
  <div class="nav">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="destinations.php" target="_blank">Destinations</a></li>
      <li><a href="SpecialOffers.php" target="_blank">Special Offers</a></li>
      <li><a href="ContactUs.php" target="_blank">Contact Us</a></li>
    </ul>
  </div>
</header>

<!--row--> 
<div class="row" style="margin-bottom: 20px;">
  <div class="left">
    <img src="travel.jpg" width="350" height="400"></img>
  </div>
  <div class="right">
    <h4>Welcome to Travelcation<br>
    Your Gateway to Adventure and Exploration!</h4>

    <p>Get ready to explore the world like never before with Travelcation. 
	Whether you're a seasoned globetrotter or new to the travel scene, 
	we're here to make your journey exciting and effortless.
	<br>
	
	Imagine discovering stunning landscapes, experiencing vibrant cultures, 
	and creating memories that last a lifetime. Our mission is simple: 
	to help you find the best places to go and the most incredible things to do.
	<br>

	Connect with a community of fellow explorers who are just as passionate 
	about travel as you are. From tips and tricks to inspiring stories, 
	we've got everything you need to make your next adventure the best one yet.
	<br>
	
	Start your journey with us today and let the travel memories begin!
	<br>
	The Travelcation Team</p>
  </div>
</div>

<!--image slider-->
	<div class="container" style="margin-top:20px">
		<div class="slider">
			<div class="box1">
				<img src="images/travel1.jpg">
			</div>
			<div class="box2">
				<img src="images/travel2.jpg">
			</div>
			<div class="box3">
				<img src="images/travel3.jpg">
			</div>
			<div class="box4">
				<img src="images/travel4.jpg">
			</div>
			<div class="box5">
				<img src="images/travel5.jpg">
			</div>
			<div class="box6">
				<img src="images/travel6.jpg">
			</div>
			<div class="box7">
				<img src="images/travel7.jpg">
			</div>
		</div>
	</div>
	       
<!--mission and vision-->
	<div class="container">
        <div class="mission-vision">
            <h2 class="mission-text">Our Mission</h2>
            <p class="text">&#9733; We aim to curate exceptional travel experiences and provide valuable resources to enable travelers to embark on journeys that enrich their lives.</p>
        </div>
        <div class="mission-vision">
            <h2 class="vision-text">Our Vision</h2>
            <p class="text">&#9733; To inspire and empower travelers worldwide to explore the beauty of our diverse planet, fostering unforgettable experiences, cultural understanding, and a deep appreciation for the wonders of travel.</p>
        </div>
	</div>
<!--Destination-->
	<div class="destination">
        <div class="box">
            <img src="images/GIF1.gif">
		</div>
		<div class="box">
            <img src="images/GIF2.gif">
		</div>
		<div class="box">
            <img src="images/GIF3.gif">
		</div>
	</div>
		
    	
<!--purpose and goals-->
	<div class="head"><b>Purpose and Goals</b></div>
	<div class="purpose-goals">
		<div class="goal">
			<h2>Curate Exceptional Travel Experiences</h2>
			<p>Discover unique and off-the-beaten-path adventures that will leave you with unforgettable memories.</p>
		</div>
    <div class="goals">
		<div class="goal">
			<h2>Promote Cultural Exchange</h2>
			<p>Immerse yourself in the local culture, traditions, and lifestyles of the places you visit.</p>
		</div>
    <div class="goals">
		<div class="goal">
			<h2>Champion Sustainability</h2>
			<p> Travel responsibly and minimize your environmental impact with our eco-friendly travel tips.</p>
		</div>
    <div class="goals">
		<div class="goal">
			<h2>Build a Vibrant Travel Community</h2>
			<p> Join our community of passionate travelers, share your experiences, and connect with fellow explorers.</p>
		</div>
	</div>
   
<!--footer--> 
	<div class="footer" style="margin-top:20px">
		<p>Travelcation<img src="logo.png" width="40" height="40"><br>
		No 20 Galle Rd,<br> 
		Colombo 04, Sri Lanka<br>
		info@travelcation.com<br>
		+942012001
		<br>
		&copy; 2023 Travelcation. All rights reserved.</p>
	</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function rotate() {
            var lastChild = $('.slider div:last-child').clone();
            $('.slider div').removeClass('firstSlide');
            $('.slider div:last-child').remove();
            $('.slider').prepend(lastChild);
            $(lastChild).addClass('firstSlide');
        }

        setInterval(function() {
            rotate();
        }, 4000);
    </script>
</body>
</html>

