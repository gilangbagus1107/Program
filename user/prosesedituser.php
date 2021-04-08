<?php

if(isset($_POST['update'])){
	
	include('..\koneksi.php');
	
	$username	= $_POST['username'];	
	$namamember	= $_POST['namamember'];	
	$email		= $_POST['email'];		
	$password	= $_POST['password'];	
	$telepon	= $_POST['telepon'];	
	$alamat		= $_POST['alamat'];		
	
	$update = mysql_query("UPDATE tbmember SET namamember='$namamember', email='$email', password='$password', telepon='$telepon', 
							alamat='$alamat' WHERE username='$username'") or die(mysql_error());

	if($update){
		
		echo 'Data berhasil di simpan! ';		
		echo '<a href="eprofil.php">Kembali</a>';	
		
	}else{
		
		echo 'Gagal menyimpan data! ';	
		echo '<a href="eprofil.php">Kembali</a>';	
		
	}
 
}else{	
 
	echo '<script>window.history.back()</script>';
 
}
?>