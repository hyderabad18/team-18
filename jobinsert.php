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

 $checkbox2=$_POST['skills'];  
$chk2="";  
foreach($checkbox1 as $chk3)  
   {  
      $chk2 .= $chk3.",";  
   }  

   $checkbox3=$_POST['sectors'];  
$chk4="";  
foreach($checkbox1 as $chk5)  
   {  
      $chk4 .= $chk5.",";  
   }  
//$_SESSION['user']
$sql = "INSERT INTO jobs(jobprofile,vacancies,skillset,disabilities,cutoff,company)
VALUES ('$_POST[jobprofile]','$_POST[vacancies]','$chk2','$chk','$_POST[cutoff]','jpmc')";

 

if (mysqli_query($conn, $sql)) {
    header('location:companypage.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>