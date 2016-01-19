<html>
	<form method="get">
		<input name="chiave" type="text"> 
		<input type="submit"> 
	</form>
</html>

<?php
	echo $_GET["chiave"] * $_GET["chiave"];

?>
