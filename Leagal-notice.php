<?php 
session_start();
error_reporting(0);
if (isset($_POST['submit'])) {
  $_POST['category']=$category;
  $_POST['city']=$city;
  $_POST['subject']=$subject;
  $_POST['doubt']=$doubt;
  $_POST['name']=$name;
  $_POST['email']=$email;
  $_POST['[phone]']=$phone;
}
$to="info@vakilbaba.com";
$header="From: $email";
$header.="$name. wants to talk to a lawyer on a legal query";
$mailprocess=mail($to, $subject, $message, $header);

if ($mailprocess==true) {

  echo '<script type="text/javascript">alert.("We received your query. You will be responded shortly");</script>';
}

else{
  echo'<script type="text/javascript">alert.("Unable to send your query");</script>';
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
<section style="margin-top: 90px; background-color:#f2f2f2">
  <div class="container">
  <div class="col-md-12" style="text-align: center;">
    <h3>Share your Problem with us<strong> free of cost.</strong></h3>
    <p style="text-align: justify;">Do you have any Problem? <strong>Let's Talk here!</strong>.Fill out the form below and please mention your query.</p>
  </div>
  </div>
<div class="row" style="padding: 10px;">
<div class="container">
  <div class="col-md-7 st-tab" style="padding-top: 30px;padding left:-12px; border: 1px solid grey ;background-color: #fff; ">
    <center>
   <form class="form-horizontal" action="">
    <div class="form-group">
            <div class="pull-left" style="margin-left: 15px">
      <label class="control-label" for="pwd">Area of Law<span class="required">*</span></label></div>
              <div class="col-sm-12">
              <select name="category" id="category" class="form-control" name="category" required/>
                 <option value="">Select Area of law</option>
                  <option value="civil">Civil</option>
                  <option value="criminal">Criminal</option>
                  <option value="matrimonial">Matrimonial</option>
                  <option value="divorce">Divorce</option>
                  <option value="taxationlow">Taxation Low</option>
                  <option value="intellectualproperty">Intellectual property</option>
                  <option value="servicesabour">Service/Labour laws</option>
                  <option value="motoraccidentlaws">Motor Accident Laws</option>
                  <option value="corporatelaw">Corporate Law</option>
                  <option value="chequebounce">Cheque bounce/fraud</option>
                  <option value="cyberlaws">Cyber Laws</option>
                  <option value="propertylaw">Property Law</option> 
                   </select>
                            </div>
                          </div><br>
    <div class="form-group">
      <div class="pull-left">
      <label class="control-label col-sm-2" for="City">City<span class="required">*</span></label>
      </div>
      <div class="col-sm-12">
        <input type="Text" name="city" class="form-control" id="City" placeholder="Enter your city" required/>
      </div>
    </div>
    <div class="form-group">
      <div class="pull-left">
      <label class="control-label col-sm-2" for="Subject">Subject<span class="required">*</span></label>
      </div>
      <div class="col-sm-12">
        <input type="Text" name="subject" class="form-control" id="Subject" placeholder="Enter the subject"
      </div>
    </div>
    <div class="form-group">
      <div class="pull-left" style="margin-left: 25px">
      <label class="control-label" for="doubt">Ask your Doubts<span class="required">*</span></label>
    </div>
      <div class="col-sm-12">          
        <textarea name="doubt" class="form-control custom-control" rows="6" placeholder="short description" style="resize:none"></textarea>
        <p style="text-align: justify;"><p style="color: red; display: inline; font-size: 18px">*</p>If this is a matrimonial or property question, please mention your religion as laws may differ.</p>
      </div>
    </div>
    <h3 style="margin-left: -33%">Enter Your Details</h3>
    <div class="form-group">
      <div class="pull-left" style="margin-left: 15px">
      <label class="control-label col-sm-2" for="name">Name<span class="required">*</span></label>
    </div>
      <div class="col-sm-12">
        <input type="text" name="name" class="form-control" id="name" placeholder="Your name">
      </div>
    </div>
    <div class="form-group">
      <div class="pull-left" style="margin-left: 15px">
      <label class="control-label col-sm-2" for="email">Email<span class="required">*</span></label>
    </div>
      <div class="col-sm-12">
        <input type="email" name="email" class="form-control" id="email" placeholder="Your email">
      </div>
    </div>
    <div class="form-group">
      <div class="pull-left" style="margin-left: 15px">
      <label class="control-label col-sm-2" for="phone">Phone<span class="required">*</span></label>
    </div>
      <div class="col-sm-12">
        <input type="Text" name="phone" class="form-control" id="phone" placeholder="Phone">
      </div>
    </div>
    
    <div class="form-group"> 
     <center>         
    <button type="submit" class="btn btn-default" style="background-color: #FFBC51; color: #000">Submit</button>
      </center>
    </div>
  </form>
</center>
  </div>
  <div>
    <div class="col-md-5">
      <div class="row">
        <div class="col-md-12">
          <div class="well-box" style="background-color:#ffffff; border:1px solid grey">
            <center><i class="fa fa-user fa-4x" aria-hidden="true" style="color: orange;padding-top: 10px"></i>
            <h4><u>Are you worry about Leagal Notice?</u></h4>
            <p style="font-size: 18px">Chat or Call us Now! <a href="tel:+91-7900127900"> +91-7900127900</a>.<br> Get solution for your Legal Problem. Get best Advocate, lowyer and justice just at one Plateform.</p></center>
            <div class="row">
              <div class="col-md-3" style="margin-left: 120px">
                <center><button type="button" class="btn" style="background-color: #FFBC51; color: #000">Share with us!</button></center>
              </div>

            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div> 
  <div>
</div>
</div>
</div>
</section>
<section>
<?php include('includes/footer.php');?>
</section>
</body>
</html>