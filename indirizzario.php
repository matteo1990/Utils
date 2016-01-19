<html>
	
	<form method="post">
			<input name="nome" placeholder="Nome" type="text"/>
			<input name="cognome" placeholder="Cognome" type="text"/>
			<input name="indirizzo" placeholder="Indirizzo" type="text"/>
			<input name="tel" placeholder="Tel" type="text"/>
			<input name="ncell" placeholder="Cellulare" type="text"/>
			<input type="submit" value="Submit"/>
	</form>
</html>

<?php
	include "libreria_classi.php";
	if (isset($_POST["nome"]) &&
	isset($_POST["cognome"]) &&
	isset($_POST["indirizzo"]) &&
	isset($_POST["tel"]) &&
	isset($_POST["ncell"])) {
		
		$info = new IndirizzoEsteso();
		$info->nome=$_POST["nome"];
		$info->cognome=$_POST["cognome"];
		$info->indirizzo=$_POST["indirizzo"];
		$info->tel=$_POST["tel"];
		$info->ncell=$_POST["ncell"];
		
		
		echo $info->visualizza();
		
	}
?>
