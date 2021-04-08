<!DOCTYPE html>

<style>
	.navbar {
		background-color: rgba(100,100,100,0.2);
		box-shadow: 0 10px 10px -2px rgba(0,0,0,.2);
	}

    .scrolling-navbar {
		transition: background .5s ease-in-out, padding .5s ease-in-out;
    }
    .top-nav-collapse {
		background-color: #667490;
    }
    @media only screen and (max-width: 768px) {
		.navbar {
        background-color: #667490;
		}
    }

</style>

	<nav class="font-weight-bold navbar navbar-expand-sm navbar-dark scrolling-navbar fixed-top">

		<a class="navbar-brand" href="index.php">
			<img width="" src="logo\logo2.png"></a>
		
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"><span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">

			<ul class="navbar-nav mr-auto">
			    <li class="nav-item">
			      <a href="profil.php" class="nav-link" >Profil</a>
			    </li>
			    <li class="nav-item">
			       <a href="registrasi.php" class="nav-link" >Registrasi</a>
			    </li>
			    <li class="nav-item">
			       <a href="event.php" class="nav-link" >Event</a>
			    </li>
			</ul>
			<ul class=" navbar-nav ml-auto">
				<li class="nav-item">
			       <a href="login_user.php" class="nav-link" >SIGN IN</a>
			    </li>
			</ul>
		</div>

	</nav>															
</html>
