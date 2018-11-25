<html>
<head>
<title>Calorie Consumption</title>
<link rel="stylesheet" href="style.css" />
<body background="wild-sea.png">
<div> 
<ul> 
  <li id="align">The Calorie Updater</li> 
  <li><a href="logout.php">Logout</a></li>  
  <li><a>About</a></li> 
  <li><a class ="active" href="index.php">Dashboard</a></li>
  <li><a href="login.php">Home</a></li>
</ul>

<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET","retrieve.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>
<div class="qq">
<form>
<select id = "select" name="users" onchange="showUser(this.value)">
  <option value="">Breakfast</option>
  <option value="Idli">Idli</option>
  <option value="Dosa">Dosa</option>
  <option value="Vada">Vada</option>
  <option value="Upma">Upma</option>
  </select>
</form>
<form>
<select id = "select" name="users" onchange="showUser(this.value)">
  <option value="">Lunch</option>
  <option value="Idli">Salad</option>
  <option value="Rice">Rice</option>
  <option value="Roti">Roti</option>
  <option value="Noodles">Noodles</option>
  </select>
</form>
<form>
  <select id = "select" name="users" onchange="showUser(this.value)">
  <option value="">Beverages</option>
  <option value="Coffee">Coffee</option>
  <option value="Tea">Tea</option>
  </select>
</form>
<form>
  <select id = "select" name="users" onchange="showUser(this.value)">
  <option value="">Dinner</option>
  <option value="Rice">Rice</option>
  <option value="Roti">Roti</option>
  <option value="Soup">Soup</option>
  <option value="Salad">Salad</option>
  </select>
</form>
<div id="txtHint"></div>
<?php
session_start();
$cal = 800;
$_SESSION['calorie'] = $cal;
echo "Calorie limit:".$cal;
$cal = $_SESSION['calorie'];
?>
<button style="margin-top: 25px">
<a style="color: #ffffff" href="dietician.php">Recommended Dieticians</a></button>
</div>
</body>
</html>
