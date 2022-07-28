<!-- c_app.php

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

	session_start();

	if($_SESSION['c_code']) {
		// escape sql chars
		$c_code = mysqli_real_escape_string($conn, $_SESSION['c_code']);

		// query for all applications
		$sql = "SELECT app_id, s_name, status,ph_no FROM application_aastha_scholarship WHERE c_code='$c_code'";

		// get the result set (set of rows)
		$result = mysqli_query($conn, $sql);

		// fetch the resulting rows as an array
		$apps1 = mysqli_fetch_all($result, MYSQLI_ASSOC);
	
		$sql = "SELECT app_id, s_name,status,ph_no  FROM application_janaki_bose_scholarship WHERE c_code='$c_code'";

		// get the result set (set of rows)
		$result = mysqli_query($conn, $sql);

		// fetch the resulting rows as an array
		$apps2 = mysqli_fetch_all($result, MYSQLI_ASSOC);
		 	// query for all applications
		$sql90 = "SELECT app_id, s_name, status,ph_no  FROM application_national_merit_scholarship WHERE c_code='$c_code'";

		// get the result set (set of rows)
		$result90 = mysqli_query($conn, $sql90);

		// fetch the resulting rows as an array
		$apps3 = mysqli_fetch_all($result90, MYSQLI_ASSOC);

		$sql = "SELECT app_id, s_name, status,ph_no  FROM application_ugc_science_scholarship WHERE c_code='$c_code'";

		// get the result set (set of rows)
		$result = mysqli_query($conn, $sql);

		// fetch the resulting rows as an array
		$apps4 = mysqli_fetch_all($result, MYSQLI_ASSOC);

		// close connection
	}




?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/logout.php'); ?>
	<h4 class="center grey-text">AASTHA Scholarship Applications</h4>

	<div class="container">
		<div class="row">

			<?php foreach($apps1 as $app): ?>

				<div class="col s6 m4">
					<div class="card z-depth-0">
						<div class="card-content center">
							<h6><?php echo htmlspecialchars($app['ph_no']); ?></h6>
							<h8><?php echo htmlspecialchars($app['s_name']); ?></h8>
							<p><?php echo htmlspecialchars($app['status']); ?><p>
						</div>
						<form class="white center" action="c_verify.php" method="POST">
							<input type="hidden" name="app_id" value=<?php echo $app['ph_no']; ?> /> 
							<input type="submit" name="submit" value="More info" class="btn brand z-depth-0">
						</form>
					</div>
				</div>

			<?php endforeach; ?>

		</div>
	</div>
	<br>
	<h4 class="center grey-text">Janaki Bose Scholarship Applications</h4>

<div class="container">
	<div class="row">

		<?php foreach($apps2 as $app): ?>

			<div class="col s6 m4">
				<div class="card z-depth-0">
					<div class="card-content center">
						<h6><?php echo htmlspecialchars($app['ph_no']); ?></h6>
						<h8><?php echo htmlspecialchars($app['s_name']); ?></h8>
						<p><?php echo htmlspecialchars($app['status']); ?><p>
					</div>
					<form class="white center" action="c_jb_verify.php" method="POST">
						<input type="hidden" name="app_id" value=<?php echo $app['ph_no']; ?> /> 
						<input type="submit" name="submit" value="More info" class="btn brand z-depth-0">
					</form>
				</div>
			</div>

		<?php endforeach; ?>

	</div>
</div>
<h4 class="center grey-text">National Merit  Scholarship Applications</h4>

<div class="container">
	<div class="row">

		<?php foreach($apps3 as $app): ?>

			<div class="col s6 m4">
				<div class="card z-depth-0">
					<div class="card-content center">
						<h6><?php echo htmlspecialchars($app['ph_no']); ?></h6>
						<h8><?php echo htmlspecialchars($app['s_name']); ?></h8>
						<p><?php echo htmlspecialchars($app['status']); ?><p>
					</div>
					<form class="white center" action="c_nm_verify.php" method="POST">
						<input type="hidden" name="app_id" value=<?php echo $app['ph_no']; ?> /> 
						<input type="submit" name="submit" value="More info" class="btn brand z-depth-0">
					</form>
				</div>
			</div>

		<?php endforeach; ?>

	</div>
</div>
<h4 class="center grey-text">UGC Science Scholarship Applications</h4>

<div class="container">
	<div class="row">

		<?php foreach($apps4 as $app): ?>

			<div class="col s6 m4">
				<div class="card z-depth-0">
					<div class="card-content center">
						<h6><?php echo htmlspecialchars($app['ph_no']); ?></h6>
						<h8><?php echo htmlspecialchars($app['s_name']); ?></h8>
						<p><?php echo htmlspecialchars($app['status']); ?><p>
					</div>
					<form class="white center" action="c_ug_verify.php" method="POST">
						<input type="hidden" name="app_id" value=<?php echo $app['ph_no']; ?> /> 
						<input type="submit" name="submit" value="More info" class="btn brand z-depth-0">
					</form>
				</div>
			</div>

		<?php endforeach; ?>

	</div>
</div>


	<?php include('templates/footer.php'); ?>

</html>