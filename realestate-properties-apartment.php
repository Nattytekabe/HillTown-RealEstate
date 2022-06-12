<?php 
include('include/header.php');
include('include/config.php');

extract($_REQUEST);
$id= $_REQUEST['id'];

$sql = "SELECT COUNT(*) AS total from property WHERE `id` = $id AND `property_type` = 'Apartment'";
$result = $con->query($sql);
$data =  $result->fetch_assoc();



$query=mysqli_query($con,"select * from realestate where property_owner_id = $id ");
$resid=mysqli_fetch_array($query);
$name = $resid['name'];

$logo=$resid['logo'];
?>
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

<!-- About us start -->
<div class="about-us content-area-8 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="properties-service-v">
                    <img src="admin/images/realestate_image/<?php echo $logo; ?>" alt="realestate-logo" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-7 align-self-center">
                <div class="about-text more-info">
                    <h3 class="fa fa-chevron-right"> <big> <?php echo $name; ?></big></h3>
                    <div id="faq" class="faq-accordion">
                        <div class="card m-b-0">
                            <div class="card-header">
                                <a class="card-title collapsed" data-toggle="collapse" data-parent="#faq" href="#collapse1">
                             About <?php echo $name; ?>
                                </a>
                            </div>
                            <div id="collapse1" class="card-block collapse">
                                <p><?php echo $resid['description']; ?></p>
                            </div>

                            <div class="card-header">
                                <a class="card-title collapsed" data-toggle="collapse" data-parent="#faq" href="#collapse2">
                                   Portfolio
                                </a>
                            </div>
                            <div id="collapse2" class="card-block collapse">
                                <p>We mark the real estate and brokerage industry with excellence by building an innovative and digital communication .</p>
                            </div>

                            <div class="card-header">
                                <a class="card-title collapsed" data-toggle="collapse" data-parent="#faq" href="#collapse3">
                                   Rating
                                </a>
                            </div>
                            <div id="collapse3" class="card-block collapse">
                                <h3 style="color: gold;"><?php echo $resid['star']; ?> Stars</h3>
                            </div>

                            <div class="card-header bd-none">
                                <a class="card-title collapsed" data-toggle="collapse" data-parent="#faq" href="#collapse4">
                                    Social Media and Related  Links
                                </a>
                            </div>
                            <div id="collapse4" class="card-block collapse">
                                <p>Through our Platform, our users can use our visblity and network to reach more potential buyers or tenant real estate companies. Hilltown is affialted with any real estate company and act dependently to provide local customers the most elite services within reach.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About us end -->

<!-- Properties list fullwidth start -->
<div class="properties-list-fullwidth content-area-2">
    <div class="container">
        <div class="option-bar d-none d-xl-block d-lg-block d-md-block d-sm-block">
            <div class="row clearfix">
                <div class="col-xl-4 col-lg-5 col-md-5 col-sm-5">
                    <h4>
                        <span class="heading-icon">
                            <i class="fa fa-caret-right icon-design"></i>
                            <i class="fa fa-th-large"></i>
                        </span>
                        <span class="heading"><?php echo $name;?>'s List</span>
                    </h4>
                </div>
                
                <div class="col-xl-8 col-lg-7 col-md-7 col-sm-7">
                    <div class="sorting-options clearfix">
                        <a href="properties-grid.php" class="change-view-btn"><i class="fa fa-th"></i></a>
                        <a href="properties.php" class="change-view-btn active-view-btn"><i class="fa fa-th-large"></i></a>
                    </div>
                    <div class="search-area">
                        <select onchange="location = this.value;" class="selectpicker search-fields" name="location">
                           <option value="realestate-properties-office.php?id=<?php echo $id;?>">Office Blgs.</option>
                               <option value="realestate-properties-residentials.php?id=<?php echo $id;?>">Residentials</option>
                            <option value="realestate-properties-apartment.php?id=<?php echo $id;?>">Apartments</option>
                             <option value="realestate-properties-commercial.php?id=<?php echo $id;?>">Commercial</option>
                           <option value="realestate-properties.php">All</option>
                           
                        </select>
                    </div>
                </div>
            </div>
        </div>
   

        <div class="subtitle">
             Result Found : <?php echo $data['total'];//number of tables in property   ?>
        </div>
        <div class="row">
        <?php 
        include'include/config.php';
        $query1=mysqli_query($con,"select * from admin");
        $admin=mysqli_fetch_array($query1);
        
        $u_name=ucfirst($admin['email']);

$query=mysqli_query($con,"select * from property WHERE `id` = $id AND `property_type` = 'Apartment' ");
while($res=mysqli_fetch_array($query))
{
$id=$res['id'];
$img=$res['image'];
$date=$res['date'];
        ?>    
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="property-box">
                    <div class="property-thumbnail">
                        <a href="properties-details.php?id=<?php echo $id;?>" class="property-img">
                            <div class="tag button alt featured">Featured</div>
                            <div class="price-ratings-box">
                                <p class="price">
                                    $ <?php echo $res['price'];?>
                                </p>

                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <img src="admin/images/property_image/<?php echo $img;?>" alt="property-1" class="img-fluid">
                        </a>
                        <div class="property-overlay">
                            <a href="properties-details.php?id=<?php echo $id;?>" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                           <!-- <a class="overlay-link property-video" title="Test Title">
                                <i class="fa fa-video-camera"></i>
                            </a>-->
                            <div class="property-magnify-gallery">
                                <a href="admin/images/property_image/<?php echo $img;?>" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title">
                            <a href="properties-details.php?id=<?php echo $id;?>"><?php echo $res['title'];?></a>
                        </h1>
                        <div class="location">
                            <a href="properties-details.php?id=<?php echo $id;?>">
                                <i class="fa fa-map-marker"></i><?php echo $res['address'];?>
                            </a>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-bed"></i> <?php echo $res['bedroom'];?> : Bedroom
                            </li>
                            <li>
                                <i class="flaticon-bath"></i> <?php echo $res['hall'];?> : Hall
                            </li>
                            <li>
                    <i class="flaticon-square-layouting-with-black-square-in-east-area"></i><?php echo $res['sqr_price'];?> Sq Ft
                            </li>
                            <li>
                                <i class="fa fa-coffee"></i> <?php echo $res['kichan'];?> : kitchen
                            </li>
                        </ul>
                    </div>
                    <div class="footer">
                        <a href="#">
                            <i class="fa fa-user"></i> <?php echo $u_name;?>
                        </a>
                        <span>
                                <i class="fa fa-calendar-o"></i> <?php echo $date;?>
                            </span>
                    </div>
                </div>
            </div>
<?php } ?>
            
        </div>
    </div>
</div>
<!-- Properties list fullwidth end -->

<!-- Footer start -->
<?php include('include/footer.php');
include('script.php');
?>