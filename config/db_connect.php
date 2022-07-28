<?php 

	// connect to the database
	$conn = mysqli_connect('localhost', 'root', 'T91srkisqueen*', 'scholarship_system');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
		
	}

?>