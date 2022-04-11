<?php
		    $payment_id = $_GET["payment_id"];	$student_id = $_GET["student_id"];	$amount: = $_GET["amount:"];	$date = $_GET["date"];	
?>

<h1>Update Payment</h1>

<form method=get action=update_result.php>

	<input type=hidden name=payment_id value='<?php echo $payment_id; ?>'> <br>
    student_id: <input type=text name=dept value='<?php echo $student_id; ?>'>
	<p>
	amount: <input type=text name=name value='<?php echo $amount; ?>'>
	<p>	<p>	date: <input type=date name=birth value='<?php echo $date; ?>'>	<p>		
	<input type=submit value=Update>
</form>