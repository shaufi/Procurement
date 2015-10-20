<?php
	
	include ('config.php');
 	if(isset($_POST["add"]))
 	{
 		include('config.php')
 		$ID = $_POST['id'];
		$Product = $_POST['product']; 		
		$Quantity = $_POST['quantity'];
		$Unit_Price = $_POST['unit price'];
		$Taxes = $_POST['taxes'];
		$Subtotal = $_POST['subtotal'];
 		
 		$sql = echo "INSERT INTO rfq(id, product, quantity, unit_price, taxes, subtotal)
 		VALUES ($ID,'$Product',$Quantity,
 			$Unit_Price,$Taxes,$Subtotal)",$con) or die (mysql_error());			
		$variabelapaaja = "sampai sini";
		echo $variabelapaaja;
		if($sql){
 			header("location: ")
		}else{
}
?>
