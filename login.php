<?php

$host="localhost:3306";
$user="root";
$password="";
$db="login";
 
$con=mysqli_connect($host,$user,$password);

// Check connection
if (mysqli_connect_errno())
  {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  

mysqli_select_db($con,$db);
 
if(isset($_POST['username'])){
   //header("Location: admin_menu.html");
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from loginform where user='".$uname."'AND Pass='".$password."' limit 1";
    
    $result=mysqli_query($con,$sql);
    //$result1=mysqli_fetch_array($result);
    $result1=mysqli_num_rows($result);
    
    if($result1==1){
        echo " You Have Successfully Logged in";
       header("Location: admin_menu.php");
        exit();
    }
    else{
        
        echo "<script type='text/javascript'>alert(\"You have entered an incorrect username or password\");</script>";
        
    }

}




?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <style type="text/css">
    body{
        margin: 0 auto;
 background-image: url("bg1.jpg");
 background-repeat: no-repeat;
 background-size: 100% 720px;
}
 
.container{
 width: 500px;
 height: 450px;
 text-align: center;
 margin: 0 auto;
 background-color: rgba(44, 62, 80,0.7);
 margin-top: 160px;
}
 
.container img{
 width: 150px;
 height: 150px;
 margin-top: -60px;
}
 
input[type="text"],input[type="password"]{
 margin-top: 30px;
 height: 45px;
 width: 300px;
 font-size: 18px;
 margin-bottom: 20px;
 background-color: #fff;
 padding-left: 40px;
}
 
.form-input::before{
 
 font-family: "FontAwesome";
 padding-left: 07px;
 padding-top: 40px;
 position: absolute;
 font-size: 35px;
 color: #2980b9; 
}
 

 
.btn-login{
 padding: 15px 25px;
 border: none;
 background-color: #27ae60;
 color: #fff;
}
    </style>
</head>
<body>
 <div class="container">
 <img src="avatar.png"/>
 <form method="POST" action="#">
 <div class="form-input">
 <input type="text" name="username" placeholder="Enter the User Name"/> 
 </div>
 <div class="form-input">
 <input type="password" name="password" placeholder="Enter the Password"/>
 </div>
 <input type="submit" name="submit" value="LOGIN" class="btn-login"/>
 </form>
 </div>

</body>
</html>