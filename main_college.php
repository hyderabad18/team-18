<!-- Just an image -->
<?php
if(empty($_SESSION))
{
	session_start();
	require 'config.php';
}
if(!isset($_SESSION['root']))
{
	header('location:login_college.php');
	exit;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>College</title>
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
	<a class="navbar-brand" href="main_college.php">
    <img src="logo.png"   height="50px" width="100px" alt="logo here">
    

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
<!-- <a class="btn btn-success " href="jobform.php">+ADD</a> -->

<?php
$name=$_SESSION['user'];

require 'config.php';

$sql = "SELECT * FROM college where ccname='$name' ";
$result = mysqli_query($connect, $sql);
$row=mysqli_fetch_array($result);
$query="SELECT * from student where university='$row[1]'";
$result1=mysqli_query($connect,$query);

   
?>

<div class="jumbotron">
<table class="table">
  <thead class="thead-light">
    <tr>
    	 <th align='center'>#</th>
             <th align='center'>Username</th> 
             <th align='center'>Age</th> 
             <th align='center'>Email</th>
              <th align='center'>University</th>
              <th align='center'>Education</th>
              <th align='center'>Passedout Year</th>
              <th align='center'>Disabilities</th>
              <th align='center'>Phone</th>
              <th align='center'>Refer College</th>
     <!--  <th scope="col" >#</th>
      <th scope="col">Student</th>
      <th scope="col">Vacancies</th>
      <th scope="col">SkillSet</th>
      <th scope="col">Disabilities</th>
      <th scope="col">Cutoff</th>
      <th scope="col">Actions</th> -->
    </tr>
  </thead>
  <tbody>
   <?php
 $i=1;
while($row = mysqli_fetch_array($result1))

  {
?>
  <tr>
  <td> 
      <?php
               echo $i++;
       ?>
 </td>

  <td><?php echo "$row[0]";  ?> </td>
  <td><?php echo "$row[1]";  ?> </td>
 <td><?php  echo "$row[2]";  ?> </td>
 <td><?php  echo "$row[3]";  ?> </td>
 <td><?php  echo "$row[4]";  ?> </td>
 <td><?php  echo "$row[5]";  ?> </td>
 <td><?php  echo "$row[6]";  ?> </td>
 <td><?php  echo "$row[7]";  ?> </td>
 <td><?php  echo "$row[10]";  ?> </td>
 

 </tr>


 </tbody>
</table>
</div>

<?php
  }
?>

</table>

<!-- <a class="btn btn-success " href="submit.php">+ADDFILES</a> -->
</body>
</html>
