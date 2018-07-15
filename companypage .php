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
}?>
<head>
<style>

table

{

border-style:solid;

border-width:2px;

}


</style>

</head>
<form action="jobform.php">
<input type="submit" value="Add Job Profile">
</form>
<?php
 session_start();
?>
<?php
//$companyname=$_SESSION['user'];
$sql = "SELECT * FROM jobs where company='jpmc' ";
$result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Problem with query " . $query . "<br/>";
        //echo pg_last_error();
        exit();
    }
?>
<table border='1' cellspacing='0' cellpadding='0' align='center' style='width:400px'>
<tr>
             <th align='center'>Sno</th>
             <th align='center'>Job Profile</th> 
             <th align='center'>Vacancies</th> 
             <th align='center'>SkillSet</th>
              <th align='center'>Disabilities</th>
              <th align='center'>Cutoff</th>

</tr>
<?php
 $i=1;
while($row = mysqli_fetch_array($result))

  {
?>
  <tr>
  <td> 
      <?php
               echo $i++;
       ?>
 </td>

  <td><?php echo "$row[1]";  ?> </td>

 <td><?php  echo "$row[2]";  ?> </td>
 <td><?php  echo "$row[3]";  ?> </td>
 <td><?php  echo "$row[4]";  ?> </td>
 <td><?php  echo "$row[5]";  ?> </td>
 <?php
 $_SESSION['sno'] = "$row[0]";
 $_SESSION['jobprofile'] = "$row[1]";

 $_SESSION['vacancies'] = "$row[2]";
 $_SESSION['cutoff'] = "$row[5]";
 ?>

  <td><a href="editjob.php">EDIT</a</td>
  <td><a href="deljob.php">DELETE</a</td>


 </tr>
<?php
  }
?>

</table>
</body>
</html>