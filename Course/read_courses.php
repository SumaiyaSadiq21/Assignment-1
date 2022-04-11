<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");
		
	$results = mysqli_query( $connect, "SELECT * FROM course" )
		or die("Can not execute query");	
	
	echo "<table border> \n";
	echo "<th>Department</th> <th>Semester</th> <th>Delete</th> <th>Update</th> \n";
	
	while( $rows = mysqli_fetch_array( $results ) ) 
	{
		extract( $rows );
		echo "<tr>";
		echo "<td> $course_dept </td>";
		echo "<td> $course_semester </td>";
		echo "<td> <a href = 'delete_course.php?course_id=$course_id'> Delete </a> </td>";
		echo "<td> <a href = 'update_courses_input.php?course_id=$course_id & course_dept=$course_dept &
													 course_title=$course_title & course_credit=$course_credit
													 & course_syllabus=$course_syllabus'> Update </a> </td>";
		echo "</tr> \n";
	}
	
	echo "</table> \n";

	echo "<p><a href=create_course_input.php>Create a new course</a>";
	echo "<p><a href=index.html>Go back to Homepage</a>";
?>
