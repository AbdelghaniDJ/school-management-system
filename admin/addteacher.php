<?php 
session_start();
  $nom1 = $_SESSION['nom'];
include_once("incl/connexion.php");
?>

<?php 
include('incl/header.php');
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php 
      include('incl/sidebar.php');
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                include('incl/navbar.php');
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Add Teachers</h1>
                     <!-- Content Row -->
                  
 <div class="row">

 <!-- Content Column -->
 <div class="col-lg-8 mb-4">

    <!-- Project Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Teachers</h6>
        </div>
        <div class="card-body">
          
         
 <!--Nav pagination ----------->

 <nav aria-label="Page navigation example">
  <ul class="pagination">
  </ul>
</nav>
 <!-----Fin Nav pagination--------->
                              
        </div>
       </div>

    <!-- Color System -->
   

</div>

<div class="col-lg-4 mb-4">

    <!-- Ajouter groupe -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Teacher</h6>
        </div>
        <div class="card-body">
<form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Username :</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="username" name="name" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password :</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="password" name="addby" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nom :</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="nom" name="addby" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Prenom :</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="prenom" name="addby" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email :</label>
    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="email" name="addby" required>
  </div>
  
  <button type="submit" onclick="me()" class="btn btn-primary" name="submit">Ajouter</button>
</form>
        </div>
    </div>

    <!--fin ajouter groupe -->
    
        <!-- Modifier groupe-->
        
             


    </div>
                <!-- /.container-fluid -->
                

            </div>
            
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php
            include('incl/footer.php') ;
             ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


   

</body>

</html>