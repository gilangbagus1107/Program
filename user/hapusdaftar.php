<?php

include '..\koneksi.php';

if (isset($_GET['idpendaftaran'])) {
	$idpendaftaran = $_GET['idpendaftaran'];

$query = "SELECT * FROM tbpendaftaran WHERE idpendaftaran = '$idpendaftaran'";
$hasil = mysql_query($query);
}

else{
	die ("Error. Tidak ada pendaftaran yang dipilih Silahkan cek kembali");
}

// proses hapus data

	if (!empty($idpendaftaran) && $idpendaftaran !="" ) {
		$hapus = "DELETE FROM tbpendaftaran WHERE idpendaftaran = '$idpendaftaran'";
		$sql= mysql_query($hapus);
	    } if($sql) {
			echo "
				<script>window.alert('Seluruh Data  di Id Pendaftaran $idpendaftaran Berhasil dihapus');
				window.location=('tbpendaftaran.php')</script>";
		
		} else {
			echo '<font color=red><center>Data pendaftaran gagal dihapus</center></font>';
		}
		
// Tutup Koneksi engine Mysql
mysql_close();

?>