<?php
    include 'log_status.php';
include 'include/header.php';
 include('include/sidebar.php');?>  
  <!-- Vertical Layout | With Floating Label -->
             <section class="content">
        <div class="container-fluid">
         
            <div class="row clearfix">
               <!--QR-->
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-light-green">
                            <span><h2 align="code">

<i class="material-icons">person</i> Email   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<i class="material-icons">money</i> Price
<small class="align-left "> Property ID  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Sale ID</small>
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
                            
      <img width="300" src="../temp/nattytekabe.png">
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
