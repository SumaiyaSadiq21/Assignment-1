<?php
	$payment_id = $_GET["payment_id"];	$student_id = $_GET["student_id"];	$amount: = $_GET["amount:"];	$date = $_GET["date"];

	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$query 	= "UPDATE payment SET student_id='$student_id', amount='$amount', date='$date' WHERE payment_id = $payment_id";
	echo $query;

	mysqli_query( $connect, $query )
		or die("Can not execute query");

	echo "<p>Record updated:<br> student_id = $student_id <br> amount = $amount <br> date = $date ";

	echo "<p><a href=readPayment.php>READ all records</a>";
?>