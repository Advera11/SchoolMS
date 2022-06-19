<?php

include "database.php";
session_start();

?>



<!DOCTYPE html>
<html>
<head>
	<title>HERITAGE SECONDARY SCHOOL</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css"/>
</head>
<body class="background">

	<?php include "navbar.php"?>
	<img src="res/1.jpg" width="800">
	<h1 class="heading"> Admin Login</h1>
	<div class="login">

		<?php

		if(isset($_POST["login"])){

		$sql = "SELECT * from admin where aname='{$_POST["username"]}' and apass='{$_POST["password"]}'";

		$res = $db->query($sql);

		if($res->num_rows>0){

			$ro = $res->fetch_assoc();

			$_SESSION["aid"]=$ro["aid"];
			$_SESSION["aname"]=$ro["aname"];
			echo '<script>window.open("admin.php","_self");</script>>';
		}
		else {

			echo '<div class="error">Invalid Username and password</div>';
	}

		}



		?>
		<form method="POST", action="">
			<label >Username</label>
			<input type="text" name="username" required class="input"><br>
			<label >Password</label>
			<input type="password" name="password" required class="input"><br>
			<button type="submit" class="btn" name="login">Login</button>
		</form>
		
	</div>
	<br>

<div class="footer">
	<footer><p>Copy rights &copy; School Management System</p></footer>
</div>

</body>
</html> 