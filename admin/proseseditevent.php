<?php
include('..\koneksi.php');
	
if(isset($_POST['update'])){
	
	$kdevent	= $_POST['kdevent'];	
	$namaevent	= $_POST['namaevent'];	
	$gambar		= $_POST['gambar'];
	$harga		= $_POST['harga'];	
	$detail		= $_POST['detail'];	
	
	
	$update = mysql_query("UPDATE tbevent SET namaevent='$namaevent', harga='$harga', detail='$detail', gambar='$gambar'
							 WHERE kdevent='$kdevent'") or die(mysql_error());
	
	//jika query update sukses
	if($update){
		
		echo 'Data berhasil di simpan! ';		//Pesan jika proses simpan sukses
		echo '<a href="event.php">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
	}else{
		
		echo 'Gagal menyimpan data! ';		//Pesan jika proses simpan gagal
		echo '<a href="event.php">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
	}
 
}else{	//jika tidak terdeteksi tombol simpan di klik
 
	//redirect atau dikembalikan ke halaman edit
	echo '<script>window.history.back()</script>';
 
}
?>