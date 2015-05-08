<?php session_start(); 
		//echo $_SESSION[visits];
		
	if($_SESSION[visits] == 0) {
		header("Location: http://web.engr.oregonstate.edu/~judges/login.php");
	}
?>
<html>
	<head>
	<title>Content 1</title>
	<body>
	
	Sorry, we need a username. Try again <a href="http://web.engr.oregonstate.edu/~judges/login.php">here</a>.
	<?php //echo $_SESSION[visits];?>
	
	</body>
</html>
