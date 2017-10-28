<?php 
session_start();
include('includes/config.php');
error_reporting(0);

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
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<link href="assets/css/slick.css" rel="stylesheet">
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> 
</head>
<body>
  <!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 

<section style="background-color: #3b93f6">
  <div class="jumbotron" style="background-image: url('assets/images/testi_4.jpg'); background-repeat: no-repeat; margin-top: 5%">
    <div class="row">
        <div class="col-md-4 col-md-offset-7">
            <div class="panel panel-success">
                <div class="panel-heading" style="text-align: left;"> 
                  <center><h4>FILL YOUR DETAILS</h4></center>
                  <h4 style="text-align: right;">
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form">
                      <div class="form-group">
                            <label for="Name" class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-9">
                                <input type="Text" class="form-control" id="name" placeholder="Your Name" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Phone" class="col-sm-3 control-label">Phone</label>
                            <div class="col-sm-9">
                                <input type="phone" class="form-control" id="phone" placeholder="Phone" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <div class="checkbox">
                                    <label class="">
                                        <input type="checkbox" class="">Remember me</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group last">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success btn-sm">Sign in</button>
                                <button type="reset" class="btn btn-default btn-sm">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">Not Registered?<a href="#" class="">Register here</a><h4><i class="fa fa-phone" aria-hidden="true" > &nbsp 9700129700</i></h4>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
  </div>
</div>
</section>
<section style="margin-top: -4%">
<div class="panel panel-primary" style="border: 2px solid black;">
  <center>
  <div class="row" style="padding-top: 8px">
    <div class="col-sm-2" >
      <a href="#registration"><p>Registration</p></a>
    </div>
    <div class="col-sm-2">
      <a href="#procedure"><p>Procedure</p></a>
    </div>
    <div class="col-sm-2">
      <p>Process</p>
    </div>
    <div class="col-sm-2">
      <p>Documents</p>
    </div>
    <div class="col-sm-2">
      <p>GSTIN</p>
    </div>
    <div class="col-sm-2">
      <p>FAQs</p>
    </div>
  </div>
</div>
</center>
</section>
<section class="Registration" id="registration" style="border-bottom: 2px solid red">
<div class="container">
  <div class="row">
    <div class="col-md-6">
    <center><h2>What is GST Registration1?</h2></center>
    <p style="text-align: justify;">
      GST refers to Goods and Services Tax which subsumes all taxes such as Sales tax, Service tax, Excise duty etc. into GST. GST registration is required primarily if your annual sales are more than Rs. 20 Lakh. Even if your sales are less than Rs. 20 Lakh, we suggest that you voluntarily opt for GST registration because:

You will not get any tax refunds on purchases (e.g. if you buy goods worth Rs 1 lakh in a year, and tax rate is 28% – you will lose tax refund of Rs. 28,000)
You cannot sell outside your state
GST registration typically takes between 2-6 working days. You need to file your application with the department and sign it with your digital signature. GST Registration can be done through LegalRaasta in Delhi NCR, Mumbai, Bengaluru, Chennai and other Indian cities.
    </p>
    </div>
    <div class="col-md-6" style="border-left: 2px solid grey">
      <center><img src="assets/images/multiple.png" style="width: 80%; height:80%;"></center>
    </div>
  </div>
</div>
</section>
<section id="procedure" style="border-bottom: 2px solid red">
<div class="container">
  <div class="row">
    <center><h2>PROCEDURE</h2><hr></center>
    <p>
      GST refers to Goods and Services Tax which subsumes all taxes such as Sales tax, Service tax, Excise duty etc. into GST. GST registration is required primarily if your annual sales are more than Rs. 20 Lakh. Even if your sales are less than Rs. 20 Lakh, we suggest that you voluntarily opt for GST registration because:

You will not get any tax refunds on purchases (e.g. if you buy goods worth Rs 1 lakh in a year, and tax rate is 28% – you will lose tax refund of Rs. 28,000)
You cannot sell outside your state
GST registration typically takes between 2-6 working days. You need to file your application with the department and sign it with your digital signature. GST Registration can be done through LegalRaasta in Delhi NCR, Mumbai, Bengaluru, Chennai and other Indian cities.
    </p>
  </div>
</div>
</section>
<section id="#registration">
<div class="container">
  <div class="row">
    <center><h2>What is GST Registration?</h2></center>
    <p>
      GST refers to Goods and Services Tax which subsumes all taxes such as Sales tax, Service tax, Excise duty etc. into GST. GST registration is required primarily if your annual sales are more than Rs. 20 Lakh. Even if your sales are less than Rs. 20 Lakh, we suggest that you voluntarily opt for GST registration because:

You will not get any tax refunds on purchases (e.g. if you buy goods worth Rs 1 lakh in a year, and tax rate is 28% – you will lose tax refund of Rs. 28,000)
You cannot sell outside your state
GST registration typically takes between 2-6 working days. You need to file your application with the department and sign it with your digital signature. GST Registration can be done through LegalRaasta in Delhi NCR, Mumbai, Bengaluru, Chennai and other Indian cities.
    </p>
  </div>
</div>
</section>
<section id="#registration">
<div class="container">
  <div class="row">
    <center><h2>What is GST Registration?</h2></center>
    <p>
      GST refers to Goods and Services Tax which subsumes all taxes such as Sales tax, Service tax, Excise duty etc. into GST. GST registration is required primarily if your annual sales are more than Rs. 20 Lakh. Even if your sales are less than Rs. 20 Lakh, we suggest that you voluntarily opt for GST registration because:

You will not get any tax refunds on purchases (e.g. if you buy goods worth Rs 1 lakh in a year, and tax rate is 28% – you will lose tax refund of Rs. 28,000)
You cannot sell outside your state
GST registration typically takes between 2-6 working days. You need to file your application with the department and sign it with your digital signature. GST Registration can be done through LegalRaasta in Delhi NCR, Mumbai, Bengaluru, Chennai and other Indian cities.
    </p>
  </div>
</div>
</section>
<section id="#registration">
<div class="container">
  <div class="row">
    <center><h2>What is GST Registration?</h2></center>
    <p>
      GST refers to Goods and Services Tax which subsumes all taxes such as Sales tax, Service tax, Excise duty etc. into GST. GST registration is required primarily if your annual sales are more than Rs. 20 Lakh. Even if your sales are less than Rs. 20 Lakh, we suggest that you voluntarily opt for GST registration because:

You will not get any tax refunds on purchases (e.g. if you buy goods worth Rs 1 lakh in a year, and tax rate is 28% – you will lose tax refund of Rs. 28,000)
You cannot sell outside your state
GST registration typically takes between 2-6 working days. You need to file your application with the department and sign it with your digital signature. GST Registration can be done through LegalRaasta in Delhi NCR, Mumbai, Bengaluru, Chennai and other Indian cities.
    </p>
  </div>
</div>
</section>
<section id="#registration">
<div class="container">
  <div class="row">
    <center><h2>What is GST Registration?</h2></center>
    <p>
      GST refers to Goods and Services Tax which subsumes all taxes such as Sales tax, Service tax, Excise duty etc. into GST. GST registration is required primarily if your annual sales are more than Rs. 20 Lakh. Even if your sales are less than Rs. 20 Lakh, we suggest that you voluntarily opt for GST registration because:

You will not get any tax refunds on purchases (e.g. if you buy goods worth Rs 1 lakh in a year, and tax rate is 28% – you will lose tax refund of Rs. 28,000)
You cannot sell outside your state
GST registration typically takes between 2-6 working days. You need to file your application with the department and sign it with your digital signature. GST Registration can be done through LegalRaasta in Delhi NCR, Mumbai, Bengaluru, Chennai and other Indian cities.
    </p>
  </div>
</div>
</section>
<section>
<?php include('includes/footer.php');?>
</section>
</body>
</html>