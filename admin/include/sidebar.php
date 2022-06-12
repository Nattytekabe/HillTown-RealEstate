     <style>    i{		color:indigo;    }  </style>
     <?php
     //admin u_name and picture
     //include '../../admin/login-form/index.php';
include 'include/config.php';
    $name = $_SESSION['username'];
$query=mysqli_query($con, "SELECT * FROM users WHERE username='$name'");
$res=mysqli_fetch_array($query);   
$image = $res['image'];     ?>

		<aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/<?php echo $image; ?>" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome <big><?php echo $_SESSION['username'];?></big></div>
                    <div class="email"><?php echo $res['email']; ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                           
                            <li><a <a href="profile.php#change_password_settings"><i class="material-icons">settings</i>Settings</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="logout.php"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">ADMIN NAVIGATION</li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle" >
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    
                <ul class="ml-menu">
                      
                <li>
                <a href="index.php">  <i class="material-icons">dashboard </i> <span>Dashboard</span>
                              </a>
                            </li>
                           
                       <li>
                      <a href="../index.php">  <i class="material-icons">store</i> <span>Main Site</span>
                              </a>
                            </li>
                            <li>
                      <a href="analytics.php">  <i class="material-icons">analytics     </i> <span>Analytics</span>
                              </a>
                            </li>
                        </ul>

                    </li>
<li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">inbox</i>
                            <span>Inbox</span>
                        </a>
                        <ul class="ml-menu">
                                                        
                     <li>
                        <a href="feedback.php" >
                            <i class="material-icons">comment</i>
                            <span>Feedbacks</span>
                        </a>
                    </li>                               
                     <li>
                        <a href="view_request.php" class="menu-toggle">
                            <i class="material-icons">mail</i>
                            <span>Property Reqests</span>
                        </a>
                        
                    </li>
                </ul>
            </li>
                     
                <a href="javascript:void(0);" class="menu-toggle" >
                     <i class="material-icons">sell</i>     <span>Sales</span>
                        </a>
                    <ul class="ml-menu">                           
                       <li>
                      <a href="view_sale.php">  <i class="material-icons">shop_two     </i> <span>View Sales</span>
                              </a>
                            </li>
                            <li>
                <a href="qr_search.php">  <i class="material-icons">search </i> <span>QRcode Search</span>
                              </a>
                            </li>
                

                        </ul>

                    </li>

<li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">account_balance</i>
                            <span>Real Estates</span>
                        </a>
                        <ul class="ml-menu">
                                                        
                     <li>
                        <a href="feedback.php" >
                            <i class="material-icons">list</i>
                            <span>View Real Estates</span>
                        </a>
                    </li>                               
                     <li>
                        <a href="view_request.php" class="menu-toggle">
                            <i class="material-icons">add</i>
                            <span>Add a Real Estate</span>
                        </a>
                        
                    </li>
                </ul>
            </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">menu</i>
                            <span>Properties</span>
                        </a>
                        <ul class="ml-menu">
                          
                       <li>
                        <a href="view_property.php" class="menu-toggle">
                            <i class="material-icons">list</i>
                            <span>View Property</span>
                        </a>
                    </li>
                         
                           <li>
                        <a href="add_property.php" class="menu-toggle">
                            <i class="material-icons">add</i>
                            <span>Add Property</span>
                        </a>
                    </li>
                    <li>
                        <a href="view_property_image.php" class="menu-toggle">
                            <i class="material-icons">image</i>
                            <span>Property Images</span>
                        </a>
                    </li>  

                    <li>
                        <a href="add_property_image.php" class="menu-toggle">
                            <i class="material-icons">add</i>
                            <span>Add Property Images</span>
                        </a>
                    </li>  

                        </ul>
                    </li>
						 
  <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">person</i>
                            <span>Profile</span>
                        </a>
                        <ul class="ml-menu">
                          
                            <li>
                                  <a href="profile.php">  <i class="material-icons">settings     </i> <span>Profile Setting</span>
                              </a>
                            </li>
                            <li>
                                  <a href="logout.php">  <i class="material-icons">logout </i> <span>Log Out</span>
                              </a>
                            </li>
                           
                        </ul>
                    </li>

            </div>
            <!-- #Menu -->
            
			<!-- Footer -->
            <div class="legal">
                <div class="version">
                    <b>Backend </b> Design and Development
                </div>
                <div class="copyright">
                    &copy; 2021 | A Website by<a href="http://nattytekabe.42web.io" target="_blank"> Nathnael Tekabe</a>.
                </div>
               
            </div>
            <!-- #Footer -->
        </aside>