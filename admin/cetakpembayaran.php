<html>
<head>
</head>
<body>
 
	<?php 
	include '..\koneksi.php';
	?>
 
	<table border="1" align="center">
		<tr><td height="200" align="center" colspan="10">
			<img width="200" src="..\logo\logo.png"></img>
			<br><b><u>JALAN ALAI TIMUR, KOMPLEK VILA MELATI MAS II, B/4</u></b></br></td>
			</br>
		</tr>
		<tr>
		<td height="50" align="center" colspan="10"><b><u>LAPORAN PEMBAYARAN</b></u></td>
		</tr>
		<tr>
			<td><b>Id Pembayaran</b></td>
			<td><b>Username</b></td>
			<td><b>Id Pendaftaran</b></td>
			<td><b>No Transaksi Bank</b></td>
			<td><b>Bank</b></td>
			<td><b>Nama Pemegang</b></td>
			<td><b>No Rekening</b></td>
			<td><b>Total Bayar</b></td>
			<td><b>Tanggal Transaksi</b></td>
			<td><b>Tanggal Konfirmasi</b></td>
		</tr>
		<?php 
		$query = "SELECT * FROM tbpembayaran ORDER BY idpembayaran ASC";
		$sql = mysql_query($query);
		while($data = mysql_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $data['idpembayaran'];?></td>
			<td><?php echo $data['username'];?></td>
			<td><?php echo $data['idpendaftaran'];?></td>
			<td><?php echo $data['notransbank'];?></td>
			<td><?php echo $data['bank'];?></td>
			<td><?php echo $data['nmpemegang'];?></td>
			<td><?php echo $data['norek'];?></td>
			<td><?php echo $data['totbayar'];?></td>
			<td><?php echo $data['tgltrans'];?></td>
			<td><?php echo $data['tglkon'];?></td>
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