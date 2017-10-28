<?php 
session_start();
error_reporting(0);
if (isset($_POST['submit'])) {
	$email=$_POST['email'];
	$city=$_POST['PASSWORD'];
	
$sql="  advocatedetails (AdvocateName,Gender,Email,Mobile, Language, Address, Pin, City, State, Expertise,Experience,Court,Barcode,TelephoneConsultantFee,CaseFilingFee,UserName,Password,About) VALUES(:name,:gender,:email,:mobile,:language,:address,:pin,:city,:state,:expertise,:experience,:court,:barcode,:telephone,:meeting,:casefee,:about)";
$query = $dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':gender',$gender,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
$query->bindParam(':language',$language,PDO::PARAM_STR);
$query->bindParam(':address',$address,PDO::PARAM_STR);
$query->bindParam(':pin',$pin,PDO::PARAM_STR);
$query->bindParam(':city',$city,PDO::PARAM_STR);
$query->bindParam(':state',$state,PDO::PARAM_STR);
$query->bindParam(':expertise',$expertise,PDO::PARAM_STR);
$query->bindParam(':experience',$experience,PDO::PARAM_STR);
$query->bindParam(':court',$court,PDO::PARAM_STR);
$query->bindParam(':barcode',$barcode,PDO::PARAM_STR);
$query->bindParam(':telephone',$telephone,PDO::PARAM_STR);
$query->bindParam(':meeting',$meeting,PDO::PARAM_STR);
$query->bindParam(':casefee',$casefee,PDO::PARAM_STR);
$query->bindParam(':about',$about,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Registration successfull. Now you can login');</script>";
}
else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}
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

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> 
</head>
<body>	
	<!--header-->
<?php include 'includes/header.php';?>
<!--/header--> 

		<div class="container" style="margin-top: 150px">
			<h3 style="color: #000;" class="section-header text-center">Login To Your Vakilbaba account</h3>
			<div class="col col-md-5">
			<div class="row">
				<form action="" method="POST">
					<div class="form-group">
						<label for="name">Email:</label>
						<input type="email" name="email" placeholder="your email-id" class="form-control" required/>
					</div>
					<div class="form-group">
						<label for="name">Pasword:</label>
						<input type="password" name="password" placeholder="your fee" class="form-control" required/>
					</div>
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-primary register" style="background-color: #FFBC51; color: #000">
					</div>
					</form>
			</div>
			</div>				
</div>	
</body>
<!--footer-->
<?php// include 'includes/footer.php';?>
<!--/footer-->