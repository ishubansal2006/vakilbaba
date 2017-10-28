<?php 
session_start();
include('includes/config.php');
error_reporting(0);

$expertise = $_GET['type'];
$expertise_per = "%$expertise%";
$city = $_GET['city'];

$sql = "SELECT * from advocatedetails WHERE Expertise like :Expertise AND City = :City";
$query = $dbh -> prepare($sql);
$query->bindParam(':Expertise', $expertise_per, PDO::PARAM_STR);
$query->bindParam(':City', $city, PDO::PARAM_STR);
$query->execute();

$resultCount = $query->rowCount();
$results = $query->fetchAll(PDO::FETCH_OBJ);


$array = array();

foreach($results as $result) { 
	//print "curl response is:" . $result->AdvocateName;
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
<section style="margin-top: 80px">
  <!--filter section-->
  <div class="container" style="margin-bottom: 20%">
  <div class="row">
    <div class="col-md-12">
    <div class="jumbotron text-center" style=" background-color:#498fff;margin-bottom: -1px; margin-left: 0px;width:102.5%">
      <h2 class="section-header text-center" style="color: #ffffff;margin-bottom:-30px">Find the Best Advocates<span> Near you!</span></h2>
       <form id="frmSearchAdv" action="all-profile.php">
        <div class="container">      
      <div class="row">
    <div class="col-sm-2 col-md-offset-2">
      <div class="col-md-6"></div>
     
	<select name="type" id="expertise" style="width: 110px; height: 48px; border-radius: 10px">               <option value="">Select Law</option>
                  <option value="civil" <?= $expertise == 'civil' ? ' selected="selected"' : '';?> >Civil</option>
                  <option value="criminal" <?= $expertise == 'criminal' ? ' selected="selected"' : '';?> >Criminal</option>
                  <option value="matrimonial" <?= $expertise == 'matrimonial' ? ' selected="selected"' : '';?> >Matrimonial</option>
                  <option value="divorce" <?= $expertise == 'divorce' ? ' selected="selected"' : '';?> >Divorce</option>
                  <option value="taxationlow" <?= $expertise == 'taxationlow' ? ' selected="selected"' : '';?> >Taxation Low</option>
                  <option value="intellectualproperty" <?= $expertise == 'intellectualproperty' ? ' selected="selected"' : '';?> >Intellectual property</option>
                  <option value="servicesabour" <?= $expertise == 'servicesabour' ? ' selected="selected"' : '';?> >Service/Labour laws</option>
                  <option value="motoraccidentlaws" <?= $expertise == 'motoraccidentlaws' ? ' selected="selected"' : '';?> >Motor Accident Laws</option>
                  <option value="corporatelaw" <?= $expertise == 'corporatelaw' ? ' selected="selected"' : '';?> >Corporate Law</option>
                  <option value="chequebounce" <?= $expertise == 'chequebounce' ? ' selected="selected"' : '';?> >Cheque bounce/fraud</option>
                  <option value="cyberlaws" <?= $expertise == 'cyberlaws' ? ' selected="selected"' : '';?> >Cyber Laws</option>
                  <option value="propertylaw" <?= $expertise == 'propertylaw' ? ' selected="selected"' : '';?> >Property Law</option>
      </select>
    </div>
	<div class="col-sm-6 col-xm-3">
         <div class="input-group input-group-lg">
            <input type="text" id="city" class="form-control" placeholder="location" name="city" value="<?php echo $city; ?>">
            <span class="input-group-addon"><a onclick="searchAdvocate()"><span class="glyphicon glyphicon-search"></span></a></span>
			
          </div>
    </div>
    
  </div>
</div>
</form>
</div>
</div>
</div>
  <!--end filter section-->
<section >
<div class="container" style="background-color: #baffed">
<div class="row">
  <div class="col-md-12" style="margin-left: -12px">
	<?php 
		if($resultCount > 0):
			foreach($array as $row): ?>
		<div class="col-md-3">
			<div class="card" style="width: 15rem;">
				<img class="card-img-top" height="100" width="100" src="<?= $row->ProfileImage == NULL ? 'assets\images\man.png' : $row->ProfileImage;?>" alt="Card image cap">
				<div class="card-block">
					<input type="hidden" id="advocate_<?php echo $row->AdvocateId; ?>" value="<?php echo $row->AdvocateId; ?>" />
					<h4 class="card-title"><?php echo $row->AdvocateName; ?></h4>
					<p class="card-text">Experience: <?= $row->Experience == NULL ? '0' : $row->Experience; ?> years</p>
          <p class="card-text">Expertise: <?= $row->Expertise == NULL ? '0' : $row->Expertise; ?></p>
					<a class="btn" style="background-color: #FFBC51; color: #000" href="advocate-profile.php?id=<?php echo $row->AdvocateId; ?>">Go somewhere</a>
				</div>
			</div>
		</div>
		
	<?php endforeach; ?>
	<?php endif; ?>

	
       
  </div>
</div> 
</div>
</section>
<div>
 </div>
</div>
<!--footer-->
<?php include('includes/footer.php');?>
<!--End footer-->
</body>
</html>