<?php
require ('config.php');

$Username = $_POST['Username'];
$Password=md5($_POST['Password']);
$query = "SELECT Username,Password FROM users WHERE Username='$Username' and Password='$Password' ";
$result=mysqli_query($conn,$query);	
if(mysqli_num_rows($result))
{
	session_start();
	$_SESSION['root']='true';
	$getname=$_POST['Username'];
	$_SESSION['user']=$getname;
	header('location:testing.php');
}
else
{
	echo 'enter correct username and password';
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
body
{
	margin: 0;
	padding: 0;
	background: url(ba.gif);
	background-size: cover;
	font-family: sans-serif;
}
.loginbox
{
	position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
border-radius: 15px;
width: 350px;
height: 480px;
padding: 80px 40px;
box-sizing: border-box;
background: rgba(0,0,0,.5);
}
.loginbox p
{
margin: 0;
padding: 0;
font-weight: bold;
color: #fff;
}
.loginbox input
{
width: 100%;
margin-bottom: 20px;
}
.loginbox input[type="text"],
.loginbox input[type="password"]
{
border: none;
cursor:pointer;
border-bottom: 1px solid #fff;
background: transparent;
outline: none;
height: 40px;
color: #fff;
font-size: 16px;
}
::placeholder
{

color:rgba(255,255,255,.5);
}
.loginbox input[type="button"]
{
border: none;
border-bottom: 1px solid blue;
background: blue;
outline: none;
height: 40px;
color: #fff;
font-size: 16px;
cursor: pointer;
border-radius: 20px;
}

p
{
color: red;
}
h1{
    text-align: center;
color: red;
margin: 0;
padding: 0 0 20px;
}
a
{
text-align: center;
color: white;
font-size: 16px;
}
.logo
{
width: 100px;
height: 100px;
border-radius: 50%;
overflow: hidden;
position: absolute;
top: calc(-100px/2);
left: calc(50% - 50px);
</style>
<head>
<body>
<div class="loginbox">

<img src="logo.png" height="100" width="100" class="logo">
<form method="post">
<h1>LOGIN</h1>
<p>username</p><input type="text" name="Username" placeholder="......" >
<p>password</p><input type="password" name="Password" placeholder="......" ><br><br>
<input type="submit" value="login"> <br>
<a href="register.php">SIGN UP!</a>
</form>

</div>
</body>
</html>