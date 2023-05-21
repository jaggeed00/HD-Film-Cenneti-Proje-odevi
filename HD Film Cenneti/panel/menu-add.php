<?php
/*################################*/
define ('guvenlik', true);
/*################################*/
include 'header.php';
/*################################*/
include 'page-header.php';
/*################################*/
?> 
<?php if($decoder["menuekleme"]=="on"){ ?>
            <div id="main-content">

                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>Menü Ekle</h3>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Anasayfa</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Menü Ekle
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
                                                    
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Menü Ad:</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" name="menu_ad" id="menu_ad">
                                                                <div class="form-control-icon">
                                                                    <i class="fa-solid fa-signature"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Menü Url:</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" name="menu_url" id="menu_url">
                                                                <div class="form-control-icon">
                                                                    <i class="fa-solid fa-file-code"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Menü Sıra:</label>
                                                            <div class="position-relative">
                                                                <input type="mail" class="form-control" name="menu_sira" id="menu_sira">
                                                                <div class="form-control-icon">
                                                                    <i class="fa-solid fa-arrow-up-z-a"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                    <label for="first-name-icon">Durum:</label>
                                                    <div class="form-group">
                                                            <select name="menu_durum" id="menu_durum" class="choices form-select">
                                                                <option value="Aktif">Aktif</option>
                                                                <option value="Pasif">Pasif</option>
                                                            </select>
                                                        </div>
                                                    </div>  
                                                    <div class="col-12 d-flex justify-content-end">

                                                    <?php if($decoder["menuislem"]=="on"){ ?>

                                                        <input type="hidden" name="menuadd">
                                                        <button type="submit" class="btn btn-info me-1 mb-1">Menü Ekle</button>
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
    




