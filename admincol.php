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

<?php
 session_start();
?>
<?php
//$companyname=$_SESSION['user'];
$sql = "SELECT * FROM college";
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
             <th align='center'>College Name</th> 
             <th align='center'>College Coordinator Name</th> 
             <th align='center'>Phone</th>
              <th align='center'>Email</th>
              <th align='center'>Address</th>

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

 

 </tr>
<?php
  }
?>

</table>
</body>
</html>