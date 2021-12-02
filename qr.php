<!DOCTYPE html>
<html lang="zxx">
<head>
    
    <!-- End Google Tag Manager -->
    <title> HillTown QR Validation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/magnific-popup.css">
    <link type="text/css" rel="stylesheet" href="assets/css/jquery.selectBox.css">
    <link type="text/css" rel="stylesheet" href="assets/css/dropzone.css">
    <link type="text/css" rel="stylesheet" href="assets/css/rangeslider.css">
    <link type="text/css" rel="stylesheet" href="assets/css/animate.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/leaflet.css">
    <link type="text/css" rel="stylesheet" href="assets/css/slick.css">
    <link type="text/css" rel="stylesheet" href="assets/css/slick-theme.css">
    <link type="text/css" rel="stylesheet" href="assets/css/map.css">
    <link type="text/css" rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/logos/favicon.png" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="assets/css/skins/default.css">

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PDTWJ3Z"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) 
<div class="page_loader"></div>
-->
<!-- main header start -->
<header class="main-header " id="main-header">
    <div class="container">
        <div class="row center">
             <br><br>       <a class="navbar-brand logo navbar-brand d-flex w-50 mr-auto" href="index.php">
                        <img srcset="admin/images/logos/homelogo.png" alt="logo">

                    </a>
</header>











<div style="background-image: url(assets/img/about.jpg)" class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>QR-Code Section</h1>
            <ul class="breadcrumbs">
                <li><a href="index.php">Home</a></li>
                <li class="active">QR-Code Section</li>
            </ul>
        </div>
    </div>
</div>

<!-- Sub banner end -->

<!-- QR start -->
<div class="contact-1 content-area-7">
    <div class="container">
        <div class="main-title">
            <h1>QR Code Section</h1>
            <p>This form is the last step for finalizing your purchase.</p><small> Fill the provided field and download QR code image when you buy with your moblie banking app.</small>
        </div><?php


include'include/config.php'; 
//<!--Header part_-->
//include('include/header.php');

//banks input
   $bankPin = "6969HillTown";
    $telebirr = "10000_HilltownTELEbirr";
    $cbe = "10000_HilltownCBEbirr";
    $amole = "10000_HilltownAmole";



$f = "visit.php";
if(!file_exists($f)){
	touch($f);
	$handle =  fopen($f, "w" ) ;
	fwrite($handle,0) ;
	fclose ($handle);
}
 include ('include/config.php');
//loading QR postions for "Email, Subject & Body" as its Standard... but our case we collect the "Bank account, Code, Price" in order to push request to generate qr code for purchasing property.
include('libs/phpqrcode/qrlib.php'); 
$err = "QR Results";
$bank = "error";	
function getUsernameFromEmail($email) {
	$find = '@';
	$pos = strpos($email, $find);
	$username = substr($email, 0, $pos);
	return $username;
}


//loading pauses to collect the input data
if(isset($_POST['submit']) ) {
	$tempDir = 'temp/'; 
	$email = $_POST['mail'];
	$subject =  $_POST['subject'];
	$filename = getUsernameFromEmail($email);
	$body =  $_POST['msg'];

   if(!isset($_POST['bank'])){
        $bank = "default";
        echo "Select Your Banking Payment Method ";
    }else{
    $bank = $_POST['bank'];   
}

$sql = "SELECT * FROM `request` WHERE `email`='$email' AND `name`='$subject' AND `code` ='$body'";
//echo $body,$subject,$email,$date,$qr;
$results= mysqli_query($con,$sql);
if (!$results) 
    echo 'Could not run query: ' . mysql_error();

$row = mysqli_fetch_row($results);
$id = $row[0];

//*********** Retriving property price by searching with property id 
$requested_property_id = $row[3];
$property_query=mysqli_query($con,"select * from property where id='$requested_property_id'");
$result=mysqli_fetch_array($property_query);
//$property_id=$res['id'];  testing... awesome it worked we'll be using the line below for line 124 [$codeContents....]
$property_price=$result['price'];
//******************

    if ($row[2]!=$email and $row[1]!=$subject and $row[6]!=$body) {
$err = "QR INVALID";
$err2 = "Request code was not found ";
	echo $err;
	}
    else if ($bank != "default"){
        
//sending data to qr generato
    $codeContents = 'mailto:'.$bank.'?subject='.urlencode($bankPin).'&body='.urlencode($property_price); 
    QRcode::png($codeContents, $tempDir.''.$filename.'.png', QR_ECLEVEL_L, 5);
    $qr = $filename;
    $date = date('l, F j, Y');
    //
		$err = "QR VALID";
		$query = "UPDATE `request` SET `date`= '$date',`qr`='$qr' WHERE `id`='$id' ";
 $res = mysqli_query($con,$query);
   //	echo $property_price;
}
 else if ($bank = "default"){
$err = "QR INVALID";
 }
}
?>

        <div class="row">
            <div class="col-lg-7 col-md-7 col-md-7">
                <form form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group name">
                               <label>Name</label>
                                <input type="text" class="form-control" name="subject" style="width:20em;" placeholder="i.e. Jhon Doe" value="<?php echo @$subject; ?>" required pattern="[a-zA-Z .]+" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group email">
                              <label>Email</label>  <input  type="email" class="form-control" name="mail" style="width:20em;" placeholder="i.e. JhonDoe@gmail.com" value="<?php echo @$email; ?>" required class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group subject">
                              <label>Code</label>
                                <input type="text" class="form-control" name="msg" value="<?php echo @$body; ?>" required pattern="[a-zA-Z0-9 .]+" placeholder="Paste your code here">
                            </div>
                            <div class="form-group subject" >
                              <label>Select your Bank</label>
                                <select type="Select" class="form-control" name="bank" value="<?php echo @$bank; ?>">
                                    <option selected="yes" disabled="yes" > Select Payment </option>
                                    <option value="<?php echo @$telebirr; ?>" > Tele Birr </option>
                                    <option value="<?php echo @$cbe; ?>"> CBE Birr </option>
                                    <option value="<?php echo @$amole; ?>" > Dashen Amole </option>
                                </select>
                            </div>
                        </div><label> </label>
                       
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="send-btn">
                                <button type="submit" value="send" name="submit" class="btn btn-color btn-md btn-message">Submit Code</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class=" offset-lg-1 col-lg-4 offset-md-0 col-md-5">
                <div class="contact-info">
                	<?php
			if(!isset($filename)){
				$filename = "author";
			}

			?>
			<div class="qr-field">
				<h2 style="text-align:center; size: small;"> <?php echo $err; ?> </h2>
				<center>
					<div class="qrframe" style="border:2px solid black; width:210px; height:210px;">
							<a href="temp/<?php echo @$filename; ?>.png"><?php echo '<img name="file" src="temp/'. @$filename.'.png" style="width:200px; height:200px;"><br>'; ?> </a>
					</div>
					<a class="btn btn-primary submitBtn" style="width:210px; margin:5px 0;" href="download.php?file=<?php echo $filename; ?>.png ">Download QR Code</a>
					<?php $qr = $filename; ?>
				</center>
			</div><br>
                    <div class="media">
                        <i class="fa fa-qrcode"></i>
                        <div class="media-body">
                            <h5 class="mt-0">5% Discount for Request</h5>
                            <p> QR Code must be valid for Discount </p>
                        </div>
                    </div>                  
                </div>
          
<!-- QR end -->











	<script src="libs/navbarclock.js"></script>
	</head>
	
		</div></div></div>
			
		</div>
	</body><?php
     include 'partner.php';
     include 'include/footer.php';
    ?>
</html>