<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ATK_results_db";

    $conn = mysqli_connect($server, $username, $password, $dbname);

    if(isset($_POST['submit'])) {
        
        if(!empty($_POST['first_name']) &&
           !empty($_POST['last_name']) &&
           !empty($_POST['sex']) &&
           !empty($_POST['phone_number']) &&
           !empty($_POST['citizen_id']) &&
           !empty($_POST['house_no']) &&
           !empty($_POST['soi']) &&
           !empty($_POST['moo']) &&
           !empty($_POST['sub_district']) &&
           !empty($_POST['district']) &&
           !empty($_POST['province']) &&
           !empty($_POST['postal_code'])) {
               
                $first_name = $_POST['first_name'];
                $last_name = $_POST['last_name'];
                $sex = $_POST['sex'];
                $phone_number = $_POST['phone_number'];
                $citizen_id = $_POST['citizen_id'];
                $house_no = $_POST['house_no'];
                $soi = $_POST['soi'];
                $moo = $_POST['moo'];
                $road = $_POST['road'];
                $sub_district = $_POST['sub_district'];
                $district = $_POST['district'];
                $province = $_POST['province'];
                $postal_code = $_POST['postal_code'];

                $query = "insert into Personal_info(FirstName, LastName, Sex, Phone_num, CitizenID, House_no, Soi, Moo, Road, District, Sub_district, Province, Postal_code) 
                        values('$first_name', '$last_name', '$sex', '$phone_number', '$citizen_id', '$house_no', '$soi', '$moo', '$road', '$district', '$sub_district', '$province', '$postal_code')";
                
                $run = mysqli_query($conn, $query);

                if($run) {
                    // echo "Form submitted succesfully";
                    ?>
				        <div class="alert" style="background-color: #4BB543;">
  					        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                                saving successfully
				        </div>
			        <?php
                } else {
                    // echo "Form not submitted";
                    ?>
				        <div class="alert">
  					        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                                saving failed
				        </div>
			        <?php
                }
        } 
        else {
            // echo "all fields required";
            ?>
				<div class="alert" style="background-color: #eed202;">
  					<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        all fields required
				</div>
			<?php
        }
    }

    //Closing the connection
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->

    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
    
</body>
</html>