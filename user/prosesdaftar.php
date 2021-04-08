<?php
include "../koneksi.php";
$kdevent=$_POST['kdevent'];
$username=$_POST['username'];
$namamember=$_POST['namamember'];
$telepon=$_POST['telepon'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$harga=$_POST['harga'];
$status=$_POST['status'];

$cekdulu= "select * from tbpendaftaran where username='$_POST[username]' and kdevent='$_POST[kdevent]'"; 
$prosescek= mysql_query($cekdulu);

if (empty($kdevent) or empty($username) or empty($namamember) or empty($telepon) or empty($alamat) or empty($email) or empty($harga) or empty($status)){
echo "<script>window.alert('Data Belum Diisi Lengkap')</script>";}

else if(mysql_num_rows($prosescek)>0) { //proses mengingatkan data sudah ada
			echo "<script>alert('Anda sudah mendaftar di Event ini');history.go(-2) </script>";
			}	
        
		else {

$query = "insert into tbpendaftaran(kdevent,username, namamember, telepon, alamat, email, harga, status)
values('$kdevent','$username','$namamember','$telepon','$alamat','$email','$harga','$status')";
$result=mysql_query($query);
echo "<meta http-equiv=Refresh content=0;url=tbpendaftaran.php?kdevent=$kdevent ?username=$username> 
		<script>window.alert('Pendaftaran Berhasil, Silahkan Simpan/Cetak Bukti Pendaftaran')";
		}

 ?>

