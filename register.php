<html>
<head>
<title>Educational Website</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/form.css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
<script type="text/javascript">
      function emailValidation(){
        email=document.getElementById('email');
        var mail_format=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if (!(email.value.match(mail_format))){
          alert("Please enter valid email address!!!!");
          return false;
        }
      }

</script>
</head>
<body>

<div class="main1">

<!----- Start Header (or) Menu ------>
<div class="header">
	<div class="header-left">
    <img src="imges/logo.jpg" width="231" height="61" />
        </a>
    </div>
    <div class="header-right">
    	<ul>
        	<li><a href="index.php">Home</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php#!">Register</a></li>
            <li><a href="alumni.php">Alumni</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="#footer">Contact Us</a></li>
        </ul>
    </div>
</div>
<!----- End Header (or) Menu ------>
<br>


<br>
<form class="main1" onsubmit="return emailValidation()" method="post" action="#!">
    <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your first name..">
      </div>
      <div class="col-25">
        <label for="sname">Second Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="sname" name="secondname" placeholder="Your second name..">
      </div>
    <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    <div class="col-25">
        <label for="uname">Username</label>
      </div>
      <div class="col-75">
        <input type="text" id="uname" name="username" placeholder="Username..">
      </div>
    <div class="col-25">
        <label for="dob">Date of birth</label>
      </div>
      <div class="col-75">
        <input type="date" id="dob" name="dob" placeholder="Date of birth..">
      </div>
    <div class="col-25">
        <label for="pword">Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="pword" name="pword" placeholder="Your password..">
      </div>
    <div class="col-25">
        <label for="file"> Upload Cv</label>
      </div>
      <div class="col-75">
        <input type="file" id="file" name="file">
      </div>
    <div class="col-25">
        <label for="email">Email Address</label>
      </div>
      <div class="col-75">
        <input type="email" id="email" name="email" placeholder="Your email..">
      </div>
    <div class="col-25">
        <label for="pnumber">Phone Number</label>
      </div>
      <div class="col-75">
        <input type="number" id="pnumber" name="pnumber" placeholder="phone number..">
      </div>
    <div class="col-25">
        <label for="fb">Facebook Username</label>
      </div>
      <div class="col-75">
        <input type="text" id="fb" name="fb" placeholder="Facebook username..">
      </div>
    <div class="col-25">
        <label for="ig">Instagram Username</label>
      </div>
      <div class="col-75">
        <input type="text" id="ig" name="ig" placeholder="Instragram username...">
      </div>
    <div class="col-25">
      <label for="twitter">Twitter Username</label>
    </div>
    <div class="col-75">
      <input type="text" id="twitter" name="twtter" placeholder="Twitter username...">
    </div>
  <div class="col-75">
    <br>
    <input type="submit" id="submit" value="register" name="tuma">
  <input type="reset" id="reset" value="Clear">
</div></fieldset>
    </form>
<br>
<br>
<br>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">

 
<!------ Start Footer ------->
<div id="footer">
	<div class="footer-parts">
    	<div class="footer-parts-h4">Get In Touch</div>
        <ul>
            <li><a href="#"><i class="fa fa-phone"></i>&nbsp; +255 (0) 719 225 962
</a></li>
            <li><a href="mailto:info@freetimelearning.com"><i class="fa fa-envelope"></i>&nbsp; 
info@heritagesecondary.ac.tz</a></li>
        </ul>
    </div>
    <div class="footer-parts">
    	<div class="footer-parts-h4">Extra Links</div>
    	<ul>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Careers</a></li>
        </ul>
    </div>
    <div class="footer-parts">
    	<div class="footer-parts-h4">Social Links</div><br />
        <div style="padding-left:20px; font-size:26px;">
            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook-square"></i></a> &nbsp; &nbsp;
            <a href="#!" target="_blank"><i class="fa fa-linkedin-square"></i></a> &nbsp; &nbsp;
            <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter-square"></i></a> &nbsp; &nbsp;
            <a href="#!" target="_blank"><i class="fa fa-google-plus-square"></i></a>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="copyrights">
    	<div class="copyrights-left">
        &copy; 2022. All rights reserved.
        </div>
        <div class="copyrights-right">
        	Designed by <a href="http://www.freetimelearning.com" target="_blank">Advera11</a>
        </div>
    </div>
</div>
<!------ End Footer ------->


</div>

</body>
</html>
