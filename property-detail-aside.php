<!-- Recent posts start -->   
   <div class="widget recent-posts">
   <h5 class="sidebar-title">Recent Properties</h5>
   
  <?php 
        include'include/config.php';
        $query1=mysqli_query($con,"select * from admin");
        $admin=mysqli_fetch_array($query1);
        $u_name=ucfirst($admin['email']);

$query=mysqli_query($con,"select * from property ORDER BY RAND() LIMIT 4");
while($res=mysqli_fetch_array($query))
{
$id=$res['id'];
$img=$res['image'];
$title=$res['title'];
$date=$res['date'];

        ?>     
                 <div class="media mb-4" >
         
                            <a href="properties-details.php?id=<?php echo $id;?>">
                                <img src="admin/images/property_image/<?php echo $img;?>" alt="sub-property">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    <a href="properties-details.php?id=<?php echo $id;?>">
                                        <?php echo $title;?></a>
                                </h5>
                                <p><i class="fa fa-calendar-o"></i> <?php echo $date;?>  </p>
                                <p> <strong><?php echo $res['price'];?> <b>ETB</b></strong></p>
                            </div>
                        </div>

<?php } ?>
                    <!-- Social list start -->
                    <div class="social-list widget clearfix">
                        <h5 class="sidebar-title">Follow us on:</h5>
                        
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a> &nbsp;&nbsp;&nbsp;
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>   &nbsp;&nbsp;&nbsp;
            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>&nbsp;&nbsp;&nbsp;
            <a href="#" class="instagram"><i class="fa fa-google-plus"></i></a>&nbsp;&nbsp;&nbsp;
            <a href="#" class="instagram"><i class="fa fa-telegram"></i></a>&nbsp;&nbsp;&nbsp;
            <a href="#" class="instagram"><i class="fa fa-whatsapp"></i></a>&nbsp;&nbsp;&nbsp;
            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        
                    </div>

                    <!-- Helping center start -->
                    <div style="background-image: url(assets/img/call.jpg)" class="helping-center widget clearfix">
                        <div class="media">
                            <i class="fa fa-mobile"></i>
                            <div class="media-body  align-self-center">
                                <h5 class="mt-0">Call Now!</h5>
                                <h4><a href="tel:+0477-85x6-552">+2519 44318753</a></h4>
                            </div>
                        </div>
                </div>
                    <!-- Financing calculator  start -->
                  
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Properties details page end -->


               