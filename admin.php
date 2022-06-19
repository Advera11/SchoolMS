 <?php

include "database.php";
session_start();
?>



<!DOCTYPE html>
<html>
<head>
	<title>School management System</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css"/>
</head>
<body class="background1">
	<?php include "navbar.php"?>
	<img src="res/exam.jpg" style="width: 1350px;" class="shadow"/>

<section  class="sect">
	<div id="section">

		<?php include "sidebar.php"?>

		<div id="content">
			<h3> Welcome To the Admin page</h3><br>
			<h3> School Information</h3><br>
			<img src="res/home.jpg" class="imgs">
			<p class="para"> School Management system Is a Complete Management Software designed to automate school operations from classes, exams to event calender </p>
			<p class="para">
			This System has a powerful online community to bring parents, teachers and students on a common  interaction platform. It is  a paperless office automation for today's modern schools. The school Management system provides the facility to carry out all day to day activities of the school.</p>			

		</div>
	</div>

</section>

<hr>

<div class="footer">
	<footer><p>Copy rights &copy; School Management System</p></footer>
</div>


</body>
</html> 