<?php
/*################################*/
define ('guvenlik', true);
/*################################*/
include 'header.php';
/*################################*/
include 'page-header.php';
/*################################*/
?> 

            <div id="main-content">

                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>Profil Ayarların</h3>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Anasayfa</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Profil
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div><br>

                <section class="list-group-navigation">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-3">
                                                <div class="list-group" role="tablist">
                                                    <a class="list-group-item list-group-item-action active" id="list-profile-list" data-bs-toggle="list" 
                                                        href="#list-profile" role="tab">Profil Resmi Güncelle</a>

                                                    <a class="list-group-item list-group-item-action" id="list-nickname-list" data-bs-toggle="list"
                                                        href="#list-nickname" role="tab">Kullanıcı Adı Değiştir</a>

                                                    <a class="list-group-item list-group-item-action" id="list-personal-list" data-bs-toggle="list"
                                                        href="#list-personal" role="tab">Kişisel Bilgilerim</a>

                                                    <a class="list-group-item list-group-item-action" id="list-password-list" data-bs-toggle="list"
                                                        href="#list-password" role="tab">Şifremi Değiştir</a>

                                                    <a class="list-group-item list-group-item-action" id="list-permission-list" data-bs-toggle="list"
                                                        href="#list-permission" role="tab">İzinlerim</a>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-2 mt-1"></div>
                                            <div class="col-12 col-sm-12 col-md-5 mt-1">
                                                <div class="tab-content text-justify" id="nav-tabContent">
                                                    <div class="tab-pane show active" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                                                        <form method="POST" novalidate="" id="userpicture" enctype='multipart/form-data'>
                                                            <center>
                                                            <div class="col-12">
                                                                <img style="border:2px solid black; border-radius:80px; box-shadow:2px 2px gray;" src="<?php echo $usercek['emreylcz_profilresmi']; ?>" width="150px" height="150px" alt="<?php echo $usercek['emreylcz_kadi']; ?>">
                                                            </div><br>

                                                            <div class="mb-3">
                                                                <input class="form-control" name="emreylcz_profilresmi" type="file" id="emreylcz_profilresmi">
                                                            </div>

                                                            <div class="col-12 d-flex justify-content-end">
                                                                <input type="hidden" name="userpicture">
                                                                <button type="submit" class="btn btn-info me-1 mb-1">Güncelle</button>
                                                            </div>

                                                            </center>
                                                        </form>
                                                    </div>
                                                    <!-- ******************************************************************** -->
                                                    <div class="tab-pane" id="list-nickname" role="tabpanel" aria-labelledby="list-nickname-list">
                                                        <form method="POST">
                                                            
                                                                <div class="form-group has-icon-left">
                                                                    <label for="first-name-icon">Kullanıcı Adı:</label>
                                                                    <div class="position-relative">
                                                                        <input type="text" class="form-control" value="<?php echo $usercek['emreylcz_kadi']; ?>" name="emreylcz_kadi" id="emreylcz_kadi">
                                                                        <div class="form-control-icon">
                                                                            <i class="fa-solid fa-user"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 d-flex justify-content-end">
                                                                    <input type="hidden" name="usernickname">
                                                                    <button type="submit" class="btn btn-info me-1 mb-1">Güncelle</button>
                                                                </div>

                                                            </div>
                                                        </form>
                                                    <!-- ******************************************************************** -->
                                                    <div class="tab-pane" id="list-personal" role="tabpanel" aria-labelledby="list-personal-list">
                                                        <form method="POST">
                                                                
                                                                <div class="form-group has-icon-left">
                                                                    <label for="first-name-icon">Ad Soyad:</label>
                                                                    <div class="position-relative">
                                                                        <input type="text" class="form-control" value="<?php echo $usercek['emreylcz_adsoyad']; ?>" name="emreylcz_adsoyad" id="emreylcz_adsoyad">
                                                                        <div class="form-control-icon">
                                                                            <i class="fa-solid fa-id-card"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group has-icon-left">
                                                                    <label for="first-name-icon">Email:</label>
                                                                    <div class="position-relative">
                                                                        <input type="text" class="form-control"  value="<?php echo $usercek['emreylcz_mail']; ?>" name="emreylcz_mail" id="emreylcz_mail">
                                                                        <div class="form-control-icon">
                                                                            <i class="fa-solid fa-envelope"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <style>
                                                                    .disable input[type="text"]:disabled{
                                                                        background: #dddddd;
                                                                    }
                                                                </style>

                                                                <div class="form-group has-icon-left">
                                                                    <label for="first-name-icon">Hesap Oluşturma Tarihi:</label>
                                                                    <div class="position-relative disable">
                                                                        <input type="text" class="form-control" value="<?php echo tarihcevir($usercek['emreylcz_tarih']); ?>" disabled="disabled">
                                                                        <div class="form-control-icon">
                                                                            <i class="fa-solid fa-lock"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        

                                                                <div class="col-12 d-flex justify-content-end">
                                                                    <input type="hidden" name="userpersonal">
                                                                    <button type="submit" class="btn btn-info me-1 mb-1">Güncelle</button>
                                                                </div>

                                                            </div>
                                                        </form>
                                                    <!-- ******************************************************************** -->
                                                    <div class="tab-pane" id="list-password" role="tabpanel" aria-labelledby="list-password-list">
                                                    <form method="POST">
                                                    
                                                            <div class="alert alert-warning alert-dismissible show fade" style="color:black;">
                                                                <h5>
                                                                <i class="fa-solid fa-triangle-exclamation"></i>
                                                                    UYARI ! 
                                                                <i class="fa-solid fa-triangle-exclamation"></i>
                                                                </h5>
                                                                <b> Parola en az 1 Sayı, 1 Büyük Harf, 1 Küçük Harf ve en az 6 karakter içermelidir.</b>
                                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                            </div>
                                               

                                                            <div class="form-group has-icon-left">
                                                                <label for="first-name-icon">Eski Parola:</label>
                                                                <div class="position-relative">
                                                                    <input type="password" class="form-control" name="emreylcz_eskisifre" id="emreylcz_eskisifre" title="En az 1 Sayı, 1 Büyük Harf, 1 Küçük Harf ve en az 6 veya daha fazla karakter içermelidir." pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}">
                                                                    <div class="form-control-icon">
                                                                        <i class="fa-solid fa-lock"></i>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group has-icon-left">
                                                                <label for="first-name-icon">Parola:</label>
                                                                <div class="position-relative">
                                                                    <input type="password" class="form-control" name="emreylcz_sifre" id="emreylcz_sifre" title="En az 1 Sayı, 1 Büyük Harf, 1 Küçük Harf ve en az 6 veya daha fazla karakter içermelidir." pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}">
                                                                    <div class="form-control-icon">
                                                                        <i class="fa-solid fa-lock"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    
                                                            <div class="form-group has-icon-left">
                                                                <label for="first-name-icon">Tekrar Parola:</label>
                                                                <div class="position-relative">
                                                                    <input type="password" class="form-control" name="emreylcz_sifretekrar" id="emreylcz_sifretekrar" title="En az 1 Sayı, 1 Büyük Harf, 1 Küçük Harf ve en az 6 veya daha fazla karakter içermelidir." pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}">
                                                                    <div class="form-control-icon">
                                                                        <i class="fa-solid fa-lock"></i>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12 d-flex justify-content-end">
                                                                    <input type="hidden" name="userpassword">
                                                                    <button type="submit" class="btn btn-info me-1 mb-1">Güncelle</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="tab-pane" id="list-permission" role="tabpanel" aria-labelledby="list-permission-list">

                                                    <?php if($usercek['emreylcz_admin']=='Admin') { ?>
                                                    <form method="POST" enctype="multipart/form-data">

                                                            <ul class="list-unstyled mb-1">

                                                                <h6>Kullanıcılar:</h6>
                                                                <li class="d-inline-block me-2 mb-1">
                                                                    <div class="form-check">
                                                                        <div class="custom-control custom-checkbox">

                                                                            <input type="checkbox" class="form-check-input form-check-info form-check-glow" <?php if($decoder["kullaninicigoruntuleme"]=="on"){ ?>checked <?php } ?> name="emreylcz_perm[kullaninicigoruntuleme]" id="customColorCheck1">
                                                                            <label class="form-check-label" for="customColorCheck1">Görüntüleme</label>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="d-inline-block me-2 mb-1">
                                                                    <div class="form-check">
                                                                        <div class="custom-control custom-checkbox">

                                                                            <input type="checkbox" class="form-check-input form-check-info form-check-glow" <?php if($decoder["kullaniniciekle"]=="on"){ ?>checked <?php } ?> name="emreylcz_perm[kullaniniciekle]" id="customColorCheck2">
                                                                            <label class="form-check-label" for="customColorCheck2">Ekleme</label>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="d-inline-block me-2 mb-1">
                                                                    <div class="form-check">
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="form-check-input form-check-info form-check-glow" <?php if($decoder["kullaniniciislem"]=="on"){ ?>checked <?php } ?> name="emreylcz_perm[kullaniniciislem]" id="customColorCheck3">
                                                                            <label class="form-check-label" for="customColorCheck3">İşlem</label>
                                                                        </div>
                                                                    </div>
                                                                </li><hr>

                                                                <h6>Filmler:</h6>
                                                                <li class="d-inline-block me-2 mb-1">
                                                                    <div class="form-check">
                                                                        <div class="custom-control custom-checkbox">

                                                                            <input type="checkbox" class="form-check-input form-check-info form-check-glow" <?php if($decoder["filmgoruntulenme"]=="on"){ ?>checked <?php } ?> name="emreylcz_perm[filmgoruntulenme]" id="customColorCheck4">
                                                                            <label class="form-check-label" for="customColorCheck4">Görüntüleme</label>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="d-inline-block me-2 mb-1">
                                                                    <div class="form-check">
                                                                        <div class="custom-control custom-checkbox">

                                                                            <input type="checkbox" class="form-check-input form-check-info form-check-glow" <?php if($decoder["filmekle"]=="on"){ ?>checked <?php } ?> name="emreylcz_perm[filmekle]" id="customColorCheck5">
                                                                            <label class="form-check-label" for="customColorCheck5">Ekleme</label>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="d-inline-block me-2 mb-1">
                                                                    <div class="form-check">
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="form-check-input form-check-info form-check-glow" <?php if($decoder["filmislem"]=="on"){ ?>checked <?php } ?> name="emreylcz_perm[filmislem]" id="customColorCheck6">
                                                                            <label class="form-check-label" for="customColorCheck6">İşlem</label>
                                                                        </div>
                                                                    </div>
                                                                </li><hr>

                                                                <h6>Yorumlar:</h6>
                                                                <li class="d-inline-block me-2 mb-1">
                                                                    <div class="form-check">
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="form-check-input form-check-info form-check-glow" <?php if($decoder["yorumgoruntulenme"]=="on"){ ?>checked <?php } ?> name="emreylcz_perm[yorumgoruntulenme]" id="customColorCheck10">
                                                                            <label class="form-check-label" for="customColorCheck10">Görüntüleme</label>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="d-inline-block me-2 mb-1">
                                                                    <div class="form-check">
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="form-check-input form-check-info form-check-glow" <?php if($decoder["yorumislem"]=="on"){ ?>checked <?php } ?> name="emreylcz_perm[yorumislem]" id="customColorCheck11">
                                                                            <label class="form-check-label" for="customColorCheck11">İşlem</label>
                                                                        </div>
                                                                    </div>
                                                                </li><hr>

                                                                <h6>Anket:</h6>
                                                                <li class="d-inline-block me-2 mb-1">
                                                                    <div class="form-check">
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="form-check-input form-check-info form-check-glow" <?php if($decoder["anketgoruntulenme"]=="on"){ ?>checked <?php } ?> name="emreylcz_perm[anketgoruntulenme]" id="customColorCheck7">
                                                                            <label class="form-check-label" for="customColorCheck7">Görüntüleme</label>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="d-inline-block me-2 mb-1">
                                                                    <div class="form-check">
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="form-check-input form-check-info form-check-glow" <?php if($decoder["anketislem"]=="on"){ ?>checked <?php } ?> name="emreylcz_perm[anketislem]" id="customColorCheck9">
                                                                            <label class="form-check-label" for="customColorCheck9">İşlem</label>
                                                                        </div>
                                                                    </div>
                                                                </li><hr>

                                                                <h6>İletişim:</h6>
                                                                <li class="d-inline-block me-2 mb-1">
                                                                    <div class="form-check">
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="form-check-input form-check-info form-check-glow" <?php if($decoder["iletisimgoruntulenme"]=="on"){ ?>checked <?php } ?> name="emreylcz_perm[iletisimgoruntulenme]" id="customColorCheck12">
                                                                            <label class="form-check-label" for="customColorCheck12">Görüntüleme</label>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="d-inline-block me-2 mb-1">
                                                                    <div class="form-check">
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="form-check-input form-check-info form-check-glow" <?php if($decoder["iletisimislem"]=="on"){ ?>checked <?php } ?> name="emreylcz_perm[iletisimislem]" id="customColorCheck13">
                                                                            <label class="form-check-label" for="customColorCheck13">İşlem</label>
                                                                        </div>
                                                                    </div>
                                                                </li><hr>

                                                                <h6>Menüler:</h6>
                                                                <li class="d-inline-block me-2 mb-1">
                                                                    <div class="form-check">
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="form-check-input form-check-info form-check-glow" <?php if($decoder["menugoruntulenme"]=="on"){ ?>checked <?php } ?> name="emreylcz_perm[menugoruntulenme]" id="customColorCheck14">
                                                                            <label class="form-check-label" for="customColorCheck14">Görüntüleme</label>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="d-inline-block me-2 mb-1">
                                                                    <div class="form-check">
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="form-check-input form-check-info form-check-glow" <?php if($decoder["menuekleme"]=="on"){ ?>checked <?php } ?> name="emreylcz_perm[menuekleme]" id="customColorCheck15">
                                                                            <label class="form-check-label" for="customColorCheck15">Ekleme</label>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="d-inline-block me-2 mb-1">
                                                                    <div class="form-check">
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="form-check-input form-check-info form-check-glow" <?php if($decoder["menuislem"]=="on"){ ?>checked <?php } ?> name="emreylcz_perm[menuislem]" id="customColorCheck16">
                                                                            <label class="form-check-label" for="customColorCheck16">İşlem</label>
                                                                        </div>
                                                                    </div>
                                                                </li><hr>

                                                                <h6>Ayarlar:</h6>
                                                                <li class="d-inline-block me-2 mb-1">
                                                                    <div class="form-check">
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="form-check-input form-check-info form-check-glow" <?php if($decoder["ayarlargoruntulenme"]=="on"){ ?>checked <?php } ?> name="emreylcz_perm[ayarlargoruntulenme]" id="customColorCheck17">
                                                                            <label class="form-check-label" for="customColorCheck17">Görüntüleme</label>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="d-inline-block me-2 mb-1">
                                                                    <div class="form-check">
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="form-check-input form-check-info form-check-glow" <?php if($decoder["ayarlarislem"]=="on"){ ?>checked <?php } ?> name="emreylcz_perm[ayarlarislem]" id="customColorCheck18">
                                                                            <label class="form-check-label" for="customColorCheck18">İşlem</label>
                                                                        </div>
                                                                    </div>
                                                                </li><hr>
                                                            </ul>
                                                        
                                                            <div class="col-12 d-flex justify-content-end">
                                                                <input type="hidden" name="userpermission">
                                                                <button type="submit" class="btn btn-info me-1 mb-1">Güncelle</button>
                                                            </div>
                                                        </form>
                                                        <?php }else{?>
                                                                <CENTER>
                                                                <div class="col-12 col-md-12">
                                                                    <div id="main-content">
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <div class="alert alert-danger">
                                                                                    <h4 class="alert-heading">Yeterli Yetkin Yok!</h4>
                                                                                 
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </CENTER>
                                                        <?php } ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

<?php
/*################################*/
require 'footer.php';
/*################################*/
?> 





