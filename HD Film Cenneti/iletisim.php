<?php
/*################################*/
include 'header.php';
/*################################*/
?>
<head>
    <title><?php echo $settingcek ['settings_title4']; ?></title>
</head>
<!--/breadcrumbs -->
        <div class="w3l-breadcrumbs">
		<nav id="breadcrumbs" class="breadcrumbs">
			<div class="container page-wrapper">
			<a href="anasayfa">Anasayfa</a> » <span class="breadcrumb_last" aria-current="page">İletişim</span>
			</div>
		</nav>
	</div>
 <!--//breadcrumbs -->
	  <!-- contact1 -->
	  <section class="w3l-contact-1">
		<div class="contacts-9 py-5">
		  <div class="container py-lg-4">
			<div class="headerhny-title text-center">
				<h3 class="hny-title mb-0">Bize Ulaşın</h3>
				<p class="hny-title mb-lg-5 mb-4">Hizmetlerimizle ilgili bir sorunuz varsa, aşağıdaki formu kullanarak bizimle iletişime geçmekten çekinmeyin.				</p>
			</div>
			<div class="contact-view mt-lg-5 mt-4">
			  <div class="conhny-form-section">
				<form  method="POST" id="emreylczcontact" class="formhny-sec">
						<div class="form-grids">
							<div class="form-input">
								<input type="text" name="contact_adsoyad" id="econtact_adsoyad" placeholder="Ad ve Soyadınızı giriniz *"/>
							</div>
							<div class="form-input">
								<input type="text" name="contact_konu" id="contact_konu" placeholder="Konuyu girin "/>
							</div>
							<div class="form-input">
								<input type="mail" name="contact_mail" id="contact_mail" placeholder="E-postanızı girin *"/>
							</div>
							<div class="form-input">
								<input type="text" name="contact_tel" id="contact_tel" placeholder="Telefon numaranızı girin * (Boşluk Bırakmayınız)"/>
							</div>
						</div>
						<div class="form-input mt-4">
							<textarea name="contact_mesaj" id="contact_mesaj" placeholder="Mesajınızı buraya girin"></textarea>
						</div>

						<input type="hidden" name="emreylczcontact">
						<div class="submithny text-right mt-4">
							<button type="submit" class="btn read-button">Mesajı Gönder</button>
						</div>
					</form>
			  </div>

			  <div class="d-grid contact-addres-inf mt-5 pt-lg-4">
				<div class="contact-info-left d-grid">
					<div class="contact-info">
						<div class="icon">
							<span style="margin-top:15px;" class="fa fa-location-arrow" aria-hidden="true"></span>
						</div>
						<div class="contact-details">
							<h4>Adres:</h4>
							<p><?php echo $settingcek ['settings_adres']; ?></p>
						</div>
					</div>
					<div class="contact-info">
						<div class="icon">
							<span style="margin-top:15px;" class="fa fa-phone" aria-hidden="true"></span>
						</div>
						<div class="contact-details">
							<h4>Telefon:</h4>
							<p><?php echo $settingcek ['settings_telefon']; ?></p>
						</div>
					</div>
					<div class="contact-info">
						<div class="icon">
							<span style="margin-top:15px;" class="fa fa-envelope-open-o" aria-hidden="true"></span>
						</div>
						<div class="contact-details">
							<h4>E-posta:</h4>
							<p><a href="mailto:<?php echo $settingcek ['settings_eposta']; ?>" class="email"><?php echo $settingcek ['settings_eposta']; ?></a></p>
						</div>
					</div>
				</div>
			</div>
			</div>
		  </div>
		</div>
		<div class="contact-map">
			<iframe src="<?php echo $settingcek ['settings_maps']; ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>		
        </div>
</section>

<?php
/*################################*/
include 'footer.php';
/*################################*/
?>