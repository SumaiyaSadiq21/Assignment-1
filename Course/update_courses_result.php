<?php

	//updateCourse( id, dept, title, credit, syllabus )
	$course_id = $_GET["course_id"];
	$course_dept = $_GET["course_dept"];
	$course_title = $_GET["course_title"];
	$course_credit = $_GET["course_credit"];
	$course_syllabus = $_GET["course_syllabus"];

	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE course SET course_id='$course_id', course_dept='$course_dept', 
								 course_title='$course_title', course_credit='$course_credit', 
								 course_syllabus='$course_syllabus' WHERE course_id = $course_id";

	//echo $query;

	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Course updated:<br> course_id = $course_id <br> course_dept = $course_dept <br> course_title = $course_title <br> 
								course_credit = $course_credit <br> course_syllabus = $course_syllabus <br>";



	echo "<p><a href=read_courses.php>Go Back to Courses</a>";

?>