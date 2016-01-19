<html>
	<form method="get">
		<input name="price" type="text" value="price"> 
		<input name="tax" type="text" value="tax"> 
		<input type="submit"> 
	</form>
</html>

<?php
	function expr($price, $tax) {
		$receipt = $price+($price*$tax)/100;
		return $receipt;
		}
		
		$result = expr($_GET["price"], $_GET["tax"]);
		echo $result;
	
?>
