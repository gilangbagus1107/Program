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

<body bgcolor="white">
<center>

<?php 
# lihat_penguna.php
// Skrip ini membaca semua rekaman
// dari tabel pengguna.

include 'topbar.php';
// Header Halaman:

//koneksi ke database
include '..\koneksi.php';

// melakukan query
$q = "SELECT * FROM tbpendaftaran WHERE username='$_SESSION[username]' ORDER BY idpendaftaran ASC";

$r = mysql_query ($q); //Jalankan query

// Menghitung jumalah baris yang dihasilkan
$jum = mysql_num_rows($r);
if($jum>0){ //Jika berjalan OK, tampilkan rekaman
	// Menampilkan berapa banyak peminat

echo '<h1 align="center">PENDAFTARAN</h1>';
echo '<table width="1000" border="0" align="center">
		<font face="calibri" color="black">

		<tr><td><font size="2">Cara Pembayaran dapat dilakukan dengan metode bank transfer yang ditujukan kepada CV. Megatek di salah satu bank berikut : 
			<br align="left">&nbsp; &nbsp; &nbsp; &nbsp; - Bank BCA No. Rek : 038 459 304 2
			<br align="left">&nbsp; &nbsp; &nbsp; &nbsp; - Bank BNI No. Rek : 075 399 348 8 			
			<br align="left">&nbsp; &nbsp; &nbsp; &nbsp; - Bank Mandiri No. Rek: 123 00 073 534 79 
			<br align="left">Transfer dapat dilakukan melalui ATM/Internet Banking/SMS Banking';
				echo "<p align='right'>Anda telah mendaftar $jum
			event.</p>";
echo '</td></tr></table>';
			
	// Header tabel
	echo '';
	echo '<table border="1" cellspacing="3" align="center" cellpadding="3" width="75%">
	<tr>
	<td><font face="calibri" ><b>Id</b></td>
	<td><font face="calibri" ><b>Kode Event</b></td>
	<td><font face="calibri" ><b>Username<s/b></td>
	<td><font face="calibri" ><b>Nama Member</b></td>
	<td><font face="calibri" ><b>Telepon</b></td>
	<td><font face="calibri" ><b>Alamat</b></td>
	<td><font face="calibri" ><b>Email</b></td>
	<td><font face="calibri" ><b>Harga</b></td>
	<td><font face="calibri" ><b>Status</b></td>
	<td colspan="2"><font face="calibri" ><b>Aksi</b></td>
	</tr>';
	
	// Menampilkan semua rekaman
	while ($baris = mysql_fetch_array($r)) {
		$idpendaftaran=$baris['idpendaftaran'];
		echo '<tr>
				<td align="left"><font face="calibri" >'.$idpendaftaran.'</td>
				<td align="left"><font face="calibri" >'.$baris['kdevent'].'</td>
				<td align="left"><font face="calibri" >'.$baris['username'].'</td>
				<td align="left"><font face="calibri" >'.$baris['namamember'].'</td>
				<td align="left"><font face="calibri" >'.$baris['telepon'].'</td>
				<td align="left"><font face="calibri" >'.$baris['alamat'].'</td>
				<td align="left"><font face="calibri" >'.$baris['email'].'</td>
				<td align="left"><font face="calibri" >'.$baris['harga'].'</td>
				<td align="left"><font face="calibri" >'.$baris["status"].'</td>
				<td bgcolor="grey"><a href="hapusdaftar.php?idpendaftaran='.$idpendaftaran.'">Hapus</a></td>';
					
					if ($baris["status"]=="BELUM BAYAR") 
					{
						echo '<td bgcolor="grey"><a href="konpembayaran.php?idpendaftaran='.$idpendaftaran.'">Bayar</a></td>';
					}
					else if ($baris["status"]=="SEDANG DI PROSES") 
					{
						echo '<td bgcolor="grey"></a></td>';
					}
					else if ($baris["status"]=="SUDAH DI KONFIRMASI")
					{
						echo '<td bgcolor="grey"><a href="konfirmasi.php?idpendaftaran='.$idpendaftaran.'">CETAK BUKTI</a></td>';
					}
					else if ($baris["status"]=="Free") 
					{
						echo '<td bgcolor="grey"><a href="konfirmasi.php?idpendaftaran='.$idpendaftaran.'">CETAK BUKTI</a></td>';
					}
	
		echo '</tr>';
		}
		echo '';
		echo '</table>'; // Menutup tabel
		mysql_free_result ($r); // Membebaskan sumber daya
	} else {// Jika tidak ada rekaman yang dihasilkan
		echo'<p class="error">Tidak ada yang terdaftar.</p>';
		
} // akhir dari IF.

include ('bottombar.php');
?>
</center>
</html>

<?php } ?>