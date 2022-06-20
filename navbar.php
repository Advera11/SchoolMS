<div class="navbar">


<ul class="list">
<b style="color: white; float: left; line-height: 50px; margin-left: 15px; font-family: cooper black;">School Management System</b>

<?php

if(isset($_SESSION['aid'])){
	echo '

	 <li> <a href="index.php"> Home </a></li>
	 <li> <a href="settings.php"> Settings </a></li>
	 <li> <a href="about.php"> About </a></li>
	 <li> <a href="index.php"> Logout</a></li>

	';
}else {
	echo '

	 <li><a href="home.html"> Home </a></li>
	 <li> <a href="exam.php"> Register</a></li>
	 <li> <a href="admin.php"> Alumni </a></li>
	 <li> <a href="admin.php"> Contacts </a></li>
	 <li> <a href="admin.php"> Staff </a></li>

	';

}


?>
	




</ul>






</div>
