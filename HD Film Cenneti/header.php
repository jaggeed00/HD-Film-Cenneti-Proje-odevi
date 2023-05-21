<?php 
include 'db/connect.php';
/*################################*/
include 'db/process.php';
/*################################*/
$settingsor=$db->prepare("select * from settings");
$settingsor->execute();
$settingcek=$settingsor->fetch(PDO::FETCH_ASSOC);
/*************************************************************************************************/
$commentsor=$db->prepare("select * from comment");
$commentsor->execute();
$commentsay=$commentsor->rowCount();
/*************************************************************************************************/
date_default_timezone_set('Europe/Istanbul');
/*************************************************************************************************/
$decoder3 = json_decode($settingcek["settings_status"], true);
/*************************************************************************************************/
if($decoder3["bakimmodu"]=="off"){
/*************************************************************************************************/?>

<!doctype html>
<html lang="tr">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Template CSS -->
	<link rel="icon" href="logo/<?php echo $settingcek ['settings_favicon']; ?>" type="image/x-icon">
	<link rel="stylesheet" href="assets/css/style-starter.css">
	<!-- Template CSS -->
	<link href="//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,600&display=swap">
	<link rel="stylesheet" href="assets/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/sweetalert.css">
	<link rel="stylesheet" type="text/css" href="panel\files\assets\pages\j-pro\css\font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap" rel="stylesheet">
	<!--===============================================================================================-->
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-S24PN7XV77"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-S24PN7XV77');
        </script>
	<!--===============================================================================================-->
</head>

<body>

	<!-- header -->
	<header id="site-header" class="w3l-header fixed-top">
		<!--/nav-->
		<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
			<div class="container">
				<h1 style="background: linear-gradient(to right, #df0e62 0%, #245EFF 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"><a class="navbar-brand" href="anasayfa"><img src="ProjeOdevi/<?php echo $settingcek ['settings_logo']; ?>" width="30px" height="30px" style="margin-top: -10px ;">							
				<?php echo $settingcek ['settings_sayfaismi']; ?></a></h1>
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="fa icon-expand fa-bars"></span>
					<span class="fa icon-close fa-times"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
					<?php
                		$menusor=$db->prepare("select * from menu where menu_durum='Aktif' order by menu_sira ASC");
                        $menucek=$menusor->fetch(PDO::FETCH_ASSOC);
                        $menusor->execute();

                        while($menucek=$menusor->fetch(PDO::FETCH_ASSOC)){ ?>

						<li class="nav-item">
							<a class="nav-link" href="<?php echo $menucek['menu_url']; ?>"><?php echo $menucek['menu_ad']; ?></a>
						</li>

					<?php } ?>

					</ul>

					<div class="search-right">
						<a href="panel/login" class="btn search-hny mr-lg-3 mt-lg-0 mt-4" title="search">Giriş 
						<span class="fa fa-user ml-3" aria-hidden="true"></span></a>
					</div>
				</div>

				<!-- toggle switch for light and dark theme -->
				<div class="mobile-position">
					<nav class="navigation">
						<div class="theme-switch-wrapper">
							<label class="theme-switch" for="checkbox">
								<input type="checkbox" id="checkbox">
								<div class="mode-container">
									<i class="gg-sun"></i>
									<i class="gg-moon"></i>
								</div>
							</label>
						</div>
					</nav>
				</div>
				<!-- //toggle switch for light and dark theme -->
			</div>
		</nav>
		<!--//nav-->
	</header>
	<!-- //header -->


<?php }else{
	header("location:http://emreyolcu.com.tr/comingsoon/index.php");
}?>	