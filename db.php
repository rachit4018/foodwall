<?php



	$connection = mysqli_connect('localhost','root','','foodwall');
	if (isset($connection)) {
		# code...
		// echo "database connection successfull";
	}
	else
		echo "not connected";


  ?>