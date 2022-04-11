<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM payment" )
		or die("Can not execute query");

	echo "<table border> \n";
	echo "<th>student_id</th><th>payment_id</th><th>amount</th><th>Delete</th> <th>Update</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $student_id </td>";
		echo "<td> $payment_id </td>";
		echo "<td> $amount </td>";
		
		echo "<td> <a href = 'deletePayment.php?payment_id=$payment_id'> Delete </a> </td>";
		echo "<td> <a href = 'updatePayment.php?payment_id=$payment_id&student_id=$student_id&amount=$amount&date=$date'> Update </a> </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";

	echo "<p><a href=createPayment.php>CREATE a new record</a>";
?>