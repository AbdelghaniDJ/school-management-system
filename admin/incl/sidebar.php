<?php
$idd = $_GET['var'];
?>

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon ">
                    <i class="fa fa-users" aria-hidden="true"></i>
                </div>
                <div class="sidebar-brand-text mx-4"><sup>Platforme</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
           <!-- <div class="sidebar-heading">
                Interface
            </div>-->


            
            
            <li class="nav-item">
                <?php
                echo "<a class="."nav-link"." href="."addstudent.php?var=".$idd.">";
                ?>
                    <i class="fas fa-user-graduate"></i>
                    <span>add student</span></a>
            </li>
            <li class="nav-item">
                <?php
                echo "<a class="."nav-link"." href="."addteacher.php?var=".$idd.">";
                ?>
                    <i class="fas fa-chalkboard-teacher"></i>
                    <span>add teacher</span></a>
            </li>

            <li class="nav-item">
                <?php
                echo "<a class="."nav-link"." href="."deletechat.php?var=".$idd.">";
                ?>
                    <i class="fas fa-trash-alt"></i>
                    <span>delete chat</span></a>
            </li>

            <li class="nav-item">
                <?php
                echo "<a class="."nav-link"." href="."deletedocuments.php?var=".$idd.">";
                ?>
                    <i class="fas fa-folder-minus"></i>
                    <span>delete docs</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
           <!-- <div class="sidebar-heading">
                Addons
            </div>-->


           
           <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

           

        </ul>