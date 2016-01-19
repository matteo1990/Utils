<html>
	<form method="get">
		<input name="chiave" type="text"> </input>
		<input type="submit"/>
	</form>
</html>

<?php
	include "databasecibi.php";
	if (isset($_GET["chiave"])) {
		foreach ($cibieingredienti as $cibo => $ingr) 
		{echo strpos($ingr, $_GET["chiave"]);
		$var = strpos($ingr, $_GET["chiave"]);
		if ($var !== false) {
			echo $cibo;}
			};
	}
?>
