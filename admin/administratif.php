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
echo '<h1>Daftar member</h1>';

//koneksi ke database
include '..\koneksi.php';

// melakukan query
$q = "SELECT * FROM tbmember ORDER BY username ASC";

$r = mysql_query ($q); //Jalankan query

// Menghitung jumalah baris yang dihasilkan
$jum = mysql_num_rows($r);
if($jum>0){ //Jika berjalan OK, tampilkan rekaman
	// Menampilkan berapa banyak peminat
	echo "<p>Sekarang terdapat $jum
			member yang terdaftar.</p>\n";
	// Header tabel
	echo '<table border="0" align="center" width="1000">
			<tr>
				<td align="right"><font size="5"><a href="cetakmember.php"> CETAK </a></font></td>
			</tr>
		</table>';
	echo '<table border="1" cellspacing="3" align="center" cellpadding="3" width="75%">
	<tr>
	<td><font face="calibri"><b>Nama Member</b></td>
	<td><font face="calibri"><b>Username</b></td>
	<td><font face="calibri"><b>Email<s/b></td>
	<td><font face="calibri"><b>Nomor Telepon</b></td>
	<td><font face="calibri"><b>Alamat</b></td>
	</tr>';
	
	// Menampilkan semua rekaman
	while ($baris = mysql_fetch_array($r)) {
		echo '<tr>
				<td align="left"><font face="calibri" >'.$baris['namamember'].'</td>
				<td align="left"><font face="calibri" >'.$baris['username'].'</td>
				<td align="left"><font face="calibri" >'.$baris['email'].'</td>
				<td align="left"><font face="calibri" >'.$baris['telepon'].'</td>
				<td align="left"><font face="calibri" >'.$baris['alamat'].'</td>
				</tr>
				';
		}
		echo '';
		echo '</table>'; // Menutup tabel
		mysql_free_result ($r); // Membebaskan sumber daya
	} else {// Jika tidak ada rekaman yang dihasilkan
		echo'<p class="error">Tidak ada member yang terdaftar.</p>';
		
} // akhir dari IF.

include ('bottombar.php');
?>
</html>
