<?php

include '..\koneksi.php';

// Cek username
if (isset($_GET['kdevent'])) {
	$kdevent = $_GET['kdevent'];
//Membaca nama file yang akan dihapus
$query = "SELECT * FROM tbevent WHERE kdevent = '$kdevent'";
$hasil = mysql_query($query);
}

else{
	die ("Error. Tidak ada event yang dipilih Silahkan cek kembali");
}

// proses hapus data

	if (!empty($kdevent) && $kdevent !="" ) {
		$hapus = "DELETE FROM tbevent WHERE kdevent = '$kdevent'";
		$sql= mysql_query($hapus);
	    } if($sql) {
			echo "
				<script>window.alert('Seluruh Data event $kdevent Berhasil dihapus');
				window.location=('event.php')</script>";
		
		} else {
			echo '<font color=red><center>Data event gagal dihapus</center></font>';
		}
		
// Tutup Koneksi engine Mysql
mysql_close();

?>