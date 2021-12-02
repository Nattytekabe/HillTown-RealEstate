<?php 
include('include/header.php');
include('include/config.php');
$sql = "SELECT COUNT(*) AS total FROM `property` WHERE `property_type` = 'Commercial'";
$result = $con->query($sql);
$data =  $result->fetch_assoc();
?>
<!-- main header end -->

<!-- Sub banner start -->
    <div style="background-image: url(assets/img/about.jpg)" class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Properties Grid</h1>
            <ul class="breadcrumbs">
                <li><a href="index.php">Home</a></li>
                <li class="active">Properties Grid</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

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
                        <span class="heading">Commercial Properties Grid</span>
                    </h4>
                </div>
                
                <div class="col-xl-8 col-lg-7 col-md-7 col-sm-7">
                    <div class="sorting-options clearfix">
                         <a href="properties-grid.php" class="change-view-btn"><i class="fa fa-th"></i></a>
                        <a href="properties.php" class="change-view-btn active-view-btn"><i class="fa fa-th-large"></i></a>
                    </div>
                    <div class="search-area">
                        <select onchange="location = this.value;"  class="selectpicker search-fields" name="location">
                           <option value="properties.php">All</option>
                               <option  value="properties-residentials.php">Residentials</option>
                            <option  value="properties-apartment.php">Apartments</option>
                             <option selected="yes" value="properties-commercial.php">Commercial</option>
                            <option value="properties-office.php">Office Blgs.</option>
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

$query=mysqli_query($con,"SELECT * FROM `property` WHERE `property_type` = 'Commercial' ");
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

                <div class="tab-content">
                    <div class="container">
                    <h5 class="sidebar-title">
    <span class="heading-icon">
                         <i class="fa fa-caret-right icon-design"></i> 
                            <i class="fa fa-search"></i>  
                        </span>
                        <span class="heading">Advanced Search</span>
                    </h5>
                    <div class="search-area-inner">
                        <div class="search-contents ">
                            <form method="GET">
                                <div class="form-group">
                                    <label>Area From</label>
                                    <select class="selectpicker search-fields" name="area">
                                        <option>Area From</option>
                                        <option>1500</option>
                                        <option>1200</option>
                                        <option>900</option>
                                        <option>600</option>
                                        <option>300</option>
                                        <option>100</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Property Status</label>
                                    <select class="selectpicker search-fields" name="Status">
                                        <option>Property Status</option>
                                        <option>For Sale</option>
                                        <option>For Rent</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Location</label>
                                    <select class="selectpicker search-fields" name="Location">
                                        <option>Location</option>
                                        <option>United Kingdom</option>
                                        <option>American Samoa</option>
                                        <option>Belgium</option>
                                        <option>Canada</option>
                                        <option>Delaware</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Property Types</label>
                                    <select class="selectpicker search-fields" name="types">
                                        <option>Property Types</option>
                                        <option>Residential</option>
                                        <option>Commercial</option>
                                        <option>Land</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Bedrooms</label>
                                    <select class="selectpicker search-fields" name="bedrooms">
                                        <option>Bedrooms</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>2 Bathrooms</label>
                                    <select class="selectpicker search-fields" name="bedrooms">
                                        <option>2 Bathrooms</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label>Price</label>
                                    <div class="range-slider">
                                        <div data-min="0" data-max="10000000" data-unit="ETB" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <br/>
                                <button class="search-button btn-md btn-color">Search</button>
                            </form>
                        </div>
                    </div>
                </div></div>
<!-- Footer start -->
<?php include('include/footer.php');?>