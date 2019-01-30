<?php

//db conect
$url="";

if(isset($_POST["email"])&&isset($_POST["psw"])){
//get to query and numbers of rows
	include ('../include/connect_mail_validate.php');

	$email = $_POST['email'];
	$pass = $_POST['psw'];
	$hash_pass = md5($pass);
	$ran = rand(0,1000);
	$hash_ran= md5($ran);


	
	$url=$_POST['ur'];
	//echo $url;
			require '../plugin-mail-master/3rdparty/PHPMailer/PHPMailerAutoload.php';

		$mail = new PHPMailer;

		$mail->isSMTP();                            // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                     // Enable SMTP authentication
		$mail->Username = 'your email';          // SMTP username
		$mail->Password = 'your email password'; // SMTP password
		$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
		$mail->Port =587;                          // TCP port to connect to

		$mail->setFrom('your email', 'header');
		$mail->addReplyTo('your email', 'header');
		$mail->addAddress($email);   // Add a recipient
		$mail->addCC('');
		$mail->addBCC('');

		$mail->isHTML(true);  // Set email format to HTML

		
		$link="localhost/stw_travel/check/validate_singup.php?email=".$email."&hash=".$hash_ran;
		$ht = "<html><head></head><body>
	<h2>STW TRAVELS</h2>
	<a href='".$link."' >SING UP</a>

	</body>
	</html>";
		$mail->Subject = 'Sing up STW TRAVELS';
		$mail->Body    = $ht;
		//echo ;
		if(!$mail->send()) {
			$error =$mail->ErrorInfo;
			//$url=$_POST['url'];
			$link2 = "Location:../".$url."?mail=no&error=".$error;
			header($link2);
		    //echo 'Message could not be sent.';
		    //echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
			$query = "INSERT into {$tbl_name} (email,password,onepass) VALUES ('{$email}','{$hash_pass}','{$hash_ran}')";
			$result = mysqli_query($con,$query);
			//$url=$_POST['url'];
			$link2 = "Location:../".$url."?mail=ok";
			header($link2);
		    //echo 'Message has been sent';
		    //echo "<br>".$email."<br>".$link;
		   // echo $ht;
		}

		
		//mail($email,"STW TRAVELS",$link);
	
	
}
else{
	$link2 = "Location:../".$url;
	header($link2);
}
?>
