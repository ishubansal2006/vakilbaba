<?php 
session_start();
include('includes/config.php');
error_reporting(0);

$service_type = $_GET['service_type'];
$service_id = $_GET['service_id'];

if ($service_id == 0) {
	if ($service_type == 'Legal') {
		$sql = "SELECT * from tbllegalservice";
	} else if ($service_type == 'Account') {
		$sql = "SELECT * from tblaccountservice";
	} else if ($service_type == 'Loan') {
		$sql = "SELECT * from tblloanservice";
	}
	
	$query = $dbh -> prepare($sql);
	$query->execute();
	
} else {
	if ($service_type == 'Legal') {
		$sql = "SELECT * from tbllegalservice WHERE ServiceId=:ServiceId";
	} else if ($service_type == 'Account') {
		$sql = "SELECT * from tblaccountservice WHERE ServiceId=:ServiceId";
	} else if ($service_type == 'Loan') {
		$sql = "SELECT * from tblloanservice WHERE ServiceId=:ServiceId";
	}
	
	$query = $dbh -> prepare($sql);
	$query->bindParam(':ServiceId', $service_id, PDO::PARAM_INT);
	$query->execute();
}

$resultCount = $query->rowCount();
$results = $query->fetchAll(PDO::FETCH_OBJ);

$array = array();

foreach($results as $result) {
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
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
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
		<?php if ($service_id != 0) { ?>
			<div class="col-md-4 col-md-offset-1" style="margin-top:10%"> 
				<div class="panel panel-success">
					<div class="panel-heading" style="text-align: left;background-color: #FFBC51"> 
					  <center><h4><?= $array[0]->ServiceName; ?></h4></center>
					  <h4 style="text-align: right;">
					</div>
					<div class="panel-body">
						<?= $array[0]->ShortDescription; ?>
					</div>
				</div>
			</div>
		<?php } ?>
		<?php if ($service_id != 0) { ?>
			<div class="col-md-4 col-md-offset-2">
		<?php } else { ?>
			<div class="col-md-4 col-md-offset-7">
		<?php } ?>
        
            <div class="panel panel-success">
                <div class="panel-heading" style="text-align: left; background-color: #FFBC51"> 
                  <center><h4 style="font-weight: bold">Fill Your Details</h4></center>
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
                        <div class="form-group last">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success btn-sm" style="background-color: #FFBC51; color: #000">Sign in</button>
                                <button type="reset" class="btn btn-default btn-sm" style="background-color: #FFBC51; color: #000">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer"><b>Not Registered?</b><br>
                	<i class="fa fa-user"><a href="#"> Register here</a></i>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
  </div>
</div>
</section>

<?php if ($service_id == 0) { $count = 0; ?>
	<?php foreach ($array as $row) { ?>
			<?php if ($count == 0) { ?>
				<section style="margin-top: -4%">
			<?php } else { ?>
				<section>
			<?php } ?>
			
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
				</center>
				</div>
			</section>
			<section class="Registration" id="registration">
				<div class="container">
				  <div class="row">
					<div class="col-md-6">
					<center><h2>What is <?= $row->ServiceName; ?>?</h2></center>
					<p style="text-align: justify;">
					  <?= $row->Description; ?>
					</p>
					</div>
					<div class="col-md-6" style="border-left: 2px solid grey">
					  <center><img src="assets/images/multiple.png" style="width: 50%; height:50%;"></center>
					</div>
				  </div>
				</div>
			</section>
			<section id="procedure">
				<div class="container">
				  <div class="row">
					<center><h2>PROCEDURE</h2><hr></center>
					<p>
					  <?= $row->Operation; ?>
					</p>
				  </div>
				</div>
			</section>
			<section id="#registration">
				<div class="container">
				  <div class="row">
					<center><h2>Benefits</h2></center>
					<p>
					  <?= $row->Benefits; ?>
					</p>
				  </div>
				</div>
			</section>
			<section id="#registration">
				<div class="container">
				  <div class="row">
					<center><h2>What Include?</h2></center>
					<p>
					  <?= $row->WhatInclude; ?>
					</p>
				  </div>
				</div>
			</section>
			<section id="#registration">
				<div class="container">
				  <div class="row">
					<center><h2>Registration Step</h2></center>
					<p>
					  <?= $row->RegistrationStep; ?>
					</p>
				  </div>
				</div>
			</section>
			<section id="#registration">
				<div class="container">
				  <div class="row">
					<center><h2>Documents Required</h2></center>
					<p>
					  <?= $row->DocumentsRequired; ?>
					</p>
				  </div>
				</div>
			</section>
	
	<?php $count++; } ?>
<?php } else { ?>
	<section style="margin-top: -4%">
		<div class="panel panel-primary">
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
		</center>
		</div>
</section>

	<section class="Registration" id="registration" style="border-bottom: 2px solid red">
	<div class="container">
	  <div class="row">
		<div class="col-md-6">
		<center><h2>What is <?= $array[0]->ServiceName; ?>?</h2></center>
		<p style="text-align: justify;">
		  <?= $array[0]->Description; ?>
		</p>
		</div>
		<div class="col-md-6" style="border-left: 2px solid grey">
		  <center><img src="assets/images/multiple.png" style="width: 50%; height:50%;"></center>
		</div>
	  </div>
	</div>
	</section>
	<section id="procedure" style="border-bottom: 2px solid red">
	<div class="container">
	  <div class="row">
		<center><h2>PROCEDURE</h2><hr></center>
		<p>
		  <?= $array[0]->Operation; ?>
		</p>
	  </div>
	</div>
	</section>
	<section id="#registration">
	<div class="container">
	  <div class="row">
		<center><h2>Benefits</h2></center>
		<p>
		  <?= $array[0]->Benefits; ?>
		</p>
	  </div>
	</div>
	</section>
	<!--<section id="#registration">
	<div class="container">
	  <div class="row">
		<center><h2>What Include?</h2></center>
		<p>
		  <?= $array[0]->WhatInclude; ?>
		</p>
	  </div>
	</div>
	</section> -->
	<section id="#registration">
	<div class="container">
	  <div class="row">
		<center><h2>Registration Step</h2></center>
		<p>
		  <?= $array[0]->RegistrationStep; ?>
		</p>
	  </div>
	</div>
	</section>
	<section id="#registration">
	<div class="container">
	  <div class="row">
		<center><h2>Documents Required</h2></center>
		<p>
		  <?= $array[0]->DocumentsRequired; ?>
		</p>
	  </div>
	</div>
	</section>

<?php } ?>


<section>
<?php include('includes/footer.php');?>
</section>
</body>
</html>