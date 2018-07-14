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


$sql = "INSERT INTO student(username,age,email,university,education,passedout,disabilities,phone,password,refercol)
VALUES ('$_POST[student]','$_POST[age]','$_POST[studentemail]','$_POST[college]','$_POST[education1]','$_POST[passout]','$_POST[disabilities]','$_POST[phone]','$_POST[password]','$_POST[refercol]')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>