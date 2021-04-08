<?php 
 session_start();
 if (empty($_SESSION['username'])) {
 header("location:event.php"); // jika belum login, maka dikembalikan ke file form_login.php
 }
 else {

include "../koneksi.php"; 
$idpendaftaran=$_GET['idpendaftaran'];
$username=$_SESSION['username'];

	$q="SELECT * from tbpendaftaran where idpendaftaran='$idpendaftaran' and username='$username'";
 	$r=mysql_query($q)or die('Database Failed');
 	$data=mysql_fetch_array($r);
 	
	$namamember=$data['namamember'];

?>
<center>
<body onLoad="window.print()">
<table width="auto" border="1" bordercolor="#666666" bordercolorlight="#009966" cellspacing="0">
  <tr align="center">
    <td width="40%" bgcolor="#CCCCCC"><img src="../logo/logo.png" width="100" height="84" />
    </td>
     <td colspan="2" align="center" bgcolor=#ccc><h2>MEGATEK</h2>
       <p><strong>BUKTI PENDAFTARAN EVENT</strong><br>Jl. Alai Timur, Komp. Villa Melti Mas II B/4</br></td>
  </tr>
    <td><strong>Username</strong></td> 
    <td><?php echo"$username"; ?> </td>
    </tr>
    <tr>
    <td><strong>Nama Member</strong></td>
	<td><?php echo"$namamember"; ?></td>
    </tr>
	<tr>
    <td><strong>Id Pendaftaran</strong></td>
	<td>PENDF - <?php echo"$idpendaftaran"; ?> </td>
    </tr>

</table>
    
</body>
</center>
 <?php } ?>