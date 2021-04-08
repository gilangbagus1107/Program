<?php
 session_start();
 if (empty($_SESSION['username'])) {
 header("location:../login_user.php"); // jika belum login, maka dikembalikan ke file form_login.php
 }
 else {
    include "..\koneksi.php";
    $username=$_SESSION['username'];
    $query=mysql_query("select * from tbmember where username='$username'");
?>
<html>
 <head>
	<title>Halaman Edit User</title>
 <head>
 <body>
 <center>
    <form action="prosesedituser.php" method="post">
    <table border="0">
    <?php
		 include 'topbar.php';
    while($row=mysql_fetch_array($query)){
    ?>
    <h2>Data Member</h2>
    <table bgcolor="grey"><tr>
	<tr></tr>
    <td>Username</td>
    <td>: <input type="text" name="username" value="<?php echo $row['username'];?>"size="15"></td>
    </tr>
    <tr>
    <td>Nama</td>
    <td>: <input type="text" name="namamember" value="<?php echo $row['namamember'];?>"size="30"></td>
    </tr>
    <tr>
    <td>Email</td>
    <td>: <input type="email" name="email" value="<?php echo $row['email'];?>"size="50"></td>
    </tr>
	<tr>
    <td>Password</td>
    <td>: <input type="password" name="password" value="<?php echo $row['password'];?>"size="10"></td>
    </tr>
	<tr>
    <td>Nomor Telepon</td>
    <td>: <input type="text" name="telepon" value="<?php echo $row['telepon'];?>"size="12"></td>
    </tr>
	<tr>
    <td>Alamat</td>
    <td>: <input type="alamat" name="alamat" value="<?php echo $row['alamat'];?>"size="50"></td>
    </tr>
    <tr> 
    <td align='center' height="50" colspan=2><input type="submit" name="update" value="update"></td>
    </tr>
    <?php } 
	include ('bottombar.php');
	?>
    </table>
	</form>

</center>
 </body>
</html>

<?php } ?>