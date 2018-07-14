<?php  
error_reporting(E_ALL);
global $qno;
global $que;
global $opt1;
global $opt2;
global $opt3;
global $opt4;
global $answer;
global $level;
global $sector;
require_once('config.php');
if(isset($_POST["submit"]))
{
 if($_FILES['file']['name'])
 {
  $filename = explode(".", $_FILES['file']['name']);
  if($filename[1] == 'csv')
  {
   $handle = fopen($_FILES['file']['tmp_name'], "r");
   $count =0;
   while($getData = fgetcsv($handle))
   {
    
    if ($count >0){
    $sql = "INSERT into qbank(qno,que,opt1,opt2,opt3,opt4,answer,level,sector) values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."','".$getData[7]."','".$getData[8]."') ON DUPLICATE KEY UPDATE que = '".$getData[1]."', opt1='".$getData[2]."',opt2='".$getData[3]."',opt3='".$getData[4]."',opt4='".$getData[5]."',answer='".$getData[6]."',level='".$getData[7]."',sector='".$getData[8]."'";
                
                
                mysqli_query($connection, $sql);
   }
   $count++;
 }
   fclose($handle);
   echo "<script>alert('Import done');</script>";
  }
 }
}
?>  
<!DOCTYPE html>  
<html>  
 <head>  
  <title>Webslesson Tutorial</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 </head>  
 <body>  
  <h3 align="center">How to Import Data from CSV File to Mysql using PHP</h3><br />
  <form method="post" enctype="multipart/form-data">
   <div align="center">  
    <label>Select CSV File:</label>
    <input type="file" name="file" />
    <br />
    <input type="submit" name="submit" value="Import" class="btn btn-info" />
   </div>
  </form>
 </body>  
</html>
