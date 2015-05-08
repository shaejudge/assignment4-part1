<?php session_start(); 
	$_SESSION['firstVisit'] = 1;
	
	//echo $_SESSION['firstVisit']; 
	
	if(isset($_POST['killSession'])){
		session_destroy();
	}
	?>

<html>
	<head>
	<title>Login!</title>
	<body>
	<form action="http://web.engr.oregonstate.edu/~judges/content2.php" method="POST">
	
	<input type= "hidden" name="visitSession" value="<?php echo $_SESSION['firstVisit']; ?>";>
	
	Enter Username <br>
	<input type="text" name="username" />
	<br><br>
	
	Enter Password <br>
	<input type="password" name="password" />
	<br>
	<input type="submit" name="Submit1" value="Login" />
	<br>

	</body>
</html>