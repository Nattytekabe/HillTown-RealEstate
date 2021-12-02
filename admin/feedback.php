<?php 
    include 'log_status.php';
 include('include/header.php');
    require_once('include/config.php');
    if(isset($_GET['del'])){
        $del = $_GET['del'];
        $q = "DELETE FROM feedback WHERE feedback.id = $del";
        $run = mysqli_query($con, $q);
    }
?>
  <section>
                    <?php 
                    include('include/sidebar.php');?>

      <!-- #END# Left Sidebar -->
        <section class="content">
                    <div class="row clearfix">

        <div class="container-fluid body-section container">
            <div class="row">
                <div class="col-md-12">
                    <h2><i class="fa fa-plus-square"></i> All Feedbacks <small>Read/Delete Feedback section</small></h2>
                    
                    <div class="card">
                        <div class="card-content table-responsive table-full-width">
                            <table class="table">
                                <thead class="text-danger">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Phone</th>
                                    <th>Message</th>
                                    <th><center>Delete</center></th>
                                </thead>
                                <tbody>
                                    <?php
                                        $q = "SELECT * FROM feedback ORDER BY feedback.id ASC";
                                        $run = mysqli_query($con, $q);
                                        if(mysqli_num_rows($run) > 0){
                                            while($row = mysqli_fetch_array($run)){
                                        
                                    ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['subject']; ?></td>
                                        <td class="text-primary"><?php echo $row['phone']; ?></td>
                                        <td><?php echo $row['message']; ?></td>
                                        <td><center><a href="feedback.php?del=<?php echo $row['id']; ?>"><i class="material-icons">delete</i></a></center></td>
                                    </tr>
                                    <?php
                                            }
                                        }
                                    ?>
                                    
                                </tbody>
                            </table>

                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div></section>
<?php require_once('include/footer.php');?>