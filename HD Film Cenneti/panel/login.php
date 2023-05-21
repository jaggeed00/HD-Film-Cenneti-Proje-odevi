<?php
define ('guvenlik', true);
/*################################*/
include '../db/connect.php';
/*################################*/
include '../db/process.php';
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
	<title>HD Film Cenneti | Giriş Yap</title>
    <!--===============================================================================================-->
    <link rel="stylesheet" href="css/login-style.css">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
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
        <form  id="login_sweetalert" method="POST">
            <h2>Oturum Aç</h2>

            <div class="inputBox">
                <input type="text" name="emreylcz_kadi" id="emreylcz_kadi">
                <span>Kullanıcı Adı</span>
                <i></i> 
            </div>

            <div class="inputBox">
                <input type="password" name="emreylcz_sifre" id="emreylcz_sifre">
                <span>Şifre</span>
                <i></i>
            </div>

            <div class="links">
                <a href="forgot-password.php">Parolanızı mı unuttunuz?</a>
                <a href="register.php">Kayıt Ol</a>
            </div>

            <input type="hidden" name="panelogin">
            <input type="submit" value="Oturum Aç"><br>

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
	<script src="js/wow.min.js"></script>
	<script>  
    	 new WOW().init();  
  	</script>  
    <!--===============================================================================================-->

</body>
</html>