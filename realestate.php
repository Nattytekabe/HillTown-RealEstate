
<?php include('include/header.php');
?><!-- main header end -->

<!-- main header end -->

<!-- Sub banner start -->
<div style="background-image: url(assets/img/about.jpg)" class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Real Estate Details</h1>
            <ul class="breadcrumbs">
                <li><a href="index.php">Home</a></li>
                <li class="active">Real Estate Partner</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- agent start -->

<div id="agents" class="agent content-area-2">
    <div class="container">
        <div class="main-title">
            <h1>Our Real Estate Parthners</h1>
            <p>Browse to your desired brand and explore properties manually. </p>
        </div>
      
   
        <div class="row">

               <?php 
        include'include/config.php';
  
$query=mysqli_query($con,"select * from realestate ");

while($res=mysqli_fetch_array($query))
{
$id=$res['property_owner_id'];
$name=$res['name'];
$img=$res['logo'];
/*
$imgquery=mysqli_query($con,"select * from images where property_id = '$id' ");
$imgres=mysqli_fetch_array($imgquery);
$img1=$imgres['image1'];
*/
        ?>    
          
  <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInLeft delay-04s">
                <div class="card property-box-2">
                    <!-- property img -->
                    <div class="property-thumbnail">
                        <a href="properties-details.php?id=<?php echo $id;?>" class="property-img">
                            
                            <img width="150px" height="150px" src="admin/images/realestate_image/<?php echo $img;?>" alt="img-realestate" class="img-fluid">
                        </a>
                        <div class="property-overlay">
                            <a href="realestate-properties.php?id=<?php echo $id;?>" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video ?id=<?php echo $id;?>" title="View Details">
                                <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="property-magnify-gallery">
                                <a href="admin/images/property_image/<?php echo $img1;?>" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="admin/images/property_image/<?php echo $img2;?>" class="hidden"></a>
                               <a href="admin/images/property_image/<?php echo $img3;?>" class="hidden"></a>
                               <a href="admin/images/property_image/<?php echo $img4;?>" class="hidden"></a>
                                <a href="admin/images/floorplan/<?php echo $img5;?>" class="hidden"></a>
                            </div>
                        </div>
                    </div>
                    <!-- detail -->
                    <div class="detail">
                        <h5 class="title"><a href="realestate-properties.php?id=<?php echo $id;?>"><?php echo $res['name']  ?></a></h5>
                        <h4 class="price">
                            <?php echo $res['star']  ?> Stars
                        </h4>
                        <p><?php echo $res['description']  ?>.</p>
                    </div>
                </div>
            </div><?php //include 'properties-details-small.php'; ?>
              <?php  } ?>


        </div>
    </div>
</div>

<!-- agent end -->

<!-- Counters start -->
<div class="counters overview-bgi" style="background-image: url(assets/img/about.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-tag"></i>
                    <h1 class="counter">500</h1>
                    <h5>Lines of Sale</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-badge"></i>
                    <h1 class="counter">254</h1>
                    <h5>Satisfied Customers</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-call-center-agent"></i>
                    <h1 class="counter">510</h1>
                    <h5>Agents</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-job"></i>
                    <h1 class="counter">94</h1>
                    <h5>Brokers</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counters end -->


<!-- Footer start -->
<?php include('include/footer.php');?>
 <?php include 'script.php'; ?>