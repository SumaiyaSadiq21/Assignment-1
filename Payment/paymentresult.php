<?php

	

	$payment_id = $_GET["payment_id"];
	$student_id = $_GET["student_id"];
	$amount: = $_GET["amount:"];
	$date = $_GET["date"];
	



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO payment VALUES ('$payment_id', '$student_id', '$amount:', '$date')" )

		or die("Can not execute query");



	echo "Record inserted:<br> payment_id = $payment_id <br> student_id = $student_id <br> amount = $amount: <br> date = $date";



	echo "<p><a href=readPayment.php>READ all payment records</a>";

?>