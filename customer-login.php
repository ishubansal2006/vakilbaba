<?php
session_start();
include('includes/config.php');
error_reporting(0);

file_put_contents("error/error.txt", "\r\n".date("Y-m-d H:i:s"). " submit post request:". $_POST['submit']. " ", FILE_APPEND);

if(isset($_POST['submit']))
{

file_put_contents("error/error.txt", "\r\n".date("Y-m-d H:i:s"). " email:". $_POST['email']. " ", FILE_APPEND);

$email=$_POST['email'];
$password=$_POST['password'];
$sql ="SELECT * FROM customerdetails WHERE Email=:email and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', md5($password), PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
	file_put_contents("error/error.txt", "\r\n".date("Y-m-d H:i:s"). " inside if:", FILE_APPEND);
	$_SESSION['submit'] = 1;
	$_SESSION['email'] = $email;
	header('location:customer-profile.php');
	exit;
} else{
  file_put_contents("error/error.txt", "\r\n".date("Y-m-d H:i:s"). " inside else : ", FILE_APPEND);
  echo "<script>alert('Invalid Details');</script>";

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
<title>Vakil baba- Best vakil services</title>
<!--Bootstrap -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
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

		<div class="container" style="margin-top: 150px">
			<h3 style="color: #000;" class="section-header text-center">Login To Your Vakilbaba account</h3>
			<div class="col col-md-5 col-md-offset-4">
			<div class="row">
				<form action="advocate-login.php" method="post">
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" name="email" placeholder="your email-id" class="form-control" required/>
					</div>
					<div class="form-group">
						<label for="password">Login Pasword:</label>
						<input type="password" name="password" placeholder="your password" class="form-control" required/>
					</div>
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-primary register" style="background-color: #FFBC51; color: #000">
					</div>
					</form>
					<p><a href="#forgotpassword" data-toggle="modal" data-dismiss="modal">Forgot Password ?</a></p>
			</div>
			</div>				
</div>
<div class="modal fade" id="forgotpassword">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Password Recovery</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="forgotpassword_wrap">
            <div class="col-md-12">
              <form name="chngpwd" method="post" onSubmit="return valid();">
                <div class="form-group">
                  <input type="email" name="email" class="form-control" placeholder="Your Email address*" required="">
                </div>
  <div class="form-group">
                  <input type="text" name="mobile" class="form-control" placeholder="Your Reg. Mobile*" required="">
                </div>
  <div class="form-group">
                  <input type="password" name="newpassword" class="form-control" placeholder="New Password*" required="">
                </div>
  <div class="form-group">
                  <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password*" required="">
                </div>
                <div class="form-group">
                  <input type="submit" value="Reset My Password" name="update" class="btn btn-block" style="background-color: #FFBC51; color: #000">
                </div>
              </form>
              <div class="text-center">
                <p><a href="#loginform" data-toggle="modal" data-dismiss="modal"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Back to Login</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include('includes/config.php');
if(isset($_POST['update']))
  {
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$newpassword=md5($_POST['newpassword']);
  $sql ="SELECT Email FROM advocatedetails WHERE Email=:email and Mobile=:mobile";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':mobile', $mobile, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
$con="update advocatedetails set Password=:newpassword where Email=:email and Mobile=:mobile";
$chngpwd1 = $dbh->prepare($con);
$chngpwd1-> bindParam(':email', $email, PDO::PARAM_STR);
$chngpwd1-> bindParam(':mobile', $mobile, PDO::PARAM_STR);
$chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
$chngpwd1->execute();
echo "<script>alert('Your Password succesfully changed');</script>";
}
else {
echo "<script>alert('Email or Mobile number is invalid');</script>"; 
}
}

?>
  <script type="text/javascript">
function valid()
{
if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
{
alert("New Password and Confirm Password Field do not match  !!");
document.chngpwd.confirmpassword.focus();
return false;
}
return true;
}
</script>

</body>
<!--footer-->
<?php// include 'includes/footer.php';?>
<!--/footer-->