<?php
	session_start();
	session_unset(); 
	session_destroy();
	echo "
		<html>
			<body>
				<script type='text/javascript'>
<<<<<<< HEAD
					window.location='student.php';
=======
					window.location='index1.php';
>>>>>>> 3209c97bfc91bea898a2d7978e563849df7e1f8c
				</script>
			</body>
		</html>
		";
?>
