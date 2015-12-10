<?php

	$lista=array ("gatto", "lince", "leopardo");
		array_push($lista, "leone");
		array_unshift($lista, "tigre");
			echo "$lista[0]<br>";
		array_unshift($lista, "pantera");
			echo "$lista[0] "."$lista[1]<br><br><br>";
			echo array_pop($lista);
			echo array_shift($lista)."<br><br>";
			echo "L'array contiene ".count($lista)." elementi: <br>";
		foreach($lista as $i => $el){
			echo $i.": ".$el; 
			echo "<br>";
			}
		
?>
