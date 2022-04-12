<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");
		
        
        $results = mysqli_query( $connect, "SELECT * FROM teacher" )
		or die("Can not execute query");	
	
	echo "<table border> \n";
	echo "<th>Department</th> <th>Name</th> <th>Delete</th> <th>Update</th> \n";
	
	while( $rows = mysqli_fetch_array( $results ) ) 
	{
		extract( $rows );
		echo "<tr>";
		echo "<td> $teacher_dept </td>";
		echo "<td> $teacher_name </td>";
		echo "<td> <a href = 'delete_teacher.php?teacher_id=$teacher_id'> Delete </a> </td>";
		echo "<td> <a href = 'update_teacher_input.php?teacher_id=$teacher_id & teacher_dept=$teacher_dept &
                                                      teacher_name=$teacher_name & teacher_nid=$teacher_nid & 
                                                      teacher_dob=$teacher_dob & 
                                                      teacher_address=$teacher_address'> Update </a> </td>";
		echo "</tr> \n";
	}
	
	echo "</table> \n";

	echo "<p><a href=create_teacher_input.php>Create a new teacher</a>";
	echo "<p><a href=index.html>Go back to Homepage</a>";
?>
