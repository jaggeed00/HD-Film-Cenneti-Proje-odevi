<?php
ob_start();
session_start(); 
/*################################*/
define ('guvenlik', true);
/*################################*/
include 'header.php';
/*################################*/
?> 
 <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>WebSite İstatistikleri</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-9 col-xs-12">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-xs-12">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                     <i class="fa-solid fa-inbox"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-xs-12">
                                                <h6 class="text-muted font-semibold">Filmler Sayısı</h6>
                                                <h6 class="font-extrabold mb-0"><?php echo $summoviesay; ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                    <i class="fa-solid fa-film"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Trend Filmler Sayısı</h6>
                                                <h6 class="font-extrabold mb-0"><?php echo $summovietrendsay; ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
                                                <i class="fa-solid fa-bolt"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">En İyi Filmler Sayısı</h6>
                                                <h6 class="font-extrabold mb-0"><?php echo $summovieeniyisay; ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
                                                     <i class="fa-solid fa-location-arrow"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Yerli Filmler Sayısı</h6>
                                                <h6 class="font-extrabold mb-0"><?php echo $summovieyerlisay; ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon blue">
                                                    <i class="fa-solid fa-cubes"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">IMDB 7+ Filmler Sayısı</h6>
                                                <h6 class="font-extrabold mb-0"><?php echo $summovieimdb7say; ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                    <i class="iconly-boldShow"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">En Yeni Filmler Sayısı</h6>
                                                <h6 class="font-extrabold mb-0"><?php echo $summovieenyenisay; ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                    <i class="fa-regular fa-envelope"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Ticket Sayısı</h6>
                                                <h6 class="font-extrabold mb-0"><?php echo $ticketsay; ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                    <i class="fa-solid fa-square-poll-vertical"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Anket Sayısı</h6>
                                                <h6 class="font-extrabold mb-0"><?php echo $anketsay; ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon blue">
                                                    <i class="fa-regular fa-comments"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Yorum Sayısı</h6>
                                                <h6 class="font-extrabold mb-0"><?php echo $commentsay; ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Son Yorumlar</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-lg">
                                                <thead>
                                                    <tr>
                                                        <th>AdSoyad</th>
                                                        <th>Yorum</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $commentsor=$db->prepare("select * from comment order by comment_id DESC LIMIT 5");
                                                $commentcek=$commentsor->fetch(PDO::FETCH_ASSOC);
                                                $commentsor->execute();

		                                        foreach($commentsor as $commentcek) { ?>
                                                    <tr>
                                                        <td class="col-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-md">
                                                                    <img src="<?php echo $commentcek['comment_profilresmi'];?>">
                                                                </div>
                                                                <p class="font-bold ms-3 mb-0"><?php echo $commentcek['comment_adsoyad']; ?></p>
                                                            </div>
                                                        </td>
                                                        <td class="col-auto">
                                                            <p class=" mb-0"><?php echo $commentcek['comment_yorum']; ?></p>
                                                        </td>
                                                    </tr>

                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card">
                            <div class="card-body py-4 px-5">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl">
                                        <img src="<?php echo $usercek['emreylcz_profilresmi'];?>" alt="<?php echo $usercek['emreylcz_adsoyad'];?> Profil Resmi">
                                    </div>
                                    <div class="ms-3 name">
                                        <h5 class="font-bold"><?php echo $usercek['emreylcz_adsoyad'];?></h5>
                                        <h6 class="text-muted mb-0">@<?php echo $usercek['emreylcz_kadi'];?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>Son Üyeler</h4>
                            </div>
                            <div class="card-content pb-4">


                            <?php 
						        $usersor=$db->prepare("select * from users order by emreylcz_id DESC LIMIT 5");
						        $usersor->execute();

						        while($usercek=$usersor->fetch(PDO::FETCH_ASSOC)){ ?>

                                <div class="recent-message d-flex px-4 py-3">
                                    <div class="avatar avatar-lg">
                                        <img src="<?php echo $usercek['emreylcz_profilresmi'];?>">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1"><?php echo $usercek['emreylcz_adsoyad']; ?></h5>
                                        <h6 class="text-muted mb-0">@<?php echo $usercek['emreylcz_kadi']; ?></h6>
                                    </div>
                                </div>

                                <?php } ?>

                                <div class="px-4">
                                    <button class='btn btn-block btn-xl btn-light-primary font-bold mt-3'>Tümünü Gör</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

<?php 
/*################################*/
include 'footer.php';
/*################################*/
?>