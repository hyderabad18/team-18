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
$checkbox1=$_POST['disabilities'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  

$sql = "INSERT INTO student(username,age,email,university,education,passedout,disabilities,phone,password,refercol)
VALUES ('$_POST[student]','$_POST[age]','$_POST[studentemail]','$_POST[college]','$_POST[education]','$_POST[passout]','$chk','$_POST[phone]','$_POST[password]','$_POST[refercol]')";

 

if (mysqli_query($conn, $sql)) {
<<<<<<< HEAD
    // echo "New record created successfully";
    header('location:login_student.php')
=======
    echo "New record created successfully";
>>>>>>> 3209c97bfc91bea898a2d7978e563849df7e1f8c
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>