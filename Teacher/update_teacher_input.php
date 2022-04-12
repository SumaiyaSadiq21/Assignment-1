<?php
    $teacher_id = $_GET["teacher_id"];
    $teacher_dept = $_GET["teacher_dept"];
    $teacher_name = $_GET["teacher_name"];
    $teacher_nid = $_GET["teacher_nid"];
    $teacher_dob = $_GET["teacher_dob"];
    $teacher_address = $_GET["teacher_address"];
?>



<h1>Update Teacher</h1>



<form method=get action=update_teacher_result.php>

ID: <input type=text name=teacher_id value='<?php echo $teacher_id; ?>'>

<p>

Department: <input type=text name=teacher_dept value='<?php echo $teacher_dept; ?>'>

<p>

Name: <input type=text name=teacher_name value='<?php echo $teacher_name; ?>'>

<p>

NID: <input type=text name=teacher_nid value='<?php echo $teacher_nid; ?>'>

<p>

DOB: <input type=text name=teacher_dob value='<?php echo $teacher_dob; ?>'>

<p>

Address: <input type=text name=teacher_address value='<?php echo $teacher_address; ?>'>

<p>


<input type=submit value=Update>

</form>