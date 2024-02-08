<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>About</title>

	<!-- font awesome cdn link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

	<!-- custom css file link -->
	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

	<!-- custom js file link -->
	<script src="js/scripts.js" defer></script>

</head>

<body>

	<!-- header section start -->
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
			<h3 data-aos="fade-up" data-aos-delay="350">About Us</h3>
			<p data-aos="fade-up" data-aos-delay="450">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat
				cum, quasi pariatur
				adipisci ducimus
				unde! Nulla debitis odit nesciunt voluptatum?</p>
			<a data-aos="fade-up" data-aos-delay="600" href="#about-description__image" class="btn">Read more</a>
		</div>

	</section>

	<section class="about-description" id="about-description__image">

		<div class="about-description__image" data-aos="fade-right" data-aos-delay="350">
			<img src="images/des-8.jpg" alt="">
		</div>

		<div class="content" data-aos="fade-right" data-aos-delay="600">
			<h3>why choose us?</h3>
			<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur vel omnis, totam esse veniam beatae cum
				asperiores? Maiores exercitationem deserunt, commodi, fuga veniam reprehenderit ut voluptatibus amet,
				repellat est dolore?</p>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente maiores necessitatibus perspiciatis
				numquam nobis dolores ipsum accusamus, soluta nulla laborum!</p>
			<div class="icons-container">
				<div class="icons" data-aos="fade-up" data-aos-delay="750">
					<i class="fas fa-map"></i>
					<span>top destinations</span>
				</div>
				<div class="icons" data-aos="fade-up" data-aos-delay="900">
					<i class="fas fa-hand-holding-usd"></i>
					<span>affordable price</span>
				</div>
				<div class="icons" data-aos="fade-up" data-aos-delay="1150">
					<i class="fas fa-headset"></i>
					<span>24/7 guide service</span>
				</div>
			</div>
		</div>

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