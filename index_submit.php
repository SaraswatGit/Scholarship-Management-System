<!-- index.php

MIT License

 
Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE. 
-->

<?php

	include('config/db_connect.php');
	$mobile = $password = $c_code = $s_name = $aadhar = $reg_no = $prev_year_perc = $ifsc = $acc_no = $b_name = '';


			$password = $_POST['password'];		
			$c_code = $_POST['c_code'];
			$s_name = $_POST['s_name'];	
			$aadhar = $_POST['aadhar'];	
			$reg_no = $_POST['reg_no'];	
			$prev_year_perc = $_POST['prev_year_perc'];	
			$ifsc = $_POST['ifsc'];		
			$acc_no = $_POST['acc_no'];	
			$mobile = $_POST['phno'];
            $APIKey='0366fe3c-f70e-11ec-9c12-0200cd936042';
            $OTPMessage="";
    $json = @file_get_contents(
        "https://ifsc.razorpay.com/".$ifsc);
    $arr = json_decode($json);
  
    $b_name=$arr->BANK;
			
			$otpValue=(( isset($_REQUEST['otp']) AND $_REQUEST['otp']<>'' ) ? $_REQUEST['otp'] : '' );
          

            if ( $otpValue <> '') ### OTP value entered by user
            {
                ### Check if OTP is matching or not
				
                $VerificationSessionId=$_REQUEST['VerificationSessionId'];
                $API_Response_json=json_decode(file_get_contents("https://2factor.in/API/V1/$APIKey/SMS/VERIFY/$VerificationSessionId/$otpValue"),false);
                $VerificationStatus= $API_Response_json->Details;
                    
                    ### Check if OTP is matching
                    if ( $VerificationStatus =='OTP Matched')
                    {
                       	// escape sql chars
			$phno = mysqli_real_escape_string($conn, $_POST['phno']);
			$password = mysqli_real_escape_string($conn, $_POST['password']);
			$c_code = mysqli_real_escape_string($conn, $_POST['c_code']);
			$s_name = mysqli_real_escape_string($conn, $_POST['s_name']);
			$aadhar = mysqli_real_escape_string($conn, $_POST['aadhar']);
			$reg_no = mysqli_real_escape_string($conn, $_POST['reg_no']);
			$prev_year_perc = mysqli_real_escape_string($conn, $_POST['prev_year_perc']);
			$ifsc = mysqli_real_escape_string($conn, $_POST['ifsc']);
			$acc_no = mysqli_real_escape_string($conn, $_POST['acc_no']);
			$b_name = mysqli_real_escape_string($conn, $_POST['b_name']);
			$app_id = time();

	   	// query to insert student
			$sql = "INSERT INTO student VALUES ('$app_id', '$phno', '$password')";
			// save to db and check
			if(mysqli_query($conn, $sql)){
			} else {
				echo 'query error: '. mysqli_error($conn);
			}

			$sql = "INSERT INTO application VALUES('$app_id', '$c_code', '$s_name', '$aadhar', '$reg_no', '$prev_year_perc', 'Application Submitted')";

			if(mysqli_query($conn, $sql)){
				
			} else {
				echo 'query error: '. mysqli_error($conn);
			}

			$sql = "INSERT INTO bank_detail VALUES('$app_id', '$ifsc', '$acc_no', '$b_name','$phno')";

			if(mysqli_query($conn, $sql)){
				// success
				session_start();
				$_SESSION['app_id'] = $app_id;
			} else {
				echo 'query error: ' . mysqli_error($conn);
			} 
                    
                    $OTPMessage =  "Congratulations $mobile has been verified. Please login through the Student login portal";
                        
                    }
                    else
                    {
						echo "<script type='text/javascript'>alert('Sorry, OTP entered was incorrect. Please enter correct OTP');  window.history.back();  </script>";

                    }
                
            
				}
            else
            {    
                    ### Send OTP
                    $API_Response_json=json_decode(file_get_contents("https://2factor.in/API/V1/$APIKey/SMS/$mobile/AUTOGEN"),false);
                    $VerificationSessionId= $API_Response_json->Details;
					$OTPMessage="<p>We have sent an OTP to $mobile,<br>Please enter the same below</p>";
					

                    
            }	

	 // end POST check

?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>

	<section class="container grey-text">
		<h4 class="center">Sign up</h4>
		<form class="white" action="index_submit.php" method="POST">
<?php             echo  $OTPMessage;?>
            <label>OTP : </label>
			<input type="text" name="otp" id="otp"   maxlength="6" placeholder="XXXXXX"  required="required" value="<?php echo htmlspecialchars($otpValue) ?>">
			<!-- <label>Phone Number</label> -->
			<input type="hidden" name="phno" value="<?php echo htmlspecialchars($mobile) ?>">
			<!-- <label>Password</label> -->
			<input type="hidden" name="password" value="<?php echo htmlspecialchars($password) ?>">
			<input type="hidden"  name="VerificationSessionId" value="<?php echo $VerificationSessionId; ?>" >
						<!-- <label>College Code</label> -->
			<input type="hidden" name="c_code" value="<?php echo htmlspecialchars($c_code) ?>">
			<!-- <label>Student Name</label> -->
			<input type="hidden" name="s_name" value="<?php echo htmlspecialchars($s_name) ?>">
			<!-- <label>Aadhar ID [ only numbers ]</label> -->
			<input type="hidden" name="aadhar" value="<?php echo htmlspecialchars($aadhar) ?>">
			<!-- <label>USN</label> -->
			<input type="hidden" name="reg_no" value="<?php echo htmlspecialchars($reg_no) ?>">
			<!-- <label>Previous Year Percentage</label> -->
			<input type="hidden" name="prev_year_perc" value="<?php echo htmlspecialchars($prev_year_perc) ?>">
			<!-- <label>IFSC</label> -->
			<input type="hidden" name="ifsc" value="<?php echo htmlspecialchars($ifsc) ?>">
			<!-- <label>Account Number</label> -->
			<input type="hidden" name="acc_no" value="<?php echo htmlspecialchars($acc_no) ?>">
			<!-- <label>Bank Name</label> -->
			<input type="hidden" name="b_name" value="<?php echo htmlspecialchars($b_name) ?>">

			<div class="center">
				<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
			</div>
		</form>
	</section>

	<?php include('templates/footer.php'); ?>

</html>