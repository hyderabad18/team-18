
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
?>
<script>
 var r=confirm("DO u want to delete?");
 
if(r==true)
{
//echo $w;
	<?php
$sql="DELETE from jobs WHERE sno=$w";
mysqli_query($conn, $sql);
header('location:companypage.php'); ?>
}
else
<? php
	header('location:companypage.php');
?>
 </script>
