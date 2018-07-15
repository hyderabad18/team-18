<?php
	session_start();
	session_unset(); 
	session_destroy();
	echo "
		<html>
			<body>
				<script type='text/javascript'>
					window.location='student.php';
				</script>
			</body>
		</html>
		";
?>