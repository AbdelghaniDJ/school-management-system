
	<?php
	include_once("include/connexion.php");
	session_start();
	//if(isset($_GET['id'])){
if(isset($_SESSION['id'])){
        mysqli_query($conn, "UPDATE `users` SET `status`= '0' WHERE `user_id`='$_SESSION[id]'");
        session_destroy();
		header("Location: index.php");
	}
		
	