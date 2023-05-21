<?php
/*################################*/
define ('guvenlik', true);
/*################################*/
include 'header.php';
/*################################*/
include 'page-header.php';
/*################################*/
?> 
<?php if($decoder["anketgoruntulenme"]=="on"){ ?>
            <div id="main-content">

                <div class="page-heading">
                    <div class="page-title">
                        <div class="row"> 
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>Anket Listesi</h3>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Anasayfa</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Anket Listesi
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
                                        <th style="text-align: center;">#</th>
                                        <th style="text-align: center;">Ad Soyad</th>
                                        <th style="text-align: center;">Durum</th>
                                        <th style="text-align: center;">Tarih</th>
                                        <th style="text-align: center;">İşlem</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php 

                                        $anketsor=$db->prepare("select * from anket order by anket_id DESC");
                                        $anketcek=$anketsor->fetch(PDO::FETCH_ASSOC);
                                        $anketsor->execute();

                                        while($anketcek=$anketsor->fetch(PDO::FETCH_ASSOC)){ ?>

                                        <tr style="text-align: center;">
                                            <td><?php echo $anketcek['anket_id']; ?></td>
                                            <td><?php echo $anketcek['anket_soru1']; ?></td> 

                                            <?php if ($anketcek['anket_durum']=='Görüntülenmedi') { ?>

                                              <td><span class="badge rounded-pill bg-warning text-dark"><i class="fas fa-cog fa-spin"></i>&#160;<?php echo $anketcek['anket_durum']; ?></span></td>

                                            <?php }else if ($anketcek['anket_durum']=='İncelendi') { ?>

                                            <td><span class="badge rounded-pill bg-info text-dark"><i class="fas fa-check">&#160;</i><?php echo $anketcek['anket_durum']; ?></span></td>

                                            <?php } ?>

                                          
                                            <td><?php echo tarihcevir($anketcek['anket_tarih']); ?></td>

                                            <td class="project-actions" style="text-align:center;">

                                            <?php if($decoder["anketislem"]=="on"){ ?>

                                            <a href="anket-view.php?id=<?php echo $anketcek['anket_id']; ?>coq9aS9KLcIMr8h_663IneoL_QZUKEBEZ6oZ3RszFG-ARRFro0jxgHtG2XJcWDp0BE69mW4i-Dm6L8YMf3tRPJBSJxIc4gdxxBw5i7yZAd4o">
                                            <span class="badge bg-success">Görüntüle</span>
                                            </a>

                                            <a href="../db/process.php?anketdelete=ok&anket_id=<?php echo $anketcek ['anket_id']; ?>" onclick="return anketdelete();">
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

                </section>

<script type="text/javascript">
   function anketdelete()
   {
    var onay;
    onay=window.confirm(" Seçtiğiniz Anket Formu Silmek İstiyormusunuz?");

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





