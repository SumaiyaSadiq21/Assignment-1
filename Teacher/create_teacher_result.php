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



	mysqli_query( $connect, "INSERT INTO teacher(teacher_id,teacher_dept,teacher_name,teacher_nid,teacher_dob,teacher_address) VALUES ($teacher_id, '$teacher_dept', 
                                                        '$teacher_name', '$teacher_nid'
                                                        ,'$teacher_dob', '$teacher_address')" )
							 

		or die("Can not execute query");



	echo "Course inserted:<br> teacher_id = $teacher_id <br> 
                               teacher_dept = $teacher_dept <br> 
                               teacher_name = $teacher_name <br> 
                               teacher_nid = $teacher_nid <br>
                               teacher_dob = $teacher_dob <br>
                               teacher_address = $teacher_address <br>";


	echo "<p><a href=read_teacher.php>Go Back to teacher</a>";

?>