<script>
	function c1()
	{
		window.location="./../Wbsource-login/index.php";
	}
	function c()
	{
	alert("login failed");
	window.location="./../Log-in/log.html";	
	}
</script>
<script type="text/javascript">
	history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
</script>
<script type="text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>
<script>
</script>

<?php

$username=$_POST['uname'];
$password=$_POST['password'];
$username = stripcslashes($username);
$password = stripcslashes($password);
$password= sha1($password);
if(empty($username) || empty($password))
{
	echo '<script>alert("Both fields are required")</script>';
}

$con=mysqli_connect("localhost","root","","envirus");

$result = mysqli_query($con," select * from users where username='$username' and password='$password'")
or die("Failed to query database".mysqli_error());
$row=mysqli_fetch_array($result);

if($result>0){
	session_start();
$_SESSION['state']=$row['state'];	
  echo "<script>c1();</script>";
}else{

	$message = "Username and/or Password incorrect.\\nTry again.";
  echo "<script>c();</script>";
}
?>
