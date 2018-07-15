
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cfgteam18";
session_start();
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$w= $_SESSION["sno"];
echo $w;
$sql="UPDATE jobs
SET jobprofile = '$_POST[jobprofile]',  vacancies= '$_POST[vacancies]', cutoff='$_POST[cutoff]'
WHERE sno=$w";
if (mysqli_query($conn, $sql)) {
    header('location:companypage.php');
} 

?>