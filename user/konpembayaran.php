<?php
 session_start();
 if (empty($_SESSION['username'])) {
 header("location:../login_user.php"); // jika belum login, maka dikembalikan ke file form_login.php
 }
 else {
 ?> 
 
<html>
<title>MEGATEK</title>
<body bgcolor="white">
<center>
<table width="950" border="0">
  <tr>
  <?php
 $idpendaftaran=$_GET['idpendaftaran'];
 $username=$_SESSION['username'];
 include "..\koneksi.php";
    $query=mysql_query("select * from tbpendaftaran where idpendaftaran='$idpendaftaran'");
  include 'topbar.php';
 while($row=mysql_fetch_array($query)){ 
?>  
  <table width="700" border="0" bgcolor="grey">
    <td width="0" height="0" align="center" ><form action="simpanbayar.php" method="post" enctype="multipart/form-data">
  <tr>
    <td colspan="3" align="center"><h1>Entry Konfirmasi Pembayaran</h1></td>
    </tr>
  <tr>
    <td>Username</td>
    <td>:</td>
    <td><input name="username" type="text" value="<?php echo $username; ?>"></td>
  </tr>
  <tr>
    <td>Id Pendaftaran</td>
    <td>:</td>
    <td><input name="idpendaftaran" type="text" value="<?php echo $idpendaftaran; ?>"></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td>No Transaksi Bank / Record No.</td>
    <td>:</td>
    <td><input name="notransbank" type="text" /></td>
  </tr>
  <tr>
    <td>Bank</td>
    <td>:</td>
    <td>
		<br><input name="bank" type="checkbox" value="BCA" /><img align="center" width="50" src="..\logo\bca.png"></img>
		<input name="bank" type="checkbox" value="Mandiri"/><img align="center" width="50" src="..\logo\mandiri.png"></img></br>
		<br><input name="bank" type="checkbox" value="BRI"/><img align="center" width="50" src="..\logo\bri.png"></img>
		<input name="bank" type="checkbox" value="BNI"/><img align="center" width="50" src="..\logo\bni.png"></img></br>
		<br><input name="bank" type="checkbox" value="Nagari"/><img align="center" width="50" src="..\logo\bank nagari.png"></img></br>
	</td>
</td>
  </tr>
  <tr>
    <td>Nmr Rekening</td>
    <td>:</td>
    <td><input name="norek" type="text" /></td>
  </tr>
  <tr>
    <td>Nama Pemegang Rekening</td>
    <td>:</td>
    <td><input name="nmpemegang" type="text" /></td>
  </tr>
  <tr>
    <td>Total Bayar</td>
    <td>:</td>
	<td><input type="text" name="totbayar" value="<?php echo $row['harga'];?>"></td>

  </tr>
  <tr>
    <td>Tanggal Transfer</td>
    <td>:</td>
    <td><input name="tgltrans" type="date" /></td>
  </tr>
  <tr>
    <td>Tanggal Konfirmasi</td>
    <td>:</td>
    <td><input name="tglkon" type="date" /></td>
  </tr>
  <tr>
    <td colspan="3" align="right"><input name="submit1" type="submit" value="SAVE"/><input name="" type="reset" value="RESET"/></td>
    </tr>
</table>
</form>
</td>
<td>
	<?php
	include 'bottombar.php';
	?>
</td>
</table>
	<?php } ?>
</center>
</body>
</html>

 <?php } ?>