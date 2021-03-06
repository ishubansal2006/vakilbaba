<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['send']))
  {
$name=$_POST['fullname'];
$email=$_POST['email'];
$contactno=$_POST['contactno'];
$message=$_POST['message'];
$sql="INSERT INTO  tblcontactusquery(name,EmailId,ContactNumber,Message) VALUES(:name,:email,:contactno,:message)";
$query = $dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':contactno',$contactno,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Query Sent. We will contact you shortly";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title></title>
<!--Bootstrap -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">

<!--OWL Carousel slider-->
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<!--slick-slider -->
<link href="assets/css/slick.css" rel="stylesheet">
<!--bootstrap-slider -->
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<!--FontAwesome Font Style -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<!--w3 class for circle modal-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<!--new CDN -->

<!--End of New CDN-->
 <style>
    .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
/*new style statement */
 .modal-content {
    background-color: #0099FF;
    position: relative;
    border-radius: 50%;
    width: 100%;
    height: 100vw;
    display: flex;
    justify-content: center;
    align-items: center;
    max-height: 600px;
  }
  #map {
        height: 400px;
        width: 100%;
       }

       #mask {
    overflow: hidden;
    border-radius: 50%;
    position: relative;
    z-index: 99;
    height:500px;
    width: 500px;
    border: 4px solid #000;
}
#mask iframe {
    position: absolute;
    border-radius: 10%;
    top: 0; left: 0;
    z-index: 50;
}
.button {
    background-color: #D3D3D3; /* Green */
    border: none;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.button5 {
  border-radius: 10%;
  
}

.container {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}
/*feedback*/
media screen and (max-width: 767px)
ak.css:295
.feebback {
    right: 0px;
}
@media screen and (max-width: 768px)
ak.css:248
.feebback {
    right: 0px;
}
ak.css:76
.feebback {
    position: absolute;
    z-index: 999;
    right: -107px;
}

/*End of new style statement */
    </style>
</head>
<body >
        
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 
<!--new section-->
<section style="background-image: url('assets/images/bg.jpg')">

<div class="container" >
        <div class="row " style="margin-top: 15%;margin-left: 5%">
          <div class="col-md-6">
           <div class="map">
        <div id="mask">
    <center>
    <iframe width="500" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"  src="http://maps.google.dk/?ie=UTF8&amp;t=m&amp;ll=55.677875,11.075935&amp;spn=0.048395,0.086002&amp;z=13&amp;output=embed"></iframe>
  </center>
       </div>
     </div>
     
   </div>
  
       <div class="col-md-4" style="margin-top:0%">
        <div>
     <center><h1>Address</h1></center>
     <div class="row"></div>
     <i class="fa fa-map-marker fa-3x" style="color:#0d1b3a"><h4 class="section-header text-center" style="text-align: justify;"><b>105, 8 Chabra Complex Verr Shavarkar Block 
Near Laxmi Nagar Distt.Center
DELHI 110092   </b></h4></i>
    
     <i class="fa fa-envelope fa-3x" style="color:#0d1b3a; margin-top: -10px"><h4 class="section-header text-center;" style="padding-top: -5px"><b>info@vakilbaba.com</b></h4></i>
     </div>
    <button type="button" class="button button5" data-toggle="modal" data-target="#myModal" style=": #fff;background: #000; font-weight: bold">Send a message</button>                   
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="background-color: #ffbc51">
          <div class="modal-dialog" role="document">
              <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="col-md-6">
                 <form >
                  <div class="modal-header">
          <h4 class="modal-title">Please Fill Your Details</h4>
        </div>
  <div class="form-group">
    <label for="Name">Name</label>
    <input type="text" class="form-control" id="email">
  </div>
  <div>
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="Phone">Phone</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
  </div>          
            <!-- Modal Footer -->
        </div>
    </div>
</div>

</div>

  </div>
</div>

</div>
</section>



<?php 
$pagetype=$_GET['type'];
$sql = "SELECT Address,EmailId,ContactNo from tblcontactusinfo";
$query = $dbh -> prepare($sql);
$query->bindParam(':pagetype',$pagetype,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>
          <ul>
            <li>
              <div class="icon_wrap"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
              <div class="contact_info_m"><?php   echo htmlentities($result->Address); ?></div>
            </li>
            <li>
              <div class="icon_wrap"><i class="fa fa-phone" aria-hidden="true"></i></div>
              <div class="contact_info_m"><a href="tel:61-1234-567-90"><?php   echo htmlentities($result->EmailId); ?></a></div>
            </li>
            <li>
              <div class="icon_wrap"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
              <div class="contact_info_m"><a href="mailto:contact@exampleurl.com"><?php   echo htmlentities($result->ContactNo); ?></a></div>
            </li>
          </ul>
        <?php }} ?>
        </div>
      </div>
    </div>
  </div>
</section>-->
<!-- /Contact-us--> 


<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form --> 

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>
<!--/Forgot-password-Form --> 

<!-- Scripts --> 
<
<script src="assets/js/interface.js"></script> 
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>

</body>
</html>
