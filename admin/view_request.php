
<?php     include 'log_status.php';
include('include/header.php');?>
<?php 
    require_once('include/config.php');
    if(isset($_GET['del'])){
        $del = $_GET['del'];
        $q = "DELETE FROM request WHERE request.id = $del";
        $run = mysqli_query($con, $q);
    }
?>
  </head>
  <body>
    <div id="wrapper">
<?php 
require_once('include/sidebar.php');
?>
      <section class="content">
                    <div class="row clearfix">

       <div class="container-fluid body-section container">
            <div class="row">
                <div class="col-md-12">
                    <h2><i class="fa fa-plus-square"></i> Property Requests <small>Read/Delete Request Section</small></h2>
                    
                    <div class="card">
                        <div class="card-content table-responsive table-full-width">
                            <table class="table">
                                <thead class="text-danger">
                                    <th><center>ID</center></th>
                                    <th><center>Name</center></th>
                                    <th><center>Email</center></th>
                                    <th><center>Phone</center></th>
                                    <th><center>Property_id</center></th>
                                    <th><center>Message</center></th>
                                    <th><center>Code</center></th>
                                     <th><center>Date</center></th>
                                      <th><center>QR code</center></th>
                                     <th><center>Delete</center></th>
                                </thead>
                                <tbody>
                                    <?php
                                        $q = "SELECT * FROM request ORDER BY request.id ASC";
                                        $run = mysqli_query($con, $q);
                                        if(mysqli_num_rows($run) > 0){
                                            while($row = mysqli_fetch_array($run)){
                                        
                                    ?>
                                    <tr>
                                        <td><center><?php echo $row['id']; ?></center></td>
                                        <td><center><?php echo $row['name']; ?></center></td>
                                        <td><center><?php echo $row['email']; ?></center></td>
                                        <td class="text-primary"><center><?php echo $row['phone']; ?></center></td>
                                        <td><center><?php echo $row['property']; ?></center></td>
                                     <td><center><?php echo $row['message']; ?></center></td>
                                        <td><center><?php echo $row['code']; ?></center></td>
                                         <td><center><?php echo $row['date']; ?></center></td>
                                          <td><center>
 <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                            <a href="../temp/<?php echo $row['qr'];?>.png"><img src="../temp/<?php echo $row['qr'];?>.png" width="120"></a></center></td>
                                        <td><center><a href="view_request.php?del=<?php echo $row['id']; ?>"><i class="material-icons">delete</i></a></center></td>
                                    </tr>
                                    <?php
                                            }
                                        }
                                    ?>
                                    
                                </tbody>
                            </table>

                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
</div></section></div>
<?php require_once('include/footer.php');?>