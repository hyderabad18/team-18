<html>
<head>
<script>
function validateForm() {
    var x = document.forms["jobprof"]["jobprofile"].value;
    if (x == "") {
        alert("Job profile must be filled out");
        //x.focus();
        return false;
    }
    
    var x = document.forms["jobprof"]["vacancies"].value;
    if (x == "") {
        alert("Age must be filled out");
        //x.focus();
        return false;
    }
   
    var x = document.forms["jobprof"]["cutoff"].value;
    if (x == "") {
        alert("cutoff must be filled out");
        //x.focus();
        return false;
    }
   
    
    return true;

}
</script>
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
  <title>Add jobs</title>
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

<div class="container">
  <h2>Enter details in the  form</h2>
<form name="jobprof" action="jobinsert.php" onsubmit="return validateForm()" method="POST"  >
Job Profile:
  <input type="text" name="jobprofile" id="jobprofile" value="">
  <br>
  <br>
Vacancies:
  <input type="text" name="vacancies" id="vacancies" value="">
  <br>
  <br>
  SkillSet:<br>
  <input type="checkbox"  name="skills[]" value="c" /> C <br />
  <input type="checkbox" name="skills[]" value="java" /> Java<br />
  <input type="checkbox" name="skills[]" value="dotnet" /> DotNet<br/>
  <input type="checkbox" name="skills[]" value="finance" />Finance<br/>
  <input type="checkbox" name="skills[]" value="management" />Management<br/
  <br>
  <br>
 Disabilities:<br>
  <input type="checkbox"  name="disabilities[]" value="blind" /> Blind <br />
  <input type="checkbox" name="disabilities[]" value="deaf" /> Deaf<br />
  <input type="checkbox" name="disabilities[]" value="dumb" /> Dumb<br/>
  <input type="checkbox" name="disabilities[]" value="handicapped" />Handicapped<br/>
  <br>
  <br>
  Cutoff:
  <input type="text" name="cutoff" id="cutoff" value="">
  <br>
  <br>
  Sectors:<br>
  <input type="checkbox"  name="sectors[]" value="banking" /> Banking <br />
  <input type="checkbox" name="sectors[]" value="retail" /> RETAIL<br />
  <input type="checkbox" name="sectors[]" value="bpo" /> BPO<br/>
  <input type="checkbox" name="sectors[]" value="it" />IT<br/>
  <input type="checkbox" name="sectors[]" value="hospitality" />Hospitality<br/
  <br>
  <br>
  <input type="submit" value="ADD Jobprofile">
  </form>
  </div>
  </html>