<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass,"cfgteam18");
   
    if(! $conn )
	{
		echo "Could not connect: ";
	}
		
	echo "
<<<<<<< HEAD
		<html>
			<head>
				<title>Mock Test</title>
				<link rel='stylesheet' href='style1.css'>
=======
		<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
			<head>
				<title>Mock Test</title>
				<meta charset="utf-8" />
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"> </script>
				<link rel='stylesheet' href='style.css'>
>>>>>>> 3209c97bfc91bea898a2d7978e563849df7e1f8c
				<script type='text/javascript'>
					function Redirect() 
					{
						window.location='ttes.php';
					}
					
				</script>
			</head>
			<body>
				<div class='main-text'>
					<!--img src='images/logo.jpg' width='150px' height='100px'-->
<<<<<<< HEAD
					MOCK TEST
=======
					C-Star
>>>>>>> 3209c97bfc91bea898a2d7978e563849df7e1f8c
					<div class='log_btn' id='response'>
						
					</div>
				</div>";
	
	session_start();
	
	if(isset($_SESSION['user']))
		$r=$_SESSION['user'];
	if(!isset($_SESSION['score']))
		$_SESSION['score']=0;
	if(!isset($_SESSION['n']))
		$_SESSION['n']=2;
	if(!isset($_SESSION['answ']))
		$_SESSION['answ']=0;
	
	//echo "<br>reg value:".$r."<br>";		
	
	//echo "<br>n value:".$_SESSION['n']."<br>";
	if(isset($_POST['submit']))
	{
		//echo "<br>jeevan: ".$_POST['options']."<br>gandla: ".$_SESSION['answ']."<br>";
			
		if($_SESSION['n']<=0)
		{
			if(isset($_POST['options'])&&$_POST['options']==$_SESSION['answ'])
				$_SESSION['score']++;
<<<<<<< HEAD

			// $bool="SELECT bool from results where username='$r'";
			// $ret1=mysqli_query($conn, $bool);
			// $score=$_SESSION['score'];
			//if(mysqli_num_rows($ret1)==0)
			//{
			//	$insert="INSERT into results values($score,0,$r,'TRUE')";
			//	$ret2=mysqli_query($conn, $insert);
			//}
			//else
			//{
			
			$sql="UPDATE results SET finalresult=".$_SESSION['score']." WHERE username='$r';";
=======
			
			$sql="UPDATE results SET mockresult=".$_SESSION['score']." WHERE username='$r';";
>>>>>>> 3209c97bfc91bea898a2d7978e563849df7e1f8c
			$ret=mysqli_query($conn, $sql);
			//$db->exec($sql);
			if(!$ret)
				echo "<script language='javascript'>
				alert('failed');
				</script>
				";
			else
				echo "<script language='javascript'>
				alert('Thank You participating');
				setTimeout('Redirect()', 1);
				</script>
				";
			//session_unset(); 
			//session_destroy(); 
<<<<<<< HEAD
			//}
=======
>>>>>>> 3209c97bfc91bea898a2d7978e563849df7e1f8c
		}
		else if($_SESSION['n']>0)
		{	
			if(isset($_POST['options'])&&$_POST['options']==$_SESSION['answ'])
			{
				$_SESSION['score']++;
				
			}
		}
		//echo "<br>hello: ".$_SESSION['n']."<br><br>world!".$_SESSION['score']."<br><br>";
	}
	
	
	echo "<form method='POST' action='newMock2.php'>";
		//$_SESSION['i']++;
		$id=rand(1,2);
		$sql = "SELECT que,opt1,opt2,opt3,opt4,answer from qbank where qno='$id'";
		//mysql_select_db('cstar');
		$retval = mysqli_query($conn, $sql);
<<<<<<< HEAD
=======
		<script>
        $(document).ready(function () {
                debugger;
                var u1 = new SpeechSynthesisUtterance(str);
                u1.lang = 'en-US';
                u1.pitch = 10;
                u1.rate = 1;
                //u1.voice = voices[10];
                u1.voiceURI = 'native';
                u1.volume = 10;
                speechSynthesis.speak($retval);

            });
    </script>
>>>>>>> 3209c97bfc91bea898a2d7978e563849df7e1f8c
		if(! $retval )
		{
			die('Could not get data: ');
		}
		echo "<table>";
		while($row = mysqli_fetch_array($retval))
		{
			echo "
				<tr>
					<td rowspan='5' style='font-size: 30px;border: solid #ccc;'>Q)</td>
					<td style='padding: 15px;padding-left: 25px;padding-right: 500px;border-bottom: solid #ccc;border-right: solid #ccc;border-top: solid #ccc;font-size: 25px;'>{$row['que']}</td>
				</tr>
				<tr>
					<td style='font-size: 25px;border-right: solid #ccc;border-bottom: solid #ccc;'><input type='radio' name='options' value='a'>{$row['opt1']}</td>
				</tr>
				<tr>
					<td style='font-size: 25px;border-right: solid #ccc;border-bottom: solid #ccc;'><input type='radio' name='options' value='b'>{$row['opt2']}</td>
				</tr>
				<tr>
					<td style='font-size: 25px;border-right: solid #ccc;border-bottom: solid #ccc;'><input type='radio' name='options' value='c'>{$row['opt3']}</td>
				</tr>
				<tr>
					<td style='font-size: 25px;border-right: solid #ccc;border-bottom: solid #ccc;'><input type='radio' name='options' value='d'>{$row['opt4']}</td>
				</tr>
				<br>
				<br>";
				$_SESSION['answ']=$row['answer'];
		}
		echo "</table>";
		if($_SESSION['n']>0)
		{
			$_SESSION['n']--;
			if($_SESSION['n']==0)
				echo "<center><input type='submit' name='submit' value='Submit' class='sub_btn1'></center>";
			else	
<<<<<<< HEAD
				echo "<center><input type='submit' name='submit' value='Next' class='sub_btn'></center>";
=======
				echo "<center><input type='submit' name='submit' value='Next' class='sub_btn' ></center>";
>>>>>>> 3209c97bfc91bea898a2d7978e563849df7e1f8c
		}
		else 
		{	
			echo "<center><input type='submit' name='submit' value='Submit' class='sub_btn1'></center>";
		}
		echo "
		</form>
		
		<script type='text/javascript'>
			setInterval(function()
			{
				var xmlhttp=new XMLHttpRequest();
				xmlhttp.open(\"GET\",\"response.php\",false);
				xmlhttp.send(null);
				document.getElementById(\"response\").innerHTML=xmlhttp.responseText;
				if(xmlhttp.responseText=='00:00')
				{		alert('Thank You participating');
<<<<<<< HEAD
=======
						
>>>>>>> 3209c97bfc91bea898a2d7978e563849df7e1f8c
						window.location='ttes.php';
				}
			},1000);
				
		</script>
		
		
		<body>
	<html>";
	//$getthevalueofid = $_POST['id'];
	//else
	//	echo "<script language='javascript'>
	//	alert('Please fill all fields!');
	//	</script>
	//	";	
	
	//}	
	//catch(PDOException $e){	
	//	echo "<h1>Connection failed! :(</h1>";
	//	 echo $sql . "<br>" . $e->getMessage();
	//}
	//$db=null;
	mysqli_close($conn);
?>