<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Select Your Team ID</title>
	<script type="text/javascript">
		function append(){
			var link = document.getElementById('link');
			var text = document.getElementById('id');
			link.href = "user_menu.php?id="+ text.value;
			link.hidden=false;
		}
	</script>

	<!-- Custom Styles -->
			<link href="assets/css/style.css" rel="stylesheet">
	<!-- Bootstrap  -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

   	<section id="page-top" class="section-style" data-background-image="images/background/page-top.jpg">
		
		<div class="pattern height-resize">
			<br><br><br><br>

			<div class="container">
				<h1 class="site-title">
				<span style="color:#ffffff;">

				   Enter your Team ID
				</span>
				</h1><!-- /.site-title -->
				<h3 class="section-name">


				<center>
	<form  method="GET">
		<span style="color:#ffffff;">
<h2></h2>
Team ID: <input id="id" type="text" name="id" style="color: #000;" placeholder="Your ID" required>

</span>
<br>
<span>
</span>

<a id="link" href="">
<input id="submit" type="button" name="submit" value="OK" onclick="append();" style="width: 70px">
</a>
</form> 

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</center>
</h3>
</div>
</div>
</section><!-- jQuery Library -->
		<script type="text/javascript" src="assets/js/jquery-2.1.0.min.js"></script>
		<!-- Modernizr js -->
		<script type="text/javascript" src="assets/js/modernizr-2.8.0.min.js"></script>
		<!-- Plugins -->
		<script type="text/javascript" src="assets/js/plugins.js"></script>
		<!-- Custom JavaScript Functions -->
		<script type="text/javascript" src="assets/js/functions.js"></script>
		<!-- Custom JavaScript Functions -->
		<script type="text/javascript" src="assets/js/jquery.ajaxchimp.min.js"></script>

</body>
</html>