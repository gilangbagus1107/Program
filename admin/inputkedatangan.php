<html>
<title>MEGATEK</title>
<body bgcolor="grey">
<center>
<table width="950" border="0">
  <tr>
  <?php
 include 'topbar.php';
?>
  </tr>
  <tr>
    <td width="700" height="400" align="center" color="black"><form action="simpanket.php" method="post" enctype="multipart/form-data">
<table width="700" border="0">
  <tr>
    <td colspan="3" align="center" color="black">Entry Kedatangan</td>
    </tr>
  <tr>
    <td color="black">Username</td>
    <td color="black">:</td>
    <td><input name="username" type="text" /></td>
  </tr>
  <tr>
    <td color="black">Id Pendaftaran</td>
    <td color="black">:</td>
    <td><input name="idpendaftaran" type="text" /></td>
  </tr>

  <tr>
    <td colspan="3" align="right"><input name="" type="submit" value="SAVE"/><input name="" type="reset" value="RESET"/></td>
    </tr>
</table>
</form>
</td>
<td>

<?php

include '..\koneksi.php';
echo '<form method="post" action="">';
echo  '<tr>
	<td><font color="black">Kode Event</font></td>
    <td><font color="black">:</font></td>
		<td>
		<select name="tampil">';
echo	'<option value="0" selected="">Pilih</option>';
		$query="select * from tbevent";
		$q=@mysql_query($query);
		while($data=mysql_fetch_array($q)){ 
		echo '<option value="'.$data['kdevent'].'"> '.$data['kdevent'].'</option>';
		 } 
echo	'</select>';


if (empty($_POST['tampil'])){
		echo   '';		
	}
	else {
		echo ''.$_POST['tampil'].'';
	}
	
echo '<input type="submit" value="Cari" >';
echo '<font face="calibri" align="center">';

if(isset($_POST['tampil'])){

$q = "SELECT * FROM tbkedatangan WHERE kdevent='$_POST[tampil]' ORDER By idpembayaran ASC";
$r = mysql_query ($q);

$jum = mysql_num_rows($r);
if($jum>0){ 

	echo "<p>Sekarang terdapat $jum
			member yang telah datang.</p>\n";

	echo '<table border="0" align="center" width="1000">
			<tr>
				<td align="right"><font size="5"><a href="cetakket.php?kdevent='.$_POST['tampil'].'"> CETAK </a></font></td>
			</tr>
		</table>';
	
	echo '<table border="1" cellspacing="3" align="center" cellpadding="3" width="75%">
	<tr>
	<td><font face="calibri" ><b>Id Pembayaran</b></td>
	<td><font face="calibri" ><b>Id Pendaftaran</b></td>
	<td><font face="calibri" ><b>Username<s/b></td>
	<td><font face="calibri" ><b>Nama Member</b></td>
	<td><font face="calibri" ><b>Telepon</b></td>
	</tr>';
	
	while ($baris = mysql_fetch_array($r)) {
		echo '<tr>';
			if (empty ($baris["idpembayaran"])) 
					{
						echo '<td align="left"><font face="calibri" >Free</a></td>';
					}
					else 
					{
						echo '<td align="left"><font face="calibri" >'.$baris['idpembayaran'].'</td>';
					}
		echo'	
				<td align="left"><font face="calibri" >'.$baris['idpendaftaran'].'</td>
				<td align="left"><font face="calibri" >'.$baris['username'].'</td>
				<td align="left"><font face="calibri" >'.$baris['namamember'].'</td>
				<td align="left"><font face="calibri" >'.$baris['telepon'].'</td>
				</tr>
				';
		}
		echo '';
		echo '</table>'; 
		mysql_free_result ($r);
	} else {
		echo'<p class="error">Tidak ada member yang datang.</p>';
		
}

}
	include 'bottombar.php';	
	echo '</td>';
	?>
</td>
</table>
</center>
</body>
</html>