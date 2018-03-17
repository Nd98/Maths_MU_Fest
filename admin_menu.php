<?php
	$host="localhost:3306";
$user="root";
$password="";
$db="round_intermediate";


 
$con=mysqli_connect($host,$user,$password);

// Check connection
if (mysqli_connect_errno())
  {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  

mysqli_select_db($con,$db);
if(isset($_POST['select-btn'])){
	$select_btn=$_POST['select-btn'];
	$sql="update variables SET id='1' WHERE round='".$select_btn."'";
	mysqli_query($con,$sql);
	header("location: ".$select_btn.".php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<LINK href="w3.css" rel="stylesheet" type="text/css">
	<title>Hello Admin</title>
</head>
<body>
	<center><h2>Rounds</h2>
<form method="POST">
<button class="w3-btn w3-white w3-border w3-border-orange w3-hover-orange w3-ripple" style="width: 80vw; height: 100px" onclick="location.href = 'Round_1.php';" name="select-btn" value="round_1">Round-1</button>
<button class="w3-btn w3-white w3-border w3-border-orange w3-hover-orange w3-ripple" style="width: 80vw; height: 100px" onclick="location.href = 'Round_2.php';" name="select-btn" value="round_2">Round-2</button>
<button class="w3-btn w3-white w3-border w3-border-orange w3-hover-orange w3-ripple" style="width: 80vw; height: 100px" onclick="location.href = 'Round_3.php';" name="select-btn" value="round_2">Round-3</button>
</form>
</center>
</body>
</html>