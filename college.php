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
$colname=$_POST['colname'];
$name=$_POST['ccname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];
$password=$_POST['password']; 
 
$Createsql = "INSERT INTO college(colname, ccname, phone,email,address,password) VALUES ('$colname' , '$name' , '$phone', '$email', '$address', '$password')";
$res = mysqli_query($conn, $Createsql);
if ($res) {
<<<<<<< HEAD
    // echo "New record created successfully";
    header('location:login_college.php');
=======
    echo "New record created successfully";
>>>>>>> 3209c97bfc91bea898a2d7978e563849df7e1f8c
} else {
    echo "Error: " . $Createsql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>