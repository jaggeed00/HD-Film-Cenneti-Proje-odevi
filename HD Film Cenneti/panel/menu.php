<?php
/*################################*/
define ('guvenlik', true);
/*################################*/
include 'header.php';
/*################################*/
include 'page-header.php';
/*################################*/
?> 
<?php if($decoder["menugoruntulenme"]=="on"){ ?>
            <div id="main-content">

                <div class="page-heading">
                    <div class="page-title">
                        <div class="row"> 
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>Menü Listesi</h3>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Anasayfa</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Menü Listesi
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

                            <a href="menu-add.php"><button style="float:right;" type="button" class="btn btn-outline-success btn-lg"><i class="fa-solid fa-plus"></i> Menü Ekle</button></a><br><br>

                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">SıraNo</th>
                                        <th style="text-align: center;">Menü Ad</th>
                                        <th style="text-align: center;">Menü Url</th>
                                        <th style="text-align: center;">Menü Sira</th>
                                        <th style="text-align: center;">Menü Durum</th>
                                        <th style="text-align: center;">İşlem</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php 
                                        $say = 0;
                                        $menusor=$db->prepare("select * from menu order by menu_sira ASC");
                                        $menucek=$menusor->fetch(PDO::FETCH_ASSOC);
                                        $menusor->execute();

                                        while($menucek=$menusor->fetch(PDO::FETCH_ASSOC)){ $say++; ?>

                                        <tr style="text-align: center;">
                                            <td><?php echo $say ?></td>
                                            <td><?php echo $menucek['menu_ad']; ?></td>
                                            <td><?php echo $menucek['menu_url']; ?></td>  
                                            <td><?php echo $menucek['menu_sira']; ?></td> 

                                            <?php if ($menucek['menu_durum']=='Aktif') { ?>

                                              <td><span class="badge rounded-pill bg-primary text-white"><i class="fas fa-check">&#160;</i><?php echo $menucek['menu_durum']; ?></span></td>

                                            <?php }else if ($menucek['menu_durum']=='Pasif') { ?>

                                            <td><span class="badge rounded-pill bg-dark text-white"><i class="fa-solid fa-x">&#160;</i><?php echo $menucek['menu_durum']; ?></span></td>

                                            <?php } ?>

                                            <td class="project-actions" style="text-align:center;">

                                            <?php if($decoder["menuislem"]=="on"){ ?>

                                            <a href="menu-edit.php?id=<?php echo $menucek['menu_id']; ?>">
                                            <span class="badge bg-success">Düzenle</span>
                                            </a>

                                            <a href="../db/process.php?menudelete=ok&menu_id=<?php echo $menucek ['menu_id']; ?>" onclick="return menudelete();">
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
   function menudelete()
   {
    var onay;
    onay=window.confirm(" Seçtiğiniz Menüyü Silmek İstiyormusunuz?");

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





