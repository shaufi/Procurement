<html>
<head>
<?php
$dbhost = "localhost/ 127.0.0.1";
$dbuser = "root";
$password = "";
$dbname = "data_rfq";
 		
$con = mysql_connect($dbhost, $dbuser, $password) or die
("Koneksi gagal");
mysql_select_db($dbname, $con);

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
</head>

<head>
    <title>Shaufi</title>
 </head>
 <body>

    <style>
    #orderdate{
    	float:right;
    }
    body{
    	background: lightblue;
    }
    </style>

    <script>
	function windowClose() { 
	window.open('','_parent',''); 	
	window.close();
	} 
    </script>

</head>
<body>

<form>

<h1 style="color:red"><center> Request For Quatation </center></h1>
<br>

<tr>
<td>RFQ ID:</td>
	<td><input type="text" name="RFQ ID" id="RFQ ID"></td>

<br>
<br>
	<td>Supplier:</td>
	<td><input type="text" name="Supplier" id="Supplier" ></td>



	<td>Order_date:</td>
	<right><td><input type="date" name="Order_Date" id="Order_Date" align="right"></td><right-center>

</tr>

<br>

<h3 style="color:blue">Material </h3>

<table>
	<form action="insert.php" method ="post">
	<tr>
		<td>ID:</td>
		<td><input type="text" name="ID" id="ID"></td>
	</tr>
	<tr>
		<td>Product:</td>
		<td><input type="text" name="Product" id="Product"></td>
	</tr>
	<tr>
		<td>Quantity:</td>
		<td><input type="text" name="Quantity" id="Quantity"></td>
	</tr>
	<tr>
		<td>Unit_Price:</td>
		<td><input type "text" name ="Unit_Price" id="Unit_Price"></td>
	</tr>
	<tr>
		<td>Taxes:</td>
		<td><input type="text" name="Taxes" id="Taxes"></td>
	</tr>
	<tr>
		<td>Subtotal:</td>
		<td><input type="text" name="Subtotal" id="Subtotal"></td>
	</tr>
	<tr>
		<td><input type="submit" value="add" name="add"></td>
	</tr>
</form>
</table>

<br>

<form action="file:///G:/PO.php"><input type="submit" value="Send"> 

<input type="button" value="Cancel" onclick="windowClose()">

</form> 
</body>
</html>
