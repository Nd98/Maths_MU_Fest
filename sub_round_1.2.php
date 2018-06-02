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
$temp="select id from variables where round='sub_round_1.2'";
$temp1=mysqli_fetch_assoc(mysqli_query($con,$temp));
$id=$temp1["id"];
mysqli_select_db($con,$db);


    $sql="select * from `sub_round_1.2` where id='".$id."' limit 1";
    $result=mysqli_query($con,$sql);
    $result1=mysqli_num_rows($result);
    $row=mysqli_fetch_assoc($result);
    if(is_null($row["id"])){
    	header("Location: scorecard_round_1.2.php");
    	exit();
    }
    else{
    mysqli_select_db($con,"round_intermediate");
$id=$id+1;
    $sql1="update variables SET id='".$id."' WHERE round='sub_round_1.2'";
    mysqli_query($con,$sql1);
   }
 
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Round 1 Questions Display</title>
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="assets/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
	<title>Hello Admin</title>
	<style type="text/css">
    body{
        margin: 0 auto;
 background-image: url("bg1.jpg");
 background-repeat: no-repeat;
 background-size: 100% 1080px;
}
</style>
	</head>
	<body>

<br>
    <div class="container"><hr>

    	<div style="background-color: #1170ac">

  <div class="row">
                <div class="col-lg-18 text-center">
                    <h2 class="section-heading" style="color: #fff">ROUND 1</h2>
                    <h3 class="section-subheading text-muted" style="color: #000"><span id="question" method="GET">
			               <font size="1">
					
					<h2 style= "color:#fff;">
		Question No. <?php echo "" .$row["id"]. "<br>"?>
		</h3>


                </div>
            </div>
             </div></h2>
            <hr>
            <font size="10" color="white">
		    <p id="timer" align="right" >
			Timer
		</p>
	</font>
            <div style="color: #fff;">
          <center>
            <p id="question" method="GET">
			<font size="50">
			<?php
			
			echo "" .$row["question"]. "<br>";
			
			if(!is_null($row["image"])){
				//$path=base_url($row["image"]);
				echo '<img src="'.$row["image"].'"alt="" >';
			} 
			?>

		</font>
		</p>
	<br><br><br>
		</div>
		<div style="color:#fff;">
		<center>
						
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
		

		</center>
	</div></center>
</div>

<script>


var answer= 35;

// Update the count down every 1 second
var x = setInterval(function() {
    timer-= 1;
    answer-=1;
    var distance = answer;
    
    // Output the result in an element with id="demo"
    if(answer>0)
    	document.getElementById("timer").innerHTML = answer;
    
    // If the count down is over, write some text 
  
    else if(distance < 0){
    	clearInterval(x);
    	alert("Teams!! Get Ready to Refresh The Page");
    	location.reload(true);
    }
}, 1000);
</script>

	</body>
</html>