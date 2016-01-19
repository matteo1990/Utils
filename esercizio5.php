<html>
	<form method="get">
		<input name="chiave1" type="text"> 
		<input name="chiave2" type="text"> 
		<input type="submit"> 
	</form>
</html>

<?php
	function expr($num1, $num2) {
		$num3 = $num1;
		$num1 = $num2;
		$num2 = $num3;
		
		echo $num1;
		echo $num2;}
		
		expr($_GET["chiave1"], $_GET["chiave2"]);
		
?>
