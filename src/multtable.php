<html>
	<head>
	<meta charset="UTF-8">
	<title>Multiplication Table</title>
	<body>
		<form action="multtable.php" method="get">
		Minimum Multiplicand<br><input type="number" name="min-multiplicand">
		<br><br>
		Maximum Multiplicand<br><input type="number" name="max-multiplicand">
		<br><br>
		Minimum Multiplier<br><input type="number" name="min-multiplier">
		<br><br>
		Maximum Multiplier<br><input type="number" name="max-multiplier">
		<br><br>
		<input type="submit">
		</form>
		
		<?php
		//done with help from http://www.dreamincode.net/forums/topic/219304-multiplication-table/
		$min_x = $_GET["min-multiplicand"];
		$max_x = $_GET["max-multiplicand"];
		
		$min_y = $_GET["min-multiplier"];
		$max_y = $_GET["max-multiplier"];
		
		if($min_x > $max_x || $min_y > $max_y)
		{	echo "That doesn't work. Minimum has to be less than maximum.";
		}
		
		else
		{
 
		echo '<table>';
		echo '<tr><th></th>';
		
		for ($x = $min_x; $x <= $max_x; $x++) 
		{ 	echo '<th>'.$x.'</th>'; 
		}
	
		echo "</tr>\n";
		
		for ($y = $min_y; $y <= $max_y; $y++) 
		{	echo '<tr><th>'.$y.'</th>';
			for ($z = $min_x; $z <= $max_x; $z++) 
			{	echo '<td>'.($y*$z).'</td>';
			}
			
			echo "</tr>\n";
		}
		
		echo '</table>';
		
		}//end else


		?>
		
	</body>
</html>