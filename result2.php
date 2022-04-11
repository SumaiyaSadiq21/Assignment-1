<?php
	$id = $_GET["id"];    $course_id = $_GET["course_id"];

	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "DELETE FROM teacher WHERE id=$id && course_id=$course_id " )
		or die("Can not execute query");

	echo "Record deleted<br>";

	echo "<p><a href=read_teacher.php>READ all records</a>";
?>