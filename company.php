<!--  Just an image -->
<?php
if(empty($_SESSION))
{
	session_start();
	require 'config.php';
}
if(!isset($_SESSION['root']))
{
	header('location:login_company.php');
	exit;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Company</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .jumbotron {
      background-color: #fff;
      color:  #f4511e;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  </style>
</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
	<a class="navbar-brand" href="company.php">
    <img src="logo.png"   height="50px" width="100px" alt="logo here">
    </a>
  </div>

	<div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php" >LOGOUT</a></li>
     
      </ul>
    </div>
</nav>
<br/>
<br/>
<br/>
<br/>
<a class="btn btn-success " href="jobform.php">+ADD JOB COMPANY</a>

<?php
$companyname=$_SESSION['user'];
// echo $companyname;
require 'config.php';

$sql = "SELECT * FROM jobs where company='$companyname' ";
$result = mysqli_query($connect, $sql);
    if (!$result) {
        // echo "Problem with query " . $query . "<br/>";
        //echo pg_last_error();
        exit();
    }
?>

<div class="jumbotron">
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col" >#</th>
      <th scope="col">Job Profile</th>
      <th scope="col">Vacancies</th>
      <th scope="col">SkillSet</th>
      <th scope="col">Disabilities</th>
      <th scope="col">Cutoff</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>

  <tbody>
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

  <td><a href="editjob.php">EDIT</a></td>
  <td><a href="deljob.php">DELETE</a></td>

</tr>
<?php
  }
?>
 </tbody>
</table>
</div>




</table>

<a class="btn btn-success " href="submit.php">+ADDFILES</a>
</body>
</html>




