<?php
/*################################*/
define ('guvenlik', true);
/*################################*/
include 'header.php';
/*################################*/
?>

<!--**********************************
Header text start
***********************************-->
<div class="header">
<div class="header-content">
    <nav class="navbar navbar-expand">
        <div class="collapse navbar-collapse justify-content-between">
            <div class="header-left">
                <div class="dashboard_bar">
                    Boş Sayfa
                </div>
            </div>
        </div>
    </nav>
</div>
</div>
<!--**********************************
Header text end
***********************************-->

<?php
/*################################*/
include 'sidebar.php';
/*################################*/
?>  

        <!--**********************************
            Content body start
        ***********************************-->

        <div class="content-body">
            <div class="container-fluid">
				
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Table</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Datatable</a></li>
					</ol>
                </div>

            </div>
        </div>

        <!--**********************************
            Content body end
        ***********************************-->

<?php
/*################################*/
include 'footer.php';
/*################################*/
?>