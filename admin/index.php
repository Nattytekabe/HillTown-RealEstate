<?php
    include 'log_status.php';
include 'include/header.php';
 include('include/sidebar.php');?>  
<head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>

</head>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <!-- logged in user information and fetch user data 
    <?php  
include 'include/config.php';
    $name = $_SESSION['username'];
$query=mysqli_query($con, "SELECT * FROM users WHERE username='$name'");
$res=mysqli_fetch_array($query);
    if (isset($_SESSION['username'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['username'];
        echo $res['email']; 
    ?></strong></p>
        <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>-->
                <h2>DASHBOARD</h2>
            </div>

            <!--- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-indigo hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">house</i>
                        </div>
                        <div class="content">
                              <?php 
include'include/config.php';
$sqlone = "SELECT * FROM `property` ";
$results= mysqli_query($con,$sqlone);
if (!$results) {
    echo "";
}else{
$row = mysqli_fetch_row($results);
$property1="Residential";
$property2="Apartment";

$sql = "SELECT COUNT(*) AS total from property where `property_type` = '$property1' or `property_type` = '$property2' ";
$result = $con->query($sql);
$data =  $result->fetch_assoc();
$final_result = $data['total']; 
}                             ?>
                            <div class="text">Residential|Apartments</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $final_result; ?>" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-amber hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">account_balance</i>
                        </div>
                        <div class="content">

    <?php 
include'include/config.php';
$sql = "SELECT COUNT(*) AS total from property";
$result = $con->query($sql);
$data =  $result->fetch_assoc();
$feedback = $data['total']; 
                             ?>
                            <div class="text">Total Properties</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $feedback; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">

    <?php 
include'include/config.php';
$sql = "SELECT COUNT(*) AS total from feedback ";
$result = $con->query($sql);
$data =  $result->fetch_assoc();
$feedback = $data['total']; 
                             ?>
                            <div class="text">Feedbacks</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $feedback; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">mail</i>
                        </div>
                        <div class="content">
                             <?php 
include'include/config.php';

$sql = "SELECT COUNT(*) AS total from request"; //
$result = $con->query($sql);
$data =  $result->fetch_assoc();
$req = $data['total']; 
//$qr = $result['qr'];                             ?>
                            <div class="text">Total Requests</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $req; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>


              
            </div>
            <!-- #END# Widgets -->

            
            <!---           Widgets 2                 -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-deep-purple hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">business</i>
                        </div>
                        <div class="content">
                                <?php 
include'include/config.php';
$sqlone = "SELECT * FROM `property` ";
$results= mysqli_query($con,$sqlone);
if (!$results) {
    echo "";
}else{
$row = mysqli_fetch_row($results);
$property1="Commercial";
$property2="Office";

$sql = "SELECT COUNT(*) AS total from property where `property_type` = '$property1' or `property_type` = '$property2' ";
$result = $con->query($sql);
$data =  $result->fetch_assoc();
$final_result = $data['total']; 
}                             ?>
                            <div class="text">Commercials|Offices</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $final_result; ?>" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
           
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">sell</i>
                        </div>
      <?php 
include'include/config.php';
$sql = "SELECT COUNT(*) AS total from property where sold = 'Yes'";
$result = $con->query($sql);
$data =  $result->fetch_assoc();
$sold = $data['total']; 
?>
                        <div class="content">
                            <div class="text">Properties Sold</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $sold  ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-deep-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">collections_bookmark</i>
                        </div>
      <?php 
include'include/config.php';
$sql = "SELECT COUNT(*) AS total from property where sold = 'No'";
$result = $con->query($sql);
$data =  $result->fetch_assoc();
$sold = $data['total']; 
?>
                        <div class="content">
                            <div class="text">Available Properties</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $sold  ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-blue hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">format_shapes</i>
                        </div>
                        <div class="content">
                             <?php 
include'include/config.php';
$sql = "SELECT COUNT(*) AS total from request where `qr` IS NOT NULL AND TRIM(qr) <> ' ';"; //
$result = $con->query($sql);
$data =  $result->fetch_assoc();
$req = $data['total']; 
//$qr = $result['qr'];                             ?>
                            <div class="text">QR Valid Requests</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $req; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
          
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-light-blue">
                            <h2>
                                Light Blue - Title <small>Description text here...</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li>
                                    <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="timer" data-loading-color="lightBlue">
                                        <i class="material-icons">loop</i>
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque volutpat, etiam lacinia netus dictum magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-light-green">
                            <h2>
                                Light Green - Title <small>Description text here...</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li>
                                    <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="rotation" data-loading-color="lightGreen">
                                        <i class="material-icons">loop</i>
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque volutpat, etiam lacinia netus dictum magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-amber">
                            <h2>
                                Amber - Title <small>Description text here...</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li>
                                    <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse" data-loading-color="amber">
                                        <i class="material-icons">loop</i>
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            Quis pharetra a pharetra fames blandit. Risus faucibus velit Risus imperdiet mattis neque volutpat, etiam lacinia netus dictum magnis per facilisi sociosqu. Volutpat. Ridiculus nostra.
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </section>
<?php include'include/footer.php';?>

   
    <!-- Custom Js -->
  
    <script src="js/pages/cards/colored.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
  
</body>
</html>
