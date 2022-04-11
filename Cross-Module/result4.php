<?php
	    $course_id = $_GET["course_id"];
    $semester = $_GET["semester"];
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "DELETE FROM course WHERE id=$course_id && semester=$semester " )
		or die("Can not execute query");

	echo "Record deleted<br>";

	echo "<p><a href=read_courses.php>READ all records</a>";
?>