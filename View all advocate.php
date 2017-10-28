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




<div class="main-container">
  <div class="container">
 
 <div class="row" style="background-color:#837E7E; margin-left:10px;margin-right:10px;margin-bottom:20px; padding:20px;">

<div class="col-md-6" style="padding:5px;">
  <label class="control-label"><span style="color:white; font-size:16px;">Filter by Practice Area</span></label>
  <select id="subcat2" name="subcat2" class="form-control" style="height:33px;">
    <option value="">All</option>
                        <option value="arbitration-lawyers">Arbitration</option>
                        <option value="armed-forces-tribunal-lawyers">Armed Forces Tribunal</option>
                        <option value="banking-finance-lawyers">Banking / Finance</option>
                        <option value="cheque-bounce-lawyers">Cheque Bounce</option>
                        <option value="child-custody-lawyers">Child Custody</option>
                        <option value="civil-lawyers">Civil</option>
                        <option value="consumer-court-lawyers">Consumer Court</option>
                        <option value="corporate-lawyers">Corporate</option>
                        <option value="criminal-lawyers">Criminal</option>
                        <option value="customs-central-excise-lawyers">Customs &amp; Central Excise</option>
                        <option value="cyber-crime-lawyers">Cyber Crime</option>
                        <option value="divorce-lawyers">Divorce</option>
                        <option value="documentation-lawyers">Documentation</option>
                        <option value="family-lawyers">Family</option>
                        <option value="gst-lawyers">GST</option>
                        <option value="immigration-lawyers">Immigration</option>
                        <option value="insurance-lawyers">Insurance</option>
                        <option value="international-law-lawyers">International Law</option>
                        <option value="labour-service-lawyers">Labour &amp; Service</option>
                        <option value="landlordtenant-lawyers">Landlord/Tenant</option>
                        <option value="medical-negligence-lawyers">Medical Negligence</option>
                        <option value="motor-accident-lawyers">Motor Accident</option>
                        <option value="muslim-law-lawyers">Muslim Law</option>
                        <option value="property-lawyers">Property</option>
                        <option value="rti-lawyers">R.T.I</option>
                        <option value="recovery-lawyers">Recovery</option>
                        <option value="startup-lawyers">Startup</option>
                        <option value="supreme-court-lawyers">Supreme Court</option>
                        <option value="tax-lawyers">Tax</option>
                        <option value="copyright-patent-trademark-lawyers">Trademark &amp; Copyright</option>
                        <option value="wills-trusts-lawyers">Wills / Trusts</option>
                                
  </select>
</div>


<div class="col-md-6" style="padding:5px;">
  <label class="control-label"><span style="color:white; font-size:16px;">Select City</span></label>
  <div class="select2-container" id="s2id_location_pt"><a href="javascript:void(0)" class="select2-choice select2-default" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-1">Select City</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen1" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-1" id="s2id_autogen1"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen1_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-1" id="s2id_autogen1_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-1">   </ul></div></div><input type="hidden" id="location_pt" placeholder="Select City" value="" tabindex="-1" title="" class="select2-offscreen">
</div>
</div>

 
<div class="row venuListingSec">
<div class="col-md-3">
<div class="filter-sidebar">
<div class="col-md-12 form-title">
<h3 style="margin: 0px 0 20px 0px;">Additional Filters <a href="javascript:;"></a></h3>
</div>
<div id="collapseSection">
<form method="get">


<div class="col-md-12 form-group">
  <label class="control-label" for="capacity">Court</label>
  <div class="select2-container" id="s2id_court_pt"><a href="javascript:void(0)" class="select2-choice select2-default" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-2">Select Court</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen2" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-2" id="s2id_autogen2"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen2_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-2" id="s2id_autogen2_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-2">   </ul></div></div><input type="hidden" name="court" id="court_pt" placeholder="Select Court" value="" tabindex="-1" title="" class="select2-offscreen">
</div>


<div class="col-md-12 form-group">
  <label class="control-label" for="capacity">Experience</label>
  <select name="experience" id="Experience" class="form-control">
   <option value="">Any</option>
            <option value="5">&lt; 5 Years</option>
            <option value="510">5-10 Years</option>
            <option value="1015">10-15 Years</option>
            <option value="15">&gt; 15 Years</option>
           
  </select>
</div>
<div class="col-md-12 form-group">
  <label class="control-label" for="price">Service Mode</label>
  <select name="service_mode" id="service_mode" class="form-control">
    <option value="">Any</option>
            <option value="email-advice">Email Advice</option>
            <option value="phone">Phone</option>
            <option value="meeting">Meeting</option>
            <option value="video-call">Video Call</option>
                     
  </select>
</div>
<div class="col-md-12 form-group">
  <label class="control-label" for="price">Gender</label>
  <select name="gender" id="gender" class="form-control">
   <option value="">All</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
  </select>
</div>
<div class="col-md-12 form-group">
  <label class="control-label" for="price">Languages</label>
  <select id="language" name="language" class="form-control">
   <option value="">All</option>
                        <option value="3">Assamese</option>
                        <option value="4">Bengali</option>
                        <option value="5">Bodo</option>
                        <option value="6">Dogri</option>
                        <option value="2">English</option>
                        <option value="7">Gujarati</option>
                        <option value="1">Hindi</option>
                        <option value="9">Kannada</option>
                        <option value="10">Kashmiri</option>
                        <option value="11">Konkani</option>
                        <option value="12">Maithili</option>
                        <option value="13">Malayalam</option>
                        <option value="14">Manipuri</option>
                        <option value="15">Marathi</option>
                        <option value="16">Nepali</option>
                        <option value="17">Oriya</option>
                        <option value="18">Punjabi</option>
                        <option value="19">Sanskrit</option>
                        <option value="20">Santali</option>
                        <option value="21">Sindhi</option>
                        <option value="22">Tamil</option>
                        <option value="23">Telugu</option>
                        <option value="24">Urdu</option>
              </select>
</div>

<div class="col-md-12 form-group">

  <button type="submit" class="btn tp-btn-primary tp-btn-lg btn-block">Search</button>
  <button type="button" class="btn tp-btn-primary tp-btn-lg btn-block" onclick="document.location.href='https://lawrato.com/lawyers'">Clear Filter</button>
  
</div>
</form>
</div>
</div>
</div>

<div class="col-md-6">

<div class="tb1">
          <h2 style="    color: #FFFFFF;
    
    margin: 0px;
    font-size: 20px;
    padding: 5px 5px 5px 5px;;">  Lawyers in   India 
          (5302)
            <span style="font-size:12px;float:right;margin-top:6px;"><a href="/lawyers?fee=1" style="text-decoration:none;color:#FFF;letter-spacing:1px;">Fees <img style="width:12px;height:12px;margin-top:-2px;" src="https://lawrato.com/assets/images/sort.svg"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/lawyers?exp=1" style="color:#FFF;text-decoration:none;letter-spacing:1px;">Experience <img style="width:12px;height:12px;margin-top:-2px;" src="https://lawrato.com/assets/images/sort.svg"></a><span>
       </span></span></h2>
     </div>

          
  
<div class="col-lg-12 padBtm pad-lt-rt">
<div class="col-lg-2 col-xs-2 pad-lt-rt colMb16">          <a href="https://lawrato.com/advocate-arjun-bobde" title="Advocate Arjun Vinod Bobde"><img style="border-radius: 5px;overflow: hidden;box-shadow: 1px 1px 1px rgba(0,0,0,0.3);" src="https://lawrato.com/expert_images/advocate-arjun-bobde.jpg"></a>
          </div>
<div class="col-lg-7 col-xs-7 pad-lt-rt">
<a href="https://lawrato.com/advocate-arjun-bobde" title="Advocate Arjun Vinod Bobde"><h3><span>Advocate Arjun Vinod Bobde</span></h3></a>
  <span>
<p><strong>&nbsp;<img style="width:12px;height:12px;margin-top:-3px;" src="https://lawrato.com/assets/images/svg/map-marker.svg"></strong> <span>Supreme Court of India, Delhi </span></p>
     </span>
<p>&nbsp;Experience: 16 years</p>
 
</div>
<div class="col-lg-3 col-xs-3 pad-lt-rt ratingSec">

<div class="retingLevel level-8"><span>4.8<img style="width:11px;height:11px;margin-top:-4px;margin-left:3px;" src="https://lawrato.com/assets/images/svg/star-white.svg"></span></div><div class="fnt11"><span>87 </span>ratings</div>
<b style="font-size: 11px;text-align: center;color: #000;">50+ Consults</b></div>

<div class="col-lg-12 col-xs-12 pad-lt-rt courtSec">
<ul class="court">
<li>Arbitration<!--</a>--></li>
<li>Criminal<!--</a>--></li>
<li>Divorce<!--</a>--></li>
<li>International Law<!--</a>--></li>
<li>Property<!--</a>--></li>
<li>Supreme Court<!--</a>--></li>
</ul>
</div>

<div class="col-lg-12 col-xs-12 pad-lt-rt mb320Btn">
<a href="https://lawrato.com/advocate-arjun-bobde" class="btn tp-btn-primary">View Profile</a>  <a href="https://lawrato.com/advocate-arjun-bobde" class="btn tp-btn-primary cunsultBtn"> Consultation by Appointment </a>
                            </div>

      </div>
  
          
    
      
<div class="col-lg-12 padBtm pad-lt-rt">
<div class="col-lg-2 col-xs-2 pad-lt-rt colMb16">          <a href="https://lawrato.com/advocate-ajit-kakkar" title="Advocate Wg Cdr Ajit Kakkar (Retd)"><img style="border-radius: 5px;overflow: hidden;box-shadow: 1px 1px 1px rgba(0,0,0,0.3);" src="https://lawrato.com/expert_images/advocate-ajit-kakkar.jpg"></a>
          </div>
<div class="col-lg-7 col-xs-7 pad-lt-rt">
<a href="https://lawrato.com/advocate-ajit-kakkar" title="Advocate Wg Cdr Ajit Kakkar (Retd)"><h3>Advocate Wg Cdr Ajit Kakkar (Retd)</h3></a>
  
<p><strong>&nbsp;<img style="width:12px;height:12px;margin-top:-3px;" src="https://lawrato.com/assets/images/svg/map-marker.svg"></strong> Dwarka, Delhi </p>
 
<p>&nbsp;Experience: 17 years</p>
 
</div>
<div class="col-lg-3 col-xs-3 pad-lt-rt ratingSec">

<div class="retingLevel level-8"><span>4.7<img style="width:11px;height:11px;margin-top:-4px;margin-left:3px;" src="https://lawrato.com/assets/images/svg/star-white.svg"></span></div><div class="fnt11"><span>117 </span>ratings</div><b style="font-size: 11px;text-align: center;color: #000;">100+ Consults</b></div>

<div class="col-lg-12 col-xs-12 pad-lt-rt courtSec">
<ul class="court">
<li>Arbitration<!--</a>--></li>
<li>Labour &amp; Service<!--</a>--></li>
<li>R.T.I<!--</a>--></li>
<li>Armed Forces Tribunal<!--</a>--></li>
</ul>
</div>

<div class="col-lg-12 col-xs-12 pad-lt-rt mb320Btn">
<a href="https://lawrato.com/advocate-ajit-kakkar" class="btn tp-btn-primary">View Profile</a>  <a href="https://lawrato.com/advocate-ajit-kakkar" class="btn tp-btn-primary cunsultBtn">Consultation from <span style="text-decoration: line-through;">Rs. 2000</span><br><span style="color:#4B9142;"><b>Discounted Fee: Rs. 1500</b></span></a>               </div>

      </div>
  
          
    
      
<div class="col-lg-12 padBtm pad-lt-rt">
<div class="col-lg-2 col-xs-2 pad-lt-rt colMb16">          <a href="https://lawrato.com/advocate-nagesh-b-l" title="Advocate Nagesh B L"><img style="border-radius: 5px;overflow: hidden;box-shadow: 1px 1px 1px rgba(0,0,0,0.3);" src="https://lawrato.com/expert_images/advocate-nagesh-b-l.jpg"></a>
          </div>
<div class="col-lg-7 col-xs-7 pad-lt-rt">
<a href="https://lawrato.com/advocate-nagesh-b-l" title="Advocate Nagesh B L"><h3>Advocate Nagesh B L</h3></a>
  
<p><strong>&nbsp;<img style="width:12px;height:12px;margin-top:-3px;" src="https://lawrato.com/assets/images/svg/map-marker.svg"></strong> Nagarathpete, Bangalore </p>
 
<p>&nbsp;Experience: 23 years</p>
 
</div>
<div class="col-lg-3 col-xs-3 pad-lt-rt ratingSec">

<div class="retingLevel level-8"><span>4.7<img style="width:11px;height:11px;margin-top:-4px;margin-left:3px;" src="https://lawrato.com/assets/images/svg/star-white.svg"></span></div><div class="fnt11"><span>18 </span>ratings</div><b style="font-size: 11px;text-align: center;color: #000;">100+ Consults</b></div>

<div class="col-lg-12 col-xs-12 pad-lt-rt courtSec">
<ul class="court">
<li>Cheque Bounce<!--</a>--></li>
<li>Criminal<!--</a>--></li>
<li>Divorce<!--</a>--></li>
<li>Documentation<!--</a>--></li>
<li>Family<!--</a>--></li>
<li>Civil<!--</a>--></li>
</ul>
</div>

<div class="col-lg-12 col-xs-12 pad-lt-rt mb320Btn">
<a href="https://lawrato.com/advocate-nagesh-b-l" class="btn tp-btn-primary">View Profile</a>  <a href="https://lawrato.com/advocate-nagesh-b-l" class="btn tp-btn-primary cunsultBtn">Consultation from <span style="text-decoration: line-through;">Rs. 2000</span><br><span style="color:#4B9142;"><b>Discounted Fee: Rs. 1500</b></span></a>               </div>

      </div>
  
          
    
      
<div class="col-lg-12 padBtm pad-lt-rt">
<div class="col-lg-2 col-xs-2 pad-lt-rt colMb16">          <a href="https://lawrato.com/advocate-prashant-mendiratta" title="Advocate Prashant Mendiratta"><img style="border-radius: 5px;overflow: hidden;box-shadow: 1px 1px 1px rgba(0,0,0,0.3);" src="https://lawrato.com/expert_images/advocate-prashant-mendiratta.jpg"></a>
          </div>
<div class="col-lg-7 col-xs-7 pad-lt-rt">
<a href="https://lawrato.com/advocate-prashant-mendiratta" title="Advocate Prashant Mendiratta"><h3>Advocate Prashant Mendiratta</h3></a>
  
<p><strong>&nbsp;<img style="width:12px;height:12px;margin-top:-3px;" src="https://lawrato.com/assets/images/svg/map-marker.svg"></strong> Lajpat Nagar 4, Delhi </p>
 
<p>&nbsp;Experience: 24 years</p>
 
</div>
<div class="col-lg-3 col-xs-3 pad-lt-rt ratingSec">

<div class="retingLevel level-8"><span>4.8<img style="width:11px;height:11px;margin-top:-4px;margin-left:3px;" src="https://lawrato.com/assets/images/svg/star-white.svg"></span></div><div class="fnt11"><span>45 </span>ratings</div><b style="font-size: 11px;text-align: center;color: #000;">5+ Consults</b></div>

<div class="col-lg-12 col-xs-12 pad-lt-rt courtSec">
<ul class="court">
<li>Cheque Bounce<!--</a>--></li>
<li>Criminal<!--</a>--></li>
<li>Cyber Crime<!--</a>--></li>
<li>Divorce<!--</a>--></li>
<li>Property<!--</a>--></li>
<li>Recovery<!--</a>--></li>
<li>Supreme Court<!--</a>--></li>
</ul>
</div>

<div class="col-lg-12 col-xs-12 pad-lt-rt mb320Btn">
<a href="https://lawrato.com/advocate-prashant-mendiratta" class="btn tp-btn-primary">View Profile</a>  <a href="https://lawrato.com/advocate-prashant-mendiratta" class="btn tp-btn-primary cunsultBtn">Consultation from <span style="text-decoration: line-through;">Rs. 6000</span><br><span style="color:#4B9142;"><b>Discounted Fee: Rs. 5000</b></span></a>               </div>

      </div>
  
          
    
      
<div class="col-lg-12 padBtm pad-lt-rt">
<div class="col-lg-2 col-xs-2 pad-lt-rt colMb16">          <a href="https://lawrato.com/advocate-prabhjit-jauhar" title="Advocate Prabhjit Jauhar"><img style="border-radius: 5px;overflow: hidden;box-shadow: 1px 1px 1px rgba(0,0,0,0.3);" src="https://lawrato.com/expert_images/advocate-prabhjit-jauhar.jpg"></a>
          </div>
<div class="col-lg-7 col-xs-7 pad-lt-rt">
<a href="https://lawrato.com/advocate-prabhjit-jauhar" title="Advocate Prabhjit Jauhar"><h3>Advocate Prabhjit Jauhar</h3></a>
  
<p><strong>&nbsp;<img style="width:12px;height:12px;margin-top:-3px;" src="https://lawrato.com/assets/images/svg/map-marker.svg"></strong> Connaught Place, Delhi </p>
 
<p>&nbsp;Experience: 20 years</p>
 
</div>
<div class="col-lg-3 col-xs-3 pad-lt-rt ratingSec">

<div class="retingLevel level-8"><span>5.0<img style="width:11px;height:11px;margin-top:-4px;margin-left:3px;" src="https://lawrato.com/assets/images/svg/star-white.svg"></span></div><div class="fnt11"><span>7 </span>ratings</div></div>

<div class="col-lg-12 col-xs-12 pad-lt-rt courtSec">
<ul class="court">
<li>Divorce<!--</a>--></li>
<li>Family<!--</a>--></li>
<li>Property<!--</a>--></li>
<li>Recovery<!--</a>--></li>
<li>Child Custody<!--</a>--></li>
<li>Supreme Court<!--</a>--></li>
</ul>
</div>

<div class="col-lg-12 col-xs-12 pad-lt-rt mb320Btn">
<a href="https://lawrato.com/advocate-prabhjit-jauhar" class="btn tp-btn-primary">View Profile</a>  <a href="https://lawrato.com/advocate-prabhjit-jauhar" class="btn tp-btn-primary cunsultBtn">Consultation from <span style="text-decoration: line-through;">Rs. 25000</span><br><span style="color:#4B9142;"><b>Discounted Fee: Rs. 18000</b></span></a>               </div>

      </div>
  
          
    
      
<div class="col-lg-12 padBtm pad-lt-rt">
<div class="col-lg-2 col-xs-2 pad-lt-rt colMb16">          <a href="https://lawrato.com/advocate-mohammed-abdul-quadeer" title="Advocate Mohammed Abdul Quadeer"><img style="border-radius: 5px;overflow: hidden;box-shadow: 1px 1px 1px rgba(0,0,0,0.3);" src="https://lawrato.com/expert_images/advocate-mohammed-abdul-quadeer.jpg"></a>
          </div>
<div class="col-lg-7 col-xs-7 pad-lt-rt">
<a href="https://lawrato.com/advocate-mohammed-abdul-quadeer" title="Advocate Mohammed Abdul Quadeer"><h3>Advocate Mohammed Abdul Quadeer</h3></a>
  
<p><strong>&nbsp;<img style="width:12px;height:12px;margin-top:-3px;" src="https://lawrato.com/assets/images/svg/map-marker.svg"></strong> Shree Ram Nagar, Hyderabad </p>
 
<p>&nbsp;Experience: 11 years</p>
 
</div>
<div class="col-lg-3 col-xs-3 pad-lt-rt ratingSec">

<div class="retingLevel level-8"><span>4.8<img style="width:11px;height:11px;margin-top:-4px;margin-left:3px;" src="https://lawrato.com/assets/images/svg/star-white.svg"></span></div><div class="fnt11"><span>8 </span>ratings</div><b style="font-size: 11px;text-align: center;color: #000;">50+ Consults</b></div>

<div class="col-lg-12 col-xs-12 pad-lt-rt courtSec">
<ul class="court">
<li>Divorce<!--</a>--></li>
<li>Family<!--</a>--></li>
<li>Landlord/Tenant<!--</a>--></li>
<li>Property<!--</a>--></li>
<li>Child Custody<!--</a>--></li>
<li>Civil<!--</a>--></li>
</ul>
</div>

<div class="col-lg-12 col-xs-12 pad-lt-rt mb320Btn">
<a href="https://lawrato.com/advocate-mohammed-abdul-quadeer" class="btn tp-btn-primary">View Profile</a>  <a href="https://lawrato.com/advocate-mohammed-abdul-quadeer" class="btn tp-btn-primary cunsultBtn">Consultation from <span style="text-decoration: line-through;">Rs. 2000</span><br><span style="color:#4B9142;"><b>Discounted Fee: Rs. 1500</b></span></a>               </div>

      </div>
  
          
    
      
<div class="col-lg-12 padBtm pad-lt-rt">
<div class="col-lg-2 col-xs-2 pad-lt-rt colMb16">          <a href="https://lawrato.com/advocate-jaspreet-rai" title="Advocate Jaspreet Singh Rai"><img style="border-radius: 5px;overflow: hidden;box-shadow: 1px 1px 1px rgba(0,0,0,0.3);" src="https://lawrato.com/expert_images/advocate-jaspreet-rai.jpg"></a>
          </div>
<div class="col-lg-7 col-xs-7 pad-lt-rt">
<a href="https://lawrato.com/advocate-jaspreet-rai" title="Advocate Jaspreet Singh Rai"><h3>Advocate Jaspreet Singh Rai</h3></a>
  
<p><strong>&nbsp;<img style="width:12px;height:12px;margin-top:-3px;" src="https://lawrato.com/assets/images/svg/map-marker.svg"></strong> Greater Kailash 1, Delhi </p>
 
<p>&nbsp;Experience: 14 years</p>
 
</div>
<div class="col-lg-3 col-xs-3 pad-lt-rt ratingSec">

<div class="retingLevel level-8"><span>4.7<img style="width:11px;height:11px;margin-top:-4px;margin-left:3px;" src="https://lawrato.com/assets/images/svg/star-white.svg"></span></div><div class="fnt11"><span>200 </span>ratings</div><b style="font-size: 11px;text-align: center;color: #000;">100+ Consults</b></div>

<div class="col-lg-12 col-xs-12 pad-lt-rt courtSec">
<ul class="court">
<li>Arbitration<!--</a>--></li>
<li>Cheque Bounce<!--</a>--></li>
<li>Consumer Court<!--</a>--></li>
<li>Criminal<!--</a>--></li>
<li>Divorce<!--</a>--></li>
<li>Property<!--</a>--></li>
<li>Recovery<!--</a>--></li>
<li>Supreme Court<!--</a>--></li>
</ul>
</div>

<div class="col-lg-12 col-xs-12 pad-lt-rt mb320Btn">
<a href="https://lawrato.com/advocate-jaspreet-rai" class="btn tp-btn-primary">View Profile</a>  <a href="https://lawrato.com/advocate-jaspreet-rai" class="btn tp-btn-primary cunsultBtn">Consultation from <span style="text-decoration: line-through;">Rs. 3000</span><br><span style="color:#4B9142;"><b>Discounted Fee: Rs. 2500</b></span></a>               </div>

      </div>
  
          
    
      
<div class="col-lg-12 padBtm pad-lt-rt">
<div class="col-lg-2 col-xs-2 pad-lt-rt colMb16">          <a href="https://lawrato.com/advocate-t-kalaiselvan" title="Advocate T Kalaiselvan"><img style="border-radius: 5px;overflow: hidden;box-shadow: 1px 1px 1px rgba(0,0,0,0.3);" src="https://lawrato.com/expert_images/advocate-t-kalaiselvan.jpg"></a>
          </div>
<div class="col-lg-7 col-xs-7 pad-lt-rt">
<a href="https://lawrato.com/advocate-t-kalaiselvan" title="Advocate T Kalaiselvan"><h3>Advocate T Kalaiselvan</h3></a>
  
<p><strong>&nbsp;<img style="width:12px;height:12px;margin-top:-3px;" src="https://lawrato.com/assets/images/svg/map-marker.svg"></strong> Kosapet, Vellore </p>
 
<p>&nbsp;Experience: 16 years</p>
 
</div>
<div class="col-lg-3 col-xs-3 pad-lt-rt ratingSec">

<div class="retingLevel level-8"><span>4.5<img style="width:11px;height:11px;margin-top:-4px;margin-left:3px;" src="https://lawrato.com/assets/images/svg/star-white.svg"></span></div><div class="fnt11"><span>128 </span>ratings</div><b style="font-size: 11px;text-align: center;color: #000;">100+ Consults</b></div>

<div class="col-lg-12 col-xs-12 pad-lt-rt courtSec">
<ul class="court">
<li>Consumer Court<!--</a>--></li>
<li>Divorce<!--</a>--></li>
<li>Documentation<!--</a>--></li>
<li>Landlord/Tenant<!--</a>--></li>
<li>Property<!--</a>--></li>
<li>Muslim Law<!--</a>--></li>
<li>Civil<!--</a>--></li>
</ul>
</div>

<div class="col-lg-12 col-xs-12 pad-lt-rt mb320Btn">
<a href="https://lawrato.com/advocate-t-kalaiselvan" class="btn tp-btn-primary">View Profile</a>  <a href="https://lawrato.com/advocate-t-kalaiselvan" class="btn tp-btn-primary cunsultBtn">Consultation from <span style="text-decoration: line-through;">Rs. 2000</span><br><span style="color:#4B9142;"><b>Discounted Fee: Rs. 1500</b></span></a>               </div>

      </div>
  
          
    
      
<div class="col-lg-12 padBtm pad-lt-rt">
<div class="col-lg-2 col-xs-2 pad-lt-rt colMb16">          <a href="https://lawrato.com/advocate-harish-malhotra" title="Advocate Harish Malhotra"><img style="border-radius: 5px;overflow: hidden;box-shadow: 1px 1px 1px rgba(0,0,0,0.3);" src="https://lawrato.com/expert_images/advocate-harish-malhotra.jpg"></a>
          </div>
<div class="col-lg-7 col-xs-7 pad-lt-rt">
<a href="https://lawrato.com/advocate-harish-malhotra" title="Advocate Harish Malhotra"><h3>Advocate Harish Malhotra</h3></a>
  
<p><strong>&nbsp;<img style="width:12px;height:12px;margin-top:-3px;" src="https://lawrato.com/assets/images/svg/map-marker.svg"></strong> District Court, Gurgaon </p>
 
<p>&nbsp;Experience: 19 years</p>
 
</div>
<div class="col-lg-3 col-xs-3 pad-lt-rt ratingSec">

<div class="retingLevel level-8"><span>4.5<img style="width:11px;height:11px;margin-top:-4px;margin-left:3px;" src="https://lawrato.com/assets/images/svg/star-white.svg"></span></div><div class="fnt11"><span>43 </span>ratings</div><b style="font-size: 11px;text-align: center;color: #000;">100+ Consults</b></div>

<div class="col-lg-12 col-xs-12 pad-lt-rt courtSec">
<ul class="court">
<li>Arbitration<!--</a>--></li>
<li>Cheque Bounce<!--</a>--></li>
<li>Consumer Court<!--</a>--></li>
<li>Criminal<!--</a>--></li>
<li>Cyber Crime<!--</a>--></li>
<li>Divorce<!--</a>--></li>
<li>Labour &amp; Service<!--</a>--></li>
<li>Motor Accident<!--</a>--></li>
<li>Property<!--</a>--></li>
<li>Recovery<!--</a>--></li>
</ul>
</div>

<div class="col-lg-12 col-xs-12 pad-lt-rt mb320Btn">
<a href="https://lawrato.com/advocate-harish-malhotra" class="btn tp-btn-primary">View Profile</a>  <a href="https://lawrato.com/advocate-harish-malhotra" class="btn tp-btn-primary cunsultBtn">Consultation from <span style="text-decoration: line-through;">Rs. 2000</span><br><span style="color:#4B9142;"><b>Discounted Fee: Rs. 1500</b></span></a>               </div>

      </div>
  
          
    
      
<div class="col-lg-12 padBtm pad-lt-rt">
<div class="col-lg-2 col-xs-2 pad-lt-rt colMb16">          <a href="https://lawrato.com/advocate-ayantika-mondal" title="Advocate Ayantika Mondal"><img style="border-radius: 5px;overflow: hidden;box-shadow: 1px 1px 1px rgba(0,0,0,0.3);" src="https://lawrato.com/expert_images/advocate-ayantika-mondal.jpg"></a>
          </div>
<div class="col-lg-7 col-xs-7 pad-lt-rt">
<a href="https://lawrato.com/advocate-ayantika-mondal" title="Advocate Ayantika Mondal"><h3>Advocate Ayantika Mondal</h3></a>
  
<p><strong>&nbsp;<img style="width:12px;height:12px;margin-top:-3px;" src="https://lawrato.com/assets/images/svg/map-marker.svg"></strong> Gandhinagar, Bangalore </p>
 
<p>&nbsp;Experience: 8 years</p>
 
</div>
<div class="col-lg-3 col-xs-3 pad-lt-rt ratingSec">

<div class="retingLevel level-8"><span>4.7<img style="width:11px;height:11px;margin-top:-4px;margin-left:3px;" src="https://lawrato.com/assets/images/svg/star-white.svg"></span></div><div class="fnt11"><span>28 </span>ratings</div><b style="font-size: 11px;text-align: center;color: #000;">100+ Consults</b></div>

<div class="col-lg-12 col-xs-12 pad-lt-rt courtSec">
<ul class="court">
<li>Consumer Court<!--</a>--></li>
<li>Cyber Crime<!--</a>--></li>
<li>Divorce<!--</a>--></li>
<li>Family<!--</a>--></li>
<li>Corporate<!--</a>--></li>
<li>Banking / Finance<!--</a>--></li>
</ul>
</div>

<div class="col-lg-12 col-xs-12 pad-lt-rt mb320Btn">
<a href="https://lawrato.com/advocate-ayantika-mondal" class="btn tp-btn-primary">View Profile</a>  <a href="https://lawrato.com/advocate-ayantika-mondal" class="btn tp-btn-primary cunsultBtn">Consultation from <span style="text-decoration: line-through;">Rs. 1250</span><br><span style="color:#4B9142;"><b>Discounted Fee: Rs. 1000</b></span></a>               </div>

      </div>
  
          
    
      


<div class="col-lg-12 padBtm pad-lt-rt findJob">
<div class="row" id="formdata">
<div class="col-lg-12 col-xs-12 pad-lt-rt"><h2 style="color:#FFFFFF;">Need help to find the best  lawyer?</h2></div>

<div style="padding-top:30px;">
<button id="callback" name="submit" class="btn tp-btn-primary">Get Free Callback</button>
</div>
</div>
</div>


<div class="row tabingnewSec">
<div class="col-md-12 tp-pagination">
<ul class="pagination">

<ul class="pagination right pull-right"><li class="active-page"><a>1</a></li><li><a href="https://lawrato.com/lawyers/?&amp;page=2">2</a></li><li><a href="https://lawrato.com/lawyers/?&amp;page=3">3</a></li><li><a href="https://lawrato.com/lawyers/?&amp;page=4">4</a></li><li><a href="https://lawrato.com/lawyers/?&amp;page=5">5</a></li><li> <a href="https://lawrato.com/lawyers/?&amp;page=2">»</a></li>&nbsp;<a href="https://lawrato.com/lawyers/?&amp;page=531">&nbsp;</a></ul>


</ul>
</div>
</div>


</div>



  


 
 
 

 <a id="sen"></a>

 


<a id="enq"></a>




<!-- right sidebar -->


        
 <div class="col-md-3 right-sidebar">
<div class="row">


         
 
 
              
<div class="col-md-12 widget widget-archive">
</div>  
   

  
   
 
 
    
    <div class="col-md-12 widget widget-category">
   <div class="well-box">
  <a href="https://lawrato.com/free-legal-advice"><h2 style="font-size:16px;" class="widget-title">Answers by Our  Lawyers</h2></a>
  

  
    <ul style="list-style-type:none;">
                     
                <li><img style="margin-top:-3px;margin-right:5px;width:10px;height:10px;" src="https://lawrato.com/assets/images/svg/double-angle-pointing-to-right1.svg">
                  <a href="https://lawrato.com/family-legal-advice/can-i-have-a-contract-with-a-woman-to-have-kids-72905">
          Can I have a contract with a woman to have kids?                         </a>
                  
                                    
                  </li>
             
                     
                <li><img style="margin-top:-3px;margin-right:5px;width:10px;height:10px;" src="https://lawrato.com/assets/images/svg/double-angle-pointing-to-right1.svg">
                  <a href="https://lawrato.com/criminal-legal-advice/anticipatory-bail-in-498a-and-307-how-long-is-it-valid-for-72900">
          Anticipatory Bail In 498A and 307, how long is it valid for                         </a>
                  
                                    
                  </li>
             
                     
                <li><img style="margin-top:-3px;margin-right:5px;width:10px;height:10px;" src="https://lawrato.com/assets/images/svg/double-angle-pointing-to-right1.svg">
                  <a href="https://lawrato.com/property-legal-advice/mvvnl-not-giving-domestic-electrical-connectionbecause-of-earlier-due-72891">
          MVVNL not giving domestic electrical connection,because of earlier due                         </a>
                  
                                    
                  </li>
             
                     
                <li><img style="margin-top:-3px;margin-right:5px;width:10px;height:10px;" src="https://lawrato.com/assets/images/svg/double-angle-pointing-to-right1.svg">
                  <a href="https://lawrato.com/divorce-legal-advice/on-what-grounds-is-alimony-decided-by-the-court-72887">
          On what grounds is alimony decided by the court                         </a>
                  
                                    
                  </li>
             
                     
                <li><img style="margin-top:-3px;margin-right:5px;width:10px;height:10px;" src="https://lawrato.com/assets/images/svg/double-angle-pointing-to-right1.svg">
                  <a href="https://lawrato.com/criminal-legal-advice/how-often-do-i-need-to-appear-in-court-for-a-dv-case-filled-by-wife-72883">
          How often do I need to appear in court for a DV case filled by wife                         </a>
                  
                                    
                  </li>
             
               </ul>
 
      <span class="viewmore"><a class="blueclass" href="https://lawrato.com/free-legal-advice">Search all  Answers &gt;&gt;</a>
      </span>
</div>


</div>

  


  


<div class="col-md-12 widget widget-recent-post">
<div class="well-box">

              <a href="https://lawrato.com/legal-news"><h3 style="margin: 0px 0 20px 0px;" class="widget-title">Latest News Articles</h3></a>
                  
  

            <div>
<img style="margin-top:-3px;margin-right:5px;width:10px;height:10px;" src="https://lawrato.com/assets/images/svg/double-angle-pointing-to-right1.svg">
<a style="font-size:12px;" title="Do not expect homebuyer to wait indefinitely for possession of Flat, says NCDRC" href="https://lawrato.com/legal-news/1490/do-not-expect-homebuyer-to-wait-indefinitely-for-possession-of-flat-says-ncdrc">Do not expect homebuyer to wait indefinitely for p...</a>
</div>
<div>
<span style="font-size:10px; float:right;">October 20, 2017</span>
</div>
<div class="clearfix"></div>
             
            <div>
<img style="margin-top:-3px;margin-right:5px;width:10px;height:10px;" src="https://lawrato.com/assets/images/svg/double-angle-pointing-to-right1.svg">
<a style="font-size:12px;" title="Bombay High Court declares wife as the guardian of her husband in coma condition" href="https://lawrato.com/legal-news/1488/bombay-high-court-declares-wife-as-the-guardian-of-her-husband-in-coma-condition">Bombay High Court declares wife as the guardian of...</a>
</div>
<div>
<span style="font-size:10px; float:right;">October 18, 2017</span>
</div>
<div class="clearfix"></div>
             
            <div>
<img style="margin-top:-3px;margin-right:5px;width:10px;height:10px;" src="https://lawrato.com/assets/images/svg/double-angle-pointing-to-right1.svg">
<a style="font-size:12px;" title="Crackers burst outside the Supreme Court to protest against ban on firecracker sale" href="https://lawrato.com/legal-news/1489/crackers-burst-outside-the-supreme-court-to-protest-against-ban-on-firecracker-sale">Crackers burst outside the Supreme Court to protes...</a>
</div>
<div>
<span style="font-size:10px; float:right;">October 18, 2017</span>
</div>
<div class="clearfix"></div>
             
             
     <span class="viewmore"><a class="blueclass" href="https://lawrato.com/legal-news">View all &gt;&gt;</a></span>



            </div>
</div>







<div class="col-md-12 widget widget-recent-post">
</div>


</div>


</div>
</div>


</div></div>