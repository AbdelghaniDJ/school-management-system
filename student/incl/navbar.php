<?php
include_once("connexion.php");

session_unset();
$_SESSION['id'] = $_GET['var'];
//unset($_SESSION['nom']);
//unset($_SESSION['prenom']);
$sql = mysqli_query($conn,"SELECT nom,prenom FROM `users` WHERE `user_id`='$_SESSION[id]'");
while($row = mysqli_fetch_assoc($sql)){
    $nom2 = $row['nom'];
    $prenom2 = $row['prenom'];

}
$_SESSION['nom'] = $nom2;

$idd = $_SESSION['id'];

?>
<nav  class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
           
                     <!-- Nav Item - Alerts -->
                        
<?php
      
       $cat = mysqli_query($conn, "SELECT * FROM `file` ORDER BY `file_id` DESC");
        while($grp = mysqli_fetch_assoc($cat)){
        echo '<li class="nav-item dropdown no-arrow mx-1">
                            <a onclick="crow()"class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span id="alert"  class="badge badge-danger badge-counter">+1</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="font-weight-bold">A new document for '.$grp['filename'].'  is ready to download!</span>
                                    </div>
                                </a>
                                
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>';
       break;
      }
     ?>


            

                        <!-- Nav Item - Messages -->
                         

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php  echo $nom2." ".$prenom2;?></span>

                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                
                                <?php
                                   echo "<a class="."dropdown-item"." href="."../student/logout.php?var=".$idd.">";
                                 ?>
                            
                            
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li> 

                    </ul>

                </nav>
