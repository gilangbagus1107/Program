<html>
		<header><title>Megatek</title>
		</header>
<body bgcolor="grey">
<center>

<?php 
# lihat_penguna.php
// Skrip ini membaca semua rekaman
// dari tabel pengguna.

include 'topbar.php';
// Header Halaman:
echo '<font face="calibri" align="center">';
echo '<h1>Daftar Event</h1>';

//koneksi ke database
include '..\koneksi.php';

// melakukan query
$q = "SELECT * FROM tbevent ORDER BY kdevent ASC";

$r = mysql_query ($q); //Jalankan query

// Menghitung jumalah baris yang dihasilkan
$jum = mysql_num_rows($r);
if($jum>0){ //Jika berjalan OK, tampilkan rekaman
	// Menampilkan berapa banyak peminat
	echo "<p>Sekarang terdapat $jum
			event yang berjalan.</p>\n";
			
	// Header tabel
	
	echo '<table border="1" cellspacing="3" cellpadding="3" align="center" width="75%">
	<a href="inputevent.php"> Tambah Event </a>
	<tr>
	<td><font face="calibri" ><b>Edit</b></td>
	<td><font face="calibri" ><b>Hapus</b></td>
	<td><font face="calibri" ><b>Kode Event</b></td>
	<td><font face="calibri" ><b>Nama Event</b></td>
	<td><font face="calibri" ><b>Gambar</b></td>
	<td><font face="calibri" ><b>Harga</b></td>
	<td><font face="calibri" ><b>Detail</b></td>
	</tr>';
	
	// Menampilkan semua rekaman
	while ($baris = mysql_fetch_array($r)) {
		$gambar=$baris['gambar'];
		echo '<tr>
				<td align="left"><font face="calibri" ><a href="editevent.php?kdevent='.$baris['kdevent'].'">Edit</a></td>
				<td align="left"><font face="calibri" ><a href="hapusevent.php?kdevent='.$baris['kdevent'].'">Hapus</a></td>
				<td align="left"><font face="calibri" >'.$baris['kdevent'].'</td>
				<td align="left"><font face="calibri" >'.$baris['namaevent'].'</td>
				<td align="left"><font face="calibri" ><img src=../images/'.$gambar.' width=80></td>
				<td align="left"><font face="calibri" >'.$baris['harga'].'</td>
				<td align="left"><font face="calibri" >'.$baris['detail'].'</td>
				</tr>
				';
		}
		echo '</table>'; // Menutup tabel
		mysql_free_result ($r); // Membebaskan sumber daya
	} else {// Jika tidak ada rekaman yang dihasilkan
		echo'<p class="error">Tidak ada pengguna yang terdaftar.</p>';
		
} // akhir dari IF.

include ('bottombar.php');
?>

</html>