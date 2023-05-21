<?php
/*################################*/
define ('guvenlik', true);
/*################################*/
include 'header.php';
/*################################*/
include 'page-header.php';
/*################################*/
?> 
<?php if($decoder["iletisimgoruntulenme"]=="on"){ ?>
            <div id="main-content">

                <div class="page-heading">
                    <div class="page-title">
                        <div class="row"> 
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>Ticket Listesi</h3>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Anasayfa</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Ticket Listesi
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
                                        <th>AdSoyad</th>
                                        <th>Konu</th>
                                        <th>Mail</th>
                                        <th>Telefon</th>
                                        <th>Mesaj</th> 
                                        <th>Tarih</th> 
                                        <th>İşlem</th>  
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php 

                                    $contactsor=$db->prepare("select * from contact order by contact_id DESC");
                                    $contactcek=$contactsor->fetch(PDO::FETCH_ASSOC);
                                    $contactsor->execute();

                                    while($contactcek=$contactsor->fetch(PDO::FETCH_ASSOC)){ ?>

                                        <tr style="text-align: left;">
                                            <td><?php echo $contactcek['contact_id']; ?></td>
                                            <td><?php echo $contactcek['contact_adsoyad']; ?></td>
                                            <td><?php echo $contactcek['contact_konu']; ?></td>
                                            <td><?php echo $contactcek['contact_mail']; ?></td>
                                            <td><?php echo $contactcek['contact_tel']; ?></td>
                                            <td><?php echo $contactcek['contact_mesaj']; ?></td>
                                            <td><?php echo tarihcevir($contactcek['contact_tarih']); ?></td>

                                            <td class="project-actions">

                                            <?php if($decoder["iletisimislem"]=="on"){ ?>

                                            <a href="../db/process.php?ticketdelete=ok&contact_id=<?php echo $contactcek ['contact_id']; ?>" onclick="return ticketdelete();">
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
   function ticketdelete()
   {
    var onay;
    onay=window.confirm(" Seçtiğiniz Ticketi Silmek İstiyormusunuz?");

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
    





