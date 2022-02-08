<!DOCTYPE html>
<html lang="en">
<head>
	<title>Autocar - Your Auto Repair Shop</title>
<!--META TAGS-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="author" content="Gustavo Vaz">
	<meta name="descryption" content="Auto Repair Shop">
	<meta name="keywords" content="auto,repair,cars,motorcycles,shop">
	<meta name="robots" content="index,follow">
<!--ICON-->
	<link rel="icon" href="img/favicon.svg">
<!--MATERIALIZE CSS-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<!--CUSTOM CSS-->
	<link rel="stylesheet" type="text/css" href="css/custom.css">
<!--GOOGLE ICONS-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--FONT AWESOME-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!--GOOGLE FONTS-->
	<link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet">
</head>
<body>	
<!--MENU - NAVBAR-->
	<header>
<!--SIDENAV-->
		<ul class="sidenav" id="menu-mobile">
			<li><a href="#home" class="sidenav-close">Home</a></li>
			<li><a href="#about" class="sidenav-close">About Us</a></li>
			<li><a href="#blog" class="sidenav-close">Blog</a></li>
			<li><a href="#contact" class="sidenav-close">Contact</a></li>
		</ul>
<!--MAIN MENU-->
		<div class="navbar-fixed">
			<nav class="navbar white">
				<div class="nav-wrapper container">
					<h1 class="logo-txt">Autocar Auto Repair Shop</h1>
					<a href="index.html"><img src="img/logo.png" alt="Autocar" class="logo-img"></a>
					<ul class="menu hide-on-med-and-down right">
						<li><a href="#home">Home</a></li>
						<li><a href="#about">About Us</a></li>
						<li><a href="#blog">Blog</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
					<a href="#" class="sidenav-trigger right" data-target="menu-mobile"><i class="material-icons menu_mobile_icon">menu</i></a>
				</div>
			</nav>
		</div>
	</header>
<!--HEADER - MENU-->
	<div class="parallax-container">
		<section class="home block scrollspy" id="home">		
			<div class="banner row container">
				<div class="col s12 center">
					<h1 class="color-txt-one">Your Vehicle New Again</h1>
					<p class="white-text light">We have the expertise you are looking for to repair your vehicle with a fair price</p>
					<a href="#about" class="btn btn-large white-text">Know More</a>
				</div>			
			</div>
			<div class="parallax"><img src="img/bg1.jpg"></div>					
		</section>
	</div>	
<!--FEATURES - CARS-->
	<section class="features">
		<div class="row container">
			<div class="col s12 m4 center">
				<div class="feature">
					<h2><i class="material-icons medium color-txt-two">directions_car</i></h2>
					<h5>Car Repair</h5>
					<p>We repair any kinds of vehicles, we are a agil and specialized mechanics team to give you and you car the best treat ever.</p>
				</div>
			</div>
<!--FEATURES - MOTORCYCLES-->
			<div class="col s12 m4 center">
				<div class="feature">
					<h2><i class="material-icons medium color-txt-two">motorcycle</i></h2>
					<h5>Motorbike Repair</h5>
					<p>Honda, Yamaha, Suzuki, Kawasaki and Harley Davidson are some of the brands we work with, you are also invited to come here and check out our new line of helmets and accessories.</p>
				</div>
			</div>
<!--FEATURES - SHOP-->
			<div class="col s12 m4 center">
				<div class="feature">
					<h2><i class="material-icons medium color-txt-two">shopping_cart</i></h2>
					<h5>Shop</h5>
					<p>We have a big stock of parts for your car or motorcycle, we sell all sort of parts and we also have the best prices, pay us a visit and check it out.</p>
				</div>
			</div>
		</div>
	</section>
<!--ABOUT US SECTION-->
	<section class="about block color-back-one scrollspy" id="about">
		<div class="row container">
			<div class="col s12 center">
				<h2 class="white-text">About Us</h2>
				<p class="white-text">Autocar is a consolidated company in the automobile and motorcycle market, since 1998 in the business, in addition to having excellent workmanship to take care of the mechanics of your car or motorcycle, we are also an authorized reseller of the main manufacturers of national and imported parts. Come get to know us more, schedule a visit and get a free basic review on your motorcycle or car.</p>				
				<h5 class="white-text">Schedule Now</h5>
			</div>
			<div class="col s12 m6">
				<div class="schedule">
					<h6>Fill the form below</h6>
					<form class="post" action="mail/send_mail.php">
						<div class="input-field">
							<input type="text" name="name" id="name" required>
							<label for="name" class="black-text">Your name</label>
						</div>	
						<div class="input-field">
							<input type="email" name="email" id="email" required>
							<label for="email" class="black-text">Your best email</label>
						</div>
						<div class="input-field">
							<input type="text" name="phone" id="phone" required>
							<label for="phone" class="black-text">Phone</label>
						</div>				
						<input type="text" name="hour" list="hour" placeholder="Hour" required>	
							<datalist id="hour">
								<option value="11:00">  
								<option value="12:00">
								<option value="13:00">
								<option value="14:00">
							</datalist>
						<div class="input-field">
							<input type="date" name="date" id="date" class="black-text" required>
						</div>
						<button class="btn color-back-one" type="submit">Schedule</button>
					</form>
				</div>
			</div>
			<div class="col s12 m6">
				<div class="map tranparent">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondres%2C%20Reino%20Unido!5e0!3m2!1spt-BR!2sbr!4v1644252360805!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>
		</div>
	</section>
<!--CONTACT SECTION-->
	<section class="contacts" id="contact">
		<div class="row container">
			<div class="col s12 m12 l4 center">				
				<article class="contact">
					<h2 class="color-txt-two">London</h2>
					<p>
						<i class="material-icons left">phone</i>+44 20 7777 8888<br>
						<i class="material-icons left">phone</i>+44 20 7777 9999<br>
						<i class="material-icons left">mail</i>contact.london@autocar.com<br>
						<i class="material-icons left">mail</i>support.london@autocar.com
					</p>
				</article>
			</div>
			<div class="col s12 m12 l4 center">
				<article class="contact">
					<h2 class="color-txt-two">Cardiff</h2>
						<p>
						<i class="material-icons left">phone</i>+44 21 1234 2525<br>
						<i class="material-icons left">phone</i>+44 21 1234 5252<br>
						<i class="material-icons left">mail</i>contact.cardiff@autocar.com<br>
						<i class="material-icons left">mail</i>support.cardiff@autocar.com
					</p>
				</article>
			</div>
			<div class="col s12 m12 l4 center">
				<article class="contact">
					<h2 class="color-txt-two">Social Media</h2>
						<a href="#" class="btn btn-floating .color-back-one"><i class="fa fa-facebook"></i></a>
						<a href="#" class="btn btn-floating .color-back-one"><i class="fa fa-twitter"></i></a>
						<a href="#" class="btn btn-floating .color-back-one"><i class="fa fa-google"></i></a>
						<a href="#" class="btn btn-floating .color-back-one"><i class="fa fa-instagram"></i></a>
						<a href="#" class="btn btn-floating .color-back-one"><i class="fa fa-pinterest"></i></a>
						<a href="#" class="btn btn-floating .color-back-one"><i class="fa fa-envelope"></i></a>
				</article>
			</div>				
		</div>
	</section>
<!--FOOTER SECTION-->
	<footer class="footer">
		<div class="row container">
			<div class="col s12 center">
				<a href="index.html"><img src="img/logo-mobile.png"></a>
				<p>Auto Repair Shop 2017 - All Rights Reserved</p>
			</div>			
		</div>
	</footer>
	<!--ALERTS-->
	<!-- SUCCESS -->
	<?php if(isset($_GET['status']) && $_GET['status'] == 'success'){ ?>
        <script>
            alert('Visit scheduled sucessufully!');
        </script>
    <?php } ?> 
	<!-- ERROR -->
	<?php if(isset($_GET['status']) && $_GET['status'] == 'error'){ ?>
        <script>
            alert('Error, please try it again...');
        </script>
    <?php } ?> 	  
<!--JQUERY-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!--MATERIALIZE JS-->	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<!--JQUERY CODES-->
	<script>
		$(document).ready(function(){
			//SIDENAV
			$(".sidenav").sidenav();
			//PARALLAX
			$(".parallax").parallax();
		});
	</script>
</body>
</html>
