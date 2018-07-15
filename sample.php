<!DOCTYPE html>
<html>
<head>
<script>
function validateForm() {
    var x = document.forms["registration"]["student"].value;
    if (x == "") {
        alert("Username must be filled out");
        //x.focus();
        return false;
    }
    else if(x.length>20)
    {
    	 alert("Username is too long");
    	 //x.focus();
    	 return false;
    }
    var x = document.forms["registration"]["age"].value;
    if (x == "") {
        alert("Age must be filled out");
        //x.focus();
        return false;
    }
    else if (isNaN(x)) 
    {
        alert("Age must be a number");
        return false;
    }
    else if(x.length>3)
    {
    	 alert("Provide the proper age");
    	 //x.focus();
    	 return false;
    }
    var x = document.forms["registration"]["studentemail"].value;
    if (x == "") {
        alert("Email Id must be filled out");
        //x.focus();
        return false;
    }
    else if(x.length<10)
    {
    	 alert("Provide proper email id");
    	 //x.focus();
    	 return false;
    }
    var x = document.getElementById("college");
var strUser = x.options[x.selectedIndex].value;
if(strUser=="")
{
alert("Please select a college");
}
     var x = document.getElementById("education1");
var strUser = x.options[x.selectedIndex].value;
if(strUser=="")
{
alert("Please select an education");
}
    var x = document.forms["registration"]["password"].value;
    if (x == "") {
        alert("Password must be filled out");
        //x.focus();
        return false;
    }
    else if(x.length<6 || x.length>10)
    {
    	 alert("Password must consists of 6 to 10 letters");
    	 //x.focus();
    	 return false;
    }
    var x = document.forms["registration"]["confirmpassword"].value;
    if (x == "") {
        alert("Confirm Password must be filled out");
        //x.focus();
        return false;
    }
    if (document.getElementById('password').value !=
    document.getElementById('confirmpassword').value)
    {
    	alert("Password and confirm password must match");
    	return false;
    }
    return true;

}
</script>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Registration  </title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="registrationstyle.css">
</head>
<body>
<div class="col-sm-5 form-box">
 <div class="form-top">
<div class="form-top-left">
<h1><strong>Student Registration </strong></h1>
                                
</div>
<div class="form-top-right">
 <i class="fa fa-pencil"></i>
  </div>
</div>
<div class="form-bottom">

<form name="registration" action="registration.php" onsubmit="return validateForm()" method="POST"  >
<div class="col-sm-6">User Name:</div>
  <input type="text" name="student" id="student" value="">
<<<<<<< HEAD
=======
  <br>
>>>>>>> 3209c97bfc91bea898a2d7978e563849df7e1f8c
  <br>
<div class="col-sm-6">Age:</div>
  <input type="text" name="age" id="age" value="">
  <br>
<<<<<<< HEAD
<div class="col-sm-6">Age:</div>
  <input type="text" name="age" id="age" value="">
=======
>>>>>>> 3209c97bfc91bea898a2d7978e563849df7e1f8c
  <br>
 <div class="col-sm-6"> Phone NO:</div>
  <input type="text" name="phone" id="phone" value="">
  <br>
<<<<<<< HEAD
 <div class="col-sm-6"> Phone NO:</div>
  <input type="text" name="phone" id="phone" value="">
=======
>>>>>>> 3209c97bfc91bea898a2d7978e563849df7e1f8c
  <br>
 <div class="col-sm-6">Email Id:</div>
  <input type="Email" name="studentemail" id="studentemail" value="">
  <br>
<<<<<<< HEAD
 <div class="col-sm-6">Email Id:</div>
  <input type="Email" name="studentemail" id="studentemail" value="">
  <br>
  <br>
  <div class="col-sm-6">University Name:</div>
  <?php
  // require 'config.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cfgteam18";

// Create connection
$connect = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
  $query = "SELECT colname FROM college";
$result1 = mysqli_query($connect, $query);?>
  <select name="college" id="college" >
            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[0];?>"><?php echo $row1[0];?></option>

            <?php endwhile;?>

        </select>
</select>
  <br>
  <br>
=======
  <br>
  <div class="col-sm-6">University Name:</div>
  <?php
  // require 'config.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cfgteam18";

// Create connection
$connect = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
  $query = "SELECT colname FROM college";
$result1 = mysqli_query($connect, $query);?>
  <select name="college" id="college" >
            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[0];?>"><?php echo $row1[0];?></option>

            <?php endwhile;?>

        </select>
</select>
  <br>
  <br>
>>>>>>> 3209c97bfc91bea898a2d7978e563849df7e1f8c
  <div class="col-sm-6">Present Education:</div>
  <select name="education" id="education">
  <option value="btech">B.Tech</option>
  <option value="be">BE</option>
  <option value="mtech">M.Tech</option>
  <option value="mba">MBA</option>
  <option value="bba">BBA</option>
  <option value="degree">Degree</option>
  <option value="other">Other</option>
</select>
  <br>
  <br>
 <div class="col-sm-6"> Passed Out:</div>
  <input type="text" name="passout" id="passout" value="">
<<<<<<< HEAD
  <br>
=======
>>>>>>> 3209c97bfc91bea898a2d7978e563849df7e1f8c
  <br>
  <div class="col-sm-6">Disabilities:</div>
  <input type="checkbox"  name="disabilities[]" value="blind" /> Blind <br />
	<input type="checkbox" name="disabilities[]" value="deaf" /> Deaf<br />
	<input type="checkbox" name="disabilities[]" value="dumb" /> Dumb<br/>
	<input type="checkbox" name="disabilities[]" value="handikapped" />Handikapped<br/>
	<br>
	<br>
  <div class="col-sm-6">Refer Colleges:</div>
  <input type="text" name="refercol" id="refercol" value="">
  <br>
<<<<<<< HEAD
=======
  <div class="col-sm-6">Disabilities:</div>
  <input type="checkbox"  name="disabilities[]" value="blind" /> Blind <br />
	<input type="checkbox" name="disabilities[]" value="deaf" /> Deaf<br />
	<input type="checkbox" name="disabilities[]" value="dumb" /> Dumb<br/>
	<input type="checkbox" name="disabilities[]" value="handikapped" />Handikapped<br/>
	<br>
	<br>
  <div class="col-sm-6">Refer Colleges:</div>
  <input type="text" name="refercol" id="refercol" value="">
>>>>>>> 3209c97bfc91bea898a2d7978e563849df7e1f8c
  <br>
  <div class="col-sm-6">Password:</div>
  <input type="password" name="password" id="password" value="">
  <br>
<<<<<<< HEAD
=======
  <div class="col-sm-6">Password:</div>
  <input type="password" name="password" id="password" value="">
  <br>
>>>>>>> 3209c97bfc91bea898a2d7978e563849df7e1f8c
  <br>
  <div class="col-sm-6">Confirm Password:</div>
  <input type="password" name="confirmpassword" id="confirmpassword" value="">
  <br>
  <br>
  <input type="submit" value="Signup">
</form> 
<<<<<<< HEAD
</div>
=======

>>>>>>> 3209c97bfc91bea898a2d7978e563849df7e1f8c
</body>
</html>

