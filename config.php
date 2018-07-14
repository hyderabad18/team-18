<php
$servername = "localhost";
$username = "root";
$password = "root";
 
try {
   
    $conn = mysqli_connect($servername, $username, $password);
     //echo "Connected successfully"; 
    }
catch(exception $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    return $conn;

?>
