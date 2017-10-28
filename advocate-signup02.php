<?php
include 'includes/header.php';
session_start();
try {
	$con = new PDO ("mysql:host=localhost;dbname=vakilbaba",'root','');
	if(isset($_POST['signup'])){
		$username = escape_string($_POST['username']);
		$experience = escape_string($_POST['experience']);
		$bankname = escape_string($_POST['bank']);
		$account = escape_string($_POST['account']);
		$ifc = escape_string($_POST['ifc']);
		$branch = escape_string($_POST['branch']);
		$consultant = escape_string($_POST['consultant']);
		$gender = escape_string($_POST['gender']);
		$email = escape_string($_POST['email']);
		$mobile = escape_string($_POST['mobile']);
		$language = escape_string($_POST['language']);
		$address = escape_string($_POST['address']);
		$pin = escape_string($_POST['pin']);
		$city = escape_string($_POST['city']);
		$state = escape_string($_POST['state']);
		$expertise = escape_string($_POST['expertise']);
		$court = escape_string($_POST['court']);
		$barcode = escape_string($_POST['barcode']);
		$telf = escape_string($_POST['telf']);
		$casf = escape_string($_POST['casef']);
		$password = escape_string($_POST['password']);
		$about = $_POST['about'];

		$insert = $con->prepare("INSERT INTO advocatedetails(AdvocateName,Experience,BankName,AccountNumber,IfcsCode,BranchName,ConsultantFee,Gender,Email,Mobile,Language,Address,Pin,City,State,Expertise,Court,Barcode,TelephoneConsultantFee,CaseFilingFee,Password,about)
				values(:username,:experience,:bankname,:account,:ifc,:branch,:consultant,:gender, :email,:mobile,:language,:address,:pin,:city,:state,:expertise,:court,:barcode, :telf,:casf,:password,:about)
				");
		$insert->bindParam (':username',$username);
		$insert->bindParam (':experience',$experience);
		$insert->bindParam (':bankname',$bankname);
		$insert->bindParam (':account',$account);
		$insert->bindParam (':ifc',$ifc);
		$insert->bindParam (':branch',$branch);
		$insert->bindParam (':consultant',$consultant);
		$insert->bindParam (':gender',$gender);
		$insert->bindParam (':email',$email);
		$insert->bindParam (':mobile',$mobile);
		$insert->bindParam (':language',$language);
		$insert->bindParam (':address',$address);
		$insert->bindParam (':pin',$pin);
		$insert->bindParam (':city',$city);
		$insert->bindParam (':state',$state);
		$insert->bindParam (':expertise',$expertise);
		$insert->bindParam (':court',$court);
		$insert->bindParam (':barcode',$barcode);
		$insert->bindParam (':telf',$telf);
		$insert->bindParam (':casf',$casf);
		$insert->bindParam (':password',$password);
		$insert->bindParam (':about',$about);
		//$insert->bindParam (':city',$city);
		$insert->execute();
	}elseif (isset($_POST['signin'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$select = $con->prepare("SELECT*FROM advocatedetails where Email='$username' and Password='$password'");
		$select->setFetchMode(PDO::FETCH_ASSOC);
		$select->execute();
		$data=$select->fetch();
		if($data['username']!=$username and $data['password']!=$password)
		{
			echo "Invalid username or Password";
		}
		elseif($data['username']==$username and $data['password']==$password)
		{
			$_SESSION['username']=$data['username'];
			$_SESSION['email']=$data['email'];
			$_SESSION['fname']=$data['fname'];
			$_SESSION['lname']=$data['lname'];
				
			header("location:profile.php");
		}
	}
}
catch (PDOException $e) {

	echo "Error: ". $e -> getMessage();
}
?>



<div style="width:500px ; float: left; height:600px;">
<div style="padding:85px;padding-right:200px;">
<style type = "text/css">
body {

background-size: cover;
}

.box {
width: 300px;
height: 230px;
background-color: gdba(0,0,0,0.5);
}


</style>
<div class ="box">
Don't have any login yet?
<h1>Register Here</h1>
<form method="post">
<input type="text" name="username" placeholder="your name" class="form-control" required/><br>
<input type="text" name="experience" placeholder="experience" class="form-control" required/>
 </br> </br>
<input type="text" name="bank" placeholder="your contact bankname"  class="form-control" required/> </br> </br>
<input type="text" name="account" placeholder="your account " class="form-control" required/><br>
<input type="text" name="ifc" placeholder="your ifc " class="form-control" required/>
 </br> </br>
<input type="text" name="branch" placeholder="your branch"  class="form-control" required/> </br> </br>
<input type="text" name="consultant" placeholder="your name" class="form-control" required/><br>
<input type="text" name="gender" placeholder="your gender" class="form-control" required/>
 </br> </br>
<input type="email" name="email" placeholder="your contact email"  class="form-control" required/> </br> </br>
<input type="text" name="mobile" placeholder="your mobile" class="form-control" required/><br>
<input type="text" name="language" placeholder="your language" class="form-control" required/>
 </br> </br>
<input type="text" name="address" placeholder="your address"  class="form-control" required/> </br> </br>
<input type="text" name="pin" placeholder="your pin" class="form-control" required/><br>
<input type="text" name="city" placeholder="your city" class="form-control" required/>
 </br> </br>
<input type="text" name="state" placeholder="your state"  class="form-control" required/> </br> </br>
<input type="text" name="expertise" placeholder="your expertise" class="form-control" required/><br>
<input type="text" name="court" placeholder="your court" class="form-control" required/>
 </br> </br>
<input type="text" name="barcode" placeholder="your barcode"  class="form-control" required/> </br> </br>
<input type="text" name="telf" placeholder="your telf" class="form-control" required/><br>
<input type="text" name="casef" placeholder="your email-id" class="form-control" required/>
 </br> </br>
<input type="password" name="password" placeholder="your password"  class="form-control" required/> </br> </br>
<input type="text" name="about" placeholder="about"  class="form-control" required/> </br> </br>
<input type="submit" name = "signup" Value = "Register">

</form>
</div>
</div>
</div>

<div style="width:500px ; float: right; height:600px;">
<div style="padding:85px;padding-right:200px;">
Already, have account?
<h1>Login Here</h1>
<form method="post">
<input type="text" name = "username" placeholder = "User Name"> </br> </br>
<input type="text" name = "password" placeholder = "********"> </br> </br>
<input type="submit" name = "signin" Value = "Login">
</form>
</div>
</div>
