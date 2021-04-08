<?php
$koneksi = mysql_connect("localhost","root","");
if (!$koneksi)
{
	die('Tidak bisa konek ke server : '.mysql_error());
}
mysql_select_db("dbmgt", $koneksi);
?>