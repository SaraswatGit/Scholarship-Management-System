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

	$phno = $password = $c_code = $s_name = $aadhar = $reg_no = $prev_year_perc = $ifsc = $acc_no = $b_name  =$pass_year=$curr_year=$fam_income='';
	$errors = array('phno' => '', 'password' => '', 'c_code' => '', 's_name' => '',
					'aadhar' => '', 'reg_no' => '', 'prev_year_perc' => '',
					'ifsc' => '', 'acc_no' => '', 'b_name' => '');

	// if(isset($_POST['submit'])){
		
	// 	// check Phone Number
	// 	if(empty($_POST['phno'])){
	// 		$errors['phno'] = 'Phone Number is required';
	// 	} else{
	// 		$phno = $_POST['phno'];
	// 	}

	// 	// check Password
	// 	if(empty($_POST['password'])){
	// 		$errors['password'] = 'Password is required';
	// 	} else{
	// 		$password = $_POST['password'];
	// 	}

	// 	// check college code
	// 	if(empty($_POST['c_code'])){
	// 		$errors['c_code'] = 'College code is required';
	// 	} else{
	// 		$c_code = $_POST['c_code'];
	// 	}

	// 	// check student name
	// 	if(empty($_POST['s_name'])){
	// 		$errors['s_name'] = 'Student name is required';
	// 	} else{
	// 		$s_name = $_POST['s_name'];
	// 	}

	// 	// check aadhar
	// 	if(empty($_POST['aadhar'])){
	// 		$errors['aadhar'] = 'Aadhar Number is required';
	// 	} elseif (strlen($aadhar = $_POST['aadhar']) != 12) {
	// 		$errors['aadhar'] = 'Please enter 12 digit Number';
	// 	} else{
	// 		$aadhar = $_POST['aadhar'];
	// 	}

	// 	// check Reg no
	// 	if(empty($_POST['reg_no'])){
	// 		$errors['reg_no'] = 'USN is required';
	// 	} else{
	// 		$reg_no = $_POST['reg_no'];
	// 	}

	// 	// check prev year perc
	// 	if(empty($_POST['prev_year_perc'])){
	// 		$errors['prev_year_perc'] = 'Required';
	// 	} else{
	// 		$prev_year_perc = $_POST['prev_year_perc'];
	// 	}

	// 	// check ifsc
	// 	if(empty($_POST['ifsc'])){
	// 		$errors['ifsc'] = 'IFSC code is required';
	// 	} else{
	// 		$ifsc = $_POST['ifsc'];
	// 	}

	// 	// check acc_no
	// 	if(empty($_POST['acc_no'])){
	// 		$errors['acc_no'] = 'Account Number is required';
	// 	} else{
	// 		$acc_no = $_POST['acc_no'];
	// 	}

	// 	// check b_name
	// 	if(empty($_POST['b_name'])){
	// 		$errors['b_name'] = 'Bank Name is required';
	// 	} else{
	// 		$b_name = $_POST['b_name'];
	// 	}

	// 	if(array_filter($errors)){
	// 		//echo 'errors in form';
	// 	} else {
	// 		// escape sql chars
	// 		$phno = mysqli_real_escape_string($conn, $_POST['phno']);
	// 		$password = mysqli_real_escape_string($conn, $_POST['password']);
	// 		$c_code = mysqli_real_escape_string($conn, $_POST['c_code']);
	// 		$s_name = mysqli_real_escape_string($conn, $_POST['s_name']);
	// 		$aadhar = mysqli_real_escape_string($conn, $_POST['aadhar']);
	// 		$reg_no = mysqli_real_escape_string($conn, $_POST['reg_no']);
	// 		$prev_year_perc = mysqli_real_escape_string($conn, $_POST['prev_year_perc']);
	// 		$ifsc = mysqli_real_escape_string($conn, $_POST['ifsc']);
	// 		$acc_no = mysqli_real_escape_string($conn, $_POST['acc_no']);
	// 		$b_name = mysqli_real_escape_string($conn, $_POST['b_name']);
	// 		$app_id = time();

	// 		// query to insert student
	// 		$sql = "INSERT INTO student VALUES ('$app_id', '$phno', '$password')";

	// 		// save to db and check
	// 		if(mysqli_query($conn, $sql)){
	// 			// header('Location: index.php');
	// 		} else {
	// 			echo 'query error: '. mysqli_error($conn);
	// 		}

	// 		$sql = "INSERT INTO application VALUES('$app_id', '$c_code', '$s_name', '$aadhar', '$reg_no', '$prev_year_perc', 'Application Submitted')";

	// 		if(mysqli_query($conn, $sql)){
				
	// 		} else {
	// 			echo 'query error: '. mysqli_error($conn);
	// 		}

	// 		$sql = "INSERT INTO bank_detail VALUES('$app_id', '$ifsc', '$acc_no', '$b_name')";

	// 		if(mysqli_query($conn, $sql)){
	// 			// success
	// 			session_start();
	// 			$_SESSION['app_id'] = $app_id;
	// 		} else {
	// 			echo 'query error: ' . mysqli_error($conn);
	// 		}
			
	// 	}

	// } // end POST check

?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>

	<section class="container grey-text">
		<h4 class="center">Sign up</h4>
		<form class="white" action="index_submit.php" method="POST">
			<label>Phone Number</label>
			<input type="text" name="phno" value="<?php echo htmlspecialchars($phno) ?>">
			<!-- <div class="red-text"><?php echo $errors['phno']; ?></div> -->
			<label>Password</label>
			<input type="password" name="password" value="<?php echo htmlspecialchars($password) ?>">
			<!-- <div class="red-text"><?php echo $errors['password']; ?></div> -->
			<label>College ID</label>
			<input type="text" name="c_code" value="<?php echo htmlspecialchars($c_code) ?>">
		

			<!-- <div class="red-text"><?php echo $errors['c_code']; ?></div> -->
			<label>Student Name</label>
			<input type="text" name="s_name" value="<?php echo htmlspecialchars($s_name) ?>">
			<!-- <div class="red-text"><?php echo $errors['s_name']; ?></div> -->
			<label>Aadhar ID [ only numbers ]</label>
			<input type="text" name="aadhar" value="<?php echo htmlspecialchars($aadhar) ?>">
			<!-- <div class="red-text"><?php echo $errors['aadhar']; ?></div> -->
			<label>Registration Number : </label>

			<input type="text" name="reg_no"  value="<?php echo htmlspecialchars($aadhar) ?>">
			<!-- <div class="red-text"><?php echo $errors['reg_no']; ?></div> -->
			<label> Percentage on last available marksheet</label>
			<input type="text" name="prev_year_perc" value="<?php echo htmlspecialchars($prev_year_perc) ?>">
			<!-- <div class="red-text"><?php echo $errors['prev_year_perc']; ?></div> -->
			<label> Year of Passing</label>
			<input type="text" name="pass_year" value="<?php echo htmlspecialchars($pass_year) ?>">
			<label> Current Year of Study</label>
			<input type="text" name="curr_year" value="<?php echo htmlspecialchars($curr_year) ?>">
			<label>Annual Family Income (INR)</label>
			<input type="text" name="fam_income" value="<?php echo htmlspecialchars($fam_income) ?>">
			<!-- <div class="red-text"><?php echo $errors['ifsc']; ?></div> -->
			<label>Account Number</label>
			<input id="acc_no_trial" name="acc_no_trial" type="password" pattern="^\S{16,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 16 characters' : ''); if(this.checkValidity()) form.acc_no.pattern = this.value;" placeholder="Account Number" required>

			<label>Re-Account Number</label>
            <input id="acc_no" name="acc_no" type="text" pattern="^\S{16,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Account Number as above' : '');" placeholder="Verify Account Number" required>
			<!-- <div class="red-text"><?php echo $errors['acc_no']; ?></div> -->
			<label>IFSC</label>
			<input type="text" name="ifsc" pattern="^[A-Z]{4}0[A-Z0-9]{6}$" title="Invalid IFSC Code" value="<?php echo htmlspecialchars($ifsc) ?>">
			
			<!-- <div class="red-text"><?php echo $errors['b_name']; ?></div> -->

			<div class="center">
				<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
			</div>
		</form>
	</section>

	<?php include('templates/footer.php'); ?>

</html>