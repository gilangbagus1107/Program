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
include 'topbar.php';
?>
   <table width="800" border="0">
	<tr>
		<td><img align="center" width="200" src="..\logo\graphic design.png"></img></a></td>
		<td width=""500"><font face="calibri" color="black" align="left" size="2"><b><br> GRAPHIC DESIGN</b>
		<br><br>
			Kami menerima Jasa Graphic Design / Jasa Design Grafis dalam media promosi yang berbetuk 
			visualisasi yang sudah menjadi suatu kebutuhan di setiap perusahaan yang di jadikan 
			sebagai tools perusahaan dan sebuah jati diri perusahaan yang bergerak sesuai dengan bidang 
			masing-masing. Salah satu yang kami siapkan adalah pembuatan <i><b>company profile, logo, brochure, 
			iklan, spanduk, pamphlet, flyer, name card, agenda , booklet,</b></i> majalah serta dokumen lain 
			sehingga image brand company Anda menjadi lebih berkualitas dan mempunyai icon yang diterima 
			di masyarakat umum.
			<br><br>
		</font></td>
	</tr>
	<tr>
		<td><img align="center" width="200" src="..\logo\vp.png"></img></a></td>
		<td width=""500"><font face="calibri" color="black" align="left" size="2"><br><b> VIDEO & PHOTOGRAPHY </b>
		<br><br>
			Kami menerima Jasa Photography yang berfungsi untuk mengabadikan sebuah moment tertentu dan 
			dapat dijadikan sebuah kenangan bagi perusahaan ataupun individu seperti :
				<br><i>&nbsp;&nbsp;&nbsp;&nbsp; - Company Gathering</i>
				<br><i>&nbsp;&nbsp;&nbsp;&nbsp; - Wedding Photography</i>
				<br><i>&nbsp;&nbsp;&nbsp;&nbsp; - Advertising, dll</i></br>
			Di tangani oleh Photographer Professional, sehingga setiap moment tersebut lebih bermakna 
			dan memiliki nilai artistik yang tinggi dan menjadikan suatu kepuasan untuk anda.
			Beberapa tim kami adalah contributor photographer bagi media cetak dan media elektronik, 
			dari mulai pembuatan iklan commercial bahkan untuk company foto session akan kami tangani 
			dengan concept yang menarik. Saat ini bahkan kami sudah menangani pembuatan foto Pre Wedding 
			dan Wedding bagi perorangan dengan harga yang sangat kompetitif.
			<br><br>
		</font></td>
	</tr>
	<br>
	<tr>
		<td><img align="center" width="200" src="..\logo\event.png"></img></a></td>
		<td width=""500"><font face="calibri" color="black" align="left" size="2"><b><br> PROMOTION & EVENT </b>
		<br><br>
			Kami akan menyusun konsep kegiatan, membuat timeline agar waktu penyelenggaraan 
			kegiatan dapat berjalan baik, selain itu kami memberikan perspektif biaya yang sangat 
			fleksibel dimana dapat disesuaikan dengan ketersediaan budget yang ada namun dengan 
			tetap menjaga kualitas kegiatan.
			<br><br>
		</font></td>
	</tr>
</table>
<br>
<?php
include 'bottombar.php';
?>
</center>
</body>
</html>

<?php } ?>