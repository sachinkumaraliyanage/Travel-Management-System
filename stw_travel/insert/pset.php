<?php
if(isset($_POST["psw"])){
	include ('../include/connect_user.php');

	$email=$_POST['email'];
	//echo $email;
	$pass=$_POST["psw"];
	$hash=md5($pass);
	/*$sql = "SELECT uid FROM {$tbl_name} where email = '{$email}' and password ='{$hash_pass}'";
	#echo $sql;
	$resu_set= mysqli_query($con,$sql);
	//echo $resu_set;
	$count = mysqli_num_rows ( $resu_set );
	$data = mysqli_fetch_row($resu_set);*/
	
	$query = "UPDATE {$tbl_name} SET  password = '{$hash}' WHERE {$tbl_name}.email = '{$email}'";
	$result = mysqli_query($con,$query);
	if (isset($result)){

		//mysql_close($con);
		include ('../include/connect_passreset.php');
		 
		$query = "DELETE FROM {$tbl_name} WHERE email='{$email}'";
		$res = mysqli_query($con,$query);

		if(isset($res)){
			//echo $result;
			//echo $res;
			header("Location:../index.php?login=on");
		}

	}
	else{
		//echo "retry";
	}
}
?>