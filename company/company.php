<?php
require_once('connect1.php');
global $comname;
global $name;
global $phone;
global $email;
global $address;
global $password;
global $conpass;

if (isset($_POST['comname'])) {
	$name = $_POST['comname'];
}
if (isset($_POST['name'])) {
   $age = $_POST['name'];
}
if (isset($_POST['phone'])) {
    $phone = $_POST['phone']; 
}
if (isset($_POST['email'])) {
   $email = $_POST['email'];
}
if (isset($_POST['address'])) {
   $email = $_POST['address'];
   }
   if (isset($_POST['password'])) {
    $phone = $_POST['password']; 
}
  if (isset($_POST['conpass'])) {
    $phone = $_POST['conpass']; 
}
$Createsql = "INSERT INTO `company` (comname, name, phone,email,address,password) VALUES ('$comname' , 'name' , '$phone', '$email', '$address', '$password','$conpass')";
$res = mysqli_query($connection, $Createsql);
if($res) {
	echo "registered successfully";
}
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		company name:<input type="text" name="comname" id="comname"> <br>
		coordinator name:<input type="text" name="name" id="name"> <br>
		phone:<input type="text" name="phone" id="phone"> <br>
		email:<input type="text" name="email" id="email"> <br>
		address:<input type="text" name="address" id="address"> <br>
		password:<input type="password" name="password" id="password"> <br>
		confirm password:<input type="text" name="confirm password" id="confirm password"> <br>
		<input type="submit" value="SignUp">

	</form>

</body>
</html>