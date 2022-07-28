<!-- studetail.php

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

	// check GET request id param
	// if($_SESSION['app_id']){
		
	// 	// escape sql chars
	// 	$id = mysqli_real_escape_string($conn, $_SESSION['app_id']);

	// 	// make sql
	// 	$sql = "SELECT * FROM application WHERE app_id = $id";

	// 	// get the query result
	// 	$result = mysqli_query($conn, $sql);

	// 	// fetch result in array format
	// 	$app = mysqli_fetch_assoc($result);

	// }


?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="studentstyle.css">

	<?php include('templates/logout.php'); ?>

	<div class="toper" >
<h2>AVAILABLE SCHOLARSHIPS</h2>
	<div class="hehe">
      <div class="schoele" >
<h6>
	<b>
	AASTHA Scholarship
	</b>
	</h6>
<br>
<form action="ats.php" style="height:7vh">
<button > <?php echo "Apply / Check Status" ?> </button>
	</form>
	  </div>
      <div class="schoele" >
	  <h6>
	<b>
	National Merit  Scholarship
	</b>
	</h6>
	<br>
<form action="nms.php" style="height:7vh">
<button > <?php echo "Apply / Check Status" ?> </button>
	</form>
	  </div>
      <div class="schoele" >
	  <h6>
	<b>
	UGC Science Scholarship
	</b>
	</h6>
	<br>
<form action="uss.php" style="height:7vh">
<button > <?php echo "Apply / Check Status" ?> </button>
	</form>
	  </div>   
    </div>
	<div class="hehe">
      <div class="schoele" >
	  <h6>
	<b>
	Janaki Bose Scholarship
	</b>
	</h6>
	<br>
<form action="jbs.php" style="height:7vh">
<button > <?php echo "Apply / Check Status" ?> </button>
	</form>
	  </div>    
    </div>
</div>     
	<?php include('templates/footer.php'); ?>

</html>