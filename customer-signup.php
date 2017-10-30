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

    <div class="container" style="margin-top: 100px">
      <h3 style="color: #000" class="section-header text-center">Create your account with Vakilbaba to and book an appointment with legal expertise</h3>
      <div class="col col-md-6 col-md-offset-3">          
        <form action="customer-signup.php" method="POST">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="your name" class="form-control" required/>
          </div>
          <div class="form-group">
            <label for="name">Email:</label>
            <input type="email" name="email" id="email" placeholder="your email-id" class="form-control" required/>
          </div>
          <div class="form-group">
            <label for="name">Mobile:</label>
            <input type="tel" name="mobile" id="mobile" placeholder="your contact number"  class="form-control" required/>
          </div>
          <div class="form-group">
            <label for="name">Address:</label>
            <input type="text" name="address" id="address" placeholder="your address" class="form-control" required/>
          </div>
          <div class="form-group">
            <label for="name">City:</label>
            <input type="text" name="city" id="city" placeholder="your city" class="form-control" required/>
          </div>
          <div class="form-group">
            <label for="name">Choose Password:</label>
            <input type="password" name="password" id="password" placeholder="Password" class="form-control" required/>
          </div>    
          <div class="form-group">
            <label for="name">Retype Password:</label>
            <input type="password" name="retype" id="retypepass" placeholder="Retype Password" class="form-control" required/>
          </div>
          <div class="form-group">
            <input type="hidden" name="image" value=''>
            <input type="submit" name="signup" class="btn btn-primary register-customer" style="background-color: #FFBC51; color: #000">
            <p class="error text-danger"></p>
            <p class="success text-success"></p>
          </div>
          
          </form>
      </div>
      </div>        
</div>  

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-form.js"></script>
<script type="text/javascript" src="assets/js/customersignup.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
</body>
<!--footer-->
<?php// include 'includes/footer.php';?>
<!--/footer-->