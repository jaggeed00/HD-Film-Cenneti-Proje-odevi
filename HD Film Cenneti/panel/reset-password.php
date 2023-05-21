<?php
define ('guvenlik', true);
/*################################*/
include '../db/connect.php';
/*################################*/
include '../db/process.php';
/*################################*/
include '../mail/class.phpmailer.php';
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
	<title><?php echo $settingcek ['settings_sayfaismi']; ?> | Yeni Şifre Oluştur</title>
    <!--===============================================================================================-->
    <link rel="stylesheet" href="css/login-style.css">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->  
    <link rel="shortcut icon" href="<?php echo $settingcek ['settings_favicon']; ?>" type="image/x-icon"> 
    <!--===============================================================================================-->     
</head>
<body>

    <div class="box">
        <span class="borderLine"></span>
        <form  method="POST">
            <h2>Yeni Şifre Oluştur</h2>

            <div class="inputBox">
                <input type="mail" required="required" name="emreylcz_mail" id="emreylcz_mail">
                <span>Kullanıcı Adı</span>
                <i></i> 
            </div>

            <div class="inputBox">
                <input type="password" required="required" name="emreylcz_sifre" id="emreylcz_sifre">
                <span>Şifre</span>
                <i></i> 
            </div>

            <div class="inputBox">
                <input type="password" required="required" name="emreylcz_sifre2" id="emreylcz_sifre2">
                <span>Tekrar Şifre</span>
                <i></i> 
            </div>


            <div class="links">
                <a href="login.php">Oturum Aç</a>
                <a href="register.php">Kayıt Ol</a>
            </div>

            <input type="hidden" name="resetmail">
            <input type="submit" value="Gönder"><br>

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