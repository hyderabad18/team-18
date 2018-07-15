<?php
if(empty($_SESSION))
{
	session_start();
	require 'config.php';
}
if(!isset($_SESSION['root']))
{
	header('location:login_student.php');
	exit;
}

?>
//hello
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
  <script type="text/javascript">
    function check(){
      var x=alert("WOULD YOU LIKE TO TAKE THE TEST?");
      
      if(x===undefined||x==' ')
      {
        x="abc";
        console.log('am called');
        document.getElementById('flag').style.visibility="hidden";
        window.location="newMock2.php";
      }
    // <?php
    // $username=$_SESSION['user'];
    // $var="SELECT flag from testtaken where username='$username'";
    // $new=mysqli_query($connect,$var);
    // if(mysqli_num_rows($new)==0)
    // {
    //   $insert="INSERT into testtaken values('$username','false')";
    //   mysql_query($connect,$insert);
    // }

    // ?>
      


    }
  </script>
</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
	<a class="navbar-brand" href="company.php">
    <img src="logo.png"   height="50px" width="100px" alt="logo here">
    </a>
 

	<div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php" >LOGOUT</a></li>
     
      </ul>
    </div>
     </div>
</nav>
<br/>
<br/>
<br>
<br>

<div class="row">
  <div class="col-lg-3">
    <div class="container">
    <?php 
    require 'config.php';
    $name=$_SESSION['user'];
    $sql="SELECT * FROM student where username='$name'";
    $result=mysqli_query($connect,$sql);

    while($row=mysqli_fetch_array($result,MYSQLI_NUM))
    {
    
      $uname=$row['0'];
      $email=$row['2'];
      $university=$row['3'];
      $education=$row['4'];

        echo "Username:" . $uname . ".<br>";
        echo "Email Id:" . $email . ".<br>";
        echo "university:" .$university.".<br>";
        echo "education:".$education.".<br>";
    }
      ?>
  </div>
</div>

  <div class="col-lg-9">
    <div class="container">
      <h2 style="'text-font:Sans-serif'">INSTRUCTIONS</h2><br/>
      <p>1)  Mock Test can only be taken once<br/>
2)  After the completion of the mock test the student can take practice tests which are accessible at any time.<br/>
3)  The level of the student will be allotted based on the aggregate score secured in the mock as well as the practice tests.<br>
4)  For a student to be eligible for allocation of grades, one should secure an aggregate of more than 40%. <br>
</p>
    </div>

   <div class="cards" id="flag">
    <div class="panel-body">
      <div class="row">
        <div class="col-sm-5 col-md-3 col-xs-12">
          <div class="card my-open-req" onClick="check()">
            <div class="card-block">
              <h4 class="card-title">Take Mock Test</h4>
              <div class="card-text"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 

  </div>
</div>


</body>
</html>