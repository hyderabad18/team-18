<?php
<<<<<<< HEAD
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "cfgteam18";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
require 'config.php';
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
if(empty($_SESSION))
{
  session_start();
  require 'config.php';
}
if(!isset($_SESSION['root']))
{
  header('location:login_company.php');
  exit;
=======
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cfgteam18";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
>>>>>>> 3209c97bfc91bea898a2d7978e563849df7e1f8c
}
$checkbox1=$_POST['disabilities'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  

 $checkbox2=$_POST['skills'];  
$chk2="";  
<<<<<<< HEAD
foreach($checkbox2 as $chk3)  
=======
foreach($checkbox1 as $chk3)  
>>>>>>> 3209c97bfc91bea898a2d7978e563849df7e1f8c
   {  
      $chk2 .= $chk3.",";  
   }  

   $checkbox3=$_POST['sectors'];  
$chk4="";  
<<<<<<< HEAD
foreach($checkbox3 as $chk5)  
   {  
      $chk4 .= $chk5.",";  
   }  
$r=$_SESSION['user'];
$sql = "INSERT INTO jobs(jobprofile,vacancies,skillset,disabilities,cutoff,sector,company)
VALUES ('$_POST[jobprofile]','$_POST[vacancies]','$chk2','$chk','$_POST[cutoff]','$chk4','$r')";

 

if (mysqli_query($connect, $sql)) {
    header('location:company.php');
=======
foreach($checkbox1 as $chk5)  
   {  
      $chk4 .= $chk5.",";  
   }  
//$_SESSION['user']
$sql = "INSERT INTO jobs(jobprofile,vacancies,skillset,disabilities,cutoff,company)
VALUES ('$_POST[jobprofile]','$_POST[vacancies]','$chk2','$chk','$_POST[cutoff]','jpmc')";

 

if (mysqli_query($conn, $sql)) {
    header('location:companypage.php');
>>>>>>> 3209c97bfc91bea898a2d7978e563849df7e1f8c
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>