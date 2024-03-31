<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arvo&family=Dancing+Script:wght@500&family=Great+Vibes&family=Libre+Baskerville&family=Nunito+Sans:wght@200&family=Oswald:wght@300&family=Playfair+Display:ital@1&family=Poppins:wght@300&family=Roboto+Serif:ital,opsz,wght@0,8..144,200;1,8..144,100&display=swap" rel="stylesheet">

    <title>Contact Us</title>
		
	<link rel="icon" type="image/x-icon" href="logo.png">
	<link rel="stylesheet" type="text/css" href="ContactUs.css">
	
</head>
<body>
    <!-- Navigation Menu -->
    <div class="nav">
        <ul>
           <li><a href="index.php" target="_blank">Home</a></li>
			<li><a href="destinations.php" target="_blank">Destinations</a></li>
			<li><a href="SpecialOffers.php" target="_blank">Special Offers</a></li>
			<li><a href="ContactUs.php">Contact Us</a></li>
        </ul>
    </div>

<!--form-->
	<h1>Travel Agent Booking Form</h1>
	<form action="booking.php" method="POST">
	
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required><br><br>

        <label for="destination">Destination:</label>
        <input type="text" id="destination" name="destination" required><br><br>

        <label for="departure-date">Departure Date:</label>
        <input type="date" id="departure-date" name="departure-date" required><br><br>

        <label for="return-date">Return Date:</label>
        <input type="date" id="return-date" name="return-date" required><br><br>

        <label for="num-adults">Number of Adults:</label>
        <input type="number" id="num-adults" name="num-adults" min="1" required><br><br>

        <label for="num-children">Number of Children:</label>
        <input type="number" id="num-children" name="num-children" min="0" required><br><br>

        <label for="message">Additional Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="50"></textarea><br><br>

        <input type="submit" value="Submit">
    
    </form>
	
<!--footer--> 
	<div class="footer" style=" margin-top: 20px;">
		<h2>Contact Information</h2>
            <p><strong>
				Feel free to reach out to us using the information below.
            </strong></p>
				<strong>Travelcation<img src="logo.png" width="40" height="40"></strong>
				<br>
				<strong>Address:</strong><p>No 20 Galle Rd,
				<br> 
				Colombo 04, Sri Lanka</p>
				<br>
				<strong>Email:</strong> <p>info@travelcation.com</p>
				<br>
				<strong>Phone:</strong> <p>+942012001</p>
				<br>
				<p>&copy; 2023 Travelcation. All rights reserved.</p>
	</div>

</body>
</html>
