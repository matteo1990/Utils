

<?php

include "database_distanze.php";

//trova le possibili città di partenza
$listapartenza = array_keys($distanze);
$listadestinazione=array();

$partenza="";
if (isset($_GET["partenza"])) {
	if (isset($distanze[$partenza=$_GET["partenza"]])){
			//trova le città destinazione in basse alla città di partenza specificata
	$listadestinazione=array_keys($distanze[$partenza]);
	}
}
	
$destinazione="";
if (isset($_GET["destinazione"])) {
	if (isset ($distanze[$partenza][$_GET["destinazione"]])) {
		$destinazione=$_GET["destinazione"];
		}
	}
$distanza="sconosciuta";
if ($partenza != "" && $destinazione != "") {
	//città di destinazione e di partenza sono valide
	$distanza=$distanze[$partenza][$destinazione];
	}
?>


<html>
	<body>
	<form method="get">
		
		<?php if ($partenza == "") : ?>
		Selezione citt&agrave; di partenza:
			<select name="partenza" > <!--scegliamo la partenza -->
				<?php foreach($listapartenza as $c) : ?>
					<option value="<?php echo $c; ?>">
						<?php echo $c; ?>
					</option>
			<?php endforeach; ?>
		</select>
		<?php else : ?>
			Citt&agrave; di partenza: <?php echo $partenza; ?>
			<br/>
			<input 	type="hidden" 
					name="partenza" 
					value="<?php echo $partenza; ?>"></input>
		<?php endif; ?>
	
		<input type="submit" value="Seleziona partenza">
		</input>
		
		<?php if ($partenza != "") : ?>
		Selezione citt&agrave; di destinazione:
		<select name="destinazione" > <!--scegliamo la destinazione -->
				<?php foreach($listadestinazione as $c) : ?>
					<option value="<?php echo $c; ?>">
						<?php echo $c; ?>
					</option>
			<?php endforeach; ?>
		</select>
		<?php endif; ?>
		
		<input type="submit" value="Next">
		</input>
	</form>

	<?php if ($distanza != "sconosciuta") : ?>
	La distanza tra <?php echo $partenza; ?> e <?php echo $destinazione; ?> &egrave; di <?php echo $distanza; ?> km.
	<?php endif; ?>
	</body>
</html>


