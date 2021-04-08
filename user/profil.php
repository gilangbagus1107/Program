<?php
 session_start();
 if (empty($_SESSION['username'])) {
 header("location:../index.php"); // jika belum login, maka dikembalikan ke file form_login.php
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
 Selamat <b><?php echo $_SESSION['username'] ?></b> Berhasil Masuk <br />
<h1><font face="calibri">ISI DATA DI FORM BERIKUT</font></h1>
<form method="post" action="<?php print
$_SERVER['PHP_SELF']?>">
 <table>

 <tr>
<td>Nama : </td>
<td><input type="text" name="username" maxlength="15"/></td>
</tr>

<tr>
<td>Password : </td>
<td><input type="password" name="password" maxlength="8"/></td>
</tr>

<tr>
<td>Nama Perusahaan : </td>
<td><input type="text" name="nama" maxlength="50"/></td>
</tr>

<tr>
<td>Alamat : </td>
<td><input type="text" name="alamat" maxlength="50"/></td>
</tr>

<tr>
<td>Nomor Telpon : </td>
<td><input type="" name="nmrtlp" maxlength="12"/></td>
</tr>

<tr>
<td>Bidang Usaha : </td>
<td><input type="text" name="busaha" maxlength="30"/></td>
</tr>

<tr>
<td>Email : </td>
<td><input type="email" name="email" maxlength="40"/></td>
</tr>

<tr>
<td></td>
<td><button type="submit"> Kirim </button></td>
</tr>
</table>
</form>

<?php
if (!empty($_POST['username']) and !empty($_POST['password']) and !empty($_POST['nama']) and !empty($_POST['alamat']) and !empty($_POST['nmrtlp'])
	and !empty($_POST['busaha']) and !empty($_POST['email']))
{
	//ini kode untuk memasukkan
	require 'koneksi.php';
	
mysql_query("INSERT INTO tbpeminat (username, password, nama, alamat, nmrtlp, busaha, email) 
			VALUES ('".$_POST['username']."','".$_POST['password']."','".$_POST['nama']."',
			'".$_POST['alamat']."','".$_POST['nmrtlp']."','".$_POST['busaha']."','".$_POST['email']."')");
mysql_close($koneksi);
print 'Data Sukses dimasukkan';
echo "<script>window.alert('Pendaftaran Sukses, Silahkan Login Terlebih Dahulu');
				window.location=('login_user.php')</script>";
}
?>
<?php
include 'bottombar.php';
?>
</body>
</html>
 <?php } ?>