<?php
$host="localhost:3306";
$user="root";
$password="";
$db="round_1";
 
$con=mysqli_connect($host,$user,$password);
if (mysqli_connect_errno())
  {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  

mysqli_select_db($con,$db);

function checkNull($ans1){
	if(is_null($ans1)){

		echo "0";
	}
	else{
		echo $ans1["marks"];
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Scorecard</title>
	<link rel="stylesheet" href="assets/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
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
	
    <div class="container"><hr>

  <div class="row">
  	<font size="4">
                <div class="col-lg-18 text-center">
                    <h2 class="section-heading" style="color: #fff">Scorecard:</h2>
                </div>
            </div><hr>
    <table class="table table-bordered" style="color: #fff" >
	               <thead>   
                    <tr>
                    <th style="text-align:center;">Team Name</th>
                    <th style="text-align:center;">Question 1</th>
                    <th style="text-align:center;">Question 2</th>
                    <th style="text-align:center;">Question 3</th>
                    <th style="text-align:center;">Question 4</th>
                    <th style="text-align:center;">Question 5</th>
                    <th style="text-align:center;">Total Marks</th>
                  </thead>
      <tbody>


	<tr>
		<td>Team 1</td>
		<td><?php 
		$sql="select marks from team_1 where round='sub_round_1.1' AND question_id=1"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?></td>
		<td>
			<?php 
		$sql="select marks from team_1 where round='sub_round_1.1' AND question_id=2"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
		<td>
			<?php 
		$sql="select marks from team_1 where round='sub_round_1.1' AND question_id=3"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
		<td>
			<?php 
		$sql="select marks from team_1 where round='sub_round_1.1' AND question_id=4"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
		<td>
			<?php 
		$sql="select marks from team_1 where round='sub_round_1.1' AND question_id=5"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
		<td id="sum1">
			<?php
		$sql="select SUM(marks) from team_1 where round='sub_round_1.1'"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		echo $ans1["SUM(marks)"];
			?>
		</td>
	</tr>
	<tr>
		<td>Team 2</td>
		<td><?php 
		$sql="select marks from team_2 where round='sub_round_1.1' AND question_id=1"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?></td>
		<td>
			<?php 
		$sql="select marks from team_2 where round='sub_round_1.1' AND question_id=2"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
		<td>
			<?php 
		$sql="select marks from team_2 where round='sub_round_1.1' AND question_id=3"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
		<td>
			<?php 
		$sql="select marks from team_2 where round='sub_round_1.1' AND question_id=4"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
		<td>
			<?php 
		$sql="select marks from team_2 where round='sub_round_1.1' AND question_id=5"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
			<td id="sum2">
			<?php
		$sql="select SUM(marks) from team_2 where round='sub_round_1.1'"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		echo $ans1["SUM(marks)"];
			?>
		</td>
	</tr>
		<tr>
		<td>Team 3</td>
		<td><?php 
		$sql="select marks from team_3 where round='sub_round_1.1' AND question_id=1"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?></td>
		<td>
			<?php 
		$sql="select marks from team_3 where round='sub_round_1.1' AND question_id=2"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
		<td>
			<?php 
		$sql="select marks from team_3 where round='sub_round_1.1' AND question_id=3"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
		<td>
			<?php 
		$sql="select marks from team_3 where round='sub_round_1.1' AND question_id=4"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
		<td>
			<?php 
		$sql="select marks from team_3 where round='sub_round_1.1' AND question_id=5"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
						<td id="sum3">
			<?php
		$sql="select SUM(marks) from team_3 where round='sub_round_1.1'"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		echo $ans1["SUM(marks)"];
			?>
		</td>
	</tr>
		<tr>
		<td>Team 4</td>
		<td><?php 
		$sql="select marks from team_4 where round='sub_round_1.1' AND question_id=1"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?></td>
		<td>
			<?php 
		$sql="select marks from team_4 where round='sub_round_1.1' AND question_id=2"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
		<td>
			<?php 
		$sql="select marks from team_4 where round='sub_round_1.1' AND question_id=3"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
		<td>
			<?php 
		$sql="select marks from team_4 where round='sub_round_1.1' AND question_id=4"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
		<td>
			<?php 
		$sql="select marks from team_4 where round='sub_round_1.1' AND question_id=5"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
				<td id="sum4">
			<?php
		$sql="select SUM(marks) from team_4 where round='sub_round_1.1'"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		echo $ans1["SUM(marks)"];
			?>
		</td>
	</tr>
		<tr>
		<td>Team 5</td>
		<td><?php 
		$sql="select marks from team_5 where round='sub_round_1.1' AND question_id=1"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?></td>
		<td>
			<?php 
		$sql="select marks from team_5 where round='sub_round_1.1' AND question_id=2"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
		<td>
			<?php 
		$sql="select marks from team_5 where round='sub_round_1.1' AND question_id=3"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
		<td>
			<?php 
		$sql="select marks from team_5 where round='sub_round_1.1' AND question_id=4"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
		<td>
			<?php 
		$sql="select marks from team_5 where round='sub_round_1.1' AND question_id=5"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
				<td id="sum5">
			<?php
		$sql="select SUM(marks) from team_5 where round='sub_round_1.1'"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		echo $ans1["SUM(marks)"];
			?>
		</td>
	</tr>
		<tr>
		<td>Team 6</td>
		<td><?php 
		$sql="select marks from team_6 where round='sub_round_1.1' AND question_id=1"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?></td>
		<td>
			<?php 
		$sql="select marks from team_6 where round='sub_round_1.1' AND question_id=2"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
		<td>
			<?php 
		$sql="select marks from team_6 where round='sub_round_1.1' AND question_id=3"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
		<td>
			<?php 
		$sql="select marks from team_6 where round='sub_round_1.1' AND question_id=4"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
		<td>
			<?php 
		$sql="select marks from team_6 where round='sub_round_1.1' AND question_id=5"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
				<td id="sum6">
			<?php
		$sql="select SUM(marks) from team_6 where round='sub_round_1.1'"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		echo $ans1["SUM(marks)"];
			?>
		</td>
	</tr>
		<tr>
		<td>Team 7</td>
		<td><?php 
		$sql="select marks from team_7 where round='sub_round_1.1' AND question_id=1"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?></td>
		<td>
			<?php 
		$sql="select marks from team_7 where round='sub_round_1.1' AND question_id=2"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
		<td>
			<?php 
		$sql="select marks from team_7 where round='sub_round_1.1' AND question_id=3"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
		<td>
			<?php 
		$sql="select marks from team_7 where round='sub_round_1.1' AND question_id=4"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
		<td>
			<?php 
		$sql="select marks from team_7 where round='sub_round_1.1' AND question_id=5"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
				<td id="sum7">
			<?php
		$sql="select SUM(marks) from team_7 where round='sub_round_1.1'"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		echo $ans1["SUM(marks)"];
			?>
		</td>
	</tr>
	<tr>
		<td>Team 8</td>
		<td><?php 
		$sql="select marks from team_8 where round='sub_round_1.1' AND question_id=1"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?></td>
		<td>
			<?php 
		$sql="select marks from team_8 where round='sub_round_1.1' AND question_id=2"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
		<td>
			<?php 
		$sql="select marks from team_8 where round='sub_round_1.1' AND question_id=3"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
		<td>
			<?php 
		$sql="select marks from team_8 where round='sub_round_1.1' AND question_id=4"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
		<td>
			<?php 
		$sql="select marks from team_8 where round='sub_round_1.1' AND question_id=5"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
				<td id="sum8">
			<?php
		$sql="select SUM(marks) from team_8 where round='sub_round_1.1'"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		echo $ans1["SUM(marks)"];
			?>
		</td>
	</tr>
	<tr>
		<td>Team 9</td>
		<td><?php 
		$sql="select marks from team_9 where round='sub_round_1.1' AND question_id=1"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?></td>
		<td>
			<?php 
		$sql="select marks from team_9 where round='sub_round_1.1' AND question_id=2"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
		<td>
			<?php 
		$sql="select marks from team_9 where round='sub_round_1.1' AND question_id=3"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
		<td>
			<?php 
		$sql="select marks from team_9 where round='sub_round_1.1' AND question_id=4"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
		<td>
			<?php 
		$sql="select marks from team_9 where round='sub_round_1.1' AND question_id=5"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
				<td id="sum9">
			<?php
		$sql="select SUM(marks) from team_9 where round='sub_round_1.1'"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		echo $ans1["SUM(marks)"];
			?>
		</td>
	</tr>
	<tr>
		<td>Team 10</td>
		<td><?php 
		$sql="select marks from team_10 where round='sub_round_1.1' AND question_id=1"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?></td>
		<td>
			<?php 
		$sql="select marks from team_10 where round='sub_round_1.1' AND question_id=2"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
		<td>
			<?php 
		$sql="select marks from team_10 where round='sub_round_1.1' AND question_id=3"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
		<td>
			<?php 
		$sql="select marks from team_10 where round='sub_round_1.1' AND question_id=4"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
		<td>
			<?php 
		$sql="select marks from team_10 where round='sub_round_1.1' AND question_id=5"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
				<td id="sum10">
			<?php
		$sql="select SUM(marks) from team_10 where round='sub_round_1.1'"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		echo $ans1["SUM(marks)"];
			?>
		</td>
	</tr>
		<tr>
		<td>Team 11</td>
		<td><?php 
		$sql="select marks from team_11 where round='sub_round_1.1' AND question_id=1"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?></td>
		<td>
			<?php 
		$sql="select marks from team_11 where round='sub_round_1.1' AND question_id=2"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
		<td>
			<?php 
		$sql="select marks from team_11 where round='sub_round_1.1' AND question_id=3"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
		<td>
			<?php 
		$sql="select marks from team_11 where round='sub_round_1.1' AND question_id=4"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
		<td>
			<?php 
		$sql="select marks from team_11 where round='sub_round_1.1' AND question_id=5"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		checkNull($ans1);
		?>
		</td>
				<td id="sum10">
			<?php
		$sql="select SUM(marks) from team_11 where round='sub_round_1.1'"; 
		$ans1=mysqli_fetch_assoc(mysqli_query($con,$sql));
		echo $ans1["SUM(marks)"];
			?>
		</td>
	</tr>


	


</table>
<center>
<input id="Next Round" type="button" value="Next Sub Round" name="Next Round" onclick="location.href ='Round_1.php'"></center>
<script type="text/javascript">

	
</script>
</body>
</html>