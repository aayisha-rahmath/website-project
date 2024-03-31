<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Travel Destinations</title>
	
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Arvo&family=Libre+Baskerville&family=Nunito+Sans:wght@200&family=Oswald:wght@300&family=Playfair+Display:ital@1&family=Poppins:wght@300&family=Roboto+Serif:ital,opsz,wght@0,8..144,200;1,8..144,100&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Arvo&family=Libre+Baskerville&family=Nunito+Sans:wght@200&family=Oswald:wght@300&family=Playfair+Display:ital@1&family=Poppins:wght@300&family=Roboto+Serif:ital,opsz,wght@0,8..144,200;1,8..144,100&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Arvo&family=Dancing+Script:wght@500&family=Libre+Baskerville&family=Nunito+Sans:wght@200&family=Oswald:wght@300&family=Playfair+Display:ital@1&family=Poppins:wght@300&family=Roboto+Serif:ital,opsz,wght@0,8..144,200;1,8..144,100&display=swap" rel="stylesheet">

<link rel="icon" type="image/x-icon" href="logo.png">
<link rel="stylesheet" type="text/css" href="destination.css">


</head>

<body>

<!--nav-->
  <div class="nav">
    <ul>
      <li><a href="index.php" target="_blank">Home</a></li>
      <li><a href="destinations.php">Destinations</a></li>
      <li><a href="SpecialOffers.php" target="_blank">Special Offers</a></li>
      <li><a href="ContactUs.php" target="_blank">Contact Us</a></li>
    </ul>
  </div>
  
<!--header-->   
	<header>
        <h1>Explore the World<img src="logo.png" width="60" height="60"></h1>
		<h3>Welcome to a world of breathtaking destinations and unforgettable experiences. 
		 Our website is your gateway to discovering some of the most iconic and enchanting places on the planet. 
		 From the serene tropical paradises of the Maldives to the bustling streets of New York, 
		 from the historic wonders of Rome to the vibrant culture of Singapore,
		 we invite you to embark on a virtual journey with us.</h3>
    </header>
	
<!--destinations-->
   <div class="container">
    <div class="box">
		<img src="images/maldives.jpg">
        <h2>Maldives</h2>
        <p>Welcome to the Maldives, a tropical paradise in the Indian Ocean. With its powdery white-sand beaches, crystal-clear waters, and luxurious overwater bungalows, the Maldives is a dream destination for those seeking serenity and natural beauty.</p>
		<button><a href="https://www.google.com/search?gs_ssp=eJzj4tDP1TcwKam0MGD04shNzEnJLEstBgA7ogY_&q=maldives&rlz=1C1SQJL_enLK962LK962&oq=m&gs_lcrp=EgZjaHJvbWUqCQgBEC4YJxiKBTIGCAAQRRg8MgkIARAuGCcYigUyBggCEEUYOTIGCAMQRRg7MgcIBBAuGIAEMgYIBRBFGDwyBggGEEUYPDIGCAcQRRg80gEIMjgzMGowajSoAgCwAgA&sourceid=chrome&ie=UTF-8">More Information &#8594;</a></button>
	</div>
	
	<div class="box">
		<img src="images/new york.jpg">
        <h2>New York</h2>
        <p>Explore the vibrant energy of New York City, the city that never sleeps. From iconic landmarks like Times Square and Central Park to world-class museums and diverse neighborhoods, New York offers a dynamic blend of culture, art, and commerce.</p>
		<button><a href="https://www.google.com/search?gs_ssp=eJzj4tTP1TcwijeyMDNg9OLISy1XqMwvygYAOpEF8g&q=new+york&rlz=1C1SQJL_enLK962LK962&oq=new+y&gs_lcrp=EgZjaHJvbWUqDAgBEC4YQxixAxiKBTIGCAAQRRg5MgwIARAuGEMYsQMYigUyDwgCEAAYQxiDARixAxiKBTIMCAMQABhDGLEDGIoFMgkIBBAAGEMYigUyDwgFEC4YQxiDARixAxiKBTIJCAYQABhDGIoFMgYIBxBFGDzSAQgzNTQ3ajBqN6gCALACAA&sourceid=chrome&ie=UTF-8">More Information &#8594;</a></button>
    </div>
	
	<div class="box">
		<img src="images/dubai.jpg">
        <h2>Dubai</h2>
        <p>Experience the future in Dubai, a city known for its modern architecture, opulent lifestyle, and desert adventures. From the Burj Khalifa to luxury shopping malls and desert safaris, Dubai is a thrilling fusion of tradition and innovation.</p>
		<button><a href="https://www.google.com/search?q=dubai&sca_esv=562769096&rlz=1C1SQJL_enLK962LK962&sxsrf=AB5stBjIXW4PYq0i5cFTdS5RrNZ8TYfrag%3A1693928456437&ei=CEz3ZJKrGsPCoATbp7pw&gs_ssp=eJzj4tTP1TcwTDOwKDJg9GJNKU1KzAQALL8FBQ&oq=duba&gs_lp=Egxnd3Mtd2l6LXNlcnAiBGR1YmEqAggAMg0QLhiDARixAxiKBRhDMg0QABiKBRixAxiDARhDMg0QABiKBRixAxiDARhDMgcQABiKBRhDMgcQABiKBRhDMgUQABiABDILEC4YgAQYxwEYrwEyCxAAGIAEGLEDGIMBMgUQABiABDILEAAYgAQYsQMYgwEyHBAuGIMBGLEDGIoFGEMYlwUY3AQY3gQY4ATYAQNIsyVQ9QpYlBVwAXgBkAEAmAHrAqABtwmqAQUyLTIuMrgBAcgBAPgBAagCEsICBxAuGOoCGCfCAgcQIxjqAhgnwgIQEAAYigUY6gIYtAIYQ9gBAcICExAuGIoFGMgDGOoCGLQCGEPYAQLCAgcQIxiKBRgnwgIEECMYJ8ICCBAuGIoFGJECwgIOEAAYigUYsQMYgwEYkQLCAhEQLhiABBixAxiDARjHARjRA8ICERAuGIoFGLEDGIMBGMcBGK8BwgINEC4YxwEY0QMYigUYJ8ICBxAuGIoFGEPCAg0QLhiKBRjHARjRAxhDwgIKEC4YigUYsQMYQ8ICCBAAGIAEGLEDwgIaEC4YxwEY0QMYigUYlwUY3AQY3gQY4ATYAQPiAwQYACBBiAYBugYGCAEQARgBugYGCAIQARgIugYGCAMQARgU&sclient=gws-wiz-serp">More Information &#8594;</a></button>
    </div>
	
	<div class="box">
		<img src="images/london.jpg">
        <h2>London</h2>
        <p>Step into history and modernity in London, the capital of the United Kingdom. Discover iconic sites like the Tower of London and Buckingham Palace, and immerse yourself in a thriving arts and culinary scene.</p>
		<button><a href="https://www.google.com/search?q=london&sca_esv=562769096&rlz=1C1SQJL_enLK962LK962&sxsrf=AB5stBjF_i3C_WpSKR5d0VwyK4c51-_DSA%3A1693928506546&ei=Okz3ZNX_IMjD1e8P8aCsyAc&gs_ssp=eJzj4tDP1TcwySrIMWD0YsvJz0vJzwMAMSMFkw&oq=london&gs_lp=Egxnd3Mtd2l6LXNlcnAiBmxvbmRvbioCCAEyBxAAGIoFGEMyDRAuGIMBGLEDGIoFGEMyChAAGIoFGLEDGEMyDRAAGIoFGLEDGIMBGEMyBxAAGIoFGEMyBxAAGIoFGEMyDRAAGIoFGLEDGIMBGEMyChAAGIoFGLEDGEMyDRAAGIoFGLEDGIMBGEMyBxAAGIoFGENItStQ1wJYtRFwAXgBkAEBmAG6B6AB-BWqAQsyLTIuMC4yLjEuMbgBAcgBAPgBAagCD8ICBxAuGOoCGCfCAgcQIxjqAhgnwgITEC4YigUYyAMY6gIYtAIYQ9gBAcICGRAuGIoFGMcBGK8BGMgDGOoCGLQCGEPYAQHCAgcQIxiKBRgnwgIIEC4YigUYkQLCAgsQABiABBixAxiDAcICCxAAGIoFGLEDGIMBwgIFEC4YgATCAgcQLhiKBRhDwgINEC4YigUYxwEYrwEYQ-IDBBgAIEGIBgG6BgYIARABGAg&sclient=gws-wiz-serp">More Information &#8594;</a></button>
    </div>
	
	<div class="box">
		<img src="images/paris.jpg">
        <h2>Paris</h2>
        <p> Paris, the "City of Love." From the Eiffel Tower to the Louvre Museum, Paris exudes elegance and charm, making it a top destination for art, fashion, and cuisine enthusiasts.</p>
		<button><a href="https://www.google.com/search?q=paris&sca_esv=562769096&rlz=1C1SQJL_enLK962LK962&sxsrf=AB5stBgtdoJf1J05hI508hj5fe_0A-qgeA%3A1693928546832&ei=Ykz3ZMK2Mse0oASF7LW4Cg&ved=0ahUKEwjC77vK55OBAxVHGogKHQV2DacQ4dUDCBA&uact=5&oq=paris&gs_lp=Egxnd3Mtd2l6LXNlcnAiBXBhcmlzMgcQIxiKBRgnMgcQLhiKBRhDMgcQABiKBRhDMgcQLhiKBRhDMgcQABiKBRhDMgcQABiKBRhDMgcQABiKBRhDMgcQABiKBRhDMgcQABiKBRhDMgUQABiABEjJF1C8B1iwE3ABeAGQAQCYAa4CoAGYCaoBBTItNC4xuAEDyAEA-AEBqAITwgIHEC4Y6gIYJ8ICBxAjGOoCGCfCAhAQABiKBRjqAhi0AhhD2AEBwgITEC4YigUYyAMY6gIYtAIYQ9gBAsICDRAuGIoFGLEDGIMBGEPCAgsQABiABBixAxiDAcICERAuGIAEGLEDGIMBGMcBGNEDwgIREC4YigUYsQMYgwEYxwEY0QPCAhMQLhiKBRixAxiDARjHARjRAxhDwgINEC4YigUYxwEY0QMYQ8ICCBAAGIoFGLEDwgIOEAAYgAQYsQMYgwEYyQPiAwQYACBBiAYBugYGCAEQARgBugYGCAIQARgI&sclient=gws-wiz-serp">More Information &#8594;</a></button>
    </div>
	
	 <div class="box">
		<img src="images/italy.jpg">
        <h2>Italy</h2>
        <p>Italy, a land of ancient wonders, beckons with its rich history, stunning coastlines, and delectable cuisine. Explore the ancient ruins of Rome, the romantic canals of Venice, and the rolling hills of Tuscany.</p>
		<button><a href="https://www.google.com/search?q=italy&rlz=1C1SQJL_enLK962LK962&oq=italy&gs_lcrp=EgZjaHJvbWUqBwgAEAAYjwIyBwgAEAAYjwIyDwgBEC4YQxiDARixAxiKBTIJCAIQABhDGIoFMgwIAxAAGEMYsQMYigUyCQgEEAAYQxiKBTIPCAUQABhDGIMBGLEDGIoFMgkIBhAAGEMYigUyCQgHEAAYQxiKBTIJCAgQABhDGIoFMg0ICRAAGIMBGLEDGIAE0gEIMTAwMmowajeoAgCwAgA&sourceid=chrome&ie=UTF-8">More Information &#8594;</a></button>
    </div>

	<div class="box">
		<img src="images/greece.jpg">
        <h2>Greece</h2>
        <p>Discover the birthplace of Western civilization in Greece. From Athens' historical treasures to the idyllic islands like Santorini, Greece offers a captivating blend of history, culture, and natural beauty.</p>
		<button><a href="https://www.google.com/search?q=greece&sca_esv=562967872&rlz=1C1SQJL_enLK962LK962&sxsrf=AB5stBhrEK7y92jEn9XjgU4qrYskS8JE4g%3A1693974295337&ei=F__3ZLvxE8mSseMPltGw-AE&ved=0ahUKEwj72IaBkpWBAxVJSWwGHZYoDB8Q4dUDCBA&uact=5&oq=greece&gs_lp=Egxnd3Mtd2l6LXNlcnAiBmdyZWVjZTINEC4YgwEYsQMYigUYQzIHEAAYigUYQzIHEC4YigUYQzIHEAAYigUYQzIHEAAYigUYQzIHEAAYigUYQzIHEAAYigUYQzIHEAAYigUYQzIHEAAYigUYQzIHEAAYigUYQzIcEC4YgwEYsQMYigUYQxiXBRjcBBjeBBjgBNgBAkjJEVCmDlimDnABeAGQAQCYAb8CoAG_AqoBAzMtMbgBA8gBAPgBAfgBAqgCEMICBxAjGOoCGCfCAgcQLhjqAhgnwgITEC4YigUYyAMY6gIYtAIYQ9gBAeIDBBgAIEGIBgG6BgYIARABGAi6BgYIAhABGBQ&sclient=gws-wiz-serp">More Information &#8594;</a></button>
    </div>
	
	<div class="box">
		<img src="images/rome.jpg">
        <h2>Rome</h2>
        <p>Step back in time in Rome, the "Eternal City." Roam among iconic landmarks like the Colosseum and Vatican City, and savor authentic Italian cuisine in charming trattorias.</p>
		<button><a href="https://www.google.com/search?q=rome+italy&sca_esv=562967872&rlz=1C1SQJL_enLK962LK962&sxsrf=AB5stBjw9vxV2eaqbtLv53R02I58Xf45Mg%3A1693974357230&ei=Vf_3ZI7MDdiYseMP1-6juAk&gs_ssp=eJzj4tDP1TcwSzYzMmD04irKz01VyCxJzKkEAELOBoo&oq=roam%2Cita&gs_lp=Egxnd3Mtd2l6LXNlcnAiCHJvYW0saXRhKgIIADIIEC4YigUYkQIyCBAAGIoFGJECMggQABiKBRiRAjIIEAAYigUYkQIyCBAAGIoFGJECMgcQABiABBgKMgcQABiABBgKMgcQABiABBgKMgcQABiABBgKMgcQABiABBgKSMAfUNEFWIsTcAF4AZABAJgB0AOgAcYJqgEHMi0zLjAuMbgBAcgBAPgBAcICChAAGEcY1gQYsAPCAgoQABiKBRiwAxhDwgIOEAAY5AIY1gQYsAPYAQHCAhAQLhiKBRjIAxiwAxhD2AECwgIMEAAYigUYQxhGGPkBwgIHEAAYigUYQ8ICBRAAGIAEwgIjEAAYigUYQxhGGPkBGJcFGIwFGN0EGEYY9AMY9QMY9gPYAQPCAgUQLhiABMICCxAuGIAEGMcBGNED4gMEGAAgQYgGAZAGEboGBggBEAEYCboGBggCEAEYCLoGBggDEAEYEw&sclient=gws-wiz-serp">More Information &#8594;</a></button>
    </div>
	
	<div class="box">
		<img src="images/singapore.jpg">
        <h2>Singapore</h2>
        <p>Experience the modern marvel of Singapore, where efficient public transport, lush gardens, and diverse cuisine await. Explore Gardens by the Bay, Marina Bay Sands, and the cultural tapestry of this city-state.</p>
		<button><a href="https://www.google.com/search?q=singapore&sca_esv=562967872&rlz=1C1SQJL_enLK962LK962&sxsrf=AB5stBj7zKx1rLsUYyqAhE4R64mo1Dn42Q%3A1693974368903&ei=YP_3ZLe4NreVseMPmKSVqAk&gs_ssp=eJzj4tDP1TcwKzEqMWD04izOzEtPLMgvSgUAQgMGqg&oq=Singapore&gs_lp=Egxnd3Mtd2l6LXNlcnAiCVNpbmdhcG9yZSoCCAEyExAuGIoFGLEDGIMBGMcBGNEDGEMyDRAuGIoFGLEDGIMBGEMyChAAGIoFGLEDGEMyDRAAGIoFGLEDGIMBGEMyBxAAGIoFGEMyCBAAGIAEGLEDMgsQABiABBixAxiDATIFEAAYgAQyCxAAGIAEGLEDGIMBMgUQABiABDIcEC4YigUYsQMYgwEYQxiXBRjcBBjeBBjgBNgBAkjwKFCbC1ibC3ABeAGQAQCYAZECoAGRAqoBAzItMbgBAcgBAPgBAfgBAqgCEMICBxAuGOoCGCfCAgcQIxjqAhgnwgITEC4YigUYyAMY6gIYtAIYQ9gBAcICGRAuGIoFGMcBGK8BGMgDGOoCGLQCGEPYAQHCAiIQLhiKBRixAxiDARjHARjRAxhDGJcFGNwEGN4EGOAE2AEC4gMEGAAgQYgGAboGBggBEAEYCLoGBggCEAEYFA&sclient=gws-wiz-serp">More Information &#8594;</a></button>
    </div>
	
	<div class="box">
		<img src="images/new zealand.jpg">
        <h2>New Zealand</h2>
        <p>Embrace nature's wonders in New Zealand, a land of rugged mountains, pristine beaches, and adventure. From North to South Island, outdoor enthusiasts will find hiking, skiing, and thrilling experiences.</p>
		<button><a href="">More Information &#8594;</a></button>
    </div>

	<div class="box">
		<img src="images/spain.jpg">
		<h2>Spain</h2>
		<p>Immerse yourself in Spain's vibrant culture, from the historic streets of Barcelona to the passionate flamenco of Seville. Enjoy tapas, explore Gaudi's masterpieces, and relax on the Mediterranean coast.</p>
		<button><a href="https://www.google.com/search?q=new+zealand&sca_esv=562967872&rlz=1C1SQJL_enLK962LK962&sxsrf=AB5stBjpOVe65E0Ofk-n0EQvjsYM-90qZQ%3A1693974560094&ei=IAD4ZM-pBd_bseMPgL-YiAs&ved=0ahUKEwjPuab_kpWBAxXfbWwGHYAfBrEQ4dUDCBA&uact=5&oq=new+zealand&gs_lp=Egxnd3Mtd2l6LXNlcnAiC25ldyB6ZWFsYW5kMg0QLhiKBRixAxiDARhDMg0QABiKBRixAxiDARhDMg0QABiKBRixAxiDARhDMg0QABiKBRixAxiDARhDMgcQABiKBRhDMgoQABiKBRixAxhDMgcQABiKBRhDMgoQABiKBRixAxhDMgcQABiKBRhDMgcQABiKBRhDMhwQLhiKBRixAxiDARhDGJcFGNwEGN4EGOAE2AECSKcOUPsJWPsJcAF4AZABAJgBtQKgAbUCqgEDMy0xuAEDyAEA-AEB-AECqAITwgIHEC4Y6gIYJ8ICBxAjGOoCGCfCAhYQABgDGI8BGOUCGOoCGLQCGIwD2AEBwgIWEC4YAxiPARjlAhjqAhi0AhiMA9gBAeIDBBgAIEGIBgG6BgYIARABGAu6BgYIAhABGBQ&sclient=gws-wiz-serp">More Information &#8594;</a></button>
    </div>
	
	<div class="box">
		<img src="images/sydney.jpg">
        <h2>Sydney, Australia</h2>
        <p>Discover the beauty of Sydney, Australia's largest city. Iconic landmarks like the Sydney Opera House and Bondi Beach beckon, while the city serves as a gateway to Australia's unique wildlife and natural wonders.</p>
		<button><a href="https://www.google.com/search?q=sydney&sca_esv=562967872&rlz=1C1SQJL_enLK962LK962&sxsrf=AB5stBhaawL6RA6Xz-mJEq2LT0B3Pv9W5Q%3A1693974596939&ei=RAD4ZJ37OOagseMPyOyn-Aw&gs_ssp=eJzj4tDP1TcwqzQ1N2D0YiuuTMlLrQQALUAFRg&oq=sydney&gs_lp=Egxnd3Mtd2l6LXNlcnAiBnN5ZG5leSoCCAAyDRAuGIMBGLEDGIoFGEMyBxAAGIoFGEMyDRAuGIoFGMcBGK8BGEMyDRAAGIoFGLEDGIMBGEMyDRAuGIoFGMcBGK8BGEMyBxAAGIoFGEMyDRAAGIoFGLEDGIMBGEMyBRAAGIAEMgUQABiABDIIEC4YgAQYsQMyHBAuGIMBGLEDGIoFGEMYlwUY3AQY3gQY4ATYAQNI6xtQ3glY3glwAXgBkAEAmAHYAqAB2AKqAQMzLTG4AQHIAQD4AQH4AQKoAhPCAgcQIxjqAhgnwgIHEC4Y6gIYJ8ICEBAAGIoFGOoCGLQCGEPYAQHCAhMQLhiKBRjIAxjqAhi0AhhD2AEC4gMEGAAgQYgGAboGBggBEAEYAboGBggCEAEYCLoGBggDEAEYFA&sclient=gws-wiz-serp">More Information &#8594;</a></button>
    </div>
	
	<div class="box">
		<img src="images/amsterdam.jpg">
        <h2>Amsterdam</h2>
        <p>Amsterdam, the Netherlands' capital, is a city of historic canals, world-class museums, and vibrant culture. With its picturesque streets and diverse cuisine, it's a captivating destination for travelers.</p>
		<button><a href="https://www.google.com/search?q=amsterdam&sca_esv=562967872&rlz=1C1SQJL_enLK962LK962&sxsrf=AB5stBipChh4qJ5ni_IZzaqK52AI8CgGXw%3A1693974641098&ei=cQD4ZKDJBcviseMP4p-SyAY&gs_ssp=eJzjYtfP1TfINi4wYPTiTMwtLkktSknMBQA8YQZd&oq=amsterdam&gs_lp=Egxnd3Mtd2l6LXNlcnAiCWFtc3RlcmRhbSoCCAAyChAuGIoFGLEDGEMyDRAAGIoFGLEDGIMBGEMyBxAuGIoFGEMyBRAAGIAEMgUQLhiABDIFEC4YgAQyCxAuGIAEGMcBGK8BMgUQABiABDIFEAAYgAQyBRAAGIAEMhkQLhiKBRixAxhDGJcFGNwEGN4EGOAE2AECSIgZUJAIWJAIcAF4AZABAJgBggKgAYICqgEDMi0xuAEByAEA-AEB-AECqAIRwgIHEC4Y6gIYJ8ICBxAjGOoCGCfCAhMQLhiKBRjIAxjqAhi0AhhD2AEBwgIZEC4YigUYxwEYrwEYyAMY6gIYtAIYQ9gBAeIDBBgAIEGIBgG6BgYIARABGAi6BgYIAhABGBQ&sclient=gws-wiz-serp">More Information &#8594;</a></button>
    </div>
	
	<div class="box">
		<img src="images/bali.jpg">
        <h2>Bali</h2>
        <p>Bali, Indonesia's "Island of the Gods," offers a captivating blend of tropical beauty, rich culture, and warm hospitality. From pristine beaches to lush jungles, it's a haven for relaxation and adventure.</p>
		<button><a href="https://www.google.com/search?q=bali+islands&sca_esv=562967872&rlz=1C1SQJL_enLK962LK962&sxsrf=AB5stBjAYVeJZ2GoX_5rvEQX9VyeHOlVgw%3A1693974668282&ei=jAD4ZLjmEK6jseMPpNqi8AI&gs_ssp=eJzj4tDP1TcwTMpOMmD04klKzMlUyCzOScxLKQYAVk4Hmw&oq=bali&gs_lp=Egxnd3Mtd2l6LXNlcnAiBGJhbGkqAggBMg0QLhiDARixAxiKBRhDMggQLhiABBixAzIFEC4YgAQyBRAAGIAEMgUQABiABDIFEAAYgAQyBRAAGIAEMgUQABiABDIFEAAYgAQyBRAAGIAEMhcQLhiABBixAxiXBRjcBBjeBBjgBNgBA0iVJVCVC1iVC3ABeAGQAQCYAbQCoAG0AqoBAzMtMbgBAcgBAPgBAfgBAqgCEsICBxAuGOoCGCfCAgcQIxjqAhgnwgIQEAAYigUY6gIYtAIYQ9gBAcICExAuGIoFGMgDGOoCGLQCGEPYAQLCAhkQLhiKBRjHARjRAxjIAxjqAhi0AhhD2AECwgIcEC4YgwEYsQMYigUYQxiXBRjcBBjeBBjgBNgBA-IDBBgAIEGIBgG6BgYIARABGAG6BgYIAhABGAi6BgYIAxABGBQ&sclient=gws-wiz-serp">More Information &#8594;</a></button>
    </div>
   </div>
 
<marquee style="font-family: 'Dancing Script', cursive; font-size: 30px; color: dark blue; background-color: #fffbeb; margin-top: 15px; padding: 15px;">
    Find your path, seek your adventure, explore your world
</marquee> 
 
<!--How We Make Your Life Better-->

	<h4>How We Make Your Life Better</h4>
	
	<div class="section">
		<div class="box">
			<img src="images/icon1.png">
			<h2>Unbeatable Deals Await!</h2>
			<p>Discover the ultimate destination for the best prices on a wide range of products and services. Our website is dedicated to providing you with unbeatable deals, ensuring you always get the most value for your money.</p>

		</div>
		
		<div class="box">
			<img src="images/icon2.png">
			<h2>Always Here for You, 24/7!</h2>
			<p>We're committed to your satisfaction, day or night. Our 24*7 support team is ready to assist you with any inquiries or issues you may encounter. Count on us for round-the-clock support and peace of mind.</p>
		</div>
		
		<div class="box">
			<img src="images/icon3.png">
			<h2>Discover Your Perfect Package!</h2>
			<p>Discover exclusive packages designed just for you. Whether it's travel, subscriptions, or more, we've got you covered with exceptional value and convenience.</p>
		</div>
		
		<div class="box">
			<img src="images/icon4.png">
			<h2>Budget-Friendly Rate!</h2>
			<p>At our website, we pride ourselves on offering budget-friendly rates that won't break the bank.
            We understand the importance of keeping costs in check while still enjoying top-quality products or services.
            With us, you can access the best deals and savings to make your budget go further, ensuring affordability without compromising quality.</p>
		</div>
	</div>

	
<!--footer--> 
	<div class="footer" style="margin-top: 20px;">
		<p>Travelcation<img src="logo.png" width="40" height="40"><br>
		No 20 Galle Rd,<br> 
		Colombo 04, Sri Lanka<br>
		info@travelcation.com<br>
		+942012001
		<br>
		&copy; 2023 Travelcation. All rights reserved.</p>
	</div>
	
</body>
</html>
