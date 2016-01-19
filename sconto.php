<html>
	<form method="get">
		<input name="prezzo" type="text" placeholder="inserire prezzo">
		<input name="sconto" type="text" placeholder="inserire %sconto">
		<input type="submit">
	</form>
</html>

<?php

//prezzo - (prezzo*sconto)/100
class Sconto
	{private $n;
	public function __construct($price)
	{$this->n = $price;
	}
	
	public function expression($sconto)
	{return $this->n - ($this->n*$sconto)/100;
		}
	}//fine classe
	if (isset($_GET["prezzo"]) and isset($_GET["sconto"])) {
		if (is_numeric($_GET["prezzo"]) and is_numeric($_GET["sconto"])) 
		{
	$a= new Sconto ($_GET["prezzo"]);
	echo $a->expression($_GET["sconto"]);
	}
	else 
	{echo "Inserisci un numero, per favore";}
}
?>



