<?php 
	session_start();
	$connect = mysqli_connect("localhost", "root", "", "ATK_results_db") or die("Connection Failed");

    $query = "select * from User_student, Personal_info, Vaccine_info, ATK_result";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);
    $image = "select Vaccine_cer from Vaccine_info";
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

    <!--profile section starts-->
    
        <div class="profile-container" style="text-align: center;">

            <div class="img_profile">
                <i class="fas fa-user-circle" style="font-size: 7rem;"></i>
                <br><br>

                <h3 style="font-size: 1.5rem;"><?php echo $row["FirstName"] . " " . $row["LastName"]; ?></h3>
                <h3 style="font-size: 1.3rem;"><?php echo $row["SID"]; ?></h3>
                <br>

                <!-- display info -->

                    <!-- first table -->
                    <h3 style="font-size: 1.5rem; text-align: left;"><b>Personal info</b></h3>

                    <table class="table">

                        <thead>

                            <tr>

                                <th>Student ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Citizen ID</th>
                                <th>Sex</th>
                                <th>Phone number</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>

                                <td><?php echo $row["SID"]; ?></td>
                                <td><?php echo $row["FirstName"]; ?></td>
                                <td><?php echo $row["LastName"]; ?></td>
                                <td><?php echo $row["CitizenID"]; ?></td>
                                <td><?php echo $row["Sex"]; ?></td>
                                <td><?php echo $row["PhoneNum"]; ?></td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- second table -->
                    <h3 style="font-size: 1.5rem; text-align: left;"><b>Address</b></h3>

                    <table class="table">

                        <thead>

                            <tr>

                                <th>House number</th>
                                <th>Moo</th>
                                <th>Soi</th>
                                <th>Road</th>
                                <th>District</th>
                                <th>Sub district</th>
                                <th>Province</th>
                                <th>Postal code</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>

                                <td><?php echo $row["House_no"]; ?></td>
                                <td><?php echo $row["Moo"]; ?></td>
                                <td><?php echo $row["Soi"]; ?></td>
                                <td><?php echo $row["Road"]; ?></td>
                                <td><?php echo $row["District"]; ?></td>
                                <td><?php echo $row["Sub_district"]; ?></td>
                                <td><?php echo $row["Province"]; ?></td>
                                <td><?php echo $row["Postal_code"]; ?></td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- third table -->
                    <h3 style="font-size: 1.5rem; text-align: left;"><b>Vaccinated info</b></h3>

                    <table class="table">

                        <thead>

                            <tr>

                                <th>First dose</th>
                                <th>Second dose</th>
                                <th>Third dose</th>
                                <th>Fourth dose</th>
                                <th>Vaccine certificate</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>

                                <td><?php echo $row["FirstDose"]; ?></td>
                                <td><?php echo $row["SecondDose"]; ?></td>
                                <td><?php echo $row["ThirdDose"]; ?></td>
                                <td><?php echo $row["FourthDose"]; ?></td>
                                <td><?php echo "<img src='vaccine_cer/".$row['Vaccine_cer']."' height=300>"; ?></td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- fourth table -->
                    <h3 style="font-size: 1.5rem; text-align: left;"><b>ATK result info</b></h3>

                    <table class="table">

                        <thead>

                            <tr>

                                <th>Date and time</th>
                                <th>Result</th>
                                <th>Photo</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>

                                <td><?php echo $row["ATK_testing_date_and_time"]; ?></td>
                                <td><?php echo $row["ATK_testing_result"]; ?></td>
                                <td><?php echo "<img src='atk_result/".$row['ATK_testing_photo']."' height=300>"; ?></td>
                            </tr>
                        </tbody>
                    </table>
            </div>
        </div>
	<!--profile section ends-->
</body>
</html>