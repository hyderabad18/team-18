<!-- Just an image -->
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

  </style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
	<a class="navbar-brand" href="#">
    <img src="logo.png"   height="50px" width="100px" alt="logo here">
    <div class="container">
    <div class="nav navbar-nav navbar-right">
    	<a href="logout.php" >LOGOUT</a>
    </div>
</div>
  	</a>

</nav>
</body>
</html>
