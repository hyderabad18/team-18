<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cfgteam18";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$comname=$_POST['comname'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];
$password=$_POST['password'];
$refcol=$_POST['refcol'];

$Createsql = "INSERT INTO company(comname, name, phone,email,address,password,refercom) VALUES ('$comname' , '$name' , '$phone', '$email', '$address', '$password','$refcol')";
$res = mysqli_query($connection, $Createsql);
if($res) {
	echo "registered successfully";
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>