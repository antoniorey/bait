<?php
	// DB Connect
	$conn = mysqli_connect("localhost","root",""); //or die("cannot connect db");
	if (!$conn) {
		echo "ไม่สามารถเชื่อมต่อฐานข้อมูลได้";
		exit;
	}
	mysqli_select_db($conn, "system_management");
	mysqli_query($conn, "SET NAMES utf8");
?>
