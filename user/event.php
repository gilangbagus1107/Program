<?php
 session_start();
 if (empty($_SESSION['username'])) {
 header("location:../login_user.php"); // jika belum login, maka dikembalikan ke file form_login.php
 }
 else {
 ?> 

<html>
		<header><title>Megatek</title>
		</header>
<body bgcolor="white" align="center">
<center>

<?php 
# lihat_penguna.php
// Skrip ini membaca semua rekaman
// dari tabel pengguna.

include 'topbar.php';
// Header Halaman:
echo '<font face="calibri" color="black" align="center">';
echo '<h1>Daftar Event</h1>';

//koneksi ke database
include '../koneksi.php';

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
	<tr>
	<td><font face="calibri" color="black"><b>Kode Event</b></td>
	<td><font face="calibri" color="black"><b>Nama Event</b></td>
	<td><font face="calibri" color="black"><b>Gambar</b></td>
	<td><font face="calibri" color="black"><b>Harga</b></td>
	<td><font face="calibri" color="black"><b>Detail</b></td>
	<td><font face="calibri" color="black"><b>Daftar</b></td>
	</tr>';
	
	// Menampilkan semua rekaman
	while ($baris = mysql_fetch_array($r)) {
		$gambar=$baris['gambar'];
		echo '<tr>
				<td align="left"><font face="calibri" color="black">'.$baris['kdevent'].'</td>
				<td align="left"><font face="calibri" color="black">'.$baris['namaevent'].'</td>
				<td align="left"><font face="calibri" color="black"><img src=../images/'.$gambar.' width=80></td>
				<td align="left"><font face="calibri" color="black">'.$baris['harga'].'</td>
				<td align="left"><font face="calibri" color="black">'.$baris['detail'].'</td>
				<td align="left"><font face="calibri" color="black"><a href="daftar.php?kdevent='.$baris['kdevent'].'">Daftar</a></td>
				</tr>
				';
		}
		echo '</table>'; // Menutup tabel
		mysql_free_result ($r); // Membebaskan sumber daya
	} else {// Jika tidak ada rekaman yang dihasilkan
		echo'<p class="error">Tidak ada event yang terdaftar.</p>';
} // akhir dari IF.

echo '<center>';
echo '<br><br>';

include ('bottombar.php');	
?>

</center>
</body>
</html>


<?php } ?>