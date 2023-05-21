<?php
/*################################*/
define ('guvenlik', true);
/*################################*/
include 'header.php';
/*################################*/
include 'page-header.php';
/*################################*/
?> 

<?php if($decoder["kullaninicigoruntuleme"]=="on"){ ?>

<div id="main-content">

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Kullanıcı Listesi</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Anasayfa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Kullanıcı Listesi
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
                        <th>Kullanıcı Adı</th>
                        <th>Email</th>
                        <th>Yetki</th>
                        <th>Tarih</th>
                        <th>İşlemler</th> 
                    </tr>
                </thead>
                <tbody>

                    <?php 

                        $userssor=$db->prepare("select * from users order by emreylcz_id DESC");
                        $userscek=$userssor->fetch(PDO::FETCH_ASSOC);
                        $userssor->execute();

                        foreach($userssor as $userscek) { ?>
                        <tr style="text-align: left;">
                            <td><?php echo $userscek['emreylcz_id']; ?></td>
                            <td><?php echo $userscek['emreylcz_adsoyad']; ?></td>
                            <td><?php echo $userscek['emreylcz_kadi']; ?></td>
                            <td><?php echo $userscek['emreylcz_mail']; ?></td>
                            <td>
                            <?php if($userscek['emreylcz_admin']=='Admin') { ?>
                            <span class="badge bg-Primary"><strong><?php echo $userscek['emreylcz_admin']; ?></strong></span>
                            <?php } elseif($userscek['emreylcz_admin']=='User') {  ?>
                            <span class="badge bg-Secondary"><strong><?php echo $userscek['emreylcz_admin']; ?></strong></span>
                            <?php } ?>
                            </td>
                            <td><?php echo tarihcevir($userscek['emreylcz_tarih']); ?></td>
                            <td class="project-actions">

                            <?php if($decoder["kullaniniciislem"]=="on"){ ?>

                            <a href="users-edit.php?id=<?php echo $userscek['emreylcz_id'];?>"><span class="badge bg-success">Görüntüle</span></a>
                            <a href="../db/process.php?userdelete=ok&emreylcz_id=<?php echo $userscek ['emreylcz_id']; ?>" onclick="return userdelete();">
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
function userdelete()
{
var onay;
onay=window.confirm(" Seçtiğiniz Kullanıcıyı Silmek İstiyormusunuz?");

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