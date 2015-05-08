<?php 
		session_start();
		$_SESSION['visits'];
		
		
		if(isset($_POST['visitSession'])){
			
		
		//$_SESSION['visits'] = $_POST['visitSession'];
		
		if(isset($_POST['Submit1'])){
			
			

		$username = $_POST["username"];
		
		if($username == null)
		{	header("Location: /content1.php", true);
		}
			
			$_SESSION['visits']++;
			echo "Hey $username, you have visited this page ".$_SESSION['visits']." times. \n";
	
	?>

<html>
	<head>
	<title>Content 2</title>
	<body>
	
	<form action="login.php" method="post"><br>
		<input type="submit" name="killSession" value="Kill Session">
		<br>
		</form>
	
	</body>
</html>
<?php
		}
		
		}else{
		header("Location: /login.php", true);
		}
		
?>