<?php

	$course_id = $_GET["course_id"];

	$dept = $_GET["dept"];
	
	$semester = $_GET["semester"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "UPDATE course SET semester='$semester' WHERE id = $id && dept = $dept" )

		or die("Can not execute query");



	echo "Record inserted:<br> course_id = $course_id";



	echo "<p><a href=read_courses.php>READ all records of Course</a>";

?>