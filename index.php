<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Car saloon</title>
<link rel="stylesheet" type="text/css" href="css/Mycss.css">
<!-- Downloaded scripts and styles for registration! -->
  <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
  <link rel="stylesheet" type="text/css" media="all" href="css/progression.min.css">
  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="js/progression.min.js"></script>
</head>
<body>
 <div id="indexw">
  <div id="indexcontent">
  
  <form id="login" mehod="post" action="registration.html">
   <div class="formrow">
    <label>Login:</label>
    <input type="text" name="login" />
    </div>
    
    <div class="formrow">
     <label>Password:</label>
     <input type="password" name="password" />
    </div>
    <div id="indexbtns">
     <input type="button" id="sbmtlgnbtn" name="loginbtn" value="Login" />
     <input type="submit" id="sbmtregbtn" name="submit" value="Register" />
     </div>
    </form>
    </div> <!-- end content -->
    </div> <!-- end indexwrapper -->
<!--<form method="post" action="registration.html">
<p>Login:<input id="logintxt" type="text" name="login" /></p>
<p>Password: <input type="password" name="password"  /></p>
<input type="submit" name="signin" value="Sign In">

	<form>
	<input id="regbtn"type="submit" name="registration" value="Registration" />
	</form>

</form>
</div>-->
</body>
</html>
<?php
if (isset($_POST['signin'])){
header("location:logincheck.php");
}
?>