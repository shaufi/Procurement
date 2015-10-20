<html>
<head>
    <title>Shaufi</title>
    
    <style>
    #orderdate{
    	float:right;
    }
    </style>
    <script>
    </script>
</head>
<h1 style="color:red"><center> Purchase Order</center></h1>
<form>
<br>
RFQ ID:
<input type="text" name="PO ID" id="PO ID" /><br />

<br>
Supplier:
<input type="text" name="Supplier" id="Supplier" /><br />

Order date:
<right><input type="date" name="Order Date" id="Order Date" align="right"/><br /></right>
</form>


<br>

<form action=""><input type="submit" value="Send">

<form><input Type="button" VALUE="Back" onClick="history.go(-1);return true;"></FORM>
<br>

<table cellpadding="5" cellspacing="0" border="4">
   <table cellpadding="5" a href =cellspacing="0" border="4">
    <tr bgcolor="#CCCCCC">
        <th>ID</th>
        <th>Product</th>
        <th>Quantity</th>
        <th>Unit Price<th>
        <th>Taxes</th>
        <th>Subtotal</th>>
    </tr>
    <?php
            $query=mysql_query("select * from rfq");  
            $no=1;                                     
            while($lihat=mysql_fetch_array($query)){        
            ?>      
        <tr>
            <td><?php echo $no++; ?></td>                  
            <td><?php echo $lihat['id'] ?></td>        
            <td><?php echo $lihat['product'] ?></td>           
            <td><?php echo $lihat['quantity'] ?></td>           
            <td><?php echo $lihat['unit_price'] ?></td>         
            <td><?php echo $lihat['taxes'] ?></td>
            <td><?php echo $lihat['subtotal'] ?></td>
        </tr>
        <?php
            }
        ?>
</table>
</body>
</html>
