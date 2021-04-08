<?php
include "../koneksi.php";

$vidorder=$_GET['idpendaftaran'];
$vstatus='di kirim';

mysql_query("update aina_order set status='$vstatus' where id_order='$vidorder'");

header("location:daftar_order.php");
?>