<?php
 
 
 if(isset($_POST["Import"])){
		
		$filename=$_FILES["file"]["tmp_name"];		
 
 
		 if($_FILES["file"]["size"] > 0)
		 {
		 }
		  	$file = fopen($filename, "r");
		  	foreach ($CSV as $line ) {
		  		# code...
		  
		  		# code...
		  	
	        //while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
	        $getData = fgetcsv($file, 10000, ",") !== FALSE; 

	         {
 
 
	           $sql = "INSERT into qbank values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."')";
                   $result = mysqli_query($con, $sql);
				if(!isset($result))
				{
					echo "<script type=\"text/javascript\">
							alert(\"Invalid File:Please Upload CSV File.\");
							window.location = \"index.php\"
						  </script>";		
				}
				else {
					  echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"index.php\"
					</script>";
				}
	         }
	     }
			
	         fclose($file);	
		 }
	}	 
 
 
 ?>