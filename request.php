
<div id="request" class="properties-details-page content-area-15">
    <div class="container">
<h3  >Request Property </h3>
<p class="description "> <b style="color: red">Remember : </b> After filling out the form click <b>Send Request</b> and copy the <b>Code</b> reviling on the text box. Click <b>QR-Code</b> button and submit your code.</p>
    <?php
 
        require_once('include/config.php');

       $txt = "";
        $error = "Code will show up here";
        $color = "red";
        if(isset($_POST['submit'])){
            $name = mysqli_real_escape_string($con,$_POST['name']);
            $email = mysqli_real_escape_string($con,$_POST['email']);
            $property = mysqli_real_escape_string($con,$_POST['property']);
            $phone = mysqli_real_escape_string($con,$_POST['phone']);    
            $message = mysqli_real_escape_string($con,$_POST['message']);
       
$n=10;
function getName($n) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
  
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
  
    return $randomString;
}
  
$code = getName($n);

        //  $code = mysqli_real_escape_string($con,$_POST['code']);
      
            $q = "SELECT * FROM request ORDER BY request.id DESC LIMIT 1";
            $r = mysqli_query($con, $q);
            if(mysqli_num_rows($r) > 0){
                $row = mysqli_fetch_array($r);
                $id = $row['id'];
                $id = $id + 1;
            }
            else{
                $id = 1;
            }


            if(empty($name) or empty($email) or empty($phone) or empty($property) or empty($message)){
                $error = "All Feilds Required, Try Again";

            }
            else{
                $insert_query = "INSERT INTO `request`(`id`, `name`, `email`, `property`,`phone` , `message`, `code`) VALUES ('$id','$name','$email','$property','$phone','$message','$code')";
                if(mysqli_query($con, $insert_query)){
                   $txt = "Your code is =";
                    $error = $code;
                    $color = "green";

                   }
                else{
                    $error = "Error occured";
                }
            }
        }
    ?>

<label style="color: <?php echo $txt; ?>">
        <?php
          echo $txt;
        ?>
    <input class="text-primary" type="text" value="<?php echo $error;  ?>" id="myInput">    
       <?//php echo $error;//  echo $code; ?> </b>
       <button class="btn-primary" onclick="myFunction()">Copy Code</button>
    </label></p>

    <form role="form" class="wowload fadeInRight" method="post">
        <div class="form-group">
            <input type="text" name="name" class="form-control"  placeholder="Name">
        </div>
        <div class="form-group">
            <input type="email" name="email" class="form-control"  placeholder="Email">
        </div>
        <div class="form-group">
            <input type="Phone" name="phone" class="form-control"  placeholder="Phone">
        </div>     
         <div  class="form-group">

   <label style="color : darkblue;">Selected Property </label>  
      <select name="property" class="form-control" id="exampleInputcatid" >        
                  <?php
                                $con = mysqli_connect($host,$username, $password, $dbname);
                                $sql = "SELECT * FROM property";
                             $result = mysqli_query($con, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                    echo "<option value=".$id.">".$title."</option>";

                              
                                   ?>

                              </select>
        </div>   
      
        <div class="form-group">
            <textarea class="form-control" name="message" placeholder="Message" rows="3"></textarea>
        </div>
       <div>
    <input type="submit" class="btn btn-primary" value="Send Request" name="submit" onclick = "#request"; window.scrollTo(0,0)>
     
    <a class="btn btn-primary" href="qr.php?id=$id" > <b>QR-CODE</b></a>  
</div>

<div class="layout boxed">
    
</div>
    </form><br>
 
    
  </div></div>
</div>


<script type="text/javascript">
    function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myInput");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

   /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);

  /* Alert the copied text */
  alert(copyText.value + "Copied Successful. Now click to get your QR-CODE button");
} 
</script>

<!-- reservation-information -->

 
      <!-- Comments section start -->
                <!-- Contact 1 start -->   <!--
                <div class="contact-3 mb-60">
                    <h3 class="heading">Send Request</h3>
                    <p> Earn a discount from this form.  </p>
                    <div class="container">
                        <div class="row">
                            <form action="#" method="GET" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group name">
                                            <input type="text" name="name" class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group email">
                                            <input type="email" name="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group subject">
                                            <input type="text" name="subject" class="form-control" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group number">
                                            <input type="text" name="phone" class="form-control" placeholder="Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group message">
                                            <textarea class="form-control" name="message" placeholder="Write message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <div class="send-btn">
                                           
                                            <button type="submit" class="btn btn-color btn-md btn-message">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            

-->