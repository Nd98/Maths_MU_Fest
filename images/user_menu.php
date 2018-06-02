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
	$sql="insert into ".$team_name."  (`question_id`,`round`, `provided_answer`, `marks`) VALUES ('".$id."','".$round."', '".$select_btn."', '0')";
	mysqli_query($con,$sql);
	}
    header("Location: user_menu.php?id=".$team_id);
  

}

?>

<!DOCTYPE html>
<html>
<head>
  <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    
    <script src="assets/js/init.js"></script>
    <noscript>
      
      <link rel="stylesheet" href="assets/css/style.css" />
      <link rel="stylesheet" href="assets/css/style-xlarge.css" />
    </noscript>
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
      </font>
                      <font size="3">
          <ul>
            <li><a href="user_menu.php" class="button big alt" style="color: orange">A</a></li>
          </ul>

          <ul>
            <li><a href="user_menu.php" class="button big alt" style= "background-color:orange;">B</a></li>
          </ul>

          <ul>
            <li><a href="user_menu.php"  class="button big alt" style= "background-color:orange;">C</a></li>
          </ul>

          <ul>
            <li><a href="user_menu.php" class="button big alt" style= "background-color:orange  ;" >D</a></li>
          </ul>
        </div>
      </section>
           </center>
  </body>
  </html>

