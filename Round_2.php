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
	$temp="truncate table variables";
	mysqli_query($con,$temp);
	$sql="insert into variables  (`id`,`round`) VALUES ('1','".$select_btn."')";
	mysqli_query($con,$sql);
	echo $select_btn;
	header("location: ".$select_btn.".php");
}
?>




<!DOCTYPE html>
<html>
<head>
	<LINK href="w3.css" rel="stylesheet" type="text/css">

     <link rel="stylesheet" href="assets/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
	<title>Hello Admin</title>
	<style type="text/css">
    body{
        margin: 0 auto;
 background-image: url("bg1.jpg");
 background-repeat: no-repeat;
 background-size: 100% 750px;
}
</style>
</head>
<body>
<br>
    <div class="container"><hr>

  <div class="row">
                <div class="col-lg-18 text-center">
                    <h2 class="section-heading" style="color: #fff">SUB_ROUND:</h2>
                    <h3 class="section-subheading text-muted" style="color: #000">Select  Round</h3>
                </div>
            </div><hr>
	<center><br><br><br>
<form method="POST">

<button class="w3-btn w3-white w3-border w3-border-orange w3-hover-orange w3-ripple" style="width: 70vw; height: 100px" onclick="location.href = 'sub_round_2.1.php';" name="select-btn" value="sub_round_2.1">Sub_Round_1</button>

<br><br>
<button class="w3-btn w3-white w3-border w3-border-orange w3-hover-orange w3-ripple" style="width: 70vw; height: 100px" onclick="location.href = 'sub_round_2.2.php';" name="select-btn" value="sub_round_2.2">Sub_Round_2</button>

<br><br>
<button class="w3-btn w3-white w3-border w3-border-orange w3-hover-orange w3-ripple" style="width: 70vw; height: 100px" onclick="location.href = 'sub_round_2.3.php';" name="select-btn" value="sub_round_2.3">Sub_Round_3</button>
</form>
</center>
</div>
</body>
</html> 