<?php
if(isset($_POST["fname"])&&isset($_POST["lname"])){
	include ('../include/connect_user.php');

	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$uname=$_POST["uname"];
	$email=$_POST["email"];
	$pass=$_POST["pass"];
	$hash=md5($pass);
	$pno1=$_POST["pno1"];
	$pno2=$_POST["pno2"];
	$country=$_POST["country"];
	$ulevel=$_POST["ul"];
	$add=$_POST["add"];
	//echo $tbl_name;
	$query = "INSERT into {$tbl_name} (uname,email,password,fname,lname,pno1,pno2,country,address,ulavel) VALUES ('{$uname}','{$email}','{$hash}','{$fname}','{$lname}','{$pno1}','{$pno2}','{$country}','{$add}','{$ulevel}')";
	$result = mysqli_query($con,$query);
	if (isset($result)){

		//mysql_close($con);
		include ('../include/connect_mail_validate.php');
		 
		$query = "DELETE FROM {$tbl_name} WHERE email='{$email}'";
		$res = mysqli_query($con,$query);

		if(isset($res)){
			//echo $result;
			//echo $res;
			header("Location:../index.php?login=on");
		}

	}
	else{
		echo "retry";
	}
}
?>