<?php
 include 'connections.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Send HTML Email from Localhost using PHP and PHPMailer</title>
</head>
<body bgcolor="#6ba2f9">
<div class="container">
	<div class="row">
	<!--	<h1>Send HTML Email from Localhost using PHP and PHPMailer</h1> -->
		<div class="col-md-6">
			<?php
				echo $name=$_GET['name'];
				
				require 'PHPMailer/PHPMailerAutoload.php';
				$mail = new PHPMailer;

				$mail->isSMTP();                                   // Set mailer to use SMTP
				$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                            // Enable SMTP authentication
				$mail->Username = '<your mail id >';          // SMTP username
				$mail->Password = '<your password>'; // SMTP password
				$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
				$mail->Port = 587;                                 // TCP port to connect to

				$mail->setFrom('<your mail id >', '<any titile>');
				#$mail->addReplyTo('tejapolisetty143@gmail.com', 'InnovationPortal');
                $mail->addAddress($email); 
				//$mail->addCC('cc@example.com');
				//$mail->addBCC('bcc@example.com');

				$mail->isHTML(true);  // Set email format to HTML

				#$bodyContent = '<h1>How to Send HTML Email using PHP in Localhost by Weidea4u</h1>';
				$bodyContent = '<p>This is the email sent from <b>InnovationPortal</b></p>';
				//getting values of all attributes of particular prouct name
		$sql = "SELECT *  from iproduct where name like '".$_GET['name']."'";		
		$result = $conn->query($sql);
		if ($result->num_rows > 0)
			{
			while($row = $result->fetch_assoc())
			    {
					$name=$row['name'];
					$mail=$row['mail'];
					$pwd=$row['pwd'];
					$image=$row['image'];
					$date=$row['date'];
					
				}//while
			}//if
			$bodyContent .="Name of the organisation  = ".$name."<br> ";
			$bodyContent .="Name of the Product  = ".$mail."<br> ";
			$bodyContent .="Innovator Name  = ".$innovator_name."<br> ";
			$bodyContent .="Product Description  = ".$pwd."<br> ";
			$bodyContent .="Sector  = ".$sector."<br> ";
			$bodyContent .="Linkages To Research  = ".$image."<br> ";
            $bodyContent .="Stage Of Development  = ".$date."<br> ";
            

				$mail->Subject = 'Mail from teja using php';
				$mail->Body    = $bodyContent;
							$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

				if(!$mail->send()) {
				    ?>
				    <div class="alert alert-danger alert-dismissable fade in">
				   	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				   		Message could not be sent.
				   	</div>
				    <?php
					header("location:dashboard.php");
				} else {
				    ?>
				   	<div class="alert alert-success alert-dismissable fade in">
				   	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				   		Message has been sent
				   	</div>
				    <?php
					// header("location:adminnotifications.php");
				}
			
			?>
			
		</div>
	</div>
</div>
</body>
</html>