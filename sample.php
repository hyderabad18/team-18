<!DOCTYPE html>
<html>
<head>
<script>
function validateForm() {
    var x = document.forms["insert"]["vehicletype"].value;
    if (x == "") {
        alert("Name must be filled out");
        x.focus();
        return false;
    }
  if((document.insert.Active[0].checked==false)&&(document.insert.Active[1].checked==false))
 {
  document.insert.Active[0].focus();
  alert("check the radio button");
  return false;
 }
 else 
    return true;

}
</script>
</head>
<form name="registration" action="registration.php" onsubmit="return validateForm()" method="POST"  >
User Name:
  <input type="text" name="student" value="">
  <br>
  <br>
Age:
  <input type="text" name="age" value="">
  <br>
  <br>
 Email Id:
  <input type="Email" name="studentemail" value="">
  <br>
  <br>
  University Name:
  <input type="text" name="university" value="">
  <br>
  <br>
  Present Education:
  <select>
  <option value="btech">B.Tech</option>
  <option value="be">BE</option>
  <option value="mtech">M.Tech</option>
  <option value="mba">MBA</option>
  <option value="bba">BBA</option>
  <option value="degree">Degree</option>
</select>
  <br>
  <br>
  Passed Out:
  <input type="text" name="passout" value="">
  <br>
  <br>
  Password:
  <input type="text" name="password" value="">
  <br>
  <br>
  <input type="submit" value="Add">
</form> 
/*<br><br>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
</head>
<body>

<?php
$db = pg_connect("host=localhost port=5432 dbname=postgres user='postgres' password='manisha' options='--client_encoding=UTF8'");
$query = "SELECT * FROM \"Vehicle_Types_mst\"";
$result = pg_query($db,$query);
    if (!$result) {
        echo "Problem with query " . $query . "<br/>";
        echo pg_last_error();
        exit();
    }
?>

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

$db = pg_connect("host=localhost port=5432 dbname=postgres user='postgres' password='manisha' options='--client_encoding=UTF8'");
$query = "SELECT * FROM \"Vehicle_Types_mst\" where \"Active\"='Y' ";
$result = pg_query($db,$query);
    if (!$result) {
        echo "Problem with query " . $query . "<br/>";
        echo pg_last_error();
        exit();
    }
?>
<table border='1' cellspacing='0' cellpadding='0' align='center' style='width:400px'>
<tr>
             <th align='center'>Sno</th>
             <th align='center'>Vehicle Type Sno</th> 
             <th align='center'>Vehicle Type</th>
              <th align='center'>Edit</th>

</tr>
<?php
 $i=1;
while($row = pg_fetch_row($result))

  {
?>
  <tr>
  <td> 
      <?php
               echo $i++;
       ?>
 </td>

  <td><?php echo "$row[0]";  ?> </td>

 <td><?php  echo "$row[1]";  ?> </td>

  <td>edit</td>

 </tr>
<?php
  }
?>

</table>
*/
</body>
</html>

