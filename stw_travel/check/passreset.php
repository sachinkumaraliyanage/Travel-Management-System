<?php

//db conect


if(isset($_POST["email"])){
//get to query and numbers of rows
	include ('../include/connect_passreset.php');

	$email = $_POST['email'];
	$ran = rand(0,1000);
	$hash_ran= md5($ran);


	
	
	//echo $url;
			require '../plugin-mail-master/3rdparty/PHPMailer/PHPMailerAutoload.php';

		$mail = new PHPMailer;

		$mail->isSMTP();                            // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                     // Enable SMTP authentication
		$mail->Username = 'lankanstwtravels@gmail.com';          // SMTP username
		$mail->Password = 'Stwtravel'; // SMTP password
		$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
		$mail->Port =587;                          // TCP port to connect to

		$mail->setFrom('lankanstwtravels@gmail.com', 'STW TRAVELS');
		$mail->addReplyTo('lankanstwtravels@gmail.com', 'STW TRAVELS');
		$mail->addAddress($email);   // Add a recipient
		$mail->addCC('');
		$mail->addBCC('');

		$mail->isHTML(true);  // Set email format to HTML

		
		$link="localhost/stw_travel/reset.php?email=".$email."&hash=".$hash_ran;
		$ht = "<html><head></head><body>
	<h2>STW TRAVELS</h2>
	<a href='".$link."' >Password Reset</a>

	</body>
	</html>";
		$mail->Subject = 'STW TRAVELS password reset';
		$mail->Body    = $ht;
		//echo ;
		if(!$mail->send()) {
			$error =$mail->ErrorInfo;
			//$url=$_POST['url'];
			$link2 = "Location:../index.php?mail=no&error=".$error;
			header($link2);
		    //echo 'Message could not be sent.';
		    //echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
			$query = "INSERT into {$tbl_name} (email,onepass) VALUES ('{$email}','{$hash_ran}')";
			$result = mysqli_query($con,$query);
			//$url=$_POST['url'];
			$link2 = "Location:../index.php?mail=ok";
			header($link2);
		    //echo 'Message has been sent';
		    //echo "<br>".$email."<br>".$link;
		   // echo $ht;
		}

		
		//mail($email,"STW TRAVELS",$link);
	
	
}
else{
	$link2 = "Location:../index.php";
	header($link2);
}
?>