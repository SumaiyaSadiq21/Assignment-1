<?php

	$teacher_id = $_GET["teacher_id"];
    $teacher_dept = $_GET["teacher_dept"];
    $teacher_name = $_GET["teacher_name"];
    $teacher_nid = $_GET["teacher_nid"];
    $teacher_dob = $_GET["teacher_dob"];
    $teacher_address = $_GET["teacher_address"];

	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE teacher SET teacher_id='$teacher_id', teacher_dept='$teacher_dept', 
								 teacher_name='$teacher_name', teacher_nid='$teacher_nid', 
								 teacher_dob='$teacher_dob', teacher_address='$teacher_address'
                                 WHERE teacher_id = $teacher_id";

	//echo $query;

	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Teacher updated:<br> teacher_id= $teacher_id <br> 
                                  teacher_dept = $teacher_dept <br> 
                                  teacher_name = $teacher_name <br> 
								  teacher_nid = $teacher_nid <br> 
                                  teacher_dob = $teacher_dob <br> 
                                  teacher_address = $teacher_address <br>";



	echo "<p><a href=read_teacher.php>Go Back to Teacher</a>";

?>