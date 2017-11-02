<?php 
session_start();
include('includes/config.php');
error_reporting(0);


$sql = "SELECT * from advocatedetails";
$query = $dbh -> prepare($sql);
$query->execute();

$resultCount = $query->rowCount();
$results = $query->fetchAll(PDO::FETCH_OBJ);

$car_array1 = array();
$car_array2 = array();

$count = 0;
foreach($results as $result) {
	if ($count < 20) {
		$car_array1[] = $result;
	} else {
		$car_array2[] = $result;
	}
	$count++;
}

$arr1_count = count($car_array1);
$arr2_count = count($car_array2);

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>vakil Baba</title>
<!--Bootstrap -->
<script src="assets/js/bootstrap.min.js"></script> 
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<script src="assets/js/jquery.min.js"></script>
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->

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

<script type="text/javascript">
function searchAdvocate() {
	
	document.getElementById("frmSearchAdv").submit();
}
</script>

</head>
<body>
        
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 

<!-- Banners -->
<!--<style>
a:hover {
    background-color:green;
}
</style>-->
<!--test zoom-->
<section id="banner" class="banner-section" style="margin-top: 50px;">

  <div class="container-liquid" style="margin:0px; padding: 0px">
    <div class="container">
            <div class="row">
              <!-- legal section -->

              <div class="col-md-4">
                <div class="bg-lightest border-1px p-25" style="background-color: #D5D3C6">
                  <div style="margin-top: -2px;margin-right: -2px;margin-left: -2px">
                  <h4 class="text-theme-colored text-uppercase m-0" style="padding-top: 10px;font color: #ffffff"><center>Legal</center></h4>
                  </div>
                  <b><hr></b>
                  <div class="line-bottom mb-30"></div>

                  <style type="text/css">
                    li.content-li{
                      font-size: 14px;
                    }
                  </style>
                  
                  <ul>
                    <a href="talktolawyer.php">
                    <li class="colm-li">
                       <i class="fa fa fa-wechat fa-2x" style="margin-left: 8px"></i><br><br>
                       <p>Talk To Lawyer</p>
                      </li>
                      </a>

                    <a href="Leagal-notice.php">     
                    <li class="colm-li">
                       <i class="fa  fa-sticky-note fa-2x " style="margin-left: 8px"></i><br><br>
                       <p>Legal Notice</p>
                      </li></a>

                    <a href="Email-Enquiery.php">
                   <li class="colm-li">
                       <i class="fa fa-envelope fa-2x " style="margin-left: 8px"></i><br><br>
                       <p>Email Enquiry</p>
                      </li></a>
                    
                  </ul>
              
                 <ul>
                    <a href="talktojustics.php">
                    <li class="colm-li">
                       <i class="fa fa-commenting fa-2x" style="margin-left: 8px"></i><br><br>
                       <p>Talk To Justice</p>
                      </li>
                      </a>

                    <a href="notary.php">     
                    <li class="colm-li">
                       <i class="fa  fa-clipboard fa-2x " style="margin-left: 8px"></i><br><br>
                       <p>Online Notary</p>
                      </li></a>

                      <a href="Online-Will.php">
                   <li class="colm-li">
                       <i class="fa fa-star fa-2x " style="margin-left: 8px"></i><br><br>
                       <p>Online will </p>
                      </li></a>
                    
                  </ul>
        
                 <div style="padding-bottom: 20px">
                  <center>
                   <button type="button" class="btn" style="background-color: #FFBC51">
                    <a href="all-services.php"><font color="#000">More Services</font></a></button>
                   </center>
                 </div> 
                 
                </div>
              </div>
              <!--/legal.-account start-->
                <div class="col-md-4">
                <div class="bg-lightest border-1px p-25">
                  <h4 class="text-theme-colored text-uppercase m-0" style="padding-top: 10px"><center>Account</center></h4><hr>
                  <div class="line-bottom mb-30"></div>
                
                 <ul>
                    <a href="services_page.php?service_type=Account&service_id=1">
                    <li class="colm-li">
                       <i class="fa fa-file-text fa-2x" style="margin-left: 8px"></i><br><br>
                       <p>GST Registration</p>
                      </li>
                      </a>

                    <a href="services_page.php?service_type=Account&service_id=2">     
                    <li class="colm-li">
                       <i class="fa  fa-file-text-o fa-2x " style="margin-left: 8px"></i><br><br>
                       <p>GST Return</p>
                      </li></a>

                    <a href="services_page.php?service_type=Account&service_id=3">
                   <li class="colm-li">
                       <i class="fa fa-files-o fa-2x " style="margin-left: 8px"></i><br><br>
                       <p>TDS Return</p>
                      </li></a>
                    
                  </ul>
              
                 <ul>
                    <a href="services_page.php?service_type=Account&service_id=4">
                    <li class="colm-li">
                       <i class="fa fa-building fa-2x" style="margin-left: 8px"></i><br><br>
                       <p>Company Registration</p>
                      </li>
                      </a>

                    <a href="services_page.php?service_type=Account&service_id=5">     
                    <li class="colm-li">
                       <i class="fa  fa-ship fa-2x " style="margin-left: 8px"></i><br><br>
                       <p>Import Export</p>
                      </li></a>

                    <a href="services_page.php?service_type=Account&service_id=6">
                   <li class="colm-li">
                       <i class="fa fa-trademark fa-2x " style="margin-left: 8px"></i><br><br>
                       <p>Trademark Registration</p>
                      </li></a>
                    
                  </ul>
  
                  <div style="padding-bottom: 20px">
                  <center>
                   <button type="button" class="btn" style="background-color: #FFBC51">
                    <a href="all-services.php"><font color="#000">More Services</font></a></button>
                   </center>
                 </div>

                </div>
              </div>
              <!--/account.- loan start-->
                            <div class="col-md-4">
                <div class="bg-lightest border-1px p-25">
                  <h4 class="text-theme-colored text-uppercase m-0" style="padding-top: 10px"><center>Loan</center></h4><hr>
                  <div class="line-bottom mb-30"></div>
                   
                 <ul>
                    <a href="services_page.php?service_type=Loan&service_id=1">
                    <li class="colm-li">
                       <i class="fa fa-briefcase fa-2x" style="margin-left: 8px"></i><br><br>
                       <p>Business Loan</p>
                      </li>
                      </a>

                    <a href="services_page.php?service_type=Loan&service_id=2">     
                    <li class="colm-li">
                       <i class="fa  fa-money fa-2x " style="margin-left: 8px"></i><br><br>
                       <p>Personal Loan</p>
                      </li></a>

                      <a href="services_page.php?service_type=Loan&service_id=3">
                   <li class="colm-li">
                       <i class="fa fa-line-chart fa-2x " style="margin-left: 8px"></i><br><br>
                       <p>Startup Loan</p>
                      </li></a>
                    
                  </ul>
              
                 <ul>
                    <a href="services_page.php?service_type=Loan&service_id=4">
                    <li class="colm-li">
                       <i class="fa fa-graduation-cap fa-2x" style="margin-left: 8px"></i><br><br>
                       <p>Education Loan</p>
                      </li>
                      </a>

                    <a href="services_page.php?service_type=Loan&service_id=5">     
                    <li class="colm-li">
                       <i class="fa  fa-inr fa-2x " style="margin-left: 8px"></i><br><br>
                       <p>Smart Cash</p>
                      </li></a>

                    <a href="services_page.php?service_type=Loan&service_id=6">
                   <li class="colm-li">
                       <i class="fa fa-home fa-2x " style="margin-left: 8px"></i><br><br>
                       <p>Home Loan</p>
                      </li></a>
                    
                  </ul>

                  <div style="padding-bottom: 20px">
                  <center>
                   <button type="button" class="btn" style="background-color: #FFBC51">
                   <a href="all-services.php"><font color="#000">More Services</font></a></button>
                   </center>
                 </div>

                </div>
              </div>
            </div>
          </div>
</div>
</section>



<div class="jumbotron" style="background-color: #ffffff; margin-bottom: -10px; border-top: 2px solid red ;border-bottom: 2px solid red">
    <div class="container">
      <div class="row">
      <div class="col col-md-3" style= "border-right:2px solid #ffbc51;padding-top: -5px">
      <center><i class="fa fa-user fa-4x" style="color:#ffbc51 ;border-bottom: 2px solid #ffbc51"></i></center>
      <center><p style="color: #000">FIND YOUR LAWYER</p></center>
    </div>
    <div class="col col-md-3" style=" border-right:2px solid #ffbc51";>
      <center><i class="fa fa-wechat fa-4x"  style="color:#ffbc51;border-bottom: 2px solid #ffbc51""></i></center>
      <a href="talktolawyer.php"><center><p style="color: #000">TALK TO LAWYER</p></center></a>
    </div>
    <div class="col col-md-3" style="border-right:2px solid #ffbc51;">
      <center><i class="fa fa-paper-plane fa-4x" style="color:#ffbc51; border-bottom: 2px solid #ffbc51"></i></center>
      <center><p style="color: #000">ASK YOUR DOUBTS</p></center>
    </div>
    <div class="col col-md-3" >
      <center><i class="fa fa-phone fa-4x" style="color:#ffbc51; border-bottom: 2px solid #ffbc51""></i></center>
      <center><p style="color: #000">CALL NOW: <span><a href="tel:+91-7900127900">7900127900</a></span></p></center>
      <center><p></p></center>
    </div>
  </div>
    </div>
     </div>
<!-- /Banners --> 
<!-- find advocates-->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<section class="section-padding" style="margin-bottom: -10%">
  <div class="container">
    <div class="section-header text-center">
      <h2><span> </span></h2>
</div>
    <!-<div class="row">
<div class="container" style="margin-bottom: -8%">
  <div class="row">
    <div class="col-md-12">
    <div class="jumbotron text-center" style="margin-top: -16.3%; background-color:#252526;">
      <h2 class="section-header text-center" style="color: #FFBC51;margin-bottom:-30px">Find the Best Advocates<span> <font style="color: #fff">Near you!</font></span></h2>
         <form id="frmSearchAdv" action="all-profile.php" action="post">
        <div class="container">      
      <div class="row">
    <div class="col-sm-2 col-md-offset-2">
      <div class="col-md-6"></div>
    <select name="type" id="expertise" style="width: 110px; height: 48px; border-radius: 10px">
                  <option value="">Select Law</option>
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
    <div class="col-sm-6 col-xm-3">
         <div class="input-group input-group-lg">
			<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyClvpI-xbAjvuOWeVJrONXJTLbT8bHsMtk&sensor=false&libraries=places"></script>
			<script type="text/javascript">
				google.maps.event.addDomListener(window, 'load', function () {
					var places = new google.maps.places.Autocomplete(document.getElementById('location'));
					google.maps.event.addListener(places, 'place_changed', function () {
						var place = places.getPlace();
						var city = place.address_components[0].long_name;
						$('#city_name').val(city);
						/*var address = place.formatted_address;
						var latitude = place.geometry.location.lat();
						var longitude = place.geometry.location.lng();
						var mesg = "Address: " + address;
						mesg += "\nLatitude: " + latitude;
						mesg += "\nLongitude: " + longitude;
						//alert(mesg);*/
					});
				});
			</script>
			<input type="hidden" id="city_name" name="city_name">
            <input type="text" id="location" class="form-control" placeholder="location" name="location">
            <span class="input-group-addon"><a onclick="searchAdvocate()"><span class="glyphicon glyphicon-search"></span></a></span>
          </div>
    </div>
  </div>
</div>
        
      </form>
      <br><br>
    </div>
  </div>
  </div>
</div>
    
  </div>
</section>
<!-- /find advocates --> 

<!-- advocates profiles-->
<section>
  <div class="section-header text-center">
      <h2>Advocates<span> Profiles</span></h2>
  </div>

<!--Carausal by shyam-->
  <script>
  // Carousel Auto-Cycle
  $(document).ready(function() {
    $('.carousel').carousel({
      interval: 3000
    })
  });

</script>
<div class="container">
<div class="col-xs-12">
    <div class="carousel slide" id="myCarousel1">
        <div class="carousel-inner">
		
		<?php
			$index = 0;
			if($resultCount > 0 && $arr1_count > 0) {
				foreach($car_array1 as $row) { ?>
				
				<?php	if ($index == 0 && $index % 4 == 0) { ?>
					<div class="item active">
                    <ul class="thumbnails">
					
				<?php } else if ($index != 0 && $index % 4 == 0) { ?>
					<div class="item">
                    <ul class="thumbnails">
				<?php } ?>
                        <li class="col-sm-3">
							<div class="panel panel-warning">
							<div class="panel-heading"></div>
							  <div class="panel-body">
							  <a href="advocate-profile.php?id=<?php echo $row->Id; ?>"><img width="205.5" height="137" src="<?= $row->image == NULL ? 'assets\images\advocates\default.png' : 'uploades/medium/'.$row->image;?>" alt=""></a>
							  </div>
							<div class="panel-footer">
								<span style="font-size:14px;"><?php echo $row->AdvocateName; ?></span>
							</div>
						  </div>
							</li>
				<?php	if ($index % 4 == 3) { ?>
					</ul></div>
				<?php } ?>
				
				<?php $index++; ?>
				<?php } } ?>
		</div>
     <!-- /.control-box -->   
                              
    </div><!-- /#myCarousel -->
   <a class="carousel-control left" href="#myCarousel1" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control right" href="#myCarousel1" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>     
</div><!-- /.col-xs-12 -->          

</div><!-- /.container -->
<!--end by shyam-->
<div class="container">
<div class="col-xs-12">
    <div class="carousel slide" id="myCarousel2">
        <div class="carousel-inner">
        <?php
			$index = 0;
			if($resultCount > 0 && $arr2_count > 0) {
				foreach($car_array2 as $row) { ?>
				
				<?php	if ($index == 0 && $index % 4 == 0) { ?>
					<div class="item active">
                    <ul class="thumbnails">
					
				<?php } else if ($index != 0 && $index % 4 == 0) { ?>
					<div class="item">
                    <ul class="thumbnails">
				<?php } ?>
                        <li class="col-sm-3">
							<div class="panel panel-warning">
							<div class="panel-heading"></div>
							  <div class="panel-body">
							  <a href="advocate-profile.php?id=<?php echo $row->Id; ?>"><img width="205.5" height="137" src="<?= $row->image == NULL ? 'assets\images\advocates\default.png' : 'uploades/medium/'.$row->image;?>" alt=""></a>
							  </div>
							<div class="panel-footer">
								<span style="font-size:14px;"><?php echo $row->AdvocateName; ?></span>
							</div>
						  </div>
							</li>
				<?php	if ($index % 4 == 3) { ?>
					</ul></div>
				<?php } ?>
				
				<?php $index++; ?>
				<?php } } ?>
        </div>
     <!-- /.control-box -->   
                              
    </div><!-- /#myCarousel -->
         <a class="carousel-control left" href="#myCarousel2" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control right" href="#myCarousel2" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>  
</div><!-- /.col-xs-12 -->          

</div><!-- /.container -->
<!-- /advocaes profiles-->
</section>
 
<!--why choose us?-->

   <section style="margin-bottom: -30px; background-color:#84baf6 ">
    <div class="jumbotron">

      <div class="row text-center">
          <h2 class="section-header text-center">Why Choose Us?</h2>
          <div class="col-sm-2 col-md-2 col-md-offset-1">
            <div class="icon-box iconbox-theme-colored bg-lighter">
              <span class="icon icon-dark icon-bordered icon-rounded icon-border-effect effect-rounded" >
                <h2 class="five" style="color: #FFBC51">1+</h2>
              </span>
              
              <p class="text-gray">1+ YEAR
EXPERIENCE</p>
             
            </div>
          </div>
          <div class="col-sm-2">
            <div class="icon-box iconbox-theme-colored bg-lighter">
              <span class="icon icon-dark icon-bordered icon-rounded icon-border-effect effect-rounded" href="#">
                <img src="assets/images/multiple.png">
              </span>
              
              <p class="text-gray">LEGAL EXPERT TEAM</p>
              
            </div>
          </div>
          <div class="col-sm-2">
            <div class="icon-box iconbox-theme-colored bg-lighter">
              <span class="icon icon-dark icon-bordered icon-rounded icon-border-effect effect-rounded" href="#">
                <img src="assets/images/man-user.png">
              </span>
             
              <p class="text-gray">CLIENT FROM ALL OVER INDIA</p>
              
            </div>
          </div>
          <div class="col-sm-2">
            <div class="icon-box iconbox-theme-colored bg-lighter">
              <span class="icon icon-dark icon-bordered icon-rounded icon-border-effect effect-rounded" href="#">
                <img src="assets/images/mechanical-engineer.png">
              </span>
             
              <p class="text-gray">GET FAST SUPPORT</p>
    
            </div>
          </div>
          <div class="col-sm-2">
            <div class="icon-box iconbox-theme-colored bg-lighter">
              <span class="icon icon-dark icon-bordered icon-rounded icon-border-effect effect-rounded" href="#">
                <img src="assets/images/gear.png">
              </span>
        
              <p class="text-gray">AFTER SALES SERVICES</p>
              
            </div>
          </div>
        </div>
    </div>
    </section>
  
<!--/choose us-->
<!--Contact Us-->
<section>
  <div class="container-liquid" style="background-color: #fff; border-top: 2px solid red; border-bottom: 2px solid red">
    <div class="row">
   <h1 class="section-header text-center" style="margin-bottom:-40px"><center>Do you need Help?</center></h1>
   <center>
   <p>Feel free to consult us on any legal matter, Vakilbaba is always there for you.</p>
   </center>
   <div style="padding-bottom: 50px">
     <center>
     <h2><i fa fa-phone 2-x></i> <a href="tel:+91-7900127900" style="color:#000"> +91- 7900127900</a></h2>
     <button type="button" class="btn btn-warming" style="background-color: #FFBC51; color: #000" data-toggle="modal" data-target="#myModal">Contact Us</button></center>
     </div>
   </div>
     <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Please Fill Your Details</h4>
        </div>
        <div class="modal-body">
          <form>
  <div class="form-group">
    <label for="Name">Name</label>
    <input type="text" class="form-control" id="email">
  </div>
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="Phone">Phone</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <button type="submit" class="btn btn-default" style="background-color: #FFBC51; color: #000">Submit</button>
</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: #FFBC51; color: #000">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  </div>
</section>

<!--Testimonial -->
<section style="background-image: url(assets/images/testi_3.jpg); background-repeat: no-repeat; background-size: 100% 100%">
  <h2 class="section-header text-center">Testimonials</h2>
  <div class="container content"> 
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="margin-top: -30px"> <!-- Indicators --> 
    <!-- Wrapper for slides -->
     <div class="carousel-inner"> 
      <div class="item active"> 
        <div class="row"> 
          <div class="col-xs-12"> 
            <div class=""> 
              <div class="col-md-2 col-sm-2 col-xs-12" style="background-size: 100%"> 
                <img class="media-object img-rounded img-responsive" src="assets/images/man.png"> </div>
                 <div class="col-md-10 col-sm-10 col-xs-12"> 
                  <div class="caption"> 
                    <p class="text-info lead adjust2" style="color: #fff" style="background-size: 100% 50%; text-align: center;">I never feel the energy of community before, this the best pkatform of information regarding Legal,Accountant and loan</p> <p><span class="glyphicon glyphicon-thumbs-up" style="color: #fff"> Awesome work </span> </p> 
                    <blockquote class="adjust2" style="background-color: rgba(252,252,252,0.26);"> 
                      <p>CGTS</p> <small>
                        <cite title="Source Title">
                          <i class="glyphicon glyphicon-globe" style="color: #fff"></i> www.cgtsworld.com</cite></small>
                           </blockquote> 
                         </div> 
                       </div> 
                     </div> 
                   </div> 
                 </div>
                  </div> 
                  <div class="item"> 
                    <div class="row">
                     <div class="col-xs-12">
                      <div class="">
                       <div class="col-md-2 col-sm-2 col-xs-12">
                        <img class="media-object img-rounded img-responsive" src="assets/images/man.png"> </div> 
                        <div class="col-md-10 col-sm-10 col-xs-12">
                         <div class="caption"> 
                          <p class="text-info lead adjust2" style="color: #fff">There are not a many reason, why i prefer VakilBaba, it has awesom support, friendly nature and best quality work. p.</p> 
                          <p><span class="glyphicon glyphicon-thumbs-up" style="color: #fff"></span> Lovely</p> 
                          <blockquote class="adjust2" style="background-color: rgba(252,252,252,0.26);"> <p>Impye Digital</p> <small>
                            <cite title="Source Title"><i class="glyphicon glyphicon-globe"></i> www.impye.com</cite></small>
                             </blockquote>
                              </div>
                               </div>
                                </div> 
                              </div> 
                            </div> 
                          </div>
                           <div class="item">
                            <div class="row">
                             <div class="col-xs-12"> 
                              <div class=""> 
                                <div class="col-md-2 col-sm-2 col-xs-12">
                                 <img class="media-object img-rounded img-responsive" src="assets/images/man.png"> </div> <div class="col-md-10 col-sm-10 col-xs-12"> <div class="caption"> <p class="text-info lead adjust2" style="color: #fff">Nature of the people is get change as per the time but good people  never get change, after a log time i got such a great services provider in delhi area</p> <p><span class="glyphicon glyphicon-thumbs-up"></span> Thank you So much Vakil Baba</p> <blockquote class="adjust2" style="background-color: rgba(252,252,252,0.26);"> <p>Abhijit Yadav</p> <small><cite title="Source Title"><i class="glyphicon glyphicon-globe" style="color: #fff"></i> www.blogsdada.com</cite></small> </blockquote> </div> </div> </div> </div> </div> </div>
</section>
 
<!--Our partner-->
<section style="background-color: #fff" style="margin-top: -10px">
<div class="container div_zindex">
    <div class="section-header black-text text-center">
      <h2 style="color: #000"><u>Our <span>Partner</u></span></h2>
      <div class="item">
      <div class="col col-md-2">
      <img src="assets/images/company.com_logo1.png">
    </div>
    <div class="col col-md-2">
      <img src="assets/images/company.com_logo1.png">
    </div>
    <div class="col col-md-2">
      <img src="assets/images/company.com_logo1.png">
    </div>
    <div class="col col-md-2">
      <img src="assets/images/company.com_logo1.png">
    </div>
    <div class="col col-md-2">
      <img src="assets/images/company.com_logo1.png">
    </div>
    <div class="col col-md-2">
      <img src="assets/images/company.com_logo1.png">
    </div>

    </div>
  </div>
  </section>
<!--/our partner>
<!--Press release-->

<div class="jumbotron" style="background-color: #FFBC51; margin-bottom: -10px">
    <div class="section-header black-text text-center">
      <h2><u>Press <span>Release</span></u></h2>
      <div class="col col-md-3">
      <img src="assets/images/W3Schools_logo.png">
    </div>
    <div class="col col-md-3">
      <img src="assets/images/W3Schools_logo.png">
    </div>
    <div class="col col-md-3">
      <img src="assets/images/W3Schools_logo.png">
    </div>
    <div class="col col-md-3">
      <img src="assets/images/W3Schools_logo.png">
    </div>

    </div>
  </div>
<!--/press release>

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
 

<script src="assets/js/interface.js"></script> 

<script src="assets/js/bootstrap-slider.min.js"></script> 

<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script> 

    <!--<script type="text/javascript">
      function activatePlacesSearch(){
        var input document.getElementById('city');
        var autocomplete = new google.maps.places.Autocomplete(input);
      }
    </script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClvpI-xbAjvuOWeVJrONXJTLbT8bHsMtk&callback=activatePlacesSearch"></script>-->
</body>
</html>