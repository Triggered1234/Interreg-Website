<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="styles.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
     <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900|Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Athiti' rel='stylesheet'>
    <header>		<a href="index.php" class="visited"><img src="site.png" class="img"></a></header>
</head>

<body>
    	<h1 class="titleheader" font><a href="index.php" class="visited">  CREATIVITY WITHOUT FRONTIERS </a></h1>
	<br>
	<div class="column">
    <div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar"
                aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavbar">
                <div class="navbar-nav mx-auto">
                    <a class="nav-item nav-link" href="index.php">Home</a>
                    <a class="nav-item nav-link" href="Activities.php">Activities</a>
                    <a class="nav-item nav-link" href="Materials.php">Materials</a>
                    <a class="nav-item nav-link" href="redirect.php">Photos & Videos</a>
                    <?php 
                    if(isset($_SESSION['userId'])){
                        echo '<a class="nav-item nav-link" href="includes/logout.inc.php">Logout</a>';
}                   else echo ' <a class="nav-item nav-link" href="Login.php">Login</a> 
                <a class="nav-item nav-link" href="register.php">Register</a> ';
                    ?>
                </div>
            </div>
        </nav>
	</div>
	</div>

    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/fontawesome.min.js"></script>
    <script src="assets/js/app.js"></script>