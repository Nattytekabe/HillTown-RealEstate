  <!-- Search area start -->
<!-- Featured realestates start -->
<div class="featured-properties content-area-19" id="section">
    <div class="container">
        <div class="main-title">
            <h1>Featured Real Estates</h1>
            <p>Our Most Rated Real Estate Parthners.</p>
        </div>


        <div class="row">

               <?php 
        include'include/config.php';
  
$query=mysqli_query($con,"select * from realestate where star > 4 ORDER BY RAND() LIMIT 4");

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
                            
                            <img src="admin/images/realestate_image/<?php echo $img;?>" alt="img-realestate" class="img-fluid">
                        </a>
                        <div class="property-overlay">
                            <a href="realestate-properties.php?id=<?php echo $id;?>" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                            <a class="overlay-link property-video" href="http://google.com/?gws_rd=cr,ssl#q={$name}" target="_blank" title="View Details">
                                <i class="fa fa-search"></i>
                            </a>
                          
                        </div>
                    </div>
                    <!-- detail -->
                    <div class="detail">
                        <h5 class="title"><a href="realestate-properties.php?id=<?php echo $id;?>"><?php echo $res['name']  ?></a></h5>
                        <h4 class="price">
                            Rating <?php 
                              echo $res['star'];
                            if ($res['star'] <= 1 & $res['star'] >= 0) {
                                
                                ?>
                               <i class="fa fa-star"></i>
                                <?php
                                } 
                            else if ($res['star'] <= 1.5 & $res['star'] >= 1.1) {
                                
                                ?>
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star-half-full"></i>
                                <?php
                                } 
                            else if ($res['star'] <= 2 ) {
                                
                                ?>
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star"></i>
                                <?php
                                } 
                            else if ($res['star'] <= 2.5 & $res['star'] >= 2.1) {
                                
                                ?>
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star-half-full"></i>
                                <?php
                                } 

                            else if ($res['star'] <= 3 ) {
                                
                                ?>
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star"></i>
                                <?php
                                } 
                            else if ($res['star'] <= 3.5 & $res['star'] >= 3.1) {
                                
                                ?>
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star-half-full"></i>
                                <?php
                                } 

                            else if ($res['star'] <= 4 ) {
                                
                                ?>
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star"></i>
                                <?php
                                } 
                            else if ($res['star'] <= 4.5 & $res['star'] >= 4.1) {
                                
                                ?>
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star-half-full"></i>
                                <?php
                                } 
                            else if ($res['star'] <= 4.9 & $res['star'] > 4.6) {
                                
                                ?>
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star-half-full"></i>
                                <?php
                                } 

                            else if ($res['star'] = 5 ) {
                                
                                ?>
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star"></i>
                               <i class="fa fa-star"></i>
                                <?php
                                } 

                            ?>    <!---- end of rating stars  ---->
                        </h4>
                        <p><?php echo $res['description']  ?>.</p>
                    </div>
                </div>
            </div><?php //include 'properties-details-small.php'; ?>
              <?php  } ?>


        </div>
    </div>
</div>

<!-- Featured realestates end -->


<!-- Featured properties start -->
<div class="featured-properties content-area-19" id="section">
    <div class="container">
        <div class="main-title">
            <h1>Residential and Apartments</h1>
            <p>Find your interest from ours best collections.</p>
        </div>


        <div class="row">

               <?php 
        include'include/config.php';
  
$query=mysqli_query($con,"select * from property where `property_type`='residential' or  `property_type`='apartment' ORDER BY RAND() LIMIT 4");

while($res=mysqli_fetch_array($query))
{
$id=$res['id'];
$img=$res['image'];

$imgquery=mysqli_query($con,"select * from images where property_id = '$id' ");
$imgres=mysqli_fetch_array($imgquery);
$img1=$imgres['image1'];
$img2=$imgres['image2'];
$img3=$imgres['image3'];
$img4=$imgres['image4'];
$img5=$imgres['floorplan'];

        ?>    
          
  <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInLeft delay-04s">
                <div class="card property-box-2">
                    <!-- property img -->
                    <div class="property-thumbnail">
                        <a href="properties-details.php?id=<?php echo $id;?>" class="property-img">
                            
                            <img src="admin/images/property_image/<?php echo $img;?>" alt="property-3" class="img-fluid">
                        </a>
                        <div class="property-overlay">
                            <a href="properties-details.php?id=<?php echo $id;?>" class="overlay-link">
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
                        <h5 class="title"><a href="properties-details.php?id=<?php echo $id;?>"><?php echo $res['title']  ?></a></h5>
                        <h4 class="price">
                            <?php echo $res['price']  ?> ETB
                        </h4>
                        <p><?php echo $res['description']  ?>.</p>
                    </div>
                </div>
            </div><?php //include 'properties-details-small.php'; ?>
              <?php  } ?>


        </div>
    </div>
</div>

<!-- Featured properties end -->




<!-- Recent Properties start -->
<div class="recent-properties content-area-2">
    <div class="container">
        <div class="main-title">
            <h1>Commercial and Offices'</h1>
            <p> Get a view through our business properties </p>
        </div>



        <div class="row">


               <?php 
        include'include/config.php';
        $query1=mysqli_query($con,"select * from users");
        $admin=mysqli_fetch_array($query1);
        $u_name=ucfirst($admin['email']);

$query=mysqli_query($con,"select * from property where `property_type`='commercial' or  `property_type`='Office' ORDER BY RAND() LIMIT 4");
while($res=mysqli_fetch_array($query))
{
$id=$res['id'];
$img=$res['image'];

        ?>    
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInLeft delay-04s">
                <div class="property-box-8">
                    <div class="property-photo">
                        <img src="admin/images/property_image/<?php echo $img;?>" alt="property-6" class="img-fluid">
                        <div class="date-box">For Sale</div>
                    </div>
                    <div class="detail">
                        <div class="heading">
                            <h3>
                                <a href="properties-details.php?id=<?php echo $id;?>"><?php echo $res['title']  ?></a>
                            </h3>
                            <div class="location">
                                <a href="properties-details.php">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i><?php echo $res['address']  ?>,
                                </a>
                            </div>
                        </div>
                        <div class="properties-listing">
                            <span><?php echo $res['bedroom']  ?> Rooms</span>
                            <span><?php echo $res['bathroom']  ?> Baths</span>
                            <span><?php echo $res['sqr_price']  ?> sqft</span>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div></div>
<!-- Recent Properties end -->


