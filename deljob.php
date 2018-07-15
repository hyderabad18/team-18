
<?php
// Check connection
require('config.php');
if (!$connect) {
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
mysqli_query($connect, $sql);
header('location:company.php'); ?>
}
else
<? php
	header('location:company.php');
?>
 </script>
