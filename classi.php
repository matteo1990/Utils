<?php

class Numero
{
private $n;
public function __construct($numero)
	{
	$this->n = $numero;
	}
	
	public function modulo ()
	{
		
		if ($this->n < 0) {
		return - $this->n;
		}
		return $this->n;
		}
		
	public function somma ($a)
	{
		return $this-> n + $a;
		}

	public function quadrato ()
		{
		return $this->n * $this->n;
			}
	
	public function moltiplico ($a)
		{
			return $this->n * $a;
			}
}
$var1= new Numero(-5);
$var2= new Numero(-9);

echo $var1->modulo() . "<br />";
echo $var1->somma(1000) . "<br />";
echo $var1->quadrato() . "<br />";
echo $var2->moltiplico(10) . "<br />" ;
echo $var2->modulo();
?>
