<?php 
	include('config/db_connect.php');
    session_start();
    $phone = mysqli_real_escape_string($conn, $_SESSION['ph_no']);
    $sql1 = "SELECT * FROM application_aastha_scholarship WHERE ph_no = $phone";
    $result1 = mysqli_query($conn, $sql1);
$app=0;
    if ($result1) {
        if (mysqli_num_rows($result1) > 0) {
            $app = mysqli_fetch_assoc($result1);

         // echo 'found!';
        } else {
            $sql = "SELECT * FROM student WHERE ph_no = $phone";
            $result = mysqli_query($conn, $sql);
            $app1 = mysqli_fetch_assoc($result);
           $app_id=$app1['app_id'];
           $sqla = "SELECT * FROM application WHERE app_id = $app_id";
           $resulta = mysqli_query($conn, $sqla);
           $appin = mysqli_fetch_assoc($resulta);
           	 		$new_app_id = time();

		   $sql3 = "INSERT INTO  application_aastha_scholarship VALUES('$new_app_id', '".$appin['c_code']."', '".$appin['s_name']."', '".$appin['aadhar']."', '".$appin['reg_no']."', '".$appin['prev_year_perc']."', 'Application Submitted','".$_SESSION['ph_no']."')";
           $resultin = mysqli_query($conn, $sql3);
           $sql7 = "SELECT * FROM application_aastha_scholarship WHERE ph_no = $phone";
           $result7 = mysqli_query($conn, $sql7);
           $app = mysqli_fetch_assoc($result7);

        }
      } else {
        echo 'Error: '.mysql_error();
      }

	
	


?>

<!DOCTYPE html>
<html>

	<?php include('templates/logout.php'); ?>

	<div class="container center">
		<?php if($app): ?>
			<h4>Application ID&#58;<?php echo $app['app_id'];  ?></h4>
			<p>Name&#58; <?php echo $app['s_name']; ?></p>
			<p>College Code&#58; <?php echo $app['c_code']; ?></p>
			<p>Aadhar&#58; <?php echo $app['aadhar']; ?></p>
			<p>USN&#58; <?php echo $app['reg_no']; ?></p>
			<p>Previous Year &#37;&#58; <?php echo $app['prev_year_perc']; ?></p>
			<h5>Status&#58; <?php echo $app['status']; ?></h5>
			<a href="studentinfo.php" class="btn brand z-depth-0">GO BACK</a>

		<?php else: ?>
			<h5>Processing.....</h5>
		<?php endif ?>
	</div>

	<?php include('templates/footer.php'); ?>

</html>