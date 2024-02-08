<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Book</title>

	<!-- font awesome cdn link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

	<!-- custom css file link -->
	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

	<!-- custom js file link -->
	<script src="js/scripts.js" defer></script>
</head>

<body>

	<header class="header">

		<div id="menu-btn" class="fas fa-bars"></div>

		<a data-aos="zoom-in-left" data-aos-delay="150" href="index.html" class="logo"> <i
				class="fas fa-paper-plane"></i>travel</a>

		<nav class="navbar">
			<a data-aos="zoom-in-left" data-aos-delay="300" href="#home">home</a>
			<a data-aos="zoom-in-left" data-aos-delay="450" href="#about">about</a>
			<a data-aos="zoom-in-left" data-aos-delay="600" href="#destination">destination</a>
			<a data-aos="zoom-in-left" data-aos-delay="750" href="#services">services</a>
			<a data-aos="zoom-in-left" data-aos-delay="900" href="#gallery">gallery</a>
			<a data-aos="zoom-in-left" data-aos-delay="1150" href="#blogs">blogs</a>
		</nav>

		<a data-aos="zoom-in-left" data-aos-delay="1300" href="#book-form" class="btn">book now</a>
	</header>

	<section class="home" id="home">

		<div class="content">
			<span data-aos="fade-up" data-aos-delay="150">follow us</span>
			<h3 data-aos="fade-up" data-aos-delay="350">Booking</h3>
			<p data-aos="fade-up" data-aos-delay="450">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat
				cum, quasi pariatur
				adipisci ducimus
				unde! Nulla debitis odit nesciunt voluptatum?</p>
			<a data-aos="fade-up" data-aos-delay="600" href="#booking" class="btn">Continue</a>
		</div>

	</section>

	<section class="booking" id="booking">

		<form action="book_form.php" method="post" class="book__form">

			<div class="flex">
				<div data-aos="zoom-in" data-aos-delay="150" class="inputBox">
					<span>name :</span>
					<input type="text" placeholder="enter your name" name="name">
				</div>
				<div data-aos="zoom-in" data-aos-delay="350" class="inputBox">
					<span>email :</span>
					<input type="email" placeholder="enter your email" name="email">
				</div>
				<div data-aos="zoom-in" data-aos-delay="450" class="inputBox">
					<span>phone :</span>
					<input type="number" placeholder="enter your number" name="phone">
				</div>
				<div data-aos="zoom-in" data-aos-delay="600" class="inputBox">
					<span>address :</span>
					<input type="text" placeholder="enter your address" name="address">
				</div>
				<div data-aos="zoom-in" data-aos-delay="750" class="inputBox">
					<span>where to :</span>
					<input type="text" placeholder="enter your want to visit" name="location">
				</div>
				<div data-aos="zoom-in" data-aos-delay="900" class="inputBox">
					<span>how many :</span>
					<input type="number" placeholder="number of guests" name="guests">
				</div>
				<div data-aos="zoom-in" data-aos-delay="1150" class="inputBox">
					<span>arrivals :</span>
					<input type="date" name="arrivals">
				</div>
				<div data-aos="zoom-in" data-aos-delay="1300" class="inputBox">
					<span>leaving :</span>
					<input type="date" name="leaving">
				</div>
			</div>

			<input data-aos="zoom-in" data-aos-delay="600" type="submit" value="submit" class="btn" name="send">

		</form>

	</section>


	<section class="footer">

		<div class="box-container">

			<div class="box" data-aos="fade-up" data-aos-delay="150">
				<a href="" class="logo"> <i class="fas fa-paper-plane"></i>travel</a>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, sed!</p>
				<div class="share">
					<a href="#" class="fab fa-facebook-f"></a>
					<a href="#" class="fab fa-twitter"></a>
					<a href="#" class="fab fa-instagram"></a>
					<a href="#" class="fab fa-linkedin"></a>
				</div>
			</div>

			<div class="box" data-aos="fade-up" data-aos-delay="350">
				<h3>quick links</h3>
				<a href="#home" class="links"><i class="fas fa-arrow-right"></i> home </a>
				<a href="#about" class="links"><i class="fas fa-arrow-right"></i> about </a>
				<a href="#destination" class="links"><i class="fas fa-arrow-right"></i> destination </a>
				<a href="#services" class="links"><i class="fas fa-arrow-right"></i> services </a>
				<a href="#gallery" class="links"><i class="fas fa-arrow-right"></i> gallery </a>
				<a href="#blogs" class="links"><i class="fas fa-arrow-right"></i> blogs </a>
			</div>

			<div class="box" data-aos="fade-up" data-aos-delay="450">
				<h3>contact info</h3>
				<p><i class="fas fa-map"></i> kherson, ukraine</p>
				<p><i class="fas fa-phone"></i> +123-456-7890 </p>
				<p><i class="fas fa-envelope"></i> misha7103@gmail.com </p>
				<p><i class="fas fa-clock"></i> 7:00am - 10:00pm </p>
			</div>

			<div class="box" data-aos="fade-up" data-aos-delay="600">
				<h3>newsletter</h3>
				<p>subscribe for latest updates</p>
				<form action="">
					<input type="email" name="" placeholder="enter your email" class="email" id="">
					<input type="submit" value="subscribe" class="btn">
				</form>
			</div>

		</div>

	</section>

	<div class="credit">created by <span>Misha</span> | all right reserved!</div>

	<!--	footer section ends -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

	<script>

		AOS.init({
			duration: 800,
			offset: 150,
		});

	</script>

</body>

</html>