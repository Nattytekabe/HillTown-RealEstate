<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Live 3D</title>
    <script src='https://kit.fontawesome.com/a076d05399.js'>
       // import { GLTFLoader } from 'three/examples/jsm/loaders/GLTFLoader.js';
    </script>
    <link rel="stylesheet" href="css/style.css">

    <!--Imports a model-viewer JavaScript code -->
    <!--It helps to handle how the 3D Object would be displayed -->
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>
    
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="admin/images/logos/favicon.png" type="image/x-icon" >

</head>

<?php 

include('include/header.php');
include('include/config.php');

extract($_REQUEST);

$id=$_REQUEST['id'];
$query=mysqli_query($con,"select * from property where id='$id'");
$res=mysqli_fetch_array($query);

$id=$res['id'];
$img=$res['image'];
$bedroom=$res['bedroom'];
$bathroom=$res['bathroom'];
$hall=$res['hall'];
$kichan=$res['kichan'];
$balcony=$res['balcony'];
$sqr_price=$res['sqr_price'];
$kithan=$res['kichan'];
$description=$res['description'];
$title=$res['title'];
$price=$res['price'];
$address=$res['address'];
$video=$res['video'];
$property_owner=$res['property_owner'];
$property_type=$res['property_type'];
$lot_size=$res['lot_size'];
$land_area=$res['land_area'];
$sold=$res['sold'];
$address=$res['address'];
$map=$res['location'];
?>
<body>
    <!-- Main Container -->
    <div class="properties-details" id="container">
        <!-- Navbar container -->
  
        <!-- An aside -->
        <!-- This is for holding the 3D object -->
        <div class="container" id="aSide">

            <!-- 3D objsect -->
            <!-- This inserts the 3D object inside the aside container -->
            <model-viewer src="admin/images/3d/<?php echo "$id"; ?>/model.gltf" alt="VR Headset" auto-rotate camera-controls ar ios-src="admin/images/3d/model-<?php echo "$id"; ?>/model.gltf">
            </model-viewer>

        </div>

        <!-- Content container -->
        <!-- This is for holding some brief description about the 3D object -->
        <div class="container" id="content">
            <h2>LIVE 3D </h2>Property: <?php echo "$title";?>
            <p>Freature allows properties to be rendered through VR. </p>
              
                                    <div class="col-md-4 col-sm-6">
                                        <ul>
                                            <li>
                                                <strong>Description:</strong> <?php echo $description;?>
                                            </li>
                                            <li>
                                                <strong>Price:</strong> <?php echo $price;?>/
                                            </li>
                                            <li>
                                                <strong>Type:</strong> <?php echo $property_type;?>
                                            </li>
                                            <li>
                                                <strong>Address:</strong> <?php echo $address;?>
                                            </li>
                                            
                                        </ul>
                                    </div>
                              
            <button type="button" class="btn btn-primary" onclick="window.location.href='properties-details.php?id=<?php echo "$id";?>'">Back to Details</button>
        </div>

        <!-- Social media icons -->
        <!-- This is for holding some company's social media icons and related links -->
        <div id="icons">
            <div id="iconsLogo">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-youtube"></i>
                <i class="fab fa-twitter"></i>
            </div>
        </div>
    </div>
</body>

</html>