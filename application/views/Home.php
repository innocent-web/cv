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
				<div class="col-3">
					&nbsp;
				</div>
				<div class="col-6 text-center">
					<h3 class="titre" >BANQUE DE CV - METFP</h3>
				</div>
				<div class="col-3 d-flex justify-content-end align-items-center">
					<a class="btn btn-sm btn-outline-info" href="<?php echo site_url('login/authentification')?>">Se connecter</a>
				</div>
			</div>
		</header>
		<div class=" p-1 p-md-1 ">
			<div class="col-md-6 px-0 ">
				<img src="<?php echo img_url('bg1.png') ?>" alt="Workplace" usemap="#metfp"  height="auto" width="1080px">
				<map name="metfp">
					<area shape="rect" coords="225,70,330,110" alt="cabinet" href="<?php echo site_url('main/cabinet')?>" >
					<area data-mdb-toggle="modal" data-mdb-target="#exampleModal" shape="rect" coords="390,155,520,210" alt="Phone" href="#" >
					<area shape="rect" coords="850,145,1055,220" alt="Phone" href="<?php echo site_url('login/authentification')?>" >
					<area shape="rect" coords="850,345,1055,395" alt="Phone" href="<?php echo site_url('cv/liste')?>" >http://metfp-cv.loc/index.php/cv/
					<area shape="rect" coords="570,305,820,355" alt="Phone" href="<?php echo site_url('cv/liste')?>" >

					<area shape="rect" coords="255,235,490,305" alt="Phone" href="<?php echo site_url('cv/liste')?>" >
					<area shape="rect" coords="258,345,485,380" alt="Phone" href="<?php echo site_url('cv/liste')?>" >
					<area shape="rect" coords="258,380,485,415" alt="Phone" href="<?php echo site_url('cv/liste')?>" >
					<area shape="rect" coords="258,415,485,457" alt="Phone" href="<?php echo site_url('cv/liste')?>" >
					<area shape="rect" coords="258,457,485,494" alt="Phone" href="<?php echo site_url('cv/liste')?>" >

					<area shape="rect" coords="30,235,235,300" alt="Phone" href="<?php echo site_url('cv/liste')?>" >
					<area shape="rect" coords="30,338,235,383" alt="Phone" href="<?php echo site_url('cv/liste')?>" >
					<area shape="rect" coords="30,383,235,425" alt="Phone" href="<?php echo site_url('cv/liste')?>" >
					<area shape="rect" coords="30,425,235,464" alt="Phone" href="<?php echo site_url('cv/liste')?>">
					<area shape="rect" coords="30,464,235,500" alt="Phone" href="<?php echo site_url('cv/liste')?>">
					<area shape="rect" coords="50,564,278,600" alt="Phone" href="<?php echo site_url('cv/liste')?>" >
					<area shape="rect" coords="50,600,278,640" alt="Phone" href="<?php echo site_url('cv/liste')?>" >
					<area shape="rect" coords="50,640,278,680" alt="Phone" href="<?php echo site_url('cv/liste')?>" >
					<area shape="rect" coords="50,680,278,720" alt="Phone" href="<?php echo site_url('cv/liste')?>" >


					<area shape="rect" coords="327,563,492,604" alt="daf" href="<?php echo site_url('cv/liste')?>" >
					<area shape="rect" coords="327,604,492,644" alt="daf" href="<?php echo site_url('cv/liste')?>" >
					<area shape="rect" coords="495,604,670,644" alt="daf" href="<?php echo site_url('cv/liste')?>">
					<area shape="rect" coords="495,563,670,604" alt="daf" href="<?php echo site_url('cv/liste')?>" >

					<area shape="rect" coords="580,670,670,700" alt="daf" href="<?php echo site_url('cv/liste')?>" >
					<area shape="rect" coords="716,668,812,702" alt="daf" href="<?php echo site_url('cv/liste')?>" >

					<area shape="rect" coords="600,108,920,135" alt="Phone" href="<?php echo site_url('cv/liste')?>"  >
					<area shape="rect" coords="600,70,920,105" alt="Phone" href="<?php echo site_url('cv/liste')?>" >
					<!--area shape="rect" coords="600,70,920,105" alt="Phone" href="prmp.htm" onmouseover="this.focus();" onmouseout="this.blur();" -->

				</map>
			</div>
		</div>

</div>

<script type="text/javascript" src="<?php echo js_url('mdb.min') ?>"></script>
</body>
</html>
