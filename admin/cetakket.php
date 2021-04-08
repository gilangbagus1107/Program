<html>
<head>
</head>
<body>
 
	<?php 
	include '..\koneksi.php';
	$kdevent=$_GET['kdevent'];
	?>
 
	<table border="1" align="center">
		<tr><td height="200" align="center" colspan="6">
			<img width="200" src="..\logo\logo.png"></img>
			<br><b><u>JALAN ALAI TIMUR, KOMPLEK VILA MELATI MAS II, B/4</u></b></br></td>
			</br>
		</tr>
		<tr>
		<td height="50" align="center" colspan="6"><b><u>LAPORAN KEDATANGAN</b></u></td>
		</tr>
		<tr>
			<td><b>Id Pembayaran</b></td>
			<td><b>Id Pendaftaran</b></td>
			<td><b>kdevent</b></td>
			<td><b>Username</b></td>
			<td><b>Nama Member</b></td>
			<td><b>Telepon</b></td>
		</tr>
		<?php 
		$query = "SELECT * FROM tbkedatangan Where kdevent='$kdevent' ORDER BY idpembayaran ASC";
		$sql = mysql_query($query);
		while($data = mysql_fetch_array($sql)){
		?>
		<tr>
			<?php if (empty ($baris["idpembayaran"])) 
					{
						echo '<td align="left">Free</a></td>';
					}
					else 
					{
						echo '<td align="left">'.$data['idpembayaran'].'</td>';
					}
			
				?>
			<td><?php echo $data['idpendaftaran'];?></td>
			<td><?php echo $data['kdevent'];?></td>
			<td><?php echo $data['username'];?></td>
			<td><?php echo $data['namamember'];?></td>
			<td><?php echo $data['telepon'];?></td>
		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>