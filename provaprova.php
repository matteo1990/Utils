<html>
	<form method="get">
		<input name="chiave" type="text"> 
		<input type="submit"> 
	</form>
</html>

<?php

	/*
	 * 
	 * $numero = ???
	 */
	function modulo($numero) {
		if ($numero<0) {
		return $numero * -1;
		}
		
	else {
		return $numero;
		}
	}
		
	$result = modulo($_GET["chiave"]);
	
	echo $result;
	

?>
