<?php 
session_start();
include('includes/config.php');
error_reporting(0);

/*if (isset($_POST['submit'])) {
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
	$password = md5($_POST['password']);
	$about=$_POST['bio'];

$sql="INSERT INTO  advocatedetails (AdvocateName,Gender,Email,Mobile, Language, Address, Pin, City, State, Expertise,Experience,Court,Barcode,TelephoneConsultantFee,ConsultantFee, CaseFilingFee,Password,About) 
VALUES(:name,:gender,:email,:mobile,:language,:address,:pin,:city,:state,:expertise,:experience,:court,:barcode,:telephone,:meeting,:casefee,:password, :about)";
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
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->bindParam(':about',$about,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();

	if(true) {
		echo "<script>alert('Registration successfull. Now you can login');</script>";
	} else {
		echo "<script>alert('Something went wrong. Please try again');</script>";
	}
}*/

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
<body>	
	<!--header-->
<?php include('includes/header.php');?>
<!--/header--> 

		<div class="container" style="margin-top: 100px">
			<h3 style="color: #000" class="section-header text-center">Register yourself with Vakilbaba</h3>
			<div class="row">
				<form enctype="multipart/form-data" action="image_upload.php" method="post" name="image_upload_form" id="image_upload_form">
                    <div id="imgArea" style='height:100px;width:100px;'>
                        <img class="img-responsive thumbnail large-view" src=""  alt="img" height='80' width='80' style='height:100px;width:100px;'>
                    </div>
           
                      <div class="progressBar">
                        <div class="bar"></div>
                        <div class="percent">0%</div>
                      </div>
                        
                      <label for="image_upload_file">Choose image
						<input type="hidden" name="image_name" id="image_name" />
	                    <input type="file" accept="image/*" name="image_upload_file" id="image_upload_file" placeholder="upload image">
                     </label>
                  
                  </form>
			</div>
			<div class="col col-md-5">

			<div class="row">
				
				<!-- <form action="#" method="POST"> -->
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
						<!--<input type="text" name="state" placeholder="your state" class="form-control" required/>-->
						<select class="form-control" name="state" required>
							<option value="">Select State</option>
							<option value="andhra_pradesh">Andhra Pradesh</option>
							<option value="arunachal_pradesh">Arunachal Pradesh</option>
							<option value="assam">Assam</option>
							<option value="bihar">Bihar</option>
							<option value="chandigarh">Chandigarh</option>
							<option value="chhattisgarh">Chhattisgarh</option>
							<option value="delhi">Delhi</option>
							<option value="goa">Goa</option>
							<option value="gujarat">Gujarat</option>
							<option value="haryana">Haryana</option>
							<option value="himachal_pradesh">Himachal Pradesh</option>
							<option value="jammu_and_kashmir">Jammu and Kashmir</option>
							<option value="jharkhand">Jharkhand</option>
							<option value="karnataka">Karnataka</option>
							<option value="kerala">Kerala</option>
							<option value="madhya_pradesh">Madhya Pradesh</option>
							<option value="maharashtra">Maharashtra</option>
							<option value="manipur">Manipur</option>
							<option value="meghalaya">Meghalaya</option>
							<option value="mizoram">Mizoram</option>
							<option value="nagaland">Nagaland</option>
							<option value="odisha">Odisha</option>
							<option value="punjab">Punjab</option>
							<option value="rajasthan">Rajasthan</option>
							<option value="sikkim">Sikkim</option>
							<option value="tamil_nadu">Tamil Nadu</option>
							<option value="telangana">Telangana</option>
							<option value="tripura">Tripura</option>
							<option value="uttar_pradesh">Uttar Pradesh</option>
							<option value="uttarakhand">Uttarakhand</option>
							<option value="west_bengal">West Bengal</option>
						</select>
					</div>

					<div class="form-group">
						<label for="name">Password:</label>
						<input type="password" name="password" placeholder="Password" class="form-control" required/>
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
						<!-- <label for="name">Practice Courts:</label>
						<input type="text" name="court" placeholder="court" class="form-control" required/> -->
						<label for="name">Practice Courts:</label>
						<select class="form-control" name="court">
							<option value="">Select court</option>
							<option value="district court">district court</option>
							<option value="high court">high court</option>
							<option value="supreme court">supreme court</option>
						</select>
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
						<label for="name">Retype:</label>
						<input type="password" name="retype" placeholder="Retype Password" class="form-control" required/>
					</div>
					
					<div class="form-group">
						<input type="hidden" name="image" value=''>
						<input type="submit" name="submit" class="btn btn-primary register" style="background-color: #FFBC51; color: #000">
						<span class="error text-danger"></span>
						<span class="success text-success"></span>
					</div>
					
					<!-- </form> -->
			</div>
			</div>				
</div>	

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-form.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
</body>
<!--footer-->
<?php// include 'includes/footer.php';?>
<!--/footer-->