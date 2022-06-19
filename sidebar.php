
<Br>
<section class="sect">


<div class="sidebar">
<h3 class="text">Dashboard</h3><br><hr>

<ul class="side">
	<?php

	if(isset($_SESSION["aid"])){
		echo '

		 <li class="li"> <a href="admin.php"> School Information </a></li>
		 <li class="li"> <a href="system/class.php"> Class </a></li>
		 <li class="li"> <a href="system/staff.php"> Staff </a></li>
		 <li class="li"> <a href="system/exam.php"> Exam </a></li>
		 <li class="li"> <a href="system/timetable.php"> Timetable </a></li>
		 <li class="li"> <a href="system/subject.php"> Subjects </a></li>
		 <li class="li"> <a href="system/student.php"> Students </a></li>
		 <li class="li"> <a href="logout.php"> Logout </a></li>
		';
	}
	else{
		echo '

		 <li class="li"> <a href="admin.php">School Information</a> </li>
		 <li class="li"> <a href="system/class.php"> Class </a> </li>
		 <li class="li"> <a href="system/exam.php"> Exam </a> </li>
		 <li class="li"> <a href="system/student.php"> Students </a> </li>
		 <li class="li"> <a href="logout.php"> Logout </a> </li>
		';

	}

	?>
	


</ul>
<br>

	
</div>
</section>