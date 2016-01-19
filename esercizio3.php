<html>
	<form method="get">
		<input name="chiave1" type="text"> 
		<input name="chiave2" type="text"> 
		<input type="submit"> 
	</form>
</html>

<?php
		
		function expr($a, $b) {
			$x = -$b/$a;
			return $x;
		}
		
		$result = expr($_GET["chiave1"], $_GET["chiave2"]);
		echo $result;
		
		
		
?>
