<


<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "cfgteam18";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
require 'config.php';
?>
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
  <a class="navbar-brand" href="admin.php">
    <img src="logo.png"   height="50px" width="100px" alt="logo here">
    

  <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php" >LOGOUT</a></li>
     
      </ul>
    </div>
</nav>
<br/>
<br/>

<!-- <a class="btn btn-success " href="jobform.php">+ADD</a> -->


<!-- ?php
 session_start();
?> -->
<?php
//$companyname=$_SESSION['user'];
$sql = "SELECT * FROM jobs";
$result = mysqli_query($connect, $sql);
    if (!$result) {
        echo "Problem with query " . $query . "<br/>";
        //echo pg_last_error();
        exit();
    }
?>

  

<div class="jumbotron">
<table class="table">
  <thead class="thead-light">
    <tr>
     <th align='center'>Sno</th>
             <th align='center'>Job Profile</th> 
             <th align='center'>Vacancies</th> 
             <th align='center'>SkillSet</th>
              <th align='center'>Disabilities</th>
              <th align='center'>Cutoff</th>
              <th align='center'>Sector</th>
              <th align='center'>Company</th>
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
 <td><?php  echo "$row[6]";  ?> </td>
 <td><?php  echo "$row[7]";  ?> </td>
 

 </tr>
<?php
  }
?>
</tbody>
</table>
</div>
</body>
</html>



