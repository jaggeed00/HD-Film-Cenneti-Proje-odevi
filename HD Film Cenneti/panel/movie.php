<?php
/*################################*/
define ('guvenlik', true);
/*################################*/
include 'header.php';
/*################################*/
include 'page-header.php';
/*################################*/
if($decoder["filmgoruntulenme"]=="on"){
?> 

            <div id="main-content">

                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>Film Listesi</h3>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Anasayfa</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Film Listesi
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div><br>

                    <section class="section">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Film Adı</th>
                                        <th>Kategori</th>
                                        <th>Yapım Yılı</th>
                                        <th>Tür</th>
                                        <th>IMDB</th>
                                        <th style="text-align: center;">Tarih</th>
                                        <th style="text-align: center;">İşlem</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php 

                                        $moviesor=$db->prepare("select * from movie order by movie_id DESC");
                                        $moviecek=$moviesor->fetch(PDO::FETCH_ASSOC);
                                        $moviesor->execute();

                                        foreach($moviesor as $moviecek) { ?>
                                        <tr style="text-align: left;">
                                            <td><?php echo $moviecek['movie_id']; ?></td>
                                            <td><?php echo $moviecek['movie_ismi']; ?></td>
                                            <td><?php echo $moviecek['movie_kategori']; ?></td>
                                            <td><?php echo $moviecek['movie_yapimyil']; ?></td>
                                            <td><?php echo $moviecek['movie_tur']; ?></td>
                                            <td><span class="badge bg-info"><?php echo $moviecek['movie_imdb']; ?></span></td>
                                            <td><?php echo tarihcevir($moviecek['movie_tarih']); ?></td>

                                            <td class="project-actions" style="text-align:center;">

                                            <?php if($decoder["filmislem"]=="on"){ ?>

                                            <a href="movie-edit.php?id=<?php echo $moviecek['movie_id'];?>"><span class="badge bg-success">Düzenle</span></a>
                                            <a href="../db/process.php?moviedelete=ok&movie_id=<?php echo $moviecek ['movie_id']; ?>" onclick="return moviedelete();">
                                            <span class="badge bg-danger">Sil</span></a>

                                            <?php }else{ ?>
                                                <span class="badge bg-danger">İznin Yok</span>
                                            <?php } ?>

                                        </td>
                                        </tr> 

                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    
<script type="text/javascript">
   function moviedelete()
   {
    var onay;
    onay=window.confirm(" Seçtiğiniz Filmi Silmek İstiyormusunuz?");

    if(onay)
    {
     return true;
   }
   else
   {
     return false;
   }
 }
</script>


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





