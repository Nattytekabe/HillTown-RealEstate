<?php 
    //include 'log_status.php';

include('include/header.php');?>
    <!-- Header -->
	
    <section>
       
	   <!-- Left Sidebar -->
<?php include('include/sidebar.php');
     include('include/rightsidebar.php');
?>
        <!-- #END# Left Sidebar -->

  
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!--- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">NEW TASKS</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
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
                             ?>
                            <div class="text">Total Requests</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $req; ?>" data-speed="1000" data-fresh-interval="20"></div>
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
$sql = "SELECT COUNT(*) AS total from feedback";
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
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">check</i>
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
            </div>
            <!-- #END# Widgets -->
            <div class="row clearfix">
                <!-- Visitors -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-pink">
                            <div class="sparkline" data-type="line" data-spot-Radius="4" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#fff"
                                 data-min-Spot-Color="rgb(255,255,255)" data-max-Spot-Color="rgb(255,255,255)" data-spot-Color="rgb(255,255,255)"
                                 data-offset="90" data-width="100%" data-height="92px" data-line-Width="2" data-line-Color="rgba(255,255,255,0.7)"
                                 data-fill-Color="rgba(0, 188, 212, 0)">
                                12,10,9,6,5,6,10,5,7,5,12,13,7,12,11
                            </div>
                            <ul class="dashboard-stat-list">
                                <li>
                                    TODAY
                                    <span class="pull-right"><b>1 200</b> <small>USERS</small></span>
                                </li>
                                <li>
                                    YESTERDAY
                                    <span class="pull-right"><b>3 872</b> <small>USERS</small></span>
                                </li>
                                <li>
                                    LAST WEEK
                                    <span class="pull-right"><b>26 582</b> <small>USERS</small></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Visitors -->

                
            </div>
        </div>
    </section>
<?php include'include/footer.php';?>
	
    