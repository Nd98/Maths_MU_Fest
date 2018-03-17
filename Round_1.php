
<?php
$host="localhost:3306";
$user="root";
$password="";
$db="questions";


 
$con=mysqli_connect($host,$user,$password);

// Check connection
if (mysqli_connect_errno())
  {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  

mysqli_select_db($con,"round_intermediate");
$temp="select id from variables limit 1";
$temp1=mysqli_fetch_assoc(mysqli_query($con,$temp));
$id=$temp1["id"];
mysqli_select_db($con,$db);


    $sql="select * from round_1 where id='".$id."' limit 1";
    
    $result=mysqli_query($con,$sql);
    $result1=mysqli_num_rows($result);
    $row=mysqli_fetch_assoc($result);
    mysqli_select_db($con,"round_intermediate");
$id=$id+1;
    $sql1="update variables SET id='".$id."' WHERE round='round_1'";
    mysqli_query($con,$sql1);
   
 
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Round 1 Questions Display</title>
	</head>
	<body>
		<p id="question" method="GET">
			<font size="50">
			<?php
			
			echo "" .$row["question"]. "<br>"; 
			?>
		</font>
		</p>
		<p id="option_A" method="GET">
				<font size="50">
					A.
			<?php
			
			echo $row["option_a"]; 
			?>
		</font>
		</p>
		<p id="option_B" method="GET">
						<font size="50">
						B.
			<?php
			
			echo $row["option_b"]; 
			?>
		</font>
		</p>
		<p id="option_C" method="GET">
						<font size="50">
							C.
			<?php
			
			echo $row["option_c"]; 
			?>
		</font>
		</p>
		<p id="option_D" method="GET">
						<font size="50">
							D.
			<?php
			
			echo $row["option_d"]; 
			?>
		</font>
		</p>
		
	</body>
</html>