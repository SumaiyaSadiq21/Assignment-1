<?php

	$course_id = $_GET["course_id"];
	$course_dept = $_GET["course_dept"];
	$course_title = $_GET["course_title"];
	$course_credit = $_GET["course_credit"];
	$course_syllabus = $_GET["course_syllabus"];

  

	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO course(course_id,course_dept,course_title,course_credit,course_syllabus) VALUES ($course_id, '$course_dept', 
                                                        '$course_title', $course_credit,'$course_syllabus')" )
							 

		or die("Can not execute query");



	echo "Course inserted:<br> course_id = $course_id <br> course_dept = $course_dept <br> 
                               course_title = $course_title <br> 
                               course_credit = $course_credit <br> course_syllabus = $course_syllabus <br>";


	echo "<p><a href=read_courses.php>Go Back to Courses</a>";

?>