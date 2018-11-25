<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="style.css" />
</head>
<body background="wild-sea.png">  
<div> 
<ul> 
  <li id="align">The Calorie Updater</li> 
  <li><a href="logout.php">Logout</a></li>  
  <li><a>About</a></li> 
  <li><a href="index.php">Dashboard</a></li>
  <li><a href="login.php">Home</a></li>
</ul>
<div>

<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$age = $_REQUEST['age'];
    //$age = mysqli_real_escape_string($con,$age);
    $weight = $_REQUEST['weight'];
    $height = $_REQUEST['height'];
    //$gender = $_REQUEST['select'];
    $a = $_POST['select'];
    $password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);

	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `registered_users` (username, password, email, trn_date, age, weight, height ,gender, firstname, lastname )
VALUES ('$username', '".md5($password)."', '$email', '$trn_date', '$age', '$weight', '$height', '$a', '$firstname', '$lastname')";
        $result = mysqli_query($con,$query);
        $query1 = "INSERT into `logged_in users` (username, password) VALUES ('$username', '".md5($password)."')";
        $result1 = mysqli_query($con,$query1);
        if($result and $result1){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{ 

?>
<div class="form">
<h1><font size="10" color="#000000">Registration</font></h1>
<form name="registration" action="" method="post">
<input type="text" name="firstname" placeholder="First Name" required />
<input type="text" name="lastname" placeholder="Last Name" required />
<input type="number" name="age" placeholder="Age" required />
<input type="number" name="weight" placeholder="Weight" required />
<input type="number" name="height" placeholder="Height (in cm)" required /> <br>
<select id="select" name="select">
  <option name="part" value="male">Male</option>
  <option name="part" value="female">Female</option>
</select><br>
<!--<select id="select" name="gender">
<option value="male">Male</option>
<option value="female">Female</option>
</select></br>
-->
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" onclick="" />

</form>
</div>
<?php 
}
?>
</body>
</html>

