<?php
include "../koneksi.php";
$username=$_POST['username'];
$idpendaftaran=$_POST['idpendaftaran'];

$cekdulu= "select * from tbkedatangan where idpendaftaran='$idpendaftaran' "; //username dan $_POST[un] diganti sesuai dengan yang kalian gunakan
$prosescek= mysql_query($cekdulu);

if (empty($username)or empty($idpendaftaran)){
	echo "<script>window.alert('Data Belum Diisi Lengkap');
        window.location=('inputkedatangan.php?')</script>";}
		
		else if(mysql_num_rows($prosescek)>0) { //proses mengingatkan data sudah ada
			echo "<script>alert('Member ini sudah datang');history.go(-1) </script>";
			}	
		
		else {

$q1="SELECT * from tbpembayaran where username='$username' and idpendaftaran=$idpendaftaran";		
$q2="SELECT * from tbpendaftaran where username='$username' and idpendaftaran=$idpendaftaran";	

 	$r1=mysql_query($q1) or die('Database Failed');
 	$r2=mysql_query($q2) or die('Database Failed');
	$data1=mysql_fetch_array($r1);
	$data2=mysql_fetch_array($r2);

$idpembayaran=$data1['idpembayaran'];	
$kdevent=$data2['kdevent'];
$namamember=$data2['namamember'];
$telepon=$data2['telepon'];

$query = "insert into tbkedatangan(idpembayaran,idpendaftaran,kdevent,username,namamember,telepon)
values('$idpembayaran','$idpendaftaran','$kdevent','$username','$namamember','$telepon')";
$result=mysql_query($query);
echo '<meta http-equiv=Refresh content=0;url=inputkedatangan.php?>';
		}
?>
