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
<section style="margin-top: 70px; background-color:#f2f2f2">
  <div class="container">
  <div class="col-md-12" style="text-align: center;">
    <h3>Ask For Legal Help</h3>
    <p style="text-align: justify;">Stuck with a legal issue? Submit your query below to get FREE answers by email within a few hours. Expert legal advice from top rated lawyers in your city enables you to take better decisions about your legal situation.</p>
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
              <select name="category" id="category" class="form-control" required="">
                 <option value="">Select Area of law</option>
                              <option value="37">Arbitration</option>
                              <option value="136">Armed Forces Tribunal</option>
                              <option value="139">Banking / Finance</option>
                              <option value="38">Cheque Bounce</option>
                              <option value="133">Child Custody</option>
                              <option value="138">Civil</option>
                              <option value="39">Consumer Court</option>
                              <option value="126">Corporate</option>
                              <option value="41">Criminal</option>
                              <option value="42">Customs &amp; Central Excise</option>
                              <option value="43">Cyber Crime</option>
                              <option value="44">Divorce</option>
                              <option value="45">Documentation</option>
                              <option value="46">Family</option>
                              <option value="140">GST</option>
                              <option value="47">Immigration</option>
                              <option value="49">Insurance</option>
                              <option value="51">International Law</option>
                              <option value="53">Labour &amp; Service</option>
                              <option value="54">Landlord/Tenant</option>
                              <option value="55">Medical Negligence</option>
                              <option value="56">Motor Accident</option>
                              <option value="135">Muslim Law</option>
                              <option value="57">Property</option>
                              <option value="58">R.T.I</option>
                              <option value="59">Recovery</option>
                              <option value="50">Startup</option>
                              <option value="137">Supreme Court</option>
                              <option value="60">Tax</option>
                              <option value="40">Trademark &amp; Copyright</option>
                              <option value="61">Wills / Trusts</option>
                                </select>
                            </div>
                          </div><br>
    <div class="form-group">
      <div class="pull-left">
              <label class="control-label col-sm-2" for="name">City<span class="required">*</span></label>
              </div>
              <div class="col-sm-12">
              <select name="category" id="category" class="form-control" required="">
                 <option value="">Select City</option>
                              <option value="37">Delhi</option>
                              <option value="136">Mumbai</option>
                              <option value="139">Hydrabad / Finance</option>
                              <option value="38">Asansol</option>
                              <option value="133">Raniganj Custody</option>
                              <option value="138">Ballia</option>
                              <option value="39">Varanasi</option>          
                            </select>
                            </div>
                          </div>
    <div class="form-group">
      <div class="pull-left">
      <label class="control-label col-sm-2" for="Subject">Subject<span class="required">*</span></label>
      </div>
      <div class="col-sm-12">
        <input type="Text" class="form-control" id="Subject" placeholder="Enter the subject" name="Subject">
      </div>
    </div>
    <div class="form-group">
      <div class="pull-left" style="margin-left: 15px">
      <label class="control-label" for="pwd">Ask your Doubts<span class="required">*</span></label></div>
      <div class="col-sm-12">          
        <textarea class="form-control custom-control" rows="8" placeholder="Only 1000 words" style="resize:none"></textarea>
        <p style="text-align: justify;">If this is a matrimonial or property question, please mention your religion as laws may differ.</p>
      </div>
    </div>
    <h3 style="margin-left: -33%">Enter Your Details</h3>
    <div class="form-group">
      <div class="pull-left" style="margin-left: 15px">
      <label class="control-label col-sm-2" for="Name">Name<span class="required">*</span></label>
    </div>
      <div class="col-sm-12">
        <input type="Text" class="form-control" id="Name" placeholder="Name" name="Name">
      </div>
    </div>
    <div class="form-group">
      <div class="pull-left" style="margin-left: 15px">
      <label class="control-label col-sm-2" for="email">Email<span class="required">*</span></label>
    </div>
      <div class="col-sm-12">
        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
      </div>
    </div>
    <div class="form-group">
      <div class="pull-left" style="margin-left: 15px">
      <label class="control-label col-sm-2" for="phone">Phone<span class="required">*</span></label>
    </div>
      <div class="col-sm-12">
        <input type="Text" class="form-control" id="Phone" placeholder="Phone" name="phone">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <center><button type="submit" class="btn btn-default">Submit</button></center>
      </div>
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
            <h4><u>Talk to Lawyer</u></h4>
            <p style="font-size: 18px">Book a phone / meeting consultation with a top rated lawyer in your city to get detailed opinion on your legal problem starting @ Rs.500 only.</p></center>
            <div class="row">
              <div class="col-md-3" style="margin-left: 120px">
                <center><button type="button" class="btn" style="background-color: #4286f4">Talk to Lawyer</button></center>
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