<?php   
	
include_once("include/connexion.php");
session_start();
	if(isset($_POST['login'])){
        mysqli_query($conn, "UPDATE `users` SET `status`= 1 WHERE `username`='$_POST[username]'");
		$user = stripcslashes(mysqli_real_escape_string($conn,$_POST['username']));
		$password = md5($_POST['pass']);
			$sql = mysqli_query($conn, "SELECT * FROM `users` WHERE (`username` = '$user' OR `email` = '$user') AND `password` = '$password' AND `status` = 1  AND  `role`= 'student'");
			if(mysqli_num_rows($sql) != 1){
				//$msg='<div class="alert alert-danger" role="alert">Nom utilisateur ou mot de passe incorrect</div>';
				//$msg = 'Nom utilisateur ou mot de passe incorrect';

			}else{
				$user = mysqli_fetch_assoc($sql);
				$_SESSION['id'] = $user['user_id'];
				$_SESSION['user'] = $user['username'];
				$_SESSION['email'] = $user['email'];
				$_SESSION['date'] = $user['reg_date'];
			    $_SESSION['nom']= $user['nom'];
                $_SESSION['prenom']= $user['prenom'];
				$_SESSION['role']=$user['role'];
				//$msg= '<div class="alert alert-success" role="alert">Vous êtes actuellement connecté </div>';
    
				echo '<meta http-equiv="refresh" content="3; \'student/index.php?var='.$_SESSION['id'].'\' " />';
			}
		
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/kisspng-display-device-computer-monitors-font-librery-5b38b6ee190c80.2496208815304435021026.png">
    <title>Plateforme</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
    <img src="img/1.jpg" class="logo" ></a>
        <a class="navbar-brand" href="#"><b>Plateforme </b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php if(isset($_SESSION['nom'])){ ?>
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">

           
                                    
                                

                    <a class="nav-link" href="admin/index.php">
                    <button class="btn btn-info" >
                        <?php 
                     echo'Bienvenu! '.$_SESSION['nom'].' '.$_SESSION['prenom'];
                

                    ?> </button></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin/index.php">Dashboards</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Log out</a>
                </li>
            </ul>
            <?php } ?>

        </div>
    </div>
</nav>

<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
        
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header ">
                   <h3><?php if(!isset($_SESSION['id'])){ ?> Log in<?php }else{ ?> Bienvenu<?php } ?></h3>
                    </div>
                    <div class="card-body">
                    <?php if(!isset($_SESSION['id'])){ ?>
                        <form action="index.php" method="post">
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Username / E-Mail Address</label>
                                <div class="col-md-6">
                                    <input type="text" id="email_address" class="form-control" name="username" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="pass" required>
                                </div>
                            </div>

                           <!-- <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>-->

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" name="login">
                                    Log in
                                </button>
                                <!--<a href="#" class="btn btn-link">
                                    Forgot Your Password?
                                </a>-->
                            </div>
                    </div>
                    </form>
                    <?php }else{?>
                        <img class="imgmaahed" src="img/undraw_Reading_time_re_phf7.png" width="400px" hight="150px">
                     <?php } ?>     
                </div>
                <?php if (isset($msg)) echo '<br /><br />',$msg; ?>
            </div>
              

            </div>

        </div>
    </div>
    </div>

</main>


<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
<?php

    unset($_SESSION['id']);
?>