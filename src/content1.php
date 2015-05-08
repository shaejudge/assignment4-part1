<?php session_start(); 
		//echo $_SESSION[visits];
		
	if($_SESSION[visits] == 0) {
		header("Location: /login.php");
	}
?>
<html>
	<head>
	<title>Content 1</title>
	<body>
	
	Sorry, we need a username. Try again <a href="login.php">here</a>.
	<?php //echo $_SESSION[visits];?>
	
	</body>
</html>
