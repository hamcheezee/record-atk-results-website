<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ATK_results_db";

    $conn = mysqli_connect($server, $username, $password, $dbname);

    if(isset($_POST['submit']) && isset($_FILES['img'])) {

        if(!empty($_POST['id'])) {

                $id = $_POST['id'];
                $test_result = $_POST['atk_result'];
                $test_date_and_time = $_POST['date_and_time'];

                $file_name = $_FILES['img']['name'];
                $file_tmp = $_FILES['img']['tmp_name'];
                $upload_folder = "atk_result/";

                $query = "insert into ATK_result(SID, ATK_testing_date_and_time, ATK_testing_result, ATK_testing_photo) 
                        values('$id', '$test_date_and_time', '$test_result', '$file_name')";

                $run = mysqli_query($conn, $query);

                if($run) {
                    move_uploaded_file($file_tmp, $upload_folder.$file_name);

                    ?>
				        <div class="alert" style="background-color: #4BB543;">
  					        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                                saving successfully
				        </div>
			        <?php
                } else {
                    ?>
				        <div class="alert">
  					        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                                saving failed
				        </div>
			        <?php
                }
        }
        else {
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