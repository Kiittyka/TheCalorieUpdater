<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<ul> 
  <li id="align">The Calorie Updater</li> 
  <li><a href="logout.php">Logout</a></li> 
  <li><a>About</a></li>
  <li><a href="index.php">Dashboard</a></li>
  <li><a class="active">Home</a></li>
</ul>
<div>
<div class="main">
<div class="left">
<h3>Welcome to Calorie Counter</h3>
<p class="info">Maintaining a good level of physical fitness is something that we should all aspire to do.Along with daily exercise,cutting down calories is also important.So here we have 'The calorie updater' which keeps track of the calories consumed and notifies the users being a boon to all the calorie conscious people out there.Stick on to us,cause being fit is a journey,not a destination.Thank you!</p>
</div>
<div> 
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `logged_in users` WHERE username='$username'
and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: index.php");
         }else{
	echo "<div class='right'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>
<div class="right">
<div class="form">
<h1><font size="10" color="#000000">Log In</font></h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
</div>
</div>
</div>
<?php } ?>
</body>
</html>