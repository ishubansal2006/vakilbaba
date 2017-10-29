<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['submit'])==0)
  { 
header('location:index.php');
}
else{
if(isset($_POST['updateprofile']))
  {
$email=$_SESSION['email'];
$name=$_POST['name'];
$mobileno=$_POST['mobileno'];
$expertise=$_POST['expertise'];
$experience=$_POST['experience'];
$court=$_POST['court'];
$consultantfee=$_POST['consultantfee'];
$telfee=$_POST['telfee'];
$filingfee=$_POST['filingfee'];
$adress=$_POST['address'];
$city=$_POST['city'];
$pin=$_POST['pin'];
$state=$_POST['state'];
$sql="update advocatedetails set AdvocateName=:name,Mobile=:mobileno,Expertise=:expertise,Experience=:experience,Court=:court,ConsultantFee=:consultantfee,TelephoneConsultantFee=:telfee,CaseFilingFee=:filingfee,Address=:adress,City=:city,Pin=:pin,State=:state where Email=:email";
$query = $dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':mobileno',$mobileno,PDO::PARAM_STR);
$query->bindParam(':expertise',$expertise,PDO::PARAM_STR);
$query->bindParam(':experience',$experience,PDO::PARAM_STR);
$query->bindParam(':court',$court,PDO::PARAM_STR);
$query->bindParam(':consultantfee',$consultantfee,PDO::PARAM_STR);
$query->bindParam(':telfee',$telfee,PDO::PARAM_STR);
$query->bindParam(':filingfee',$filingfee,PDO::PARAM_STR);
$query->bindParam(':adress',$adress,PDO::PARAM_STR);
$query->bindParam(':city',$city,PDO::PARAM_STR);
$query->bindParam(':pin',$pin,PDO::PARAM_STR);
$query->bindParam(':state',$state,PDO::PARAM_STR);
$query->execute();
$msg="Profile Updated Successfully";
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
<title>Vakil baba | Profile Page</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<link href="assets/css/slick.css" rel="stylesheet">
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> 
</head>
<body>  
  <!--header-->
<?php include('includes/header.php');?>
<!--/header--> 
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
    </style>
</head>
<body>
        
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 
<!--Page Header-->
<section class="page-header profile_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Your Profile</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Profile</li>
      </ul>
    </div>
  </div>
  </section>
<!-- /Page Header--> 


<?php 
$email=$_SESSION['email'];
$sql = "SELECT * from advocatedetails where Email=:email";
$query = $dbh -> prepare($sql);
$query -> bindParam(':email',$email, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>
<section class="user_profile inner_pages">
  <div class="container">
    <div class="user_profile_info gray-bg padding_4x4_40">
      <div class="upload_user_logo"> <img src="assets/images/" alt="image">
      </div>

      <div class="dealer_info">
        <h5><?php echo htmlentities($result->AdvocateName);?></h5>
        <p><?php echo htmlentities($result->Expertise);?><br>
    </div>
    </div>
  
    <div class="row">
            <div class="col-md-6 col-sm-8">
        <div class="profile_wrap">
          <h5 class="uppercase underline">Profile Settings</h5>
          <?php  
         if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
          <form  method="post">
           <div class="form-group">
              <label class="control-label">Expertise -</label>
             <?php echo htmlentities($result->Expertise);?>
            </div>
            <div class="form-group">
              <label class="control-label">Experience -</label>
             <?php echo htmlentities($result->Experience);?>
            </div>
            <div class="form-group">
              <label class="control-label">Name</label>
              <input class="form-control white_bg" name="name" value="<?php echo htmlentities($result->AdvocateName);?>" id="name" type="text"  required>
            </div>
            <div class="form-group">
              <label class="control-label">Phone</label>
              <input class="form-control white_bg" name="mobileno" value="<?php echo htmlentities($result->Mobile);?>" id="mobileno" type="text"  required>
            </div>
            <div class="form-group">
              <label class="control-label">Expertise</label>
              <input class="form-control white_bg" name="expertise" value="<?php echo htmlentities($result->Expertise);?>" id="expertise" type="text" required>
            </div>

            <div class="form-group">
              <label class="control-label">Experience</label>
              <input class="form-control white_bg" value="<?php echo htmlentities($result->EmailId);?>" name="experience" id="experience" type="text" required readonly>
            </div>
              <div class="form-group">
              <label class="control-label">Court</label>
              <input class="form-control white_bg" value="<?php echo htmlentities($result->court);?>" name="court" placeholder="court" id="court" type="text" >
            </div>
            <div class="form-group">
              <label class="control-label">Consultant Fee</label>
              <input class="form-control white_bg" name="consultantfee" value="<?php echo htmlentities($result->Court);?>" placeholder="consultantfee" id="consultantfee" type="text" >
            </div>
            <div class="form-group">
              <label class="control-label">telfee</label>
              <input class="form-control white_bg"  id="telfee" name="telfee" value="<?php echo htmlentities($result->TelephoneConsultantFee);?>" type="text">
            </div>
            <div class="form-group">
              <label class="control-label">Address</label>
              <input class="form-control white_bg" id="adress" name="adress" value="<?php echo htmlentities($result->Address);?>" type="text">
            </div>
            <div class="form-group">
              <label class="control-label">City</label>
              <input class="form-control white_bg" id="city" name="city" value="<?php echo htmlentities($result->City);?>" type="text">
            </div>
            <div class="form-group">
              <label class="control-label">Pin</label>
              <input class="form-control white_bg" id="pin" name="pin" value="<?php echo htmlentities($result->Pin);?>" type="text">
            </div>
            <div class="form-group">
              <label class="control-label">State</label>
              <input class="form-control white_bg" id="state" name="state" value="<?php echo htmlentities($result->State);?>" type="text">
            </div>

            <?php }} ?>
           
            <div class="form-group">
              <button type="submit" name="updateprofile" class="btn">Save Changes <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </div>
          </form>
        </div>
      </div>
  </div>
</section>
<!--/Profile-setting--> 

<<!--Footer -->
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
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>

</body>
</html>
<?php } ?>