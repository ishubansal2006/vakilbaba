<?php require_once('includes/my_config.php') ?>
<?php require_once('includes/functions.php') ?>
<?php require_once 'phpmailer/PHPMailerAutoload.php'; ?>
<?php 

if (isset($_POST['register'])) {

	$name       =      escape_string($_POST['name']);
	$gender     =      escape_string($_POST['gender']);
	$email      =      escape_string($_POST['email']);
	$mobile     =      escape_string($_POST['mobile']);
	$language   =      escape_string($_POST['language']);
	$address    =      escape_string($_POST['address']);
	$pin        =      escape_string($_POST['pin']);
	$city       =      escape_string($_POST['city']);
	$state      =      escape_string($_POST['state']);
	$expertise  =      escape_string($_POST['expertise']);
	$experience =      escape_string($_POST['experience']);
	$court      =      escape_string($_POST['court']);
	$barcode    =      escape_string($_POST['barcode']);
	$telephone  =      escape_string($_POST['telcon']);
	$meeting    =      escape_string($_POST['mecon']);
	$casefee    =      escape_string($_POST['casefee']);
	$about      =      escape_string($_POST['bio']);
	$image      =      escape_string($_POST['image']);
	$password   =    md5(escape_string($_POST['password']));
	$rand_num = 0;
	$userType=0;
	
	$output = array('status'=>'false','error'=>'');
	
	if (get_user_by_email($email)) {
		
		$output['error'] = 'Email address already exists !';
	
	} else {

		$rand_num = mt_rand(100000, 999999);
		$sql="INSERT INTO advocatedetails(AdvocateName, Gender, Email, Mobile, Language, Address, Pin, City, State, Expertise, Experience, Court, Barcode, TelephoneConsultantFee,	ConsultantFee, CaseFilingFee, Password, About, image, VerifyEmailCode)VALUES( '{$name}', '{$gender}', '{$email}', '{$mobile}', '{$language}', '{$address}', '{$pin}', '{$city}', '{$state}', '{$expertise}', '{$experience}', '{$court}', '{$barcode}', '{$telephone}', '{$meeting}', '{$casefee}', '{$password}', '{$about}', '{$image}', '{$rand_num}')";

		$result = mysqli_query($db, $sql);
		$advId = mysqli_insert_id($db);
		echo mysqli_error($db);
		// echo $sql;
		confirm($result);
		
		
		sendEmail($email, $name, $mobile, $address,$userType);
		sendVerifyEmail($email, $name, $mobile, $address, $rand_num, $advId);

		$output['status'] = 'success';
		$output['error'] = '';
	}

	echo json_encode($output);
}
else if(isset($_POST['register-customer'])) {

	$name       =      escape_string($_POST['name']);
	$email      =      escape_string($_POST['email']);
	$mobile     =      escape_string($_POST['mobile']);
	$address    =      escape_string($_POST['address']);
	$city       =      escape_string($_POST['city']);
	$password   =    md5(escape_string($_POST['password']));
	$userType=1;
	
	$output = array('status'=>'false','error'=>'');
	
	if (get_customer_by_email($email)) {
		
		$output['error'] = 'Email address already exists !';
	
	} else {

		$sql="INSERT INTO customerdetails(Name, Email, Mobile, Address, City, Password)VALUES( '{$name}', '{$email}', '{$mobile}', '{$address}',  '{$city}', '{$password}')";

		$result = mysqli_query($db, $sql);
		echo mysqli_error($db);
		// echo $sql;
		confirm($result);
		
		sendEmail($email, $name, $mobile, $address,$userType);

		$output['status'] = 'success';
		$output['error'] = '';
	}

	echo json_encode($output);
}

	function sendEmail($email, $name, $mobile, $address, $userType) {
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->Host = 'mail.vakilbaba.com';
		$mail->SMTPSecure = 'tls';
		$mail->Port = 587;
		$mail->SMTPAuth = true;
		$mail->Username = 'admin@vakilbaba.com';
		$mail->Password = 'admin@123';

		$mail->From = 'admin@vakilbaba.com';
		$mail->FromName = 'vakilbaba Admin';
		$mail->AddAddress('support@vakilbaba.com');
		$mail->Subject = 'New User Signup';
		if($userType==1)
		{
		$data = "\r\n A new user has signed up. Details of the user are :-\r\n\r\n Email: ".$email."\r\n Name: ".$name."\r\n Mobile No: ".$mobile."\r\n Address: ".$address."\r\n\r\n Regards,\r\n Vakilbaba Admin";
		}
		else
		{
			$data = "\r\n A new advocate has signed up. Details of the advocate are :-\r\n\r\n Email: ".$email."\r\n Name: ".$name."\r\n Mobile No: ".$mobile."\r\n Address: ".$address."\r\n\r\n Regards,\r\n Vakilbaba Admin";
		}
		$mail->Body = $data;
		$mail->SMTPOptions = array(
			'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
			));
		
		if($mail->send()) {
			file_put_contents("error/error.txt", "\r\n".date("Y-m-d H:i:s"). " Email successfully sent for a new user signup with email :".$email. " ", FILE_APPEND);
		} else {
			file_put_contents("error/error.txt", "\r\n".date("Y-m-d H:i:s"). " Error occurred in sending email for a new user signup with email :".$email. " ", FILE_APPEND);
		}
	}
	
	function sendVerifyEmail($email, $name, $mobile, $address, $code, $advocateId) {
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->Host = 'mail.vakilbaba.com';
		$mail->SMTPSecure = 'tls';
		$mail->Port = 587;
		$mail->SMTPAuth = true;
		$mail->Username = 'admin@vakilbaba.com';
		$mail->Password = 'admin@123';

		$mail->From = 'admin@vakilbaba.com';
		$mail->FromName = 'vakilbaba Admin';
		$mail->AddAddress($email);
		$mail->Subject = 'Please Confirm your Email';
		$link = "http://localhost/vakilbaba/verify-email.php?verifyCode=".$code."&id=".$advocateId;
		
		$data = "\r\n Hi ".$name.", \r\n\r\nThere was recently a request to register your account. Please activate your account by following the link bellow:\r\n ".$link."\r\n\r\n Regards,\r\n Vakilbaba Admin";
		$mail->Body = $data;
		$mail->SMTPOptions = array(
			'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
			));
		
		if($mail->send()) {
			file_put_contents("error/error.txt", "\r\n".date("Y-m-d H:i:s"). " Verify Email successfully sent :".$email. " ", FILE_APPEND);
		} else {
			file_put_contents("error/error.txt", "\r\n".date("Y-m-d H:i:s"). " Error occurred in sending verify email for a new user signup with email :".$email. " ", FILE_APPEND);
		}
	}


?>
