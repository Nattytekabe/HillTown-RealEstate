<!DOCTYPE html>
<html lang="zxx">
<head>
    <title> HillTown Real-Estate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/magnific-popup.css">
    <link type="text/css" rel="stylesheet" href="assets/css/jquery.selectBox.css">
    <link type="text/css" rel="stylesheet" href="assets/css/dropzone.css">
    <link type="text/css" rel="stylesheet" href="assets/css/rangeslider.css">
    <link type="text/css" rel="stylesheet" href="assets/css/animate.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/leaflet.css">
    <link type="text/css" rel="stylesheet" href="assets/css/slick.css">
    <link type="text/css" rel="stylesheet" href="assets/css/slick-theme.css">  
    <link type="text/css" rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="admin/images/logos/favicon.png" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="assets/css/skins/default.css">
<?php 
//include 'script.php' ;
 ?>
</head>
<body id="top">
 <!--loader.gif 

<div  class="page_loader"></div>

-->  

<!-- main header start -->
<header class="main-header sticky-header" id="main-header-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light rounded">
                    <a class="navbar-brand logo navbar-brand d-flex w-50 mr-auto" href="index.php">
                        <img srcset="admin/images/logos/homelogo.png" alt="logo">

                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="navbar-collapse collapse w-100" id="navbar">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown active">
                                <a class="nav-link dropdown-toggle" href="index.php">Home</a>
                            </li>
							
                            <li class="nav-item dropdown megamenu-li">
                                <a class="nav-link dropdown-toggle" href="about.php">About</a>
                            </li>


                            <li class="nav-item dropdown megamenu-li">
                                <a class="nav-link dropdown-toggle" href="realestate.php">Real Estates</a>
                            </li>
							
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="properties.php">Properties</a>
                                  <div class="dropdown-menu">
              <a class="dropdown-item " href="properties-residentials.php">Residensials</a>
              <a class="dropdown-item " href="properties-apartment.php">Apartments</a>
              <a class="dropdown-item " href="properties-commercial.php">Commercials</a>
              <a class="dropdown-item " href="properties-office.php">Office</a>
            </div>
                            </li>
							                                                        
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="contact.php">Contact</a>
                     
                             <div class="dropdown-menu">
              <a class="dropdown-item " href="about.php#agents">Contact Agents</a>
            </div>
                            </li>
                          
							<li class="nav-item dropdown">
                                <a href="#full-page-search" class="nav-link">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li>
                            
													
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<?php include'include/config.php';
        include 'search.php';?>
<!-- main header end -->
