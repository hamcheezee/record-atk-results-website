<?php 
	session_start();
	$connect = mysqli_connect("localhost", "root", "", "ATK_results_db") or die("Connection Failed");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Thammasat website records ATK results</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

  	<link rel="preconnect" href="https://fonts.gstatic.com">

  	<!--custom font--> 
  	<!-- <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;800&display=swap" rel="stylesheet">

  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scle=1.0">

  	<script src="https://kit.fontawesome.com/3fe7cb7428.js" crossorigin="anonymous"></script>

</head>
<body>

	<!----hero section starts---->

	<!-- <div class="hero" style="background-image: linear-gradient(-20deg, #e9defa 0%, #fbfcdb 100%);"> -->
	<div class="hero">
		<nav>
            <img src="./img/logo.png" alt="logo" style="margin-left: -90px; margin-top: -40px; max-width: 6%; height: auto;">

			<h2 class="logo" style="margin-left: -90px; margin-top: -35px;">Thammasat<span> University</span></h2>

			<ul style="font-size: 1.2rem; margin-right: -50px; margin-top: -35px;">
				<li><a href="#">Home</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>

			<div id="id-btn" style="margin-right: -90px; margin-top: -35px; font-size: 22px;"><a href="#" class="btn"><?php echo ($_SESSION["uname"]); ?></a></div>
			<div id="id-btn" name="sign_out" style="margin-right: -100px; margin-top: -35px; font-size: 22px;"><a href="sign_out_page.php" class="btn">
				<i class="fa fa-sign-out"></i>
			</a></div>
		</nav>

		<!--features section starts-->

			<section class="services" id="features">

				<h1 class="heading">Our<span> services</span></h1>

				<div class="box-container">

					<div class="box2" style="background-color: aliceblue;">

						<i class="fas fa-user" style="font-size: 3.5rem;"></i>
						<h3>My profile</h3>
						<p></p>
						<br><br>
						<a href="my_profile.php" class="btn">select <span class="fas fa-chevron-right" style="color: black;"></span></a>
					</div>

					<div class="box2" style="background-color: lavenderblush;">

						<i class="fas fa-procedures" style="font-size: 3.5rem;"></i>
						<h3>Bed facility</h3>
						<p></p>
						<br><br>
						<a href="bed_facility.php" class="btn">select <span class="fas fa-chevron-right" style="color: black;"></span></a>
					</div>

					<div class="box2" style="background-color: oldlace;">

						<i class="fas fa-clock" style="font-size: 3.5rem;"></i>
						<h3>Status</h3>
						<p></p>
						<br><br>
						<a href="check_status.php" class="btn">select <span class="fas fa-chevron-right" style="color: black;"></span></a>
					</div>
				</div>
			</section>
		<!--features section ends-->

	</div>		
	<!----hero section ends---->

	<!-- custom js file link -->
	<script src="js/script.js"></script>
</body>
</html>