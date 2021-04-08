<?php
include "../koneksi.php";
$kdevent=$_POST['kdevent'];
$username=$_POST['username'];
$idpendaftaran=$_POST['idpendaftaran'];


if (empty($kdevent) or empty($username)or empty($idpendaftaran)){
	echo "<script>window.alert('Data Belum Diisi Lengkap');
        window.location=('konpendaftaran.php')</script>";}
		else {

$q="SELECT * from tbpendaftaran where kdevent='$kdevent' and username='$username' and idpendaftaran=$idpendaftaran";
 	$r=mysql_query($q)or die('Database Failed');
 	$data=mysql_fetch_array($r);
	
$telepon=$data['telepon'];
$namamember=$data['namamember'];

$query = "insert into tbkonfirmasi(kdevent,username,idpendaftaran,namamember,telepon)
values('$kdevent','$username','$idpendaftaran','$namamember','$telepon')";
$result=mysql_query($query);
echo "<meta http-equiv=Refresh content=0;url=konpendaftaran.php>";
		}
?>
