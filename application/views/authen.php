<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="<?php echo css_url('style') ;?>">
	<link rel="stylesheet" href="<?php echo css_url('bootstrap.min') ;?>">
	<link rel="stylesheet" href="<?php echo css_url('blog') ;?>">
	<link rel="stylesheet" href="<?php echo css_url('mdb.min') ?>" />
</head>
<body>
<div class="container">
	<header class="blog-header py-3">
		<div class="row flex-nowrap justify-content-between align-items-center">

			<div class="col-12 text-center">
				<h3 class="titre" >BANQUE DE CV - METFP</h3>
			</div>
			<!--div class="col-3 d-flex justify-content-end align-items-center">
				<a class="btn btn-sm btn-outline-info" href="#">Connexion</a>
			</div-->
		</div>
	</header>

	<div class=" p-3 p-md-5 ">
			<div class="col-md-12 ">
				<div class="box">
					<h2>Authentification</h2>
					<?php echo form_open('login/login_user') ?>
						<div class="inputBox">
							<input type="text" name="im" required="">
							<label>Utilisateur</label>
						</div>
						<div class="inputBox">
							<input type="password" name="password" required="">
							<label>Mot de passe</label>
						</div>
						<input type="submit" name=""  value="Connexion">
					</form>
					<p><?php echo $error; ?></p>
				</div>
			</div>
	</div>

</div>


</body>
</html>
