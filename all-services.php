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
<body class="jumbotron">  
  <!--header-->
<?php include 'includes/header.php';?>
<!--/header--> 
<style type="text/css">
  .notary{
    width: 230px;
    height: 250px;
    margin: 0px 40px 40px 20px;
    background-color: #fff;
  }
</style>
    <div class="container" style="margin-top: 200px">

   
      <div class="row">
     <div class="col col-md-4">   
      <div class="panel panel-default">
        <div class="panel-body"><center><h3><?= $array[0]->ServiceName; ?></h3>
        <h4><?= $array[0]->Price; ?></h4></center>
        </div>
        <div class="panel-footer">
          <center>
          <a href="all-services.php?service_type=Loan&service_id=0" class="btn btn-primary" style="background-color: #FFBC51; color: #000">See Details</a>
          <center>
        </div>
      </div>
     </div>    
</div>
</div>

</body>
<!--footer-->
<?php// include 'includes/footer.php';?>
<!--/footer-->