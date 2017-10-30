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
	
	$output = array('status'=>'false','error'=>'');
	
	if (get_user_by_email($email)) {
		
		$output['error'] = 'Email address already exists !';
	
	} else {

		$sql="INSERT INTO advocatedetails(AdvocateName, Gender, Email, Mobile, Language, Address, Pin, City, State, Expertise, Experience, Court, Barcode, TelephoneConsultantFee,	ConsultantFee, CaseFilingFee, Password, About, image)VALUES( '{$name}', '{$gender}', '{$email}', '{$mobile}', '{$language}', '{$address}', '{$pin}', '{$city}', '{$state}', '{$expertise}', '{$experience}', '{$court}', '{$barcode}', '{$telephone}', '{$meeting}', '{$casefee}', '{$password}', '{$about}', '{$image}')";

		$result = mysqli_query($db, $sql);
		echo mysqli_error($db);
		// echo $sql;
		confirm($result);
		
		sendEmail($email, $name, $mobile, $address);

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
	
	$output = array('status'=>'false','error'=>'');
	
	if (get_customer_by_email($email)) {
		
		$output['error'] = 'Email address already exists !';
	
	} else {

		$sql="INSERT INTO customerdetails(Name, Email, Mobile, Address, City, Password)VALUES( '{$name}', '{$email}', '{$mobile}', '{$address}',  '{$city}', '{$password}')";

		$result = mysqli_query($db, $sql);
		echo mysqli_error($db);
		// echo $sql;
		confirm($result);
		
		sendEmail($email, $name, $mobile, $address);

		$output['status'] = 'success';
		$output['error'] = '';
	}

	echo json_encode($output);
}

	function sendEmail($email, $name, $mobile, $address) {
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
		$mail->Subject = 'New User Signup';
		
		$data = "\r\n A new user has signed up. Details of the user are :-\r\n\r\n Email: ".$email."\r\n Name: ".$name."\r\n Mobile No: ".$mobile."\r\n Address: ".$address."\r\n\r\n Regards,\r\n Vakilbaba Admin";
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


?>
