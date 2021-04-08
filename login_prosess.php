<?php

                session_start();

                include 'koneksi.php';

                $username=$_POST['username'];

                $password=$_POST['password'];

                $query=mysql_query("select * from tbmember where username='$username' and password='$password'");

                $q=mysql_num_rows($query);
				
				if 	(!empty($_POST['username']) && $_POST['username'] == 'gilangadmin' &&
					!empty($_POST['password']) && $_POST['password'] == '123456') 
                    {
								$_SESSION['username'] = $username;
								$_SESSION['logged'] = 1;
								header("location:admin/index.php");
							die();
 
				    }

                if($q==TRUE)

                {

                                $_SESSION['username']=$username;

                                header("location:user/index.php");

                }

                else

                {

                                echo "gagal login";

                }

?>
