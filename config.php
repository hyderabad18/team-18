<php
$servername = "localhost";
$username = "root";
$password = "root";
   
    $conn = mysqli_connect($servername, $username, $password);
    if($conn)
     	echo "Connected successfully";
    else 
    	echo "Connection failed ";


?>
