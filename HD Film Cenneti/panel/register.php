<?php
define ('guvenlik', true);
/*################################*/
include '../db/connect.php';
/*################################*/
include '../db/process.php';
/*################################*/
ob_start();
session_start(); 
/*################################*/
$decoder3 = json_decode($settingcek["settings_status"], true);
/*################################*/

if(isset($_SESSION['emreylcz_kadi'])) {

  header('Location:index.php');
} 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <!--===============================================================================================-->
    <meta charset="UTF-8">
    <!--===============================================================================================-->
	<title><?php echo $settingcek ['settings_sayfaismi']; ?> | Kayıt Ol</title>
    <!--===============================================================================================-->
    <link rel="stylesheet" href="css/register-style.css">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->  
    <link rel="shortcut icon" href="<?php echo $settingcek ['settings_favicon']; ?>" type="image/x-icon"> 
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

    <div class="box">
        <span class="borderLine"></span>
        <form method="POST">
            <h2>Kayıt Ol</h2>

            <div class="inputBox">
                <input type="text" name="emreylcz_kadi" id="emreylcz_kadi" title="En az 5 veya daha fazla karakter içermelidir."  pattern=".{5,}">
                <span>Kullanıcı Adı</span>
                <i></i> 
            </div>

            <div class="inputBox">
                <input type="text" name="emreylcz_adsoyad" id="emreylcz_adsoyad" title="En az 3 veya daha fazla karakter içermelidir." pattern=".{3,}">
                <span>Ad Soyad</span>
                <i></i> 
            </div>

            <div class="inputBox">
                <input type="mail" name="emreylcz_mail" id="emreylcz_mail">
                <span>Email</span>
                <i></i> 
            </div>

            <div class="inputBox">
                <input type="password"name="emreylcz_sifre" id="emreylcz_sifre" title="En az 1 Sayı, 1 Büyük Harf, 1 Küçük Harf ve en az 6 veya daha fazla karakter içermelidir." pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}">
                <span>Şifre</span>
                <i></i>
            </div>

            <div class="inputBox">
                <input type="password" name="emreylcz_sifretekrar" id="emreylcz_sifretekrar" title="En az 1 Sayı, 1 Büyük Harf, 1 Küçük Harf ve en az 6 veya daha fazla karakter içermelidir." pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}">
                <span>Tekrar Şifre</span>
                <i></i>
            </div>

            <div class="links">
                <a href="forgot-password.php">Parolanızı mı unuttunuz?</a>
                <a href="login">Oturum Aç</a>
            </div>
            <?php if($decoder3["kayitol"]=="on"){ ?>
            <input type="hidden" name="registerform">
            <input type="submit" value="Kayıt Ol"><br>
            <?php } else { ?>
                <input type="submit" title="Kayıt Ol işlemi yetkililer tarafından kapatılmıştır." value="Kayıt Ol [ KAPALI ]"><br>
            <?php } ?>

            <span class="users">
            <?php 
                $usersor=$db->prepare("select * from users order by emreylcz_id DESC limit 1");
				$usersor->execute();
					while($usercek=$usersor->fetch(PDO::FETCH_ASSOC)){ ?>

					<b><font style="font-size:17px; background: linear-gradient(to right, #45f3ff 0%, #ff2770 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Son Üye: <?php echo $usercek['emreylcz_kadi']; ?></b><br></font>

			<?php } ?>
			</span>

        </form>
    </div>
    

    <!--===============================================================================================-->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!--===============================================================================================-->
    <!--===============================================================================================-->
	<script src="js/wow.min.js"></script>
	<script>  
    	 new WOW().init();  
  	</script>  
    <!--===============================================================================================-->

</body>
</html>