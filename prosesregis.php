<?php
include "koneksi.php";

$username=$_POST['username'];
$namamember=$_POST['namamember'];
$email=$_POST['email'];
$password=$_POST['password'];
$telepon=$_POST['telepon'];
$alamat=$_POST['alamat'];

$cekdulu= "select * from tbmember where username='$_POST[username]'"; //username dan $_POST[un] diganti sesuai dengan yang kalian gunakan
$prosescek= mysql_query($cekdulu);

if (empty($username) or empty($namamember) or empty($email) or empty($password) or empty($telepon)
	or empty($alamat)) 
	{
		echo "<script>alert('Data Belum Diisi Lengkap');
			window.location=('registrasi.php')</script>";
		}
	else if(mysql_num_rows($prosescek)>0) { //proses mengingatkan data sudah ada
			echo "<script>alert('Username Sudah Digunakan');history.go(-1) </script>";
			}	
	else
	{
mysql_query("INSERT INTO tbmember (username, namamember, email, password, telepon, alamat) 
			VALUES ('".$_POST['username']."','".$_POST['namamember']."','".$_POST['email']."',
			'".$_POST['password']."','".$_POST['telepon']."','".$_POST['alamat']."')");
mysql_close($koneksi);
print 'Data Sukses dimasukkan';
echo "<script>window.alert('Pendaftaran Sukses, Silahkan Login Terlebih Dahulu');
				window.location=('login_user.php')</script>";
}
?>