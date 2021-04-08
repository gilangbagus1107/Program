<!DOCTYPE html>
<html lang="en" id="home">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
		integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<title>Megatek</title>
</head>

<body>

<?php
include 'topbar.php';
?>
<body>
<h1><font face="calibri">ISI DATA DI FORM BERIKUT</font></h1> 
<form  action="prosesregis.php" method="post">

 <table>

 <tr>
<td>Username : </td>
<td><input type="text" name="username" maxlength="15"/></td>
</tr>

<tr>
<td>Nama Member : </td>
<td><input type="text" name="namamember" maxlength="30"/></td>
</tr>

<tr>
<td>Email : </td>
<td><input type="email" name="email" maxlength="50"/></td>
</tr>

<tr>
<td>Password : </td>
<td><input type="password" name="password" maxlength="10"/></td>
</tr>

<tr>
<td>Nomor Telepon : </td>
<td><input type="text" name="telepon" maxlength="12"/></td>
</tr>

<tr>
<td>Alamat : </td>
<td><input type="text" name="alamat" maxlength="50"/></td>
</tr>

<tr>
<td></td>
<td><button type="submit"> Kirim </button></td>
</tr>
</table>
</form>

<?php
include 'bottombar.php';
?>


	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>

	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
	
</body>
</html>