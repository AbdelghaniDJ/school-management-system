
<?php
	include_once("../include/connexion.php");
	session_start();
	//if(isset($_GET['id'])){

        mysqli_query($conn,"UPDATE `users` SET `status`= '0' WHERE `user_id` = '$_GET[var]'");
        session_destroy();
        header("Location: ../admin.php");
	