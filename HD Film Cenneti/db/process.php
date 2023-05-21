<html>
<head>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
	<script type="text/javascript" src="../panel/js/overhang.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../panel/css/overhang.min.css" />

</head>
</html>
<?php
/*#############################################################################*/
ob_start();
session_start(); 
/*#############################################################################*/
include 'connect.php';
/*#############################################################################*/
date_default_timezone_set('Europe/Istanbul');
/*#############################################################################*/
$settingsor=$db->prepare("select * from settings");
$settingsor->execute();
$settingcek=$settingsor->fetch(PDO::FETCH_ASSOC);
/*#############################################################################*/

/*#######################################################################################*/
/*##################################   PROCESS   ########################################*/
/*#######################################################################################*/

/*****************************************************************************************/
if(isset($_GET['userlogout'])){
	if($_GET['userlogout'] == "Ok"){
		session_destroy();?>
		<script type="text/javascript">
			swal("Güvenli Şekilde Çıkış Yaptınız.","","success");
		</script>
		<?php header("Refresh: 2; url=../panel/login");		
		}
}
/*****************************************************************************************/
if (isset($_GET['userdelete'])=="ok")  {

	$sil=$db->prepare("DELETE from users where emreylcz_id=:emreylcz_id");
	$kontrol=$sil->execute(array(
		'emreylcz_id' => $_GET['emreylcz_id']
	));

	if ($kontrol) { ?>

		<script type="text/javascript">	
			$("body").overhang({
				type: "success",
				message: "✔️ Seçtiğiniz Kullanıcıyı Silme İşlemi Başarıyla Silindi.",
				duration: "2",
				overlay: true		
			}); 
		</script>

	<?php header("Refresh: 1; url=../panel/users.php");

	} else { ?>

		<script type="text/javascript">	
			$("body").overhang({
				type: "error",
				message: "❌ Seçtiğiniz Kullanıcıyı Silme İşlemi Başarısız Oldu.",
				duration: "2",
				overlay: true				
			});
		</script>	

	<?php header("Refresh: 1; url=../panel/users.php");

 	}
}
/*****************************************************************************************/
if (isset($_GET['commentsdelete'])=="ok")  {

	$sil=$db->prepare("DELETE from comment where comment_id=:comment_id");
	$kontrol=$sil->execute(array(
		'comment_id' => $_GET['comment_id']
	));

	if ($kontrol) { ?>

		<script type="text/javascript">	
			$("body").overhang({
				type: "success",
				message: "✔️ Seçtiğiniz Yorum Silme İşlemi Başarıyla Silindi.",
				duration: "2",
				overlay: true		
			}); 
		</script>

	<?php header("Refresh: 1; url=../panel/comments.php");

	} else { ?>

		<script type="text/javascript">	
			$("body").overhang({
				type: "error",
				message: "❌ Seçtiğiniz Yorum Silme İşlemi Başarısız Oldu.",
				duration: "2",
				overlay: true				
			});
		</script>

		<?php header("Refresh: 1; url=../panel/comments.php");
		
	}
}
/*****************************************************************************************/
if (isset($_GET['anketdelete'])=="ok")  {

	$sil=$db->prepare("DELETE from anket where anket_id=:anket_id");
	$kontrol=$sil->execute(array(
		'anket_id' => $_GET['anket_id']
	));

	if ($kontrol) { ?>

		<script type="text/javascript">	
			$("body").overhang({
				type: "success",
				message: "✔️ Seçtiğiniz Anket Formu İşlemi Başarıyla Silindi.",
				duration: "2",
				overlay: true		
			}); 
		</script>

	<?php header("Refresh: 1; url=../panel/anket.php");

	} else { ?>

		<script type="text/javascript">	
			$("body").overhang({
				type: "error",
				message: "❌ Seçtiğiniz Anket Formu İşlemi Başarısız Oldu.",
				duration: "2",
				overlay: true				
			});
		</script>

		<?php header("Refresh: 1; url=../panel/anket.php");

	}
}
/*****************************************************************************************/
if (isset($_GET['ticketdelete'])=="ok")  {

	$sil=$db->prepare("DELETE from contact where contact_id=:contact_id");
	$kontrol=$sil->execute(array(
		'contact_id' => $_GET['contact_id']
	));

	if ($kontrol) { ?>

		<script type="text/javascript">	
			$("body").overhang({
				type: "success",
				message: "✔️ Seçtiğiniz Ticketi Silme İşlemi Başarıyla Silindi.",
				duration: "2",
				overlay: true		
			}); 
		</script>

	<?php header("Refresh: 1; url=../panel/ticket.php");

	} else { ?>

		<script type="text/javascript">	
			$("body").overhang({
				type: "error",
				message: "❌ Seçtiğiniz Ticketi Silme İşlemi Başarısız Oldu.",
				duration: "2",
				overlay: true				
			});
		</script>

		<?php header("Refresh: 1; url=../panel/ticket.php");

	}
}
/*****************************************************************************************/
if (isset($_GET['menudelete'])=="ok")  {

	$sil=$db->prepare("DELETE from menu where menu_id=:menu_id");
	$kontrol=$sil->execute(array(
		'menu_id' => $_GET['menu_id']
	));

	if ($kontrol) { ?>

		<script type="text/javascript">	
			$("body").overhang({
				type: "success",
				message: "✔️ Seçtiğiniz Menün Silme İşlemi Başarıyla Silindi.",
				duration: "2",
				overlay: true		
			}); 
		</script>

	<?php header("Refresh: 1; url=../panel/menu.php");

	} else { ?>

		<script type="text/javascript">	
			$("body").overhang({
				type: "error",
				message: "❌ Seçtiğiniz Menün Silme İşlemi Başarısız Oldu.",
				duration: "2",
				overlay: true				
			});
		</script>

		<?php header("Refresh: 1; url=../panel/menu.php");

	}
}
/*****************************************************************************************/
if (isset($_GET['moviedelete'])=="ok")  {

	$sil=$db->prepare("DELETE from movie where movie_id=:movie_id");
	$kontrol=$sil->execute(array(
		'movie_id' => $_GET['movie_id']
	));

	if ($kontrol) { ?>

		<script type="text/javascript">	
			$("body").overhang({
				type: "success",
				message: "✔️ Seçtiğiniz Filmi Silme İşlemi Başarıyla Silindi.",
				duration: "2",
				overlay: true		
			}); 
		</script>

	<?php header("Refresh: 1; url=../panel/movie.php");

	} else { ?>

		<script type="text/javascript">	
			$("body").overhang({
				type: "error",
				message: "❌ Seçtiğiniz Filmi Silme İşlemi Başarısız Oldu.",
				duration: "2",
				overlay: true				
			});
		</script>

		<?php header("Refresh: 1; url=../panel/movie.php");

	}
}
/*****************************************************************************************/
if(isset($_POST['settingslogo'])) {

	if (isset($_FILES['settings_logo'])) {
		$hata = $_FILES['settings_logo']['error'];
		if ($hata != 0) { ?>

			<script type="text/javascript">	
				$("body").overhang({
					type: "error",
					message: "❌ Resim gönderilirken bir hata gerçekleşti.",
					duration: "2",
					overlay: true				
				});
			</script>

			<?php } else {
			$resimBoyutu = $_FILES['settings_logo']['size']; 
			if ($resimBoyutu > (1024 * 1024 * 2)) { ?>
			
				<script type="text/javascript">	
					$("body").overhang({
						type: "error",
						message: "❌ Resim 2MB den büyük olamaz.",
						duration: "2",
						overlay: true				
					});
				</script>

		<?php } else {
				$tip = $_FILES['settings_logo']['type'];
				$resimAdi = $_FILES['settings_logo']['name'];
				$uzantisi = explode('.', $resimAdi); 
				$uzantisi = $uzantisi[count($uzantisi) - 1];

				$yeni_adi = "../logo/" . time() . "." . $uzantisi;

				if ($tip == 'image/jpeg' || $tip == 'image/jpg' || $tip == 'image/webp' || $tip == 'image/png' || $tip == 'image/x-icon') { 
					if (move_uploaded_file($_FILES["settings_logo"]["tmp_name"], $yeni_adi)) {

						$duzenle=$db->prepare("UPDATE settings SET
							settings_logo=:settings_logo
							WHERE settings_id =1");
						$update=$duzenle->execute(array(
							'settings_logo' => $yeni_adi
						)); ?>

						<script type="text/javascript">	
							$("body").overhang({
								type: "success",
								message: "✔️ Web Site Logo'su Başarılı Şekilde Güncellendi.",
								duration: "2",
								overlay: true		
							}); 
						</script>

					<?php }else 
				echo 'Resim yüklenirken bir hata oluştu.';
			} else { ?>

					<script type="text/javascript">	
						$("body").overhang({
							type: "info",
							message: "🔔 Yanlızca JPG,PNG,WEBP ve Favicon resim gönderebilirsiniz.",
							duration: "2",
							overlay: true				
						});
					</script>

		<?php }  
		 }
	  }
   }
}
/*****************************************************************************************/
if(isset($_POST['settingsfavicon'])) {

	if (isset($_FILES['settings_favicon'])) {
		$hata = $_FILES['settings_favicon']['error'];
		if ($hata != 0) { ?>

			<script type="text/javascript">	
				$("body").overhang({
					type: "error",
					message: "❌ Resim gönderilirken bir hata gerçekleşti.",
					duration: "2",
					overlay: true				
				});
			</script>

			<?php } else {
			$resimBoyutu = $_FILES['settings_favicon']['size']; 
			if ($resimBoyutu > (1024 * 1024 * 2)) { ?>
			
				<script type="text/javascript">	
					$("body").overhang({
						type: "error",
						message: "❌ Resim 2MB den büyük olamaz.",
						duration: "2",
						overlay: true				
					});
				</script>

		<?php } else {
				$tip = $_FILES['settings_favicon']['type'];
				$resimAdi = $_FILES['settings_favicon']['name'];
				$uzantisi = explode('.', $resimAdi); 
				$uzantisi = $uzantisi[count($uzantisi) - 1];

				$yeni_adi = "../logo/" . time() . "." . $uzantisi;

				if ($tip == 'image/x-icon') { 
					if (move_uploaded_file($_FILES["settings_favicon"]["tmp_name"], $yeni_adi)) {

						$duzenle=$db->prepare("UPDATE settings SET
							settings_favicon=:settings_favicon
							WHERE settings_id =1");
						$update=$duzenle->execute(array(
							'settings_favicon' => $yeni_adi
						)); ?>

						<script type="text/javascript">	
							$("body").overhang({
								type: "success",
								message: "✔️ Web Sitenin Faviconu Başarılı Şekilde Güncellendi.",
								duration: "2",
								overlay: true		
							}); 
						</script>

					<?php }else 
				echo 'Resim yüklenirken bir hata oluştu.';
			} else { ?>

					<script type="text/javascript">	
						$("body").overhang({
							type: "info",
							message: "🔔 Yanlızca Favicon resim gönderebilirsiniz.",
							duration: "2",
							overlay: true				
						});
					</script>

		<?php }  
		 }
	  }
   }
}
/*****************************************************************************************/
if(isset($_POST['settingsstatus'])) {

	if (isset($_POST['settings_status'])){	
	
	/** Status  **/
	if (isset($_POST["settings_status"]["trendfilmler"])) {
	$trendfilmler = "on";
	}else{
	$trendfilmler = "off";
	}
	
	if (isset($_POST["settings_status"]["enyenifilmler"])) {
	$enyenifilmler = "on";
	}else{
	$enyenifilmler = "off";
	}
	
	if (isset($_POST["settings_status"]["yerlifilmler"])) {
	$yerlifilmler = "on";
	}else{
	$yerlifilmler  = "off";
	}
	
	if (isset($_POST["settings_status"]["imdb7"])) {
	$imdb7 = "on";
	}else{
	$imdb7 = "off";
	}
					
	if (isset($_POST["settings_status"]["eniyiler"])) {
	$eniyiler = "on";
	}else{
	$eniyiler  = "off";
	}
	
	if (isset($_POST["settings_status"]["kayitol"])) {
	$kayitol = "on";
	}else{
	$kayitol = "off";
	}
				
	if (isset($_POST["settings_status"]["bakimmodu"])) {
	$bakimmodu = "on";
	}else{
	$bakimmodu  = "off";
	}	
	
	$conf= array(
		'trendfilmler'=> $trendfilmler,
		'enyenifilmler'=> $enyenifilmler, 
		'yerlifilmler'=> $yerlifilmler,
		'imdb7'=> $imdb7, 
		'eniyiler'=> $eniyiler,
		'kayitol'=> $kayitol, 
		'bakimmodu'=> $bakimmodu
	);
	
	$conf= json_encode($conf);
		$perm = $_POST['settings_status'];
		$permcek = implode(' / ',$perm);
	
		$duzenle=$db->prepare("UPDATE settings SET
			settings_status=:settings_status
			WHERE settings_id =1");
		$update=$duzenle->execute(array(
			'settings_status' => $conf
	
		)); ?>

		<script type="text/javascript">	
			$("body").overhang({
				type: "success",
				message: "✔️ Durumlar Güncellendi.",
				duration: "2",
				overlay: true		
			}); 
		</script>

<?php }
}  
/*****************************************************************************************/
if(isset($_POST['settingstitle'])) {

	$duzenle=$db->prepare("UPDATE settings SET
		settings_sayfaismi=:settings_sayfaismi,
		settings_title1=:settings_title1,
		settings_title2=:settings_title2,
		settings_title3=:settings_title3,
		settings_title4=:settings_title4,
		settings_title5=:settings_title5
		WHERE settings_id =1");
	$update=$duzenle->execute(array(
		'settings_sayfaismi' => trim(strip_tags($_POST['settings_sayfaismi'])),
		'settings_title1' => trim(strip_tags($_POST['settings_title1'])),
		'settings_title2' => trim(strip_tags($_POST['settings_title2'])),
		'settings_title3' => trim(strip_tags($_POST['settings_title3'])),
		'settings_title4' => trim(strip_tags($_POST['settings_title4'])),
		'settings_title5' => trim(strip_tags($_POST['settings_title5']))
	)); ?>

		<script type="text/javascript">	
			$("body").overhang({
				type: "success",
				message: "✔️ Site Başlıkları Kaydedildi.",
				duration: "2",
				overlay: true		
			}); 
		</script>

<?php }
/*****************************************************************************************/
if(isset($_POST['settingscontact'])) {

	$duzenle=$db->prepare("UPDATE settings SET
		settings_adres=:settings_adres,
		settings_telefon=:settings_telefon,
		settings_eposta=:settings_eposta,
		settings_maps=:settings_maps
		WHERE settings_id =1");
	$update=$duzenle->execute(array(
		'settings_adres' => trim(strip_tags($_POST['settings_adres'])),
		'settings_telefon' => trim(strip_tags($_POST['settings_telefon'])),
		'settings_eposta' => trim(strip_tags($_POST['settings_eposta'])),
		'settings_maps' => trim(strip_tags($_POST['settings_maps']))
	)); ?>

		<script type="text/javascript">	
			$("body").overhang({
				type: "success",
				message: "✔️ İletişim Bilgileri Kaydedildi.",
				duration: "2",
				overlay: true		
			}); 
		</script>

<?php }
/*****************************************************************************************/
if(isset($_POST['setttingsfooter'])) {

	$duzenle=$db->prepare("UPDATE settings SET
		settings_footer1a=:settings_footer1a,
		settings_footer1b=:settings_footer1b,
		settings_footer2a=:settings_footer2a,
		settings_footer2b=:settings_footer2b
		WHERE settings_id =1");
	$update=$duzenle->execute(array(
		'settings_footer1a' => trim(strip_tags($_POST['settings_footer1a'])),
		'settings_footer1b' => trim(strip_tags($_POST['settings_footer1b'])),
		'settings_footer2a' => trim(strip_tags($_POST['settings_footer2a'])),
		'settings_footer2b' => trim(strip_tags($_POST['settings_footer2b']))
	)); ?>

		<script type="text/javascript">	
			$("body").overhang({
				type: "success",
				message: "✔️ Alt Bilgi Bilgileri Kaydedildi.",
				duration: "2",
				overlay: true		
			}); 
		</script>

<?php }
/*****************************************************************************************/
if(isset($_POST['registerform'])) { ?>

	<html><head><title>HD Film Cenneti | Kayıt Ol</title><script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script></head></html> <?php 
	
	$tarihsaat=date("Y-m-d H:i:s");
	$emreylcz_adsoyad = trim(strip_tags($_POST["emreylcz_adsoyad"]));
	$emreylcz_kadi = trim(strip_tags($_POST["emreylcz_kadi"]));
	$emreylcz_mail = trim(strip_tags($_POST["emreylcz_mail"]));
	$emreylcz_sifre = trim(strip_tags(md5($_POST["emreylcz_sifre"])));
	$emreylcz_sifretekrar = trim(strip_tags(md5($_POST["emreylcz_sifretekrar"])));
	$emreylcz_tarih = $tarihsaat;

	if (empty($_POST['emreylcz_kadi']) or empty($_POST['emreylcz_sifre']) or empty($_POST['emreylcz_adsoyad']) or empty($_POST['emreylcz_mail'])) { ?>

		<script type="text/javascript">	
			$("body").overhang({
				type: "warn",
				message: "🔔 Boş Alan Bırakılamaz!",
				duration: "2",
				overlay: true				
			});
		</script>

	<?php } else {

		if (preg_match('/[\'^£$%&*()}{@#~?><>,. |=_+¬-]/', $emreylcz_kadi)) { ?>

		<script type="text/javascript">	
				$("body").overhang({
					type: "warn",
					message: "🔔 Kullanıcı adında özel karakter kullanılamaz!",
					duration: "2",
					overlay: true				
				});
		</script>	

		<?php }else{

		if(!filter_var($emreylcz_mail, FILTER_VALIDATE_EMAIL)) { ?>

		<script type="text/javascript">	
				$("body").overhang({
					type: "warn",
					message: "🔔 E-posta formatı yanlış girildi.",
					duration: "2",
					overlay: true				
				});
		</script>		

		<?php } else {


			$ayni_uye_varmi = $db -> prepare("SELECT * FROM users WHERE emreylcz_kadi = ?");
			$ayni_uye_varmi -> execute(array($emreylcz_kadi));
			if($ayni_uye_varmi -> rowCount()){ ?>

					<script type="text/javascript">	
						$("body").overhang({
							type: "warn",
							message: "🔔 Bu kullanıcı adı zaten kullanılıyor, Farklı bir kullanıcı adı deneyin.",
							duration: "2",
							overlay: true				
						});
					</script>	

			<?php } else {
				if ($emreylcz_sifre != $emreylcz_sifretekrar) { ?>

					<script type="text/javascript">	
						$("body").overhang({
							type: "error",
							message: "❌ Şifre birbiriyle uyuşmuyor.",
							duration: "2",
							overlay: true				
						});
					</script>	

				<?php  } else { 


						$profiller=array("assets/images/faces/1.jpg","assets/images/faces/2.jpg","assets/images/faces/3.jpg","assets/images/faces/4.jpg","assets/images/faces/5.jpg","assets/images/faces/6.jpg","assets/images/faces/7.jpg","assets/images/faces/8.jpg");
						$profilmiktar=count($profiller)-1;
						$rasgele=rand(0,$profilmiktar);


						$uye_ekle = $db->prepare("INSERT INTO users (emreylcz_kadi, emreylcz_sifre, emreylcz_adsoyad, emreylcz_mail, emreylcz_tarih, emreylcz_profilresmi) VALUES (?,?,?,?,?,?)");
						$uye_ekle -> execute(array($emreylcz_kadi, $emreylcz_sifre, $emreylcz_adsoyad, $emreylcz_mail, $tarihsaat, $profiller[$rasgele]));
						if ($uye_ekle){ ?>

							<script type="text/javascript">	
								$("body").overhang({
									type: "success",
									message: "✔️ Kayıt İşleminiz Başarılı, Artık Giriş Yapabilirsiniz.",
									duration: "2"				
								});
							</script>

							<?php header("Refresh: 3; url=../panel/login");	

						} else { ?>

							<script type="text/javascript">	
								$("body").overhang({
									type: "error",
									message: "❌ Kayıt başarısız. Bir sorun oluştu.",
									duration: "2",
									overlay: true				
								});
							</script>	
								
				  <?php } 
					}
				}
			}
		}
	}
}
/*****************************************************************************************/
if(isset($_POST['panelogin'])) { ?>

	<html><head><title>HD Film Cenneti | Giriş Yap</title><script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script></head></html>

	<?php $emreylcz_kadi=trim(strip_tags($_POST['emreylcz_kadi']));

	if (empty($_POST['emreylcz_kadi']) or empty($_POST['emreylcz_sifre'])) { ?>

		<script type="text/javascript">	
			$("body").overhang({
				type: "warn",
				message: "⚠️ Kullanıcı Adı Veya Şifre boş bırakılmaz!",
				duration: "2",
				overlay: true				
			});
		</script>

	<?php } else {

		if (preg_match('/[\'^£$%&*()}{@#~?><>,. |=_+¬-]/', $emreylcz_kadi)) { ?>

				<script type="text/javascript">	
					$("body").overhang({
						type: "warn",
						message: "⚠️ Kullanıcı adında özel karakter kullanılamaz!",
						duration: "2",
						overlay: true				
					});
				</script>

 		<?php } else {

			$emreylcz_kadi=trim(strip_tags($_POST['emreylcz_kadi']));
			$emreylcz_sifre=trim(strip_tags(md5($_POST['emreylcz_sifre'])));

			$sorgucek=$db ->prepare("select * from users where emreylcz_kadi='$emreylcz_kadi' and emreylcz_sifre='$emreylcz_sifre'");
			$sorgucek -> execute();

			$lssx=$db->prepare("SELECT * FROM users WHERE emreylcz_kadi=:idim AND emreylcz_sifre=:emrepass");
			$lssx->execute(array(
				':idim' => $emreylcz_kadi, ':emrepass'=> $emreylcz_sifre
			));
			$mainlang=$lssx->fetch(PDO::FETCH_ASSOC);

			$xxxxxxxxxxxxxxxxxxx=$lssx->rowCount();

			if ($xxxxxxxxxxxxxxxxxxx>0) {
				$_SESSION['productLogin'] = true;
				$_SESSION['productLogin'] = trim(md5(strip_tags($emreylcz_kadi.$emreylcz_kadi)));
				$_SESSION['emreylcz_kadi'] = trim(strip_tags($emreylcz_kadi));
                $_SESSION['userid']= $mainlang["emreylcz_id"]; ?>

				<script type="text/javascript">
					swal("Giriş Başarılı, Anasayfaya Yönlendiriliyorsunuz...","","success");
				</script>

				<?php header("Refresh: 2; url=https://emreyolcu.com.tr/ProjeOdevi/panel/login");	
				exit;

			} else { ?>

				<script type="text/javascript">	
					$("body").overhang({
						type: "error",
						message: "❌ Kullanıcı Adı Veya Şifreniz Yanlış, Tekrar Deneyiniz.",
						duration: "2",
						overlay: true				
					});
				</script>

	  <?php }
		}
	}
}
/*****************************************************************************************/ 
if(isset($_POST['emreylczcontact'])) { 
	$contactsure= "60"; //1 dk

	if (($_SESSION['contactkontrol']+$contactsure)>time()) { //Kontrol ediliyor ?>

		<script type="text/javascript">
			swal("1 dakika geçmeden ikinci ticketi gönderemezsiniz.","","info");
		</script>

<?php } else {
		if (empty($_POST['contact_adsoyad']) or empty($_POST['contact_konu']) or empty($_POST['contact_mail']) 
			or empty($_POST['contact_tel']) or empty($_POST['contact_mesaj'])){ ?>

				<script type="text/javascript">
					swal("Boş Alan Bırakmayınız.","","info");
				</script>

				<?php } else if(!is_numeric($_POST['contact_tel'])){ ?>

				<script type="text/javascript">
					swal("Telefon Numarasına Lütfen Sayı Giriniz.","","info");
				</script>
	
				<?php } else {

				$_SESSION['contactkontrol']=time(); 

				$tarihsaat=date("Y-m-d H:i");
				$kaydet=$db->prepare("INSERT INTO contact SET
					contact_adsoyad=:contact_adsoyad,
					contact_konu=:contact_konu,
					contact_mail=:contact_mail,
					contact_tel=:contact_tel,
					contact_mesaj=:contact_mesaj,
					contact_tarih=:contact_tarih");
				$insert=$kaydet->execute(array(
					'contact_adsoyad' => trim(strip_tags($_POST['contact_adsoyad'])),
					'contact_konu' => trim(strip_tags($_POST['contact_konu'])),
					'contact_mail' => trim(strip_tags($_POST['contact_mail'])),
					'contact_tel' => trim(strip_tags($_POST['contact_tel'])),
					'contact_mesaj' => trim(strip_tags($_POST['contact_mesaj'])),
					'contact_tarih' => $tarihsaat
				)); ?>

				<script type="text/javascript">
					swal("Ticket Başarılı Şekilde Gönderdiniz.","","success");
				</script>

 <?php }
	}
}
/*****************************************************************************************/
if(isset($_POST['menupdate'])) {
	
	if (empty($_POST['menu_ad']) or empty($_POST['menu_url']) or empty($_POST['menu_sira']) ){ ?>

		<script type="text/javascript">	
			$("body").overhang({
				type: "warn",
				message: "⚠️ Boş Alan Bırakmayınız!",
				duration: "2",
				overlay: true				
			});
		</script>

		<?php } else {	

			$duzenle=$db->prepare("UPDATE menu SET
				menu_ad=:menu_ad,
				menu_url=:menu_url,
				menu_sira=:menu_sira,
				menu_durum=:menu_durum
				WHERE menu_id={$_GET['id']}");
			$update=$duzenle->execute(array(
				'menu_ad' => trim(strip_tags($_POST['menu_ad'])),
				'menu_url' => trim(strip_tags($_POST['menu_url'])),
				'menu_sira' => trim(strip_tags($_POST['menu_sira'])),
				'menu_durum' => trim(strip_tags($_POST['menu_durum']))

			)); ?>

				<script type="text/javascript">	
					$("body").overhang({
						type: "success",
						message: "✔️ Menü Başarılı Şekilde Güncellendi.",
						duration: "2",
						overlay: true		
					}); 
				</script>

			<?php header("Refresh: 1; url=../panel/menu.php");	

	}
}
/*****************************************************************************************/
if(isset($_POST['menuadd'])) { 

		if (empty($_POST['menu_ad']) or empty($_POST['menu_url']) or empty($_POST['menu_sira']) ){ ?>

			<script type="text/javascript">	
				$("body").overhang({
					type: "info",
					message: "🔔 Boş Alan Bırakmayınız.",
					duration: "2",
					overlay: true				
				});
			</script>

			<?php } else {
			
			$menu_sira = trim(strip_tags($_POST["menu_sira"]));	

			$ayni_sira_varmi = $db -> prepare("SELECT * FROM menu WHERE menu_sira = ?");
			$ayni_sira_varmi -> execute(array($menu_sira));
			if($ayni_sira_varmi -> rowCount()){ ?>

				<script type="text/javascript">	
					$("body").overhang({
						type: "info",
						message: "🔔 Girdiğiniz sıra no kullanılıyor, başka sıra no giriniz.",
						duration: "2",
						overlay: true				
						});
				</script>

			<?php } else {

			$kaydet=$db->prepare("INSERT INTO menu SET
				menu_ad=:menu_ad,
				menu_url=:menu_url,
				menu_sira=:menu_sira,
				menu_durum=:menu_durum");
			$insert=$kaydet->execute(array(
				'menu_ad' => trim(strip_tags($_POST['menu_ad'])),
				'menu_url' => trim(strip_tags($_POST['menu_url'])),
				'menu_sira' => trim(strip_tags($_POST['menu_sira'])),
				'menu_durum' => trim(strip_tags($_POST['menu_durum']))
			)); ?>

			<script type="text/javascript">	
				$("body").overhang({
					type: "success",
					message: "✔️ Menü Başarılı Şekilde Gönderdiniz.",
					duration: "2",
					overlay: true		
				}); 
			</script>

<?php }
   }	
}	
/*****************************************************************************************/ 
	if(isset($_POST['emreylczcomment'])) { 
			$contactsure= "60"; //1 dk

			if (($_SESSION['commentkontrol']+$contactsure)>time()) { //Kontrol ediliyor ?>

				<script type="text/javascript">
					swal("1 dakika geçmeden tekrardan yorum gönderemezsiniz.","","info");
				</script>

				<?php } else {

				if (empty($_POST['comment_adsoyad']) or empty($_POST['comment_eposta']) or empty($_POST['comment_yorum']) ){ ?>

					<script type="text/javascript">
						swal("Boş Alan Bırakmayınız.","","info");
					</script>

					<?php } else {

					$profiller=array("assets/images/faces/1.jpg","assets/images/faces/2.jpg","assets/images/faces/3.jpg","assets/images/faces/4.jpg","assets/images/faces/5.jpg","assets/images/faces/6.jpg","assets/images/faces/7.jpg","assets/images/faces/8.jpg");
					$profilmiktar=count($profiller)-1;
					$rasgele=rand(0,$profilmiktar);

					$_SESSION['commentkontrol']=time(); 
					$tarihsaat=date("Y-m-d H:i:s");
					$kaydet=$db->prepare("INSERT INTO comment SET
						comment_adsoyad=:comment_adsoyad,
						comment_eposta=:comment_eposta,
						comment_yorum=:comment_yorum,
						comment_tarih=:comment_tarih,
						comment_profilresmi=:comment_profilresmi");
					$insert=$kaydet->execute(array(
						'comment_adsoyad' => trim(strip_tags($_POST['comment_adsoyad'])),
						'comment_eposta' => trim(strip_tags($_POST['comment_eposta'])),
						'comment_yorum' => trim(strip_tags($_POST['comment_yorum'])),
						'comment_profilresmi' => $profiller[$rasgele],
						'comment_tarih' => $tarihsaat
					)); ?>

					<script type="text/javascript">
						swal("Yorumu Başarılı Şekilde Gönderdiniz.","","success");
					</script>
  <?php }
	}
}	
/*****************************************************************************************/
if(isset($_POST['emreylczanket'])) { 
	$anketsure= "1"; //1 dk

	if (($_SESSION['anketkontrol']+$anketsure)>time()) { //Kontrol ediliyor ?>

		<script type="text/javascript">
			swal("1 dakika geçmeden tekrardan anket formu gönderemezsiniz.","","info");
		</script>

		<?php } else {

		if (empty($_POST['anket_soru1']) or empty($_POST['anket_soru2']) or empty($_POST['anket_soru3']) or empty($_POST['anket_soru4']) or empty($_POST['anket_soru5']) or empty($_POST['anket_soru6']) or
		empty($_POST['anket_soru7']) or empty($_POST['anket_soru8']) or empty($_POST['anket_soru9']) or empty($_POST['anket_soru10']) or empty($_POST['anket_soru11']) or
		empty($_POST['anket_soru12']) or empty($_POST['anket_soru13']) or empty($_POST['anket_soru14']) or empty($_POST['anket_soru15']) ){ ?>

			<script type="text/javascript">
				swal("Boş Alan Bırakmayınız.","","info");
			</script>

			<?php } else {

			$soru3 = $_POST['anket_soru3'];
			$anket_soru33 = implode(' / ',$soru3);
			
			$soru4 = $_POST['anket_soru4'];
			$anket_soru44 = implode(' / ',$soru4);
			
			$_SESSION['anketkontrol']=time(); 
			$tarihsaat=date("Y-m-d H:i:s");
			$kaydet=$db->prepare("INSERT INTO anket SET
				anket_soru1=:anket_soru1,
				anket_soru2=:anket_soru2,
				anket_soru3=:anket_soru3,
				anket_soru4=:anket_soru4,
				anket_soru5=:anket_soru5,
				anket_soru6=:anket_soru6,
				anket_soru7=:anket_soru7,
				anket_soru8=:anket_soru8,
				anket_soru9=:anket_soru9,
				anket_soru10=:anket_soru10,
				anket_soru11=:anket_soru11,
				anket_soru12=:anket_soru12,
				anket_soru13=:anket_soru13,
				anket_soru14=:anket_soru14,
				anket_soru15=:anket_soru15,
				anket_tarih=:anket_tarih");
			$insert=$kaydet->execute(array(
				'anket_soru1' => trim(strip_tags($_POST['anket_soru1'])),
				'anket_soru2' => trim(strip_tags($_POST['anket_soru2'])),
				'anket_soru3' => $anket_soru33,
				'anket_soru4' => $anket_soru44,
				'anket_soru5' => trim(strip_tags($_POST['anket_soru5'])),
				'anket_soru6' => trim(strip_tags($_POST['anket_soru6'])),
				'anket_soru7' => trim(strip_tags($_POST['anket_soru7'])),
				'anket_soru8' => trim(strip_tags($_POST['anket_soru8'])),
				'anket_soru9' => trim(strip_tags($_POST['anket_soru9'])),
				'anket_soru10' => trim(strip_tags($_POST['anket_soru10'])),
				'anket_soru11' => trim(strip_tags($_POST['anket_soru11'])),
				'anket_soru12' => trim(strip_tags($_POST['anket_soru12'])),
				'anket_soru13' => trim(strip_tags($_POST['anket_soru13'])),
				'anket_soru14' => trim(strip_tags($_POST['anket_soru14'])),
				'anket_soru15' => trim(strip_tags($_POST['anket_soru15'])),
				'anket_tarih' => $tarihsaat
			)); ?>
			
			<script type="text/javascript">
				swal("Anket Formunu Başarılı Şekilde Gönderdiniz.","","success");
			</script>	

  <?php }
	}
}	
/*****************************************************************************************/
		if(isset($_POST['movieadd'])) { 

			if (empty($_POST['movie_ismi']) || empty($_POST['movie_ozet']) || empty($_POST['movie_yapimyil']) || empty($_POST['movie_tur']) 
				|| empty($_POST['movie_dil']) || empty($_POST['movie_imdb']) || empty($_POST['movie_sure']) || empty($_POST['movie_kategori']) ){ ?>

						<script type="text/javascript">	
							$("body").overhang({
								type: "info",
								message: "🔔 Boş Alan Bırakılamaz!",
								duration: "2",
								overlay: true					
							});
						</script>

					<?php } else if(!is_numeric($_POST['movie_yapimyil'])){ ?>

						<script type="text/javascript">	
							$("body").overhang({
								type: "info",
								message: "🔔 Yapım Yılı Kısmına Sadece Sayı Giriniz.",
								duration: "2",
								overlay: true					
							});
						</script>

					<?php } else if(!is_numeric($_POST['movie_sure'])){ ?>

						<script type="text/javascript">	
							$("body").overhang({
								type: "info",
								message: "🔔 Filmin Süre Kısmına Sadece Sayı Giriniz.",
								duration: "2",
								overlay: true					
							});
						</script>

					<?php } else if(!is_numeric($_POST['movie_imdb'])){ ?>

						<script type="text/javascript">	
							$("body").overhang({
								type: "info",
								message: "🔔 IMDB Kısmına Sadece Sayı Giriniz.",
								duration: "2",
								overlay: true					
							});
						</script>
	
					<?php } else {
					if (isset($_FILES['movie_resimurl'])) {
						$hata = $_FILES['movie_resimurl']['error'];
						if ($hata != 0) { ?>

							<script type="text/javascript">	
								$("body").overhang({
									type: "error",
									message: "❌ Resim gönderilirken bir hata gerçekleşti.",
									duration: "2",
									overlay: true				
								});
							</script>

							<?php } else {
							$resimBoyutu = $_FILES['movie_resimurl']['size']; 
							if ($resimBoyutu > (1024 * 1024 * 2)) { ?>

								<script type="text/javascript">	
									$("body").overhang({
										type: "error",
										message: "❌ Resim 2MB den büyük olamaz.",
										duration: "2",
										overlay: true				
									});
								</script>
	
								<?php } else {
								$tip = $_FILES['movie_resimurl']['type'];
								$resimAdi = $_FILES['movie_resimurl']['name'];
								$uzantisi = explode('.', $resimAdi); 
								$uzantisi = $uzantisi[count($uzantisi) - 1];

								$yeni_adi = "../images/" . time() . "." . $uzantisi;

								if ($tip == 'image/jpeg' || $tip == 'image/jpg' || $tip == 'image/webp' || $tip == 'image/png') { 
									if (move_uploaded_file($_FILES["movie_resimurl"]["tmp_name"], $yeni_adi)) {

										if(isset($_POST['movie_tur']) || isset($_POST['movie_sure'])){
											$turler = $_POST['movie_tur'];
											$movie_turr = implode(' / ',$turler);

											$diller = $_POST['movie_dil'];
											$movie_dill = implode(' / ',$diller);

											$tarihsaat=date("Y-m-d H:i:s");
											$kaydet=$db->prepare("INSERT INTO movie SET
												movie_ismi=:movie_ismi,
												movie_kategori=:movie_kategori,
												movie_yapimyil=:movie_yapimyil,
												movie_imdb=:movie_imdb,
												movie_imdblink=:movie_imdblink,
												movie_ozet=:movie_ozet,
												movie_sure=:movie_sure,
												movie_dil=:movie_dil,
												movie_tur=:movie_tur,
												movie_resimurl=:movie_resimurl,
												movie_tarih=:movie_tarih");
											$insert=$kaydet->execute(array(
												'movie_ismi' => trim(strip_tags($_POST['movie_ismi'])),
												'movie_kategori' => trim(strip_tags($_POST['movie_kategori'])),
												'movie_yapimyil' => trim(strip_tags($_POST['movie_yapimyil'])),
												'movie_imdb' => trim(strip_tags($_POST['movie_imdb'])),
												'movie_imdblink' => trim(strip_tags($_POST['movie_imdblink'])),
												'movie_ozet' => trim(strip_tags($_POST['movie_ozet'])),
												'movie_sure' => trim(strip_tags($_POST['movie_sure'])),
												'movie_dil' => $movie_dill,
												'movie_tur' => $movie_turr,
												'movie_resimurl' => $yeni_adi,
												'movie_tarih' => $tarihsaat
											)); ?>

										<script type="text/javascript">	
											$("body").overhang({
												type: "success",
												message: "✔️ Filmi Başarılı Şekilde Eklediniz.",
												duration: "2",
												overlay: true		
											}); 
										</script>

								<?php }
								} else 
								echo 'Resim yüklenirken bir hata oluştu.';
							} else { ?>

								<script type="text/javascript">	
									$("body").overhang({
										type: "info",
										message: "🔔 Yanlızca JPG,PNG ve WEBP resim gönderebilirsiniz.",
										duration: "2",
										overlay: true				
									});
								</script>

					  <?php }
						}
					}
				}
			}
		}
/*****************************************************************************************/
	if(isset($_POST['anketviewupdate'])) {
	
			if (empty($_POST['anket_durum'])){ ?>
		
			<script type="text/javascript">	
				$("body").overhang({
					type: "info",
					message: "🔔 Boş Alan Bırakılmaz!",
					duration: "2",
					overlay: true					
				});
			</script>

			<?php } else {
		
			$duzenle=$db->prepare("UPDATE anket SET
				anket_inceleyen=:anket_inceleyen,
				anket_durum=:anket_durum
				WHERE anket_id={$_POST['anket_id']}");
			$update=$duzenle->execute(array(
				'anket_inceleyen' => trim(strip_tags($_POST['anket_inceleyen'])),
				'anket_durum' => trim(strip_tags($_POST['anket_durum']))
		
			)); ?>

			<script type="text/javascript">	
				$("body").overhang({
					type: "info",
					message: "🔔 Başarılı Şekilde Kaydedildi.",
					duration: "2",
					overlay: true				
				});
			</script>

 <?php }
	} 	
/*****************************************************************************************/
if(isset($_POST['userpicture'])) {

	if (isset($_FILES['emreylcz_profilresmi'])) {
		$hata = $_FILES['emreylcz_profilresmi']['error'];
		if ($hata != 0) { ?>

			<script type="text/javascript">	
				$("body").overhang({
					type: "error",
					message: "❌ Resim gönderilirken bir hata gerçekleşti.",
					duration: "2",
					overlay: true				
				});
			</script>

		<?php } else {

			$resimBoyutu = $_FILES['emreylcz_profilresmi']['size']; 
			if ($resimBoyutu > (1024 * 1024 * 2)) { ?> 

				<script type="text/javascript">	
					$("body").overhang({
						type: "error",
						message: "❌ Resim 2MB den büyük olamaz.",
						duration: "2",
						overlay: true				
					});
				</script>

				<?php } else {

				$tip = $_FILES['emreylcz_profilresmi']['type'];
				$resimAdi = $_FILES['emreylcz_profilresmi']['name'];
				$uzantisi = explode('.', $resimAdi); 
				$uzantisi = $uzantisi[count($uzantisi) - 1];

				$yeni_adi = "../userpicture/" . time() . "." . $uzantisi;

				if ($tip == 'image/jpeg' || $tip == 'image/jpg' || $tip == 'image/webp' || $tip == 'image/png') { 

					if (move_uploaded_file($_FILES["emreylcz_profilresmi"]["tmp_name"], $yeni_adi)) {

						$duzenle=$db->prepare("UPDATE users SET
							emreylcz_profilresmi=:emreylcz_profilresmi
							WHERE emreylcz_id ={$_SESSION['userid']}");
						$update=$duzenle->execute(array(
							'emreylcz_profilresmi' => $yeni_adi
						)); ?>

						<script type="text/javascript">	
							$("body").overhang({
								type: "success",
								message: "✔️ Profil Resmi Başarılı Şekilde Güncellendi.",
								duration: "2",
								overlay: true		
							}); 
						</script>

					<?php } else { ?>

						<script type="text/javascript">	
							$("body").overhang({
								type: "error",
								message: "❌ Resim yüklenirken bir hata oluştu.",
								duration: "2",
								overlay: true				
							});
						</script>

				<?php } 
				} else { ?>

						<script type="text/javascript">	
							$("body").overhang({
								type: "info",
								message: "🔔 Yanlızca JPG,PNG ve WEBP resim gönderebilirsiniz.",
								duration: "2",
								overlay: true				
							});
						</script>

		  <?php }  
			}
	  	}
   	}
}		
/*****************************************************************************************/
if(isset($_POST['usernickname'])) {

	$emreylcz_kadi = trim(strip_tags($_POST["emreylcz_kadi"]));
	
	$ayni_uye_varmi = $db -> prepare("SELECT * FROM users WHERE emreylcz_kadi = ?");
	$ayni_uye_varmi -> execute(array($emreylcz_kadi));
	if($ayni_uye_varmi -> rowCount()){ ?>
	
		<script type="text/javascript">	
			$("body").overhang({
				type: "warn",
				message: "⚠️ Bu kullanıcı adı zaten kullanılıyor, Farklı bir kullanıcı adı deneyin.",
				duration: "2",
				overlay: true				
			});
		</script>

	<?php } else {
	
	if (empty($_POST['emreylcz_kadi'])){ ?>

		<script type="text/javascript">	
			$("body").overhang({
				type: "warn",
				message: "⚠️ Kullanıcı Adı Boş Bırakılamaz!",
				duration: "2",
				overlay: true				
			});
		</script>

	<?php } else {
	$emreylcz_kadi=$_POST['emreylcz_kadi'];

	$duzenle=$db->prepare("UPDATE users SET
		emreylcz_kadi=:emreylcz_kadi
		WHERE emreylcz_id ={$_SESSION['userid']}");
	$update=$duzenle->execute(array(
		'emreylcz_kadi' => trim(strip_tags($_POST['emreylcz_kadi']))
	)); ?>

	<script type="text/javascript">	
		$("body").overhang({
			type: "success",
			message: "✔️ Kullanıcı Adın Başarılı Şekilde Güncellendi.",
			duration: "2",
			overlay: true		
		}); 
	</script>

<?php }
	} 
}
/*****************************************************************************************/
if(isset($_POST['userpersonal'])) {
	
	if (empty($_POST['emreylcz_adsoyad']) or empty($_POST['emreylcz_mail'])){ ?>

	<script type="text/javascript">	
		$("body").overhang({
			type: "warn",
			message: "⚠️ Boş Alan Bırakılamaz!",
			duration: "2",
			overlay: true				
		});
	</script>

	<?php } else {

	$duzenle=$db->prepare("UPDATE users SET
		emreylcz_adsoyad=:emreylcz_adsoyad,
		emreylcz_mail=:emreylcz_mail
		WHERE emreylcz_id ={$_SESSION['userid']}");
	$update=$duzenle->execute(array(
		'emreylcz_adsoyad' => trim(strip_tags($_POST['emreylcz_adsoyad'])),
		'emreylcz_mail' => trim(strip_tags($_POST['emreylcz_mail']))

	)); ?>

	<script type="text/javascript">	
		$("body").overhang({
			type: "success",
			message: "✔️ Bilgilerin Başarılı Şekilde Güncellendi.",
			duration: "2",
			overlay: true		
		}); 
	</script>

<?php }
} 
/*****************************************************************************************/
if(isset($_POST['userpassword'])) {

	$eskisifre=trim(strip_tags($_POST['emreylcz_eskisifre']));
	$sifre=trim(strip_tags(md5($_POST['emreylcz_sifre'])));
	$sifretekrar=trim(strip_tags(md5($_POST['emreylcz_sifretekrar'])));

	$emreylcz_sifre=md5($eskisifre);

	$lssx=$db->prepare("SELECT * FROM users WHERE emreylcz_sifre=:emrepass");
	$lssx->execute(array(
			':emrepass'=> $emreylcz_sifre
	));
	$mainlang=$lssx->fetch(PDO::FETCH_ASSOC);
	$say=$lssx->rowCount();

	if (empty($_POST['emreylcz_sifre']) or empty($_POST['emreylcz_sifretekrar'])){ ?>

		<script type="text/javascript">	
			$("body").overhang({
				type: "warn",
				message: "⚠️ Parola Boş Bırakılamaz!",
				duration: "2",
				overlay: true				
			});
		</script>
	
	<?php } else {
	if (empty($_POST['emreylcz_eskisifre'])){ ?>

		<script type="text/javascript">	
			$("body").overhang({
				type: "warn",
				message: "⚠️ Eski Parola Boş Bırakılamaz!",
				duration: "2",
				overlay: true				
			});
		</script>

	<?php } else {

	if ($sifre != $sifretekrar) { ?>

		<script type="text/javascript">	
			$("body").overhang({
				type: "error",
				message: "❌ Parola birbiriyle uyuşmuyor.",
				duration: "2",
				overlay: true				
			});
		</script>

	<?php } else {

	if($say==0){ ?>

		<script type="text/javascript">	
			$("body").overhang({
				type: "error",
				message: "❌ Eski Parola Hatalı.",
				duration: "2",
				overlay: true				
			});
		</script>

	<?php } else {	


	$duzenle=$db->prepare("UPDATE users SET
		emreylcz_sifre=:emreylcz_sifre
		WHERE emreylcz_id ={$_SESSION['userid']}");
	$update=$duzenle->execute(array(
		'emreylcz_sifre' => md5(trim(strip_tags($_POST['emreylcz_sifre'])))

	)); ?>

	<script type="text/javascript">	
		$("body").overhang({
			type: "success",
			message: "✔️ Parola Başarılı Şekilde Güncellendi.",
			duration: "2",
			overlay: true		
		}); 
	</script>

<?php }
    }
   }
 }
}
/*****************************************************************************************/
if(isset($_POST['userpermission'])) {

if (isset($_POST['emreylcz_perm'])){	

/** Kullanıcı  **/
if (isset($_POST["emreylcz_perm"]["kullaninicigoruntuleme"])) {
$kullaninicigoruntuleme = "on";
}else{
$kullaninicigoruntuleme = "off";
}
	
if (isset($_POST["emreylcz_perm"]["kullaniniciekle"])) {
$kullaniniciekle = "on";
}else{
$kullaniniciekle = "off";
}
	
if (isset($_POST["emreylcz_perm"]["kullaniniciislem"])) {
$kullaniniciislem = "on";
}else{
$kullaniniciislem  = "off";
}	

/** Film  **/
if (isset($_POST["emreylcz_perm"]["filmgoruntulenme"])) {
$filmgoruntulenme = "on";
}else{
$filmgoruntulenme = "off";
}

if (isset($_POST["emreylcz_perm"]["filmekle"])) {
$filmekle = "on";
}else{
$filmekle = "off";
}

if (isset($_POST["emreylcz_perm"]["filmislem"])) {
$filmislem = "on";
}else{
$filmislem  = "off";
}

/** Yorum  **/
if (isset($_POST["emreylcz_perm"]["yorumgoruntulenme"])) {
$yorumgoruntulenme = "on";
}else{
$yorumgoruntulenme = "off";
}
						
if (isset($_POST["emreylcz_perm"]["yorumislem"])) {
$yorumislem = "on";
}else{
$yorumislem  = "off";
}

/** Anket  **/
if (isset($_POST["emreylcz_perm"]["anketgoruntulenme"])) {
$anketgoruntulenme = "on";
}else{
$anketgoruntulenme = "off";
}
							
if (isset($_POST["emreylcz_perm"]["anketislem"])) {
$anketislem = "on";
}else{
$anketislem  = "off";
}

/** İletişim  **/
if (isset($_POST["emreylcz_perm"]["iletisimgoruntulenme"])) {
$iletisimgoruntulenme = "on";
}else{
$iletisimgoruntulenme = "off";
}
							
if (isset($_POST["emreylcz_perm"]["iletisimislem"])) {
$iletisimislem = "on";
}else{
$iletisimislem  = "off";
}

/** Menü  **/
if (isset($_POST["emreylcz_perm"]["menugoruntulenme"])) {
$menugoruntulenme = "on";
}else{
$menugoruntulenme = "off";
}
		
if (isset($_POST["emreylcz_perm"]["menuekleme"])) {
$menuekleme = "on";
}else{
$menuekleme = "off";
}
		
if (isset($_POST["emreylcz_perm"]["menuislem"])) {
$menuislem = "on";
}else{
$menuislem  = "off";
}	

/** Ayarlar  **/
if (isset($_POST["emreylcz_perm"]["ayarlargoruntulenme"])) {
$ayarlargoruntulenme = "on";
}else{
$ayarlargoruntulenme = "off";
}
								
if (isset($_POST["emreylcz_perm"]["ayarlarislem"])) {
$ayarlarislem = "on";
}else{
$ayarlarislem  = "off";
}
	
$conf= array(
	'kullaninicigoruntuleme'=> $kullaninicigoruntuleme,
	'kullaniniciekle'=> $kullaniniciekle,  
	'kullaniniciislem'=> $kullaniniciislem,
	'filmgoruntulenme'=> $filmgoruntulenme,
	'filmekle'=> $filmekle,  
	'filmislem'=> $filmislem,
	'anketgoruntulenme'=> $anketgoruntulenme, 
	'anketislem'=> $anketislem,
	'yorumgoruntulenme'=> $yorumgoruntulenme, 
	'yorumislem'=> $yorumislem,
	'iletisimgoruntulenme'=> $iletisimgoruntulenme, 
	'iletisimislem'=> $iletisimislem,
	'menugoruntulenme'=> $menugoruntulenme,
	'menuekleme'=> $menuekleme,  
	'menuislem'=> $menuislem,
	'ayarlargoruntulenme'=> $ayarlargoruntulenme, 
	'ayarlarislem'=> $ayarlarislem
);

$conf= json_encode($conf);
    $perm = $_POST['emreylcz_perm'];
	$permcek = implode(' / ',$perm);

	$duzenle=$db->prepare("UPDATE users SET
		emreylcz_perm=:emreylcz_perm
		WHERE emreylcz_id ={$_SESSION['userid']}");
	$update=$duzenle->execute(array(
		'emreylcz_perm' => $conf

	)); ?>

	<script type="text/javascript">	
	$("body").overhang({
		type: "success",
		message: "✔️ Kullanıcı izinleri kaydedildi.",
		duration: "2",
		overlay: true		
	}); 
	</script>

<?php }
}  
/*****************************************************************************************/
if(isset($_POST['useradd'])) { 

	$tarihsaat=date("Y-m-d H:i:s");
	$emreylcz_adsoyad = trim(strip_tags($_POST["emreylcz_adsoyad"]));
	$emreylcz_kadi = trim(strip_tags($_POST["emreylcz_kadi"]));
	$emreylcz_mail = trim(strip_tags($_POST["emreylcz_mail"]));
	$emreylcz_admin = trim(strip_tags($_POST["emreylcz_admin"]));
	$emreylcz_sifre = trim(strip_tags(md5($_POST["emreylcz_sifre"])));
	$emreylcz_sifretekrar = trim(strip_tags(md5($_POST["emreylcz_sifretekrar"])));
	$emreylcz_tarih = $tarihsaat;

	if (empty($_POST['emreylcz_kadi']) or empty($_POST['emreylcz_sifre']) or empty($_POST['emreylcz_adsoyad']) or empty($_POST['emreylcz_mail'])) { ?>

		<script type="text/javascript">	
			$("body").overhang({
				type: "warn",
				message: "⚠️ Lütfen boş alan bırakmayınız!",
				duration: "2",
				overlay: true				
			});
		</script>

	<?php } else {

		if (preg_match('/[\'^£$%&*()}{@#~?><>,. |=_+¬-]/', $emreylcz_kadi)) { ?>

			<script type="text/javascript">	
				$("body").overhang({
					type: "warn",
					message: "⚠️ Kullanıcı adında özel karakter kullanılamaz!",
					duration: "2",
					overlay: true				
				});
			</script>

		<?php } else {

		if(!filter_var($emreylcz_mail, FILTER_VALIDATE_EMAIL)) { ?>

			<script type="text/javascript">	
				$("body").overhang({
					type: "info",
					message: "🔔 E-posta formatı yanlış girildi.",
					duration: "2",
					overlay: true				
				});
			</script>

		<?php } else {


			$ayni_uye_varmi = $db -> prepare("SELECT * FROM users WHERE emreylcz_kadi = ?");
			$ayni_uye_varmi -> execute(array($emreylcz_kadi));
			if($ayni_uye_varmi -> rowCount()){ ?>

				<script type="text/javascript">	
					$("body").overhang({
						type: "warn",
						message: "⚠️ Bu kullanıcı adı zaten kullanılıyor, Farklı bir kullanıcı adı deneyin.",
						duration: "2",
						overlay: true				
					});
				</script>

			<?php } else {
				if ($emreylcz_sifre != $emreylcz_sifretekrar) { ?>

					<script type="text/javascript">	
						$("body").overhang({
							type: "error",
							message: "❌ Şifre birbiriyle uyuşmuyor.",
							duration: "2",
							overlay: true				
						});
					</script>

				<?php  } else { 




						$profiller=array("assets/images/faces/1.jpg","assets/images/faces/2.jpg","assets/images/faces/3.jpg","assets/images/faces/4.jpg","assets/images/faces/5.jpg","assets/images/faces/6.jpg","assets/images/faces/7.jpg","assets/images/faces/8.jpg");
						$profilmiktar=count($profiller)-1;
						$rasgele=rand(0,$profilmiktar);


						$uye_ekle = $db->prepare("INSERT INTO users (emreylcz_kadi, emreylcz_sifre, emreylcz_adsoyad, emreylcz_mail, emreylcz_tarih, emreylcz_profilresmi, emreylcz_admin) VALUES (?,?,?,?,?,?,?)");
						$uye_ekle -> execute(array($emreylcz_kadi, $emreylcz_sifre, $emreylcz_adsoyad, $emreylcz_mail, $tarihsaat, $profiller[$rasgele], $emreylcz_admin));
						if ($uye_ekle){ ?>

							<script type="text/javascript">	
								$("body").overhang({
									type: "success",
									message: "✔️ Kullanıcıyı Başarılı Şekilde Eklediniz.",
									duration: "2",
									overlay: true		
								}); 
							</script>
	
							<?php header("Refresh: 2; url=../panel/users.php");	

						} else { ?>

							<script type="text/javascript">	
								$("body").overhang({
									type: "error",
									message: "❌ Kayıt başarısız. Bir sorun oluştu.",
									duration: "2",
									overlay: true				
								});
							</script>

				  <?php } 
					}
			  	}
			}
		}
	}
}
/*****************************************************************************************/
if(isset($_POST['userpictureupdate'])) {

	if (isset($_FILES['emreylcz_profilresmi'])) {
		$hata = $_FILES['emreylcz_profilresmi']['error'];
		if ($hata != 0) { ?>

			<script type="text/javascript">	
				$("body").overhang({
					type: "error",
					message: "❌ Resim gönderilirken bir hata gerçekleşti.",
					duration: "2",
					overlay: true				
				});
			</script>

			<?php } else {
			$resimBoyutu = $_FILES['emreylcz_profilresmi']['size']; 
			if ($resimBoyutu > (1024 * 1024 * 2)) { ?>
			
				<script type="text/javascript">	
					$("body").overhang({
						type: "error",
						message: "❌ Resim 2MB den büyük olamaz.",
						duration: "2",
						overlay: true				
					});
				</script>

		<?php } else {
				$tip = $_FILES['emreylcz_profilresmi']['type'];
				$resimAdi = $_FILES['emreylcz_profilresmi']['name'];
				$uzantisi = explode('.', $resimAdi); 
				$uzantisi = $uzantisi[count($uzantisi) - 1];

				$yeni_adi = "../userpicture/" . time() . "." . $uzantisi;

				if ($tip == 'image/jpeg' || $tip == 'image/jpg' || $tip == 'image/webp' || $tip == 'image/png') { 
					if (move_uploaded_file($_FILES["emreylcz_profilresmi"]["tmp_name"], $yeni_adi)) {

						$duzenle=$db->prepare("UPDATE users SET
							emreylcz_profilresmi=:emreylcz_profilresmi
							WHERE emreylcz_id={$_GET['id']}");
						$update=$duzenle->execute(array(
							'emreylcz_profilresmi' => $yeni_adi
						)); ?>

						<script type="text/javascript">	
							$("body").overhang({
								type: "success",
								message: "✔️ Profil Resmi Başarılı Şekilde Güncellendi.",
								duration: "2",
								overlay: true		
							}); 
						</script>

					<?php header("Refresh: 1; url=../panel/users.php");	
					
				}else 
				echo 'Resim yüklenirken bir hata oluştu.';
			} else { ?>

					<script type="text/javascript">	
						$("body").overhang({
							type: "info",
							message: "🔔 Yanlızca JPG,PNG ve WEBP resim gönderebilirsiniz.",
							duration: "2",
							overlay: true				
						});
					</script>

		<?php }  
		 }
	  }
   }
}
/*****************************************************************************************/
if(isset($_POST['usernicknameupdate'])) {

	$emreylcz_kadi = trim(strip_tags($_POST["emreylcz_kadi"]));
	
	$ayni_uye_varmi = $db -> prepare("SELECT * FROM users WHERE emreylcz_kadi = ?");
	$ayni_uye_varmi -> execute(array($emreylcz_kadi));
	if($ayni_uye_varmi -> rowCount()){ ?>

	<script type="text/javascript">	
		$("body").overhang({
			type: "warn",
			message: "⚠️ Bu kullanıcı adı zaten kullanılıyor, Farklı bir kullanıcı adı deneyin.",
			duration: "2",
			overlay: true				
		});
	</script>

	<?php } else {
	
	if (empty($_POST['emreylcz_kadi'])){ ?>

	<script type="text/javascript">	
		$("body").overhang({
			type: "warn",
			message: "⚠️ Kullanıcı Adı Boş Bırakılamaz!",
			duration: "2",
			overlay: true				
		});
	</script>

	<?php }else {

	$emreylcz_kadi=$_POST['emreylcz_kadi'];

	$duzenle=$db->prepare("UPDATE users SET
		emreylcz_kadi=:emreylcz_kadi
		WHERE emreylcz_id={$_GET['id']}");
	$update=$duzenle->execute(array(
		'emreylcz_kadi' => trim(strip_tags($_POST['emreylcz_kadi']))
	)); ?>

	<script type="text/javascript">	
		$("body").overhang({
			type: "success",
			message: "✔️ Kullanıcı Adın Başarılı Şekilde Güncellendi.",
			duration: "2",
			overlay: true		
		}); 
	</script>

	<?php header("Refresh: 1; url=../panel/users.php");	
	}
  } 
}
/*****************************************************************************************/
if(isset($_POST['userpersonalupdate'])) {
	
	if (empty($_POST['emreylcz_adsoyad']) or empty($_POST['emreylcz_mail'])){ ?>

		<script type="text/javascript">	
			$("body").overhang({
				type: "warn",
				message: "⚠️ Boş Alan Bırakmayınız!",
				duration: "2",
				overlay: true				
			});
		</script>

	<?php } else {

	$duzenle=$db->prepare("UPDATE users SET
		emreylcz_adsoyad=:emreylcz_adsoyad,
		emreylcz_admin=:emreylcz_admin,
		emreylcz_mail=:emreylcz_mail
		WHERE emreylcz_id={$_GET['id']}");
	$update=$duzenle->execute(array(
		'emreylcz_adsoyad' => trim(strip_tags($_POST['emreylcz_adsoyad'])),
		'emreylcz_admin' => trim(strip_tags($_POST['emreylcz_admin'])),
		'emreylcz_mail' => trim(strip_tags($_POST['emreylcz_mail']))

	)); ?>

	<script type="text/javascript">	
		$("body").overhang({
			type: "success",
			message: "✔️ Bilgilerin Başarılı Şekilde Güncellendi.",
			duration: "2",
			overlay: true		
		}); 
	</script>

	<?php header("Refresh: 1; url=../panel/users.php");	
	}
} 
/*****************************************************************************************/
if(isset($_POST['userpasswordupdate'])) {

	$sifre=trim(strip_tags(md5($_POST['emreylcz_sifre'])));
	$sifretekrar=trim(strip_tags(md5($_POST['emreylcz_sifretekrar'])));

	if (empty($_POST['emreylcz_sifre']) or empty($_POST['emreylcz_sifretekrar'])){ ?>

		<script type="text/javascript">	
			$("body").overhang({
				type: "warn",
				message: "⚠️ Parola Boş Bırakılamaz!",
				duration: "2",
				overlay: true				
			});
		</script>

<?php } else {
		if ($sifre != $sifretekrar) { ?>

				<script type="text/javascript">	
					$("body").overhang({
						type: "error",
						message: "❌ Parola birbiriyle uyuşmuyor.",
						duration: "2",
						overlay: true				
					});
				</script>

		<?php } else {

		$duzenle=$db->prepare("UPDATE users SET
			emreylcz_sifre=:emreylcz_sifre
			WHERE emreylcz_id={$_GET['id']}");
		$update=$duzenle->execute(array(
			'emreylcz_sifre' => md5(trim(strip_tags($_POST['emreylcz_sifre'])))

		)); ?>

		<script type="text/javascript">	
			$("body").overhang({
				type: "success",
				message: "✔️ Parola Başarılı Şekilde Güncellendi.",
				duration: "2",
				overlay: true		
			}); 
		</script>

		<?php header("Refresh: 1; url=../panel/users.php");	
   }
 }
}
/*****************************************************************************************/
if(isset($_POST['userpermissionupdate'])) {

	if (isset($_POST['emreylcz_perm'])){	
	
	/** Kullanıcı  **/
	if (isset($_POST["emreylcz_perm"]["kullaninicigoruntuleme"])) {
	$kullaninicigoruntuleme = "on";
	}else{
	$kullaninicigoruntuleme = "off";
	}
		
	if (isset($_POST["emreylcz_perm"]["kullaniniciekle"])) {
	$kullaniniciekle = "on";
	}else{
	$kullaniniciekle = "off";
	}
		
	if (isset($_POST["emreylcz_perm"]["kullaniniciislem"])) {
	$kullaniniciislem = "on";
	}else{
	$kullaniniciislem  = "off";
	}	
	
	/** Film  **/
	if (isset($_POST["emreylcz_perm"]["filmgoruntulenme"])) {
	$filmgoruntulenme = "on";
	}else{
	$filmgoruntulenme = "off";
	}
	
	if (isset($_POST["emreylcz_perm"]["filmekle"])) {
	$filmekle = "on";
	}else{
	$filmekle = "off";
	}
	
	if (isset($_POST["emreylcz_perm"]["filmislem"])) {
	$filmislem = "on";
	}else{
	$filmislem  = "off";
	}
	
	/** Yorum  **/
	if (isset($_POST["emreylcz_perm"]["yorumgoruntulenme"])) {
	$yorumgoruntulenme = "on";
	}else{
	$yorumgoruntulenme = "off";
	}
							
	if (isset($_POST["emreylcz_perm"]["yorumislem"])) {
	$yorumislem = "on";
	}else{
	$yorumislem  = "off";
	}
	
	/** Anket  **/
	if (isset($_POST["emreylcz_perm"]["anketgoruntulenme"])) {
	$anketgoruntulenme = "on";
	}else{
	$anketgoruntulenme = "off";
	}
								
	if (isset($_POST["emreylcz_perm"]["anketislem"])) {
	$anketislem = "on";
	}else{
	$anketislem  = "off";
	}
	
	/** İletişim  **/
	if (isset($_POST["emreylcz_perm"]["iletisimgoruntulenme"])) {
	$iletisimgoruntulenme = "on";
	}else{
	$iletisimgoruntulenme = "off";
	}
								
	if (isset($_POST["emreylcz_perm"]["iletisimislem"])) {
	$iletisimislem = "on";
	}else{
	$iletisimislem  = "off";
	}
	
	/** Menü  **/
	if (isset($_POST["emreylcz_perm"]["menugoruntulenme"])) {
	$menugoruntulenme = "on";
	}else{
	$menugoruntulenme = "off";
	}
			
	if (isset($_POST["emreylcz_perm"]["menuekleme"])) {
	$menuekleme = "on";
	}else{
	$menuekleme = "off";
	}
			
	if (isset($_POST["emreylcz_perm"]["menuislem"])) {
	$menuislem = "on";
	}else{
	$menuislem  = "off";
	}	
	

	/** Ayarlar  **/
	if (isset($_POST["emreylcz_perm"]["ayarlargoruntulenme"])) {
	$ayarlargoruntulenme = "on";
	}else{
	$ayarlargoruntulenme = "off";
	}
									
	if (isset($_POST["emreylcz_perm"]["ayarlarislem"])) {
	$ayarlarislem = "on";
	}else{
	$ayarlarislem  = "off";
	}
		
	$conf= array(
		'kullaninicigoruntuleme'=> $kullaninicigoruntuleme,
		'kullaniniciekle'=> $kullaniniciekle,  
		'kullaniniciislem'=> $kullaniniciislem,
		'filmgoruntulenme'=> $filmgoruntulenme,
		'filmekle'=> $filmekle,  
		'filmislem'=> $filmislem,
		'anketgoruntulenme'=> $anketgoruntulenme, 
		'anketislem'=> $anketislem,
		'yorumgoruntulenme'=> $yorumgoruntulenme, 
		'yorumislem'=> $yorumislem,
		'iletisimgoruntulenme'=> $iletisimgoruntulenme, 
		'iletisimislem'=> $iletisimislem,
		'menugoruntulenme'=> $menugoruntulenme,
		'menuekleme'=> $menuekleme,  
		'menuislem'=> $menuislem,
		'ayarlargoruntulenme'=> $ayarlargoruntulenme, 
		'ayarlarislem'=> $ayarlarislem
	);
	
		$conf= json_encode($conf);
		$perm = $_POST['emreylcz_perm'];
		$permcek = implode(' / ',$perm);
	
		$duzenle=$db->prepare("UPDATE users SET
			emreylcz_perm=:emreylcz_perm
			WHERE emreylcz_id={$_GET['id']}");
		$update=$duzenle->execute(array(
			'emreylcz_perm' => $conf
	
		)); ?>

		<script type="text/javascript">	
			$("body").overhang({
				type: "success",
				message: "✔️ İzinler Kaydedildi.",
				duration: "2",
				overlay: true		
			}); 
		</script>

		<?php header("Refresh: 1; url=../panel/users.php");		
		}
	}
/*****************************************************************************************/
?>

