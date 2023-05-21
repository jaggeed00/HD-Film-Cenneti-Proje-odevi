<?php
/*################################*/
define ('guvenlik', true);
/*################################*/
include 'header.php';
/*################################*/
include 'page-header.php';
/*################################*/


/*################################*/
if($decoder["filmgoruntulenme"]=="on"){ 
/*################################*/

$movieviewsor=$db->prepare("SELECT * from movie where movie_id=:movie_id");
$movieviewsor->execute(array(
  'movie_id' => $_GET['id']
));
$movieviewcek=$movieviewsor->fetch(PDO::FETCH_ASSOC);
?>


            <div id="main-content">

                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3><?php echo $movieviewcek['movie_ismi']; ?> Adlı Filmi Düzenle</h3>
                                <p class="text-subtitle text-muted"></p>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Anasayfa</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Film Düzenle
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
                                        <form class="form form-vertical" method="POST" enctype='multipart/form-data'>
                                            <div class="form-body">
                                                <div class="row">

                                                    <center>
                                                        <div class="mb-3">
                                                            <img src="<?php echo $movieviewcek['movie_resimurl']; ?>" widht="200px" height="200px">
                                                        </div>
                                                    </center>
                                                    <div class="mb-3">
                                                        <label for="formFile" class="form-label">Resim Seç:</label>
                                                            <input class="form-control" name="movie_resimurl" type="file" id="movie_resimurl">
                                                     </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Film Adı:</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" name="movie_ismi" id="movie_ismi" value="<?php echo $movieviewcek['movie_ismi']; ?>">
                                                                <div class="form-control-icon">
                                                                    <i class="fa-solid fa-film"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                    <label for="first-name-icon">Kategori:</label>
                                                    <div class="form-group">
                                                            <select name="movie_kategori" id="movie_kategori" class="choices form-select">
                                                                <option value="<?php echo $movieviewcek['movie_kategori']; ?>">Seçilen (<?php echo $movieviewcek['movie_kategori']; ?>)</option>
                                                                <option value="En Yeni Filmler">En Yeni Filmler</option>
                                                                <option value="En İyi Filmler">En İyi Filmler</option>
                                                                <option value="Trend Filmler">Trend Filmler</option>
                                                                <option value="Yerli Filmler">Yerli Filmler</option>
                                                                <option value="IMDB 7+">IMDB 7+</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Yapım Yılı:</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" name="movie_yapimyil" id="movie_yapimyil" value="<?php echo $movieviewcek['movie_yapimyil']; ?>">
                                                                <div class="form-control-icon">
                                                                    <i class="fa-solid fa-calendar-days"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Film Süresi:</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" name="movie_sure" id="movie_sure" value="<?php echo $movieviewcek['movie_sure']; ?>">
                                                                <div class="form-control-icon">
                                                                    <i class="fa-solid fa-hourglass-half"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">IMDB Puanı:</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" name="movie_imdb" id="movie_imdb" value="<?php echo $movieviewcek['movie_imdb']; ?>">
                                                                <div class="form-control-icon">
                                                                    <i class="fa-solid fa-ranking-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">IMDB Linki:</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" name="movie_imdblink" id="movie_imdblink" value="<?php echo $movieviewcek['movie_imdblink']; ?>">
                                                                <div class="form-control-icon">
                                                                    <i class="fa-solid fa-code"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="first-name-icon">Dil:</label>
                                                    <ul class="list-unstyled mb-1">
                                                        <li class="d-inline-block me-2 mb-1">
                                                             <div class="form-check">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="form-check-input form-check-info form-check-glow" name="movie_dil[]" value="Türkçe Dublaj" id="customColorCheck1">
                                                                    <label class="form-check-label" for="customColorCheck1">Türkçe Dublaj</label>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="d-inline-block me-2 mb-1">
                                                             <div class="form-check">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="form-check-input form-check-info form-check-glow" name="movie_dil[]" value="Türkçe Altyazılı" id="customColorCheck2">
                                                                    <label class="form-check-label" for="customColorCheck2">Türkçe Altyazılı</label>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <label for="first-name-icon">Tür:</label>
                                                    <ul class="list-unstyled mb-1">
                                                        <li class="d-inline-block me-2 mb-1">
                                                             <div class="form-check">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="form-check-input form-check-info form-check-glow" name="movie_tur[]" id="customColorCheck3" value="Aksiyon Filmleri">
                                                                    <label class="form-check-label" for="customColorCheck3">Aksiyon Filmleri</label>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!--****************************************-->
                                                        <li class="d-inline-block me-2 mb-1">
                                                             <div class="form-check">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="form-check-input form-check-info form-check-glow" name="movie_tur[]" id="customColorCheck4" value="Macera Filmleri">
                                                                    <label class="form-check-label" for="customColorCheck4">Macera Filmleri</label>
                                                                </div>
                                                            </div>
                                                        </li><br>
                                                        <!--****************************************-->
                                                        <li class="d-inline-block me-2 mb-1">
                                                             <div class="form-check">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="form-check-input form-check-info form-check-glow" name="movie_tur[]" id="customColorCheck5" value="Suç Filmleri">
                                                                    <label class="form-check-label" for="customColorCheck5">Suç Filmleri</label>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!--****************************************-->
                                                        <li class="d-inline-block me-2 mb-1">
                                                             <div class="form-check">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="form-check-input form-check-info form-check-glow" name="movie_tur[]" id="customColorCheck6" value="Komedi Filmleri">
                                                                    <label class="form-check-label" for="customColorCheck6">Komedi Filmleri</label>
                                                                </div>
                                                            </div>
                                                        </li><br>
                                                         <!--****************************************-->
                                                         <li class="d-inline-block me-2 mb-1">
                                                             <div class="form-check">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="form-check-input form-check-info form-check-glow" name="movie_tur[]" id="customColorCheck7" value="Romantik Filmleri">
                                                                    <label class="form-check-label" for="customColorCheck7">Romantik Filmleri</label>
                                                                </div>
                                                            </div>
                                                        </li>
                                                         <!--****************************************-->
                                                         <li class="d-inline-block me-2 mb-1">
                                                             <div class="form-check">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="form-check-input form-check-info form-check-glow" name="movie_tur[]" id="customColorCheck8" value="Gizem Filmleri">
                                                                    <label class="form-check-label" for="customColorCheck8">Gizem Filmleri</label>
                                                                </div>
                                                            </div>
                                                        </li>
                                                         <!--****************************************-->
                                                         <li class="d-inline-block me-2 mb-1">
                                                             <div class="form-check">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="form-check-input form-check-info form-check-glow" name="movie_tur[]" id="customColorCheck9" value="Belgesel Filmleri">
                                                                    <label class="form-check-label" for="customColorCheck9">Belgesel Filmleri</label>
                                                                </div>
                                                            </div>
                                                        </li>
                                                         <!--****************************************-->
                                                         <li class="d-inline-block me-2 mb-1">
                                                             <div class="form-check">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="form-check-input form-check-info form-check-glow" name="movie_tur[]" id="customColorCheck10" value="Biyografi Filmleri">
                                                                    <label class="form-check-label" for="customColorCheck10">Biyografi Filmleri</label>
                                                                </div>
                                                            </div>
                                                        </li>
                                                         <!--****************************************-->
                                                         <li class="d-inline-block me-2 mb-1">
                                                             <div class="form-check">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="form-check-input form-check-info form-check-glow" name="movie_tur[]" id="customColorCheck11" value="Bilim Kurgu Filmleri">
                                                                    <label class="form-check-label" for="customColorCheck11">Bilim Kurgu Filmleri</label>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!--****************************************-->
                                                        <li class="d-inline-block me-2 mb-1">
                                                             <div class="form-check">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="form-check-input form-check-info form-check-glow" name="movie_tur[]" id="customColorCheck12" value="Gerilim Filmleri">
                                                                    <label class="form-check-label" for="customColorCheck12">Gerilim Filmleri</label>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!--****************************************-->
                                                        <li class="d-inline-block me-2 mb-1">
                                                             <div class="form-check">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="form-check-input form-check-info form-check-glow" name="movie_tur[]" id="customColorCheck13" value="Fantastik Filmleri">
                                                                    <label class="form-check-label" for="customColorCheck13">Fantastik Filmleri</label>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!--****************************************-->
                                                        <li class="d-inline-block me-2 mb-1">
                                                             <div class="form-check">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="form-check-input form-check-info form-check-glow" name="movie_tur[]" id="customColorCheck14" value="Dram Filmleri">
                                                                    <label class="form-check-label" for="customColorCheck14">Dram Filmleri</label>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!--****************************************-->
                                                        <li class="d-inline-block me-2 mb-1">
                                                             <div class="form-check">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="form-check-input form-check-info form-check-glow" name="movie_tur[]" id="customColorCheck15" value="Animasyon Filmleri">
                                                                    <label class="form-check-label" for="customColorCheck15">Animasyon Filmler</label>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!--****************************************-->
                                                        <li class="d-inline-block me-2 mb-1">
                                                             <div class="form-check">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="form-check-input form-check-info form-check-glow" name="movie_tur[]" id="customColorCheck16" value="Korku Filmleri">
                                                                    <label class="form-check-label" for="customColorCheck16">Korku Filmleri</label>
                                                                </div>
                                                            </div>
                                                        </li><br>
                                                        <!--****************************************-->
                                                        <li class="d-inline-block me-2 mb-1">
                                                             <div class="form-check">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="form-check-input form-check-info form-check-glow" name="movie_tur[]" id="customColorCheck17" value="Türk Filmleri">
                                                                    <label class="form-check-label" for="customColorCheck17">Türk Filmleri</label>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!--****************************************-->
                                                        <li class="d-inline-block me-2 mb-1">
                                                             <div class="form-check">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="form-check-input form-check-info form-check-glow" name="movie_tur[]" id="customColorCheck18" value="Savaş Filmleri">
                                                                    <label class="form-check-label" for="customColorCheck18">Savaş Filmleri</label>
                                                                </div>
                                                            </div>
                                                        </li><br>
                                                        <!--****************************************-->
                                                        <li class="d-inline-block me-2 mb-1">
                                                             <div class="form-check">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="form-check-input form-check-info form-check-glow" name="movie_tur[]" id="customColorCheck19" value="Aile Filmleri">
                                                                    <label class="form-check-label" for="customColorCheck19">Aile Filmleri</label>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="d-inline-block me-2 mb-1">
                                                             <div class="form-check">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="form-check-input form-check-info form-check-glow" name="movie_tur[]" id="customColorCheck20" value="Tarih Filmleri">
                                                                    <label class="form-check-label" for="customColorCheck20">Tarih Filmleri</label>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="form-group mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Özet:</label>
                                                        <textarea class="form-control" name="movie_ozet" id="movie_ozet" rows="5"><?php echo $movieviewcek['movie_ozet']; ?></textarea>
                                                    </div>
                                                    <div class="col-12 d-flex justify-content-end">

                                                    <?php if($decoder["filmislem"]=="on"){ ?>

                                                        <input type="hidden" name="movieedit">
                                                        <button type="submit" class="btn btn-info me-1 mb-1">Düzenle</button>

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




