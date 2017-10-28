<?php 
session_start();
error_reporting(0);
if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$language=$_POST['language'];
	$address=$_POST['address'];
	$pin=$_POST['pin'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$expertise=$_POST['expertise'];
	$experience=$_POST['experience'];
	$court=$_POST['court'];
	$barcode=$_POST['barcode'];
	$telephone=$_POST['telcon'];
	$meeting=$_POST['mecon'];
	$casefee=$_POST['casefee'];
	$about=$_POST['bio'];

$sql="INSERT INTO  advocatedetails (AdvocateName,Gender,Email,Mobile, Language, Address, Pin, City, State, Expertise,Experience,Court,Barcode,TelephoneConsultantFee,CaseFilingFee,UserName,Password,About) VALUES(:name,:gender,:email,:mobile,:language,:address,:pin,:city,:state,:expertise,:experience,:court,:barcode,:telephone,:meeting,:casefee,:about)";
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
			<h3 style="color: #000;" class="section-header text-center">Register yourself with Vakilbaba</h3>
			<div class="col col-md-5">
			<div class="row">
				<form action="" method="POST">
					<div class="form-group">
						<label for="name">Name:</label>
						<input type="text" name="name" placeholder="your name" class="form-control" required/>
					</div>
					<div class="form-group">
						<label for="name">Gender:</label>
						<select class="form-control" name="gender">
							<option value="">your gender</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
					</div>
					<div class="form-group">
						<label for="name">Email:</label>
						<input type="email" name="email" placeholder="your email-id" class="form-control" required/>
					</div>
					<div class="form-group">
						<label for="name">Mobile:</label>
						<input type="tel" name="mobile" placeholder="your contact number"  class="form-control" required/>
					</div>
					<div class="form-group">
						<label for="name">Language Speaks:</label>
						<input type="text" name="language" placeholder="you speak" class="form-control" required/>
					</div>
					<div class="form-group">
						<label for="name">Address:</label>
						<input type="text" name="address" placeholder="your address" class="form-control" required/>
					</div>
					<div class="form-group">
						<label for="name">PIN:</label>
						<input type="text" name="pin" placeholder="your postal PIN" class="form-control" required/>
					</div>
					<div class="form-group">
						<label for="name">City:</label>
						<input type="text" name="city" placeholder="your city" class="form-control" required/>
					</div>
					<div class="form-group">
						<label for="name">State:</label>
						<input type="text" name="state" placeholder="your state" class="form-control" required/>
					</div>

					<div class="form-group">
						<label for="name">Pasword:</label>
						<input type="password" name="password" placeholder="your fee" class="form-control" required/>
					</div>
				</div>
			</div>
					<div class="col col-md-5 col-md-offset-1">
						<div class="row">
					<div class="form-group">
						<label for="name">Practice Area (Expertise):</label>
						<input type="text" name="expertise" placeholder="entries should be seprated by comma" class="form-control" required/>
					</div>
					<div class="form-group">
						<label for="name">Practicing Since:</label>
						<input type="text" name="experience" placeholder="your experience" class="form-control" required/>
					</div>
					<div class="form-group">
						<label for="name">Practice Courts:</label>
						<input type="text" name="court" placeholder="court" class="form-control" required/>
					</div>
					<div class="form-group">
						<label for="name">Bar Council ID:</label>
						<input type="text" name="barcode" placeholder="your BAR ID" class="form-control" required/>
					</div>
					<div class="form-group">
						<label for="name">Telephonic Consultation Fee:</label>
						<input type="text" name="telcon" placeholder="your fee" class="form-control" required/>
					</div>
					<div class="form-group">
						<label for="name">Meeting Consultation Fee:</label>
						<input type="text" name="mecon" placeholder="your fee" class="form-control" required/>
					</div>
					<div class="form-group">
						<label for="name">Case Filing Fee:</label>
						<input type="text" name="casefee" placeholder="your fee" class="form-control" required/>
					</div>
					<div class="form-group">
						<label for="name">Summary:</label>
						<textarea type="text" name="bio" placeholder="about yourself" class="form-control" rows="4">
						</textarea>
					</div>
					<div class="form-group">
						<label for="name">retype password:</label>
						<input type="password" name="retype" placeholder="your fee" class="form-control" required/>
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