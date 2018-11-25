<?php
//include auth.php file on all secure pages
include("auth.php");
require('db.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type = "text/javascript">
    </script>
</head>
<div> 
<ul> 
  <li id="align">The Calorie Updater</li> 
  <li><a href="logout.php">Logout</a></li> 
  <li><a>About</a></li>  
  <li><a class="active" href="index.php">Dashboard</a></li>
  <li><a href="login.php">Home</a></li>
</ul>
<div>
<div>
<div class="form">
<p>Welcome <?php echo $_SESSION['username']; ?>!</p> 
<?php  
$var = $_SESSION['username'];
$query = "SELECT * from `registered_users` where username= '$var' ";
$gender = "SELECT gender from `registered_users` where username= '$var' ";

$q = mysqli_query($con, $gender);
$res = mysqli_query($con, $query);

$row = mysqli_fetch_assoc($res);
$h = ($row['height']/100);
$bmi = number_format(($row['weight'])/($h*$h),2);
$qq = mysqli_fetch_assoc($q);
?> 


<h2 style="text-align:center">User Profile Card</h2>

<div class="card">
  <div class="imgcontainer">
<?php 
  if ($qq['gender'] == 'male')
    echo "<img src='img_avatar.png' alt='Image' class='avatar' style='width:60%'>" ;
    
  else
    echo "<img src='img_avatar2.png' alt='Image' class='avatar' style='width:60%'>" ;
 
?>
  </div>
  <h1><?php echo $row['firstname']?> <?php echo $row['lastname']?></h1>
  <p class="title">Age: <?php echo $row['age']?></p> 
  <p class="title">Weight: <?php echo $row['weight']?></p>

  <!--<p id="cvalue">Calorie count: <?php echo $row['calcount']?></p> -->
  <p class="title">BMI index: <?php echo $bmi ?></p>

  <p><button><a style="color: #ffffff" href = "calorie.php">Calorie Consumption</button></a></p>
</div>


</script>

</body>
</html>
 
