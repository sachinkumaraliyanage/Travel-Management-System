<?php 

session_start();
 
?>
<?php
if(isset($_POST["edit"])||isset($_POST["delete"])){
	include ('../include/connect_user.php');
	$uid = $_POST["uid"];
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$uname=$_POST["uname"];
	$email=$_POST["email"];
	if (isset($_POST['psw'])){
		if(!($_POST['psw']==""||$_POST['psw']==null)){
			#echo "s     <u>".$_POST['psw']."</u>      q       <br>";
			$pass=$_POST["psw"];
		}
		else{
			#echo "string";
			$pass=$_POST["pass"];
		}
	}
	else{
		$pass=$_POST["pass"];
	}
	$hash=md5($pass);
	$pno1=$_POST["pno1"];
	$pno2=$_POST["pno2"];
	$country=$_POST["country"];
	$ulevel=$_POST["ul"];
	$add=$_POST["add"];
	$y=null;
	//echo $tbl_name;
	if(isset($_POST['edit'])){
		#echo "edit";
		$y="e";
		$query="UPDATE {$tbl_name} SET uname = '{$uname}', email = '{$email}', password = '{$hash}', fname = '{$fname}', lname = '{$lname}', pno1 = '{$pno1}', pno2 = '{$pno2}', country = '{$country}', address = '{$add}', ulavel = '{$ulevel}' WHERE {$tbl_name}.uid = $uid";

	}
	else if (isset($_POST['delete'])) {
		$y="d";
		$query="DELETE FROM {$tbl_name} WHERE {$tbl_name}.uid = $uid";
	}
	
	$result = mysqli_query($con,$query);
	if (isset($result)){
		echo "l";
		

		if ($y=="e"){
			echo "p";
			$link = "Location:../search_user2.php?edit=ok&id=".$uid;
			echo $link;
			header($link);
		}
		else if($y="d"){
			$link = "Location:../search_user.php?del=ok";
			header($link);
		}
		

	}
	else{
		$link = "Location:../search_user2.php?edit=no&id=".$uid;
		header($link);
	}
}

?>