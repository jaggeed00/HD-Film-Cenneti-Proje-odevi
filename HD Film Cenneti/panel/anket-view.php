<?php
/*################################*/
define ('guvenlik', true);
/*################################*/
include 'header.php';
/*################################*/
include 'page-header.php';
/*################################*/
?> 
<?php if($decoder["anketgoruntulenme"]=="on"){ 

$anketviewsor=$db->prepare("SELECT * from anket where anket_id=:anket_id");
$anketviewsor->execute(array(
  'anket_id' => $_GET['id']
));
$anketviewcek=$anketviewsor->fetch(PDO::FETCH_ASSOC);
?>   
            <div id="main-content">

                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3><span class="badge rounded-pill bg-warning text-dark"><i class="fa-solid fa-user"></i>&#160;<?php echo $anketviewcek['anket_soru1']; ?></span> Adlı Kişinin Anket Formu</h3>
                                <p class="text-subtitle text-muted"></p>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Anasayfa</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Anket Görüntüleme
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div><br>

                <section id="basic-vertical-layouts">
                    <div class="row match-height">

                    <div class="col-md-4"></div>
                    <div class="col-md-4 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form method="POST">
                                            <div class="form-body">
                                                <div class="row">

                                                    <input type="hidden" name="anket_id" value="<?php echo $anketviewcek ['anket_id']; ?>">

                                                    <!-- ****************************************** -->
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">İnceleyen</label>
                                                            <div class="position-relative">
                                                            <input type="text" class="form-control" disabled="" value="<?php echo $anketviewcek['anket_inceleyen']; ?>"> <!-- kullanıcıyı listeliyor-->
                                                            <input type="text" class="form-control" hidden="" name="anket_inceleyen" id="anket_inceleyen" value="<?php echo $usercek['emreylcz_kadi']; ?>"> <!-- Kullanıcıyı kaydetiyor -->
                                                                <div class="form-control-icon">
                                                                    <i class="fa-solid fa-user"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- ****************************************** -->
                                                    <div class="col-12">
                                                    <label for="first-name-icon">Durum</label>
                                                        <div class="form-group">
                                                            <select name="anket_durum" id="anket_durum" class="choices form-select">
                                                                    <option value="<?php echo $anketviewcek['anket_durum']; ?>"><?php echo $anketviewcek['anket_durum']; ?> (Seçilen)</option>
                                                                    <option disabled="">--------------------------</option>
                                                                    <option value="İncelendi">İncelendi</option>
                                                                    <option value="Görüntülenmedi">Görüntülenmedi</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- ****************************************** -->
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Anket Gönderim Tarihi</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" disabled="disabled" name="anket_tarih" id="anket_tarih" value="<?php echo tarihcevir($anketviewcek ['anket_tarih']); ?>">
                                                                <div class="form-control-icon">
                                                                    <i class="fa-solid fa-calendar-days"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- ****************************************** -->
                                                    <div class="col-12 d-flex justify-content-end">
                                                    <?php if($decoder["anketislem"]=="on"){ ?>

                                                        <input type="hidden" name="anketviewupdate">
                                                        <button type="submit" class="btn btn-info me-1 mb-1">Kaydet</button>

                                                    <?php }else{ ?>
                                                        <button type="button" class="btn btn-danger me-1 mb-1">Kaydetme İznin Yok</button>
                                                   <?php } ?>

                                                    </div>

                                   


                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"></div>
                        

                          <center><h1>SORULAR</h1></center>                              




                    <div class="col-md-1 col-12"></div>

                        <div class="col-md-5 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form>
                                            <div class="form-body">
                                                <div class="row">


                                                    <!-- ****************************************** -->
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Kullanıcı Adı</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" disabled="disabled" name="anket_soru1" id="anket_soru1" value="<?php echo $anketviewcek ['anket_soru1']; ?>">
                                                                <div class="form-control-icon">
                                                                    <i class="fa-solid fa-list"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- ****************************************** -->
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Sitemizdeki Kategorilerden En Çok Hangisini Beğendiniz?</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" disabled="disabled" name="anket_soru2" id="anket_soru2" value="<?php echo $anketviewcek ['anket_soru2']; ?>">
                                                                <div class="form-control-icon">
                                                                    <i class="fa-solid fa-list"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- ****************************************** -->
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Hangi Tür Filmleri Seviyorsun?</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" disabled="disabled" name="anket_soru2" id="anket_soru3" value="<?php echo $anketviewcek ['anket_soru3']; ?>">
                                                                <div class="form-control-icon">
                                                                    <i class="fa-solid fa-list"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- ****************************************** -->
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Trend Filmlerdeki Filmlerin Hangilerini İzlediniz?</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" disabled="disabled" name="anket_soru4" id="anket_soru4" value="<?php echo $anketviewcek ['anket_soru4']; ?>">
                                                                <div class="form-control-icon">
                                                                    <i class="fa-solid fa-list"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- ****************************************** -->
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Filmi En Çok Nereden İzlemeyi Seviyorsunuz?</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" disabled="disabled" name="anket_soru5" id="anket_soru5" value="<?php echo $anketviewcek ['anket_soru5']; ?>">
                                                                <div class="form-control-icon">
                                                                    <i class="fa-solid fa-list"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- ****************************************** -->
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Film izlerken sizin için hangisi en önemlidir?</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" disabled="disabled" name="anket_soru6" id="anket_soru6" value="<?php echo $anketviewcek ['anket_soru6']; ?>">
                                                                <div class="form-control-icon">
                                                                    <i class="fa-solid fa-list"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- ****************************************** -->
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Filmi Nasıl İzlemeyi Seversiniz?</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" disabled="disabled" name="anket_soru7" id="anket_soru7" value="<?php echo $anketviewcek ['anket_soru7']; ?>">
                                                                <div class="form-control-icon">
                                                                    <i class="fa-solid fa-list"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- ****************************************** -->
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Sitemizdeki Filmlerin Açıklama Kısmını Yeterli Buluyormusunuz?</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" disabled="disabled" name="anket_soru8" id="anket_soru8" value="<?php echo $anketviewcek ['anket_soru8']; ?>">
                                                                <div class="form-control-icon">
                                                                    <i class="fa-solid fa-list"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- ****************************************** -->


                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-md-5 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form>
                                            <div class="form-body">
                                                <div class="row">


                                                    <!-- ****************************************** -->
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Filmi İzlemeden Önce İMDB Puanına bakıyormusunuz?</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" disabled="disabled" name="anket_soru9" id="anket_soru9" value="<?php echo $anketviewcek ['anket_soru9']; ?>">
                                                                <div class="form-control-icon">
                                                                    <i class="fa-solid fa-list"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- ****************************************** -->
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">İletişim Sayfamızdaki Bize Ulaşın Formunu Beğendiniz mi?</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" disabled="disabled" name="anket_soru10" id="anket_soru10" value="<?php echo $anketviewcek ['anket_soru10']; ?>">
                                                                <div class="form-control-icon">
                                                                    <i class="fa-solid fa-list"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- ****************************************** -->
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Sitemize Eklememizi İstediğiniz Kategori Hangisi?</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" disabled="disabled" name="anket_soru11" id="anket_soru11" value="<?php echo $anketviewcek ['anket_soru11']; ?>">
                                                                <div class="form-control-icon">
                                                                    <i class="fa-solid fa-list"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- ****************************************** -->
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Sitemize Eklememizi İstediğiniz Film Hangisi?</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" disabled="disabled" name="anket_soru12" id="anket_soru12" value="<?php echo $anketviewcek ['anket_soru12']; ?>">
                                                                <div class="form-control-icon">
                                                                    <i class="fa-solid fa-list"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- ****************************************** -->
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Sitemizdeki Filmlerden En Çok Hangi Filmi Beğendiniz</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" disabled="disabled" name="anket_soru13" id="anket_soru13" value="<?php echo $anketviewcek ['anket_soru13']; ?>">
                                                                <div class="form-control-icon">
                                                                    <i class="fa-solid fa-list"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- ****************************************** -->
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Sitemizi 10 üzerinden puanlayınız</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" disabled="disabled" name="anket_soru14" id="anket_soru14" value="<?php echo $anketviewcek ['anket_soru14']; ?>">
                                                                <div class="form-control-icon">
                                                                    <i class="fa-solid fa-list"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- ****************************************** -->
                                                    <div class="col-12">
                                                         <div class="form-group mb-3">
                                                            <label for="exampleFormControlTextarea1" class="form-label">Sitemiz Hakkında Görüşünüz Nelerdir Açıklayınız</label>
                                                            <textarea class="form-control" disabled="disabled" name="anket_soru15" id="anket_soru15" rows="3"><?php echo $anketviewcek['anket_soru15']; ?></textarea>
                                                        </div>
                                                    </div>
                                                    <!-- ****************************************** -->
                                                    
                                                </div>
                                            </div>
                                        </form>
                                    </div><pre></pre>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 col-12"></div>
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




