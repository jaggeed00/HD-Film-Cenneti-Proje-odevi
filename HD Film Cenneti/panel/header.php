<?php echo !defined ('guvenlik') ? die ('Yavrum şen hackermi olmaya çalışıyon hee') : null; 
/*################################*/
include '../db/connect.php';
/*################################*/
include '../db/process.php';
/*################################*/
/*************************************************************************************************/
date_default_timezone_set('Europe/Istanbul');
/*************************************************************************************************/
$usersor=$db->prepare("select * from users where emreylcz_id=:emreylcz_id");
$usersor->execute(array(
  ':emreylcz_id' => $_SESSION['userid']

));
$usercek=$usersor->fetch(PDO::FETCH_ASSOC);
/*************************************************************************************************/
$settingsor=$db->prepare("select * from settings");
$settingsor->execute();
$settingcek=$settingsor->fetch(PDO::FETCH_ASSOC);
/*************************************************************************************************/
if(!isset($_SESSION['emreylcz_kadi'])) {

	header('Location:login?login=giris-yapılmadı');
}
/*************************************************************************************************/
$summoviesor=$db->prepare("select * from movie");
$summoviesor->execute();
$summoviesay=$summoviesor->rowCount();
/*************************************************************************************************/
$summovieyerlisor=$db->prepare("select * from movie where  movie_kategori='Yerli Filmler'");
$summovieyerlisor->execute();
$summovieyerlisay=$summovieyerlisor->rowCount();
/*************************************************************************************************/
$summovietrendsor=$db->prepare("select * from movie where  movie_kategori='Trend Filmler'");
$summovietrendsor->execute();
$summovietrendsay=$summovietrendsor->rowCount();
/*************************************************************************************************/
$summovieeniyisor=$db->prepare("select * from movie where  movie_kategori='En İyi Filmler'");
$summovieeniyisor->execute();
$summovieeniyisay=$summovieeniyisor->rowCount();
/*************************************************************************************************/
$summovieimdb7sor=$db->prepare("select * from movie where  movie_kategori='IMDB 7+'");
$summovieimdb7sor->execute();
$summovieimdb7say=$summovieimdb7sor->rowCount();
/*************************************************************************************************/
$summovieenyenisor=$db->prepare("select * from movie where  movie_kategori='En Yeni Filmler'");
$summovieenyenisor->execute();
$summovieenyenisay=$summovieenyenisor->rowCount();
/*************************************************************************************************/
$ticketsor=$db->prepare("select * from contact");
$ticketsor->execute();
$ticketsay=$ticketsor->rowCount();
/*************************************************************************************************/
$commentsor=$db->prepare("select * from comment");
$commentsor->execute();
$commentsay=$commentsor->rowCount();
/*************************************************************************************************/
$anketsor=$db->prepare("select * from anket");
$anketsor->execute();
$anketsay=$anketsor->rowCount();
/*************************************************************************************************/
/*#############################################################################*/
$decoder = json_decode($usercek["emreylcz_perm"], true);
/*#############################################################################*/
$decoder2 = json_decode($usersviewcek["emreylcz_perm"], true);
/*#############################################################################*/
$decoder3 = json_decode($settingcek["settings_status"], true);
/*#############################################################################*/

function tarihcevir($tarih)
{
  $yil=substr($tarih,0,4);
  $ay=substr($tarih,5,2);
  $gun=substr($tarih,8,2);
  $saat=substr($tarih,10,4);
  $dakika=substr($tarih,14,2);

  $gunler = array(
    'Pazartesi',
    'Salı',
    'Çarşamba',
    'Perşembe',
    'Cuma',
    'Cumartesi',
    'Pazar'
  );
  $aylar = array(
    'Ocak',
    'Şubat',
    'Mart',
    'Nisan',
    'Mayıs',
    'Haziran',
    'Temmuz',
    'Ağustos',
    'Eylül',
    'Ekim',
    'Kasım',
    'Aralık'
  );
  $ay = $aylar[$ay - 1];
  $gunyazili = $gunler[date('N') - 1];
  return "$gun $ay $yil / $saat$dakika";
}
/*************************************************************************************************/
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $settingcek ['settings_sayfaismi']; ?> Admin Panel</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    
    <link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">
    <!-- Include Choices CSS -->
    <link rel="stylesheet" href="assets/vendors/choices.js/choices.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">
    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
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
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.php" style="font-size:25px;"><img src="../ProjeOdevi/<?php echo $settingcek ['settings_logo']; ?>" width="25px" height="100%" style="margin-top: -5px;"><?php echo $settingcek ['settings_sayfaismi']; ?></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">

                        <li class="sidebar-item">
                            <a href="../anasayfa.php" class='sidebar-link'>
                                <i class="fa fa-mail-reply"></i>
                                <span>Siteye Git</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="index.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Anasayfa</span>
                            </a>
                        </li>

                        <li class="sidebar-title" style="font-size:17px; font-weight:bold;">Admin Paneli</li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Kullanıcılar</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="users-add.php">Kullanıcı Ekle</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="users.php">Kullanıcı Listesi</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Filmler</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="movie-add.php">Film Ekle</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="movie.php">Film Listesi</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item">
                            <a href="comments.php" class='sidebar-link'>
                                <i class="fa-solid fa-bars"></i>
                                <span>Yorumlar</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="anket.php" class='sidebar-link'>
                                <i class="fa-solid fa-bars"></i>
                                <span>Anket</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="ticket.php" class='sidebar-link'>
                                <i class="fa-solid fa-bars"></i>
                                <span>İletişim</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="menu.php" class='sidebar-link'>
                                <i class="fa-solid fa-bars"></i>
                                <span>Menüler</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="settings.php" class='sidebar-link'>
                                <i class="fa-solid fa-bars"></i>
                                <span>Web Site Ayarları</span>
                            </a>
                        </li>

                        <li class="sidebar-title" style="font-size:17px; font-weight:bold;">Kullanıcı Paneli</li>

                        
                        <li class="sidebar-item">
                            <a href="profile.php" class='sidebar-link'>
                                <i class="fa-solid fa-user"></i>
                                <span>Kullanıcı Ayarlarım</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="../db/process.php?userlogout=Ok" class='sidebar-link'>
                                <i class="fa-solid fa-person-walking-arrow-right"></i>
                                <span>Çıkış Yap</span>
                            </a>
                        </li>


                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>