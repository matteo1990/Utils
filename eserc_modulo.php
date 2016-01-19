<html>
	<form method="get">
		<input name="chiave" type="text"> 
		<input type="submit"> 
	</form>
</html>

<?php


	
	if ($_GET["chiave"]<0) {
		$temp = $_GET["chiave"] * -1;
		echo ($temp);
		}
		
	else {echo $_GET["chiave"];}

?>
