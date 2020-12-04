
<?php

  mysql_connect("localhost","root","password");
  mysql_select_db("6775342");

if(isset($_POST['submit'])){
	$un=$_POST['username'];
	$pw=$_POST['password'];
	$sql=mysql_query("select password from user where username='$un'");
	if($row=mysql_fetch_array($sql)) {
		if ($pw==$row['password']) {
			header("location:home.html");
			exit();
			
	}
	else
	  echo "invalid password";
	  
}
	else
	  echo "invalid username";
	  
}
	
?>