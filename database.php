<?php

$kan = mysqli_connect("localhost","root","","project");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
		}
?>