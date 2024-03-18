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

    <div class="row d-flex justify-content-center">
      <div class="col-md-8 col-lg-6 col-xl-10">

        <div class="card" id="chat1" style="border-radius: 15px;">
          <div
            class="card-header d-flex justify-content-between align-items-center p-3 bg-info text-white border-bottom-0"
            style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
            <!--<i class="fas fa-angle-left"></i>!-->

            <p class="mb-0 fw-bold"><i class="fa fa-users" aria-hidden="true"> Groupe Chat</i>
</p>
            <!--<i class="fas fa-times"></i>-->
          </div>
          <div style="overflow-y:scroll; height:400px;" class="card-body">
<?php
$msg = mysqli_query($conn, "SELECT * FROM `chat` ORDER BY `date` ASC");
$query = mysqli_query($conn, "SELECT nom FROM `users` WHERE user_id = '$_GET[var]'");

//$num = mysqli_num_rows($query);
//echo $num;
$row = mysqli_fetch_assoc($query);
$ghanou = $row['nom'];



while($grp = mysqli_fetch_assoc($msg)){
if($ghanou == $grp['sendby']){
 echo '<div class="d-flex justify-content-between">'.'<p class="small mb-1">'.$grp['sendby'].'</p>
              <p class="small mb-1 text-muted">'.$grp['date'].'</p>
            </div>'.'<div class="d-flex flex-row justify-content-start mb-4">
              <img src="../img/avatar.jpg"
                alt="avatar 1" style="width: 45px; height: 100%;">
              <div class="p-3 ms-3" style="border-radius: 15px; background-color: rgba(57, 192, 237,.2);">'.'<p class="small mb-0">'.$grp['message'].'</p>
              </div>
            </div>';
  }
        
else{
  echo '<div class="d-flex justify-content-between">
              <p class="small mb-1 text-muted">'.$grp['date'].'</p>
              <p class="small mb-1">'.$grp['sendby'].'</p>
            </div>

            <div class="d-flex flex-row justify-content-end mb-4">
              <div class="p-3 me-3 border" style="border-radius: 15px; background-color: #fbfbfb;">
                <p class="small mb-0">'.$grp['message'].'</p>
              </div>
              <img src="../img/avatar.jpg"
                alt="avatar 1" style="width: 45px; height: 100%;">
            </div>';
          
}}




             ?>
             <!--
            <div class="d-flex justify-content-between">
              <p class="small mb-1 text-muted">23 Jan 2:05 pm</p>
              <p class="small mb-1">Johny Bullock</p>
            </div>

            <div class="d-flex flex-row justify-content-end mb-4">
              <div class="p-3 me-3 border" style="border-radius: 15px; background-color: #fbfbfb;">
                <p class="small mb-0">Thank you, I really like your product.</p>
              </div>
              <img src="../img/avatar.jpg"
                alt="avatar 1" style="width: 45px; height: 100%;">
            </div>

            <div class="d-flex justify-content-between">
              <p class="small mb-1 text-muted">23 Jan 2:05 pm</p>
              <p class="small mb-1">Johny Bullock</p>
            </div>

            <div class="d-flex flex-row justify-content-end mb-4">
              <div class="p-3 me-3 border" style="border-radius: 15px; background-color: #fbfbfb;">
                <p class="small mb-0">Thank you, I really like your product.</p>
              </div>
              <img src="../img/avatar.jpg"
                alt="avatar 1" style="width: 45px; height: 100%;">
            </div>

            <div class="d-flex justify-content-between">
              <p class="small mb-1 text-muted">23 Jan 2:05 pm</p>
              <p class="small mb-1">Johny Bullock</p>
            </div>

            <div class="d-flex flex-row justify-content-end mb-4">
              <div class="p-3 me-3 border" style="border-radius: 15px; background-color: #fbfbfb;">
                <p class="small mb-0">Thank you, I really like your product.</p>
              </div>
              <img src="../img/avatar.jpg"
                alt="avatar 1" style="width: 45px; height: 100%;">
            </div>



           <!-- <div class="d-flex flex-row justify-content-start mb-4">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                alt="avatar 1" style="width: 45px; height: 100%;">
              <div class="ms-3" style="border-radius: 15px;">
                <div class="bg-image">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/screenshot1.webp"
                    style="border-radius: 15px;" alt="video">
                  <a href="#!">
                    <div class="mask"></div>
                  </a>
                </div>
              </div>
            </div>

            <div class="d-flex flex-row justify-content-start mb-4">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                alt="avatar 1" style="width: 45px; height: 100%;">
              <div class="p-3 ms-3" style="border-radius: 15px; background-color: rgba(57, 192, 237,.2);">
                <p class="small mb-0">...</p>
                <p class="small mb-0">...</p>
                <p class="small mb-0">...</p>
                <p class="small mb-0">...</p>
                <p class="small mb-0">...</p>
              </div>
            </div>

            <div class="d-flex flex-row justify-content-start mb-4">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                alt="avatar 1" style="width: 45px; height: 100%;">
              <div class="p-3 ms-3" style="border-radius: 15px; background-color: rgba(57, 192, 237,.2);">
                <p class="small mb-0">Hello and thank you for visiting MDBootstrap. Please click the video
                  below.</p>
              </div>
            </div>

            <div class="d-flex flex-row justify-content-end mb-4">
              <div class="p-3 me-3 border" style="border-radius: 15px; background-color: #fbfbfb;">
                <p class="small mb-0">Thank you, I really like your product.</p>
              </div>
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava2-bg.webp"
                alt="avatar 1" style="width: 45px; height: 100%;">
            </div> -->

           <!-- <div class="form-outline">
              <textarea class="form-control" id="textAreaExample" rows="4"></textarea>
              <button type="button" class="btn btn-primary">Send</button>

            </div>-->
            <div class="box-footer">
                  <form action="" method="post">
                    <div class="input-group">
                      <input type="text" id="messageInput" name="message" placeholder="Type Message ..." class="form-control" required>
                      <span class="input-group-btn">
                            <button type="submit" onclick="sendMessage()" name="submit" class="btn btn-warning btn-flat">Send</button>
                          </span>
                    </div>
                  </form>
                </div>

          </div>
        </div>

      </div>
    </div>

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