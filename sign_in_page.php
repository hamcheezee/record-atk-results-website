<?php
	session_start();
	$connect = mysqli_connect("localhost", "root", "", "ATK_results_db") or die("Connection Failed");

	if(!empty($_POST['sign_in']))
	{
		$username = $_POST['un'];
		$password = $_POST['pw'];
		$query = "select * from User_student where username = '$username' and password = '$password'";
		$result = mysqli_query($connect, $query);
		$count = mysqli_num_rows($result);
		$_SESSION['uname'] = $username;

		if($username == '1009600000' && $password == '1369900000000') {
			header('Location: phys_homepage.php');
		}
		
		if($count > 0) {
			header('Location: homepage.php');
		} else {
			?>
				<div class="alert">
  					<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  						Invalid username or password
				</div>
			<?php
		}
	} 
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

	<div class="hero">
		<nav>
            <img src="img/logo.png" alt="logo" style="margin-left: -90px; margin-top: -40px; max-width: 6%; height: auto;">

			<h2 class="logo" style="margin-left: -100px; margin-top: -35px;">Thammasat<span> University</span></h2>
			
			<ul style="font-size: 1.2rem; margin-right: -50px; margin-top: -35px;">
				<li><a href="#home">Home</a></li>
				<li><a href="#about">About Us</a></li>
				<li><a href="#service">Services</a></li>
				<li><a href="#contact">Contact Us</a></li>
			</ul>

			<div id="login-btn" style="margin-right: -80px; margin-top: -35px; font-size: 22px;"><a href="#" class="btn">Sign in</a></div>
		</nav>

		<!--home section starts-->
		<section class="home1" id="home1">

			<!-- login form -->

			<div class="login-form-container">
				<div id="close-login-btn" class="fas fa-times"></div>
				<form name="login_form" method="post">
					<h3>Sign in</h3>
					<span>username</span>
					    <input type="text" name="un" class="box1" placeholder="enter your username" id="un" required>
					<span>password</span>
					    <input type="password" name="pw" class="box1" placeholder="enter your password" id="pw" required>
					<div class="checkbox">
						<input type="checkbox" name="" id="remember_me">
						<label for="remember-me">remember me</label>
					</div>

					<input type="submit" name="sign_in" value="sign in" class="btn">
					<p>forget password ? <a href="#">click here</a></p>
					<p>don't have an account ? <a href="#">create one</a></p>
				</form>
			</div>

			<!--Info form-->

			<div id="info-btn" class="home"><a href="#" class="btn" style="margin-left: .5rem;">Personal info</a></div>
           		<div class="info-form-container" style="padding-top: 820px;">
                	<div id="close-info-btn" class="fas fa-times"></div>
               			<form method="POST" action="insert_personal_info.php">
                    		<h3>Personal info</h3>
                        		<span>First name</span>
                            		<input type="text" name="first_name" class="box1" id="first_name">
                        		<span>Last name</span>
                            		<input type="text" name="last_name" class="box1" id="last_name">
                        		<span>Sex</span>
									<select id="sex" name="sex" style="font-size: 1.3rem; padding: .5rem; width: 26.5rem; border-radius: .5rem;">
										<option style="font-size: 1.3rem;">choose one of available options</option>
										<option style="font-size: 1.3rem;">Female</option>
										<option style="font-size: 1.3rem;">Male</option>
									</select>
								<span>Phone number</span>
                            		<input type="" name="phone_number" class="box1" id="phone_number">
                        		<span>Identification number (Citizen ID)</span>
                            		<input type="" name="citizen_id" class="box1" id="citizen_id">
                        		<span>House no.</span>
                            		<input type="text" name="house_no" class="box1" id="house_no">
                        		<span>Soi</span>
                            		<input type="text" name="soi" class="box1" id="soi">
                        		<span>Moo</span>
                            		<input type="text" name="moo" class="box1" id="moo">
                        		<span>Road</span>
                            		<input type="text" name="road" class="box1" id="road">
                        		<span>District</span>
                            		<input type="text" name="sub_district" class="box1" id="sub_district">
                        		<span>Sub-district</span>
                            		<input type="text" name="district" class="box1" id="district">
                        		<span>Province</span>
                            		<input type="text" name="province" class="box1" id="province">
                        		<span>Postal code</span>
                            		<input type="text" name="postal_code" class="box1" id="postal_code">
                        		<input type="submit" name="submit" value="save" class="btn" style="font-size: 1.3rem;">
                		</form>
            	</div>

        		<div id="vac-btn" style="margin-left: 800px; margin-top: 100px; font-size: 1.5rem;"><a href="#" class="btn">Vaccinated info</a></div>
           			<div class="vac-form-container">
                		<div id="close-vac-btn" class="fas fa-times"></div>
                			<form method="POST" action="insert_vaccine_info.php" enctype="multipart/form-data">
                    			<h3>Vaccinated info</h3>
									<span>Student ID</span>
                            			<input type="text" name="id" class="box1" id="id">

                        			<span>1st dose</span>
    									<select id="vaccine" name="vaccine1" style="font-size: 1.3rem; padding: .5rem; width: 26.5rem; margin: .5rem; border-radius: .5rem;">
											<option style="font-size: 1.3rem;">choose one of available options</option>
											<option style="font-size: 1.3rem;">Sinovac</option>
											<option style="font-size: 1.3rem;">AstraZeneca</option>
											<option style="font-size: 1.3rem;">Pfizer</option>
											<option style="font-size: 1.3rem;">Johnson & Johnson</option>
											<option style="font-size: 1.3rem;">Moderna</option>
											<option style="font-size: 1.3rem;">Sinopharm</option>
											<option style="font-size: 1.3rem;">None (ไม่ได้รับวัคซีน)</option>
										</select>

									<span>2nd dose</span>
    									<select id="vaccine" name="vaccine2" style="font-size: 1.3rem; padding: .5rem; width: 26.5rem; margin: .5rem; border-radius: .5rem;">
											<option style="font-size: 1.3rem;">choose one of available options</option>
											<option style="font-size: 1.3rem;">Sinovac</option>
											<option style="font-size: 1.3rem;">AstraZeneca</option>
											<option style="font-size: 1.3rem;">Pfizer</option>
											<option style="font-size: 1.3rem;">Johnson & Johnson</option>
											<option style="font-size: 1.3rem;">Moderna</option>
											<option style="font-size: 1.3rem;">Sinopharm</option>
											<option style="font-size: 1.3rem;">None (ไม่ได้รับวัคซีน)</option>
										</select>

									<span>3rd dose</span>
    									<select id="vaccine" name="vaccine3" style="font-size: 1.3rem; padding: .5rem; width: 26.5rem; margin: .5rem; border-radius: .5rem;">
											<option style="font-size: 1.3rem;">choose one of available options</option>
											<option style="font-size: 1.3rem;">Sinovac</option>
											<option style="font-size: 1.3rem;">AstraZeneca</option>
											<option style="font-size: 1.3rem;">Pfizer</option>
											<option style="font-size: 1.3rem;">Johnson & Johnson</option>
											<option style="font-size: 1.3rem;">Moderna</option>
											<option style="font-size: 1.3rem;">Sinopharm</option>
											<option style="font-size: 1.3rem;">None (ไม่ได้รับวัคซีน)</option>
									</select>

									<span>4th dose</span>
    									<select id="vaccine" name="vaccine4" style="font-size: 1.3rem; padding: .5rem; width: 26.5rem; margin: .5rem; border-radius: .5rem;">
											<option style="font-size: 1.3rem;">choose one of available options</option>
											<option style="font-size: 1.3rem;">Sinovac</option>
											<option style="font-size: 1.3rem;">AstraZeneca</option>
											<option style="font-size: 1.3rem;">Pfizer</option>
											<option style="font-size: 1.3rem;">Johnson & Johnson</option>
											<option style="font-size: 1.3rem;">Moderna</option>
											<option style="font-size: 1.3rem;">Sinopharm</option>
											<option style="font-size: 1.3rem;">None (ไม่ได้รับวัคซีน)</option>
										</select><br><br>

									<span style="font-size: 1.3rem; margin-bottom: .5rem;">Certificate of COVID-19 Vaccination</span>
										<label for="img" style="margin: .5rem;">Select image:</label>
  											<input type="file" name="img" accept="image/*">
                        			
									<input type="submit" name="submit" value="save" class="btn" style="font-size: 1.3rem; width: 26.5rem;">
                			</form>
        			</div>

        			<div id="atk-btn" style="margin-left: 800px; margin-top: 100px; font-size: 1.5rem;"><a href="#" class="btn">ATK result info</a></div>
        				<img class="poster" src="./img/poster.png" alt="poster">
           					
						<div class="atk-form-container">
                			<div id="close-atk-btn" class="fas fa-times"></div>
                				<form method="POST" action="insert_atk_info.php" enctype="multipart/form-data">
									<h3>ATK result info</h3>
										<span>Student ID</span>
                            				<input type="text" name="id" class="box1" id="id">
										<span>ATK testing date and time</span>
											<input type="datetime-local" id="time" style="font-size: 1.3rem; padding: 1rem; width: 25.5rem; margin: .5rem; border-radius: .5rem;"
       											   name="date_and_time" value="2022-05-05T19:30"
       											   min="2018-01-07T00:00" max="2023-12-14T00:00">
											
										<span>ATK testing result</span><br>
    										<select id="atk_result" name="atk_result" style="font-size: 1.3rem; padding: .5rem; width: 26.5rem; margin: .5rem; border-radius: .5rem;">
												<option style="font-size: 1.3rem;">choose one of available options</option>
												<option style="font-size: 1.3rem;" id="negative">negative (1 ขีด)</option>
												<option style="font-size: 1.3rem;" id="positive">positive (2 ขีด)</option>
											</select><br><br>
										<label for="img" style="margin: .5rem;">Select image:</label>
  											<input type="file" name="img" accept="image/*">
                        				<input type="submit" name="submit" value="save" class="btn" style="font-size: 1.3rem;">
                				</form>
        			</div>
		</section>
		<!--home section ends-->		
	</div>
	<!----hero section ends---->

	<!--about section starts-->

		<section class="about" id="about" style="background-color: whitesmoke;">

		<h1 class="heading"><span>About</span> us</h1>

		<div class="row">
			<div class="image">
				<img src="./img/about-img.svg" alt="" style="width: 100%;">
			</div>

			<div class="content">
				<h3>SAFETY AND HELP</h3>
				<p>For Thammasat University students and Personal at Thammasat University hospital</p>
				<a href="#" class="btn">learn more<span class="fas fa-chevron-right" style="color: black;"></span></a>
			</div>
		</div>
		</section>
	<!--about section ends-->

	<!--services section starts-->

		<section class="services" id="services">

			<h1 class="heading">Our<span> services</span></h1>

			<div class="box-container">
				<div class="box2">
					<i class="fas fa-ambulance" style="font-size: 3.5rem;"></i>
					<h3 style="font-size: 1.5rem;">24/7 Service</h3>
					<a href="#" class="btn">learn more <span class="fas fa-chevron-right" style="color: black;"></span></a>
				</div>

				<div class="box2">
					<i class="fas fa-user-md" style="font-size: 3.5rem;"></i>
					<h3 style="font-size: 1.5rem;">Expert doctors</h3>
					<a href="#" class="btn">learn more <span class="fas fa-chevron-right" style="color: black;"></span></a>
				</div>

				<div class="box2">
					<i class="fas fa-procedures" style="font-size: 3.5rem;"></i>
					<h3 style="font-size: 1.5rem;">Bed facility</h3>
					<a href="#" class="btn">learn more <span class="fas fa-chevron-right" style="color: black;"></span></a>
				</div>
			</div>
		</section>
	<!--services section ends-->

	<!------footer section starts--------->

	<section class="footer" style="background-color: whitesmoke;">

		<div class="box-container">
			<div class="box2">
				<h3>Quick Links</h3>
					<a href="#"><i class="fas fa-chevron-right"></i>Home</a>
					<a href="#"><i class="fas fa-chevron-right"></i>About Us</a>
					<a href="#"><i class="fas fa-chevron-right"></i>Services</a>
					<a href="#"><i class="fas fa-chevron-right"></i>Contact Us</a>
			</div>

			<div class="box2">
				<h3>Contact Info</h3>
					<p style="line-height: 1.8;">Thammasat students from the faculties</p>
					<p style="line-height: 1.8;">within health sciences:</p>
						<a href="#"><i class="fas fa-phone"></i>02-926-9341</a>
					<p style="line-height: 1.8;">Thammasat students from other faculties:</p>
						<a href="#"><i class="fas fa-phone"></i>02-926-9920, and 02-926-8415</a>
			</div>
			
			<div class="box2">
				<h3>Follow Us</h3>
					<p style="line-height: 1.8;">For the Thammasat University students with</p>
					<p style="line-height: 1.8;">exposition to confirmed case or istested positive</p>
					<p style="line-height: 1.8;">on their ATK results</p>
						<a href="#"><i class="fab fa-facebook"></i>Thammasat Well Being Center</a>
			</div>
		</div>
	</section>
	<!------footer section ends--------->

	<!-- custom js file link -->
	<script src="js/script.js"></script>
</body>
</html>