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
    <td width="700" height="400" align="center" style="color:#FFF"><form action="simpanevent.php" method="post" enctype="multipart/form-data">
<table width="700" border="0">
  <tr>
    <td colspan="3" align="center" color="black">Entry Data Event</td>
    </tr>
  <tr>
    <td color="black">Kode Event</td>
    <td color="black">:</td>
    <td><input name="kdevent" type="text" /></td>
  </tr>
  <tr>
    <td color="black">Nama Event</td>
    <td color="black">:</td>
    <td><input name="namaevent" type="text" /></td>
  </tr>
  <tr>
    <td color="black">Gambar</td>
    <td color="black">:</td>
    <td><input name="gambar" id="gambar" type="file" /></td>
  </tr>
  <tr>
    <td color="black">Harga</td>
    <td color="black">:</td>
    <td><input name="harga" type="text" /></td>
  </tr>
  <tr>
    <td color="black">Detail</td>
    <td color="black">:</td>
    <td><textarea name="detail" cols="50" rows="10"></textarea></td>
  </tr>
  <tr>
    <td colspan="3" align="right"><input name="" type="submit" value="SAVE"/><input name="" type="reset" value="RESET"/></td>
    </tr>
</table>
</form>
</td>
<td>
	<?php
	include 'bottombar.php';
	?>
</td>
</table>
</center>
</body>
</html>