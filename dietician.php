<?php
include('auth.php');
require('db.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome Home</title>
<link rel="stylesheet" href="style.css" />
<
<body>
<div> 
<ul> 
  <li id="align">The Calorie Updater</li> 
  <li><a href="logout.php">Logout</a></li> 
  <li><a>About</a></li>  
  <li><a class="active" href="index.php">Dashboard</a></li>
  <li><a href="login.php">Home</a></li>
</ul>
<div>
<?php
$sql = "SELECT dietician_name,phone FROM dieticians";
$result = mysqli_query($con, $sql);
?>
<table id = "dieticians" >
      <thead>
        <tr>
          <th>Dietician Name</th>
          <th>Contact Number</th>
        </tr>
      </thead>
      <tbody>
  <?php //if ($result->num_rows > 0) {
          while( $row = mysqli_fetch_assoc($result) ){
            echo
            "<tr>
              <td>{$row['dietician_name']}</td>
              <td>{$row['phone']}</td>
            </tr>\n";
          }
    ?>
      </tbody>
    </table>
</body>
</html>
