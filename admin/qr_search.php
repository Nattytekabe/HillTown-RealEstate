<?php
    include 'log_status.php';
include 'include/header.php';
 include('include/sidebar.php');
 $qr = "nattytekabe";
if(isset($_POST['submit']) ) {
   
    $email = $_POST['email'];
    $code =  $_POST['code'];
   // $date = date('l, F j, Y');

$sql = "SELECT * FROM `request` WHERE `email`='$email' AND `code` ='$code'";
//echo $body,$subject,$email,$date,$qr;
$results= mysqli_query($con,$sql);
if (!$results) 
    echo 'Could not run query: ' . mysql_error();

$row = mysqli_fetch_row($results);
$name = $row[1];
$phone = $row[4];
$qr = $row[8];
}
 ?>  
  <!-- Vertical Layout | With Floating Label -->
             <section class="content">
        <div class="container-fluid">
         
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Search QR-CODE
                                <small>Fill the form with the contacts information</small>
                            </h2>
                          </div>
                        <div class="body">
                            <?php
                       // echo $email;
                             ?>
                             <form method="post" action="#">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="email" id="email_address" class="form-control">
                                        <label class="form-label">Email Address</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="code" id="code" name="code" class="form-control">
                                        <label class="form-label">Code</label>
                                    </div>
                                </div>
                                <button type="submit" value="submit" class="btn btn-primary m-t-15 waves-effect">Search</button> 
                            </form>
                        </div>
                    </div>
                </div>
                <!--QR-->
              <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-light-green">
                            <span><h2 align="code">

<i class="material-icons">person</i> Username  -
<i class="material-icons">code</i> Code
<small class="align-left "> PhoneNumber  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Email</small>
                            </h2></span>
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
                                        <li><a href="javascript:void(0);">Add Sale</a></li>
                                        <li><a href="javascript:void(0);">Drop Request</a></li>
                                        <li><a href="javascript:void(0);">Generate QR-CODE</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body align-center">
                            
      <img width="300" src="../temp/<?php echo $qr ?>.png">
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
