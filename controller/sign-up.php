<!DOCTYPE HTML> 
<html> 
	<head> 
	<?php 
	include('config2.php');
	include ('connect2.php');
	include('check.php');

	?>
	
	<title>Sign-Up</title> 
		<link rel="stylesheet" type="text/css" href="css/signup.css"> 
	  </head> 
	   <body id="body-color"> 
	    <div id="Sign-Up"> 
		 <fieldset style="width:30%">
		  <legend>Registration Form</legend> 
		   <table border="0"> 
			<tr> 
				<form method="POST" action=".php"> 
				<td>Name</td>
				<td> <input type="text" name="name"></td> 
			</tr> 
		 	<tr> 
		 		<td>User Name</td><td> <input type="text" name="user"></td> 
		 	</tr> 
		 	<tr> 
		 		<td>Password</td><td> <input type="password" name="pass"></td> 
		 	</tr> 
		 	<tr> 
		 		<td>Confirm Password </td>
		 		<td><input type="password" name="cpass"></td> 
		 	</tr> 
		 	<tr> 
		 		<td><input id="button" type="submit" name="submit" value="Sign-Up"></td> 
		 		</tr> 
		 			</form> 
		 		  </table> 
		 		</fieldset> 
		 	  </div> 
		 	</body> 
		 </html>

