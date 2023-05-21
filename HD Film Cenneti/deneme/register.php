<!DOCTYPE html>
<html lang="tr">
<head>
	<title>Torrent Oyun | Kayıt Ol</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/f1.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/wallpaper2.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form action="" method="POST" class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						Kayıt Ol
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Kullanıcı adı">
						<input class="input100" type="text" name="emreylcinn_kadi" id="emreylcinn_kadi" title="En az 6 veya daha fazla karakter içermelidir."  pattern=".{6,}" placeholder="Kullanıcı adı">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Ad Soyad">
						<input class="input100" type="text" name="emreylcinn_adsoyad" id="emreylcinn_adsoyad" title="En az 3 veya daha fazla karakter içermelidir."  pattern=".{3,}" placeholder="Ad Soyad">
						<span class="focus-input100" data-symbol="&#xf212;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Email">
						<input class="input100" type="mail" name="emreylcinn_mail" id="emreylcinn_mail" placeholder="Email">
						<span class="focus-input100" data-symbol="&#xf159;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Parola">
						<input class="input100" type="password" name="emreylcinn_sifre" id="emreylcinn_sifre" title="En az bir sayı ve bir büyük ve küçük harf ve en az 8 veya daha fazla karakter içermelidir." pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Parola">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Tekrar Parola">
						<input class="input100" type="password" name="emreylcinn_sifretekrar" id="emreylcinn_sifretekrar" title="En az bir sayı ve bir büyük ve küçük harf ve en az 8 veya daha fazla karakter içermelidir." pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Tekrar Parola">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							Parolanızı mı unuttunuz?
						</a>
					</div>

						
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<input type="hidden" name="registerform">
							<button type="submit" class="login100-form-btn">
								Kayıt Ol
							</button>
						</div>
					</div>


					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">

						<b><font style="font-size: 17px; background: linear-gradient(to right, #0167a6 0%, black 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Son Üye: emreyalcin</b><br></font>
						</span>

						<a href="login.html" class="txt2" style="font-size: 17px;">
							Oturum Aç
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<!--===============================================================================================-->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>