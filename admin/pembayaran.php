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
echo '<h1>Daftar Pembayaran</h1>';

//koneksi ke database
include '..\koneksi.php';

// melakukan query
$q = "SELECT * FROM tbpembayaran ORDER BY idpembayaran ASC";

$r = mysql_query ($q); //Jalankan query

// Menghitung jumalah baris yang dihasilkan
$jum = mysql_num_rows($r);
if($jum>0){ //Jika berjalan OK, tampilkan rekaman
	// Menampilkan berapa banyak peminat
	echo "<p>Sekarang terdapat $jum
			member yang membayar.</p>\n";
			
	// Header tabel
	echo '<table border="0" align="center" width="1000">
			<tr>
				<td align="right"><font size="5"><a href="cetakpembayaran.php"> CETAK </a></font></td>
			</tr>
		</table>';
	
	echo '<table border="1" cellspacing="3" cellpadding="3" align="center" width="75%">
	<tr>
	<td><font face="calibri" ><b>Id Pembayaran</b></td>
	<td><font face="calibri" ><b>Username</b></td>
	<td><font face="calibri" ><b>Id Pendaftaran</b></td>
	<td><font face="calibri" ><b>No Transaksi Bank</b></td>
	<td><font face="calibri" ><b>Bank</b></td>
	<td><font face="calibri" ><b>Nama Pemegang</b></td>
	<td><font face="calibri" ><b>No Rekening</b></td>
	<td><font face="calibri" ><b>Total Bayar</b></td>
	<td><font face="calibri" ><b>Tanggal Transaksi</b></td>
	<td><font face="calibri" ><b>Tanggal Konfirmasi</b></td>
	<td><font face="calibri" ><b>Konfirmasi</b></td>
	</tr>';
	
	// Menampilkan semua rekaman
	while ($baris = mysql_fetch_array($r)) {
		echo '<tr>
				<td align="left"><font face="calibri" >'.$baris['idpembayaran'].'</td>
				<td align="left"><font face="calibri" >'.$baris['username'].'</td>
				<td align="left"><font face="calibri" >'.$baris['idpendaftaran'].'</td>
				<td align="left"><font face="calibri" >'.$baris['notransbank'].'</td>
				<td align="left"><font face="calibri" >'.$baris['bank'].'</td>
				<td align="left"><font face="calibri" >'.$baris['nmpemegang'].'</td>
				<td align="left"><font face="calibri" >'.$baris['norek'].'</td>
				<td align="left"><font face="calibri" >'.$baris['totbayar'].'</td>
				<td align="left"><font face="calibri" >'.$baris['tgltrans'].'</td>
				<td align="left"><font face="calibri" >'.$baris['tglkon'].'</td>
				<td align="left"><font face="calibri" ><a href="accpembayaran.php?idpendaftaran='.$baris['idpendaftaran'].'">Acc</a></td>
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