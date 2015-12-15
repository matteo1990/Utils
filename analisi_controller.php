<?php
	$testo="";
	
	if(isset($_POST["testo"])) {
		$testo=$_POST["testo"];
	}
	
	$arraytext = explode(" ", $testo);
	echo "le parole sono: ", sizeof($arraytext);
	
	$freqaparole=[];
	foreach($arraytext as $parola) {
		if(isset($freqaparole[$parola])) {
				$freqaparole[$parola]++;
			} else {
				$freqaparole[$parola]=1;
				}
		}
		arsort($freqaparole);
		foreach($freqaparole as $p => $conteggio) {
			echo $p . " = " . $conteggio , "<br/>";
			}
		
?>
