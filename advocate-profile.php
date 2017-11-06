<?php 
session_start();
include('includes/config.php');
error_reporting(0);

$advId = $_GET['id'];

$sql = "SELECT * from advocatedetails WHERE Id=:AdvocateId";
$query = $dbh -> prepare($sql);
$query->bindParam(':AdvocateId', $advId, PDO::PARAM_INT);
$query->execute();

$resultCount = $query->rowCount();
$results = $query->fetchAll(PDO::FETCH_OBJ);

$array = array();

foreach($results as $result) { 
	print "curl response is:" . $result->AdvocateName;
	$array[] = $result;
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
<script src="assets/js/bootstrap.min.js"></script> 
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<script src="assets/js/jquery.min.js"></script>
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

<div class="container">


      <style>
body{
  background: #fff;
}
.box {
  transition: box-shadow .3s;
  width:  200px;
  height: 250px;
  margin: 10px;
  border-radius:10px;
  border: 1px solid #ccc;
  background: #fff;
  float: left;
  
}
.box:hover {
  box-shadow: 0 0 11px rgba(153, 10, 10,.2); 
  border: 1px solid red;
}
/***
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
***/

body {
  background: #F1F3FA;
}

/* Profile container */
.profile {
  margin: 20px 0;
}

/* Profile sidebar */
.profile-sidebar {
  padding: 20px 0 10px 0;
  background: #fff;
}

.profile-userpic img {
  float: none;
  margin: 0 auto;
  width: 50%;
  height: 50%;
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 50% !important;
}

.profile-usertitle {
  text-align: center;
  margin-top: 20px;
}

.profile-usertitle-name {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.profile-usertitle-job {
  text-transform: uppercase;
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

.profile-userbuttons {
  text-align: center;
  margin-top: 10px;
}

.profile-userbuttons .btn {
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
}

.profile-userbuttons .btn:last-child {
  margin-right: 0px;
}
    
.profile-usermenu {
  margin-top: 30px;
}

.profile-usermenu ul li {
  border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
  border-bottom: none;
}

.profile-usermenu ul li a {
  color: #93a3b5;
  font-size: 14px;
  font-weight: 400;
}

.profile-usermenu ul li a i {
  margin-right: 8px;
  font-size: 14px;
}

.profile-usermenu ul li a:hover {
  background-color: #fafcfd;
  color: #5b9bd1;
}

.profile-usermenu ul li.active {
  border-bottom: none;
}

.profile-usermenu ul li.active a {
  color: #5b9bd1;
  background-color: #f6f9fb;
  border-left: 2px solid #5b9bd1;
  margin-left: -2px;
}

/* Profile Content */
.profile-content {
  padding: 20px;
  background: #fff;
  min-height: 460px;
}
</style>
<body>
<hr class="">
<hr class="">
<hr class="">
<div class="container target">
    <div class="row">
        <div class="col-sm-10">
             <h1 class="section-header text-center"><?php echo $array[0]->AdvocateName; ?></h1>
         
          <button type="button" class="btn btn-success" style="background-color: #FFBC51; color: #000">Book me!</button>  <button type="button" class="btn btn-info" style="background-color: #FFBC51; color: #000">Send me a message</button>
<br>
        </div>
      <div class="col-sm-2"><a href="" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="<?= $array[0]->image == NULL ? 'assets\images\man.png' : 'uploades/small/'.$array[0]->image;?>"></a>

        </div>
    </div>
  <br>
    <div class="row">
        <div class="col-sm-3">
            <!--left col-->
            <ul class="list-group">
                <li class="list-group-item text-muted" contenteditable="false">Profile</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Experience</strong></span> 
					<?= $array[0]->Experience == NULL ? '0' : $array[0]->Experience; ?> years
				</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Expertise</strong></span>
					<?= $array[0]->Expertise == NULL ? '' : $array[0]->Expertise; ?>
				</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">City</strong></span> 
					<?= $array[0]->City == NULL ? '' : $array[0]->City; ?>
		<li class="list-group-item text-right"><span class="pull-left"><strong class="">Consultant Fee</strong></span> 
					<?= $array[0]->City == NULL ? '' : $array[0]->ConsultantFee; ?>
				</li>
			<!--	<li class="list-group-item text-right"><span class="pull-left"><strong class="">Fee</strong></span> 
					Rs. <?= $array[0]->Fee == NULL ? '0' : $array[0]->Fee; ?>
				</li>-->
            </ul>
           
        </div>
        <!--/col-3-->
        <div class="col-sm-9" style="" contenteditable="false">
            <div class="panel panel-default">
                <div class="panel-heading">About Me</div>
                <div class="panel-body"> <?php echo $array[0]->about; ?>
                </div>
            </div>
           
</div>


            <div id="push"></div>
        </div>
        
                
        
</body>