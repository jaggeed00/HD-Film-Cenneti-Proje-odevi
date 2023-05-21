<?php
/*################################*/
define ('guvenlik', true);
/*################################*/
include 'header.php';
/*################################*/
include 'page-header.php';
/*################################*/
?> 
<?php if($decoder["kullaniniciekle"]=="on"){ ?>
            <div id="main-content">

                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>Kullanıcı Ekle</h3>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Anasayfa</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Kullanıcı Ekle
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div><br>

                <section id="basic-vertical-layouts">
                    <div class="row match-height">

                    <div class="col-md-4 col-12"></div>

                        <div class="col-md-4 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-vertical" method="POST" novalidate="" enctype='multipart/form-data'>
                                            <div class="form-body">
                                                <div class="row">
                                                    
                                                    <div class="alert alert-warning alert-dismissible show fade" style="color:black;">
                                                                <h5>
                                                                <i class="fa-solid fa-triangle-exclamation"></i>
                                                                    UYARI ! 
                                                                <i class="fa-solid fa-triangle-exclamation"></i>
                                                                </h5>
                                                                <b style="font-size:14px"> Parola en az <font color="darkred">1 Sayı</font>, <font color="darkred">1 Büyük Harf</font>, <font color="darkred">1 Küçük Harf</font> ve en az <font color="darkred">6 karakter</font> içermelidir.</b>
                                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Kullanıcı Adı:</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" name="emreylcz_kadi" id="emreylcz_kadi">
                                                                <div class="form-control-icon">
                                                                    <i class="fa-solid fa-user"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Ad Soyad:</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" name="emreylcz_adsoyad" id="emreylcz_adsoyad">
                                                                <div class="form-control-icon">
                                                                    <i class="fa-solid fa-id-card"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">E-posta:</label>
                                                            <div class="position-relative">
                                                                <input type="mail" class="form-control" name="emreylcz_mail" id="emreylcz_mail">
                                                                <div class="form-control-icon">
                                                                    <i class="fa-solid fa-envelope"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Parola:</label>
                                                            <div class="position-relative">
                                                                <input type="password" class="form-control" name="emreylcz_sifre" id="emreylcz_sifre" title="En az 1 Sayı, 1 Büyük Harf, 1 Küçük Harf ve en az 6 veya daha fazla karakter içermelidir." required="required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}">
                                                                <div class="form-control-icon">
                                                                    <i class="fa-solid fa-lock"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Tekrar Parola:</label>
                                                            <div class="position-relative">
                                                                <input type="password" class="form-control" name="emreylcz_sifretekrar" id="emreylcz_sifretekrar" title="En az 1 Sayı, 1 Büyük Harf, 1 Küçük Harf ve en az 6 veya daha fazla karakter içermelidir." required="required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}">
                                                                <div class="form-control-icon">
                                                                    <i class="fa-solid fa-lock"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                    <label for="first-name-icon">Yetki:</label>
                                                    <div class="form-group">
                                                            <select name="emreylcz_admin" id="emreylcz_admin" class="choices form-select">
                                                                <option value="User">User</option>
                                                                <option value="Admin">Admin</option>
                                                            </select>
                                                        </div>
                                                    </div>  
                                                    <div class="col-12 d-flex justify-content-end">

                                                    <?php if($decoder["kullaniniciislem"]=="on"){ ?>

                                                        <input type="hidden" name="useradd">
                                                        <button type="submit" class="btn btn-info me-1 mb-1">Kullanıcı Ekle</button>
                                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Temizle</button>

                                                    <?php }else{ ?>
                                                        <button type="button" class="btn btn-danger me-1 mb-1">İznin Yok</button>
                                                    <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12"></div>
                    </div>
                </section>

<?php
/*################################*/
include 'footer.php';
/*################################*/
}else{ ?>

    <CENTER>
        <div class="col-12 col-md-6">
            <div id="main-content">
                <div class="card">
                    <div class="card-body">
                        <div class="alert alert-danger">
                            <h4 class="alert-heading">Görüntüleme İznin Yok!</h4>
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </CENTER>
<?php 
    /*################################*/
    include 'footer-nopermission.php';
    /*################################*/
} 

?> 
    




