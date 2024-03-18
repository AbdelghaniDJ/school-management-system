<?php 
session_start();
  $nom1 = $_SESSION['nom'];
include_once("incl/connexion.php");
?>
<?php
if(isset($_POST['submit'])){  
      
    $image = $_FILES['image'];
    $image_name = $image['name'];
    $image_tmp = $image['tmp_name'];
    $image_size = $image['size'];
    $image_error = $image['error'];
    if($image_name != ''){
            $image_exe = explode('.' , $image_name);
            $image_exe = strtolower(end($image_exe));
            
            $allowd = array('pdf','docx');
            
            if(in_array($image_exe , $allowd)){
                 if($image_error === 0){
                    if($image_size <= 30000000000000000000){
                        $new_name = uniqid('image',false) . '.' . $image_exe;
                        $image_dir = '../img/produit/' . $new_name;
                        $image_db = '../img/produit/' . $new_name;
                        if(move_uploaded_file($image_tmp , $image_dir)){
                            $select = mysqli_query($conn,"SELECT * FROM `file` WHERE `filename`='$_POST[name]'");
                            if(mysqli_num_rows($select) != 1){
                            $insert = mysqli_query($conn, "INSERT INTO `file`(`filename`,`file`,`Addby`) VALUES ('$_POST[name]','$image_db','$_POST[addby]')");
                            if(isset($insert)){
                                $msg =  '<div class="alert alert-success" role="alert">تم اضافة الصورة بنجاح </div>';
                                //echo '<meta http-equiv="refresh" content="3; \'posts.php\' " />';
                            }
                        }}else{
                            $msg =  '<div class="alert alert-danger" role="alert">عذراً , حدث خطأ اثناء رفع الصورة</div>';
                        }
                    }else{
                        $msg =  '<div class="alert alert-danger" role="alert">عذراً , ولكن حجم الصورة كبير جداً يجب ان لا يتعدى 2 MB</div>';
                    }
                 }else{
                    $msg =  '<div class="alert alert-danger" role="alert">عذراً , حديث خطأ غير متوقع اثناء رفع الصورة</div>';
                 }
            }else{
                $msg =  '<div class="alert alert-danger" role="alert">الرجاء اختيار صورة صحيحية</div>';
            }
    }
}
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
                    <h1 class="h3 mb-4 text-gray-800">Documents</h1>
                     <!-- Content Row -->
                  
 <div class="row">

 <!-- Content Column -->
 <div class="col-lg-8 mb-4">

    <!-- Project Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Les Documents</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>File Name</th>
                                            <th>Add By</th>
                                            <th>File</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>#</th>
                                            <th>File Name</th>
                                            <th>Add By</th>
                                            <th>File</th>
                                  
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                    <?php
      
      $lol = mysqli_query($conn, "SELECT * FROM `file` ORDER BY `filename` DESC");
      $num = 1;
       while($catgr = mysqli_fetch_assoc($lol)){
       echo '
                                       <tr>
                                           <td>'.$num.'</td>
                                           <td>'.$catgr['filename'].'</td>
                                           <td>'.$catgr['Addby'].'</td>
                                           <td><a href="'.$catgr['file'].'".download="'.$catgr['file'].'"><i class="fas fa-download"></i></a></td>
                                           
                                       </tr> ';
      $num++;
     } 
    ?>


                                        </tbody>
                                </table>
                            </div>
         
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
            <h6 class="m-0 font-weight-bold text-primary">Ajouter Documents</h6>
        </div>
        <div class="card-body">
<form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">File Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" name="name" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Add By</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="addby" name="addby" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">File Input</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" required>
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