<script>
	function c2()
	{
		window.location="./../Wbsource-login/index.php";
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
	function c1() {
		alert("Invalid Details");
		window.location= "log.html";
	}
</script>


<?php
$con=mysqli_connect("localhost","root","","envirus");

$first_name=mysqli_real_escape_string($con,$_POST['fname']);
$last_name=mysqli_real_escape_string($con,$_POST['lname']);
$username=mysqli_real_escape_string($con,$_POST['uname']);
$state=mysqli_real_escape_string($con,$_POST['state']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$phone=mysqli_real_escape_string($con,$_POST['phone']);
$age=mysqli_real_escape_string($con,$_POST['age']);

if (!preg_match("/^[a-zA-Z ]*$/",$first_name)) {
	echo "<script>c1();</script>";
  }
if (!preg_match("/^[a-zA-Z ]*$/",$last_name)) {
	echo "<script>c1();</script>";
  }
if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
	echo "<script>c1();</script>";
  }
if (!preg_match("/^[a-zA-Z ]*$/",$state)) {
	echo "<script>c1();</script>";
  }
if (!preg_match("/^[a-zA-Z ]*$/",$password)) {
	echo "<script>c1();</script>";
  }
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	echo "<script>c1();</script>";
  }
if (!preg_match("/^[0-9]*$/",$phone)) {
	echo "<script>c1();</script>";
  }
if (!preg_match("/^[0-9]*$/",$age)) {
	echo "<script>c1();</script>";
  }
  $password = sha1($password);
$sql = "INSERT INTO users (first_name, last_name, username, email,state,phone,age,password) VALUES ('$first_name', '$last_name','$username','$email','$state','$phone','$age','$password')";
session_start();
$_SESSION['state']=$state;
if(mysqli_query($con, $sql)){
    echo "<script>c2();</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}


?>