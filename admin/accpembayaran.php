<?php
include "../koneksi.php";

$idpendaftaran=$_GET['idpendaftaran'];
$status='SUDAH DI KONFIRMASI';

mysql_query("update tbpendaftaran set status='$status' where idpendaftaran='$idpendaftaran'");

header("location:pendaftaran.php");
?>