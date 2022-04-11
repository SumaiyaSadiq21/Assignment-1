<?php

	$course_id = $_GET["course_id"];

	$teacher_id = $_GET["teacher_id"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "UPDATE teacher SET course_id='$course_id' WHERE id = $teacher_id" )

		or die("Can not execute query");



	echo "Record inserted:<br> course_id = $course_id";



	echo "<p><a href=read_teacher.php>READ all records of teacher</a>";

?>