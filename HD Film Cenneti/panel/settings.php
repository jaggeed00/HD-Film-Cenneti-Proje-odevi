<?php
/*################################*/
define ('guvenlik', true);
/*################################*/
include 'header.php';
/*################################*/
include 'page-header.php';
/*################################*/
?> 
<?php if($decoder["ayarlargoruntulenme"]=="on"){ ?>
            <div id="main-content">

                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3><span class="badge rounded-pill bg-warning text-dark"><i class="fa-solid fa-cog fa-spin"></i>&#160;<?php echo $settingcek['settings_sayfaismi']; ?></span> Web Site Ayarları</h3>
                                <p class="text-subtitle text-muted"></p>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Anasayfa</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Web Site Ayarları
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div><br>

                <section id="basic-vertical-layouts">
                    <div class="row match-height">


 <!-- ######################################################################################################################################## -->

                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form form-vertical" method="POST" novalidate="" enctype='multipart/form-data'>
                                        <div class="form-body">
                                            <div class="row">

                                                    <h3>Logo</h3>
                                                    <hr>
                                                    <!-- ****************************************** -->
                                                    <center>
                                                    <div class="col-12">
                                                        <img style="border:2px solid black; border-radius:80px; box-shadow:2px 2px gray;" src="<?php echo $settingcek ['settings_logo']; ?>" width="150px" height="150px">
                                                    </div> 
                                                   
                                                    <br>

                                                    <div class="col-10 mb-3">
                                                        <input type="file" class="form-control" name="settings_logo" id="settings_logo">
                                                    </div>
                                                    </center>
                                                    
                                                    <!-- ****************************************** -->
                                                    <div class="col-12 d-flex justify-content-end">
                                                    <?php if($decoder["ayarlarislem"]=="on"){ ?>

                                                        <input type="hidden" name="settingslogo">
                                                        <button type="submit" class="btn btn-info me-1 mb-2">Kaydet</button>

                                                    <?php }else{ ?>
                                                        <button type="button" class="btn btn-danger me-1 mb-1">Güncelleme İznin Yok</button>
                                                   <?php } ?>

                                                    </div>
                                                    <!-- ****************************************** -->
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form form-vertical" method="POST" novalidate="" enctype='multipart/form-data'>
                                        <div class="form-body">
                                            <div class="row">

                                                    <h3>Favicon | Title Logo</h3>
                                                    <hr>
                                                    <!-- ****************************************** -->
                                                    
                                                    <center>
                                                    <div class="col-12">
                                                        <img style="border:2px solid black; border-radius:80px; box-shadow:2px 2px gray;" src="<?php echo $settingcek ['settings_favicon']; ?>" width="150px" height="150px">
                                                    </div> 
                                                   
                                                    <br>

                                                    <div class="col-10 mb-3">
                                                        <input type="file" class="form-control" name="settings_favicon" id="settings_favicon">
                                                    </div>
                                                    </center>
                                                    
                                                    <!-- ****************************************** -->
                                                    <div class="col-12 d-flex justify-content-end">
                                                    <?php if($decoder["ayarlarislem"]=="on"){ ?>

                                                        <input type="hidden" name="settingsfavicon">
                                                        <button type="submit" class="btn btn-info me-1 mb-2">Kaydet</button>

                                                    <?php }else{ ?>
                                                        <button type="button" class="btn btn-danger me-1 mb-1">Güncelleme İznin Yok</button>
                                                   <?php } ?>

                                                    </div>
                                                    <!-- ****************************************** -->
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                        
 <!-- ######################################################################################################################################## -->

                    <div class="col-md-4 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form form-vertical" method="POST" id="setttingsupdate" novalidate="" enctype='multipart/form-data'>
                                        <div class="form-body">
                                            <div class="row">


                                                    <h3>Durumlar</h3>
                                                    <hr>
                                                    <!-- ****************************************** -->
                                                    <div class="col-md-6 col-12">
                                                       <label for="first-name-icon">TREND FİLMLER</label>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" <?php if($decoder3["trendfilmler"]=="on"){ ?>checked <?php } ?> name="settings_status[trendfilmler]">
                                                        </div>
                                                    </div>   

                                                    <div class="col-md-6 col-12">
                                                       <label for="first-name-icon">EN İYİLER</label>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" <?php if($decoder3["eniyiler"]=="on"){ ?>checked <?php } ?> name="settings_status[eniyiler]">
                                                        </div>
                                                    </div>
                                                    

                                                    <div class="col-md-6 col-12">
                                                       <label for="first-name-icon"> YERLİ FİLMLER</label>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" <?php if($decoder3["yerlifilmler"]=="on"){ ?>checked <?php } ?> name="settings_status[yerlifilmler]">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-12">
                                                       <label for="first-name-icon">IMDB 7+</label>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" <?php if($decoder3["imdb7"]=="on"){ ?>checked <?php } ?> name="settings_status[imdb7]">
                                                        </div>
                                                    </div> 

                                                    <div class="col-md-12 col-12">
                                                       <label for="first-name-icon">EN YENİ FİLMLER</label>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" <?php if($decoder3["enyenifilmler"]=="on"){ ?>checked <?php } ?> name="settings_status[enyenifilmler]">
                                                        </div>
                                                    </div>
                                                    <pre></pre>
                                                    <div class="col-md-6 col-12">
                                                       <label for="first-name-icon">KAYIT OL</label>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" <?php if($decoder3["kayitol"]=="on"){ ?>checked <?php } ?> name="settings_status[kayitol]">
                                                        </div>
                                                    </div> 
                                                    
                                                    <div class="col-md-6 col-12">
                                                       <label for="first-name-icon">BAKIM MODU</label>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" <?php if($decoder3["bakimmodu"]=="on"){ ?>checked <?php } ?> name="settings_status[bakimmodu]">
                                                        </div>
                                                    </div>
                                                    <!-- ****************************************** -->
                                                    <div class="col-12 d-flex justify-content-end">
                                                    <?php if($decoder["ayarlarislem"]=="on"){ ?>

                                                        <input type="hidden" name="settingsstatus">
                                                        <button type="submit" class="btn btn-info me-1 mb-2">Kaydet</button>

                                                    <?php }else{ ?>
                                                        <button type="button" class="btn btn-danger me-1 mb-1">Güncelleme İznin Yok</button>
                                                   <?php } ?>

                                                    </div>
                                                    <!-- ****************************************** -->
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form form-vertical" method="POST" novalidate="" enctype='multipart/form-data'>
                                        <div class="form-body">
                                            <div class="row">

                                                    <h3>Site Başlıkları | Title</h3>
                                                    <hr>
                                                    <!-- ****************************************** -->
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-column">Web Site İsmi</label>
                                                            <input type="text" id="first-name-column" class="form-control" name="settings_sayfaismi" id="settings_sayfaismi" value="<?php echo $settingcek ['settings_sayfaismi']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-column">Anasayfa | Site Başlığı (Title)</label>
                                                            <input type="text" id="first-name-column" class="form-control" name="settings_title1" id="settings_title1" value="<?php echo $settingcek ['settings_title1']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-column">Kategoriler | Site Başlığı (Title)</label>
                                                            <input type="text" id="first-name-column" class="form-control" name="settings_title2" id="settings_title2" value="<?php echo $settingcek ['settings_title2']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-column">Blog | Site Başlığı (Title)</label>
                                                            <input type="text" id="first-name-column" class="form-control" name="settings_title3" id="settings_title3" value="<?php echo $settingcek ['settings_title3']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-column">İletişim | Site Başlığı (Title)</label>
                                                            <input type="text" id="first-name-column" class="form-control" name="settings_title4" id="settings_title4" value="<?php echo $settingcek ['settings_title4']; ?>">
                                                        </div>
                                                    </div>      
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-column">Bakım Modu | Site Başlığı (Title)</label>
                                                            <input type="text" id="first-name-column" class="form-control" name="settings_title5" id="settings_title5" value="<?php echo $settingcek ['settings_title5']; ?>">
                                                        </div>
                                                    </div>                                             
                                                    <!-- ****************************************** -->
                                                    <div class="col-12 d-flex justify-content-end">
                                                    <?php if($decoder["ayarlarislem"]=="on"){ ?>

                                                        <input type="hidden" name="settingstitle">
                                                        <button type="submit" class="btn btn-info me-1 mb-1">Kaydet</button>

                                                    <?php }else{ ?>
                                                        <button type="button" class="btn btn-danger me-1 mb-1">Güncelleme İznin Yok</button>
                                                   <?php } ?>

                                                    </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


<!-- ######################################################################################################################################## -->    
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form form-vertical" method="POST" novalidate="" enctype='multipart/form-data'>
                                        <div class="form-body">
                                            <div class="row">

                                                    <h3>İletişim Ayarları</h3>
                                                    <hr>
                                                    <!-- ****************************************** -->
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-column">Adres</label>
                                                            <input type="text" id="first-name-column" class="form-control" name="settings_adres" id="settings_adres" value="<?php echo $settingcek ['settings_adres']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-column">Telefon</label>
                                                            <input type="text" id="first-name-column" class="form-control" name="settings_telefon" id="settings_telefon" value="<?php echo $settingcek ['settings_telefon']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-column">E-posta</label>
                                                            <input type="text" id="first-name-column" class="form-control" name="settings_eposta" id="settings_eposta" value="<?php echo $settingcek ['settings_eposta']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-column">Google Maps | iframe src</label>
                                                            <input type="text" id="first-name-column" class="form-control" name="settings_maps" id="settings_maps" value="<?php echo $settingcek ['settings_maps']; ?>">
                                                        </div>
                                                    </div>
                                                    <!-- ****************************************** -->
                                                    <div class="col-12 d-flex justify-content-end">
                                                    <?php if($decoder["ayarlarislem"]=="on"){ ?>

                                                        <input type="hidden" name="settingscontact">
                                                        <button type="submit" class="btn btn-info me-1 mb-1">Kaydet</button>

                                                    <?php }else{ ?>
                                                        <button type="button" class="btn btn-danger me-1 mb-1">Güncelleme İznin Yok</button>
                                                   <?php } ?>

                                                    </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form form-vertical" method="POST" id="setttingsupdate" novalidate="" enctype='multipart/form-data'>
                                        <div class="form-body">
                                            <div class="row">

                                                    <h3>Alt Bilgi | Footer</h3>
                                                    <hr>
                                                    <!-- ****************************************** -->
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-column">AltBilgi (WebSite)</label>
                                                            <input type="text" id="first-name-column" class="form-control" name="settings_footer1a" id="settings_footer1a" value="<?php echo $settingcek ['settings_footer1a']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-column">AltBilgi | Design by (WebSite)</label>
                                                            <input type="text" id="first-name-column" class="form-control" name="settings_footer1b" id="settings_footer1b" value="<?php echo $settingcek ['settings_footer1b']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-column">AltBilgi (Admin Panel)</label>
                                                            <input type="text" id="first-name-column" class="form-control" name="settings_footer2a" id="settings_footer2a" value="<?php echo $settingcek ['settings_footer2a']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-column">AltBilgi | Design by (Admin Panel)</label>
                                                            <input type="text" id="first-name-column" class="form-control" name="settings_footer2b" id="settings_footer2b" value="<?php echo $settingcek ['settings_footer2b']; ?>">
                                                        </div>
                                                    </div>
                                                    <!-- ****************************************** -->
                                                    <div class="col-12 d-flex justify-content-end">
                                                    <?php if($decoder["ayarlarislem"]=="on"){ ?>

                                                        <input type="hidden" name="setttingsfooter">
                                                        <button type="submit" class="btn btn-info me-1 mb-1">Kaydet</button>

                                                    <?php }else{ ?>
                                                        <button type="button" class="btn btn-danger me-1 mb-1">Güncelleme İznin Yok</button>
                                                   <?php } ?>

                                                    </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
<!-- ######################################################################################################################################## -->         
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




