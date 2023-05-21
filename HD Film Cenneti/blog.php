	<?php
/*################################*/
include 'header.php';
/*################################*/
?>
<head>
    <title><?php echo $settingcek ['settings_title3']; ?></title>
    <link rel="stylesheet" href="assets/css/style-blog.css">
</head>
		<!--/breadcrumbs -->
        <div class="w3l-breadcrumbs">
		<nav id="breadcrumbs" class="breadcrumbs">
			<div class="container page-wrapper">
			<a href="anasayfa">Anasayfa</a> » <span class="breadcrumb_last" aria-current="page">Blog</span>
			</div>
		</nav>
	</div>
 <!--//breadcrumbs -->
	  <!-- contact1 -->
	  <section class="w3l-contact-1">
		<div class="contacts-9 py-5">
		  <div class="container py-lg-4">

<div class="container" style="font-weight: bold;">
<div class="be-comment-block">
	<h1 class="comments-title" style="font-size: 19px">Yorumlar (<?php echo $commentsay?>)</h1>
	<?php
		$min = 1;
		$max = 8;

         $commentsor=$db->prepare("select * from comment order by comment_id ASC");
         $commentcek=$commentsor->fetch(PDO::FETCH_ASSOC);
         $commentsor->execute();
		foreach($commentsor as $commentcek) { ?>
	<div class="be-comment">
		<div class="be-img-comment">	
			<a>
				<img src="images/avatar<?php echo mt_rand($min, $max)?>.png" alt="" class="be-ava-comment">
			</a>
		</div>
		<div class="be-comment-content">
			<span class="be-comment-name" style="font-size: 14px">
				<a href=""><?php echo $commentcek['comment_adsoyad']; ?></a>
			</span>
			<span class="be-comment-time" style="font-size: 14px">
				<i class="fa fa-clock-o"></i>
				<?php echo $commentcek['comment_tarih']; ?>
			</span>
			<p class="be-comment-text" style="font-size: 14px">
				<?php echo $commentcek['comment_yorum']; ?>
			</p>
		</div>
	</div>
	<?php } ?>
	<br><br>
	<form method="POST" id="emreylczcomment" class="form-block" >
		<div class="row">
			<div class="col-xs-12 col-sm-6 fl_icon">
				<div class="form-group fl_icon">
					<div class="icon"><i class="fa fa-user" style="margin-top:12px"></i></div>
					<input class="form-input" type="text" name="comment_adsoyad" id="comment_adsoyad" placeholder="Ad Soyad Giriniz">
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 fl_icon">
				<div class="form-group fl_icon">
					<div class="icon"><i class="fa fa-envelope-o" style="margin-top:12px"></i></div>
				 	<input class="form-input" type="mail" name="comment_eposta" id="comment_eposta" placeholder="E-posta Adresi Giriniz">
				</div>
			</div>
			<div class="col-xs-12 col-sm-12">
				<div class="form-group" style="width: 100%;">
					<textarea class="form-input" name="comment_yorum" id="comment_yorum" type="text" placeholder="Yorum Yazın" rows="4"></textarea>
			  </div>
			</div>
			<div class="col-xs-12 col-sm-12">
				<div class="submithny text-right mt-4">
					<input type="hidden" name="emreylczcomment">
					<button type="submit" class="btn read-button">Yorumu Gönder</button>
				</div>
			</div>
		</div>
	</form>
</div>
</div>
</div>
</div>
</section>



<?php
/*################################*/
include 'footer.php';
/*################################*/
?>