<?php 
	session_start();
	$connect = mysqli_connect("localhost", "root", "", "ATK_results_db") or die("Connection Failed");

    $query = "select * from User_student, Personal_info, Vaccine_info, ATK_result";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <title>Thammasat website records ATK results</title> -->
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <!-- nav bar section starts -->

    <nav>
        <div id="id-btn" name="sign_out" style="margin-left: -100px; margin-top: -35px; font-size: 22px;"><a href="back_to_home_page.php" class="btn">
			<i class="fa fa-arrow-left"></i>
		</a></div>

        <img src="./img/logo.png" alt="logo" style="margin-left: -80px; margin-top: -40px; max-width: 6%; height: auto;">

		<h2 class="logo" style="margin-left: -100px; margin-top: -35px;">Thammasat<span> University</span></h2>

		<ul style="font-size: 1.2rem; margin-right: -50px; margin-top: -35px;">
			<li><a href="#">Home</a></li>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Services</a></li>
			<li><a href="#">Contact Us</a></li>
		</ul>

		<!-- <div id="id-btn" style="margin-right: -90px; margin-top: -35px; font-size: 22px;"><a href="#" class="btn"><?php echo ($_SESSION["uname"]); ?></a></div> -->
		<div id="id-btn" name="sign_out" style="margin-right: -100px; margin-top: -35px; font-size: 22px;"><a href="sign_out_page.php" class="btn">
			<i class="fa fa-sign-out"></i>
		</a></div>
		</nav>
    <!-- nav bar section ends -->

    <!-- status section starts -->
    <div class="p-4">

        <table class="table">
            
            <thead>
            
                <tr>
                    <th></th>
                    <th>Date/Time</th>
                    <th>Student ID</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>

                <tr class="active">
                    <td class="track_dot">
                        <span class="track_line"></span>
                    </td>
                    <td>05/05/2022 22:24:PM</td>
                    <td><?php echo $row["SID"]; ?></td>
                    <td><?php echo $row["FirstName"]; ?></td>
                    <td><?php echo $row["LastName"]; ?></td>
                    <td>คำร้องอยู่ระหว่างการรออนุมัติ</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- status section ends -->
</body>
</html>