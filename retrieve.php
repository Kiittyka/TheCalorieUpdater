<html>
<head>
<?php
session_start();
$q = strval($_GET['q']);
$con = mysqli_connect('localhost','root','','calorie_updater');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
$sql="SELECT calories FROM `foodcal` WHERE food = '".$q."'";
$result = mysqli_query($con,$sql);
$q = mysqli_query($con, $sql);
$qq = mysqli_fetch_assoc($q);
$cal = $_SESSION['calorie'];
echo "Calorie count:";
$cal = $cal-$qq['calories'];
echo $cal;
$_SESSION['calorie'] = $cal;
if($cal <=0){
		$var = $_SESSION['username'];
		$email = "SELECT email from `registered_users` where username= '$var'";
		$q = mysqli_query($con, $email);
		$qq = mysqli_fetch_assoc($q); 
	/*$email_to = $qq['email'];
	$email_subject = "Notification";
	$email_message = "The calorie count for this day has exceeded.Stay fit.Have a nice day!";
	$headers = "From: The Calorie Updater Team\r\n".
	"Reply-To: address@gmail.com\r\n'" .
	"X-Mailer: PHP/" . phpversion();
	mail($email_to, $email_subject, $email_message, $headers);  */
	echo "\n<br>The calorie count for this day has exceeded.";
}
mysqli_close($con);
?>
</body>
</html>