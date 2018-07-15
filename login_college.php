<?php
require 'config.php';
// if(isset($_POST['Username'])){
if(isset($_POST['submit'])){
// var_dump($_POST);

	$Username = $_POST['Username'];
	// echo "$Username";
// }
// if(isset($_POST['Password'])){
	$Password=$_POST['Password'];
// }

$query = "SELECT * FROM college WHERE ccname='$Username' and password='$Password' ";

$result=mysqli_query($connect,$query);	
// echo "in result";
if(mysqli_num_rows($result))
{
	session_start();
	$_SESSION['root']='true';
	$getname=$_POST['Username'];
	$_SESSION['user']=$getname;
	header('location:main_college.php');
}
else
{
	echo 'enter correct username and password';
}
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="login_style.css">
<head>
<body>
<div class="loginbox">

<img src="logo.png" height="100" width="100" class="logo">
<form method="post" action="login_college.php">
<h1>LOGIN</h1>
<p>username</p><input type="text" name="Username"  id="Username" placeholder="......" >
<p>password</p><input type="password" name="Password" id="Password" placeholder="......" ><br><br>
<input type="submit" value="login" name='submit' > <br>
<a href="collegereg.html">SIGN UP!</a>
</form>

</div>
</body>
</html>