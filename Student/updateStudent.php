<?php
	$id = $_GET["id"];
	$dept = $_GET["dept"];
	$name = $_GET["name"];
?>

<h1>Update Student</h1>

<form method=get action=update_result1.php>

	<input type=hidden name=id value='<?php echo $id; ?>'> <br>
    dept: <input type=text name=dept value='<?php echo $dept; ?>'>
	<p>
	name: <input type=text name=name value='<?php echo $name; ?>'>
	<p>
	<input type=submit value=Update>
</form>