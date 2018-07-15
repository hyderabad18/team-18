<!DOCTYPE html>
<html lang="en">
<head>
    <title>Company Registration form</title>
</head>
<link rel="stylesheet" href="login_style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
function validateForm() {
    var x = document.forms["companyreg"]["comname"].value;
    if (x == "") {
        alert("Company name must be filled out");
    else
        $comname=x;
       
    }
    
    var x = document.forms["companyreg"]["name"].value;
    if (x == "") {
        alert("Name must be filled out");
    else 
        $name=x; 
    }
     
    var x = document.forms["companyreg"]["address"].value;
    if (x == "") {
        alert("address must be filled out");
    else 
        $name=x; 
    }
    
     var x = document.forms["companyreg"]["refercol"].value;
    if (x == "") {
        alert("refercol must be filled out");
    else 
        $name=x; 
    }

    var x = document.forms["companyreg"]["email"].value;
    if (x == "") {
        alert("Email Id must be filled out");        
    }
    else if(x.length<10)
    {
         alert("Provide proper email id");
        
    }
     else
        $email=x;
    var x = document.forms["companyreg"]["phone"].value;
    if (x == "") {
        alert("Email Id must be filled out");        
    }
    else if(x.length!=10)
    {
         alert("Provide valid mobie number");
        
    }
     else
        $email=x;
  
   
    var x = document.forms["companyreg"]["password"].value;
    if (x == "") {
        alert("Password must be filled out");
        
    }
    else if(x.length<6 || x.length>10)
    {
         alert("Password must consists of 6 to 10 letters");
         
    }
    else
        $password=x;
    var x = document.forms["companyreg"]["confirmpassword"].value;
    if (x == "") {
        alert("Confirm Password must be filled out");
        
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
<h1><strong>Company Registration </strong></h1>
                                
</div>
<div class="form-top-right">
 <i class="fa fa-pencil"></i>
  </div>
</div>
<div class="form-bottom">

<body>
    <form  name="companyreg" action="compreg.php" onsubmit="return validateForm()" method="POST">
        Company name: <input type="text" name="comname" id="comname"> <br>
        <br>
        
        Coordinator name: <input type="text" class="defaultTextBox advancedSearchTextBox" name="name" id="name"> <br>
        <br>
        
        Phone: <input type="text" name="phone" class="defaultTextBox advancedSearchTextBox" id="phone"> <br>
        <br>
        
        Email: <input type="text" name="email" class="defaultTextBox advancedSearchTextBox" id="email"> <br>
        <br>
        
        Address: <input type="text" name="address" class="defaultTextBox advancedSearchTextBox"  id="address"> <br>
        <br>
        
        Password: <input type="password" name="password" class="defaultTextBox advancedSearchTextBox" id="password"> <br>
        <br>
        
        Confirm Password: <input type="password" class="defaultTextBox advancedSearchTextBox"  name="confirm password" id="confirm password"> <br>
        <br>
        
        Refer : <input type="text" name="refercol" class="defaultTextBox advancedSearchTextBox"  id="refercol"> <br>
        <br>
        
         <button type="submit" class="btn">Sign me up!</button>

    </form>

</body>
</html>