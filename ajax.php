<?php require_once('includes/my_config.php') ?>
<?php require_once('includes/functions.php') ?>
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

		$output['status'] = 'success';
		$output['error'] = '';
	}

	echo json_encode($output);
}
?>
