<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action = "" method = "POST" enctype="multipart/form-data">
		<p>please enter the file name: </p><input type = "text" name = "myfile"/>
		<p>               </p><input type = "submit" name = "submit"/>
		
	</form>

</body>
</html>
<?php

require "config.php";
  $file_name = $_POST["myfile"];
  $file = fopen($file_name,"r");
  $i=0;
while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {
if($i>0){
    $import="INSERT into qbank values('".$data[0]."','".$data[1]."','".$data[2]."','".$data[3]."','".$data[4]."','".$data[5]."')";
    mysql_query($import) or die(mysql_error());
}
$i=1;
}

?>