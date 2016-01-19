<html>
<form method="get">
	<input name="str1" input="text" placeholder="Scrivi qui per ribaltare">
	<input type="submit">
	<input name="cerca" input="text" placeholder="Scrivi ">
	<input type="submit">
</form>
</html>

<?php

include "elencoclassi.php";

if (isset($_GET["str1"])) {
$a = new Stringa ($_GET["str1"]);
echo $a->ribalta();

echo $a->evidenzia($_GET["cerca"]);
}

?>
