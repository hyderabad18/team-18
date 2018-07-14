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
</head>
<form name="registration" action="registration.php" onsubmit="return validateForm()" method="POST"  >
User Name:
  <input type="text" name="student" id="student" value="">
  <br>
  <br>
Age:
  <input type="text" name="age" id="age" value="">
  <br>
  <br>
  Phone NO:
  <input type="text" name="phone" id="phone" value="">
  <br>
  <br>
 Email Id:
  <input type="Email" name="studentemail" id="studentemail" value="">
  <br>
  <br>
  University Name:
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cfgteam18";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
  $query = "SELECT colname FROM college";
$result1 = mysqli_query($conn, $query);?>
  <select name="college" id="college">
            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[0];?>"><?php echo $row1[0];?></option>

            <?php endwhile;?>

        </select>
</select>
  <br>
  <br>
  Present Education:
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
  Passed Out:
  <input type="text" name="passout" id="passout" value="">
  <br>
  <br>
  Disabilities:
  <input type="checkbox"  name="disabilities[]" value="blind" /> Blind <br />
	<input type="checkbox" name="disabilities[]" value="deaf" /> Deaf<br />
	<input type="checkbox" name="disabilities[]" value="dumb" /> Dumb<br/>
	<input type="checkbox" name="disabilities[]" value="handikapped" />Handikapped<br/>
	<br>
	<br>
  Refer Colleges:
  <input type="text" name="refercol" id="refercol" value="">
  <br>
  <br>
  Password:
  <input type="password" name="password" id="password" value="">
  <br>
  <br>
  Confirm Password:
  <input type="password" name="confirmpassword" id="confirmpassword" value="">
  <br>
  <br>
  <input type="submit" value="Signup">
</form> 

</body>
</html>

