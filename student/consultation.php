<?php 
session_start();


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



<!-- START CHAT -->
<?php
if(isset($_POST['submit']) && !empty($_POST['message'])){
  $select = mysqli_query($conn,"SELECT * FROM `chat` WHERE `message`='$_POST[message]'");
  if(mysqli_num_rows($select) < 1){
   mysqli_query($conn, "INSERT INTO `chat`( `message`,`date`, `sendby`) VALUES ('$_POST[message]',now(),'$_SESSION[nom]') ORDER BY `date` ASC");
  }

}

?>
<!-- END CHAT -->




                <!-- End of Topbar -->
                
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading 
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    DataTales Example -->
                    <!--
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Chat</h6>
                        </div>
                        <div class="card-body">
                           
                                
                        </div>
                       
                    </div>-->

                
                <!-- /.container-fluid -->
                <section style="background-color: #eee;">
  <div  class="container py-5">
<div class="col-lg-12 mb-4">

    <!-- Project Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Consultation Des Notes</h6>
        </div>
        <div class="card-body">
        
                              
        </div>
       </div>

    <!-- Color System -->
   

</div>
</section>
                

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