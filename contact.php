<!DOCTYPE html>
<html lang="zxx">
<head>
    
    <!-- End Google Tag Manager -->
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
    <link type="text/css" rel="stylesheet" href="assets/css/map.css">
    <link type="text/css" rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/logos/favicon.png" type="image/x-icon" >

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
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PDTWJ3Z"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) 
<div class="page_loader"></div>
-->
<!-- main header start -->
<header class="main-header" id="main-header-2">
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
       ?>
<!-- main header end -->

<!-- main header end -->

<!-- Sub banner start -->
<div style="background-image: url(assets/img/about.jpg)" class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Contact Us</h1>
            <ul class="breadcrumbs">
                <li><a href="index.php">Home</a></li>
                <li class="active">Contact Us</li>
            </ul>
        </div>
    </div>
</div>

<!-- Sub banner end -->

<!-- Contact 1 start -->
<div class="contact-1 content-area-7">
    <div class="container">
        <div class="main-title">
            <h1>Contact Us</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
<?php
    require_once('include/config.php');
    $error = "";
    $color = "red";
    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($con,$_POST['name']);
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $subject = mysqli_real_escape_string($con,$_POST['subject']);
        $phone = mysqli_real_escape_string($con,$_POST['phone']);
        $message = mysqli_real_escape_string($con,$_POST['message']);

        $q = "SELECT * FROM feedback ORDER BY feedback.id DESC LIMIT 1";
        $r = mysqli_query($con, $q);
        if(mysqli_num_rows($r) > 0){
            $row = mysqli_fetch_array($r);
            $id = $row['id'];
            $id = $id + 1;
        }
        else{
            $id = 1;
        }


        if(empty($name) or empty($email) or empty($subject) or empty($phone) or empty($message)){
            $error = "All Feilds Required, Try Again";

        }
        else{
            $insert_query = "INSERT INTO `feedback`(`id`, `name`, `email`,`subject`, `phone`, `message`) VALUES ('$id','$name','$email','$subject','$phone','$message')";
            if(mysqli_query($con, $insert_query)){
                $error = "We've got your feedback";
                $color = "green";
            }
            else{
                $error = "Error occured";
            }
        }
    }

?>
<label style="color: <?php echo $color; ?>">
                <?php
                    echo $error;
                ?>
            </label>
        <div class="row">
            <div class="col-lg-7 col-md-7 col-md-7">
                <form method="post" role="form" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group name">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group email">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group subject">
                                <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group number">
                                <input type="text" id="phone" name="phone" class="form-control" placeholder="Number">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group message">
                                <textarea class="form-control" id="message" name="message" placeholder="Write message"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="send-btn">
                                <button type="submit" value="send" name="submit" class="btn btn-color btn-md btn-message">Send Message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class=" offset-lg-1 col-lg-4 offset-md-0 col-md-5">
                <div class="contact-info">
                    <h3>Contact Info</h3>
                    <div class="media">
                        <i class="fa fa-map-marker"></i>
                        <div class="media-body">
                            <h5 class="mt-0">Office Address</h5>
                            <p>20/F Green Road, Dhanmondi, Dhaka</p>
                        </div>
                    </div>
                    <div class="media">
                        <i class="fa fa-phone"></i>
                        <div class="media-body">
                            <h5 class="mt-0">Phone Number</h5>
                            <p>Office<a href="tel:0477-0477-8556-552">: XXXX XXXX XXX</a> </p>
                            <p>Mobile<a href="tel:+0477-85x6-552">: +55 417 634 7X71</a> </p>
                        </div>
                    </div>
                    <div class="media mrg-btn-0">
                        <i class="fa fa-envelope"></i>
                        <div class="media-body">
                            <h5 class="mt-0">Email Address</h5>
                            <p><a href="#">info@themevessel.com</a></p>
                            <p><a href="#">http://themevessel.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact 1 end -->

<!-- Google map start -->
<div class="section">
    <div align="center" class="map">
       
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.501841165415!2d38.76448239909399!3d9.017901007523763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b8596e4447f7d%3A0x7d2d64a64dc9c36f!2sHilton%20Addis%20Ababa!5e0!3m2!1sen!2set!4v1635899875657!5m2!1sen!2set" width="1360" height="420" style="border:0;" allowfullscreen="" loading="lazy"></iframe>            
    
    </div>
</div>
<!-- Google map end -->

<!-- Footer start -->
<?php include('include/footer.php');?>

<!-- Full Page Search -->

