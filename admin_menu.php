<?php

if(isset($_POST['select-btn'])){
	$select_btn=$_POST['select-btn'];
	header("location: ".$select_btn.".php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>ROUND </title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
     <script src="assets/js/jquery.js"></script>
    <link rel="stylesheet" href="assets/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
      <style type="text/css">
    body{
        margin: 0 auto;
 background-image: url("bg1.jpg");
 background-repeat: no-repeat;
 background-size: 100% 720px;
}
</style>

</head>
<body>

        <div class="container"><hr>
            <div class="row">
                <div class="col-lg-18 text-center">
                    <h2 class="section-heading" style="color: #fff">ROUND EMC2</h2>
                    <h3 class="section-subheading text-muted" style="color: #000">Our Amazing Team</h3>
                </div>
            </div><hr>
            <br>

            <div class="row">
                <div class="col-sm-10">
                    <div class="team-member">
                        <img src="img1.jpg" style="width: 500px; height: 140px"  align="right" onclick="location.href = 'Round_1.php';" name="select-btn" value="round_2"">
                    </div>

                </div>
                <br>
                <br>
                <br>
                <br>
                <div class="col-sm-10">
                    <br>
            
                    <div class="team-member">
                        <img src="img2.jpg" style="width: 500px; height: 140px"  align="right" onclick="location.href = 'Round_2.php';" name="select-btn" value="round_2"">
                       
                    </div>

                </div>
                <br>
                <br>
                <br>
                <div class="col-sm-10">
                    <br>
                    <div class="team-member">
                        <img src="img3.jpg" align="right" style="width: 500px; height: 140px" onclick="location.href = 'scorecard_round_3.xlsx';" name="select-btn" value="round_2">
                        
                    </div>
                </div>
            </div>

    </body>
    </html>