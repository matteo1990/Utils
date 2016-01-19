<?php

include "libreria_classi.php";

	function presenta($animale) {
		$r="Sono " . $animale->nome;
		$r.="<br/>ho " . $animale::NZAMPE . " zampe";
		$r.="<br/>faccio " . $animale->verso();
		
		return $r;
		}


// creiamo una array di animali
$animali=array();
	
	$a=new Cane();
	$a->nome="Fido";
	$animali[]=$a;
	
	$a=new Cane();
	$a->nome="Wolf";
	$animali[]=$a;
	
	$a=new Papero();
	$a->nome="Paperino";
	$animali[]=$a;
	
	$a=new Pesce();
	$a->nome="Nemo";
	$animali[]=$a;

	foreach ($animali as $a) {
		echo presenta($a);
		echo "<br/><br/>";
		}

?>
