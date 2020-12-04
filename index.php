<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
<head>
<style>
 #main{
  background-color: #333;
  width: 400px;
  height: 300px;
  border-radius: 30px;

 }
h2{
	 background-color: black;
	 color: white;
	border-top-right-radius: 30px;
	border-top-left-radius: 30px;
	
}
.text{
	background-color: #333;
	color: white;
	width: 250px:;
	font-weight: bolt;
	font-size: 20px;
	border: none;
	text-align: center;
}
hr{
	width: 250px;
	marign-top: 0px !important;
}
.text:focus{
	outline: none;
}
 #sub{
  background-color: #5f5;
  width: 250px;
  height: 30px;
  border: none;
  
 }
</style>
</head>
   <center>
    <div id="main">
	
	<h2>login form</h2>
	
     	<form method="POST">
		<br>
     	<input type="text" name="username" class="text" autocomplete="off" placeholder="Username"> 
		<br> <hr><br>
        <input type="password" name="password" class="text" placeholder="Password" required> 
		<br><hr>
		<br> <br> 
     	<input type="submit" name="submit" id="sub">
     </form>
	 </div>
	 
	 </center>
</body>
</html>


<?php

 $con=mysqli_connect("localhost","root","","6775342");
 
 if(isset($_POST['submit'])){
	$un=$_POST['username'];
	$pw=$_POST['password'];
	$sql=mysqli_query($con,"select password from user where username='$un'");
	if($row=mysqli_fetch_array($sql)) {
		if ($pw==$row['password']) {
			header("location:home.html");
			exit();
			
	}
	else
	  echo "<script> alert('تێپەرە ووشە هەلەیە')</script>";
	  
}
	else
	 echo "<script> alert('ناوی بەکارهێنەر هەلەیە')</script>";
}
	
?>