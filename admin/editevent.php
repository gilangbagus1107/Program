 <?php 
    include "..\koneksi.php";
    $kdevent=$_GET['kdevent'];
    $query=mysql_query("select * from tbevent where kdevent='$kdevent'");

?>
<html>
 <head>
	<title>Halaman Edit Event</title>
 <head>
 <body>
    <form action="proseseditevent.php" method="post">
    <table border="0">
    <?php
    while($row=mysql_fetch_array($query)){
	?>
    <h2>Data Event</h2>
    <table><tr>
    <td>Kode Event</td>
    <td>: <input type="text" name="kdevent" value="<?php echo $row['kdevent'];?>"size="15"></td>
    </tr>
    <tr>
    <td>Nama Event</td>
    <td>: <input type="text" name="namaevent" value="<?php echo $row['namaevent'];?>"size="30"></td>
    </tr>
    <tr>
    <td>Gambar</td>
    <td>: 
	<?php 
		$gambar=$row['gambar'];
		echo '<img src=../images/'.$gambar.' width=80>'; 
	?> <input type="file" name="gambar" id="gambar" size="50"></td>
    </tr>
	<tr>
    <td>Harga</td>
    <td>: <input type="text" name="harga" value="<?php echo $row['harga'];?>"size="10"></td>
    </tr>
	<tr>
    <td>Detail</td>
    <td>: <input type="text" name="detail" value="<?php echo $row['detail'];?>"size="12"></td>
    </tr>
    <td colspan=2><input type="submit" name="update" value="update"></td>
    </tr>
    <?php } ?>
    </table>
	</form>

 </body>
</html>