<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Captcha | Adminpro - Admin Template</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- favicon
		============================================ -->
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

	<!-- Bootstrap CSS
		============================================ -->
	<link rel="stylesheet" href="<?php echo css_url('bootstrap.min') ?>" />
	<!-- Bootstrap CSS
		============================================ -->

	<link rel="stylesheet" href="<?php echo css_url('all') ?>" />

	<!-- meanmenu icon CSS
		============================================ -->
	<link rel="stylesheet" href="<?php echo css_url('meanmenu.min') ?>" />
	<!-- mCustomScrollbar CSS
		============================================ -->
	<link rel="stylesheet" href="<?php echo css_url('jquery.mCustomScrollbar.min') ?>" />
	<!-- animate CSS
		============================================ -->
	<link rel="stylesheet" href="<?php echo css_url('animate') ?>" />
	<!-- normalize CSS
		============================================ -->
	<link rel="stylesheet" href="<?php echo css_url('normalize') ?>" />
	<!-- form CSS
		============================================ -->
	<link rel="stylesheet" href="<?php echo css_url('form') ?>" />
	<link rel="stylesheet" href="<?php echo css_url('modals') ?>" />
	<!-- style CSS
		============================================ -->
	<link rel="stylesheet" href="<?php echo css_url('style2') ?>" />
	<link rel="stylesheet" href="<?php echo css_url('dropzone') ?>" />
	<!-- responsive CSS
		============================================ -->
	<link rel="stylesheet" href="<?php echo css_url('responsive') ?>" />
	<link rel="stylesheet" href="<?php echo css_url('datepicker3') ?>" />
	<link rel="stylesheet" href="<?php echo css_url('accordions') ?>" />
	<!-- modernizr JS
		============================================ -->
	<script src="<?php echo js_url('modernizr-2.8.3.min') ?>"></script>
        <!-- jquery
	============================================ -->
<script type="text/javascript" src="<?php echo js_url('jquery-1.11.3.min')?>"></script>
</head>

<body class="materialdesign" onload="GenerateCaptcha();">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Header top area start-->
<div class="wrapper-pro">
	<div class="left-sidebar-pro">
		<nav id="sidebar">
			<div class="sidebar-header">
				<a href="#"><img src="<?php echo img_url('metfp.png') ?>" alt="" />
				</a>
				<h3>BANQUE DE CV</h3>
				<strong>CVB</strong>
			</div>
			<div class="left-custom-menu-adp-wrap">
				<ul class="nav navbar-nav left-sidebar-menu-pro">
					<li class="nav-item">
						<a href="#"  data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
							<i class="fas fa-tachometer-alt fa-fw me-3"></i><span class="mini-dn"> T.DES BORDS</i></span>
						</a>
					</li>

					<li class="nav-item">
						<a href="#"  role="button" aria-expanded="false" class="nav-link ">
							<i class="fas fa-chart-area fa-fw me-3"></i><span class="mini-dn"> MINISTRE</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="#"  role="button" aria-expanded="false" class="nav-link ">
							<i class="fas fa-building fa-fw me-3"></i><span class="mini-dn"> SECRETAIRE G.</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="#"  role="button" aria-expanded="false" class="nav-link ">
							<i class="fas fa-chart-line fa-fw me-3"></i><span class="mini-dn"> DGETP</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="#"  role="button" aria-expanded="false" class="nav-link ">
							<i class="fas fa-chart-pie fa-fw me-3"></i><span class="mini-dn"> DGFP</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="#"  role="button" aria-expanded="false" class="nav-link ">
							<i class="fas fa-chart-bar fa-fw me-3"></i><span class="mini-dn"> CGPP</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="#"  role="button" aria-expanded="false" class="nav-link ">
							<i class="fas fa-calendar fa-fw me-3"></i><span class="mini-dn"> DIRECTIONS T.</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="#"  role="button" aria-expanded="false" class="nav-link ">
							<i class="fas fa-globe fa-fw me-3"></i><span class="mini-dn"> ORGANISME R.</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="#"  role="button" aria-expanded="false" class="nav-link ">
							<i class="fas fa-building fa-fw me-3"></i><span class="mini-dn"> DREFTP</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="#"  role="button" aria-expanded="false" class="nav-link ">
							<i class="fas fa-users fa-fw me-3"></i><span class="mini-dn"> UTILISATEURS</span>
						</a>
					</li>


                                        <li class="nav-item">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fas fa-id-badge me-3"></i> <span class="mini-dn">CV</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                                <a href="<?php echo site_url('/cv/ajouter')?>" class="dropdown-item">AJOUTER CV</a>
                                                <a href="<?php echo site_url('/cv/liste')?>" class="dropdown-item">LISTE</a>
                                            </div>
                                        </li>


				</ul>
			</div>
		</nav>
	</div>
	<!-- Header top area start-->
	<div class="content-inner-all">
		<div class="header-top-area">
			<div class="fixed-header-top">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
							<button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
								<i class="fa fa-bars"></i>
							</button>
							<div class="admin-logo logo-wrap-pro">
								<a href="#"><img src="img/logo/log.png" alt="" />
								</a>
							</div>
						</div>
						<div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
							<div class="header-top-menu tabl-d-n">
								&nbsp;
							</div>
						</div>
						<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
							<div class="header-right-info">
								<ul class="nav navbar-nav mai-top-nav header-right-menu">
									<li class="nav-item">
										<a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
											<span class="adminpro-icon adminpro-user-rounded header-riht-inf"></span>
											<span class="admin-name">Advanda Cro</span>
											<i class="fas fa-id-badge me-3"></i><span>
										</a>
										<ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">

											<li><a href="#"><span class="adminpro-icon adminpro-settings author-log-ic"></span>Mon compte</a>
											</li>
                                                                                        <li><a href="<?php echo site_url('/login/logout_user') ?>"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Se deconnecter</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header top area end-->
