<?php
include "../koneksi.php";
$username=$_POST['username'];
$idpendaftaran=$_POST['idpendaftaran'];
$notransbank=$_POST['notransbank'];
$bank=$_POST['bank'];
$norek=$_POST['norek'];
$nmpemegang=$_POST['nmpemegang'];
$totbayar=$_POST['totbayar'];
$tgltrans=$_POST['tgltrans'];
$tglkon=$_POST['tglkon'];


if (empty($username) or empty($idpendaftaran) or empty($notransbank) or empty($bank)
	or empty($norek) or empty($nmpemegang) or empty($totbayar) or empty($tgltrans) or empty($tglkon)){
	echo "<script>window.alert('Data Belum Diisi Lengkap');
        window.location=('tbpendaftaran.php')</script>";}
		else {

$query = "insert into tbpembayaran(username,idpendaftaran,notransbank,bank,norek,nmpemegang,totbayar,tgltrans,tglkon)
values('$username','$idpendaftaran','$notransbank','$bank','$norek','$nmpemegang','$totbayar','$tgltrans','$tglkon')";

$status="SEDANG DI PROSES";

mysql_query("update tbpendaftaran set status='$status' where idpendaftaran='$idpendaftaran'");

$result=mysql_query($query);
echo "<meta http-equiv=Refresh content=0;url=tbpendaftaran.php>";
		}
		

?>
