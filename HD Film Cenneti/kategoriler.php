<?php
/*################################*/
include 'header.php';
/*################################*/
?>
<head>
	<title><?php echo $settingcek ['settings_title2']; ?></title>
</head>
<!--/breadcrumbs -->
<div class="w3l-breadcrumbs">
	<nav id="breadcrumbs" class="breadcrumbs">
		<div class="container page-wrapper">
			<a href="anasayfa">Anasayfa</a> » <span class="breadcrumb_last" aria-current="page">Kategoriler</span>
		</div>
	</nav>
</div>
<!--//breadcrumbs -->
<!--/genre -->
<!--grids-sec1-->
<?php if($decoder3["imdb7"]=="on"){ ?>
<section class="w3l-grids">
	<div class="grids-main py-5">
		<div class="container py-lg-3">
			<div class="headerhny-title">
				<div class="w3l-title-grids">
					<div class="headerhny-left">
						<h3 class="hny-title">IMDB 7+</h3>
					</div>
					<div class="headerhny-right text-lg-right">
						<h4><a class="show-title" href="kategoriler">Hepsini Göster</a></h4>
					</div>
				</div>
			</div>
			<?php
			$moviesor=$db->prepare("select * from movie where movie_kategori='IMDB 7+' order by movie_id DESC");
			$moviecek=$moviesor->fetch(PDO::FETCH_ASSOC);
			$moviesor->execute();

			foreach($moviesor as $moviecek) { ?>

				<div class="modal fade" id="imdb<?php echo $moviecek['movie_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" style="color: #FF0066;" id="exampleModalLongTitle"><b><?php echo $moviecek['movie_ismi']; ?></b></h5>
								
							</button>
						</div>
						<div class="modal-body" style="font-size: 16px; text-align: justify; line-height: 23px;">
							<center><img class="img-fluid" src="db/<?php echo $moviecek['movie_resimurl']; ?>" style="height: 300px; width: 250px;"></center><br>
							<span>
								<?php echo $moviecek['movie_ozet']; ?>
							</span>
							<br><br>
							<b>Yapım Yılı : </b><?php echo $moviecek['movie_yapimyil']; ?><br>							
							<b>Tür : </b><?php echo $moviecek['movie_tur']; ?><br>
							<b>Dil : </b><?php echo $moviecek['movie_dil']; ?><br>
							<a href="<?php echo $moviecek['movie_imdblink']; ?>" target="_blank"><span class="badge badge-warning" style="font-size: 0.9rem;">IMDB: <?php echo $moviecek['movie_imdb']; ?></span></a>
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn" style="background-color: #FF0066;" data-dismiss="modal"><img style="width: 10px; color: white;" src="images/close.svg"></button>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>

		<div class="owl-three owl-carousel owl-theme">
			
			<?php
			$moviesor=$db->prepare("select * from movie where movie_kategori='IMDB 7+' order by movie_id DESC");
			$moviecek=$moviesor->fetch(PDO::FETCH_ASSOC);
			$moviesor->execute();
			foreach($moviesor as $moviecek) { ?>

				<!-- *************************************************************************** -->									
				<div class="item vhny-grid">
					<div class="box16 mb-0" data-toggle="modal" data-target="#imdb<?php echo $moviecek['movie_id']; ?>">							
						<figure>
							<img class="img-fluid" style="height: 350px;" src="db/<?php echo $moviecek['movie_resimurl']; ?>">
						</figure>
						<div class="box-content">
							<h4> <span class="post"><span class="fa fa-clock-o"> </span> <?php echo $moviecek['movie_sure']; ?> dk

							</span>

							<span class="post fa fa-heart text-right"></span>
						</h4>
					</div>
					<span class="fa fa-play video-icon" aria-hidden="true"></span>
				</div>
				<h3> <a class="title-gd" href=""><?php echo $moviecek['movie_ismi']; ?></a></h3>
			</div>

		<?php } ?>

		<!-- *************************************************************************** -->									
	</div>
</div>
</div>
</section>
<?php } ?>
<?php if($decoder3["enyenifilmler"]=="on"){ ?>
<section class="w3l-grids">
	<div class="grids-main py-5">
		<div class="container py-lg-4">
			<div class="headerhny-title">
				<div class="w3l-title-grids">
					<div class="headerhny-left">
						<h3 class="hny-title">EN YENİ FİLMLER</h3>
					</div>
				</div>
			</div>
			<div class="w3l-populohny-grids">
				<!-- *************************************************************************** -->
				<?php
				$moviesor=$db->prepare("select * from movie where movie_kategori='En Yeni Filmler' order by movie_id DESC");
				$moviecek=$moviesor->fetch(PDO::FETCH_ASSOC);
				$moviesor->execute();

				foreach($moviesor as $moviecek) { ?>

					<div class="modal fade" id="enyeni<?php echo $moviecek['movie_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" style="color: #FF0066;" id="exampleModalLongTitle"><b><?php echo $moviecek['movie_ismi']; ?></b></h5>
									
								</button>
							</div>
							<div class="modal-body" style="font-size: 16px; text-align: justify;">
								<center><img class="img-fluid" src="db/<?php echo $moviecek['movie_resimurl']; ?>" style="height: 300px; width: 250px;"></center><br>
								<span>
									<?php echo $moviecek['movie_ozet']; ?>
								</span>
								<br><br>
								<b>Yapım : </b><?php echo $moviecek['movie_yapimyil']; ?> Filmleri<br>							
								<b>Tür : </b><?php echo $moviecek['movie_tur']; ?><br>
								<b>Dil : </b><?php echo $moviecek['movie_dil']; ?><br>
								<a href="<?php echo $moviecek['movie_imdblink']; ?>" target="_blank"><span class="badge badge-warning" style="font-size: 0.9rem;">IMDB: <?php echo $moviecek['movie_imdb']; ?></span></a>
								
							</div>
							<div class="modal-footer">
								<button type="button" class="btn" style="background-color: #FF0066;" data-dismiss="modal"><img style="width: 10px; color: white;" src="images/close.svg"></button>
							</div>
						</div>
					</div>
				</div>

				<!-- *************************************************************************** -->


				<div class="item vhny-grid">
					<div class="box16 mb-0" data-toggle="modal" data-target="#enyeni<?php echo $moviecek['movie_id']; ?>">
						<figure>
							<img class="img-fluid" src="db/<?php echo $moviecek['movie_resimurl']; ?>" style="height: 350px;">
						</figure>
						<div class="box-content">
							<h3 class="title"><?php echo $moviecek['movie_ismi']; ?></h3>
							<h4> <span class="post"><span class="fa fa-clock-o"> </span> <?php echo $moviecek['movie_sure']; ?> dk

							</span>

							<span class="post fa fa-heart text-right"></span>
						</h4>
					</div>
					<span class="fa fa-play video-icon" aria-hidden="true"></span>
				</div>
			</div>

		<?php } ?>

		<!-- *************************************************************************** -->
	</div>
</div>

</div>
</section>
<?php } ?>
<?php
/*################################*/
include 'footer.php';
/*################################*/
?>