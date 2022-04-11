<?php
    $course_id = $_GET["course_id"];
	$course_dept = $_GET["course_dept"];
	$course_title = $_GET["course_title"];
	$course_credit = $_GET["course_credit"];
	$course_syllabus = $_GET["course_syllabus"];
?>


<h1>Update Course</h1>



<form method=get action=update_courses_result.php>

	ID: <input type=text name=course_id value='<?php echo $course_id; ?>'>

	<p>

    Department: <input type=text name=course_dept value='<?php echo $course_dept; ?>'>

	<p>

	Title: <input type=text name=course_title value='<?php echo $course_title; ?>'>

	<p>
    
    Credit: <input type=text name=course_credit value='<?php echo $course_credit; ?>'>

	<p>
    
    Syllabus: <input type=text name=course_syllabus value='<?php echo $course_syllabus; ?>'>

	<p>

	<input type=submit value=Update>

</form>