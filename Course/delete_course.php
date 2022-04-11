<?php

	$course_id = $_GET["course_id"];

	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "DELETE FROM course WHERE course_id=$course_id" )

		or die("Can not execute query");



	echo "Course deleted<br>";



	echo "<p><a href=read_courses.php>Go Back to Courses</a>";

?>