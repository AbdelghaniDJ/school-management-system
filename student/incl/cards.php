<?php

include_once('../include/connexion.php');

$select = mysqli_query($conn,"SELECT COUNT(*) FROM users WHERE role ='student' AND status = 1");
$row = mysqli_fetch_assoc($select);
?>

<?php 
$sql = mysqli_query($conn,"SELECT COUNT(*) FROM `file`");
$ro = mysqli_fetch_assoc($sql);

?>
<!-- Content Row -->
 <div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Documents</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $ro['COUNT(*)']; ?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-book fa-3x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Online</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $row['COUNT(*)']; ?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-users fa-3x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">emprinter
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"></div>
                        </div>
                        <!--<div class="col">
                            <div class="progress progress-sm mr-2">
                                <div class="progress-bar bg-info" role="progressbar"
                                    style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>-->
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-arrow-right fa-3x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                         Retour</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-arrow-left fa-3x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Content Row -->