<footer  class="footer">
    <div class="container footer-inner">
        <div class="row">
             <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                <div class="recent-posts footer-item">
                    <h4>Recent Properties</h4>
                 
             <?php 
        include'include/config.php';
        $query1=mysqli_query($con,"select * from admin");
        $admin=mysqli_fetch_array($query1);
        $u_name=ucfirst($admin['email']);

$query=mysqli_query($con,"select * from property ORDER BY RAND() LIMIT 3");
while($res=mysqli_fetch_array($query))
{
$id=$res['id'];
$img=$res['image'];
$title=$res['title'];
$date=$res['date'];

        ?>     
   <div class="media mb-4">
                        <a href="properties-details.php?id=<?php echo $id;?>">
                            <img src="admin/images/property_image/<?php echo $img;?>" alt="sub-property">
                        </a>
                        <div class="media-body align-self-center">
                            <h5>
                                <a href="properties-details.php?id=<?php echo $id;?>"><?php echo $res['title']; ?></a>
                            </h5>
                            <p><?php echo $res['date']; ?></p>
                            <p> <strong><?php echo $res['price']; ?> <b>ETB</b></strong></p>
                        </div>
                    </div>
                <?php } ?>
</div></div>
           <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                <div class="footer-item">
                    <h4>Contact Us</h4>

                    <ul class="contact-info">
                        <li>
                            Address: 20/F Green Road, Dhanmondi, Dhaka
                        </li>
                        <li>
                            Email: <a href="mailto:info@themevessel.com">info@themevessel.com</a>
                        </li>
                        <li>
                            Phone: <a href="tel:+0477-85x6-552">+XXXX XXXX XXX</a>
                        </li>
                    </ul>

                    <ul class="social-list clearfix">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                <div class="footer-item">
                    <h4>
                       <i class="fa fa-sitemap"></i> Sitemap
                    </h4>
                    <ul class="links">
                        <li>
                            <a href="index.php"><i class="fa fa-home"></i>Home</a>
                        </li>
                        <li>
                            <a href="about.php"><i class="fa fa-group"></i>About us</a>
                        </li>
                        <li>
                            <a href="about.php#faq"><i class="fa fa-cog"></i>Service</a>
                        </li>
                        <li>
                            <a href="properties.php"><i class="fa fa-th-large"></i>Properties Grid</a>
                        </li>
                        <li>
                            <a href="contact.php"><i class="fa fa-address-card"></i>Contact Us</a>
                        </li>
                        
                        <li>
                            <a href="admin/index.php"><i class="fa fa-space-shuttle"></i>Admin Dashboard</a>
                        </li>
                    </ul>
                </div>
            </div>

          

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                <div class="footer-item clearfix">
                    <h4>Subscribe</h4>
                    <div class="Subscribe-box">
                        <p>Get our latest updates from your email by subscribing to our website.</p>
                           <form role="form" name="subscribe" id="subscribe" method="post" action="" enctype="multipart/form-data">
                            <p>
                                <input type="text" class="form-contact" name="email" placeholder="Enter Address">
                            </p>
                            <p>
                                <button type="submit" name="submitNewsletter" class="btn btn-block btn-color">
                                    Subscribe
                                </button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
         
        <div class="row">
            <div class="col-xl-12">
                <p class="copy">&copy;  2021 Website by <a  href="http://nattytekabe.42web.io" target="_blank">Nathnael Tekabe</a>.  </p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->


</body>
</html>
<script type="text/javascript">
    
$(document).ready(function(){
$('#subscribe').on('submit',function(){
$('#result').php('submitted');
  });
});

</script>