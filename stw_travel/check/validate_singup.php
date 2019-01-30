<?php

//db conect

if(isset($_GET["email"])&&isset($_GET["hash"])){
//get to query and numbers of rows
	include ('../include/connect_mail_validate.php');

	$email = $_GET['email'];
	$hash_pass = $_GET['hash'];
	

	$sql = "SELECT * from {$tbl_name} where email = '$email' and onepass ='$hash_pass'";
	$resu_set= mysqli_query($con,$sql);
	$count = mysqli_num_rows ( $resu_set );
	$data = mysqli_fetch_row($resu_set);
	$pass=$data[1];
	$link="Location:../singup.php?email=".$email."&pass=".$pass;


	if($count==1){
		
		header($link);
	
	
	}
	else{
		header("Location:../index.php?sing=error");

	}
}
else{
	header("Location:../index.php");
}
mysql_close($con);
?>