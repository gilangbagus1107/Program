<?php
include "../koneksi.php";
$kdevent=$_POST['kdevent'];
$namaevent=$_POST['namaevent'];
$harga=$_POST['harga'];
$detail=$_POST['detail'];

$lokasi_file = $_FILES['gambar']['tmp_name'];
$nama_file   = $_FILES['gambar']['name'];
move_uploaded_file($lokasi_file,'../images/'.$nama_file);

if (empty($kdevent) or empty($namaevent)or empty($harga) or empty($detail) or empty($nama_file)){
	echo "<script>window.alert('Data Belum Diisi Lengkap');
        window.location=('inputevent.php')</script>";}
		else {

$query = "insert into tbevent(kdevent,namaevent,gambar,harga,detail)
values('$kdevent','$namaevent','$nama_file','$harga','$detail')";
$result=mysql_query($query);
echo "<meta http-equiv=Refresh content=0;url=event.php>";
		}
?>
