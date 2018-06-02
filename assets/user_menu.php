<?php

session_start();
	$host="localhost:3306";
$user="root";
$password="";
//dynamic changes

$team_id=$_GET['id'];

$team_name="team_".$team_id;

$marks="10";

$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,"round_intermediate");
$temp="select * from variables limit 1";
$temp1=mysqli_fetch_assoc(mysqli_query($con,$temp));
$id=$temp1["id"]-1;
$round=$temp1["round"];
$db=substr($temp1["round"],4,7);

mysqli_select_db($con,$db);

// Check connection
if (mysqli_connect_errno())
  {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
mysqli_select_db($con,"questions");
$query="select correct_answer from `".$round."` where id='".$id."' "; //fetching correct answer
$ans=mysqli_fetch_assoc(mysqli_query($con,$query));
//echo $ans["correct_answer"];
mysqli_select_db($con,$db);
 
if(isset($_POST['select_btn'])){
   //header("Location: admin_menu.html");
    
    $select_btn=$_POST['select_btn'];
    //echo $select_btn;

    
    if($select_btn==$ans["correct_answer"]) //comparing answer
    {
    $sql="insert into ".$team_name."  (`question_id`,`round`, `provided_answer`, `marks`) VALUES ('".$id."','".$round."', '".$select_btn."', '".$marks."')";
    echo $sql;
    mysqli_query($con,$sql);
	}

	else{
	$sql="insert into ".$team_name."  (`question_id`,`round`, `provided_answer`, `marks`) VALUES ('".$id."','".$round."', '".$select_btn."', '-10')";
	mysqli_query($con,$sql);
	}
    header("Location: user_menu.php?id=".$team_id);
  

}

?>
<!DOCTYPE html>
<html>
<head>

	<title>
		Hello Teams!!
	</title>
	<link rel="stylesheet" type="text/css" href="w3.css">
</head>
    <style type="text/css">
    body{
        margin: 0 auto;
 background-image: url("images/a3.jpg");
 background-repeat: no-repeat;
 background-size: 100% 720px;
 
}
</style>
  </head>
  <body style="color: #fff;" >

       <center>
      <section id="banner">
        <div class="inner">


                  <div class="container"><hr>
        <h2 class="site-title" style= "color:#fff;">
           ROUND 1
        </h2>
        <hr>
        <h3 class="section-name">
          
          <span id="question" method="GET">
                     <font size="1">
          
          <h3 style= "color:#fff;">
          Display Question No.
          <?php
          //variable for interconnection
          echo $id;
          ?>
          
        </h3>
	<form method="POST">
<button id="options" class="w3-btn w3-white w3-border w3-border-orange w3-hover-orange w3-ripple" style="width: 80vw; height: 100px;vertical-align: 50" onclick="location.href = 'user_menu.php';" name="select_btn" value="a" >A</button>
<button id="options" class="w3-btn w3-white w3-border w3-border-orange w3-hover-orange w3-ripple" style="width: 80vw; height: 100px;vertical-align: 50" onclick="location.href = 'user_menu.php';" name="select_btn" value="b" >B</button>
<button id="options" class="w3-btn w3-white w3-border w3-border-orange w3-hover-orange w3-ripple" style="width: 80vw; height: 100px;vertical-align: 50" onclick="location.href = 'user_menu.php';" name="select_btn" value="c" >C</button>
<button id="options" class="w3-btn w3-white w3-border w3-border-orange w3-hover-orange w3-ripple" style="width: 80vw; height: 100px;vertical-align: 50" onclick="location.href = 'user_menu.php';" name="select_btn" value="d" >D</button>
</form>
</center>
</body>
</html>