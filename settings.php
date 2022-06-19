<?php

include "database.php";
session_start();
?>



<!DOCTYPE html>
<html>
<head>
	<title>School management System</title>
	<link rel="stylesheet" type="text/css" href="css/style3.css"/>
    <link rel="stylesheet" type="text/css" href="css/style2.css"/>
    <script type="text/javascript" src="myscripts.js"></script>
</head>
<body class="background1">
<?php include "navbar.php"?>

<div class="mainDiv">
  <div class="cardStyle">
    <form action="" method="post" name="signupForm" id="signupForm">
      
      <img src="" id="signupLogo"/>
      
      <h2 class="formTitle">
        Change Password
      </h2>
      
    <div class="inputDiv">
      <label class="inputLabel" for="password">New Password</label>
      <input type="password" id="password" name="password" required>
    </div>
      
    <div class="inputDiv">
      <label class="inputLabel" for="confirmPassword">Confirm Password</label>
      <input type="password" id="confirmPassword" name="confirmPassword">
    </div>
    
    <div class="buttonWrapper">
      <button type="submit" id="submitButton" onclick="validateSignupForm()" class="submitButton pure-button pure-button-primary">
        <span>Continue</span>
      </button>
    </div>
      
  </form>
  </div>
</div>


<hr>
<div class="footer">
	<footer><p>Copy rights &copy; School Management System</p></footer>
</div>

</body>
</html> 