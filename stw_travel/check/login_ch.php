<?php 

session_start();
$_SESSION['uname'] = null;
$_SESSION['pass'] = null;
$_SESSION['hash_pass'] = null;
$_SESSION['ulavel'] = null ;
$_SESSION['uid'] = null;

?>

<?php
if(isset($_POST["uname"])&&isset($_POST["pass"])){
	include ('../include/connect_user.php');

	$name = $_POST['uname'];
	$pass = $_POST['pass'];
	#echo $name."<br>";
	#echo $pass."<br>";
	$hash_pass = md5($pass);
	#echo $hash_pass."<br>";
	$sql = "SELECT uname,password,ulavel,uid FROM {$tbl_name} where uname = '{$name}' and password ='{$hash_pass}'";
	#echo $sql;
	$resu_set= mysqli_query($con,$sql);
	//echo $resu_set;
	$count = mysqli_num_rows ( $resu_set );
	$data = mysqli_fetch_row($resu_set);
	/*echo "<pre>";
	print_r($data);
	echo "</pre>";*/
	$url=$_POST['url'];
	//echo $url;
	$link="";
	if($count==1){
		$_SESSION['uname'] = $name;
		$_SESSION['hash_pass'] = $hash_pass;
		$_SESSION['pass'] = $pass;
		$_SESSION['ulavel'] = $data[2];
		$_SESSION['uid'] = $data[3];
		$link = "Location:../".$url;
		header($link);
	}
	else{
		$link = "Location:../".$url."?log=error";
		header($link);
	}

}
else{
	$link = "Location:../".$url."?log=error";
	header($link);
}

?>