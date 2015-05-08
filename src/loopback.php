<html>
	<head>
	<meta charset="UTF-8">
	<title>Loop Back!</title>
	<body>
	<form action="loopback.php" method="get">
		Give me something.<br><input type="number" name="_input">
		<br>
		<input type="submit">
	</form>
	<?php

	if($_GET != NULL) 
	{	$jsonGet = json_encode($_GET);
		echo $jsonGet;
		return $jsonGet;
	}
	
	?>	
	</body>
</html>