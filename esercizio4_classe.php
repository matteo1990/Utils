<html>
	<form method="get">
		<input name="price" type="text" placeholder="price"> 
		<input name="tax" type="text" placeholder="tax"> 
		<input type="submit"> 
	</form>
</html>

<?php
class Number {
	private $n;
	public function __construct($price)
	{
	$this->n = $price;
	}
	
	public function expression ($tax)
	{ return $this->n +($this->n*$tax)/100;
		}
	
	}
	
	$a = new Number ($_GET["price"]);
	echo $a->expression($_GET["tax"]);
?>
