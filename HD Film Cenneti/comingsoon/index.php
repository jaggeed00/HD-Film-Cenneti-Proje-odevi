<?php 
include '../db/connect.php';
/*################################*/
include '../db/process.php';
/*################################*/
$settingsor=$db->prepare("select * from settings");
$settingsor->execute();
$settingcek=$settingsor->fetch(PDO::FETCH_ASSOC);
/*************************************************************************************************/
$decoder3 = json_decode($settingcek["settings_status"], true);
/*************************************************************************************************/
if($decoder3["bakimmodu"]=="on"){
/*************************************************************************************************/?>

<!DOCTYPE html>
<html lang="tr">
<head>
	<title><?php echo $settingcek ['settings_title5']; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="shortcut icon" href="<?php echo $settingcek ['settings_favicon']; ?>" type="image/x-icon"> 
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
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
	
	<!--  -->
	<div class="simpleslide100">
		<div class="simpleslide100-item bg-img1" style="background-image: url('images/bg01.jpg');"></div>
		<div class="simpleslide100-item bg-img1" style="background-image: url('images/bg02.jpg');"></div>
		<div class="simpleslide100-item bg-img1" style="background-image: url('images/bg03.jpg');"></div>
		<div class="simpleslide100-item bg-img1" style="background-image: url('images/bg04.jpg');"></div>
	</div>

	<div class="flex-col-c-sb size1 overlay1">
		<!--  -->
		<div class="w-full flex-w flex-sb-m p-l-80 p-r-80 p-t-22 p-lr-15-sm">
			<div class="wrappic1 m-r-30 m-t-10 m-b-10">
			</div>

		</div>

		<!--  -->
		<div class="flex-col-c-m p-l-15 p-r-15 p-t-50 p-b-120">
			<h3 class="l1-txt1 txt-center p-b-35 respon1">
				ÇOK YAKINDA
			</h3>

			<!-- <div class="flex-w flex-c cd100 respon2">
				<div class="flex-col-c wsize1 m-b-30">
					<span class="l1-txt2 p-b-37 days">35</span>
					<span class="m1-txt2 p-r-20">Gün</span>
				</div>

				<span class="l1-txt2 p-t-15 dis-none-sm">:</span>

				<div class="flex-col-c wsize1 m-b-30">
					<span class="l1-txt2 p-b-37 hours">17</span>
					<span class="m1-txt2 p-r-20">Saat</span>
				</div>

				<span class="l1-txt2 p-t-15 dis-none-lg">:</span>

				<div class="flex-col-c wsize1 m-b-30">
					<span class="l1-txt2 p-b-37 minutes">50</span>
					<span class="m1-txt2 p-r-20">dakika</span>
				</div>

				<span class="l1-txt2 p-t-15 dis-none-sm">:</span>

				<div class="flex-col-c wsize1 m-b-30">
					<span class="l1-txt2 p-b-37 seconds">39</span>
					<span class="m1-txt2 p-r-20">Saniye</span>
				</div>
			</div> -->
		</div>

		<!--  -->
		<div class="flex-w flex-c-m p-b-35">
		</div>
	</div>



	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/moment.min.js"></script>
	<script src="vendor/countdowntime/moment-timezone.min.js"></script>
	<script src="vendor/countdowntime/moment-timezone-with-data.min.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script>
		$('.cd100').countdown100({
			/*Set Endtime here*/
			/*Endtime must be > current time*/
			endtimeYear: 0,
			endtimeMonth: 0,
			endtimeDate: 35,
			endtimeHours: 19,
			endtimeMinutes: 0,
			endtimeSeconds: 0,
			timeZone: "" 
			// ex:  timeZone: "America/New_York"
			//go to " http://momentjs.com/timezone/ " to get timezone
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>

<?php }else{
	header("location:../anasayfa.php");

}?>