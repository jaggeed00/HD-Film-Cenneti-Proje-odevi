<?php
/*################################*/
define ('guvenlik', true);
/*################################*/
include 'header.php';
/*################################*/
include 'page-header.php';
/*################################*/
?> 
<?php if($decoder["yorumgoruntulenme"]=="on"){ ?>
            <div id="main-content">

                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>Yorumlar Listesi</h3>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Anasayfa</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Yorumlar Listesi
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
                                        <th>Ad Soyad</th>
                                        <th>E-posta</th>
                                        <th>Yorum</th>
                                        <th>Tarih</th>
                                        <th>İşlem</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php 

                                        $commentsor=$db->prepare("select * from comment order by comment_id DESC");
                                        $commentcek=$commentsor->fetch(PDO::FETCH_ASSOC);
                                        $commentsor->execute();

                                        foreach($commentsor as $commentcek) { ?>
                                        <tr style="text-align: left;">
                                            <td><?php echo $commentcek['comment_id']; ?></td>
                                            <td><?php echo $commentcek['comment_adsoyad']; ?></td>
                                            <td><?php echo $commentcek['comment_eposta']; ?></td>
                                            <td><?php echo $commentcek['comment_yorum']; ?></td>
                                            <td><?php echo tarihcevir($commentcek['comment_tarih']); ?></td>

                                            <td class="project-actions">

                                            <?php if($decoder["yorumislem"]=="on"){ ?>
                                            
                                            <a href="../db/process.php?commentsdelete=ok&comment_id=<?php echo $commentcek ['comment_id']; ?>" onclick="return commentsdelete();">
                                            <span class="badge bg-danger">Sil</span>
                                            </a>

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

                </section>

<script type="text/javascript">
   function commentsdelete()
   {
    var onay;
    onay=window.confirm(" Seçtiğiniz Yorumu Silmek İstiyormusunuz?");

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







