<!-- Just an image -->
<!-- <?php
// if(empty($_SESSION))
{
	// session_start();
	// require 'config.php';
}
// if(!isset($_SESSION['root']))
{
	// header('location:login_company.php');
	// exit;
}

?> -->

<!DOCTYPE html>
<html>
<head>
	<title>Company</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="cards.css">
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
	<a class="navbar-brand" href="admin.php"></a>
    <img src="logo.png"   height="50px" width="100px" alt="logo here">
    

	<div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php" >LOGOUT</a></li>
     
      </ul>
    </div>
    </div>
</nav>
<br/>
<br/>
<br/>

<br/>





<div class="cards">
		<div class="panel-body">
			<div class="row">
				<div class="col-sm-5 col-md-3 col-xs-12">
					<div class="card my-open-req" onClick="window.location.href='adminstud.php'">
						<div class="card-block">
							<h4 class="card-title" >SHOW STUDENTS</h4>
							<div class="card-text"></div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3 col-xs-12">
					<div class="card my-open-req" onClick="window.location.href='admincomp.php'">
						<div class="card-block">
							<h4 class="card-title" >SHOW COMPANIES</h4>
							<div class="card-text"></div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3 col-xs-12">
					<div class="card my-open-req" onClick="window.location.href='adminjob.php'">
						<div class="card-block">
							<h4 class="card-title" >SHOW JOB PROFILES</h4>
							<div class="card-text"></div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3 col-xs-12">
					<div class="card my-open-req" onClick="window.location.href='admincol.php">
						<div class="card-block">
							<h4 class="card-title" >SHOW COLLEGES</h4>
							<div class="card-text"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>



