<html>
<head>
</head>
<body>
 
	<?php 
	include '..\koneksi.php';
	?>
 
	<table border="1" align="center">
		<tr><td height="200" align="center" colspan="6">
			<img width="200" src="..\logo\logo.png"></img>
			<br><b><u>JALAN ALAI TIMUR, KOMPLEK VILA MELATI MAS II, B/4</u></b></br></td>
			</br>
		</tr>
		<tr>
		<td height="50" align="center" colspan="6"><b><u>LAPORAN DAFTAR MEMBER</b></u></td>
		</tr>
		<tr>
			<td><b>Nama Member</b></td>
			<td><b>Username</b></td>
			<td><b>Email<b></td>
			<td><b>Nomor Telepon</b></td>
			<td><b>Alamat</b></td>
		</tr>
		<?php 
		$query = "SELECT * FROM tbmember ORDER BY namamember ASC";
		$sql = mysql_query($query);
		while($data = mysql_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $data['namamember'];?></td>
			<td><?php echo $data['username'];?></td>
			<td><?php echo $data['email'];?></td>
			<td><?php echo $data['telepon'];?></td>
			<td><?php echo $data['alamat'];?></td>
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