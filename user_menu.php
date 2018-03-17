<?php
	$host="localhost:3306";
$user="root";
$password="";
//dynamic changes


$team_name="team_1";
$marks="10";

$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,"round_intermediate");
$temp="select * from variables limit 1";
$temp1=mysqli_fetch_assoc(mysqli_query($con,$temp));
$id=$temp1["id"]-1;
$round=$temp1["round"];
$db=$temp1["round"];
mysqli_select_db($con,$db);

// Check connection
if (mysqli_connect_errno())
  {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
mysqli_select_db($con,"questions");
$query="select correct_answer from ".$round." where id='".$id."' "; //fetching correct answer
$ans=mysqli_fetch_assoc(mysqli_query($con,$query));
//echo $ans["correct_answer"];
mysqli_select_db($con,$db);
 
if(isset($_POST['select_btn'])){
   //header("Location: admin_menu.html");
    
    $select_btn=$_POST['select_btn'];
    //echo $select_btn;

    
    if($select_btn==$ans["correct_answer"]) //comparing answer
    {
    $sql="insert into ".$team_name."  (`question_id`, `provided_answer`, `marks`) VALUES ('".$id."', '".$select_btn."', '".$marks."');";
    mysqli_query($con,$sql);
	}

	else{
	$sql="insert into ".$team_name."  (`question_id`, `provided_answer`, `marks`) VALUES ('".$id."', '".$select_btn."', '0');";
	mysqli_query($con,$sql);
	}
    header("Location: user_menu.php");
  

}

?>
<!DOCTYPE html>
<html>
<head>
	<LINK href="w3.css" rel="stylesheet" type="text/css">
	<title>
		Hello Teams!!
	</title>
</head>
<body>
<center>
	<h2>
	Display Question No.
	<?php
	//variable for interconnection
	echo $id;
	?>
	</h2>
	<form method="POST">
<button class="w3-btn w3-white w3-border w3-border-orange w3-hover-orange w3-ripple" style="width: 80vw; height: 100px;vertical-align: 50" onclick="location.href = 'user_menu.php';" name="select_btn" value="a">A</button>
<button class="w3-btn w3-white w3-border w3-border-orange w3-hover-orange w3-ripple" style="width: 80vw; height: 100px;vertical-align: 50" onclick="location.href = 'user_menu.php';" name="select_btn" value="b">B</button>
<button class="w3-btn w3-white w3-border w3-border-orange w3-hover-orange w3-ripple" style="width: 80vw; height: 100px;vertical-align: 50" onclick="location.href = 'user_menu.php';" name="select_btn" value="c">C</button>
<button class="w3-btn w3-white w3-border w3-border-orange w3-hover-orange w3-ripple" style="width: 80vw; height: 100px;vertical-align: 50" onclick="location.href = 'user_menu.php';" name="select_btn" value="d">D</button>
</form>
</center>
</body>
</html>