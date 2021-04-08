<?php
 session_start();
 if (empty($_SESSION['username'])) {
 header("location:event.php"); // jika belum login, maka dikembalikan ke file form_login.php
 }
 else {
 ?> 

<html>
		<header><title>Megatek</title>
		</header>
<body bgcolor="white">
<center>
<?php
include 'topbar.php';

?>
<body>
<form  action="prosesdaftar.php" method="post">
<table bgcolor="grey" border="0">
 
<tr>

<?php
$kdevent=$_GET['kdevent'];
$username=$_SESSION['username'];
include '../koneksi.php';
$q = "SELECT * FROM tbevent where kdevent='$kdevent' ORDER BY kdevent ASC";

$r = mysql_query ($q);
while ($baris = mysql_fetch_array($r)) {
		$gambar=$baris['gambar'];
		echo '<td rowspan="2"><img src=../images/'.$gambar.' width=250></td>';
		}
?>

<td><font size="4">Kode Event     
<br>Username       
<br>Nama Member 
<br>Nomor Telepon  
<br>Alamat
<br>Email
<br>Total Bayar
<br>Status    

</td>

<td><font size="4">:
<br>:
<br>:
<br>:
<br>:
<br>:
<br>:
<br>:
</td>

<?php 
include '../koneksi.php';
$q1 = "SELECT * FROM tbevent where kdevent='$kdevent'";
$r1 = mysql_query ($q1);
$baris1 = mysql_fetch_array($r1);
$q2 = "SELECT * FROM tbmember where username='$_SESSION[username]' ORDER BY username ASC";
$r2 = mysql_query ($q2);
$baris2 = mysql_fetch_array($r2);
?>
		 <td><input name="kdevent" type="text" value="<?php echo $kdevent; ?>">
		 <br><input name="username" type="text" value="<?php echo $username; ?>">
		 <br><input name="namamember" type="text" value="<?php echo $baris2['namamember']; ?>">
		 <br><input name="telepon" type="text" value="<?php echo $baris2['telepon']; ?>">
		 <br><input name="alamat" type="text" value="<?php echo $baris2['alamat']; ?>">
		 <br><input name="email" type="text" value="<?php echo $baris2['email']; ?>">
		 <br><input name="harga" type="text" value="<?php echo $baris1['harga']; ?>">
			<?php if ($baris1["harga"]=="Free 18+") 
					{
						echo '<br><input name="status" type="text" value="Free"';
					}
					else 
					{
						echo '<br><input name="status" type="text" value="BELUM BAYAR"';
					}
			?>
		 </td> 
 </tr>
 <tr>
 <td align="center" colspan="3"><button type="submit"> Kirim </button></td>
 </tr>
</form>
</table>
<?php
include 'bottombar.php';
?>

 <?php } ?>

</body>
</html>


