<?php

	$teacher_id = $_GET["teacher_id"];

	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "DELETE FROM teacher WHERE teacher_id=$teacher_id" )

		or die("Can not execute query");



	echo "teacher deleted<br>";



	echo "<p><a href=read_teacher.php>Go Back to Teacher</a>";

?>