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
                echo "<a class="."nav-link"." href="."chat.php?var=".$idd.">";
                ?>
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <span>Chat</span></a>
            </li>
            <li class="nav-item">
                <?php
                echo "<a class="."nav-link"." href="."chatgpt.php?var=".$idd.">";
                ?>
                    <i class="fas fa-fw fa-book"></i>
                    <span>Ajouter Document</span></a>
            </li>

            <li class="nav-item">
                <?php
                echo "<a class="."nav-link"." href="."simulateur.php?var=".$idd.">";
                ?>
                    <i class="fas fa-notes-medical"></i>
                    <span>Simulateur</span></a>
            </li>

            <li class="nav-item">
                <?php
                echo "<a class="."nav-link"." href="."consultation.php?var=".$idd.">";
                ?>
                    <i class="fas fa-marker"></i>
                    <span>Consultation</span></a>
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