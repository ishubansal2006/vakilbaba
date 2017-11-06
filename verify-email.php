
<?php

	include('includes/config.php');
	error_reporting(0);

	if (isset($_GET['verifyCode']) && isset($_GET['id'])) {
	
		$code       =    $_GET['verifyCode'];
		$advId     =     $_GET['id'];
		$email_verified = 0;
		
		$sql ="SELECT * FROM advocatedetails WHERE Id=:id and VerifyEmailCode=:code";
		$query= $dbh -> prepare($sql);
		$query-> bindParam(':id', $advId, PDO::PARAM_STR);
		$query-> bindParam(':code', $code, PDO::PARAM_STR);
		$query-> execute();
		
		if($query->rowCount() > 0) {
			$sql ="UPDATE advocatedetails SET EmailVerified = 1 WHERE Id=:id";
			$new_query = $dbh -> prepare($sql);
			$new_query-> bindParam(':id', $advId, PDO::PARAM_STR);
			$new_query-> execute();
			
			if($new_query->rowCount() > 0) {
				$email_verified = 1;
			}

		} else {
			$email_verified = 0;
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
<title>Confirm Email</title>
<!--Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

<?php include('includes/header.php');?>

<div style="text-align:center;margin-top:150px;">
    <h3>Verify Email</h3>
    <hr class="mb10" />
	
	<?php if ($email_verified == 1) { ?>
    <div>
        <section>
            <div class="form-group">
                <h4>Thank you for confirming your email.</h4>
                <p>
                    Please <strong><a href="advocate-login.php">Click here </a></strong> to Log in
                </p>
            </div>
        </section>
    </div>
	<?php } else { ?>
	<div>
        <section>
            <div class="form-group">
                <h4>Can't verify email</h4>
                <p>
                    Please try again or contact Vakilbaba support
                </p>
            </div>
        </section>
    </div>
	<?php } ?>
</div>

</body>
</html>