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
            <h6 class="m-0 font-weight-bold text-primary">Simulateur</h6>
        </div>
        <div class="card-body">
        <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nom de Module</th>
                                            <th>Note CC</th>
                                            <th>Note Examen</th>
                                            <th>Calculer Moy Mat</th>
                                            <th>Resultat</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                         <tr>
                                            <th>#</th>
                                            <th>Nom de Module</th>
                                            <th>Note CC</th>
                                            <th>Note Examen</th>
                                            <th>Calculer Moy Mat</th>
                                            <th>Resultat</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
<tr>
  <td>#</td>
  <td>Examens Viscéraux</td>
  <td><input id="mod1" type="text"></td>
  <td><input id="mod11" type="text"></td>
  <td><button onclick="calc1();">Calculer</button></td>
  <td><input id="mod12" type="text"></td>
</tr>
<tr>
  <td>#</td>
  <td>Examens Biologiques</td>
  <td><input id="mod2" type="#"></td>
  <td><input id="mod21" type="#"></td>
  <td><button onclick="calc2();">Calculer</button></td>
  <td><input id="mod22" type="#"></td>
</tr>
<tr>
  <td>#</td>
  <td>Radiopédiatrie</td>
  <td><input id="mod3" type="#"></td>
  <td><input id="mod31" type="#"></td>
 <td><button onclick="calc3();">Calculer</button></td>
  <td><input id="mod32" type="#"></td>
</tr>
<tr>
  <td>#</td>
  <td>Nutrition</td>
  <td><input id="mod4" type="#"></td>
  <td><input id="mod41" type="#"></td>
  <td><button onclick="calc4();">Calculer</button></td>
  <td><input id="mod42" type="#"></td>
</tr>
<tr>
  <td>#</td>
  <td>Examens Radiologiques Osseux 2</td>
  <td><input id="mod5" type="#"></td>
  <td><input id="mod51" type="#"></td>
 <td><button onclick="calc5();">Calculer</button></td>
  <td><input id="mod52" type="#"></td>
</tr>
<tr>
  <td>#</td>
  <td>Pathologie Sémiologie Radiologique</td>
  <td><input id="mod6" type="#"></td>
  <td><input id="mod61" type="#"></td>
  <td><button onclick="calc6();">Calculer</button></td>
  <td><input id="mod62" type="#"></td>
</tr>
<tr>
  <td>#</td>
  <td>Pharmacologie 2</td>
  <td><input id="mod7" type="#"></td>
  <td><input id="mod71" type="#"></td>
  <td><button onclick="calc7();">Calculer</button></td>
  <td><input id="mod72" type="#"></td>
</tr>
<tr>
  <td>#</td>
  <td>Informatique Et Internet</td>
  <td><input id="mod8" type="#"></td>
  <td><input id="mod81" type="#"></td>
  <td><button onclick="calc8();">Calculer</button></td>
  <td><input id="mod82" type="#"></td>
</tr>
<tr>
  <td>Moyenne semestre</td>
  <td><button onclick="moy();">Calculer</button></td>
  <td><input id="mod9" type="#"></td>
</tr>
       


                                        </tbody>
                                </table>
                            </div>
                              
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