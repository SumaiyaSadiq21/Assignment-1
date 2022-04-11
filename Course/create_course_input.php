<h1>Create Course</h1>



<form method=get action=create_course_result.php>
	
ID: <input type=text name=course_id value='<?php echo $course_id; ?>'>

<p>

Department: <input type=text name=course_dept value='<?php echo $course_dept; ?>'>

<p>

Title: <input type=text name=course_title value='<?php echo $course_title; ?>'>

<p>

Credit: <input type=text name=course_credit value='<?php echo $course_credit; ?>'>

<p>

Course Syllabus: <input type=text name=course_syllabus value='<?php echo $course_syllabus; ?>'>

<p>
<input type=submit value=Create>
