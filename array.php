<?php
	$dizionario=array("fish"=>"pesce", "snail"=>"lumaca", "tiger"=>"tigre", "whale"=>"balena", 	"koala"=>"koala");
	$dizionario["cat"]="gatto";
	$dizionario["dog"]="cane";

	ksort($dizionario);

	foreach($dizionario as $i => $el){
		echo $i."=".$el;
		echo "<br>";}



?>
