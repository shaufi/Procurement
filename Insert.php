<?php

 	if(isset($_POST["add"]))
 	{
 		include('config.php');

 		$ID = $_POST['ID'];
		$Product = $_POST['Product']; 		
		$Quantity = $_POST['Quantity'];
		$Unit_Price = $_POST['Unit_Price'];
		$Taxes = $_POST['Taxes'];
		$Subtotal = $_POST['Subtotal'];

 		$sql = mysql_query("INSERT INTO rfq
 		VALUES ('$ID','$Product','$Quantity','
 			$Unit_Price','$Taxes','$Subtotal')" or die (mysql_error());

		if($sql){
		
		echo 'Data berhasil di tambahkan! ';		//Pesan jika proses tambah sukses
		echo '<a href="insert.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="insert.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}
 
}else{	//jika tidak terdeteksi tombol tambah di klik
 
	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';
 
}
?>
