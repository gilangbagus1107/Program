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
   <br></br>
   <table width="600" border="0">
	<tr>
		<td valign="center" align="justify"><font face="calibri" color="black" size="3">
			Media Grafis Teknologi atau disingkat MEGATEK merupakan perusahaan yang bergerak
			dibidang Graphic Design dan Event Organizer. Mencakup
			segala jenis promosi dalam media cetak, event serta
			industri kreatif lainnya.
			Kami mampu menjawab tantangan dunia entertainment yang
			tumbuh berkembang sejalan dengan pola hidup masyarakat
			modern. Bentuk-bentuk aktifitas yang atraktiv, interaktif,
			apresiatif dan rekreatif. Hal itu mebuat kami siap bersaing
			dalam dunia bisnis industri kreatif dan promosi.
			Memadukan kreatifitas dan profesionalisme didukung oleh
			loyalitas dan dedikasi tinggi, kami melahirkan karya-karya
			kreatif dan memiliki potitioning tersendiri.
			Banyak pihak telah membantu kami untuk terus berdiri. Terima
			kasih dan kami terus memberikan terbaik bagi anda.
		</font></td>
	</tr>
	</table>
	<br>
	
	<br><br><br>
	<table width="1100" border="0">
		<tr align="center">					
			<td width="80" height="5" align="center" valign="center" bgcolor="black">
				<font face="calibri" color="#B22222" size="2">
				<b><u>CREATING THE<br>FUTURE</u></b>
			</td>
			<td width="450"><img align="right" width="60" src="..\logo\logo.png"></img>
			</td>
		</tr>
	</table>
</center>
</body>
</html>

<?php } ?>