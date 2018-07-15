<?php
require 'config.php';
// if(isset($_POST['Username'])){
//session_start();
if(isset($_POST['submit'])){
// var_dump($_POST);

	$Username = $_POST['Username'];
	// echo "$Username";
// }
// if(isset($_POST['Password'])){
	$Password=$_POST['Password'];
// }
// echo "before query";
$query = "SELECT comname,password FROM company WHERE comname='$Username' and password='$Password' ";
// echo "before result";
$result=mysqli_query($connect,$query);
// echo "after result";	
if(mysqli_num_rows($result))
{
	session_start();
	$_SESSION['root']='true';
	$getname=$_POST['Username'];
	$_SESSION['user']=$getname;
	// echo 'to imo';
	header('location:company.php');

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
<form method="post" action="login_company.php">
<h1>LOGIN</h1>

<p>Username</p><input type="text" name="Username"  id="Username" placeholder="......" >
<p>Password</p><input type="password" name="Password" id="Password" placeholder="......" ><br><br>
<input type="submit" value="login"  name='submit'> <br>

<a href="compreg.html" style="text-align: center;">SIGN UP!</a>
</form>

</div>
</body>
</html>